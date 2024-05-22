<?php 

include("layout/header.php");
if (isset($_POST['tambah'])) {
    if (create_barang($_POST) > 0) {
        echo'<script>
                alert("Data berhasil ditambah");
                document.location.href = "table.php";
            </script>';
    } else {
        echo'<script>
                alert("Data gagal ditambah");
                document.location.href = "create.php";
            </script>';
    }
}

?>

<div class="container mt-5">

<h1>Register</h1>
<hr class="mb-3">

<form action="" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Your Name</label>
        <input type="text" class="form-control" id="nama" name="nama" required placeholder="Your name">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Your Email</label>
        <input type="email" class="form-control" id="email" name="email" required placeholder="Your email">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Your password</label>
        <input type="password" class="form-control" id="password" name="password" required placeholder="Your password">
    </div>

    <button type="submit" name="tambah" class="btn btn-primary mt-3" style="float: right;">Submit</button>
</form>
</div>

<?php include("layout/footer.php"); ?>