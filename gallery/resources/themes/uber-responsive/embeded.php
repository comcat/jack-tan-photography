<?php if (!empty($galleryArray) && $galleryArray['stats']['total_images'] > 0): ?>
<ul class="artist-grid">
	<?php foreach ($galleryArray['images'] as $image): ?>
<li class="artist">
		<a href="<?php echo html_entity_decode($image['file_path']); ?>" title="<?php echo $image['file_title']; ?>" rel="colorbox">
		<img src="<?php echo $image['thumb_path']; ?>" alt="<?php echo $image['file_title']; ?>" />
		</a>
	</li>
	<?php endforeach; ?>

</ul>
	<?php endif; ?>
        <!-- End UberGallery - Distributed under the MIT license: http://www.opensource.org/licenses/mit-license.php -->

	<hr/>

	<?php if ($galleryArray['stats']['total_pages'] > 1): ?>

		<div class="pagination pagination-centered">
			<ul>
				<?php foreach ($galleryArray['paginator'] as $item): ?>

					<?php

						switch ($item['class']) {

							case 'title':
								$class = 'disabled';
								break;

							case 'inactive':
								$class = 'disabled';
								break;

							case 'current':
								$class = 'active';
								break;

							case 'active':
								$class = NULL;
								break;

						}

					?>

					<li class="<?php echo $class; ?>">
						<a href="<?php echo empty($item['href']) ? '#' : $item['href']; ?>"><?php echo $item['text']; ?></a>
					</li>

				<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>
