<?php
include('header.php');
include('EditProfile.php');
if(isset($_POST['submit'])){
  $myPath         = $_FILES['myfile'];
  $fileName       = $_FILES['myfile']['name'];
  $fileSize       = $_FILES['myfile']['size'];
  $fileTempName   = $_FILES['myfile']['tmp_name'];
  $fileType       = $_FILES['myfile']['type'];
  $fileError      = $_FILES['myfile']['error'];

  $fileExt        =   explode('.',$fileName);
  $fileActualExt  =   strtolower(end($fileExt));

  $email = $_SESSION['email'];
  
  $splitedEmail= explode('.',$email);
  $forEachPic= $splitedEmail[0];
  
  $_SESSION['splitedEmail']=$forEachPic;

  $_SESSION['emailName'] = $forEachPic;

  $myProfilePic = $_SESSION['emailName'] .'.'.'jpg';
  $_SESSION['myPictures'] = $myProfilePic;
 

  //$normProfilePic=$profilePic->resizeImage(100,100,'crop');

  

     
  $sql="SELECT my_pic, profile, email FROM users WHERE email LIKE '%$$forEachPic%'";

  $run=mysqli_query($mysqli,$sql);
  $queryRun = mysqli_num_rows($run);

  if ($queryRun > 0){

      while($row = mysqli_fetch_assoc($run)) {
          
          $pic_loc                     =       $row["my_pic"];
          $email_app                   =       $row["email"];
      }
    }

    

  $allowed    =   array('jpg','jpeg','png');

  if(in_array($fileActualExt,$allowed)){

      if($fileError === 0){

          if($fileSize < 1000000){
                  $real_id       =  $_SESSION['user_info_id'];

                  $fileNewName = $forEachPic;
                  
                  $fileDestination = 'uploads/'.$fileNewName.'.'.'png';
                  $sql="UPDATE users SET my_pic='$fileDestination' WHERE id='$real_id'";
                  $run=mysqli_query($mysqli,$sql);
                  if($run){
                    echo $fileDestination;
                    move_uploaded_file($fileTempName,$fileDestination);
                    
                    $_SESSION['normProfilePic']=$fileDestination;

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


?>
<br><br><br><br><br>

<section style="margin-left">
    <div class="About_me" style="margin-left:-2%">        
        <div style='width:30%; margin-left:5%; border-right:2px solid #000'>
          <div>
            <img src="uploads/<?php echo $_SESSION['splitedEmail'].'.png'?>" alt="err"  height='250' width='200' style="border-radius:100%">
          </div>
          <br>
        
          <div style='text-align:left; margin-top:15px'>
            <h4 style='color:red'><?php echo $_SESSION['username'] ?></h4><br>
            <h5>Account Details</h5>

            <form action="profile.php?profileSuccessfullyedited" method="POST" enctype="multipart/form-data">
              <input type="checkbox" name="edit" id="edit"><label for="edit" style="float:left; margin-top:-430px;"><i class="icon-edit"></i>Edit profile</label>

              <h5>shop name:<input type="text" id="snInput" disabled="true" name="Shop_Name" value='<?php echo $_SESSION['shop_names'] ?>'class='editInput' style="width:55%;height:35px; background-color:#fff;border:none; margin-top:-30px;  margin-left:150px; "></h5>
              <h5>shop line:<input type="text" id="slInput" disabled="true" name="Shop_Line" value='<?php echo $_SESSION['shop_lines'] ?>' class='editInput' style="width:55%;height:35px; background-color:#fff;border:none; margin-top:-30px;  margin-left:150px"></h5>
              <h5>city: <input type="text" id="emailInput" disabled="true" name="Shop_City"  value='<?php echo $_SESSION['city'] ?> ' class='editInput' style="width:55%;height:35px; background-color:#fff;border:none; margin-top:-30px;  margin-left:150px"></h5>
              <h5>phone number: <input type="text" id="phInput" disabled="true" name="Edit shop name" value='<?php echo $_SESSION['phone'] ?>' class='editInput' style="width:55%;height:35px; background-color:#fff;border:none; margin-top:-30px;  margin-left:150px"></h5>
              <h5>nearest junction: <input type="text" id="njInput" disabled="true" name="Junction" value='<?php echo $_SESSION['junction'] ?>' class='editInput' style="width:55%;height:35px; background-color:#fff;border:none; margin-top:-30px;  margin-left:150px"></h5>
              <h5>nearest bustop: <input type="text" id="nbInput" disabled="true" name="Bustop" value='<?php echo $_SESSION['bustop'] ?>' class='editInput' style="width:55%;height:35px; background-color:#fff;border:none; margin-top:-30px;  margin-left:150px"></h5>
              <input type="file" id="fileInput"  disabled="true" name='myfile' disabled="true" class="input_file" required>
              <!--<label for="file">choose a file</label>-->

              <button type="submit" name=submit>Submit</button>
            </form>
            <a href="Edit.php"><i class="icon-edit">Edit your login credentials</i></a>
          </div>
        </div>


        <div style="margin-left:0% !important">

          <?php
            include('upImage.php')            
          ?>
            <span class="Shop_img" >
                <a target="_blank" href="fjords.jpg">
                  <img src="pic/img_lights.jpg" alt="Fjords" style="width:50%; margin-left:20%"><br><br>
                </a>
</span>
            
          <span style="margin-left:20%">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="file" name="myPageFile" id="myPageFile" style="margin-left:20%"><br><br>
                <textarea name="myPageCaption" id="myPageCaption" cols="30" placeholder="Enter your caption" rows="4" style="width:50%; margin-left:20%"></textarea><br>
                <button type='post' name='post' style="margin-left:20%">Post</button>
          
            </form>
</span>
        </div>
 </div>
</section>
<script>
    function toggleNav(){
      document.querySelector(".holla").classList.toggle("navbar--open");
    }
  </script>
  <script>
    (function(){
      var myEdit = document.getElementById('edit');
      var shopName = document.getElementById('snInput');
      var shopline = document.getElementById('slInput');
      var email = document.getElementById('emailInput');
      var phoneNumber = document.getElementById('phInput');
      var bustop = document.getElementById('nbInput');
      var junction = document.getElementById('njInput');
      var file = document.getElementById('fileInput');
      myEdit.addEventListener('click', function(){
        if(this.checked){
          shopName.disabled = ''
          shopline.disabled= ''
          email.disabled = ''
          phoneNumber.disabled = ''
          bustop.disabled = ''
          junction.disabled = ''
          file.disabled = ''
        }else{
          shopName.disabled = 'false'
          shopline.disabled = 'false'
          email.disabled = 'false'
          phoneNumber.disabled = 'false'
          bustop.disabled = 'false'
          junction.disabled = 'false'
          file.disabled = 'false'
        }
      });
    })();
  </script>