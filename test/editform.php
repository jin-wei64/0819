<?php
    if (!isset($_GET["id"])){
        die("id not found.");
    }
    $id = $_GET["id"];
    if(!is_numeric($id)){
        die("id not a number .");
    }
    
    echo $sql;
    require("config.php");
    if(isset($_POST["submit"])){
        $firstname = $_POST["firstName"];
        $lastname = $_POST["lastName"];
        $cityId = $_POST["cityId"];
        $sql = <<<de
        update employee set firstName = '$firstname' ,lastName = '$lastname',cityId = '$cityId'

        de;


    }
    else{
        $sql = "select * from employee where employeeId = $id" ;
        $result = mysqli_query($link,$sql);
        $row = mysql_fetch_assoc($result);
    }
    

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>

<div class="container">
<div>&nbsp;</div>
<form>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">FirstName</label> 
    <div class="col-8">
      <input id="text" name="text" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">LastName</label> 
    <div class="col-8">
      <input id="text1" name="text1" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">City</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="2"> 
        <label for="radio_0" class="custom-control-label">Taipei</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="4"> 
        <label for="radio_1" class="custom-control-label">TaiChung</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="6"
        <?= ($row["cityId"] == 4) ? "checked" : "" ?>
        > 
        <label for="radio_2" class="custom-control-label">TaiNan</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-outline-info">Submit</button>
    </div>
  </div>
</form>
</div>
</body>
</html>