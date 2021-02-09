<html>
	<head>
		<title>
		</title>
		<link rel='stylesheet' href='style.css'>
	</head>
	<body>
		<div class='parent' >
			<h1>Enter 10 numbers</h1>
			<form action="" method='post'>
				<div class='grid'>
					<div><label>1.</label><input class='grid-item' type=text name='num1' maxlength=9/></div>
					<div><label>2.</label><input class='grid-item' type=text name='num2' maxlength=9/></div>
					<div><label>3.</label><input class='grid-item' type=text name='num3' maxlength=9/></div>

				</div>
				<input type='submit' name='submit'/>
			</form>
			
			<?php
				$second_run = False;
				function operations($num1, $num2, $num3, $operation) {
					if ($operation == 'add') {
						return $num1 + $num2 + $num3;
					} elseif ($operation == 'subs') {
						return $num1 - $num2 - $num3;
					} elseif ($operation == 'mult') {
						return $num1 * $num2 * $num3;
					} elseif ($operation == 'div') {
						if ($num1 == 0 || $num2 == 0 || $num3 == 0) {
							return "Error. You can't divide a number by 0.";
						} else {
							return $num1 / $num2 / $num3;
						}
					}
				}
				
				$num1 = $num2 = $num3 = 0;
				if (isset($_POST['submit'])) {
					$num1 = $_REQUEST['num1'];
					$num2 = $_REQUEST['num2'];
					$num3 = $_REQUEST['num3'];
					$second_run = True;
				}
			?>
			

			<table id='try'>
				<tr>
					<td colspan='2' class='array_list'>
						<?php
							if ($second_run == False) {
								echo ("My Parameter values: __, __, __");
							} else {
								echo ("My Parameter values: $num1, $num2, $num3");
							}
						?>
					</td>
				</tr>
				<tr>
					<td class='darken'>Addition:</td>
					<td>
						<?php
							echo operations($num1, $num2, $num3, 'add');
						?>
					</td>
				</tr>
				<tr>
					<td class='darken'>Subtraction:</td>
					<td>
						<?php
							echo operations($num1, $num2, $num3, 'subs');
						?>
					</td>
				</tr>
				<tr>
					<td class='darken'>Multiplication:</td>
					<td>
						<?php
							echo operations($num1, $num2, $num3, 'mult');
						?>
					</td>
				</tr>
				<tr>
					<td class='darken'>Division:</td>
					<td>
						<?php
							if ($second_run == False) {
								echo 0;
							} else {
								echo operations($num1, $num2, $num3, 'div');
							}
						?>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>