<header id="header">
    <nav class="mb-1 navbar fixed-top navbar-expand-lg navbar-dark secondary-color lighten-1">
        <a class="navbar-brand" href="Home.php?link=Song" style="padding: 0px 40px 0px 100px; font-size:25px">
            <img src="./img/logo.png" height="40"  class="d-inline-block align-top"alt="logo">  Musika
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto" style="font-size: 18px;">
                <li class="nav-item active">
                    <a class="nav-link" href="Home.php?link=Song" style="padding-right:20px;"id="song" name="Song">Song</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Home.php?link=Genre" style="padding-right:20px;" id="genre" name="Genre">Genre</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Home.php?link=Artist" style="padding-right:20px;" id="artist" name="Artist">Artist</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons" style="padding-right:100px;">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light " href="Cart.php">
                        <h5 class="cart">
                            <i class="fas fa-shopping-cart"></i> Cart
                            <?php
                                $sql = "SELECT COUNT(customerID) FROM cart WHERE customerID='$id'";
                                $result = mysqli_query($con,$sql);
                                $row = mysqli_fetch_array($result);
                                $count = $row['COUNT(customerID)'] ;
                                echo "<span id=\"cart_count\" class=\" bg-light\" >$count</span>";
                            ?>
                        </h5>
                    </a>
                </li>
                <li class="nav-item avatar dropdown">
                    <a class="nav-link " id="userDropdown" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false" style="font-size: 20px;">
                        <i class="fas fa-user"></i>
                        <?php $sql="SELECT fname FROM info WHERE customerID = '$id'";
                            $result = mysqli_query($con,$sql);
                            $row = mysqli_fetch_array($result);
                            echo $row['fname'];
                        ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="Home.php?link=Logout">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
