<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ filelist { glob: @{ images }, sort: 'asc' } @>
<@ if @{ :filelistCount } @>
	<div id="carousel" class="carousel slide carousel-fade border-bottom" data-ride="carousel">	
		
		<div class="carousel-inner">
				<div class="carousel-item active" style="position: relative; text-align: center;">
					<div class="header-hero">
					<h1><img src="/packages/julianmaciel/automad-lite/assets/img/@{ Landing_Page_Logo }" style="width:@{ Landing_Page_Logo_Width | def ('300') }px;height:@{ Landing_Page_Logo_Height | def ('90') }px;" alt="Mid-Canada Fasteners &amp; Tools Ltd."></h1>
					<h2 class="subheader">@{ text_Subheader }</h2>
					<a class="button" href="@{ Shop_Url }">Shop Online</a>
					<a class="button hollow" href="specials">View Specials</a>
					</div>

				</div>
			<@ end @>
		</div>
	</div>
<@ end @>
<!-- EDGE CASE: HERO IMAGE DOES NOT OPEN ON IPHONE X + more? -->