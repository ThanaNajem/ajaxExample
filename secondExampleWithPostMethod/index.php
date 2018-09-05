<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="examp">
	<h2>XMLHttpRequest Example</h2>
	<input type="text" id="name1">
	<button onclick="changeContent()">Change content</button>
</div>
<script type="text/javascript">
	var name = document.getElementById('name1').value;
	 
	function changeContent()
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if (this.readyState == 4  && this.status==200) 
			{
				document.getElementById("examp").innerHTML = this.responseText;
			}
		};
		xhttp.open("POST","ajaxData.php", true);

xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		 xhttp.send("id="+name);
	}
</script>
</body>
</html>
 