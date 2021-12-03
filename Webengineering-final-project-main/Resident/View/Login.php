<?php
   include "../Control/Logincheck.php";
   if(isset($_SESSION["username"]))
      {
         header("location:../View/ResidentHome.php");
      }
?>
<!DOCTYPE html>
<html>
   <head>
   <script src="../js/login.js"></script>
   <style>
      body {

         /* background-image: url("form_bg2.jpg");
         background-repeat: no-repeat; */
         background-color: peachpuff;

      }

      input[type=text] {
         width: 100%;
         padding: 5px 20px;
         margin: 8px 0;
         display: inline-block;
         border: 1px solid #ccc;
         border-radius: 2px;
         box-sizing: border-box;
      }

      input[type=submit] {
         width: 100%;
         background-color: mediumorchid;
         color: white;
         padding: 14px 20px;
         margin: 8px 0;
         border: none;
         border-radius: 4px;
         cursor: pointer;
      }

      input[type=submit]:hover {
         background-color: olivedrab;
      }

      .div2 {
         background-color: pink;
         border: 1px solid;
         padding: 25px;
         width: 600px;
         height: 400px;

         margin-top: 40px;

      }

      .div2:hover {
         box-shadow: 5px 10px 8px 10px #888888;
      }

      .div1 {
         display: flex;
         align-items: center;
         justify-content: center;


      }

      .btn{
         background-color: magenta;
         padding: 10px;
         margin-right: 40px;
         border-radius: 20px;
         border: none;
         
      }
      a{
         text-decoration: none;
         font-size: 15px;
      }
   </style>


   <title>Login Page</title>
</head>

<body>
   <form action="" onsubmit="return validateForm()" method="post">
      <div class="div1">
         <div class="div2">

            <h1 style="text-align: center;"><u>Login Form</u></h1>
            <table>
               <tr>
                  <td>
                     <h3>Username:</h3>
                  </td>
                  <td><input type="text" name="username"></td>
                  <p id="errorname"></p>

               </tr>

               <tr>
                  <td>
                     <h3>Password:<h3>
                  </td>
                  <td><input type="password" name="password"></td>
                  <p id="errorpass"></p>
               </tr>

                

                  <?php echo $error; ?>
            </table>
            <input style="font-size: 15px;" type="submit" name="submit" value="LOGIN"><br><br>
                  <div style="text-align: center;">
                  <button class="btn"><a href="RegistrationForm.php"> Registration</a></button>
                  <button class="btn"><a href="MainPage.php">Back to previous page</a></button></td>
                  </div>
         </div>
      </div>
   </form>
</div>
</body>
</html>