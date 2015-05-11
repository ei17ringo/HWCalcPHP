<?php 
	$result = 'ここに答えが表示されます';

    //var_dump(count($_POST));

    var_dump($_POST);


	if (count($_POST) > 0){
		switch ($_POST['calc']) {
			case '+':
				$result = $_POST['x']+$_POST['y'];
				break;
			case '-':
				$result = $_POST['x']-$_POST['y'];
				break;
			case 'x':
				$result = $_POST['x']*$_POST['y'];
				break;
			case '÷':
				$result = $_POST['x']/$_POST['y'];
				break;			
			default:
				# code...
				break;
		}


	}


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>PHP基礎</title>
	<link rel="stylesheet" href="default.css" type="text/css" >
</head>
<body>
<form method="POST" >
	<input name="x" type="text">
	<select name="calc">
		<option>+</option>
		<option>-</option>
		<option>x</option>
		<option>÷</option>
	</select>	
	<input name="y" type="text">

	<input type="submit" value="=" />
	<?php echo $result; ?>

</form>

</body>
</html>