
<html>
<?php

	function GetChuProj_idea($index)
	{
		if($index == 0)
		{
			return "1. Implement supervised machine learning algorithms";
		}
		else if($index == 1)
		{
			return  "2. Implement a simple neural network to recognize image of numbers from 0 to 9";
		}
	}
?>

  <head>
  </head>
  <body>
	<ul>
		<li><?php echo GetChuProj_idea(0); ?></li>
		<li><?php echo GetChuProj_idea(1); ?></li>
	</ul>
  </body>

</html>
