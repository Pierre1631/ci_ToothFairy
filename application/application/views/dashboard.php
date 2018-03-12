<html>
<head>
	<title>Sessions - Dashboard</title>
</head>
<body>
<h1>Welcome to Dashboard</h1>
<?php
//retrieve session
$user = $this->session->userdata('user');
?>

<h2>Hi <?php echo $user; ?>!</h2>
<p><a href="students">Students</a></p>
<a href="logout">Logout</a>
</body>
</html>
