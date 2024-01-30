<?php 
    $mobile_number = $_GET['mobile'];
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verify Mobile Number - LaravelTuts.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                <h1 class="text-center">Verify Mobile Number - LaravelTuts.com</h1>
            </div>
            <div class="card-body">
                <form action="otp.php" method="post">
                    <div class="mt-4">
                        <label for="mobile">Mobile</label>
                        <input type="number" name="moblie_no" class="form-control" placeholder="Enter mobile no" value="<?php echo $mobile_number;?>">
                    </div>
                    
                    <div class="mt-4">
                        <label for="otp">OTP</label>
                        <input type="number" name="otp" class="form-control" placeholder="Enter OTP">
                    </div>
                    <div class="text-center mt-4">
                        <input type="submit" name="verify" value="verify" class="btn btn-primary">
                    </div>
                </form>         
            </div>
        </div>
    </div>
</body>
</html>