
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
<input type="text" name="input"  placeholder="TA MERE">
<input type="text" name="input1" placeholder="TON PERE">
<input type="submit"  name="submit" value="ENVOIE LA PUTAIN DE TA MERE">
</form>
<?php 

echo $_POST['submit'];
if(isset($_POST['input'], $_POST['input1']))
$input = $_POST['input'];
$input1 = $_POST['input1'];
function form($input, $input1) {
    echo $input;
    echo $input1;
} ?>
    
</body>
</html>



