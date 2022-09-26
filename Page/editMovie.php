<?php
    include '../component/sidebar.php'
    $id = $_GET["id"];
    $edit = mysqli_query($con, "SELECT * FROM movies WHERE id=$id");
    $data = mysqli_fetch_array($sql);
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Page</title>
</head>

<form action="../process/editmovieProcess.php" method="post">
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
        solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
        0.19);">
            
                <div class="card-header">My Profile</div>
                <div class="card-body">
                    <form action="">
                        <div class="mb">
                            <label for="nama" class="formlabel">Name</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="mb">
                            <label for="telp" class="formlabel">Phone Number</label>
                            <input type="text" class="form-control" id="telp">
                        </div>
                        <div class="mb">
                            <label for="member" class="formlabel">Membership</label>
                            <input type="text" class="form-control" id="member">
                        </div>
                        <div class="mb">
                            <label for="email" class="formlabel">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                    </form>
                </div>
        </div>
</form>


