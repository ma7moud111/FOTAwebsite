<?php

if (isset($_GET['status']))
{
	
	/*open file */
	$file =fopen("status.txt","w");
	if($_GET['status'] == 'on')
	{
		fwrite($file,'1');
		header("Location:on.html");
		
	}
	elseif($_GET['status'] == 'off')
	{
		fwrite($file,'0');
		header("Location:off.html");
	}
	fclose($file);
}



?>