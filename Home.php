<?php
    session_start();
    $con = mysqli_connect("localhost","root","","musika0.1") or die(mysqli_connect_error());
    require_once('./php/display.php');
    $id= $_SESSION['id'];
    if(isset($_POST['add'])){
        $songID = $_POST['product_id'];
        $sql = "SELECT COUNT(*) FROM cart WHERE songID='$songID' AND customerID='$id'";
        $res = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($res);
        if($row[0]==0){
            $sql="INSERT INTO cart (customerID,songID,quantity,details) VALUES('$id','$songID',1,'Now')";
            mysqli_query($con,$sql);
            echo "<script>alert('Product is added in the cart..!')</script>";
            echo "<script>window.location = 'Home.php'</script>";
        }
        else{
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'Home.php'</script>";
        }
        unset($songID);

    }
    $link='0';
    if(!empty($_GET['link']))
        $link = $_GET['link'];
    if($link == 'Logout'){
        unset($_SESSION['id']);
        session_destroy();
        header("Location: Login.php");
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
            /* NAVBAR */
            #cart_count{
                text-align: center;
                padding: 0 0.9rem 0.1rem 0.9rem;
                border-radius: 3rem;
                color:#50409A;
            }
            .shopping-cart{
                padding: 3% 0;
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
        </style>
    </head>
    <body>
        <?php require_once ("php/header.php"); ?>
        <div style="padding-top:100px"></div>
        <?php
            if(!empty($_GET['link']))
                $link = $_GET['link'];
            if($link == 'Song' || $link == '0'){
                require_once ("php/carousel.php");
                echo'<div class="d-flex justify-content-center"><h1 style="font-size:70px; padding-top:50px;"><strong style="font-weight:800;">Songs</strong></h1></div>';
                echo'<div id="Songs">';
                echo'   <div id="items" class="container-fluid" style="padding: 10px 100px 0px 100px;">';
                echo'       <div class="row">';
                $sql = "SELECT s.songID, s.songName, s.songPrice, s.songImg, artist.artistName FROM song as s JOIN artist ON s.artistID = artist.artistID";
                $res = $con->query($sql);
                while($row = $res->fetch_assoc()){
                    item($row['songName'],$row['artistName'],$row['songPrice'],$row['songImg'],$row['songID']);
                }
                echo'       </div>';
                echo'   </div>';
                echo'</div>';
            }
            else if($link == 'Genre'){
                echo'<div class="d-flex justify-content-center"><h1 style="font-size:70px;"><strong style="font-weight:800;">Genre</strong></h1></div>';
                echo'<div id="Genre">';
                echo'   <div id="items" class="container-fluid" style="padding: 10px 100px 0px 100px;">';
                echo'       <div class="row">';
                $sql ="SELECT g.genreID, g.genre, g.genreImg FROM genre as g";
                $res = $con->query($sql);
                while($row = $res->fetch_assoc()){
                    genre($row['genreID'],$row['genre'],$row['genreImg']);
                }
                echo'       </div>';
                echo'   </div>';
                echo'</div>';
            }
            else if($link == 'Artist'){
                echo'<div class="d-flex justify-content-center"><h1 style="font-size:70px;"><strong style="font-weight:800;">Artist</strong></h1></div>';
                echo'<div id="Genre">';
                echo'   <div id="items" class="container-fluid" style="padding: 10px 100px 0px 100px;">';
                echo'       <div class="row">';
                $sql ="SELECT artistID, artistName, artistImg FROM artist";
                $res = $con->query($sql);
                while($row = $res->fetch_assoc()){
                    artist($row['artistID'],$row['artistName'],$row['artistImg']);
                }
                echo'       </div>';
                echo'   </div>';
                echo'</div>';
            } 
        ?>

        
        

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script >
            $(document).ready(function(){
                $("#song").click(function(){
                    $('#genre').removeClass('active');
                    $('#song').addClass('active');
                });
                $("#genre").click(function(){
                    $('box').removeClass('active');
                    $('#genre').addClass('active');
                });
            });
        </script>
    </body>
</html>