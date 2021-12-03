<?php
include "../Control/larvaecheck.php";
if (isset($_SESSION["location"])) {
   header("location: ");
}
?>
<!DOCTYPE html>
<html>

<head>
   <style>
      body{
         

         /* background-image: url("form_bg2.jpg");
         background-repeat: no-repeat; */
         background-color: #EBDEF0;
         background-image: url("road-form-bg.jfif");
         
         
               }
         input[type=submit] {
         width: 30%;
         background-color: #F8C471 ;
         color: black;
         font-size: medium;
         padding: 14px 20px;
         margin: 8px 0;
         border: none;
         border-radius: 4px;
         cursor: pointer;
      }
      input[type=reset]{
         width: 20%;
         background-color:#A9DFBF;
         color: black;
         padding: 14px 20px;
         margin: 8px 0;
         border: none;
         border-radius: 4px;
         font-size: medium;
         cursor: pointer;
      }

      input[type=submit]:hover {
         background-color: lightgreen;
      }

      .div2 {
         /* background-color:#D6EAF8; */
         
         padding: 25px;
         width: 500px;
         height: 400px;
         color: white;
         font-weight: bolder;
         font-size: 25px;
         margin-top: 100px;
         margin-left: 250px;

      }

      .div2:hover {
         box-shadow: 5px 10px 8px 10px #888888;
      }

      .div1 {
         display: flex;
         align-items: center;
         justify-content: center;


      }
      .back-btn{
         width: 20%;
         background-color:#F9E79F;
         color: black;
         padding: 14px 20px;
         margin: 8px 0;
         border: none;
         border-radius: 4px;
         font-size: medium;
         cursor: pointer;
         text-decoration: none;
      }
   </style>
   <title>Mosquitolarva</title>
</head>

<body>
   <form action="" method="post" enctype="multipart/form-data">
      <div class="div1">
         <div class="div2">

            <left> <b>
                  <h3 style="color:red; text-decoration:underline">Mosquito Larvae:</h3>
               </b></left>

            <tr>
               <td><b>Location:</b></td>
               <td><textarea name="location" rows="3" cols="20"></textarea></td><br><br>

            </tr>
            <tr>
               <td><b>Details:</b></td>
               <td><textarea name="details" rows="3" cols="20"></textarea></td><br><br>
            </tr>
            <tr>
               <td><b>Image:</b>
                  <input type="file" name="image" width="50" height="30"><br><br>
               </td>
            </tr>

            <input type="submit" name="add" value="ADD ISSUE">
            <input type="reset" name="reset" value="RESET">


            <a class="back-btn" href="ResidentHome.php">Back to previous page</a>
         </div>
      </div>
   </form>

</body>

</html>