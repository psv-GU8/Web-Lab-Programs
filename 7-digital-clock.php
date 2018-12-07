<!DOCTYPE HTML>
<html>
<head>
	<title>Digital Clock</title>
	<meta http-equiv="refresh" content="1"/>
	<style>
	body{
		background: #000;
		color: #fff;
	}
	h2{
		font-size: 60px;
		position: absolute;    
		top: 50%;    
		left: 50%;    
		transform: translate(-50%, -50%);
	}
	</style>
</head>
<body>
  <h2> <?php echo date(" h: i : s  A");?> </h2> 
</body>
</html>