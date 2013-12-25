<?php
error_reporting(E_ALL & ~E_DEPRECATED);
require_once ('inc/simplepie.inc');
$feed = new SimplePie();
$feed->set_feed_url('http://vnexpress.net/rss/gl/vi-tinh.rss'
);
//set up cache
$feed->enable_cache(true);
$feed->set_cache_duration(3600);
$feed->set_cache_location('cache');
//start the process
$feed->init();
$feed->handle_content_type();
?>
<div class="wrap3">
    <div class="benphai">
        <div class="box1">
        	<div class="box-heading1">Giới thiệu</div><br>
                <div id="wrapper">
                <div id="feedHeader">
                    <p><?php echo $feed->get_title();?></p>
                    <p><?php echo $feed->get_description();?></p>
                </div><!--end #header-->
                <div class="feed">
                <ul>
                <?php foreach($feed->get_items(0, 5) as $item): ?>
                <?php $feed = $item->get_feed(); ?>
                    <li class="entry">
                        <h1><a href="<?php echo $item->get_permalink();?>"><?php echo $item->get_title();?></a></h1>
                        <p><?php echo $item->get_content();?></p>
                        <?php echo $item->get_date();?>
                        <p>Source:
                        <img src="<?php echo $feed->get_favicon();?>" alt="<?php echo $feed->get_title();?>" border="0" width="16" height="16" /> <?php echo $feed->get_title();?>
                        </p>
                        <p>Copyright: <?php echo $feed->get_copyright();?>
                    
                    </li>
                <?php endforeach; ?>
                </ul>
                </div>
                </div>
 			</div>
        </div>
    </div>
</div>