<?php
	$data = isset($_POST["data"]) ? $_POST["data"] : false;
	if($data)
	{
		$dosya = 'ikcache.txt';
		if(file_exists($dosya))
		{
			$dt = fopen($dosya, "w");
			fwrite($dt,$data);
			fclose($dt);
		}
		else
		{
			touch($dosya);
		}
	}
?>
