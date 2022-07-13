<?php
    require_once 'db_con.php';
    $get_id = "";
    if($_GET['id']){
        $get_id = $_GET['id'];
        $sql = "DELETE from user WHERE id = $get_id";
        if(mysqli_query($dbc, $sql)){
            echo "Data Deleted";
            echo ("<script>location.href = 'index.php'</script>");
        }else{
            echo "error";
        }
    }
?>