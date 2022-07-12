<?php
  require_once 'db_con.php';
  $sql = "SELECT * from user";

  $run = mysqli_query($dbc, $sql);
  $i=1;

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
        <h1>Read User table</h1>
        <div class="col-md-12">
          <table class="table table-striped">
            <thead>
              <th>id</th>
              <th>username</th>
              <th>Useremail</th>
              <th>amount</th>
              <th>price</th>
              <th>action</th>
            </thead>
            <tbody>
              <?php 
                while($row = mysqli_fetch_assoc($run)){
                  $id = $row['id'];
                  $username = $row['username'];
                  $useremail = $row['useremail'];
                  $amount = $row['amount'];
                  $price = $row['price'];
                
              ?>
              <tr>
                <td><?=$i?></td>
                <td><?=$username?></td>
                <td><?=$useremail?></td>
                <td><?=$amount?></td>
                <td><?=$price?></td>
                <td>
                  <a href="edit.php ?id=<?=$id?>" class="btn btn-success">Update</a>
                  <a href="delete.php ?id=<?=$id?>" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              <?php 
                $i++;}
              ?>
            </tbody>
          </table>

                <a href="create.php" class="btn btn-primary">Add New</a>

        </div>
      </div>
    </div>
  </section>


</body>
</html>