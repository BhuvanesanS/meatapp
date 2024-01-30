<?php
include("header.php");

include('./includes/dbconnect.php');
include_once('./functions/common_function.php');

                          cart();

?>
<!----select brands --------------------->
<!-- banner section start start-->
   <div class="index1-slider-wrapper float_left ptb-0">
      <div class="container-fluid p-0">
         <div class="slider-caption wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner p-0">
                <div class="carousel-item active">
                  <img src="images/banner1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/banner2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/banner3.png" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
          
         </div>
        
      </div>
   </div>
   <!-- banner section start end-->

   <div class="about-sec-wrapper float_left ptb-100">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
               <div class="about-text float_left d-grid  gap-2 d-sm-flex justify-content-sm-center">
                      <!-- <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary button</button>
                     <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> -->
                  <h1 class="title">Shop By Categories</h1>
                  <select class="mx-2 px-3 bg-yellow border-0 text-white">
                     <option value="">View All</option>
                     <option value="">View All</option>
                     <option value="">View All</option>
                     <option value="">View All</option>
                  </select>
                 </div>
            </div>
         </div>
         <div class="row">
          <?php

          //calling category function
          getcategories();
          get_unique_categories();

            // $ip = getIPAddress();  
            // echo 'User Real IP Address - '.$ip;  

          ?>
            <!-- <div class="col-lg-3 col-md-3 col-sm-12">  
               <div class="div_line-yal2">
                  <div class="card border-0">
                    <img src="images/shop/shop-see-food.png" class="img-fluid card-img-top" alt="chicken">
                    <div class="card-body">
                      <p class="card-text text-center shop-txt">Chicken</p>
                    </div>
                  </div>
               </div>
            </div> -->

            <!-- <div class="col-lg-3 col-md-3 col-sm-12">  
               <div class="div_line-yal2">
                  <div class="card border-0">
                    <img src="images/shop/shop-see-food.png" class="img-fluid card-img-top" alt="chicken">
                    <div class="card-body">
                      <p class="card-text text-center shop-txt">Chicken</p>
                    </div>
                  </div>
               </div>
            </div> -->
<!-- 
            <div class="col-lg-3 col-md-3 col-sm-12">  
               <div class="div_line-yal2">
                  <div class="card border-0">
                    <img src="images/shop/shop-see-food.png" class="img-fluid card-img-top" alt="chicken">
                    <div class="card-body">
                      <p class="card-text text-center shop-txt">Chicken</p>
                    </div>
                  </div>
               </div>
            </div> -->

           <!--  <div class="col-lg-3 col-md-3 col-sm-12">  
               <div class="div_line-yal2">
                  <div class="card border-0">
                    <img src="images/shop/shop-see-food.png" class="img-fluid card-img-top" alt="chicken">
                    <div class="card-body">
                      <p class="card-text text-center shop-txt">Chicken</p>
                    </div>
                  </div>
               </div>
            </div>
         </div> -->
         <!--2nd row--------------------->
         <!--   <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">  
               <div class="div_line-yal2">
                  <div class="card border-0">
                    <img src="images/shop/shop-see-food.png" class="img-fluid card-img-top" alt="chicken">
                    <div class="card-body">
                      <p class="card-text text-center shop-txt">Chicken</p>
                    </div>
                  </div>
               </div>
            </div> -->

          <!--   <div class="col-lg-3 col-md-3 col-sm-12">  
               <div class="div_line-yal2">
                  <div class="card border-0">
                    <img src="images/shop/shop-see-food.png" class="img-fluid card-img-top" alt="chicken">
                    <div class="card-body">
                      <p class="card-text text-center shop-txt">Chicken</p>
                    </div>
                  </div>
               </ div>
            </div>-->

           <!--  <div class="col-lg-3 col-md-3 col-sm-12">  
               <div class="div_line-yal2">
                  <div class="card border-0">
                    <img src="images/shop/shop-see-food.png" class="img-fluid card-img-top" alt="chicken">
                    <div class="card-body">
                      <p class="card-text text-center shop-txt">Chicken</p>
                    </div>
                  </div>
               </div>
            </div> -->

            <!-- <div class="col-lg-3 col-md-3 col-sm-12">  
               <div class="div_line-yal2">
                  <div class="card border-0">
                    <img src="images/shop/shop-see-food.png" class="img-fluid card-img-top" alt="chicken">
                    <div class="card-body">
                      <p class="card-text text-center shop-txt">Chicken</p>
                    </div>
                  </div>
               </div>
            </div> -->
         </div>

         </div>
      </div>
   </div>
   <div class="home-delivery-sec-wrapper float_left pt-0">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
               <div class="about-text float_left d-grid  gap-2 d-sm-flex justify-content-sm-start">
                      <!-- <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary button</button>
                     <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> -->
                  <h1 class="title">Selected Products</h1>               
                 </div>
            </div>
         </div>
         
      </div>
   </div>
   <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true
              });
              $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
              })
              $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
              })
            })
          </script> 



 <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                   300: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  1000: {
                    items: 5
                  }
                }
              })
            })
          </script>

 <!--  Demos -->
    <section id="demos">
      <div class="row">
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <h4><div class="col-md-12">
                     <div class="card">
                        <div class="card-img">
                           <div class="row g-0">
                               <div class="col-md-6">
                                 <img src="images/products/product1.jpg" class="img-fluid rounded-start w-100" alt="...">
                               </div>
                               <div class="col-md-6">
                                 <div class="card-body">
                                   <h5 class="card-title">Chicken</h5>
                                   <p class="card-text">500gms</p>
                                   <p class="card-text"><small class="text-muted"><i class="fa fa-rupee"></i>275</small></p>
                                 </div>
                               </div>

                             </div>
                          <div class=" d-grid mt-5 gap-2 d-sm-flex justify-content-start justify-content-sm-center mb-5">
                              <a href="#" class="btn btn-sm btn-shop px-3">SHOP</a>
                              <a href="#" class="btn btn-sm btn-shop px-3">KNOW MORE</a>
                           </div>
                        </div>
                       
                     </div>
                  </div></h4>
            </div>
            <div class="item">
              <div class="col-md-12">
                     <div class="card">
                        <div class="card-img">
                           <div class="row g-0">
                               <div class="col-md-6">
                                 <img src="images/products/product1.jpg" class="img-fluid rounded-start w-100" alt="...">
                               </div>
                               <div class="col-md-6">
                                 <div class="card-body">
                                   <h5 class="card-title">Chicken</h5>
                                   <p class="card-text">500gms</p>
                                   <p class="card-text"><small class="text-muted"><i class="fa fa-rupee"></i>275</small></p>
                                 </div>
                               </div>

                             </div>
                          <div class=" d-grid mt-5 gap-2 d-sm-flex justify-content-start justify-content-sm-center mb-5">
                              <a href="#" class="btn btn-sm btn-shop px-3">SHOP</a>
                              <a href="#" class="btn btn-sm btn-shop px-3">KNOW MORE</a>
                           </div>
                        </div>
                       
                     </div>
                  </div>
            </div>
            <div class="item">
              <div class="col-md-12">
                     <div class="card">
                        <div class="card-img">
                           <div class="row g-0">
                               <div class="col-md-6">
                                 <img src="images/products/product1.jpg" class="img-fluid rounded-start w-100" alt="...">
                               </div>
                               <div class="col-md-6">
                                 <div class="card-body">
                                   <h5 class="card-title">Chicken</h5>
                                   <p class="card-text">500gms</p>
                                   <p class="card-text"><small class="text-muted"><i class="fa fa-rupee"></i>275</small></p>
                                 </div>
                               </div>

                             </div>
                          <div class=" d-grid mt-5 gap-2 d-sm-flex justify-content-start justify-content-sm-center mb-5">
                              <a href="#" class="btn btn-sm btn-shop px-3">SHOP</a>
                              <a href="#" class="btn btn-sm btn-shop px-3">KNOW MORE</a>
                           </div>
                        </div>
                       
                     </div>
                  </div>
            </div>
            <div class="item">
              <div class="col-md-12">
                     <div class="card">
                        <div class="card-img">
                           <div class="row g-0">
                               <div class="col-md-6">
                                 <img src="images/products/product1.jpg" class="img-fluid rounded-start w-100" alt="...">
                               </div>
                               <div class="col-md-6">
                                 <div class="card-body">
                                   <h5 class="card-title">Chicken</h5>
                                   <p class="card-text">500gms</p>
                                   <p class="card-text"><small class="text-muted"><i class="fa fa-rupee"></i>275</small></p>
                                 </div>
                               </div>

                             </div>
                          <div class=" d-grid mt-5 gap-2 d-sm-flex justify-content-start justify-content-sm-center mb-5">
                              <a href="#" class="btn btn-sm btn-shop px-3">SHOP</a>
                              <a href="#" class="btn btn-sm btn-shop px-3">KNOW MORE</a>
                           </div>
                        </div>
                       
                     </div>
                  </div>
            </div>
            <div class="item">
              <div class="col-md-12">
                     <div class="card">
                        <div class="card-img">
                           <div class="row g-0">
                               <div class="col-md-6">
                                 <img src="images/products/product1.jpg" class="img-fluid rounded-start w-100" alt="...">
                               </div>
                               <div class="col-md-6">
                                 <div class="card-body">
                                   <h5 class="card-title">Chicken</h5>
                                   <p class="card-text">500gms</p>
                                   <p class="card-text"><small class="text-muted"><i class="fa fa-rupee"></i>275</small></p>
                                 </div>
                               </div>

                             </div>
                          <div class=" d-grid mt-5 gap-2 d-sm-flex justify-content-start justify-content-sm-center mb-5">
                              <a href="#" class="btn btn-sm btn-shop px-3">SHOP</a>
                              <a href="#" class="btn btn-sm btn-shop px-3">KNOW MORE</a>
                           </div>
                        </div>
                       
                     </div>
                  </div>
            </div>
            <div class="item">
              <div class="col-md-12">
                     <div class="card">
                        <div class="card-img">
                           <div class="row g-0">
                               <div class="col-md-6">
                                 <img src="images/products/product1.jpg" class="img-fluid rounded-start w-100" alt="...">
                               </div>
                               <div class="col-md-6">
                                 <div class="card-body">
                                   <h5 class="card-title">Chicken</h5>
                                   <p class="card-text">500gms</p>
                                   <p class="card-text"><small class="text-muted"><i class="fa fa-rupee"></i>275</small></p>
                                 </div>
                               </div>

                             </div>
                          <div class=" d-grid mt-5 gap-2 d-sm-flex justify-content-start justify-content-sm-center mb-5">
                              <a href="#" class="btn btn-sm btn-shop px-3">SHOP</a>
                              <a href="#" class="btn btn-sm btn-shop px-3">KNOW MORE</a>
                           </div>
                        </div>
                       
                     </div>
                  </div>
            </div>
            <div class="item">
              <div class="col-md-12">
                     <div class="card">
                        <div class="card-img">
                           <div class="row g-0">
                               <div class="col-md-6">
                                 <img src="images/products/product1.jpg" class="img-fluid rounded-start w-100" alt="...">
                               </div>
                               <div class="col-md-6">
                                 <div class="card-body">
                                   <h5 class="card-title">Chicken</h5>
                                   <p class="card-text">500gms</p>
                                   <p class="card-text"><small class="text-muted"><i class="fa fa-rupee"></i>275</small></p>
                                 </div>
                               </div>

                             </div>
                          <div class=" d-grid mt-5 gap-2 d-sm-flex justify-content-start justify-content-sm-center mb-5">
                              <a href="#" class="btn btn-sm btn-shop px-3">SHOP</a>
                              <a href="#" class="btn btn-sm btn-shop px-3">KNOW MORE</a>
                           </div>
                        </div>
                       
                     </div>
                  </div>
            </div>
            <div class="item">
              <div class="col-md-12">
                     <div class="card">
                        <div class="card-img">
                           <div class="row g-0">
                               <div class="col-md-6">
                                 <img src="images/products/product1.jpg" class="img-fluid rounded-start w-100" alt="...">
                               </div>
                               <div class="col-md-6">
                                 <div class="card-body">
                                   <h5 class="card-title">Chicken</h5>
                                   <p class="card-text">500gms</p>
                                   <p class="card-text"><small class="text-muted"><i class="fa fa-rupee"></i>275</small></p>
                                 </div>
                               </div>

                             </div>
                          <div class=" d-grid mt-5 gap-2 d-sm-flex justify-content-start justify-content-sm-center mb-5">
                              <a href="#" class="btn btn-sm btn-shop px-3">SHOP</a>
                              <a href="#" class="btn btn-sm btn-shop px-3">KNOW MORE</a>
                           </div>
                        </div>
                       
                     </div>
                  </div>
            </div>
            <div class="item">
              <div class="col-md-12">
                     <div class="card">
                        <div class="card-img">
                           <div class="row g-0">
                               <div class="col-md-6">
                                 <img src="images/products/product1.jpg" class="img-fluid rounded-start w-100" alt="...">
                               </div>
                               <div class="col-md-6">
                                 <div class="card-body">
                                   <h5 class="card-title">Chicken</h5>
                                   <p class="card-text">500gms</p>
                                   <p class="card-text"><small class="text-muted"><i class="fa fa-rupee"></i>275</small></p>
                                 </div>
                               </div>

                             </div>
                          <div class=" d-grid mt-5 gap-2 d-sm-flex justify-content-start justify-content-sm-center mb-5">
                              <a href="#" class="btn btn-sm btn-shop px-3">SHOP</a>
                              <a href="#" class="btn btn-sm btn-shop px-3">KNOW MORE</a>
                           </div>
                        </div>
                       
                     </div>
                  </div>
            </div>
            <div class="item">
              <div class="col-md-12">
                     <div class="card">
                        <div class="card-img">
                           <div class="row g-0">
                               <div class="col-md-6">
                                 <img src="images/products/product1.jpg" class="img-fluid rounded-start w-100" alt="...">
                               </div>
                               <div class="col-md-6">
                                 <div class="card-body">
                                   <h5 class="card-title">Chicken</h5>
                                   <p class="card-text">500gms</p>
                                   <p class="card-text"><small class="text-muted"><i class="fa fa-rupee"></i>275</small></p>
                                 </div>
                               </div>

                             </div>
                          <div class=" d-grid mt-5 gap-2 d-sm-flex justify-content-start justify-content-sm-center mb-5">
                              <a href="#" class="btn btn-sm btn-shop px-3">SHOP</a>
                              <a href="#" class="btn btn-sm btn-shop px-3">KNOW MORE</a>
                           </div>
                        </div>
                       
                     </div>
                  </div>
            </div>
            <div class="item">
              <div class="col-md-12">
                     <div class="card">
                        <div class="card-img">
                           <div class="row g-0">
                               <div class="col-md-6">
                                 <img src="images/products/product1.jpg" class="img-fluid rounded-start w-100" alt="...">
                               </div>
                               <div class="col-md-6">
                                 <div class="card-body">
                                   <h5 class="card-title">Chicken</h5>
                                   <p class="card-text">500gms</p>
                                   <p class="card-text"><small class="text-muted"><i class="fa fa-rupee"></i>275</small></p>
                                 </div>
                               </div>

                             </div>
                          <div class=" d-grid mt-5 gap-2 d-sm-flex justify-content-start justify-content-sm-center mb-5">
                              <a href="#" class="btn btn-sm btn-shop px-3">SHOP</a>
                              <a href="#" class="btn btn-sm btn-shop px-3">KNOW MORE</a>
                           </div>
                        </div>
                       
                     </div>
                  </div>
            </div>
            <div class="item">
              <div class="col-md-12">
                     <div class="card">
                        <div class="card-img">
                           <div class="row g-0">
                               <div class="col-md-6">
                                 <img src="images/products/product1.jpg" class="img-fluid rounded-start w-100" alt="...">
                               </div>
                               <div class="col-md-6">
                                 <div class="card-body">
                                   <h5 class="card-title">Chicken</h5>
                                   <p class="card-text">500gms</p>
                                   <p class="card-text"><small class="text-muted"><i class="fa fa-rupee"></i>275</small></p>
                                 </div>
                               </div>

                             </div>
                          <div class=" d-grid mt-5 gap-2 d-sm-flex justify-content-start justify-content-sm-center mb-5">
                              <a href="#" class="btn btn-sm btn-shop px-3">SHOP</a>
                              <a href="#" class="btn btn-sm btn-shop px-3">KNOW MORE</a>
                           </div>
                        </div>
                       
                     </div>
                  </div>
            </div>
          </div>
</div>
</div>
</section>

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
                            getproducts();
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
                     <div class="product-new-filter-block">

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc4.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Lamb Leg Sirloin</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc5.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Lamb Loin Roast.</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc6.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Lamb Rib Chops</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>
                        <div class="center-btn">
                           <a href="product-left-sidebar.html">View All</a>
                        </div>
                     </div>
                  </div>

                  <div id="Pork" class="tabcontent" style="display: none;">
                     <div class="product-new-filter-block">

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc7.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Pork Belly</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc8.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Pork Ribs</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc9.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Pork Steak</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>
                        <div class="center-btn">
                           <a href="product-left-sidebar.html">View All</a>
                        </div>
                     </div>
                  </div>

                  <div id="Poultry" class="tabcontent" style="display: none;">

                     <div class="product-new-filter-block">

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc21.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Chickens</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc22.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Geese</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc23.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Guinea Fowl</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>
                        <div class="center-btn">
                           <a href="product-left-sidebar.html">View All</a>
                        </div>
                     </div>
                  </div>
                  <div id="Sausage" class="tabcontent" style="display: none;">
                     <div class="product-new-filter-block">

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc10.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Butifarra Pork</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc11.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Kurobuta Pork</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc12.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Fuet Boiled Sausage</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>
                        <div class="center-btn">
                           <a href="product-left-sidebar.html">View All</a>
                        </div>
                     </div>
                  </div>
                  <div id="Deli" class="tabcontent" style="display: none;">
                     <div class="product-new-filter-block">

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc13.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Pancetta</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc14.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Ham off the bone</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc24.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Chicken roll</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>
                        <div class="center-btn">
                           <a href="product-left-sidebar.html">View All</a>
                        </div>
                     </div>
                  </div>
                  <div id="Fish" class="tabcontent" style="display: none;">
                     <div class="product-new-filter-block">

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc18.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Alaskan salmon</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc19.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Herring</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc20.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Rainbow trout</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>
                        <div class="center-btn">
                           <a href="product-left-sidebar.html">View All</a>
                        </div>
                     </div>
                  </div>
                  <div id="Pack" class="tabcontent" style="display: none;">
                     <div class="product-new-filter-block">

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc10.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Carolina</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc11.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Kansas City</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc12.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Memphis</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>
                        <div class="center-btn">
                           <a href="product-left-sidebar.html">View All</a>
                        </div>
                     </div>
                  </div>
                  <div id="Crab" class="tabcontent" style="display: none;">
                     <div class="product-new-filter-block">

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc25.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Cocktail Claws</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc26.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Colossal Lump</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc27.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Culinary Jumbo</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>
                        <div class="center-btn">
                           <a href="product-left-sidebar.html">View All</a>
                        </div>
                     </div>
                  </div>
                  <div id="Shrim" class="tabcontent" style="display: none;">
                     <div class="product-new-filter-block">

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc10.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Brown Shrimp</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc11.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Rock Shrimp</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc12.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">Spot Shrimp</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>
                        <div class="center-btn">
                           <a href="product-left-sidebar.html">View All</a>
                        </div>
                     </div>
                  </div>
                  <div id="Egg" class="tabcontent" style="display: none;">
                     <div class="product-new-filter-block">

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc15.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html">Chickens</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc16.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html">guinea fowl</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>

                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc17.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html">turkeys </a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>
                        <div class="center-btn">
                           <a href="product-left-sidebar.html">View All</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>


   <div class="our-butchery-wrapper float_left">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
               <div class="heading-title about-text float_left d-grid  gap-2 d-sm-flex justify-content-sm-start">
            <h5>Deliaura Specilals (Offers Available)</h5>
            <img class="img-fluid" src="images/line-yal.png" alt="img">
         </div>
               
            
<div class="container-fluid vesitable py-5">
            <div class="container py-5">
               <div class="owl-carousel vegetable-carousel justify-content-center owl-loaded owl-drag">
                  
                <div class="owl-stage-outer">
                  <div class="owl-stage" style="transform: translate3d(-3965px, 0px, 0px); transition: all 1.5s ease 0s; width: 5768px;">
                     <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="  rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/mind/chicken-1.png" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                    </div>
                 </div>
                 <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="  rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/mind/chicken-1.png" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                    </div>
                 </div>
                    <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="  rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/mind/chicken-1.png" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                    </div>
                 </div>
                   <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="  rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/mind/chicken-1.png" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                    </div>
                 </div>
                 <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="  rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/mind/chicken-1.png" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                    </div>
                 </div>
                 <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="  rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/mind/chicken-1.png" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                    </div>
                 </div>
                  <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="  rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/mind/chicken-1.png" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                    </div>
                 </div>
                    <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="  rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/mind/chicken-1.png" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                    </div>
                 </div>
                    <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="  rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/mind/chicken-1.png" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                    </div>
                 </div>
                    <<div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="  rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/mind/chicken-1.png" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                    </div>
                 </div>
                <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="  rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/mind/chicken-1.png" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                    </div>
                 </div>
                    <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="  rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/mind/chicken-1.png" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                    </div>
                 </div>
                  <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="  rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/mind/chicken-1.png" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                    </div>
                 </div>
                    <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="  rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/mind/chicken-1.png" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                    </div>
                 </div>
                   <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="  rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/mind/chicken-1.png" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                    </div>
                 </div>            
                  <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/mind/chicken-1.png" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                    </div>
                 </div>
                 <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class=" circle position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/mind/chicken-1.png" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                    </div>
                 </div>
                 </div>
              </div>
              <div class="owl-nav">
               <div class="owl-prev"><i class="bi bi-arrow-left"></i></div><div class="owl-next"><i class="bi bi-arrow-right"></i></div></div></div>
            </div>
        </div>
</div>
            
         </div>
      </div>
   </div>
   <!----whats on your mind ends----------------------------->

   <!----day light specials starts------------------->

   <div class="our-butchery-wrapper float_left ptb-0 pbt-0 ptb-0">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
               <div class="heading-title about-text float_left d-grid  gap-2 d-sm-flex justify-content-sm-start">
            <h5>Day Light Specials</h5>
            <!-- <img class="img-fluid" src="images/line-yal.png" alt="img"> -->
         </div>
         <div class="container-fluid vesitable py-5 pb-0">
            <div class="container py-5 pb-0">
                
                <div class="owl-carousel vegetable-carousel justify-content-center owl-loaded owl-drag">
                  
                <div class="owl-stage-outer border-0">
                  <div class="owl-stage border-0" style="transform: translate3d(-3965px, 0px, 0px); transition: all 1.5s ease 0s; width: 5768px;">
                     <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="border-0 shadow position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/products/product1.jpg" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                        <div class="text-white bg-offer px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">30% Protien</div>
                        <div class="p-4 rounded-bottom">
                            <h6 class="product-title">
                                 <a href="product-single.html">guinea fowl</a>
                              </h6>
                            <p>pack of 12</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                              <p class=" fs-5  mb-0">12 pieces</p>
                                <p class=" fs-5  mb-0"><span class="product-price">&#x20B9;399 / kg<span>&#x20B9;299 / kg</span> </span></p>
                                <a href="#" class="btn-shop btn  px-3 text-white">
                                 <i class="fa fa-shopping-bag me-2 text-white"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                 </div>
                     <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="border-0 shadow position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/products/product1.jpg" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                        <div class="text-white bg-offer px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">30% Protien</div>
                        <div class="p-4 rounded-bottom">
                            <h6 class="product-title">
                                 <a href="product-single.html">guinea fowl</a>
                              </h6>
                            <p>pack of 12</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                              <p class=" fs-5  mb-0">12 pieces</p>
                                <p class=" fs-5  mb-0"><span class="product-price">&#x20B9;399 / kg<span>&#x20B9;299 / kg</span> </span></p>
                                <a href="#" class="btn-shop btn  px-3 text-white">
                                 <i class="fa fa-shopping-bag me-2 text-white"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                 </div>
                     <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="border-0 shadow position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/products/product1.jpg" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                        <div class="text-white bg-offer px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">30% Protien</div>
                        <div class="p-4 rounded-bottom">
                            <h6 class="product-title">
                                 <a href="product-single.html">guinea fowl</a>
                              </h6>
                            <p>pack of 12</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                              <p class=" fs-5  mb-0">12 pieces</p>
                                <p class=" fs-5  mb-0"><span class="product-price">&#x20B9;399 / kg<span>&#x20B9;299 / kg</span> </span></p>
                                <a href="#" class="btn-shop btn  px-3 text-white">
                                 <i class="fa fa-shopping-bag me-2 text-white"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                 </div>

                     <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="border-0 shadow position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/products/product1.jpg" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                        <div class="text-white bg-offer px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">30% Protien</div>
                        <div class="p-4 rounded-bottom">
                            <h6 class="product-title">
                                 <a href="product-single.html">guinea fowl</a>
                              </h6>
                            <p>pack of 12</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                              <p class=" fs-5  mb-0">12 pieces</p>
                                <p class=" fs-5  mb-0"><span class="product-price">&#x20B9;399 / kg<span>&#x20B9;299 / kg</span> </span></p>
                                <a href="#" class="btn-shop btn  px-3 text-white">
                                 <i class="fa fa-shopping-bag me-2 text-white"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                 </div>
                     <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="border-0 shadow position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/products/product1.jpg" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                        <div class="text-white bg-offer px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">30% Protien</div>
                        <div class="p-4 rounded-bottom">
                            <h6 class="product-title">
                                 <a href="product-single.html">guinea fowl</a>
                              </h6>
                            <p>pack of 12</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                              <p class=" fs-5  mb-0">12 pieces</p>
                                <p class=" fs-5  mb-0"><span class="product-price">&#x20B9;399 / kg<span>&#x20B9;299 / kg</span> </span></p>
                                <a href="#" class="btn-shop btn  px-3 text-white">
                                 <i class="fa fa-shopping-bag me-2 text-white"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                 </div>
                     <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="border-0 shadow position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/products/product1.jpg" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                        <div class="text-white bg-offer px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">30% Protien</div>
                        <div class="p-4 rounded-bottom">
                            <h6 class="product-title">
                                 <a href="product-single.html">guinea fowl</a>
                              </h6>
                            <p>pack of 12</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                              <p class=" fs-5  mb-0">12 pieces</p>
                                <p class=" fs-5  mb-0"><span class="product-price">&#x20B9;399 / kg<span>&#x20B9;299 / kg</span> </span></p>
                                <a href="#" class="btn-shop btn  px-3 text-white">
                                 <i class="fa fa-shopping-bag me-2 text-white"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                 </div>
                     <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="border-0 shadow position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/products/product1.jpg" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                        <div class="text-white bg-offer px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">30% Protien</div>
                        <div class="p-4 rounded-bottom">
                            <h6 class="product-title">
                                 <a href="product-single.html">guinea fowl</a>
                              </h6>
                            <p>pack of 12</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                              <p class=" fs-5  mb-0">12 pieces</p>
                                <p class=" fs-5  mb-0"><span class="product-price">&#x20B9;399 / kg<span>&#x20B9;299 / kg</span> </span></p>
                                <a href="#" class="btn-shop btn  px-3 text-white">
                                 <i class="fa fa-shopping-bag me-2 text-white"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                 </div>
                     <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="border-0 shadow position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/products/product1.jpg" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                        <div class="text-white bg-offer px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">30% Protien</div>
                        <div class="p-4 rounded-bottom">
                            <h6 class="product-title">
                                 <a href="product-single.html">guinea fowl</a>
                              </h6>
                            <p>pack of 12</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                              <p class=" fs-5  mb-0">12 pieces</p>
                                <p class=" fs-5  mb-0"><span class="product-price">&#x20B9;399 / kg<span>&#x20B9;299 / kg</span> </span></p>
                                <a href="#" class="btn-shop btn  px-3 text-white">
                                 <i class="fa fa-shopping-bag me-2 text-white"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                 </div>
                     <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="border-0 shadow position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/products/product1.jpg" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                        <div class="text-white bg-offer px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">30% Protien</div>
                        <div class="p-4 rounded-bottom">
                            <h6 class="product-title">
                                 <a href="product-single.html">guinea fowl</a>
                              </h6>
                            <p>pack of 12</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                              <p class=" fs-5  mb-0">12 pieces</p>
                                <p class=" fs-5  mb-0"><span class="product-price">&#x20B9;399 / kg<span>&#x20B9;299 / kg</span> </span></p>
                                <a href="#" class="btn-shop btn  px-3 text-white">
                                 <i class="fa fa-shopping-bag me-2 text-white"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                 </div>
                     <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="border-0 shadow position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/products/product1.jpg" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                        <div class="text-white bg-offer px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">30% Protien</div>
                        <div class="p-4 rounded-bottom">
                            <h6 class="product-title">
                                 <a href="product-single.html">guinea fowl</a>
                              </h6>
                            <p>pack of 12</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                              <p class=" fs-5  mb-0">12 pieces</p>
                                <p class=" fs-5  mb-0"><span class="product-price">&#x20B9;399 / kg<span>&#x20B9;299 / kg</span> </span></p>
                                <a href="#" class="btn-shop btn  px-3 text-white">
                                 <i class="fa fa-shopping-bag me-2 text-white"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                 </div>
                     <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="border-0 shadow position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/products/product1.jpg" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                        <div class="text-white bg-offer px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">30% Protien</div>
                        <div class="p-4 rounded-bottom">
                            <h6 class="product-title">
                                 <a href="product-single.html">guinea fowl</a>
                              </h6>
                            <p>pack of 12</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                              <p class=" fs-5  mb-0">12 pieces</p>
                                <p class=" fs-5  mb-0"><span class="product-price">&#x20B9;399 / kg<span>&#x20B9;299 / kg</span> </span></p>
                                <a href="#" class="btn-shop btn  px-3 text-white">
                                 <i class="fa fa-shopping-bag me-2 text-white"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                 </div>
                     <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="border-0 shadow position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/products/product1.jpg" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                        <div class="text-white bg-offer px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">30% Protien</div>
                        <div class="p-4 rounded-bottom">
                            <h6 class="product-title">
                                 <a href="product-single.html">guinea fowl</a>
                              </h6>
                            <p>pack of 12</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                              <p class=" fs-5  mb-0">12 pieces</p>
                                <p class=" fs-5  mb-0"><span class="product-price">&#x20B9;399 / kg<span>&#x20B9;299 / kg</span> </span></p>
                                <a href="#" class="btn-shop btn  px-3 text-white">
                                 <i class="fa fa-shopping-bag me-2 text-white"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                 </div>
                     <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="border-0 shadow position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/products/product1.jpg" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                        <div class="text-white bg-offer px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">30% Protien</div>
                        <div class="p-4 rounded-bottom">
                            <h6 class="product-title">
                                 <a href="product-single.html">guinea fowl</a>
                              </h6>
                            <p>pack of 12</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                              <p class=" fs-5  mb-0">12 pieces</p>
                                <p class=" fs-5  mb-0"><span class="product-price">&#x20B9;399 / kg<span>&#x20B9;299 / kg</span> </span></p>
                                <a href="#" class="btn-shop btn  px-3 text-white">
                                 <i class="fa fa-shopping-bag me-2 text-white"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                 </div>
                     <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="border-0 shadow position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/products/product1.jpg" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                        <div class="text-white bg-offer px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">30% Protien</div>
                        <div class="p-4 rounded-bottom">
                            <h6 class="product-title">
                                 <a href="product-single.html">guinea fowl</a>
                              </h6>
                            <p>pack of 12</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                              <p class=" fs-5  mb-0">12 pieces</p>
                                <p class=" fs-5  mb-0"><span class="product-price">&#x20B9;399 / kg<span>&#x20B9;299 / kg</span> </span></p>
                                <a href="#" class="btn-shop btn  px-3 text-white">
                                 <i class="fa fa-shopping-bag me-2 text-white"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                 </div>
                     <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="border-0 shadow position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/products/product1.jpg" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                        <div class="text-white bg-offer px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">30% Protien</div>
                        <div class="p-4 rounded-bottom">
                            <h6 class="product-title">
                                 <a href="product-single.html">guinea fowl</a>
                              </h6>
                            <p>pack of 12</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                              <p class=" fs-5  mb-0">12 pieces</p>
                                <p class=" fs-5  mb-0"><span class="product-price">&#x20B9;399 / kg<span>&#x20B9;299 / kg</span> </span></p>
                                <a href="#" class="btn-shop btn  px-3 text-white">
                                 <i class="fa fa-shopping-bag me-2 text-white"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                 </div>
                     <div class="owl-item " style="width: 135.5px; margin-right: 25px;">
                        <div class="border-0 shadow position-relative vesitable-item">
                        <div class="vesitable-img">
                             <img src="images/products/product1.jpg" class="img-fluid w-100 rounded bg-light" alt="" width="144" height="180">
                        </div>
                        <div class="text-white bg-offer px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">30% Protien</div>
                        <div class="p-4 rounded-bottom">
                            <h6 class="product-title">
                                 <a href="product-single.html">guinea fowl</a>
                              </h6>
                            <p>pack of 12</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                              <p class=" fs-5  mb-0">12 pieces</p>
                                <p class=" fs-5  mb-0"><span class="product-price">&#x20B9;399 / kg<span>&#x20B9;299 / kg</span> </span></p>
                                <a href="#" class="btn-shop btn  px-3 text-white">
                                 <i class="fa fa-shopping-bag me-2 text-white"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
      </div>
   </div>
</div>
</div>
</div>
</div>

   <!----day light specials ends------------------------------>
   <!---offer banner starts------------------->

 <div class="offer-bg float_left py-5 vh-100">
    <div class="container py-5">
         <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-6 justify-content-center">
              
            </div>
         </div>
      </div>
 </div>
<!----offer banner ends------------------------->

<!----info starts-------------------------------------->
<section class="py-5">
   <div class="container py-5">
      <div class="row">
         <div class="col-lg-12 ptb-0">
            <h6 class="fs-5 font-bold">Deliaura: Your Ultimate Destination for Fresh Meat and Online Meat Delivery</h6>
            <p class="mb-4">In the age of digital convenience, the way we shop for groceries and food has evolved significantly. One of the most significant advancements in this regard is the ability to order fresh meat online. FreshToHome has emerged as a game-changer in the world of online meat delivery, offering not only convenience but also quality that's second to none. Let’s delve into why FreshToHome is the top choice for those seeking fresh meat and online meat delivery.</p>
            <h6 class="fs-6">Fresh Meat: A Cut Above the Rest</h6>
            <p>When it comes to fresh meat, quality is non-negotiable. FreshToHome understands this better than anyone else. Our commitment to delivering the freshest meat possible is evident in every aspect of our service. Whether you're looking for succulent chicken, tender mutton, or the freshest fish, FreshToHome has got you covered. Any specific or particular cut you want for any recipe, we got it all.</p>
             <h6 class="fs-6">Fresh Meat: A Cut Above the Rest</h6>
               <p class="mb-4">When it comes to fresh meat, quality is non-negotiable. FreshToHome understands this better than anyone else. Our commitment to delivering the freshest meat possible is evident in every aspect of our service. Whether you're looking for succulent chicken, tender mutton, or the freshest fish, FreshToHome has got you covered. Any specific or particular cut you want for any recipe, we got it all.</p>

                <h6 class="fs-6">The Heart of Our Business: Fresh Meat & Seafood</h6>
               <p class="mb-4">At FreshToHome, we believe that the heart of a delicious meal is fresh, high-quality meat. That's why we source our meat from dedicated farmers and small boat fishermen who adhere to the highest standards of hygiene and quality. Our rigorous quality checks ensure that you receive nothing but the best.</p>

                <h6 class="fs-6">Online Meat Delivery: Convenience at Your Doorstep</h6>
               <p class="mb-4">Gone are the days when you had to make a trip to the local butcher or fish market. With FreshToHome's online meat delivery service, you can order meat online from the comfort of your home. Whether you're a busy professional, a homemaker, or anyone in between, our user-friendly website and app make ordering meat a breeze.</p>

                <h6 class="fs-6">Order Meat Online: Simple and Seamless</h6>
               <p class="mb-4">Ordering meat online from FreshToHome is as easy as 1-2-3. Simply visit our website or download our app, select your preferred cuts of meat, and proceed to checkout. Our secure payment options and reliable delivery ensure that your fresh meat arrives at your doorstep promptly.</p>

                <h6 class="fs-6">Meat Delivery: Prompt and Punctual</h6>
               <p class="mb-4">When you choose FreshToHome for meat delivery, you can expect punctuality. We understand the importance of receiving your order on time, and we take pride in our timely deliveries. Say goodbye to last-minute grocery store runs – FreshToHome has got your back.</p>

                <h6 class="fs-6">Online Fresh Meat: For All Your Needs</h6>
               <p class="mb-4">FreshToHome maintains a wide inventory of fresh meat, ensuring that you can find your favourite cuts whenever you need them. Whether it's chicken, mutton, or fish, we've got your cravings covered.</p>

         </div>
      </div>
   </div>
</section>

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