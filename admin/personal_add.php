<?php
     include ("../front_end/connection.php");
     ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../front_end/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <?php include ("navigation.php");?>

<br>

<?php 
//declaring variables and passing empty values
$error = "";

//when user clicks on the submit button
if(isset($_POST['position'])){
    //extracting data from the form
    $position = $_POST['position'];
    $description = $_POST['description'];
    $cv = $_POST['cv'];
    $contact = $_POST['contact'];
    $photo = $_POST['photo'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    if($position == "" || $description == "" || $cv == "" || $contact == "" || $photo == ""|| $email == "" || $address == ""){
      $error = "Please fill out the required fields. <br>";
    }
    if($error == ""){
      $sql = "insert into portfolio_personal (`position`, `description`, `cv` , `contact`, `photo`, `email` ,`address`) values ('$position','$description','$cv','$contact','$photo','$email','$address')";

      $result = mysqli_query($connection, $sql);
      if($result)
      {
        ?>
         <div class="alert alert-success" >
          <strong> Success! </strong> User Added Succesfully 
        </div>

        <?php
        }
        else {
          ?>
           <!-- dispalying error message -->
           <div class="alert alert-warning" >
          <strong> Error  </strong> <?php echo $error ; ?> 
        </div>
        <?php
        }


        }

      }
?>

    <form class="form-horizontal" action='<?php $_SERVER["PHP_SELF"];?>' method ='post' >
      <div class="form-group">
        <label class="control-label col-sm-2" >Position:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control"  name="position">
        </div>
        <label class="control-label col-sm-2" >Description:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control"  name="description"> 
        </div>
        <label class="control-label col-sm-2" >CV:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control"   name="cv">
        </div>  
        <label class="control-label col-sm-2" >Contact:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="contact"name="contact">
        </div>
        <label class="control-label col-sm-2" >Photo:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="photo"name="photo">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" >Email:</label>
        <div class="col-sm-10">          
          <input type="email" class="form-control" id="email"  name="email">
        </div>
        <label class="control-label col-sm-2" >Address:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="address">
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
          </div>
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
    


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

  
<?php include "footer.php" ?>

</html>



