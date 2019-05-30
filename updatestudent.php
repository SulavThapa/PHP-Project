
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



if(isset($_GET['st'])) {
    $student_id = $_GET['st'];
    $sql = "select * from students where id='$student_id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);


        ?>

        <form action="setstudent.php" method="POST">
            <input type="hidden" name="student_id" value=<?= $student_id ?> ><br/>

            <label>username</label>
            <input type="text" name="username" ><br/>
            <label>Password:</label>
            <input type="text" name="password" ><br/>


            <input type="submit" name="submit" value="UPDATE" class="btn">
        </form>
        <?php
    }


?>