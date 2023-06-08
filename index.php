<?php include 'include/header.php';?>

<div class="container mt-5 border p-5" style="width:400px;">
    <form method="post" action="include/functions.php">
        <h3>Sign up</h3>
        <div class="mt-5">
            <label for="name" class="form-label">Name: </label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mt-3">
            <label for="email" class="form-label">Email: </label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mt-3">
            <label for="username" class="form-label">Username: </label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mt-3">
            <label for="password" class="form-label">Password: </label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mt-5">
            <button class="btn btn-success" name="signup">Signup</button>

            <?php if(isset($_GET['error'])){echo "<p class='text-danger mt-5' style='font-size:small;'>Something went wrong...</p>";}?>
        </div>
    </form>
</div>

<?php include 'include/footer.php';?>