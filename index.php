<?php
	echo '<b>Error modes and operator \'@\':</b>'.'</br>';
	
	//E_ERROR 1
	//E_WARNING 2
	//E_PARSE 4
	//E_NOTICE 8
	//E_CORE_ERROR 16
	//E_CORE_WARNING 32
	//E_COMPILE_ERROR 64
	//E_COMPILE_WARNING 128
	//E_USER_ERROR 256
	//E_USER_WARNING 512
	//E_USER_NOTICE 1024
	//E_STRICT 2048
	//E_RECOVERABLE_ERROR 4096
	//E_DEPRECATED 8192
	//E_USER_DEPRICATED 16384
	//E_ALL 32767

	//error_reporting(E_ERROR | E_WARNING);

	$handler = @fopen('a.txt','r');
	if(!$handler) echo 'Error opening file'.'</br>';
	// if(!empty($_POST['myform'])){
	// 	echo 'Form has been sent';
	// }
	// if(isset($_POST['myform'])){
	// 	echo 'Form has been sent';
	// }
	if(@($_POST['myform'])){
		echo 'Form has been sent';
	}
	
?>

<form action="index.php" name='myform' method="post">
	<div>
		<input type="submit" name='myform' value='Send'>
	</div>
</form>