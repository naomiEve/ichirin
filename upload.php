<!DOCTYPE HTML>
<HTML>
	<head>
		<title>webmroulette - upload</title>
		<style>
			body {
			     font-family: "Verdana", Geneva, sans-serif;
			} 
			div {
			    height: 500px;
			    width: 350px;
			    position:absolute;
			left:0; right:0;
    			top:0; bottom:0;
    			margin:auto;
			
    			max-width:100%;
    			max-height:100%;
    			overflow:auto;
			}
		</style>
	</head>

	<body>
		<div id="uploadcontain">
		     <form method="POST" action="webmupload.php" enctype="multipart/form-data">
		     	   Select a WebM:<br>
    			   <input type="file" name="webm" id="webm">
    			   <input type="submit" value="Upload WebM" name="submit">
		     </form>
		</div>
	</body>
</HTML>
