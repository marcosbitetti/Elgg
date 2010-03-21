<?php
/**
 * Elgg show the user who liked the object
 */

$owner = get_user($vars['annotation']->owner_guid);

?>
<div class="elgg_likes clearfloat">
	<div class="elgg_likes_icon">
		<?php
			echo elgg_view("profile/icon", array(
					'entity' => $owner,
					'size' => 'tiny'
					));
		?>
	</div>
	
	<div class="elgg_likes_details">
		<?php
		// if the user looking at the like listing can edit, show the delete link
		if ($vars['annotation']->canEdit()) {
		?>
			<span class="delete_button">
				<?php echo elgg_view("output/confirmlink",array(
						'href' => $vars['url'] . "action/likes/delete?annotation_id=" . $vars['annotation']->id,
						'text' => elgg_echo('remove'),
						'confirm' => elgg_echo('deleteconfirm')
						));
				?>
			</span>
		<?php
			} //end of can edit if statement
		?>
		<p class="elgg_likes_owner">
			<a href="<?php echo $owner->getURL(); ?>"><?php echo $owner->name; ?></a> <?php echo elgg_echo('likes:this'); ?>
		</p>
	</div>
</div>