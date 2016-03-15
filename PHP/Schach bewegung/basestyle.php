<?php
   header("Content-type: text/css; charset: UTF-8");
   
   $darkbg = "#707070"; 			//$darkbg = "#707070";
   $lightbg = "#e0e0e0"; 			//$lightbg = "#e0e0e0";
   $fieldwidth = "60px"; 			//$fieldwidth = "60px";
   $fieldheight = "60px";			//$fieldheight = "60px";
?>
body {
	text-align: center;
	margin: auto;
	padding: auto;
	font-family: sans serif, Verdana;
	background-color: #505050;
	color: #ffffff;
}

header {
	
}

div {	
    //perspective: 400px;
	background-color: #505050;
	width: 800px;
	margin: 0 auto;
}

table {
	margin: auto;
	border: 3px solid #d0d0d0;
    border-collapse: collapse;
	background-color: #a0a0a0;
	color: #000000;
    //transform: rotateX(20deg);
}

th {	
	border: 1px solid #d0d0d0;
	padding: 5px;
	font-size: 0.8em;
}

td {
	border: 1px solid #d0d0d0;
	width: <?php echo $fieldwidth; ?>;
	height: <?php echo $fieldheight; ?>;
	font-size: 2.7em;
}

tr:nth-child(even) td:nth-child(odd),tr:nth-child(odd) td:nth-child(even) {
	background-color: <?php echo $darkbg; ?>;
	//background-image: url("../images/xwooden-dark.png") no-repeat right bottom;
}

tr:nth-child(even) td:nth-child(even),tr:nth-child(odd) td:nth-child(odd) {
	background: <?php echo $lightbg; ?>;
	//background-image: url("../images/xwooden-light.png") no-repeat left bottom;
}

tr:first-child td:nth-child(n),tr:last-child td:nth-child(n),
tr:nth-child(n) td:first-child,tr:nth-child(n) td:last-child
	{	
		border: 1px solid #d0d0d0;
		padding: 5px;
		font-size: 0.8em;
		width: 12px;
		height: 12px;
		background-color: #a0a0a0;
		font-weight: bold;
	}
