<?php

/**
 * This is the main markup file containing the container HTML that all pages are output in.
 *
 * The primary focus of this file is to output these variables (defined in _init.php) in the 
 * appropriate places:
 *
 * $headline - Text that goes in the primary <h1> headline
 * $browserTitle - The contents of the <title> tag
 * $body - Content that appears in the bodycopy area
 * $side - Additional content that appears in the sidebar
 *
 * Note: if a variable called $useMain is set to false, then _main.php does nothing.
 *
 */

// if any templates set $useMain to false, abort displaying this file
// an example of when you'd want to do this would be XML sitemap or AJAX page.
if(!$useMain || $config->ajax) return;
/**********************************************************************************************/
?><!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title><?php echo $browserTitle; ?></title>

	<?php if($page->summary) echo "<meta name='description' content='$page->summary' />"; ?>
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
	<link href="<?php echo $config->urls->templates; ?>css/styles.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?php echo $config->urls->templates; ?>css/meanmenu.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo $config->urls->templates; ?>css/main.css" media="all" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script> 
  
</head>
<body class='<?php echo "template-{$page->template} section-{$page->rootParent->name} page-$page"; ?>'>
<div id="left-bg"></div>
<div id="right-bg"></div>
<div id="top-bg"></div>
<div id="bottom-bg"></div>

<div id="left"></div>
<div id="right"></div>
<div id="top"></div>
<div id="bottom"></div>


         

<!--Mobile Menu-->

<!--/#mobile-menu-->

<!--navbar-->
<nav class="navbar navbar-fixed-top navbar-dark bg-inverse hidden-sm-down">
	<div class="container">
		<div class="row">
			<div class="col-xs-7">
			</div>
			<div class="col-xs-5">
				<?php
				$pa = $pages("template=external-link|info-page");
				echo renderChildrenOf($pa);
				?>
			</div>
		</div>
	</div>
</nav>
<!--/navbar-->


	<!-- breadcrumbs -->
	<div class="container top-spacing">
		<div class="row">
			<div class="col-xs-12">
				<ol class="breadcrumb m-t-1">
					<?php
					foreach($page->parents() as $item) {
						echo "<li><a href='$item->url'>$hompage->title</a></li> ";
					}
					// optionally output the current page as the last item
					echo "<li><a href='$item->url' class='no-hover'>$homepage->title</a></li> ";
					?>
				</ol>
			</div>
		</div>
	</div>
    <!--/breadcrumbs-->
<!-- random supremetist comp on refresh -->
  <div id="supComp"></div>
	<!-- content -->
	<div class="container top-spacing">
		<div class="row page-content"">
			<div class="col-xs-12">
				<?php echo $content; ?>
			</div>
		</div>
	</div>
    <!--/content-->

	<!--footer-->
	
	<!--/footer-->


	<script type="text/javascript">
	if (typeof jQuery == 'undefined') {
	    document.write(unescape("%3Cscript src='<?php echo $config->urls->templates; ?>bower_components/jquery/dist/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));
	}
	</script>
	<script type="text/javascript">
		$(function(){

			// $('#supComp').hide();

			setTimeout(function(){
				$('#supComp').fadeTo("slow", 1, "swing");
			},1250);

		});
		$(function(){

			// $('.page-content').hide();

			setTimeout(function(){
				$('.page-content').fadeTo(300, 1, "swing");
			},1700);

			$('a').click(function(e) {
				e.preventDefault();
				newLocation = this.href;
				$('.page-content').fadeOut(300, newpage);
				$('#supComp').fadeOut(300, newpage);
			});
			function newpage() {
				window.location = newLocation;
			}
			// $('a').click(function(e) {
			// 	e.preventDefault();
			// 	newLocation = this.href;
			// 	$('#supComp').fadeOut(300, newpage);
			// });
			// function newpage() {
			// 	window.location = newLocation;
			// }

		});
	</script>
	<script src="<?php echo $config->urls->templates; ?>bower_components/tether/dist/js/tether.min.js"></script>
	<script src="<?php echo $config->urls->templates; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?php echo $config->urls->templates; ?>js/jquery.meanmenu.min.js"></script>
	<script src="<?php echo $config->urls->templates; ?>js/scripts.js"></script>
    <script src="<?php echo $config->urls->templates; ?>js/p5.min.js"></script>
    <script src="<?php echo $config->urls->templates; ?>js/p5.dom.js"></script>
     <script src="<?php echo $config->urls->templates; ?>js/p5.dom.min.js"></script>
    <script src="<?php echo $config->urls->templates; ?>js/p5.js"></script>
    <script src="<?php echo $config->urls->templates; ?>js/sketch.js"></script>
	<?php foreach($config->scripts as $url) echo "<script src='$url'></script>"; ?>
</body>
</html>
