<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ foreach in filelist @>
<@ if @{ :i } = @{ :filelistCount} @>
<style>
.header-hero:after{
    background: url(@{ :file });
}
</style>
<@ end @>
<@ end @>