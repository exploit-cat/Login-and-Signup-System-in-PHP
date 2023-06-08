<?php include 'include/header.php';?>

<div class="container mt-5 border p-5" style="width:400px;">
    <form method="post" action="include/functions.php">
        <h3>Login</h3>
        <div class="mt-3">
            <label for="username" class="form-label">Username: </label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mt-3">
            <label for="password" class="form-label">Password: </label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mt-5">
            <button class="btn btn-success" name="login">Login</button>
            <p class="mt-3"><a href="index.php" class="text-decoration-none text-dark">Create New Account</a></p>
            <?php if(isset($_GET['error'])){echo "<p class='text-danger mt-5' style='font-size:small;'>Incorrect Username/Password...</p>";}?>
        </div>
    </form>
</div>

<?php include 'include/footer.php';?>