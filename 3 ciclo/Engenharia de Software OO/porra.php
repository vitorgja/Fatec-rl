<!doctype html>
<html>
<head>
  <title>Fibonacci Demo</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" >
  <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="js/libjs.O2.min.js"></script>
  <script type="text/javascript">
    
  </script>
	<style>
		div{margin: 0; padding: 0;}
		#container{width: 800px;height: 500px; margin: auto; position: relative;}
		#um			{width: 98px; height: 98px; background-color: purple;}
		#dois		{width: 98px; height: 98px; background-color: red;}
		#tres		{width: 198px; height: 198px; background-color: green;}
		#quatro		{width: 298px; height: 298px; background-color: blue;}
		#cinco		{width: 498px; height: 498px; background-color: pink;}
		
		#um			{position: absolute; left: 200px;top: 100px;line-height: 90px;}
		#dois		{position: absolute; left: 200px;top: 0px;line-height: 90px;}
		#tres		{position: absolute; left: 0; top:0;line-height: 190px;}
		#quatro		{position: absolute; left: 0; top: 200px;line-height: 290px;}
		#cinco		{position: absolute; right: 0;top: 0;line-height: 490px;}
		div>div		{display: inline-block;text-align: center; font-size: 2em; border-radius: 10px; border: 1px solid black;}
		</style>
</head>
<body>
  <div id="container">
    <div id="um">1</div>
	<div id="dois">1</div>
	<div id="tres"">2</div>
	<div id="quatro">3</div>
	<div id="cinco">5</div>
  </div>
</body>
</html>