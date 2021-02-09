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
					<div><label>4.</label><input class='grid-item' type=text name='num4' maxlength=9/></div>
					<div><label>5.</label><input class='grid-item' type=text name='num5' maxlength=9/></div>
					<div><label>6.</label><input class='grid-item' type=text name='num6' maxlength=9/></div>
					<div><label>7.</label><input class='grid-item' type=text name='num7' maxlength=9/></div>
					<div><label>8.</label><input class='grid-item' type=text name='num8' maxlength=9/></div>
					<div><label>9.</label><input class='grid-item' type=text name='num9' maxlength=9/></div>
					<div><label>10. </label><input class='grid-item' type=text name='num10' id='ten'  maxlength=9/></div>

				</div>
				<input type='submit' name='submit'/>
			</form>
			
			<?php
				$arr = array();
				$num_array = array();
				$arr[] = 'Array List: ';

				if (isset($_POST['submit'])) {
					$arr[] = $_REQUEST['num1'];
					$arr[] = $_REQUEST['num2'];
					$arr[] = $_REQUEST['num3'];
					$arr[] = $_REQUEST['num4'];
					$arr[] = $_REQUEST['num5'];
					$arr[] = $_REQUEST['num6'];
					$arr[] = $_REQUEST['num7'];
					$arr[] = $_REQUEST['num8'];
					$arr[] = $_REQUEST['num9'];
					$arr[] = $_REQUEST['num10'];

					for ($i = 1; $i < count($arr); $i++) {
						$num_array[] = (int)$arr[$i];
					}
				}
			?>
			

			<table id='try'>
				<tr>
					<td colspan='2' class='array_list'>
						<?php
							for ($i = 0; $i < count($arr); $i++) {
								if ($i == 0 || $i == count($arr) - 1) {
									echo $arr[$i].' ';
								} else {
									echo $arr[$i].', ';
								}
							}
						?>
					</td>
				</tr>
				<tr>
					<td class='darken'>Addition:</td>
					<td>
						<?php
							if (count($num_array) > 0) {
								echo array_sum($num_array);
							} else {
								echo 0;
							}
						?>
					</td>
				</tr>
				<tr>
					<td class='darken'>Subtraction:</td>
					<td>
						<?php
							$diff = 0;
							if (count($num_array) > 0) {
								for ($i = 0; $i < count($num_array); $i++) {
									$diff -= $num_array[$i];
								}
								echo $diff;
							} else {
								echo 0;
							}
						?>
					</td>
				</tr>
				<tr>
					<td class='darken'>Multiplication:</td>
					<td>
						<?php
							if (count($num_array) > 0) {
								echo array_product($num_array);
							} else {
								echo 0;
							}
						?>
					</td>
				</tr>
				<tr>
					<td class='darken'>Division:</td>
					<td>
						<?php
							$quo = 1;
							if (count($num_array) > 0) {
								for ($i = 0; $i < count($num_array); $i++) {
									$quo /= $num_array[$i];
								}
								echo $quo;
							} else {
								echo 0;
							}
						?>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>