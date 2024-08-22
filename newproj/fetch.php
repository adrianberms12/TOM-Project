<?php
    include("db.php");
    if (isset($_POST['request'])) {

        $request = $_POST['request'];

        $query = "SELECT * FROM tasklist WHERE rate = '$request' ";
        $request = mysqli_query($conn,$query);
        $count = mysqli_num_rows($result);
    }

    ?>
<div class="my-2" id="filter">
                <div class="my-2" id="filter">
                <table class="table" id="filter" align="center" style="width:100%; align-items:center; font-size:14px;">
                <?php
                    if($count){  
                    
                ?>
 <tr>
        <th>Date Posted</th>
        <th>Task in Particular</th>
        <th>Date Needed</th>
       
        <th>Assigned to</th>
        <th>Completion Rate</th>
        <th>Action</th>
    </tr>
<?php
}else{
    echo "Sorry no found data!";
}
?>

</table>
</div>
</div>