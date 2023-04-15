<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap 5 Registration Form Example</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <!-- <script type="text/javascript" src="public/assets/js/validation.js"></script> -->
        <!-- <script src="public/assets/js/validation.js"></script> -->
        <link rel="stylesheet" href="/assets/js/validation.js">
    </head>
    <body>
        <div class="container-fluid vh-100" >
            <div class="" style="margin-top:100px">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="text-primary">Registration</h3>
                        </div>
                        <div class="p-4">
                            <form  action="/registration" method="Post" onsubmit="return registration_form();">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                                    <input type="text" name="First_Name" id ="First_Name" class="form-control" placeholder="Enter First Name" >
                                    <span class="badge badge-secondary" id="error_First_Name"></span>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                                    <input type="text" name="Last_Name" id ="Last_Name" class="form-control" placeholder="Enter Last Name" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-envelope text-white"></i></span>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-key-fill text-white"></i></span>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="password" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-key-fill text-white"></i></span>
                                    <input type="password" name="Re_type_password" id="Re_type_password" class="form-control" placeholder="Re-type Password" onChange="checkPasswordMatch();"  required> 
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-phone text-white"></i></span>
                                    <input type="number" name="Phone" id="Phone" class="form-control" placeholder="Enter Phone Number" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-file-person-fill text-white"></i></span>
                                    <input type="text" name="about_us" id="about_us" class="form-control" placeholder="How did you hear about us " required>
                                </div>
                                <div class="d-grid col-12 mx-auto">
                                    <button class="btn btn-primary" type="submit" name="submit"><span></span> Sign up</button>
                                </div>
                                <p class="text-center mt-3">Already have an account?
                                    <a href="Login">
                                        <span class="text-primary">Sign in</span>
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>   

</body>
</html>
<script>
   function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#Re_type_password").val();
    // alert(password);
    if (password != confirmPassword)
        alert('password is not Match');
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
    }

        // $(document).ready(function () {
        // $("#Re_type_password").keyup(checkPasswordMatch);
        // });
</script>