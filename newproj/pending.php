<?php 
    include_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP ICON LINK -->
   
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Pending</title>
</head>

<body class="bg-light" >


<!--- Profile Section --->

    <div class="container-fluid p-0 d-flex" style="overflow-x: hidden;">
     
    <?php 
include_once 'db.php';

$sql = "SELECT * FROM registration";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {

$name=$row['name'];
$pass = $row['pass'];
$fullname = $row['fullname'];


$usertype = $row['usertype'];
$position = $row['position'];
$storecode = $row['storecode'];
$id_num= $row['id_num'];

?>

<div class="position-relative main-content" id="plot-content" style="width: 100%;">


<div class="row g-2 px-3 my-1">
<div class="col-12 col-lg-4">
<div class="card shadow-sm rounded-0 border-0">
<div class="card-header">
<strong>Task Management System</strong>
</div>
<div class="card-body">

    <div class="my-2">
    

<label for="" style="margin-left:20px;"><?php echo $usertype; ?></label> 
<br>

<img style="width:20%; height:13%; border-radius:10px;" src="person.jpg" class="img-thumbnail" alt="...">

<div class="box" style="width:45%; margin-left:23%; margin-top:-20%;">
<h4 for="" style="">Name of the Employee</h4>
<input  class="form-control" name="name" value="<?php echo $fullname; ?>">
</div>

<!--<label for="">Position</label>
<p><u>"<?php echo $position; ?>"</u></p>


<label for="">Storecode</label>
<p style="font-size:30px; font-weight:300;">" <?php echo $storecode; ?> "</p>-->


<!-- DASHBOARD Section --->

<div class="row" style="margin-top:65px; margin-left:10px;">
<div type="button" style="width:28%; " class="col-md-6    rounded-5 shadow box-area  p-4  btn btn-primary ">
<a href="tadminview.php" style="color: white;">
<div >Total task <br>
<p align="center">
    <?php  
    include_once('db.php');
        $dashboard_tasklist_query = "SELECT * from tasklist";
        $dashboard_tasklist_query_run = mysqli_query($conn, $dashboard_tasklist_query);

        if ($tas = mysqli_num_rows($dashboard_tasklist_query_run)) {
            echo '<h4 class="mb-0">'.$tas.'</h4> ';
        }else{
            echo 'NoData!';
        }

?></p>
</div></a></div>

<div type="button"style="width:28%; margin-left:5px;"class="col-md-6   right-box  rounded-5 shadow box-area text-white p-4  btn btn-secondary ">
<a href="pending.php" style="color: white;" >
<div >Pending<br>
<p align="center"> 
    

    
    <?php  
    include_once('db.php');
        $dashboard_tasklist_rate_query = "SELECT * from tasklist WHERE rate='0'";
        $dashboard_tasklist_rate_query_run = mysqli_query($conn, $dashboard_tasklist_rate_query);

        if ($rate = mysqli_num_rows($dashboard_tasklist_rate_query_run)) {
            echo '<h4 class="mb-0">'.$rate.'</h4> ';
        }else{
            echo 'NoData!';
        }

?></p>
</div></a></div>
<div style="width:28%; margin-left:5px;" class="col-md-6   right-box  rounded-5 shadow box-area text-white p-4  btn btn-success ">
<a href="complete.php" style="color: white;">
<div >Completed<br>
<p align="center">
<?php  
    include_once('db.php');
        $dashboard_tasklist_ratec_query = "SELECT * from tasklist WHERE rate='1'";
        $dashboard_tasklist_ratec_query_run = mysqli_query($conn, $dashboard_tasklist_ratec_query);

        if ($rate = mysqli_num_rows($dashboard_tasklist_ratec_query_run)) {
            echo '<h4 class="mb-0">'.$rate.'</h4> ';
        }else{
            echo 'NoData!';
        }

?>

</p>
</div></a></div>

</div>
<!--<button href="log-in/accountss.php" style="width:28%; margin-top:5px; margin-left:-15px;" class="col-md-6   right-box  rounded-5 shadow box-area text-white p-4  btn btn-success ">Total accounts<br>
<p align="center">
<?php  
    include_once('db.php');
        $dashboard_accounts_query = "SELECT * from registration ";
        $dashboard_accounts_query_run = mysqli_query($conn, $dashboard_accounts_query);

        if ($id_num = mysqli_num_rows($dashboard_accounts_query_run)) {
            echo '<h4 class="mb-0">'.$id_num.'</h4> ';
        }else{
            echo 'NoData!';
        }
echo"<a href='log-in/accountss.php'>Total Accounts</a>"
?>

</p>
    </button>-->
</div>

</form>

</div>
</div>
</div>

<!-- table Section -->

                <div class="col">
                    <div class="card rounded-0 border-0">
                        <div class="card-header">
                            <strong>Table</strong>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="filter" role="tablist">
                                
                           
                                <li class="nav-item" role="presentation">
                                    <a href="taskentry.php"><button class=" btn btn-secondary" id="filter"
                                        >Add task</button></a>
                                        
                                </li>
                                        </div>                             
                            <!--   <div class="my-2" id="filters">
                                            <span>Fetch results by &nbsp;</span>
                                            <select name="rate" id="filter">
                                                <option id="filter" value="" disabled="" selected="">Select filter</option>
                                                <option value="1">Pending</option>
                                                <option value="0">Completed</option>
                                            </select>
                                        </div>
                                    </div>-->



                                    <div class="my-2" id="filter">
                                        <div class="my-2" id="filter">
                                        <table class="table" id="filter" align="center" style="width:100%; align-items:center; font-size:14px;">
   
                                        <tr>
        <th>Date Posted</th>
        <th>Task in Particular</th>
        <th>Date Needed</th>
       
        <th>Assigned to</th>
        <th>Completion Rate</th>
        <th>Action</th>
    </tr>
    <?php
//error_reporting(0);
include_once'db.php';

$sql = "SELECT * FROM tasklist WHERE rate='0'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {

$posted=$row['posted'];
$tas = $row['tas'];
$Needed = $row['Needed'];

$Assigned = $row['Assigned'];
$rate = $row['rate'];
$e_id = $row['id'];



?>
<tr>
    <td><?php  echo $posted; ?></td>
    <td><?php  echo $tas; ?></td>
    <td><?php  echo $Needed; ?></td>
    
    <td><?php  echo $Assigned; ?></td>
    <td><?php   
    if ($row['rate']== 1) {
        echo '<p><a href="status.php?id='.$row['id'].'&rate=0" class="btn btn-success" id="filter">Complete</a></p>';
    }else if ($row['rate'] == 2){
        echo '<p><a href="status.php?id='.$row['id'].'&rate=1" class="btn btn-warning id="filter">Ongoing</a> 
        <a class="btn btn-warning" href=tadminview.php?id=$e_id data-bs-toggle="modal" data-bs-target="#myModal"> note </a>
<br>
                    <input style="width:165px; margin-left:-45px; font-size:18px;" type="text" class="form-control form-control-lg bg-light fs-6" name="note"  value=""></p>';
    }else{
        echo '<p><a href="status.php?id='.$row['id'].'&rate=2" class="btn btn-danger" id="filter">Pending</a></p>';
    }
    
    ?></td>
    <td><?php  echo "<a class='btn btn-danger' href=delete.php?id=$e_id style='font-size:15px; width:40%; border:black solid 1px; padding:5px; border-radius:10px;'>&#128465</a> <br>
      <a class='btn btn-success' href=taskentry.php?id=$e_id style='font-size:15px;border:black solid 1px; padding:5px;border-radius:10px; text-align:center; margin-top:5%;'>&#128394;</a>  " ?></td>
</tr>
<?php
}} ?>

</table>
<?php
}}
?>
 </div>








<!-- The Modal -->
<form action="DATA.php" method="post">
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">




<?php include_once ('db.php');  ?>
        <label for="">Date Posted</label>
        <p><?php echo $posted; ?></p>

        <h4 align="center">Task Particular</h4>
        <p align="center"><?php echo $tas;  ?></p>

        <input type="text" class="form-control" name="note" placeholder="Enter note" required> 
        <br>
        <button name="Submit" class="btn btn-success"> Save </button>
      </div>


      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>


    </div>
  </div>
</div>
</form>



















 <script type="text/javascript">
  $(document).ready(function(){
    $("#filter").ready(function(){
        var value = $(this).val();
        alert(value);

        $.ajax({
            url:"fetch.php",
            type:"POST",
            data:'request=' + value;
            beforeSend:function(data){
                $(".container").html(data);
            }
        });
    });

  });
</script>
                                    

    <!-- BOOTSTRAP JS LINK -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- JQUERY JS LINK -->
    <script src="../js/jquery-3.6.4.min.js"></script>

</body>

</html>