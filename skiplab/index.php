<!DOCTYPE html> 
<html> 
<head> 
  <title>Login</title> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
  <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 

<script>
$(document).ready(function() { 
    //Cache DOM reference
    var form = $("#loginform");

    /*form.submit(function(event) {
        //Prevent the form from regular (non-js) submission
        event.preventDefault();

        //Serialize your data, using jQuery to make it easer
        var data = form.serialize();

        //Submit via ajax
        $.post(
          form.attr('action'),
          data,
          function(response) {
            $("#loginDiv").hide();
            $("#result").html(data);
          }    
        );

 });*/
});
</script>

<div data-role="page">

  <div data-role="header">
    <h1>Login Form</h1>
    </div><!-- /header -->

  <div data-role="content">
    <p>Hello world</p>

    <div id="loginDiv">
      <form action="login.php" id="loginform" method="post">
        <label for="basic">Username:</label>
        <input type="text" name="username" id="basic" />

        <label for="basic">Password:</label>
        <input type="text" name="password" id="basic" />

        <button type="submit">Submit</button>
      </form>
    </div>

    <div id="result" style="border: 1px solid black;">
    </div>
  </div><!-- /content -->

</div><!-- /page -->

</body>
</html>
