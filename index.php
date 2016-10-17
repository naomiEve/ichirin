<?php
	$files = scandir("webm/");
	unset($files[0]);
	unset($files[1]);
	$files = array_values($files);
	$randomfile = $files[array_rand($files)];
?>

<!DOCTYPE HTML>
<HTML>
	<head>
		<title>webmroulette</title>
		<style>
			div{
				opacity:0.8;
				background-color:#ccc;
				position:fixed;
		       		width:100%;
    				height:100%;
    				top:0px;
    				left:0px;
    				z-index:1000;
			}

			video { 
    				    position: fixed;
    				    top: 50%;
    				    left: 50%;
    				    min-width: 100%;
    				    min-height: 100%;
    				    width: auto;
    				    height: auto;
    				    z-index: -100;
    				    -ms-transform: translateX(-50%) translateY(-50%);
				    -moz-transform: translateX(-50%) translateY(-50%);
    				    -webkit-transform: translateX(-50%) translateY(-50%);
    				    transform: translateX(-50%) translateY(-50%);
   				    background: url(polina.jpg) no-repeat;
    				    background-size: cover; 
			}
			a {
			  color: black;
			  font-size: 15px;
			  font-family: "Verdana", Geneva, sans-serif;
			  position: fixed;
			  left: 0;
			  bottom: 0;
			  text-decoration: none;
			}
		</style>
	</head>
	
	<body>
		<div id="container" onClick="location.reload()">	
		     <video autoplay loop>
		     	    <source src="webm/<?php echo $randomfile; ?>" type="video/webm">
			    Sadly your browser does not support WebM
		     </video>
		     <a href="upload.php">Upload a WebM</a>
		</div>	
	</body>
</HTML>