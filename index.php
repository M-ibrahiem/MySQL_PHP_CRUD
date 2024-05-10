 <?php include("layouts/header.php") ?>
 <?php include_once("config/db.php") ?>
 <?php
    if (isset($_POST['save'])) {
        $name     = $_POST['name'];
        $email    = $_POST['email'];
        $mobile   = $_POST['mobile'];
        $password = $_POST['password'];

        $add_sql = " INSERT INTO `users`( `name`, `email`, `password`, `mobile`) VALUES
         ('$name','$email','$password','$mobile')";
        $q = mysqli_query($conn, $add_sql);
        if (!$q) {
            die(mysqli_error($conn));
        } else
            echo "User add scussfully";

            
    }
    ?>

 <div class="container">
     <div class="wraper p-5 m-5 ">
         <div class="d-flex p-2 justify-content-between">
             <h2>All Users</h2>
             <div><a href="add_user.php"><i data-feather="user-plus"></i></a></div>
         </div>
     </div>
 </div>

 <?php include("layouts/footer.php") ?>