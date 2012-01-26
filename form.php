<?php

//error_reporting(-1);
//ini_set('display_errors', 'on');
//var_dump($_POST);
$total = '';
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Calculator</title>
<link href="css/general.css" rel="stylesheet">
</head>

<body class="main">

	<form action="form.php" method="post">
		<label for="number1">Number 1</label>
		<input id="number1" name="number1">
	
        <label for="function">Function</label>
		<select id="function" name="function">
			<option value="multiply">*</option>
			<option value="divide">/</option>
            <option value="add">+</option>
            <option value="subtract">-</option>
        </select>
        
		<label for="number2">Number 2</label>
		<input id="number2" name="number2">
        
        <button type="submit">Calculate</button>
	</form>
			<?php if (!empty($_POST['number1']) && !empty($_POST['number2'])) : ?>
				
				<?php if ($_POST['function'] == 'multiply') : ?>
                	<?php $total = (($_POST['number1']) * ($_POST['number2'])) ?>
                
				<?php elseif ($_POST['function'] == 'divide') : ?>
                	<?php $total = (($_POST['number1']) - ($_POST['number2'])) ?>
                
				<?php elseif ($_POST['function'] == 'add') : ?>
                	<?php $total = (($_POST['number1']) + ($_POST['number2'])) ?>
                
				<?php elseif ($_POST['function'] == 'subtract') : ?>
                	<?php $total = (($_POST['number1']) / ($_POST['number2'])) ?>
                <?php endif; ?>
			<?php endif; ?>
			
				<p><strong>Total:</strong> $<?php echo number_format(($total * 1.13),2); ?></p>



</body>
</html>