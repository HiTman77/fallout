<?php global $Wcms ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?></title>
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<?= $Wcms->css() ?>
<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>?v<?php echo(rand(1,33));?><?php echo(rand(1,20));?>">
   	 </head>
	<body>
	    <div class="overlay"></div>
	    <?= $Wcms->settings() ?>
	    <?= $Wcms->alerts() ?>
	    <div class="container">
    		<nav class="navbar navbar-default">
    				<div class="navbar-header">
    					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-collapse">
    						<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
    					</button>
    					
    					    <h3><a href="/"><img src="/data/files/logo.png" alt="<?=$Wcms->page('title')?>"></a></h3>
    					
    				</div>
    				<div class="collapse navbar-collapse" id="menu-collapse">
    					<ul class="nav navbar-nav navbar-right">
    						 <?= $Wcms->menu() ?>
    					</ul>
    				</div>
    		</nav>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center padding40">
				<h3 align="center"><?= $Wcms->page('keywords') ?></h3>
				<h4 align="center"><?= $Wcms->page('description') ?></h4>
				
                    <?= $Wcms->page('content') ?>

				</div>
			</div>
		</div>
		<div class="container-fluid blueBackground whiteFont">
			<div class="row">
				<div class="col-lg-12 text-center padding40">
                    <?= $Wcms->block('subside') ?>
				</div>
			</div>
		</div>
		<footer class="container-fluid">
			<div class="text-right padding20">
                <?= $Wcms->footer() ?>
			</div>
		</footer>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    	<script type="text/javascript">
        	$(document).ready(function(){
                $(window).scroll(function () {if ($(this).scrollTop() > 0) {$('#scroller').fadeIn();} else {$('#scroller').fadeOut();}});
                $('#scroller').click(function () {$('body,html').animate({scrollTop: 0}, 400); return false;});
            });
        </script>
        <?= $Wcms->js() ?>
        <div id="scroller" class="b-top" style="display: none;"><span class="b-top-but"><p style="color:#000">TOP</p></span></div>
	</body>
</html>
