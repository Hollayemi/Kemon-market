<?php
include('header.php');
 echo "Loves";
    if (isset($_POST['sub'])){
        echo "love";
        $myPath         = $_FILES['file'];
        $fileName       = $_FILES['file']['name'];
        $fileSize       = $_FILES['file']['size'];
        $fileTempName   = $_FILES['file']['tmp_name'];
        $fileType       = $_FILES['file']['type'];
        $fileError      = $_FILES['file']['error'];

        $fileExt        =  explode('.',$fileName);
        $fileActualExt  =  strtolower(end($fileExt));
        echo $fileName;
        echo $fileActualExt;
        $email = $_SESSION['email'];
        $splitedEmail= explode('.',$email);
        $forEachPic= $splitedEmail[0] .'_'.$fileName;
        echo($forEachPic);

        $allowed    =   array('jpg','jpeg','png');

        $Shop_Name     =  $mysqli->real_escape_string($_POST['Shop_Name']);
        $Junction      =  $mysqli->real_escape_string($_POST['Junction']);
        $Bustop        =  $mysqli->real_escape_string($_POST['Bustop']);
        $City          =  $mysqli->real_escape_string($_POST['Shop_City']);
        $Shop_Line     =  $mysqli->real_escape_string($_POST['Shop_Line']);
        $pics          =  $forEachPic;
        $Desc          =  $mysqli->real_escape_string($_POST['Desc']);
        $real_id       =  $_SESSION['user_info_id'];
        $_SESSION['Username']   =   'Username';
        $_SESSION['shop_name']  =   '$Shop_Name';
        $_SESSION['shop_line']  =   '$Shop_Line';
        $_SESSION['Email']      =   'Email';

        $sql="UPDATE users SET shop_name='$Shop_Name',bustop='$Bustop',junction='$Junction',shop_line='$Shop_Line',more='$Desc',City='$City', my_pic='$pics' WHERE id='$real_id'";
            $run=mysqli_query($mysqli,$sql);

            if($run){
                echo "<div style='background-color:green;width:150px;
                text-align: center;
                font-size:20px;
                color: #FFF;
                width:100%;'>Submitted</div>";
            }else{
                echo "<div style='background-color:#f0ff;width:150px;
                text-align: center;
                font-size:20px;
                color: #fff;
                width:100%;'>Not Submitted</div>";
            }

            }

            $user_id=$_SESSION['user_info_id'];
            $sql="SELECT id,username,shop_name,password,email,City FROM users Where id='$user_id'";
            $rub_sql=$mysqli->query($sql);
        $result=mysqli_fetch_array($rub_sql,MYSQLI_ASSOC);
        if($result){
            $username=$result['username'];
            $shop=$result['shop_name'];
            $email=$result['email'];
            $city=$result['City'];
        }
        if(in_array($fileActualExt,$allowed)){

            if($fileError === 0){

                if($fileSize > 10000){
                        
                        $fileNewName = $forEachPic.'.'.$fileActualExt;
                        $fileDestination = 'uploads/'.$fileNewName;     
                        echo $fileDestination;

                        move_uploaded_file($fileTempName,$fileDestination);
                        header("Location: done.php?uploadsuccess");
                }else{
                    echo "This file is too big, try with a lesser file size";
                }

            }else{
                echo "An error has occured, try again with another file";
            }

        }else{
            echo "This type of file cannot be uploaded";
        }

    
        mysqli_close($mysqli);
    
?>
