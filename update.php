<?php

include 'connect.php';

if(isset($_POST['done'])) {


  $id = $_GET['id'];	
  $companyname = $_POST['companyname'];
  $modelname = $_POST['modelname'];
  $colorname = $_POST['colorname'];
  $dateofpur = $_POST['dateofpur'];
  $price = $_POST['price'];
  $enginecap = $_POST['enginecap'];
  $seatingcap = $_POST['seatingcap'];
  $licencenum = $_POST['licencenum'];

  $q = " update mrbean set id=$id, companyname='$companyname', modelname='$modelname', colorname='$colorname', dateofpur='$dateofpur', price='$price', enginecap='$enginecap', seatingcap='$seatingcap', licencenum='$licencenum' where id=$id";

  $query = mysqli_query($conn,$q);

  header('location:display.php');

}

?>


 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr Bean Car App</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>

<!---------Add page --------------------->

<section id="add">
    <section id="bg">
    <article>
  <!----  <img src="./images/photo-1526726538690-5cbf956ae2fd.jpg" alt="car" style="width: 100%;height: 100%;"> -->
    <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-md-6">
            <form class="form_contain" action="connect.php" method="post">
                <h5>Update Car Details:</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="companyname">Company</label>
                        <input type="text" class="form-control" id="companyname" placeholder="Eg. Audi" name="companyname">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="modelname">Model</label>
                        <input type="text" class="form-control" id="modelname" placeholder="Eg. Audi A6" name="modelname">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="colour">color</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Eg. White" name="colorname">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="dateofpurchase">Date Of Purchase</label>
                        <input type="text" class="form-control" id="dateofpurchase" placeholder="dd-mm-yyyy" name="dateofpur">
                    </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" placeholder="Eg. 86000" name="price">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="enginecap">Engine Capacity</label>
                    <input type="text" class="form-control" id="enginecap" placeholder=" value In Litres" name="enginecap">
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="capcity">Seating Capacity</label>
                      <input type="text" class="form-control" id="price" placeholder="Eg. 4 " name="seatingcap">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="licencenum">Licence Plate Number</label>
                      <input type="text" class="form-control" id="enginecap" placeholder="Eg. 5596" name="licencenum">
                    </div>
                  </div>
                
                <button type="submit" class="btn btn-primary btn-block" name="done">Add New Car</button>
              </form>
            </div>
    </div>
</article>
</section>
</section>

<!---------Add page Ends-------------->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>
</html>