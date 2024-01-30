<?php
include("header.php");

include('./includes/dbconnect.php');
include_once('./functions/common_function.php');
?>

   <div class="product-filter-main-wrapper float_left ptb-0 mt-4">
      <div class="container">
         <div class="heading-title about-text float_left d-grid  gap-2 d-sm-flex justify-content-sm-start">
            <h5>Deliaura Specilals (Offers Available)</h5>
            <img class="img-fluid" src="images/line-yal.png" alt="img">
         </div>
         <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
               <div class="custom-tbs-content float_left">
                  <div id="Beef" class="tabcontent" style="display: block;">
                     <div class="product-new-filter-block">
                      
                      
                      <!----fetching products--------------->
                        <?php
                        //calling products function
                           cart();
                           view_details();
                            get_unique_categories();

                          ?>

                       <!--  <div class="col-lg-4 custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/products/product1.jpg" alt="img">
                              </a>
                           </div>
                           <div class="product-body p-4">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Chicken </a>
                                 <p class="product-text">With bones</p>
                              </h5>
                              <p class="product-text product-text-bg p-1 text-center">Weight: 500gms | 6-7 pieces | Serves 2 </p>
                                 <div class="d-grid mt-4 gap-2 d-sm-flex justify-content-start justify-content-sm-center mb-5">
                                 <a href="#" class="px-0 pt-2"><span class="product-price">3,500$ <span>4,600$</span></span></a>
                                 <a href="#" class="custom-btn btn btn-sm btn-shop mb-5">Add Cart</a>
                              </div>                            
                           </div>
                        </div> -->

                        <div class="center-btn">
                           <a href="product-left-sidebar.html">View All</a>
                        </div>
                     </div>
                  </div>

                  <div id="Lamb" class="tabcontent" style="display: none;">
                    

<!-----info ends------------------------------------->


   <div class="call-now-wrapper float_left ptb-100">
      <div class="container py-5">
         <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-6 justify-content-center">
               <h3 class="heading-title text-white mt-5">Did'nt Find Your Product ?</h3>
            </div>
            <div class="col-lg-4 col-md-12 align-self-end justify-content-center">
               <div class="call-sec-wrapper float_left">
                  
                 <a class="custom-btn text-white font-bold" href="store.html">Contact Us</a>
                  <h4 class="call">+61 3 8376 6284</h4>
               </div>
            </div>
         </div>
      </div>
   </div>


<!----footer starts---->

<?php
include("footer.php");

?>