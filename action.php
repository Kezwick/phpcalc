<?php
function calc(){
if (isset($_POST['btn'])) {

	$data=$_POST;
	if(is_int($data['number1']) and is_int($data['number2'] )){

		$pic1=$data['number1'];
		$pic2=$data['number2'];
	}

	else{
		$answer='error x';
		return $answer;
		//break;
	}

	$act=$data['act'];
	$answer = 0;

	switch ($act) {
					case '/':
			$answer = "$pic1 / $pic2 = ".$pic1/$pic2;
			break;
					case '*':
			$answer =  "$pic1 * $pic2 = ".$pic1*$pic2;
			break;
					case '-':
			$answer =  "$pic1 - $pic2 = ".$pic1-$pic2;
			break;
					case '+':
			$answer =  "$pic1 + $pic2 = ".$pic1+$pic2;
			break;		
					case 'Sqr':
			$answer =  "<sup>$pic2</sup> √ $pic1 = ".pow($pic1, 1/$pic2); 
			break;		
					case 'Pwr':
			$answer =  "$pic1 <sup>$pic2</sup> = ".pow($pic1, $pic2);
			break;		
					default:
			$answer =  "WTF?";
			break;
	}
	return $answer;
	}
}