<!DOCTYPE html>

<html lang="en">
<head>
    <title>Java Jam Coffee House</title>
    <meta name="description" content="CENG 311 Inclass Activity 1">

</head>

<body>
	
<?php 
$rates = array(
	"FUSD"=>array(
		"TCAD"=>1.35,
		"TEUR"=>0.92,
		"TUSD"=>1
	),
	"FCAD"=>array(
		"TUSD"=>0.74,
		"TEUR"=>0.68,
		"TCAD"=>1
	),
	"FEUR"=>array(
		"TUSD"=>1.09,
		"TCAD"=>1.47,
		"TEUR"=>1
	)
	);
$input = 0;
if(isset($_POST)) {
	$fromCurrency = $_POST['currencies'];
	$toCurrency = $_POST['currencies2'];
	$input = $_POST['value'];
	$rate = $rates[$fromCurrency][$toCurrency];
	$result = $rate*$input;
}
?>

	<form action = "activity4.php" method="POST">
		<table>
			<tr>
				<td>
					From:
				</td>
				<td>
					<?php 
					echo '<input type="number" name="value"  value="'.($input ? $input:0).'"/>';
					?>
				</td>
				<td>
					Currency:
				</td>
				<td>
					<select name="currencies">
						<option value="FUSD"> USD </option>
						<option value="FCAD"> CAD </option>
						<option value="FEUR"> EUR </option>
					</select>
				</td>	
			</tr>
			<tr>
				<td>
					To:
				</td>
				<td>
					<?php 
					echo '<input type="text" name="value2" value="'.$result.'" />';
					?>
				</td>
				<td>
					Currency:
				</td>
				<td>
					<select name="currencies2">
						<option value="TUSD"> USD </option>
						<option value="TCAD"> CAD </option>
						<option value="TEUR"> EUR </option>
					</select>
				</td>	
			</tr>
				<tr>
				<td>
					
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
				<td>
					<input type="submit" value="convert">
				</td>	
			</tr>
		</table>
	</form>		
</body>