<?php
if (isset($_POST['btn'])) {
 	


	$data=$_POST;
	$pic1=$data['number1'];
	$pic2=$data['number2'];
	$act=$data['act'];
		

	switch ($act) {
		case '/':
			echo "$pic1/$pic2=";
			echo $pic1/$pic2;
			break;
		case '*':
			echo "$pic1*$pic2=";
			echo $pic1*$pic2;
			break;
					case '-':
			echo "$pic1-$pic2=";
			echo $pic1-$pic2;
			break;
					case '+':
			echo "$pic1+$pic2=";
			echo $pic1+$pic2;
			break;		
		default:
			echo "WTF????";
			break;
	}
	echo '<br><a href="index.html">back</a>';
}