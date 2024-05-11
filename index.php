<?php
include("layouts/header.php");
include_once("config/db.php");

$action = false;

if (isset($_POST['save'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    if ($_POST['save'] == "Save") {
        // Insert
        $save_sql = "INSERT INTO `users` (`name`, `email`, `password`, `mobile`) VALUES ('$name', '$email', '$password', '$mobile')";
    } else {
        $id = $_POST['id'] ?? null;
        $save_sql = "UPDATE `users` SET `name`='$name', `email`='$email', `mobile`='$mobile', `password`='$password' WHERE id = $id";
    }

    // Execute the query
    $insert_q = mysqli_query($conn, $save_sql);
    if (!$insert_q) {
        die(mysqli_error($conn));
    } else {
        if (isset($_POST['id'])) {
            $action = "edit";
        } else {
            $action = "add";
        }
    }
}

// Function to delete user
if (isset($_GET['action']) && $_GET['action'] == 'del') {
    $id = $_GET['id'];
    $delete = "DELETE FROM users WHERE id = $id";
    $delete_q = mysqli_query($conn, $delete);
    if (!$delete_q) {
        die(mysqli_error($conn));
    } else {
        $action = "del";
    }
}

// Select
$select = "SELECT * FROM users";
$select_q = mysqli_query($conn, $select);
?>
<!-- HTML code -->
<div class="container">
    <div class="wraper p-5 m-5 ">
        <div class="d-flex p-2 justify-content-between">
            <a href="index.php" style="text-decoration: none; color: black;">
                <h2>All Users</h2>
            </a>
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
                                    <i onclick="confirmDelete(<?= $user['id'] ?>);" data-feather="trash-2" class="text-danger"></i>
                                    <i onclick="confirmEdit(<?= $user['id'] ?>);" data-feather="edit" class="text-success"></i>
                                </div>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("layouts/footer.php") ?>