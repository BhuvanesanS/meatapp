<?php
include("header.php");
?>

<section>
    <div class="container-fluid">
   
        <div class="row">
        <div class="d-flex align-items-start">
            <div class="col-lg-4">
            
  <ul class="nav nav-pills flex-column nav-pills" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link text-dark fw-semibold active position-relative" id="pills-accountdashboard-tab" data-bs-toggle="pill" data-bs-target="#pills-accountdashboard" type="button" role="tab" aria-controls="pills-accountdashboard" aria-selected="true">Account Dashboard</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-dark fw-semibold position-relative" id="pills-accountinformation-tab" data-bs-toggle="pill" data-bs-target="#pills-accountinformation" type="button" role="tab" aria-controls="pills-accountinformation" aria-selected="false">Account Information</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-dark fw-semibold position-relative" id="pills-addressbook-tab" data-bs-toggle="pill" data-bs-target="#pills-addressbook" type="button" role="tab" aria-controls="pills-addressbook" aria-selected="false">Address Book</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-dark fw-semibold position-relative" id="pills-myorders-tab" data-bs-toggle="pill" data-bs-target="#pills-myorders" type="button" role="tab" aria-controls="pills-myorders" aria-selected="false">My Orders</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-dark fw-semibold position-relative" id="pills-mysavedcards-tab" data-bs-toggle="pill" data-bs-target="#pills-mysavedcards" type="button" role="tab" aria-controls="pills-mysavedcards" aria-selected="false">My Saved Cards</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-dark fw-semibold position-relative" id="pills-mydelicash-tab" data-bs-toggle="pill" data-bs-target="#pills-mydelicash" type="button" role="tab" aria-controls="pills-mydelicash" aria-selected="false">My DeliCash</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-dark fw-semibold position-relative" id="pills-myreferrals-tab" data-bs-toggle="pill" data-bs-target="#pills-myreferrals" type="button" role="tab" aria-controls="pills-myreferrals" aria-selected="false">My Referrals</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-dark fw-semibold position-relative" id="pills-mystorecredit-tab" data-bs-toggle="pill" data-bs-target="#pills-mystorecredit" type="button" role="tab" aria-controls="pills-mystorecredit" aria-selected="false">My Store Credit</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-dark fw-semibold position-relative" id="pills-logout-tab" data-bs-toggle="pill" data-bs-target="#pills-logout" type="button" role="tab" aria-controls="pills-logout" aria-selected="false">Logout</button>
    </li>
  </ul>
  </div>
  <div class="col-lg-8 d-flex align-items-start flex-column">
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-accountdashboard" role="tabpanel" aria-labelledby="pills-accountdashboard-tab">
      <h2>My Dashboard</h2>
      <p><b>Hello Mranalini</b></p>
      <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
      <h6 class="mt-4">ACCOUNT INFORMATION</h6>
      <div class="row mt-4">
        <div class="col-lg-6 ">
         <div class="nav border-bottom" style="justify-content:space-between">
           <p><b>CONTACT INFORMATION</b></p>     
           <a href="#" class="nav-link text-dark">EDIT</a>
        </div>
          
        </div>
        <div class="col-lg-6">
            <div class="nav border-bottom" style="justify-content:space-between">
            <p><b>NEWSLETTERS</b></p> 
            <a href="#" class="nav-link text-dark">EDIT</a>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
            <p>charuudhaya</p>
            <p>9600759607</p>
            <p>charuudhaya@gmail.com</p>
            <a href="#" class="nav-link">change password</a>
        </div>
        <div class="col-lg-6">
            <p>You are currently subscribed to 'General Subscription'.</p>
        </div>
      </div>
      <div class="row mt-4" >
        <div class="col-lg-6 border-bottom">
            <p><b>ADDRESS BOOK</b></p>
        </div>
        <div class="col-lg-6 border-bottom d-flex justify-content-end">
            <p><b>MANAGE ADDRESS</b></p>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-lg-6">
        <p>Default Billing Address</p>
        <p>You have not set a default billing address.</p>
        <a class="nav-link" href="#">Edit Address</a>
        </div>
        <div class="col-lg-6 ">
        <p>Default Shipping Address</p>
        <p>You have not set a default shipping address.</p>
        <a class="nav-link" href="#">Edit Address</a>
        </div>
      </div>
    <div class="row mt-4" >
      <div class="col-lg-6">
            <div class="nav border-bottom" style="justify-content:space-between">
            <p><b>SMS</b></p> 
           <a href="#" class="nav-link text-dark">EDIT</a>
            </div>
                <div><p>You are subscribed to SMS promotions.</p></div>
         </div>
</div>
</div>
    <div class="tab-pane fade" id="pills-accountinformation" role="tabpanel" aria-labelledby="pills-accountinformation-tab">
      <h2>Edit Account Information</h2>
      <p>ACCOUNT INFORMATION</p>
      <form action="" method="POST"> 
        <div class="row">
            <div class="col-lg-6">
                <label class="form-label" id="name">First Name</label>
                <input type="text" class="form-control" name="name" id="name">
                <label class="form-label" id="phnumer">Mobile Number</label>
                <input type="number" class="form-control" name="phnumber" id="phnumber">
                <label class="form-label" id="email">Email</label>
                <input type="email" class="form-control" name="email" id="email">
               <div class="mt-3"> <input type="checkbox" class="form-check-input" id="check">
                <label class="form-check-label" for="check">Check me out</label></div>
            </div>
            <div class="col-lg-6">
                <label class="form-label" id="lname">Last Name</label>
                <input type="text" class="form-control" name="lname" id="lname">
            </div>
        </div>
        <button type="submit" class="btn btn mt-3" style="background-color:#ffde59;">Submit</button>

      </form>
    </div>
    <div class="tab-pane fade" id="pills-addressbook" role="tabpanel" aria-labelledby="pills-addressbook-tab">
      <h2>Add New Address</h2>
      <p><b>CONTACT INFORMATION</b></p>
      <form action="" method="POST">
        <div class="row">
            <div class="col-lg-6">
            <label class="form-label" id="name">First Name</label>
                <input type="text" class="form-control" name="name" id="name">
                <label class="form-label" id="phnumer">Mobile Number</label>
                <input type="number" class="form-control" name="phnumber" id="phnumber">
                

            </div>
            <div class="col-lg-6">
            <label class="form-label" id="name">First Name</label>
                <input type="text" class="form-control" name="name" id="name">
                
            </div>
        </div>
            <div class="mt-3">
            <p><b>ADDRESS</b></p>
                <label class="form-label" id="street">Street</label>
                <input type="text" class="form-control w-60" name="street" id="street">
                <label class="form-label" id="landmark">Landmark</label>
                <input type="text" class="form-control w-60" name="landmark" id="landmark">
                
            </div>
            <div class="row">
                    <div class="col-lg-6">
                    <label class="form-label" id="PostalCode">Postal Code</label>
                <input type="text" class="form-control" name="PostalCode" id="PostalCode">
                <label class="form-label" id="AlternatePhoneNumber">Alternate Phone Number</label>
                <input type="text" class="form-control" name="AlternatePhoneNumber" id="AlternatePhoneNumber">
                    </div>
                    <div class="col-lg-6">
                    <label class="form-label" id="Locality">Locality</label>
                <input type="text" class="form-control" name="Locality" id="Locality">
                <label class="form-label" id="city">City</label>

                <select name="city" id="city" class="required-entry validate-state form-control" title="City">
                    <option value="Bangalore">Bangalore</option>
                    <option value="Anantpur">Anantpur</option>
                    <option value="Attibele">Attibele</option>
                    <option value="Bidadi">Bidadi</option>
                    <option value="Chikmagalur">Chikmagalur</option>
                    <option value="Davanagere">Davanagere</option>
                    <option value="Dharmavaram">Dharmavaram</option>
                    <option value="Guntakal">Guntakal</option>
                    <option value="Hassan">Hassan</option>
                    <option value="Hindupur">Hindupur</option>
                    <option value="Hosur">Hosur</option>
                    <option value="Kadiri">Kadiri</option>
                    <option value="Krishnagiri">Krishnagiri</option>
                    <option value="Madikeri">Madikeri</option>
                    <option value="Mandya">Mandya</option>
                    <option value="Mangalore">Mangalore</option>
                    <option value="Mysore">Mysore</option>
                    <option value="Nagamangala">Nagamangala</option>
                    <option value="Ramanagara">Ramanagara</option>
                    <option value="Sakleshpura">Sakleshpura</option>
                    <option value="Shivamogga">Shivamogga</option>
                    <option value="Tadipatri">Tadipatri</option>
                    <option value="Tumkur">Tumkur</option>
                </select>
                    </div>
                </div>
        <button type="submit" class="btn btn mt-3" style="background-color:#ffde59;">Submit</button>

      </form>
    </div>
    <div class="tab-pane fade" id="pills-myorders" role="tabpanel" aria-labelledby="pills-myorders-tab">
      <h2>My Order</h2>
      <p>You have placed no orders.</p>
    </div>
    <div class="tab-pane fade" id="pills-mysavedcards" role="tabpanel" aria-labelledby="pills-mysavedcards-tab">
      <h2>You have no saved cards</h2>
    </div>
    <div class="tab-pane fade" id="pills-mydelicash" role="tabpanel" aria-labelledby="pills-mydelicash-tab">
      <h2>DeliCash</h2>
      <p><b>Balance :</b> 0</p>
    </div>
    <div class="tab-pane fade" id="pills-mydelicash" role="tabpanel" aria-labelledby="pills-mydelicash-tab">
      <h2>DeliCash</h2>
    </div>
    <div class="tab-pane fade" id="pills-myreferrals" role="tabpanel" aria-labelledby="pills-myreferrals-tab">
      <h2>My Referrals</h2>
      <a href="#" class="text-dark">Invite more friends</a>
    </div>
    <div class="tab-pane fade" id="pills-mystorecredit" role="tabpanel" aria-labelledby="pills-mystorecredit-tab">
      <h2>Store Credit</h2>
      <p><b>Total Store Credit accumulated :</b> 0</p>

    </div>
    <div class="tab-pane fade" id="pills-logout" role="tabpanel" aria-labelledby="pills-logout-tab">
      <h2>You Are Now Logged Out</h2>
      <p>You are logged out and will be redirected to our homepage in 5 seconds</p>

    </div>
  </div>
</div>
</div>
        </div>

    </div>
</section>

