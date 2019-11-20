<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ set {
	":hideImages": @{ checkboxHideImagesInPagelist }
} @>
<div class="container">
<@ foreach in "/pages/01.specials/*/*.png, /pages/01.specials/*/*.jpg" { width: 400, height: 300, crop: true } @>
    <a href="@{ path }"><img 
    src="@{ :fileResized }" 
    alt="@{ :basename }" 
    title="@{ :file }"
    width="@{ :widthResized }"
    height="@{ :heightResized }"
    /></a>
    <p>@{ :caption }</p>
<@ else @>
    <p>No images found!</p>
<@ end @>
<@ filelist { 
    glob: @{ files | def ('/pages/01.specials/*/*.png, /pages/01.specials/*/*.jpg') },
    sort: 'asc'
} @>
<h2>@{ :filelistCount } Images</h2>
<@ foreach in filelist { width: 400 } @>

    <p><img src="@{ :fileResized }" />Path: @{:file}/@{:basename}</p>
<@ end @>

<@ foreach in pagelist @>
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" data-target="#exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title">@{ title }</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
      	</div>
			<@ if not @{ :hideImages } @>
						<a href="@{url}">
							<img src="@{ :file }" class="px-4 py-3 rounded img-fluid modal-img" alt="@{ :basename }" data-image="@{ :file }" >
						</a>
						<!-- <div class="container"> -->
						<a class="btn btn-primary mb-3 print-btn mx-4" href="">Print.pdf</a>
						<!-- </div> -->
			<@ end @>

    </div>
  </div>
</div>
<@ end @>
<div class="gallery js-flickity mb-5" data-flickity-options='{ "wrapAround": true }'>
<@ foreach in pagelist @>
<!-- <@ foreach in @{ :filelistCount } @>
		<img src="@{ :file }">
	<@ end @>
	<h2>@{:filelistCount }</h2> -->

	<@ if not @{ :hideImages } @>
		<@ with @{ imageTeaser | def (@{ images }) | def ('*.jpg, *.png')} { width: 800, height:  900, crop: true } @>
			<div class="gallery-cell">
				<img 
				src="@{ :file }" 
				class="img-fluid"/>
				<button type="button" class="centered-btn btn btn-primary" data-toggle="modal" data-title="@{ title }" data-target=".bd-example-modal-xl" data-image="@{ :file }">View Larger</button>

				<!-- <a href="@{ url }">
					<div class="centered-btn btn btn-primary">View Flyer</div>
				</a> -->
			</div>
		<@ end @>	
	<@ end @>
<@ end @>
</div>
</div>