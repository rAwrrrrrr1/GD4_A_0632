<?php
include '../component/sidebar.php'
?>

<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <title>Profile Page</title>
</head>

<body>
    
        <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
        solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
        0.19);">
            
                <div class="card-header">My Profile</div>
                <div class="card-body">
                    <form action="">
                        <div class="mb">
                            <label for="nama" class="formlabel">Name</label>
                            <input type="text" class="form-control" id="nama" value="<?php echo $_SESSION['user']['name']?>"  readonly>
                        </div>
                        <div class="mb">
                            <label for="telp" class="formlabel">Phone Number</label>
                            <input type="text" class="form-control" id="telp" value="<?php echo $_SESSION['user']['phonenum']?>"  readonly>
                        </div>
                        <div class="mb">
                            <label for="member" class="formlabel">Membership</label>
                            <input type="text" class="form-control" id="member" value="<?php echo $_SESSION['user']['membership']?>"  readonly>
                        </div>
                        <div class="mb">
                            <label for="email" class="formlabel">Email</label>
                            <input type="text" class="form-control" id="email" value="<?php echo $_SESSION['user']['email']?>"  readonly>
                        </div>
                    </form>
                </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>