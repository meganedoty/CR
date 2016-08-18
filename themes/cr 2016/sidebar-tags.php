<div id="sidebar" class="post-excerpt">
	<ul>

		<?php
		$args = array('hide_empty'=>false);
		$tags = get_tags($args);
		foreach ($tags as $tag) {
			$tag_link = get_tag_link($tag->term_id);
			echo("<li><a href='{$tag_link}' title='{$tag->name}'>{$tag->name}</a> {$tag->count}</li>");
		}
		?>
		
	</ul>
</div><!--sidebar-->