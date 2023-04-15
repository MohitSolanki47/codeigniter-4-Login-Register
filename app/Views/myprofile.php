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
        <?php 
            // print_r($user);
            // exit();
        ?>
        <div class="container-fluid vh-100" >
            <div class="" style="margin-top:100px">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="text-primary">Update Data</h3>
                        </div>
                        <?php include 'alert.php';?>
                        <a href="dashboard">
                        <i class="">Back To Dashboard</i>
                        </a>
                        <div class="p-4">
                            <form  action="/Update_profile" method="Post" onsubmit="return registration_form();">
                                <div class="input-group mb-3">
                                <input type="hidden" name="User_id" id ="User_id" class="form-control" value="<?php echo $user['id']; ?>" placeholder="Enter First Name" >
                                    <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                                    <input type="text" name="First_Name" id ="First_Name" class="form-control" value="<?php echo $user['First_Name']; ?>" placeholder="Enter First Name" >
                                    <span class="badge badge-secondary" id="error_First_Name"></span>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                                    <input type="text" name="Last_Name" id ="Last_Name" class="form-control" value="<?php echo $user['Last_Name']; ?>" placeholder="Enter Last Name" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-envelope text-white"></i></span>
                                    <input type="email" name="email" id="email" class="form-control" value="<?php echo $user['email']; ?>" placeholder="Email" required>
                                </div>
                                <div class="input-group mb-3">
                                    <?php 
                                        
                                        $Phone =  $user['Phone'];
                                        $Phone = explode(",",$Phone);
                                        $Phone1 = $Phone[0] ?? "";
                                        $Phone2 = $Phone[1] ?? ""; 
                                        // print_r($Phone[1]);
                                        // exit;
                                    ?>
                                    <span class="input-group-text bg-primary"><i class="bi bi-phone text-white"></i></span>
                                    <input type="number" name="Phone" id="Phone" class="form-control" value="<?php print_r($Phone1) ?>" placeholder="Enter Phone Number" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-phone text-white"></i></span>
                                    <input type="number" name="Phone2" id="Phone2" value="<?php print_r($Phone2) ?>" class="form-control" placeholder="Enter Phone Number" >
                                </div>
                                <div class="d-grid col-12 mx-auto">
                                    <button class="btn btn-primary" type="submit" name="Update"><span></span> Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>   

</body>
</html>