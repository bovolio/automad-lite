<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

	<div class="container">
	<@ filelist { 
    glob: @{ files | def ('*.png, *.jpg') },
    sort: 'asc'
} @>
<h2>@{ :filelistCount } Images</h2>
<@ foreach in filelist { width: 200 } @>
    <p><img src="@{ :fileResized }" /></p>
<@ end @>
		<div class="row d-flex align-items-stretch pb-5">
			<div class="col-lg-4 col-xl-3 pt-5 mt-1">
				<@ snippets/date.php @>
				<@ snippets/tags.php @>
			</div>
			<div class="col-lg-8 col-xl-6 pt-5">
				<h1 class="mb-5">@{ title }</h1>
				<div class="lead my-5">
				<@ if not @{ :hideImages } @>
						<@ with @{ imageTeaser | def (@{ images }) | def ('*.jpg, *.png')} { width: 640, height: 480, crop: true } @>
							<a href="@{ :file }">
								<img src="@{ :file }" class="mb-4 rounded img-fluid" alt="@{ :basename }">
							</a>
						<@ end @>	
					<@ end @>
					<@ snippets/text_teaser.php @>
				</div>
				<@ snippets/text.php @>
			</div>
		</div>
	</div>
	
	<@ newPagelist { type: 'related' } @>	
	<@ if @{ :pagelistCount } @>
		<@ snippets/pagelist_posts.php @>
	<@ end @>

<@ snippets/footer.php @> 