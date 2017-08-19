  <!DOCTYPE HTML> 
  <html>
  <head>
    <link rel="stylesheet"href="stylesheet.css">
    <title>Contact Form</title>
  </head>
   <body style="text-align:center;"> 

  <?php
  include 'config_page.php';
  $nameErr = $emailErr = "";
  $name = $email = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
     if (empty($_POST["name"])) 
     {
       $nameErr = "Name is required";
     } 
   else 
   {
       $name = test_input($_POST["name"]);
       if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
       {
         $nameErr = "Only letters and white space allowed"; 
       }
   }     
   if (empty($_POST["email"])) 
     {
       $emailErr = "Email is required";
     }
      else
       {
       $email = test_input($_POST["email"]);
       if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
         $emailErr = "Invalid email format"; 
        }
       } 
      if(($nameErr=="")&&($emailErr==""))
      {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];
      $query="INSERT INTO submissions (`Name`, `Email`, `Subject`, `Message`) VALUES ('$name', '$email', '$subject', '$message')";
      $run=mysql_query($query);
      $msg="please find the below details".$name.$email.$subject.$message;
      mail("saumya.311294@gmail.com","Contact form details",$msg);
      header('location:login_page.html');
      }
  }
  function test_input($data) 
  {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }
  ?>

  <h1> CONTACT FORM</h1><hr> 
  <h2> Enter Your Queries</h2>
  <p style="text-align:right;"><span class="error">* Mandatory Fields.</span></p>
    <form method="post"> 
  <b>NAME:</b>
     <input type="text" name="name" value="">
     <span class="error">* <?php echo $nameErr;?></span>
     <br><br>
  <b>EMAIL:</b>
     <input type="text" name="email" value="">
     <span class="error">* <?php echo $emailErr;?></span>
     <br><br>
     <b>SUBJECT:</b>
    <input type="text"name="subject">
    <br><br>
    <b>MESSAGE:</b>
  <textarea name="message"row="10"cols="20">
  </textarea>
    <br><br>
     <button type="submit" name="submit" value="Submit">SUBMIT</button>
     <button type="submit" formaction="index.php">CANCEL</button>
    </form>
   </body>
  </html>