<!DOCTYPE html> 
<html> 
       <head> 
       <title>Page Title</title> 
       
       <meta name="viewport" content="width=device-width, initial-scale=1"> 

       <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
       <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
       <script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
</head> 

<body> 
<?php
  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username == "test" and $password == "test"){
     echo "Login successful!";
  }
  else { 
     echo "Invalid credentials";
  }
?>
</body>
</html>