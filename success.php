<?php require_once('Connections/authority.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>jQ Mobile, PHP and MySQL</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
</head>
<body>
<div data-role="page" id="home">
  <div data-role="header" data-position="fixed">
    <h1>Logged In</h1>
  </div>
  <div data-role="navbar">
    <ul>
      <li><a href="#home" class="ui-btn-active ui-state-persist" data-icon="home" data-theme="b">Home</a></li>
      <li><a href="#about" data-icon="search" data-theme="b">About Me</a></li>
      <li><a href="#contact" data-icon="info" data-theme="b">Contact Me</a></li>
    </ul>
  </div>
  <div data-role="content">
	<p> Your login attempt succeeded</p>
    <a href="<?php echo $logoutAction ?>" data-theme="b" data-role="button" data-inline="true">Logout</a>
  </div>
  <div data-role="footer" class="ui-footer-fixed">
    <h4>&copy;2013</h4>
  </div>
</div>
</body>
</html>


