<?php
include("header.php");
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .checkout-wrapper{padding-top: 40px; padding-bottom:40px; background-color: #fafbfa;}
.checkout{    background-color: #fff;
    border:1px solid #eaefe9;
     
    font-size: 14px;}
.panel{margin-bottom: 0px;}
.checkout-step {
     
    border-top: 1px solid #f2f2f2;
    color: #666;
    font-size: 14px;
    padding: 30px;
    position: relative;
}

.checkout-step-number {
    border-radius: 50%;
    border: 1px solid #666;
    display: inline-block;
    font-size: 12px;
    height: 32px;
    margin-right: 26px;
    padding: 6px;
    text-align: center;
    width: 32px;
}
.checkout-step-title{ font-size: 18px;
    font-weight: 500;
    vertical-align: middle;display: inline-block; margin: 0px;
     }
 
.checout-address-step{}
.checout-address-step .form-group{margin-bottom: 18px;display: inline-block;
    width: 100%;}

.checkout-step-body{padding-left: 60px; padding-top: 30px;}

.checkout-step-active{display: block;}
.checkout-step-disabled{display: none;}

.checkout-login{}
.login-phone{display: inline-block;}
.login-phone:after {
    content: '+91 - ';
    font-size: 14px;
    left: 36px;
}
.login-phone:before {
    content: "";
    font-style: normal;
    color: #333;
    font-size: 18px;
    left: 12px;
        display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.login-phone:after, .login-phone:before {
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}
.login-phone .form-control {
    padding-left: 68px;
    font-size: 14px;
    
}
.checkout-login .btn{height: 42px;     line-height: 1.8;}
 
.otp-verifaction{margin-top: 30px;}
.checkout-sidebar{background-color: #fff;
    border:1px solid #eaefe9; padding: 30px; margin-bottom: 30px;}
.checkout-sidebar-merchant-box{background-color: #fff;
    border:1px solid #eaefe9; margin-bottom: 30px;}
.checkout-total{border-bottom: 1px solid #eaefe9; padding-bottom: 10px;margin-bottom: 10px; }
.checkout-invoice{display: inline-block;
    width: 100%;}
.checout-invoice-title{    float: left; color: #30322f;}
.checout-invoice-price{    float: right; color: #30322f;}
.checkout-charges{display: inline-block;
    width: 100%;}
.checout-charges-title{float: left; }
.checout-charges-price{float: right;}
.charges-free{color: #43b02a; font-weight: 600;}
.checkout-payable{display: inline-block;
    width: 100%; color: #333;}
.checkout-payable-title{float: left; }
.checkout-payable-price{float: right;}

.checkout-cart-merchant-box{ padding: 20px;display: inline-block;width: 100%; border-bottom: 1px solid #eaefe9;
 padding-bottom: 20px; }
.checkout-cart-merchant-name{color: #30322f; float: left;}
.checkout-cart-merchant-item{ float: right; color: #30322f; }
.checkout-cart-products{}

.checkout-cart-products .checkout-charges{ padding: 10px 20px;
    color: #333;}
.checkout-cart-item{ border-bottom: 1px solid #eaefe9;
    box-sizing: border-box;
    display: table;
    font-size: 12px;
    padding: 22px 20px;
    width: 100%;}
 .checkout-item-list{}
.checkout-item-count{ float: left; }
.checkout-item-img{width: 60px; float: left;}
.checkout-item-name-box{ float: left; }
.checkout-item-title{ color: #30322f; font-size: 14px;  }
.checkout-item-unit{  }
.checkout-item-price{float: right;color: #30322f; font-size: 14px; font-weight: 600;}


.checkout-viewmore-btn{padding: 10px; text-align: center;}

.header-checkout-item{text-align: right; padding-top: 20px;}
.checkout-promise-item {
    background-repeat: no-repeat;
    background-size: 14px;
    display: inline-block;
    margin-left: 20px;
    padding-left: 24px;
    color: #30322f;
}
.checkout-promise-item i{padding-right: 10px;color: #43b02a;}
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
	<div class="col-lg-8">
                    <div id="accordion" class="checkout">
                        <div class="panel checkout-step">
                            <div> <span class="checkout-step-number"><i class="fa-solid fa-user" style="color: #ffbb00;"></i></span>
                                <h4 class="checkout-step-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="text-decoration: none;"  > Account</a></h4>
                            </div>
                            <div id="collapseOne" class="collapse in">
                                <div class="checkout-step-body">
                                    <p>To Place Your Order Now, Login Your Existing Account or Signup</p>
                                    <p>Already Have an Account? <a href="#" class="text-warning" style="text-decoration: none;">Login to your account</a></p>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="checkout-login">
                                                <form>
                                                    <div class="login-phone">
                                                        <input type="text" class="form-control" placeholder="Phone Number">
                                                    </div>
                                                    <a class="btn btn-default bg-warning text-white " role="button" data-toggle="collapse" href="#otp-verifaction" >Next</a>
                                                    <!-- add class disabled to inactive button -->
                                                </form>
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <!-- /.col-lg-6 -->
                                    </div>
                                    <div class="collapse" id="otp-verifaction">
                                        <div class="otp-verifaction">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-md-12 control-label sr-only" for="Phone">Phone</label>
                                                            <div class="col-md-3">
                                                                <input id="number" name="number" type="text" placeholder="0" class="form-control input-md" required="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input id="number" name="number" type="text" placeholder="0" class="form-control input-md" required="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input id="number" name="number" type="text" placeholder="0" class="form-control input-md" required="">
                                                            </div>
                                                            <div class="col-md-3 ">
                                                                <input id="number" name="number" type="text" placeholder="0" class="form-control input-md" required="">
                                                            </div>
                                                        </div>
                                                        <!-- Button -->
                                                        <div class="form-group">
                                                            <label class="control-label sr-only" for="next">next</label>
                                                            <div class="col-md-12">
                                                                <a class="collapsed btn btn-default bg-warning text-white btn-lg" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Verify OTP</a>
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
                        <div class="panel checkout-step">
                            <div role="tab" id="headingTwo"> <span class="checkout-step-number"><i class="fa-solid fa-location-dot" style="color: #ff9500;"></i></span>
                                <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style=
                                "text-decoration: none;" > Delivery Address </a> </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="checkout-step-body">
                                    <div class="checout-address-step">
                                        <div class="row">
                                            <form class="">
                                                <!-- Multiple Radios (inline) -->
                                                <div class="form-group">
                                                    <label class="col-md-12  control-label" for="address"></label>
                                                    <div class="col-md-12 ">
                                                        <label class="radio-inline" for="address-0">
                                                            <input type="radio" name="address" id="address-0" value="Home" checked="checked"> Home </label>
                                                        <label class="radio-inline" for="address-1">
                                                            <input type="radio" name="address" id="address-1" value="Office"> Office </label>
                                                        <label class="radio-inline" for="address-2">
                                                            <input type="radio" name="address" id="address-2" value="Other"> Other </label>
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label class="control-label" for="name">Name</label>
                                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required="">
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-12 control-label" for="flat">Flat / House / Office No.</label>
                                                    <div class="col-md-12">
                                                        <input id="flat" name="flat" type="text" placeholder="address" class="form-control input-md" required="">
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-12 control-label" for="street">Street / Society / Office Name</label>
                                                    <div class="col-md-12">
                                                        <input id="street" name="street" type="text" placeholder="Street Address" class="form-control input-md">
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-12 control-label" for="Locality">Locality</label>
                                                    <div class="col-md-12">
                                                        <input id="Locality" name="Locality" type="text" placeholder="Bhubaneshwar" class="form-control input-md" required="">
                                                    </div>
                                                </div>
                                                <!-- Button -->
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <button id="singlebutton" name="singlebutton" class="btn btn-warning ">Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <a class="collapsed btn btn-default btn-warning px-5" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> Next </a>
                                </div>
                            </div>
                        </div>
                      
                        <div class="panel checkout-step">
                            <div role="tab" id="headingFour"> <span class="checkout-step-number"><i class="fa-solid fa-money-bill" style="color: #ff9500;"></i></span>
                                <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" style="text-decoration: none;"  > Payment </a> </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="checkout-step-body">
                                    Payment Mode
                                    <a href="payment.php" class="btn btn-default btn-warning">Proccess to payment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
    <div class="card">
  <div class="card-body">
    <h5 class="card-title">Chicken(Boneless)
        <p>Odissa</p>
    </h5>
    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
     <label for="">Chicken Wings</label>
    <button class="bg-warning text-white border-white px-3 mt-2">-</button>
        <button class="bg-warning text-white border-white px-3 mt-2">1</button>
        <button class="bg-warning text-white border-white px-3 mt-2">+</button>
        <a href="#" style="nav-link" class="px-3 text-dark">RS 299</a>

        <div class="border px-2">
            <input type="checkbox">Opt in for No-Contact Delivery
            <p>Unwell Or avoiding contact? Please select no-contact delivery.Partner will safely place the order outside your door (not For COD)</p>
        </div>

        <div class="row">
        <p class="mt-3"><strong class="px-2">Bill Details</strong></p>
            <div class="col-lg-6">
        <p>Item Total</p>
        <p>Delivery Fee | 6.9km</p>
        <p>Packing and GST</p>
        <p>Discount</p>
        <hr>
        <p><strong>Total Pay</strong></p>
        </div>
        <div class="col-lg-6 justify-content-end align-items-end">
            <p>299₹</p>
            <p>49₹</p>
            <p>49₹</p>
            <p>-29₹</p> 
            <hr>
            <p>299₹</p>
        </div>
        </div> 
  </div>
  

</div>
<div>

<div class="border mt-4 border-success ">
        <p class="mt-5 px-3">Savings Of RS 200₹</p>
    </div>


<div class="card mt-3">
  <div class="card-body border">
    <p>Review your order details and address to avoid cancellations</p>
    <p class="text-warning"> NOTE: If you cancel within 60seconds of placing order, a 100% refund will be issued. no refund for cancellation made after 60 seconds.</p>
  </div>
</div>
</div>
	</div> 
    </div>
</div>
<?php
include("footer.php");
?> 