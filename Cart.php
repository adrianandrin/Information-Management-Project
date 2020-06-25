<?php
    session_start();
    $id= $_SESSION['id'];
    $con = mysqli_connect("localhost","root","","musika0.1") or die(mysqli_connect_error());
    require_once('./php/display.php');
    
    $link = '0';
    if(!empty($_GET['link']))
        $link = $_GET['link'];
    if($link == 'Logout'){
        unset($_SESSION['id']);
        session_destroy();
        header("Location: Login.php");
    }
    if (isset($_POST['remove'])){
        $songID = $_POST['product_id'];
        $sql="DELETE FROM cart WHERE customerID ='$id' AND songID = '$songID'";
        mysqli_query($con,$sql);
    }
    if (isset($_POST['save'])){
        $songID = $_POST['product_id'];
        $sql="UPDATE cart SET customerID = '$id', songID = '$songID', quantity = quantity, details ='Later' WHERE songID = '$songID' AND customerID ='$id'";
        mysqli_query($con,$sql);
    }
    if (isset($_POST['add'])){
        $songID = $_POST['product_id'];
        $sql="UPDATE cart SET customerID = '$id', songID = '$songID', quantity = quantity, details ='Now' WHERE songID = '$songID' AND customerID ='$id'";
        mysqli_query($con,$sql);
    }
    if (isset($_POST['plus'])){
        $songID = $_POST['product_id'];
        $sql="SELECT quantity FROM cart WHERE customerID='$id' AND songID='$songID'";
        $res = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($res);
        $quantity = (int) $row['quantity'] + 1;
        $sql="UPDATE cart SET customerID = '$id', songID = '$songID', quantity = '$quantity', details = details WHERE songID = '$songID' AND customerID ='$id'";
        mysqli_query($con,$sql);
    }
    if (isset($_POST['minus'])){
        $songID = $_POST['product_id'];
        $sql="SELECT quantity FROM cart WHERE customerID='$id' AND songID='$songID'";
        $res = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($res);
        $quantity = (int) $row['quantity'] - 1;
        if($quantity == 0){
            $sql="DELETE FROM cart WHERE customerID ='$id' AND songID = '$songID'";
            mysqli_query($con,$sql);
        }
        else{
            $sql="UPDATE cart SET customerID = '$id', songID = '$songID', quantity = '$quantity', details = details WHERE songID = '$songID' AND customerID ='$id'";
            mysqli_query($con,$sql);
        }
    }
    if (isset($_POST['checkout'])){
        $sql = "SELECT songID FROM cart WHERE customerID='$id' && details = 'Now'";
        $res = $con->query($sql);
        while($row = $res->fetch_assoc()){
            $songID = $row['songID'];
            $sqlDel = "DELETE FROM cart WHERE customerID ='$id' AND songID ='$songID'";
            mysqli_query($con,$sqlDel);
        }
        echo "<script>alert('Product purchased...!')</script>";
        echo "<script>window.location = 'Home.php'</script>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Musika</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">
        
        <style>
            #cart_count{
                text-align: center;
                padding: 0 0.9rem 0.1rem 0.9rem;
                border-radius: 3rem;
                color:#50409A;
            }
            .cart-items + .cart-items{
                padding: 2% 0;
            }
            .price-details h6{
                padding: 3% 2%;
            }
            .navbar.navbar-dark .navbar-nav .nav-item.active>.nav-link {
                background-color: transparent;
            }
            .quantity{
                padding: 8px;
            }
        </style>
    </head>
    <body>
        <?php require_once ("php/header.php"); ?>
        <div class="container-fluid" style="padding-top: 70px">
            <div class="row px-5">
                <div class="col-md-7">
                    <div class="shopping-cart">
                        <h4>My Cart</h4>
                        <hr>
                        <?php
                        $total = 0;
                        $sql = "SELECT COUNT(details) FROM cart WHERE customerID='$id' AND details='Now'";
                        $res = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($res);
                        $count = $row['COUNT(details)'];
                        if($count > 0){
                            $sql = "SELECT s.songID, s.songName, s.songPrice, s.songImg, cart.details,cart.quantity FROM song as s JOIN cart ON cart.songID = s.songID AND cart.customerID = '$id' AND cart.details = 'Now'";
                            $res = $con->query($sql);
                            while($row = $res->fetch_assoc()){
                                cartNow($row['songName'], $row['songImg'],$row['songPrice'], $row['songID'],$row['quantity']);
                                $total = $total + ((int)$row['songPrice'] * (int)$row['quantity']);
                            }

                        }else{
                            echo "<h5 style='text-align:center;'>Cart is Empty</h5>";
                        }
                        ?>
                    </div>
                    <div class="save-for-later" style="padding: 50px opx">
                        <h4 style="padding-top: 50px;">Save For Later</h4>
                        <hr>
                        <?php
                        $sql = "SELECT COUNT(details) FROM cart WHERE customerID='$id' AND details='Later'";
                        $res = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($res);
                        $count = $row['COUNT(details)'];
                        if($count > 0){
                            $sql = "SELECT s.songID, s.songName, s.songPrice, s.songImg, cart.details,cart.quantity FROM song as s JOIN cart ON cart.songID = s.songID AND cart.customerID = '$id' AND cart.details = 'Later'";
                            $res = $con->query($sql);
                            while($row = $res->fetch_assoc()){
                                cartLater($row['songName'], $row['songImg'],$row['songPrice'], $row['songID'],$row['quantity']);
                            }

                        }else{
                            echo "<h5 style='text-align:center;'>Save For Later is Empty</h5>";
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
                    <div class="pt-4">
                        <h6>PRICE DETAILS</h6>
                        <hr>
                        <div class="row price-details">
                            <div class="col-md-6">
                                <?php
                                    $sql = "SELECT COUNT(customerID) FROM cart WHERE customerID='$id' AND details='Now'";
                                    $result = mysqli_query($con,$sql);
                                    $row = mysqli_fetch_array($result);
                                    $count = $row['COUNT(customerID)'];
                                    echo"<h6>Price ($count items)</h6>";
                                ?>
                                <h6>Delivery Charges</h6>
                                <hr>
                                <h6>Amount Payable</h6>
                            </div>
                            <div class="col-md-6">
                                <h6>$<?php echo $total;?></h6>
                                <h6 class="text-success">FREE</h6>
                                <hr>
                                <h6>$<?php echo $total;?></h6>
                            </div>
                        </div>
                    </div>
                    <button type="submit" style="float:right; font-size:15px;"class="btn btn-outline-primary my-4 mx-l" data-toggle="modal" data-target="#checkout">Checkout</button>
                </div>
            </div>
        </div>

        <div class="modal fade" id="checkout" tabindex="-1" role="dialog" aria-labelledby="checkout"aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1>Checkout</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <h6>INFO DETAILS</h6>
                        <hr>
                        <div class="row price-details">
                            <div class="col-md-6">
                                <h6>Name:</h6>
                                <h6>Address:</h6>
                                <h6>Contact:</h6>
                            </div>
                            <div class="col-md-6">
                                <?php
                                    $sql="SELECT * FROM info WHERE customerID='$id'";
                                    $result = mysqli_query($con,$sql);
                                    $row = mysqli_fetch_array($result);
                                    $fname = $row['fname'];
                                    $lname = $row['lname'];
                                    $address = $row['address'];
                                    $contact = $row['contact'];
                                    echo"<h6>$fname, $lname</h6>";
                                    echo"<h6>$address</h6>";
                                    echo"<h6>$contact</h6>";
                                ?>
                            </div>
                        </div>
                        <hr>
                        <h6>PRICE DETAILS</h6>
                        <hr>
                        <div class="row price-details">
                            <div class="col-md-6">
                                <?php
                                    $sql = "SELECT COUNT(customerID) FROM cart WHERE customerID='$id' AND details='Now'";
                                    $result = mysqli_query($con,$sql);
                                    $row = mysqli_fetch_array($result);
                                    $count = $row['COUNT(customerID)'];
                                    echo"<h6>Price ($count items)</h6>";
                                ?>
                                <h6>Delivery Charges</h6>
                                <h6>Payment</h6>
                                <hr>
                                <h6>Amount Payable</h6>
                            </div>
                            <div class="col-md-6">
                                <h6>P<?php echo $total;?></h6>
                                <h6 class="text-success">FREE</h6>
                                <h6>Cash On Delivery</h6>
                                <hr>
                                <h6>$<?php echo $total;?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <form action="Cart.php" method="POST">
                            <button type="submit" style="float:right;"class="btn btn-outline-primary " name="checkout">Checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>

