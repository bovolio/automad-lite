<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

	<@ snippets/carousel_full_width.php @>

	<@ newPagelist {
		type: 'children',
		context: @{ showPagesBelow },
		filter: @{ ?filter },
		search: @{ ?search },
		sort: 'date desc',
		template: @{ templateFilter }
	} @>
	
	<@ if not @{ checkboxHideTeaser } @>
		<div class="container pt-5 pb-5">
			<div class="row">
				<# Use one single grid column to limit the width on large screens. #>
				<div class="col">
					<h1 class="text-center">Current Flyers</h1>
<hr class="mr-ml-6"></hr>
					<p class="text-center">Check out all Mid-Canada Fasteners and Tools flyers here! Click any flyer to view it in fullscreen mode.</p>
					<div class="lead mb-n2">
						<@ snippets/text_teaser.php @>
					</div>	
				</div>
			</div>
		</div>
	<@ end @>

	<@ if @{ checkboxShowAllPagesInPagelist } or @{ ?search } @>
		<@ pagelist { type: false } @>
	<@ end @>
	
	<@ if @{ :pagelistCount } @>
		<div class="container pb-5">
			<@ snippets/filters.php @>
		</div>
		<@ snippets/pagelist_posts.php @>
	<@ end @>
<@ snippets/footer.php @> 