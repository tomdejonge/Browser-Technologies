<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>HTML5 localStorage demo</title>
<meta charset="UTF-8">
<meta name="description" content="localStorage demo">
<meta name="keywords" content="HTML,CSS,JS,PHP">
<meta name="author" content="Tom">
<link rel="stylesheet" href="css/style.css">
</head>
<body onload="doShowAll()">

<div class="wrapper">	

	<h1>T-shirt editor</h1>
	<p id="support"></p>
	<p id="no_support">:( Helaas, localStorage werkt niet in je browser, je kunt het gemaakte t-shirt naar je e-mail verzenden.</p>


	<form name="myform" action="mail.php" method="POST">

		<div id="PlayArea">
			<textarea class="edit" type=text name="name" placeholder="#titanic { float: none; }"></textarea>
		</div>

		<div id="actions">
			<input id="save_btn" type="button" class="btn hidden" value="Save" onclick="SaveItem()"> 
		    <input id="mail" type="text" class="mail" placeholder="your e-mail adress" name="to" size="25" />
			<input id="mail_btn" type="submit" class="btn" value="Mail"/>
			<input class="hidden" class="btn" type=text name=data>
		</div>

		<div id="items_table" class="hidden">	
			<h2>Opgeslagen T-shirts</h2>		
			<table id="list"></table>
			<input type=button value="Clear" class="btn" onclick="ClearAll()">
		</div>

	</form>

</div>	

<script src="js/script.js"></script>

</body>
</html>