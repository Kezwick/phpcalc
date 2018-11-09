<?php 
if(isset($_POST['+']))
	{
		$data1=$_POST;
		$data2=$_POST;
		$pic1=$data1['number1'];
		$pic2=$data2['number2'];
		echo $pic1+$pic2;
	}
elseif (isset($_POST['-']))
	{
		$data1=$_POST;
		$data2=$_POST;
		$pic1=$data1['number1'];
		$pic2=$data2['number2'];
		echo $pic1-$pic2;
	}
	elseif (isset($_POST['*']))
	{
		$data1=$_POST;
		$data2=$_POST;
		$pic1=$data1['number1'];
		$pic2=$data2['number2'];
		echo $pic1*$pic2;
	}
	elseif (isset($_POST['/']))
	{
		$data1=$_POST;
		$data2=$_POST;
		$pic1=$data1['number1'];
		$pic2=$data2['number2'];
		echo $pic1/$pic2;
	}
?>