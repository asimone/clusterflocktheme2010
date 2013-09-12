<?php
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

<div id="twitter">
<ul id="twitter_update_list"></ul>
</div>
<script src="http://twitter.com/javascripts/blogger.js" type="text/javascript"></script>
<script src="http://twitter.com/statuses/user_timeline/<?php echo $cleansimplewhite_twitter_username; ?>.json?callback=twitterCallback2&count=<?php echo $cleansimplewhite_tweet_number; ?>" type="text/javascript"></script>
<a href="http://twitter.com/<?php echo $cleansimplewhite_twitter_username; ?>" class="follow">follow <?php echo $cleansimplewhite_twitter_username; ?></a>