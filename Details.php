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
        }
        else{
            echo "<script>alert('Product is already added in the cart..!')</script>";
        }
        unset($songID);
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
        .emp-profile{
            padding: 3%;
            margin-top: 5%;
            border-radius: 0.5rem;
            background: #fff;
        }
        .profile-img{
            text-align: center;
        }
        .profile-img img{
            width: 100%;
            height: 100%;
        }
        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 70%;
            border: none;
            border-radius: 0;
            font-size: 15px;
            background: #212529b8;
        }
        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }
        .profile-head{
            padding-top: 30px;
        }
        </style>
    </head>
    <body>
    <?php require_once ("php/header.php"); ?>

        <?php
            if(isset($_GET['show'])){
                $show = $_GET['show'];
                if($show == "song"){
                    $songID = $_GET['songID'];
                    $sql="SELECT s.songID, s.songName, s.songPrice, s.songImg, artist.artistName, artist.artistBio, artist.artistID, genre.genre FROM song as s INNER JOIN artist ON s.artistID = artist.artistID INNER JOIN genre ON s.genreID = genre.genreID WHERE s.songID = '$songID'";
                    $res = mysqli_query($con,$sql);
                    $row = mysqli_fetch_array($res);
                    $artistID = $row['artistID'];
                    echo'
                        <div class="container emp-profile">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="profile-img">
                                        <img src="'.$row['songImg'].'" alt=""/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="profile-head">
                                        <h2 style="color:purple;"><strong>'.$row['songName'].'</strong></h2>
                                        <h6>Artist: <strong>'.$row['artistName'].'</strong></h6>
                                        <h6>Genre: <strong>'.$row['genre'].'</strong></h6>
                                        <p>'.$row['artistBio'].'</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <form method="POST">
                                        <button type="submit" style="float:right;font-size:15px;"class="btn btn-secondary rounded my-3 mx-l"  name="add"> $ '.$row['songPrice'].'</button>
                                        <input type="hidden" name="product_id" value="'.$songID.'">
                                    </from>
                                </div>
                            </div>
                        </div>
                        <hr style="height:1px;"/>
                        <h4 style="padding-left: 50px;padding-top:50px">Music by '.$row['artistName'].'</h4><br>
                        ';
                    echo'<div id="items" class="container-fluid" style="padding: 0px 100px 0px 100px;">';
                    echo'   <div class="row">';
                    $sql = "SELECT s.songID, s.songName, s.songPrice, s.songImg, artist.artistName FROM song as s JOIN artist ON s.artistID = artist.artistID WHERE s.artistID = '$artistID' AND s.songID != '$songID'";
                    $res = $con->query($sql);
                    while($row = $res->fetch_assoc()){
                        detailitem($row['songName'],$row['artistName'],$row['songPrice'],$row['songImg'],$row['songID']);
                    }
                    echo'   </div>';
                    echo'</div>';
                }
                else if($show == "genre"){
                    $genreID = $_GET['genreID'];
                    $sql = "SELECT genre FROM genre WHERE genreID = '$genreID'";
                    $res = mysqli_query($con,$sql);
                    $row = mysqli_fetch_array($res);
                    $genreName = $row['genre'];
                    echo' <h1 style="padding-left: 50px;padding-top:100px"><strong>'.$genreName.'</strong></h1>';
                    echo'<hr style="height:1px;"/>';
                    echo'<div id="items" class="container-fluid" style="padding: 10px 100px 0px 100px;">';
                    echo'   <div class="row">';
                    $sql = "SELECT s.songID, s.songName, s.songPrice, s.songImg, artist.artistName FROM song as s JOIN artist ON s.artistID = artist.artistID WHERE s.genreID = '$genreID'";
                    $res = $con->query($sql);
                    while($row = $res->fetch_assoc()){
                        item($row['songName'],$row['artistName'],$row['songPrice'],$row['songImg'],$row['songID']);
                    }
                    echo'   </div>';
                    echo'</div>';
                }
                else if($show == "artist"){
                    $artistID = $_GET['artistID'];
                    $sql="SELECT * FROM artist WHERE artistID = '$artistID'";
                    $res = mysqli_query($con,$sql);
                    $row = mysqli_fetch_array($res);
                    echo'
                        <div class="container emp-profile">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="profile-img">
                                        <img src="'.$row['artistImg'].'" alt=""/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="profile-head">
                                        <h2><strong>'.$row['artistName'].'</strong></h2>
                                        <p>'.$row['artistBio'].'</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="height:1px;"/>
                        <h4 style="padding-left: 50px;padding-top:50px">Music by '.$row['artistName'].'</h4>
                    ';
                    echo'<div id="items" class="container-fluid" style="padding: 10px 100px 0px 100px;">';
                    echo'   <div class="row">';
                    $sql = "SELECT s.songID, s.songName, s.songPrice, s.songImg, artist.artistName FROM song as s JOIN artist ON s.artistID = artist.artistID WHERE s.artistID = '$artistID'";
                    $res = $con->query($sql);
                    while($row = $res->fetch_assoc()){
                        item($row['songName'],$row['artistName'],$row['songPrice'],$row['songImg'],$row['songID']);
                    }
                    echo'   </div>';
                    echo'</div>';
                }
            }
            
        ?>

        
        

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>