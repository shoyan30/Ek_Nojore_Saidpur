<?php
include "../Control/mosquitoinfectedcheck.php";
if (isset($_SESSION["address"])) {
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
      input[type=text] {
         width: 50%;
         padding: 5px 20px;
         margin: 8px 0;
         display: inline-block;
         border: 1px solid #ccc;
         border-radius: 2px;
         box-sizing: border-box;
      }

      input[type=submit] {
         width: 20%;
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
         width: 600px;
         height: 550px;
         color: white;
         font-weight: bolder;
         font-size: 25px;
         margin-top: 30px;
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

   <title>MosquitoInfected</title>
</head>

<body>
   <form action="" method="post" enctype="multipart/form-data">
      <div class="div1">
      <div class="div2">
         <left> <b>
               <h1 style="color:red; text-decoration:underline">Patiant Report:</h1>
            </b></left>

         <b>Affected Person</b>
         <input type="text" name="affectedperson"><br><br>



         <b>Disease Name</b>
         <br>
         <input type="radio" id="dengue" name="diseasename" value="dengue">
         <label for="dengue">Dengue</label><br>
         <input type="radio" id="chikungunya" name="diseasename" value="chikungunya">
         <label for="chikungunya">Chikungunya</label><br>
         <input type="radio" id="malaria" name="diseasename" value="malaria">
         <label for="malaria">Maleria</label><br>
         <input type="radio" id="zikavirus" name="diseasename" value="zikavirus">
         <label for="zikavirus">Zika Virus</label><br>

         <b>Address</b>
         <textarea name="address" rows="3" cols="20"></textarea><br>

         <br>


         Image
         <input type="file" name="image" width="50" height="30"><br><br>


         <input type="submit" name="add" value="Submit">
         <input type="reset" name="reset" value="RESET">

         <a class="back-btn" href="ResidentHome.php">Back to previous page</a>

      </div>
      </div>
   </form>

</body>

</html>