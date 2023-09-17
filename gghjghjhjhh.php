<?php 
include("connection.php");
$query="select * from tbl_committee";
$res=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <script src="js/bootstrap.bundle.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <?php 
                  while($row=mysqli_fetch_array($res))
                   {
                    $cc_id=$row['cc_id'];
                    //echo $cc_id;
                    $query2="select * from tbl_committee_member where 
                    cc_id='$cc_id'";
                    $res2=mysqli_query($con,$query2);
                ?>


  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $row['cc_id']; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
       <?php echo $row['committee_name'];  ?>
      </button>
    </h2>
    <div id="flush-collapseOne<?php echo $row['cc_id']; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <table class="table table-bordered">
            <tr>
                <th>S.NO.</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Department</th>
            </tr>
             <?php
             $a=1;
          while($row2=mysqli_fetch_array($res2))
          {
            ?>
          

           ?>
            <tr>
                <td><?php echo $a; ?></td>
                <td><?php echo $row2['mem_name']; ?></td>
                <td><?php echo $row2['mem_deg']; ?></td>
                <td><?php echo $row2['dept_id']; ?></td>
            </tr>
            <?php
             $a++;
            }
            ?>
        </table>
      </div>
    </div>
  </div>
 
              <?php
                }

               ?>

</div>



            </div>
        </div>
    </div>
    
</body>
</html>








<!--


note=====
<?php/*
session_start();
if($_SESSION['admin']=="")
{
    header("Location.index.php");
}


*/


?>