<?php
include("header.php");
?>
<div style="clear:both;"></div>
<section>
    <div class="container">
<div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ready to Cook</li>
    <li class="breadcrumb-item active" aria-current="page">Ready to Cook Customize</li>

  </ol>
</div>
<!-- <h6 class="text-danger"></h6> -->
</div>

<div class="container">
<div class="row">
    <div class="col-lg-6">
        <img src="images/readytocook/r1.jpg" class="img-fluid" alt="">  
    </div>
    <div class="col-lg-6">
        <h6>Yummy Chicken Cutlets</h6>
        <a href="#" class="px-3"><span class="product-price">350₹/Per Pack <span style="text-decoration: line-through" class="px-2">399₹</span></span></a> <br>
        <button class="bg-warning text-white border-white px-3 mt-2">-</button>
        <button class="bg-warning text-white border-white px-3 mt-2">1</button>
        <button class="bg-warning text-white border-white px-3 mt-2">+</button>
        <a class="custom-btn btn btn-sm btn-shop mx-4 mt-1" href="readytocookaddcart.php">ADD TO CART</a>
        <p  class="mt-3"><strong>(Total Price:238)</strong></p> <br>
        <p>Storage Insturctions: <br>
            <span>Store Under Refrigeration at 4*C or below in Hygenic</span>
        </p>
        
        <p class="mt-3">Marketed By:<br>
            <span>Deliaura Private Limited No.201, 2nd floor, Carlton <br>
                Towers No.1, Old airport road, Bhubaneshwar, Orrisa  <br>
                560000
            </span>
        </p>
    </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6 mt-5 justify-content-start">
            <p class="mt-5">Butter Chicken Samosa</p>
            <span class="mt-5">500Gms</span>
            <p>399₹</p>
        </div>

        <div class="col-lg-6 mt-5">
            <img src="images/readytocook/r2.jpg" style="height:100px; width:100px; border-radius:50px" class="img-fluid mt-5 px-2" alt=""> <br> 
            <!-- <button class="bg-warning text-white border-white">ADD TO CART</button> -->
            <!-- Button trigger modal -->
<button type="button" class="text-white btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ADD TO CART
</button> 

<!-- Modal -->
<div class="modal fade" style="font-size: 14px" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <ul>
             <li>
             <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
             <label class="form-check-label" for="exampleRadios1">
    Customize "Chicken"
  </label>

            </li>
</ul>
       
        <button type="button" class="btn-close text-warning" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <ul>
             <li>
             <p class=" px-3"> <strong>Accomplishments For Ready to Cook(Optional)</strong></p>
             <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  Yummy Chicken Cutlets
  </label> <br>
      
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  Butter Chicken Samosa
  </label> <br>
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  Chicken & Cheese Cutlets
  </label> 
    </li>
</ul>

<ul>
             <li>
             <p class="mt-2 px-3"> <strong>Accomplishments For Ready to Cook(Optional)</strong></p>
             <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  Chicken Tangdi Kebab
  </label> <br>
      
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  Assorted Tandoori Platter
  </label> <br>
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  Fish Tikka
  </label> 
    </li>
</ul>

<ul>
             <li>
             <p class="mt-2 px-3"> <strong>Accomplishments For Ready to Cook(Optional)</strong></p>
             <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  Piri Piri Cheese Chicken Burger Patty
  </label> <br>
      
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  Chicken Cutlet
  </label> <br>
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  Sichuan Chilli Chicken (Mini)
  </label> 
    </li>
</ul>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <button type="button" class="btn-lg btn btn-warning text-white">Total Rs 499.00 ADD ITEM</button>
      </div>
    </div>
  </div>
</div> 
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6 mt-5 justify-content-start">
            <p class="mt-5">Chicken & Cheese Cutlets</p>
            <span class="mt-5">500Gms</span>
            <p>399₹</p>
        </div>
        <div class="col-lg-6 mt-5 justify-content start">
            <img src="images/readytocook/r3.jpg" style="height:100px; width:100px; border-radius:50px" class="img-fluid mt-5" alt="">  <br>
            <!-- <button class="bg-warning text-white border-white">ADD TO CART</button>  -->

            <button type="button" class="text-white btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ADD TO CART
</button>

<!-- Modal -->

        </div>
    </div>
</div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6 mt-5 justify-content-start">
            <p class="mt-5">Chicken Tangdi Kebab</p>
            <span class="mt-5">500Gms</span>
            <p>399₹</p>
        </div>
        <div class="col-lg-6 mt-5 justify-content start">
            <img src="images/readytocook/r4.jpg" style="height:100px; width:100px; border-radius:50px" class="img-fluid mt-5" alt=""> <br>
            <!-- <button class="bg-warning text-white border-white">ADD TO CART</button>  -->

            <button type="button" class="text-white btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ADD TO CART
</button>


        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6 mt-5 justify-content-start">
            <p class="mt-5">Assorted Tandoori Platter</p>
            <span class="mt-5">500Gms</span>
            <p>399₹</p>
        </div>
        <div class="col-lg-6 mt-5 justify-content start">
            <img src="images/readytocook/r5.jpg" style="height:100px; width:100px; border-radius:50px" class="img-fluid mt-5" alt="">  <br>
            <!-- <button class="bg-warning text-white border-white">ADD TO CART</button>  -->

            <button type="button" class="text-white btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ADD TO CART
</button>

        </div>
    </div>
</div>





<div class="container mt-3">
<h6 class="mt-4">Related Products</h6>
 <div class="row mt-4">
    <div class="col-lg-4">
    <div class="card" style="width: 18rem;">
  <img src="images/readytocook/r6.jpg" class="card-img-top img-fluid" style="height:300px; width:300px;"  alt="...">
  <div class="card-body">
    <p class="card-text"><strong>Fish Tikka</strong> </p>
    <span>18-20 Pieces</span> <br>
    <span class="px-3">249₹</span>
    <button class="bg-warning text-white border-white">Add to cart</button>
  </div>
</div>
    </div>
    <div class="col-lg-4">
    <div class="card" style="width: 18rem;">
  <img src="images/readytocook/r7.jpg" class="card-img-top img-fluid" style="height:300px; width:300px;"  alt="...">
  <div class="card-body">
    <p class="card-text"><strong>Piri Piri Cheese Chicken Burger Patty</strong> </p>
    <span>18-20 Pieces</span> <br>
    <span class="px-3">249₹</span>
    <button class="bg-warning text-white border-white">Add to cart</button>
  </div>
</div>
    </div>

    <div class="col-lg-4">
    <div class="card" style="width: 18rem;">
  <img src="images/readytocook/r8.jpg" class="card-img-top img-fluid" style="height:300px; width:300px;"  alt="...">
  <div class="card-body">
    <p class="card-text"><strong>Chicken Cutlet</strong> </p>
    <span>18-20 Pieces</span> <br>
    <span class="px-3">249₹</span>
    <button class="bg-warning text-white border-white">Add to cart</button>
  </div>
</div>
    </div>
 </div>
</div>

<?php
include("footer.php");
?>