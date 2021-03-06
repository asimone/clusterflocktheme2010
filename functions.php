<?php

add_filter('tiny_mce_before_init', create_function( '$a',
'$a["extended_valid_elements"] = "iframe[id|class|title|style|align|frameborder|height|longdesc|marginheight|marginwidth|name|scrolling|src|width]"; return $a;') );

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
		'name'=>'Sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

	register_sidebar(array(
		'name'=>'Footer Left',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));


	register_sidebar(array(
		'name'=>'Footer Center',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
	register_sidebar(array(
		'name'=>'Footer Right',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}

$themename = "CSW";
$shortname = "cleansimplewhite";
$options = array (
 
array(  "type" => "open"),

array(  "name" => "Disable Latest Tweet?",
        "desc" => "Check the button to disable The Latest Tweet Widget.",
        "id" => $shortname."_twitter_disable",
        "type" => "checkbox",
        "std" => "false"),

array(  "name" => "Twitter Username",
        "desc" => "Enter Your Twitter username!",
        "id" => $shortname."_twitter_username",
        "std" => "wordpress",
        "type" => "text"),

array(  "name" => "Tweet Number",
        "desc" => "Tweet number You want to show.",
        "id" => $shortname."_tweet_number",
        "std" => "5",
        "type" => "text"),
		
array(	"name" => "Custom Favicon",
        "desc" => "Put Your Favicon image URL. Suggested size 16 x 16 px.",
        "id" => $shortname."_favicon",
        "std" => "",
        "type" => "text"),

array( "type" => "close")
 
);

function mytheme_add_admin() {
 
global $themename, $shortname, $options;
 
if ( $_GET['page'] == basename(__FILE__) ) {
 
if ( 'save' == $_REQUEST['action'] ) {
 
foreach ($options as $value) {
update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
 
foreach ($options as $value) {
if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
 
header("Location: themes.php?page=functions.php&saved=true");
die;
 
} else if( 'reset' == $_REQUEST['action'] ) {
 
foreach ($options as $value) {
delete_option( $value['id'] ); }
 
header("Location: themes.php?page=functions.php&reset=true");
die;
 
}
}
 
add_theme_page($themename." Options", "".$themename." Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');
 
}

 
function mytheme_admin() {
 
global $themename, $shortname, $options;
 
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
 
?>

<div class="wrap">
<div id="icon-options-general" class="icon32"><br /></div>
<h2>Clean Simple White Options</h2>
 
<form method="post">
 
<?php foreach ($options as $value) {
switch ( $value['type'] ) {
 
case "open":
?>
<table width="100%" border="0" style="padding:10px;">
 
<?php break;
 
case "close":
?>
 
</table><br />
 
<?php break;
 
case "title":
?>
<table width="100%" border="0" style="padding:5px 10px;"><tr>
<td colspan="2" style="border-bottom: 1px dashed #aaa;"><h2 style="margin-bottom: 10px;"><?php echo $value['name']; ?></h2></td>
</tr>
 
<?php break;
 
case 'text':
?>
 
<tr>
<td width="30%" rowspan="2" valign="middle"><?php echo $value['name']; ?></td>
<td width="70%"><input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" /></td>
</tr>
 
<tr>
<td><span style="color: #666;"><?php echo $value['desc']; ?></span></td>
</tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dashed #aaa;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
 
<?php
break;
 
case 'textarea':
?>
 
<tr>
<td width="30%" rowspan="2" valign="middle"><?php echo $value['name']; ?></td>
<td width="70%"><textarea name="<?php echo $value['id']; ?>" style="width:400px; height:200px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?></textarea></td>
 
</tr>
 
<tr>
<td><span style="color: #666;"><?php echo $value['desc']; ?></span></td>
</tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dashed #aaa;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
 
<?php
break;
 
case 'select':
?>
<tr>
<td width="30%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
<td width="70%"><select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php foreach ($value['options'] as $option) { ?><option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?></select></td>
</tr>
 
<tr>
<td><small><?php echo $value['desc']; ?></small></td>
</tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
 
<?php
break;
 
case "checkbox":
?>
<tr>
<td width="30%" rowspan="2" valign="middle"><?php echo $value['name']; ?></td>
<td width="70%"><?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
<span style="color: #666;"><?php echo $value['desc']; ?></span>
</td>
</tr>

<tr><td></td></tr>
<tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dashed #aaa;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
 
<?php break;
 
}
}
?>
 
<p class="submit">
<input name="save" class="button-primary" type="submit" value="Save changes" />
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
 
<?php
}

add_action('admin_menu', 'mytheme_add_admin');?>