<?php

$modal_enable=false;
$file_dir=__DIR__;
$file_name=$file_dir.'/config/save.txt';
$file_name2=$file_dir.'/config/color.txt';
$user_data=$_POST;
$user_data['modal']="";
$arr=file($file_name2);
$myFon=$arr[0];
$lock=$_GET["lock"];
 


if(isset($_POST['modal'])){
	$modal_enable=true;
	$file=fopen($file_name,'w');
	$str=serialize($user_data);
	fwrite($file,$str);

fclose($file);
}






if(isset($lock)){
	
$file=file($file_name2);
if(isset($file[1]))
	$file[1]="$lock";
	else
	$file[1]="\n$lock";

var_dump($file);
file_put_contents($file_name2,$file);


}







if($_GET[color]=="replace"){

	switch($arr[0]){
		
			case "red" :
		$arr[0]="blue";
		break;
			case "blue" :
		$arr[0]="yellow";
		break;
			case "yellow" :
		$arr[0]="grey";
		break;
			case "grey" :
			$arr[0]="red";
		break;
		default:
		$arr[0]="red";
		break;
	}
file_put_contents($file_name2,$arr);
echo $_GET['finish']="1";
	
}



if(filesize($file_name)>0){
$reads=unserialize(file_get_contents($file_name));     
}


?>