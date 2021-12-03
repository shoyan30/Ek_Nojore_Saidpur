<?php
include('../Control/Registrationcheck.php')
?>


<!DOCTYPE html>
<html>
<head>
<script src="../js/registration.js"></script>
   <style>
       body{
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
  width: 30%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=reset] {
         width: 80px;
         background-color: magenta;
         color: white;
         padding: 14px 20px;
         margin: 8px 0;
         border: none;
         border-radius: 4px;
         cursor: pointer;
      }

      input[type=submit]:hover {
         background-color: orange;
      }
      input[type=reset]:hover {
         background-color: olivedrab;
      }

.div2 {
         
         background-color: pink;
         /* border: 1px solid; */
         
         width: 600px;
         height: 600px;
         padding-left: 5px;
         margin-top: 40px;

         /* margin: auto; */

      }
      .div2:hover{
         box-shadow: 5px 10px 8px 10px #888888;
      }
      .div1{
         display: flex;
         align-items: center;
         justify-content: center;
         
         
      }

      .btn{
         background-color: olive;
         padding: 15px;
         margin-right: 40px;
         border-radius: 10px;
         border: none;
         
      }
      a{
         text-decoration: none;
         font-size: 15px;
         color: white;
      }
</style>

<body>
<form action="" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
      <div class="div1">
         <div class="div2">
            <legend><b><u>
                     <h1 style="text-align: center;">Registration
                  </u></b></legend>
            </h1>
            <table>
               <tr>
                  <td><b>Username:</b></td>
                  <td><input type="text" name="username"></td>
                  <td>
                     <p id="errorname"></p>
                  </td>

               </tr>
               

               <tr>
                  <td><b>Password:</b></td>
                  <td><input type="password" name="password"></td>
                  <td>
                     <p id="errorpassword"></p>
                  </td>
               </tr>
               
               <tr>
                  <td><b>Nid No:</b></td>
                  <td><input type="text" name="nidno"></td>
                  <td>
                     <p id="errornidno"></p>
                  </td>
               </tr>
               <tr>
                  <td><b>Address:</b></td>
                  <td><textarea name="address" rows="3" cols="20"></textarea></td>
                  <td>
                     <p id="erroraddress"></p>
                  </td>
               </tr>
            </table>
            <table>
               <b>Gender:</b>

               <input type="radio" id="male" name="gender" value="male">
               <label for="male">Male</label>
               <input type="radio" id="female" name="gender" value="female">
               <label for="female">Female</label>
               <input type="radio" id="other" name="gender" value="other">
               <label for="other">Other</label>
               <td>
                  <p id="errorgender"></p>
               </td>
               <tr>
                  <td><b>Area:</b></td>
                  <td><input type="text" name="area"></td>
                  <td>
                     <p id="errorarea"></p>
                  </td>

               </tr>
               <tr>
                  <td><b>Phone:</b></td>
                  <td> <input type="text" name="phone"></td>
                  <td>
                     <p id="errorphone"></p>
                  </td>
               </tr>

               <tr>
                  <td><b>Email:</b></td>
                  <td><input type="email" name="email"></td><br><br>
                  <td>
                     <p id="errormail"></p>
                  </td>
               </tr>
               <tr>
            </table>
            <td><b>Image:</b></td>
            <input type="file" name="image" width="50" height="30"><br><br>

           <div style="text-align:center; margin-right: 25px;">
            <input type="submit" name="submit" value="Submit">
             <input type="reset" name="reset" value="RESET">          
            <button class="btn"><a href="login.php">Back to previous page</a></button>
           </div>
           
         </div>
      </div>
   </form>
</div>
</body>
</html>