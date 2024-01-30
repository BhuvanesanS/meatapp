<?php
include("header.php");

include('./includes/dbconnect.php');
include_once('./functions/common_function.php');

cart();

?>

<div class="container">
    <div class="row">
        <form action="" method="post">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Product Title</th>
                    <th>Product image</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Removee</th>
                    <th colspan="2">Operations</th>
                </tr>
                <tbody> 
                    <?php
                    //display dynamic data
                         global $conn;
                 $get_ip_address = getIPAddress(); 
                 $total_price=0;
                 $cart_query="SELECT * FROM cart_details where ip_address='$get_ip_address'";
                 $result=mysqli_query($conn,$cart_query);

                 while($row=mysqli_fetch_array($result))
                     {
                        $product_id=$row['product_id'];
                        $select_products="SELECT * FROM products where  product_id='$product_id'";
                        $result_products=mysqli_query($conn,$select_products);
                        while($row_product_price=mysqli_fetch_array($result_products))
                           {
                              $product_price=array($row_product_price['product_price']);
                              $price_table=$row_product_price['product_price'];
                              $product_title=$row_product_price['product_title'];
                               $product_image1=$row_product_price['product_image1'];
                              $product_values=array_sum($product_price);
                              $total_price+=$product_values;

                    ?>
                <tr>
                    <td><?php echo $product_title ?></td>
                    <td><img src="./adminarea/product_images/<?php echo $product_image1 ?>" alt="" class="cart_img"></td>
                    <td><input type="text" name="qty" value="" id="" class="form-input w-50"></td>
                    <?php
                        $get_ip_address = getIPAddress(); 
                        if(isset($_POST['update_cart'])){
                            $quantities=$_POST['qty'];

                            $update_cart="UPDATE `cart_details` SET `ip_address`='[$get_ip_address]',`quantity`='[$quantities]' WHERE 1";
                            //$update_cart="UPDATE cart_details SET `quantity`=$quantities  WHERE ip_address='.$get_ip_address.'";
                            //$update_cart="UPDATE cart_details SET `quantity`=$quantities,`ip_address`=`[$get_ip_address]` WHERE 1 ";
                            $result_products_quantity=mysqli_query($conn,$update_cart);
                            $total_price=$total_price*$quantities;

                        }

                    ?>
                    <td><?php echo $price_table ?>/-</td>
                    <td><input type="checkbox" name="removeitem" value="<?php echo $product_id ?>"></td>                
                    <td>
                        <!-- <button class="btn btn-info p-3">update</button> -->
                        <input type="submit" name="update_cart" class="btn btn-info p-3" value="update cart">
                        <input type="submit" name="remove_cart" class="btn btn-info p-3" value="remove cart">
                    </td>
                </tr>
                <?php

                        }
                 }

                ?>
            </tbody>
        </thead>
    </table>
    <!---subtotal--------->
    <div class="d-flex">
    <h4 class="px-3">subtotal:<strong><?php echo $total_price ?>/-</strong></h4>
    <a href="index.php"><button class="btn btn-info p-3">continue shopping</button></a>
        <a href=""><button class="btn btn-secondary p-3">checkout</button></a>
    </div> 

    </div>
</div>
</form>
<!---function to remove item-------->
<?php
function remove_cart_item(){
    global $conn;
    if(isset($_POST['remove_cart']))
    {
        foreach($_POST['removeitem'] as $remove_id){
            echo $remove_id;
            $delete_query="delete   from cart_details where product_id=$remove_id";
            $run_delete=mysqli_query($conn,$delete_query);
            if($run_delete){
                echo "<script>window.open('cart.php','_self');</script>";
            }
        }
    }
}
echo $remove_item=remove_cart_item();
?>
<style type="text/css">
    .cart_img{
        width:50px;
        height:50px;
        object-fit: contain;
    }
</style>














<?php
include('footer.php');