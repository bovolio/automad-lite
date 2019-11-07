<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

	<@ snippets/header_hero.php @>
	<@ snippets/carousel_full_width.php @>
	<@ snippets/header.php @>
	<@ newPagelist {
		type: 'children',
		context: @{ showPagesBelow },
		filter: 'Special',
		search: @{ ?search },
		sort: @{ sortPages | def ('date desc') },
		template: @{ templateFilter },
		limit: 6
	} @>
	
	<@ if @{ checkboxShowAllPagesInPagelist } or @{ ?search } @>
		<@ pagelist { type: false } @>
	<@ end @>
	
	<@ if not @{ checkboxHideTeaser } @>
		<div class="container pt-5 pb-5">
			<div class="row" style="justify-content: center">
				<# Use one single grid column to limit the width on large screens. #>
				<div class="col-lg-12">
					<div class="lead mb-n2">
						<@ snippets/text_teaser.php @>
					</div>	
				</div>
			</div>
		</div>
	<@ end @>

	<@ if @{ :pagelistCount } @>
		<div class="container pb-2">
			<@ snippets/filters.php @>
		</div>
		<@ snippets/pagelist_projects.php @>
	<@ end @>
	
<@ snippets/footer.php @> 