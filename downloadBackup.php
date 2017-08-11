<?php
$backup_file_name = $_POST['download_current_backup'];
$change_gif_by_time = date("H");
/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/
while($backup_file_name){
	flush();
	if (file_exists($backup_file_name)) { // Checks if file is on server
		unlink($backup_file_name); // Removes file 
		if ($change_gif_by_time < "10"){
    			$show_gif = "<img src='gifs/didntseeanything.gif' height='200' width='500'>";
		} elseif ($change_gif_by_time < "20"){
    			$show_gif = "<img src='gifs/spongbob_delete.gif' height='200' width='500'>";
		} else {
    			$show_gif = "<img src='gifs/grandpadelete.gif' height='200' width='500'>";
		}
	$show_staus = $backup_file_name . " Has been removed from server";
	} else{
		$show_staus = "There Was No File To Remove";
		$show_gif = "<img src='gifs/getnothing.gif' height='200' width='500'>";
	}
?>
<head>
<title>Backup Removed</title>
<meta name='author' content='DonnellC'>
<meta name='description' content='This was created By:DonnellC Code-GEN'>
<meta name='keywords' content='bd0f1c08b0efcff31efb4867d9176e28'>
<style TYPE="text/css"> #document { width: 700px; margin-left: auto; margin-right: auto; text-align: center; margin-top: 30px; } body { font: 1.25em arial,helvetica,sans-serif; color:#999; } </style> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script>
function BacktoPlugin() { // Goes back 2 pages
    window.history.go(-2);
}
</script>

</head> 
<body>
<div id="document"> 
<?php echo $show_staus ?>
<br>
<?php echo $show_gif ?>
<br>
<button onclick='BacktoPlugin()'>Go Back To Plug-In Page</button>
</div>
</body>
</html>
	<?php
	exit;
}				
?>