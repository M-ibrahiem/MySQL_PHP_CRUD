 <?php include("layouts/header.php") ?>
 <?php 
 if(isset($_POST['save'])){
    echo "<pre>";
    var_dump($_POST);
    die();
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