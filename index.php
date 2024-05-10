 <?php include("layouts/header.php") ?>
 <?php include_once("config/db.php") ?>
 <?php
    $action = false;
    if (isset($_POST['save'])) {
        $name     = $_POST['name'];
        $email    = $_POST['email'];
        $mobile   = $_POST['mobile'];
        $password = $_POST['password'];

        $insert = " INSERT INTO `users`( `name`, `email`, `password`, `mobile`) VALUES
         ('$name','$email','$password','$mobile')";
        $insert_q = mysqli_query($conn, $insert);
        if (!$insert_q) {
            die(mysqli_error($conn));
        } else {
            $action = 'add';
        }
    }
    $select = "SELECT * FROM users";
    $select_q = mysqli_query($conn, $select);
    $user = $select_q->fetch_assoc();
    ?>

 <div class="container">
     <div class="wraper p-5 m-5 ">
         <div class="d-flex p-2 justify-content-between">
             <h2>All Users</h2>
             <div><a href="add_user.php"><i data-feather="user-plus"></i></a></div>

         </div>
         <div class="m-4 p-4">
             <table class="table">
                 <thead>
                     <tr>
                         <th scope="col">id</th>
                         <th scope="col">name</th>
                         <th scope="col">email</th>
                         <th scope="col">mobile</th>
                         <th scope="col">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php while ($user = $select_q->fetch_assoc()) : ?>
                         <tr>
                             <th><?= $user['id'] ?></th>
                             <td><?= $user['name'] ?></td>
                             <td><?= $user['email'] ?></td>
                             <td><?= $user['mobile'] ?></td>
                             <td>
                                 <div class="d-flex p-2 justify-content-evenly">
                                     <i data-feather="trash-2" class="text-danger"></i>
                                     <a href="edit.php"><i data-feather="edit" class="text-success"></i></a>
                                 </div>

                             </td>
                         </tr>
                     <?php endwhile ?>

                 </tbody>
             </table>
         </div>
     </div>
 </div>

 <?php include("layouts/footer.php") ?>