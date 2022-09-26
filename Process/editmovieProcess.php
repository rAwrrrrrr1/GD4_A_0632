<?php
    if(isset($_POST['simpan'])){

        include('../db.php');

        $id = $_POST['id'];
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $release = $_POST['release'];
        $season = $_POST['season'];
        
        $sql = "UPDATE movies SET name='$name', genre='$genre',  relaese='$release', season='$season'  WHERE id=$id";

        if ($con->query($sql) == TRUE){
          echo '<script> alert("Edit Movie Success"); window.location = "../page/editMovie.php" </script>';
        } else {
          echo'<script> alert("Edit Movie Failed") </script>';
        }
    }else{
        echo
            '<script> window.history.back() </script>';
    }
?>