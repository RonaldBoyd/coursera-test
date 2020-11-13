<html>
<head>
<title>Demo of PHP 7.3.11</title>

<style>
body{
background-color:#ffff00;
}
h1{
font-size:48pt;
font-variant:small-caps;
text-align:center;
color:#00ff00;
}
h2{
font-size:32pt;
font-variant:small-caps;
text-align:center;
color:#ff00ff;
}
div{
font-size:24pt;
color:#ff0000;
text-align:center;
}
</style>

</head>
<body>
	<h1>Demonstration of PHP 7.3.11</h1>
	<?php echo"<h1>Demonstration of PHP 7.3.11</h1>"; ?>
<?php



function filehandlerfunction(int $op, string $nameOffile, string $txt ) {
  
  if($op == 1) {
		
		
		$myfile = fopen($nameOffile, "w") or die("Unable to open file for writing!");
		$txt.="\n";
		fwrite($myfile, $txt);

	} else if($op == 2) {
		$myfile = fopen($nameOffile, "a") or die("Unable to open file for appending!");
		$txt.="\n";
		fwrite($myfile, $txt);

	} else {
		$myfile = fopen($nameOffile, "r") or die("Unable to open file for reading!");
		echo fread($myfile,filesize($nameOffile));
	}

  fclose($myfile);

  $message = array("Read","Written","Appended");


  echo $nameOffile . " " . $txt . "  " . $message[$op];

  return $op;
}
?>


<?php

$data=$_GET['name'];

echo($data);
if($data){
filehandlerfunction(2,"./docs/data.txt", $data);
}
?>

<?php echo"<h1>Demonstration of PHP 7.3.11</h1>"; ?>
<meta http-equiv="refresh" content="1; URL=./ronboyd.html" />
</body>
</html>
