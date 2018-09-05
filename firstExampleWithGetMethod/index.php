<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="examp">
	<h2>XMLHttpRequest Example</h2>
	<button onclick="changeContent()">Change content</button>
</div>
<script type="text/javascript">
	function changeContent()
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if (this.readyState == 4  && this.status==200) 
			{
				document.getElementById("examp").innerHTML = this.responseText;
			}
		};
		xhttp.open("GET","ajaxData.php", true);
		 xhttp.send();
	}
</script>
</body>
</html>
 