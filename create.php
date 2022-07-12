<?php
    require_once 'db_con.php';
    if(isset($_POST['add_new'])){
        $username = $_POST['username'];
        $useremail = $_POST['useremail'];
        $amount = $_POST['amount'];
        $price = $_POST['price'];

        $sql = "INSERT into user (username,useremail,amount, price) values('$username','$useremail','$amount', '$price')";

        if(mysqli_query($dbc, $sql)){
            echo "Data Inserted";
        }else{
            echo "error";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

    <section style="padding-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Lab4</h1>
                    <form method="post" action="">
                        <div class="form-group">
                            <input type="text" name="username" placeholder="Username" class="form-control">
                        </div><br>
                        <div class="form-group">
                            <input type="email" name="useremail" placeholder="UserEmail" class="form-control">
                        </div><br>
                        <div class="form-group">
                            <input type="number" name="amount" placeholder="amount" class="form-control">
                        </div><br>
                        <div class="form-group">
                            <input type="number" name="price" placeholder="price" class="form-control">
                        </div><br>
                        <div class="form-group">
                            <button name="add_new" type="submit" class="btn btn-primary">Add new</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>