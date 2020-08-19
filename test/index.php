<?php
require("config.php");
$sql = "select employeeId,firstName,lastName, e.cityId, cityName  
from city c join employee e 
on e.cityId = c.cityId;";
$result = mysqli_query($link ,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Hoverable Dark Table</h2>
  <p>The .table-hover class adds a hover effect (grey background color) on table rows:</p>            
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>City</th>
        <th>
        <span  style="float:right">
            <a href ="./addform.php" class="btn btn-outline-info">Add</a>
        </span>
        </th>
      </tr>
    </thead>
    <tbody>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?= $row["firstName"] ?></td>
        <td><?= $row["lastName"] ?></td>
        <td><?= $row["cityName"] ?></td>
        <td>
        <span  style="float:right">
        <a href ="./editform.php" class="btn btn-outline-info">Edit</a>
        <a href ="./delet.php?=<?= $row["cityId"] ?>"class="btn btn-outline-secondary">delete</a>
        </span>
        </td>  
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
