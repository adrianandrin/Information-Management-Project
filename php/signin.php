<div class="card-body" style="padding: 2rem">
    <div class="d-flex justify-content-center" style="    font-size: 50px;font-weight: 500;color: purple;">
    <img src="./img/logo.png"class="d-inline-block align-top"style="width:auto; height:70px;padding-right:10px;"alt="logo">Musika
    </div>
    <hr>
    <h5 class="">Log-in</h5>
    <form action="signin.php" method="POST">
        <div class="form-group log">
            <?php
                if(isset($_GET['user'])){
                    $user = $_GET['user'];
                    echo '<input type="text" class="forminput form-control" name="user" id="inputEmail" placeholder="Username" value="'.$user.'" required> ';
                    echo '<span class="oi oi-envelope-closed"></span>';
                }
                else{
                    echo '<input type="text" class="forminput form-control" name="user" id="inputEmail" placeholder="Username" required>';
                    echo '<span class="oi oi-envelope-closed"></span>';
                }
            ?>
        </div>
        <div class="form-group log">
            <input type="password" class="forminput form-control" name="pass"id="inputPassword" placeholder="Password" required>
            <span class="oi oi-key"></span> 
        </div>
        <br/>
        <br/>
        <div>
            <a href='?link=Register' style='float:left;position: absolute;bottom:35px; color:purple;'>No Account?</a>
            <button type="submit" name="submit"class="btn btn-secondary btnsubmit" style="right:25px;bottom: 15px; position:absolute;">Login</button>
        </div>

                        
    </form>
    <?php 
        if(!isset($_GET['login'])){
            exit();
        }
        else{
            $loginCheck = $_GET['login'];
            if($loginCheck == "incorrectpass"){
                echo '<p class="error"> Incorrect Password!</p>';
            }
            elseif($loginCheck == "notregistered"){
                echo '<p class="error">Account is not Registered!</p>';
            }
            elseif($loginCheck == "empty"){
                echo '<p class="error" > Fill in All Fields </p>';
            }
        }
    ?>
</div>