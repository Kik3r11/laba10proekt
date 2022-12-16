<?php
if(isset($_POST['txt']))
{
	$value_x = (int) $_POST['X'];
	$value_a = (int) $_POST['A'];
	$value_b = (int) $_POST['B'];
	$value_c = (int) $_POST['C'];
	class Laba
	{
		public $value_x;
		public $value_a;
		public $value_b;
		public $value_c;
		function __construct($value_x, $value_a, $value_b, $value_c)
		{
			$this->value_x = $value_x;
			$this->value_a = $value_a;
			$this->value_b = $value_b;
			$this->value_c = $value_c;
		}
		function Numbers()
		{
			if($value_x <= 3)
			{
				echo $this->value_x * $this->value_x + 3 * $this->value_x + 9 + "<br>";
			}
			else
			{
				echo $this->value_x * $this->value_x * $this->value_x + 6 + "<br>";
			}
		}
		function Numbers2()
		{
			echo $this->value_a * $this->value_b + $this->value_c + "<br>";
		}
	}
	$num = new Laba($value_x, $value_a, $value_b, $value_c);
	$num->Numbers();
	$num->Numbers2();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post">
<input type="text" name="X">
<input type="text" name="A">
<input type="text" name="B">
<input type="text" name="C">
<button type="submit" name="txt" value="txt">Отправить</button>
</form>
</body>
</html>