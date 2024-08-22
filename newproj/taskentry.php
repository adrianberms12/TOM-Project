<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="">
   
    <title>new project</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container">
   
    <a class="navbar-brand" href="#" style="font-size:18px;">
   <p style="font-size:20px; height:15px; margin-left:-8px;  ">ADMIN</p>
      <img src="person.jpg" alt="" width="45" height="50" style=" border-radius:8px;">
      <p style="margin-left:-65px;">Niño Adrian B. Bermejo</p>
    </a>

    .
  </div>
</nav>

<?php
include_once('db.php');
error_reporting(0);
     $e_id=$_GET['id'];
     if ($e_id != "") {
        # code...
     
$sql = "SELECT * FROM tasklist WHERE `id` = '$e_id'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
$e_id = $row['id'];
$posted = $row['posted'];
$tas = $row['tas'];
$Needed = $row['Needed'];
$created = $row['created'];
$Assigned = $row['Assigned'];

}}}
?>




<div class="container d-flex justify-content-center align-items-center min-vh-100 " style="margin-top:-40px;" >

     
            
             <div class="col-md-6  right-box  rounded-5 shadow box-area  p-4" style="border: black 1px solid; box-shadow:0 10px 15px;">
                <div class="row align-items-center">
                <form action="Data.php" method="post">
                    <div class="header-text mb-4 " style="text-align: center; font-size: 25px; font-weight: 700;"> TASK MANAGEMENT SYSTEM </div>
                        <label class="text-black" style="font-family:'Poppins', sans-serif; font-weight:700; ">Task Particular</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Enter task particular" name="tas" id="" value="<?php echo $tas; ?>" required>
                        </div>
                        <labe; class="text-black" style="font-family:'Poppins', sans-serif; font-weight:700; ">Date Needed</label>
                        <div class="input-group">
                            <input type="date" class="form-control form-control-lg bg-light fs-6"  name="Needed" id="" value="<?php echo $Needed; ?>" required>
                        </div>
                        
                        </div>
                        <label class="text-black" style="font-family:'Poppins', sans-serif; font-weight:700; ">Assigned to</label>
                        
                            <select class="form-control form-control-lg bg-light fs-6"  name="Assigned" id="">
                                <ul>
                                    <option value=""><?php echo $Assigned; ?></option>
                                <option  value="HR.">HR.</option>
                                <option  value="IT.">IT.</option>
                                <option  value="ACCOUNTING.">ACCOUNTING.</option>
                                <option  value="JB3315.">JB3315.</option>
                                <option  value="JB0884">JB0884</option>
                                <option  value="JB0579">JB0579</option>
                                <option  value="0415">0415</option>
                                <option  value="3657">3657</option>
                            </ul> </select>
                                           
                        <div class="input-group" style="margin-top:5px;"> 
                            <button class="btn btn-lg btn-primary w-30 fs-6 " value="Submit" id="userbtn">ADD</button>
                        </div>
</form>
</div>
</div>



</div>

</div>




</div>
<script src="./Bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>