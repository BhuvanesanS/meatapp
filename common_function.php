<?php
include('./includes/dbconnect.php');

//getting products
function getproducts()
{
	global $conn;
	 $select_query="SELECT * FROM products";
                          $result_query=mysqli_query($conn,$select_query);
                         // $row=mysqli_fetch_assoc($result_query);
                          // echo $row['product_title'];

                      while( $row=mysqli_fetch_assoc($result_query)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_description=$row['product_description'];
                        $product_keywords=$row['product_keywords'];
                        $product_image1=$row['product_image1'];
                        $product_price=$row['product_price'];
                        $category_id=$row['category_id'];
                        echo " <div class='col-lg-4 custom-tabs-prdt'>
                           <div class='product-thumbnail'>
                              <a href='javascript:;'>
                                 <img src='./adminarea/product_images/$product_image1' alt='$product_title'>
                              </a>
                           </div>
                           <div class='product-body p-4'>
                              <h5 class='product-title'>
                                 <a href='product-single.html' title='Beef'>$product_title</a>
                                 <p class='product-text'>$product_description</p>
                              </h5>
                              <p class='product-text product-text-bg p-1 text-center'>$product_keywords</p>
                                 <div class='d-grid mt-4 gap-2 d-sm-flex justify-content-start justify-content-sm-center mb-5'>
                                 <a href='#' class='px-0 pt-2'><span class='product-price'>$product_price <span>4,600$</span></span></a>
                                 <a href='#'' class='custom-btn btn btn-sm btn-shop mb-5'>Add Cart</a>
                              </div>                            
                           </div>
                        </div>";
}
}
?>