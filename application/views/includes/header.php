<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="css/gppstyles.css">
	<title></title>
</head>
<body>
<?php if ($logged_in) :?>
  <a href="/auth/logout/">Logout</a>
<?php else :  ?>
  <a href="/auth/login/">Login</a>
<?php endif ?>

<a href="/plantdata/">Plant Data</a>