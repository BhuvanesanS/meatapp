<?php 
    require ('connection.php');
    session_start();
    if (isset($_POST['login'])) {
        
        $moblie_number =$_POST['moblie_number'];
        $password_login =$_POST['password'];
        $sql="SELECT * FROM users WHERE mobile = '$moblie_number' AND password = '$password_login' AND verification_status = '1'";
        $result = $conn->query($sql);
        
        if ($row = $result->fetch_assoc()) {
            $_SESSION['logged_in']=TRUE;
            $_SESSION['mobile']=$row['mobile'];
            header('location:index.php');
        }else{
            echo "
                <script>
                    alert('please verify your mobile!!');
                    window.location.href='index.php'
                </script>";
        } 
    }
    if (isset($_POST['register'])) {
            
        $fullName =$_POST['fullName'];
        $username =$_POST['username'];
        $no =$_POST['number'];
        $password =$_POST['password'];
        $otp = rand(1111,9999);
        if(preg_match("/^\d+\.?\d*$/",$no) && strlen($no)==10){
            $user_exist_query="SELECT * FROM users WHERE mobile= '$no'";
            $result = $conn->query($user_exist_query);
            if ($result) {
                
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    
                    if ($row['username'] === $username) {
                        echo "
                            <script>
                                alert('Mobile no alredy register!');
                                window.location.href='index.php'
                            </script>";
                    }
                
                }else{
                    
                    $query ="INSERT INTO `users`(`fullName`, `username`, `mobile`, `password`,`otp`, `verification_status`) VALUES ('$fullName','$username','$no','$password','$otp','0')";
                        
                    if ($conn->query($query)===TRUE) {
                        $fields = array(
                            "variables_values" => "$otp",
                            "route" => "otp",
                            "numbers" => "$no",
                        );
                        
                        $curl = curl_init();
                        
                        curl_setopt_array($curl, array(
                          CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => "",
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 30,
                          CURLOPT_SSL_VERIFYHOST => 0,
                          CURLOPT_SSL_VERIFYPEER => 0,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => "POST",
                          CURLOPT_POSTFIELDS => json_encode($fields),
                          CURLOPT_HTTPHEADER => array(
                            "authorization: Your-Api-Key",
                            "accept: */*",
                            "cache-control: no-cache",
                            "content-type: application/json"
                          ),
                        ));
                        
                        $response = curl_exec($curl);
                        $err = curl_error($curl);
                        
                        curl_close($curl);
                        
                        if ($err) {
                            echo "cURL Error #:" . $err;
                        } else {
                            $data = json_decode($response);
                            $sts = $data->return;
                            if ($sts == false) {
                                echo "
                                <script>
                                    alert('Your OTP is not send.');
                                    window.location.href='index.php'
                                </script>";
                            }else{
                                echo "
                                <script>
                                    alert('Register Successful. Please Check your text message and verify your account.');
                                    window.location.href='verification.php?mobile=$no'
                                </script>";
                            }
                        }
                    }else{
                        echo "
                            <script>
                                alert('Something went wrong!!!');
                                window.location.href='index.php'
                            </script>";
                    }
                }
            }else{
                echo "
                <script>
                    alert('donot enter in if');
                    window.location.href='index.php'
                </script>";
            }
        }else{
            echo "
                <script>
                    alert('Invalid Mobile Number!!');
                    window.location.href='index.php'
                </script>";
        }
    }
 ?>