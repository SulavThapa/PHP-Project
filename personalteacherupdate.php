
<?php
require('Connection.php');


//if(isset($_GET['teacher_id']))
//{
//
//    $teacher_id=$_GET['teacher_id'];
//    $sql="select * from teacher_info where teacher_id='$teacher_id'";
//    $result=mysqli_query($connectivity,$sql);
//    $row = mysqli_fetch_assoc($result);
//



if(isset($_GET['tt'])) {
    $teacher_id = $_GET['tt'];
    $sql = "select * from teachers where id='$teacher_id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);


    ?>

    <form action="setpersonalteacher.php" method="POST">
        <input type="hidden" name="teacher_id" value=<?= $teacher_id ?> ><br/>

        <label>username</label>
        <input type="text" name="username" ><br/>
        <label>Password:</label>
        <input type="password" name="password" ><br/>


        <input type="submit" name="submit" value="UPDATE" class="btn">
    </form>
    <?php
}


?>