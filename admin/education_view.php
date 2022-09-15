<?php
include("../front_end/connection.php");
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
  <?php include "navigation.php" ?>
<br>

<h2>Table</h2>
  
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>university</th>
        <th>college</th>
        <th>joined</th>
        <th>completed</th>
        <th>course</th>
        <th>percentage</th>

      </tr>
    </thead>
 


     <!-- selecting all data from portfolio_education table -->
     <?php
     
     $sql = "select * from portfolio_education";
     $result = mysqli_query($connection, $sql);
     if(mysqli_num_rows($result) >0 ) {
         while($row = mysqli_fetch_assoc($result)){
             ?>

    <tbody>
      <tr>
        <td>  <?=$row['university']?></td>
        <td>  <?=$row['college']?></td>
        <td>  <?=$row['joined']?></td>
        <td>  <?=$row['completed']?></td>
        <td>  <?=$row['course']?></td>
        <td>  <?=$row['percentage']?></td>
        
      </tr>
    </tbody>


 
  <?php
         }
        }
        ?>

        </table>
        </div>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

  
<?php include "footer.php" ?>

</html>


