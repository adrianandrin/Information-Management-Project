<?php

function item($productname,$productartist, $productprice, $productimg, $productid){
    $element = "
    <div class=\"col-md-4 col-sm-auto single my-3 my-md-0\" style=\"padding:50px 15px;\">
        <form action=\"\" method=\"post\">
            <div class=\"card shadow\">
                <div>
                    <a href=\"Details.php?show=song&songID=$productid\"><img src=\"$productimg\" class=\"img-fluid card-img-top img-responsive\"style=\"width: 100%;height: 25vw;object-fit: cover;\"></a>
                </div>
                <div class=\"card-body\">
                    <a href=\"Details.php?show=song&songID=$productid\"><h4 class=\"card-title\" style=\"color:purple;\"><strong>$productname</strong></h4></a>
                    <h6 class=\"card-title\">$productartist</h6>
                    <h5> <span class=\"price\">$ $productprice</span></h5>
                    <button type=\"submit\" style=\"float:right;\"class=\"btn btn-secondary my-3 mx-l\"  name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                    <input type='hidden' name='product_id' value='$productid'>
                </div>
            </div>
        </form>
    </div>
    ";
    echo $element;
}
function detailitem($productname,$productartist, $productprice, $productimg, $productid){
    $element = "
    <div class=\"col-md-3 col-sm-auto single my-3 my-md-0\" style=\"padding:50px 15px;\">
        <form action=\"\" method=\"post\">
            <div class=\"card shadow\">
                <div>
                    <a href=\"Details.php?show=song&songID=$productid\"><img src=\"$productimg\" class=\"img-fluid card-img-top img-responsive\"style=\"width: 100%;height: 17vw;object-fit: cover;\"></a>
                </div>
                <div class=\"card-body\">
                    <a href=\"Details.php?show=song&songID=$productid\"><h5 class=\"card-title\" style=\"color:purple;\"><strong>$productname</strong></h5></a>
                    <h6 class=\"card-title\">$productartist</h6>
                    <h5> <span class=\"price\">$ $productprice</span></h5>
                    <button type=\"submit\" style=\"float:right;\"class=\"btn btn-secondary my-3 mx-l\"  name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                    <input type='hidden' name='product_id' value='$productid'>
                </div>
            </div>
        </form>
    </div>
    ";
    echo $element;
}

function cartNow($productname, $productimg, $productprice, $productid,$productquantity){
    $element="
        <form action=\"cart.php\" method=\"POST\" class=\"cart-items\">
            <div class=\"border rounded\">
                <div class=\"row bg-white\">
                    <div class=\"col-md-3 pl-0\">
                        <a href=\"Details.php?show=song&songID=$productid\"><img src=\"$productimg\" class=\"img-fluid img-responsive\" style=\"padding-top:6px; padding-left: 20px;height:145px\"></a>
                    </div>
                    <div class=\"col-md-6\" style=\"padding-bottom: 10px;\">
                        <a href=\"Details.php?show=song&songID=$productid\" style=\"text-decoration: none;color:black;\"><h5 class=\"pt-2\" >$productname</h5></a>
                        <small class=\"text-secondary\">Seller: Musika Inc.</small>
                        <h5 class=\"pt-2\">$ $productprice</h5>
                        <button type=\"submit\" class=\"btn btn-warning\" name=\"save\">Save for Later</button>
                        <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                        <input type='hidden' name='product_id' value='$productid'>
                    </div>
                    <div class=\"col-md-3 py-5\">
                        <div>
                            <button type=\"submit\" class=\"btn-light border rounded-circle quantity \" name=\"minus\" ><i class=\"fas fa-minus\"></i></button>
                            <input type=\"text\" value='$productquantity' class=\"form-control w-25 d-inline\">
                            <button type=\"submit\" class=\"bg-light border rounded-circle quantity\" name=\"plus\"><i class=\"fas fa-plus\"></i></button> 
                            <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
    echo $element;
}
function cartLater($productname, $productimg, $productprice, $productid, $productquantity){
    $element="
        <form action=\"cart.php\" method=\"POST\" class=\"cart-items\">
            <div class=\"border rounded\">
                <div class=\"row bg-white\">
                    <div class=\"col-md-3 pl-0\">
                        <a href=\"Details.php?show=song&songID=$productid\"><img src=\"$productimg\" class=\"img-fluid img-responsive\" style=\"padding-top:6px; padding-left: 20px;height:145px\"></a>
                    </div>
                    <div class=\"col-md-6\" style=\"padding-bottom: 10px;\">
                        <a href=\"Details.php?show=song&songID=$productid\" style=\"text-decoration: none;color:black;\"><h5 class=\"pt-2\"> $productname</h5></a>
                        <small class=\"text-secondary\">Seller: Musika Inc.</small>
                        <h5 class=\"pt-2\">$ $productprice</h5>
                        <button type=\"submit\" class=\"btn btn-warning \" name=\"add\">Add To Cart</button>
                        <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                        <input type='hidden' name='product_id' value='$productid'>
                    </div>
                </div>
            </div>
        </form>
    ";
    echo $element;
}

function genre($genreID,$genreName,$genreImg){
    $element="
    
    <div class=\"col-md-3 col-sm-auto single my-3 my-md-0\" style=\"padding:50px 15px;border-radius:20px;\">
        <div class=\"view overlay zoom\">
            <a href=\"Details.php?show=genre&genreID=$genreID\">
                <img src=\"$genreImg\" class=\"img-fluid \">
                <div class=\"mask flex-center rgba-purple-strong\">
                    <h1 class=\"white-text\" style=\"font-weight: 500;\">$genreName</h1>
                </div>
            </a>
        </div>
    </div>
    
    ";
    echo $element;
}
function artist($artistID,$artistName, $artistImg){
    $element = "
    <div class=\"col-md-4 col-sm-auto single my-3 my-md-0\" style=\"padding:50px 15px;\">
        <div class=\"view overlay zoom\">
            <a href=\"Details.php?show=artist&artistID=$artistID\">
                <img src=\"$artistImg\" class=\"img-fluid \">
                <div class=\"mask flex-center rgba-purple-strong\">
                    <h1 class=\"white-text\" style=\"font-weight: 500;\">$artistName</h1>
                </div>
            </a>
        </div>
    </div>
    ";
    echo $element;
}

?>