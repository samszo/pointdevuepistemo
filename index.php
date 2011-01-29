<?php
?>
<html>
  <head>
    <title>Points de Vue Epistemologiques</title>
	<script type="text/javascript" src="library/js/jquery-1.4.4.min.js" ></script>  
	<script type="text/javascript" src="library/js/tagcloud.js" ></script>  
	<script type="text/javascript">
		function init(){		
			//$('#diagramme').load('epistemo.svg');
			AppendSVG('epistemo.svg',document.getElementById('diagramme'))
		}
	</script>

  </head>
  <body onload="init();">
	<div id="center">
  		<div id="diagramme" style="width:800px;height:100%;" ></div>
		<div id="resultat" ></div>
	</div>
  </body>
</html>
