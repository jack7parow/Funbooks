<HTML>
<head></head>
<body>
<?php
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
	echo "jump";
	echo $_POST["quantity"];
	echo $_GET["code"];
	break;
}
}

?>
