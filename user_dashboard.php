<?php
session_start();
?>
<html>
<head>
<title>Test Page</title>
<script src="includes/js/jquery-1.10.1.min.js"></script>
<link rel="stylesheet" href="includes/css/bootstrap.css">
<style>
body
{
	margin: 5px;
}
</style>
</head>
<body>

<!-- Test Links. Can be changed accordingly -->
<!-- 'a' tags -->
<a href="1.html" id="link1">1</a>
<br>
<a href="2.html" id="link2">2</a>
<br>
<a href="3.html" id="link3">3</a>
<br>
<a href="4.html" id="link4">4</a>
<br>
<a href="5.html" id="link5">5</a>

<!-- 'div' -->
<div id="div1">
	<p id="p1">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>
</div>
<div id="div2">
	<h1 id="heading">Hello! How are you</h1>
</div>
<br>
<br>
<!-- Images -->
<img src="http://placehold.it/350x150" id="image">
<br>
<br>

<script>
$(document).ready(function () {

$(document).on('click', function(e) { 
	e.preventDefault(); //stop any default actions
	
	var id=e.target.id; //retrieve element id that has been clicked
	var element=e.target.tagName;
	if(element=='A')
	{
		
		var path=document.getElementById(id).getAttribute('href');
		
	}
	
	var URL = window.location.pathname; //retrieve URL of page without domain
	
	//sending data to store.php to store in a file

	$.ajax({

		type: "POST",
		url: "store.php",
		data: "id="+id+"&url="+URL,
		success: function(msg)
	    {
	    	if(element=='A')
	    	{
	    		window.location=path;
	    	}
	    }

	});
});

});
</script>

</body>
</html>