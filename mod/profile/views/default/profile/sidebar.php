<?php
/**
 * Elgg profile icon edit form
 *
 * @package ElggProfile
 */
?>
<div id="profile-sidebar">
<?php
	$section = $vars['section'];
	echo elgg_view('profile/ownerblock', array('section' => $section));
?>
</div>