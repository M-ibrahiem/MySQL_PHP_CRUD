<?php include("layouts/header.php");
include_once("config/db.php");
$title = "Add";
$name = $email = $mobile = $password = '';
$btn_title = 'Save';


// to know update or edit
if (isset($_GET['action']) && $_GET['action'] == 'edit') {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id ";
    $user = mysqli_query($conn, $sql);
    if ($user) {
        $title = "Update";
        $current_user = $user->fetch_assoc();
        $name = $current_user['name'];
        $email = $current_user['email'];
        $mobile = $current_user['mobile'];
        $password = $current_user['password'];
        $btn_title = 'Update';
    }
}
?>

<div class="container">
    <div class="wraper p-5 m-5 ">
        <div class="d-flex p-2 justify-content-between">
            <h2> <?= $title ?> Users</h2>

            <div><a href="index.php"><i data-feather="corner-down-left"></i></a></div>
        </div>

        <div class="m-4">
            <form action="index.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" value="<?= $name ?>" id="name" placeholder="enter your name" name="name" autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" value="<?= $email ?>" id="email" placeholder="enter your email" name="email" autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mobile</label>
                    <input type="tel" class="form-control" value="<?= $mobile ?>" id="mobile" placeholder="enter your mobile" name="mobile" autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" value="<?= $password ?>" id="password" placeholder="enter your password" name="password" autocomplete="false">
                </div>

                <?php if (isset($_GET['id'])) : ?>

                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

                <?php endif ?>

                <input type="submit" name="save" value="<?= $btn_title ?>" value="" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
<?php include("layouts/footer.php") ?>