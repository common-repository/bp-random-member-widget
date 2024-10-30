<?php
function widget_RandomMemberWidget($args) {
    extract($args);
	
	global $bp;
    echo $before_widget;
	echo $before_title; ?>
	<?php _e( 'Random Member', 'buddypress' ) ?>
	<?php echo $after_title; 
		 if ( bp_has_members( 'user_id=0&type=random&max=1&populate_extras=0' ) ) : ?>

			<ul id="members-list" class="item-list">
				<?php while ( bp_members() ) : bp_the_member(); ?>
					<li class="vcard">
						<div class="item-avatar">
							<a href="<?php bp_member_permalink() ?>"><?php bp_member_avatar() ?></a>
						</div>
						<div class="item">
							<div class="item-title fn"><a href="<?php bp_member_permalink() ?>" title="<?php bp_member_name() ?>"><?php bp_member_name() ?></a></div>
						</div>
					</li>

				<?php endwhile; ?>
			</ul>

			<?php else: ?>

			<div class="widget-error">
				<?php _e('No one has signed up yet!', 'buddypress') ?>
			</div>

		<?php endif; ?>
        <?php echo $after_widget; ?>
<?php
}

register_sidebar_widget('BP Random Member Widget',
    'widget_RandomMemberWidget');
?>