<?php
if (isset($_POST['register'])) {
  //getting the data

  $username = $_POST['username'];
  $password = $_POST['password'];


  if ($username != "" && $password != "") {

    //sql statement
    $sql = "INSERT INTO users(username,password) VALUES('$username','$password')";

    //making connection
    include_once("db.php");

    //executing query
    $qry = mysqli_query($conn, $sql) or die("Query failed: " . mysqli_error($conn));
    if ($qry) {
      echo "Data inserted successfully";
      header("Location: login.php");
    }
  }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                            <h4>New here? Register</h4>

                            <form class="pt-3" method="POST" name="register">
                                <div class="form-group">
                                    <label style="font-size:20px;" for="username">Username</label>
                                    <input style="border:1px solid black; border-radius:10px;" type="text"
                                        name="username" class="form-control form-control-lg" id="username"
                                        placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label style="font-size:20px;" for="username">Password</label>
                                    <input style="border:1px solid black; border-radius:10px;" type="password"
                                        name="password" class="form-control form-control-lg" id="password"
                                        placeholder="Password">
                                </div>
                                <div class="mt-3">

                                    <input type="submit" name="register"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                        value="SIGN UP" />

                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="login.php" class="text-primary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <!-- endinject -->
</body>

</html>