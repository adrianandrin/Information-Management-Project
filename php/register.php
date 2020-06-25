<div class="card-body">
    <div class="d-flex justify-content-center" style="    font-size: 50px;font-weight: 500;color: purple;">
        <img src="./img/logo.png"class="d-inline-block align-top"style="width:auto; height:70px;padding-right:10px;"alt="logo">Musika
    </div>
    <hr>
    <h3 class="d-flex justify-content-center" style="color: purple;">SIGN-UP</h3>
    <form action="signUp.php" method="POST">
        <div class="form-group sign">
            <?php
                if(isset($_GET['fname'])){
                    $fname = $_GET['fname'];
                    echo '<input type="text" class="forminput test form-control" name="fname"id="inputFName" value="'.$fname.'"required> ';
                    echo '<span>First Name</span>';
                }
                else{
                    echo '<input type="text" class="forminput form-control" name="fname"id="inputFName" required>';
                    echo '<span>First Name</span>';
                }
                ?>
        </div>
        <div class="form-group sign">
            <?php
                if(isset($_GET['lname'])){
                    $lname = $_GET['lname'];
                    echo '<input type="text" class="forminput form-control"  name="lname" id="inputLName" value="'.$lname.'" required>';
                    echo '<span>Last Name</span>';
                }
                else{
                    echo '<input type="text" class="forminput form-control"  name="lname" id="inputLName" required>';
                    echo '<span>Last Name</span>';
                }
            ?>
        </div>
        <div class="form-group sign">
            <?php
                if(isset($_GET['address'])){
                    $address = $_GET['address'];
                    echo '<input type="text" class="forminput form-control"  name="address" id="inputAddress" value="'.$address.'" required>';
                    echo '<span>Address</span>';
                }
                else{
                    echo '<input type="text" class="forminput form-control"  name="address" id="inputAddress" required>';
                    echo '<span>Address</span>';
                }
            ?>
        </div>
        <div class="form-group sign">
            <?php
                if(isset($_GET['contact'])){
                    $contact = $_GET['contact'];
                    echo '<input type="text" class="forminput form-control"  name="contact" id="inputContact" value="'.$contact.'" required>';
                    echo '<span>Contact</span>';
                }
                else{
                    echo '<input type="text" class="forminput form-control"  name="contact" id="inputContact" required>';
                    echo '<span>Contact</span>';
                }
            ?>
        </div>
        <div class="form-group sign">
            <?php
                if(isset($_GET['user'])){
                    $user = $_GET['user'];
                    echo '<input type="text" class="forminput form-control" name="user"id="inputUser" value="'.$user.'" required>';
                    echo '<span>Username</span>';
                }
                else{
                    echo '<input type="text" class="forminput form-control" name="user"id="inputUser" required>';
                    echo '<span>Username</span>';
                }
            ?>
        </div>
        <div class="form-group sign">
            <input type="text" class="forminput form-control"  name="email"id="inputEmail" required>
            <span>Email</span>
        </div>
        <div class="form-group sign">
            <input type="password" class="forminput form-control"  name="pass"id="inputPassword"required>
            <span>Password</span>
        </div>
        <div>
            <a href='?link=Login' style='float:left;position: absolute;bottom:35px;padding-left:30px;color: purple;'>Already Have An Account?</a>
            <button type="submit" name="submit" class="btn btn-secondary btnsubmit" style="margin-top:50px; float:right;">Sign Up</button>
        </div>
    </form>
    <?php
        if(!isset($_GET['signup'])){
            exit();
        } 
        else{
            $signupCheck = $_GET['signup'];
            if($signupCheck == "incorrectemail"){
                echo '<p style="bottom:65px;position:absolute;padding-left:90px; color: red;"> Incorrect Email </p>';
            }
            elseif($signupCheck == "exist"){
                echo '<p style="bottom:65px;position:absolute;padding-left:90px; color: red;"> Account already Existed </p>';
            }
        }
    ?>
</div>