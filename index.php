<?php
//require_once 'autoloader.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/rss-feed/autoloader.php';
$feed = new SimplePie('http://www.espn.com/espn/rss/news');
$feed ->set_cache_location();
$feed->set_cache_duration();
//$feed->set_item_limit(3)
?>


<!DOCTYPE html>
<html>
<head>
	<title>rss feed</title>
	<style type="text/css">
		/*body{
			font-family: sans-serif;
			}*/
			container{
					border: 5px solid #689;
					border-radius: 30px;
					width: 40%;
					margin: 10% auto;
					padding: 5%;
				}
			h3 {
				font-weight: 0.5em;
			}
			nav{
				width: 99%;
			}
			a {
				text-decoration: none;
				padding-left: 8px;
				cursor: pointer;
				
			}
			a:hover {
				height: 30px;
				background-color: black;
			}
	</style>
</head>
<body>
	<header>Sport News Rss</header>

	<section><h3><?php print $feed->get_title(); ?></h3></section>

	<article> <?php print $feed->get_title(); ?> </article>
		<aside>
			 <?php
			  $fed = array($feed, 0,6) ?>
			<ul>
			<?php foreach($fed as $item) { ?>
				<li>
					<a href="<?php print $item->get_permalink();?>">
					<?php print $item->get_title(); ?>
					</a>
				</li>
			<?php } ?>
		</ul>
		</aside>
	
