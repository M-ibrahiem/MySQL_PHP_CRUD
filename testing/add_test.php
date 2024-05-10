<?php include("layouts/header.php") ?>

<div class="container">
    <div class="wrapper p-5 m-5">
        <div class="d-flex p-2 justify-content-between">
            <h2>Add Users</h2>
            <div><a href="add_user.php"><i data-feather="corner-down-left"></i></a></div>

            <form action="TEST.PHP" method="POST">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="enter your name" name="name" autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="enter your email" name="email" autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mobile</label>
                    <input type="tel" class="form-control" id="mobile" placeholder="enter your mobile" name="mobile" autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="enter your password" name="password" autocomplete="false">
                </div>
            </form>
        </div>

    </div>
</div>

<?php include("layouts/footer.php") ?>