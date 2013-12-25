<?php
error_reporting(E_ALL & ~E_DEPRECATED);
require_once('inc/simplepie.inc');
$feed = new SimplePie();

//feed sources
$feed->set_feed_url('http://vnexpress.net/rss/gl/the-gioi.rss'
);
//set up cache
$feed->enable_cache(true);
$feed->set_cache_duration(3600);
$feed->set_cache_location('cache');
//start process
$feed->init();
$feed->handle_content_type();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

     <title>Simple Pie Feed</title>

     <style type="text/css">
        * { margin: 0; padding: 0;}
        #wrapper {
            width: 500px;
            margin: 20px auto;
        }
        
        #feedHeader {
            padding: 25px;
            margin-bottom: 25px;
            background: #a5a5a5;
        }
        
        h1 {
            font-size: 16px;
        }
     </style>

     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
     <script type="text/javascript" src="js/newsScroller.js"></script>
      <script type="text/javascript">
		$(function() {
		$(".feed").jCarouselLite({
				vertical: true,
				visible: 5,
				auto:3000,
				speed:1000
			});
		});
		</script>
</head>

<body>
	<div id="wrapper">
        <div id="feedHeader">
            <p><?php echo $feed->get_title();?></p>
            <p><?php echo $feed->get_description();?></p>
        </div><!--End #feedHeader-->
        <div class="feed">
        <ul>
        <?php foreach($feed->get_items(0, 5) as $item) : ?>
        <?php $feed = $item->get_feed(); ?>
            <li class="entry">
                <h1><a href="<?php echo $item->get_permalink();?>"><?php echo $item->get_title();?></a></h1>
                <p>
                <?php echo $item->get_content(); ?>
                <?php echo $item->get_date();?>
                </p>
                <p>Source:
                <img src="<?php echo $feed->get_favicon();?>" alt="<?php echo $feed->get_title();?>" title="<?php echo $feed->get_title();?>" />
                </p>
                <p><strong>Copyright:</strong> <?php echo $feed->get_copyright();?></p>
            
            
            </li>
        <?php endforeach; ?>
        </ul>
        </div><!--end .feed-->
    </div><!--End #wrapper-->

</body>

</html>