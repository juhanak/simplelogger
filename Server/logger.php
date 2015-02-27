<?php
if (isset($_REQUEST['data']) && isset($_REQUEST['name'])) 
{
	file_put_contents ( "./tmp/".$_REQUEST['name'] , $_REQUEST['data']);
} 
else 
{
	if (isset($_REQUEST['delete']))
	{
		if (file_exists("./tmp/".$_REQUEST['delete']))
		{
			unlink("./tmp/".$_REQUEST['delete']);
		}
	}
	
	$files = array_diff(scandir("./tmp/"),array('..', '.'));
	$content = "";
	
	if (isset($_REQUEST['file']))
	{
		$content = file_get_contents("./tmp/".$_REQUEST['file']);
		$selected_file = $_REQUEST['file'];
	}
	
	require("template.php");
}
?>
