<!DOCTYPE html>
<html>
  <head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/tuto.css" rel="stylesheet">
    <script type="text/javascript">
        //<!--

                document.onselectstart = new Function ("return false");
                if(window.sidebar)
                {
                        document.onmousedown = false;
                        document.onclick = true;
                }
        //-->
        </script>
        <style>
        	.col-sm-2{ line-height: px;}
        </style>
  </head>
<body>
<body oncontextmenu="return false;">
	<div class="container">
		<header class="row">
			<div class="col-sm-12" >
				En-tete
			</div>
		</header>
		<div class="row">
			<nav class="col-sm-2">Menu</nav>
			<section class="col-sm-10">Section
	        	<div class="row">
	        	<?php 
	        	$i = 1;
	        	do {
	        		?>
	        		<article class="col-sm-3">
		              Article <?php echo $i ?>
		            </article>
		        	<?php
		           	$i++;
	        	}
	        	while ($i <= 12)
	        	?>
		            
	          	</div>
        	</section>	
		</div>
		<footer class="row">
        	Pied de page
      	</footer>
	</div>
</body>
</html>