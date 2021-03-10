<input type="text" name="input"  placeholder="TA MERE">
<input type="text" name="input1" placeholder="TON PERE">
<input type="submit" value="ENVOIE LA PUTAIN DE TA MERE">


<?php 
if(!empty($_POST['input'] AND !empty($_POST['input1'])))
$input = $_POST['input'];
$input1 = $_POST['input1'];
function form($input, $input1) {
    echo $input;
    echo $input1;

}