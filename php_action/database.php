<?php
$connect = mysqli_connect('localhost', 'root', '', 'article') or die("Cannot connect to database:" + mysqli_error($connect));
$button=$_REQUEST["button"];
if($button=="article"){
    $id=0;
    $title=$_REQUEST["title"];
    $source=$_REQUEST["source"];
    $category=$_REQUEST["category"];
    $intro=$_REQUEST["intro"];
    $time=$_REQUEST["time"];
    $date=$_REQUEST["date"];
    $query="insert into articleValue values('$id','$title','$source','$category','$intro','$time','$date')";
    $insert= mysqli_query($connect,$query) or die("Cannot insert to database");
}
if($button == "department"){
    $id=0;
    $department =$_REQUEST["department"];
    $query="insert into department values('$id','$department')";
    $insert = mysqli_query($connect,$query) or die("Cannot insert to database");
}

if($button == "delete"){
    $id=$_REQUEST["id"];
    $query="delete from teacher WHERE id=$id";
    $delete = mysqli_query($connect,$query);
    header('Location: viewTeacher.php');
}
if($button == "edit"){
    $id = $_REQUEST["id"];
    $query = "select * from teacher where id=$id";
    $result = mysqli_query($connect, $query) or die("Cannot select from database");
    $array = mysqli_fetch_row($result);
    echo json_encode($array);
}
if($button == "update"){
    $id = $_REQUEST["id"];
    $first_name = $_REQUEST["first_name"];
    $last_name=$_REQUEST["last_name"];
    $department_id=$_REQUEST["department_id"];
    $email=$_REQUEST["email"];
    $mobile_no=$_REQUEST["mobile_no"];
    $date_of_birth=$_REQUEST["date_of_birth"];
    $query = "update teacher set `first_name`='$first_name',`last_name`='$last_name',`dept_id`='$department_id',`email`='$email',`mobile`='$mobile_no',`date_of_birth`='$date_of_birth' where id=$id";
    $result = mysqli_query($connect, $query) or die($query);
    echo "Success";
}
if($button=="department_view"){
    $query = "select * from department";
    $result = mysqli_query($connect, $query) or die("Cannot select from database");
    echo "<thead class=\"thead-light\">
                    <tr>
                        <th>Department Id</th>
                        <th>Department</th>
                    </tr>
                </thead>
                <tbody>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['department']."</td>
            </tr>";
    }
    echo "</tbody>";
    
}
?>