<?php
$mysqli=mysqli_connect('localhost','root','','market');
if(isset($_POST['post'])){

  $caption     =  $mysqli->real_escape_string($_POST['myPageCaption']);

  $myPath         = $_FILES['myPageFile'];
  $myfileName       = $_FILES['myPageFile']['name'];
  $fileSize       = $_FILES['myPageFile']['size'];
  $myfileTempName   = $_FILES['myPageFile']['tmp_name'];
  $fileType       = $_FILES['myPageFile']['type'];
  $fileError      = $_FILES['myPageFile']['error'];

  $fileExt        =   explode('.',$myfileName);
  $fileActualExt  =   strtolower(end($fileExt));

  $email = $_SESSION['email'];
  
  $splitedEmail= explode('.',$email);
  $forEachPic= $splitedEmail[0];

  $_SESSION['uploadEmailName'] = $forEachPic . uniqid('',true) . '.png';
  $uploadEmailName = $_SESSION['uploadEmailName'];
  //$normProfilePic=$profilePic->resizeImage(100,100,'crop');   

  $allowed    =   array('jpg','jpeg','png');

  if(in_array($fileActualExt,$allowed)){

      if($fileError === 0){

          if($fileSize > 10000){
                  $real_id       =  $_SESSION['user_info_id'];

                  $myfileNewName   = $uploadEmailName;
                  
                  
                  $myfileDestination = 'uploads/'.$myfileNewName;

                  $sql="UPDATE users SET profile='$myfileDestination', caption='$caption' WHERE id='$real_id'";
                  $run=mysqli_query($mysqli,$sql);
                  if($run){
                    echo $myfileDestination;
                    move_uploaded_file($myfileTempName,$myfileDestination);
                   
                  }else{
                      echo "pic not uploaded";
                    }
          }else{
              echo "This file is too big, try with a lesser file size";
          }

      }else{
          echo "An error has occured, try again with another file";
      }

  }else{
      echo "This type of file cannot be uploaded";
  }

  }

  $sql="SELECT my_pic, profile, email FROM users WHERE email LIKE '%$$uploadEmailName%'";

    $run=mysqli_query($mysqli,$sql);
    $queryRun = mysqli_num_rows($run);

    if ($queryRun > 0){
        while($row = mysqli_fetch_array($run)) {
            $pic_loc                     =       $row["my_pic"];
            $email_app                   =       $row["email"];

            echo "<div id=image>";
                echo "<img src='". $pic_loc."'>";
            echo "</div>";
        }
      }

?>