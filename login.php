<?php require_once('Connections/dbConnection.php'); ?>
<?php require_once('Connections/authorize.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>jQuery Mobile and PHP</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
</head>
<body>
<div data-role="page" id="home">
  <div data-role="header" data-position="fixed">
    <h1>Home</h1>
  </div>
  <div data-role="navbar">
    <ul>
      <li><a href="#home" class="ui-btn-active ui-state-persist" data-icon="home" data-theme="b">Home</a></li>
      <li><a href="#about" data-icon="search" data-theme="b">About Me</a></li>
      <li><a href="#contact" data-icon="info" data-theme="b">Contact Me</a></li>
    </ul>
  </div>
  <div data-role="content">
	<form action="<?php echo $loginFormAction; ?>" method="POST" enctype="multipart/form-data" id="login_form">
     <label for="username">User Name:</label>
     <input type="text" name="username" id="username" />
     <label for="password">Password:</label>
     <input type="password" name="password" id="password" />
     <input data-inline="true"  data-theme="b" type="submit" value="Login" />
    </form>
  </div>
  <div data-role="footer" class="ui-footer-fixed">
    <h4>&copy;<?php echo $year; ?></h4>
  </div>
</div>
</body>
</html>