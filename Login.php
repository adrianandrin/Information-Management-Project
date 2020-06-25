<?php
    session_start();
    $con = mysqli_connect("localhost","root","","musika0.1") or die(mysqli_connect_error());
    require_once('./php/display.php');

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">
        <style>
            body {
                position: relative;
                width: 100%;
                height: 100vh;
                min-height: 35rem;
                background: url("./img/bg2.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-size: cover;
            }

            .log input{
                padding-left: 40px;
            }
            .log{
                position: relative;
            }
            .log span{
                position: absolute;
                left: 8px;
                top: 2px;
                padding: 9px 8px;
                color:grey;
                transition: .3s;
            }
            .log input:focus + span,
            .log input:valid + span{
                color: purple;
            }
            form .sign{
                margin:auto;
                margin-top: 25px;
                width: 350px;
                position: relative;
            }
            form .sign input{
                height: 50px;
                width: 100%;
                padding: 0 20px;
                box-sizing: border-box;
                font-size: 18px;
                outline: none;
            }
            form .sign span{
                position: absolute;
                top: 12px;
                left: 20px;
                padding: 0 ;
                transition: 0.3s;
                pointer-events: none;
                background: #fff;
                text-transform: uppercase;
            }

            form .sign input:focus + span,
            form .sign input:valid + span{
                font-size: 13px !important;
                top: -12px;
                left: 12px;
                font-size: 10px;
                padding: 2px 4px;
                border: 1px solid rgb(255, 255, 255);
                border-radius: 5px;
                background: purple;
                color: white;
            }
            .form-check-label{
                margin-top: 20px;
            }
            .error{
                bottom: 50px;
                position: absolute; 
                padding-left:10px; color: red;
            }
        </style>
    </head>
    <body>
        <div class="container"style="padding-top:100px; ">
            <div class="row justify-content-center">
                <div class="card w-50" style="border-radius: 10px;">
                    <?php
                    $link='0';
                    if(!empty($_GET['link']))
                        $link = $_GET['link'];
                    if($link == 'Login' || $link == '0'){
                        require_once ("php/signin.php");
                    }
                    else if($link=='Register'){
                        require_once ("php/register.php");
                    }
                    ?>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
