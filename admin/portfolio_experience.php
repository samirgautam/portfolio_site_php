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
if(isset($_POST['company_name'])){
    //extracting data from the form
    $company_name = $_POST['company_name'];
    $position = $_POST['position'];
    $job_details = $_POST['job_details'];
    $joined_date = $_POST['joined_date'];
    $completion_date = $_POST['completion_date'];
   

    if($company_name == "" || $position == "" || $job_details == "" || $joined_date == "" || $completion_date == ""){
      $error = "Please fill out the required fields. <br>";
    }
    if($error == ""){
      $sql = "insert into portfolio_personal (`company_name`, `position`, `job_details` , `joined_date`, `completion_date` ) values ('$company_name','$position','$job_details','$joined_date','$completion_date')";

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
          <input type="text" class="form-control"  name="company_name">
        </div>
        <label class="control-label col-sm-2" >Description:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control"  name="position"> 
        </div>
        <label class="control-label col-sm-2" >CV:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control"   name="job_details">
        </div>  
        <label class="control-label col-sm-2" >Contact:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="joined_date"name="joined_date">
        </div>
        <label class="control-label col-sm-2" >Photo:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="completion_date"name="completion_date">
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



