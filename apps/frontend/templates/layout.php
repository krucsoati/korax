<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    
    </head>
    <body>

        <div class="main_frame">
            <div class="banner">
		<div class="search">
		    <?php include_partial('product/searchForm', array()) ?>
		</div>
                <div class="language">
		    <?php include_component('language', 'language') ?>
                </div>
            </div>
            <div id="nav" class="nav">
		<img id="logo1111" src="/img/logo.png" style="float: left; margin-top: 5px; margin-left: 5px" >
                <ul>
                    <li><a id="mainMenu" href="<?php print url_for('main') ?>"><img class="navImage" src="/img/kezdolap_<?php print $sf_user->getAttribute('menuPic') == 'mainMenu' ? 'focus' : 'default' ?>_<?php print $sf_user->getCulture() ?>.jpg" /></a></li>
                    <li><a id="carMenu" href="<?php print url_for('cegunkrol') ?>"><img class="navImage" src="/img/cegunkrol_<?php print $sf_user->getAttribute('menuPic') == 'carMenu' ? 'focus' : 'default' ?>_<?php print $sf_user->getCulture() ?>.jpg" /></a></li>
                    <li><a id="contactMenu" href="<?php print url_for('elerhetosegek') ?>"><img class="navImage" src="/img/elerhetosegek_<?php print $sf_user->getAttribute('menuPic') == 'contactMenu' ? 'focus' : 'default' ?>_<?php print $sf_user->getCulture() ?>.jpg" /></a></li>
                    <li><a id="productMenu" href="#"><img class="navImage" src="/img/termekek_<?php print $sf_user->getAttribute('menuPic') == 'productMenu' ? 'focus' : 'default' ?>_<?php print $sf_user->getCulture() ?>.jpg" /></a>
                        <ul>
                            <li><a id="product_1" href="<?php print url_for('amerin_mugyantas_padlok') ?>"><?php print __("Amerin műgyantás padlók") ?></a></li>
                            <li><a id="product_2" href="<?php print url_for('villamos_ipari_mugyantak') ?>"><?php print __("Villamos ipari műgyanták") ?></a></li>
                            <li><a id="product_3" href="<?php print url_for('lakosagi_termekek') ?>"><?php print __("Lakóssági termékek") ?></a></li>
                        </ul>
                    </li>
                    <li><a id="newsMenu" href="<?php print url_for('hirlevel') ?>"><img class="navImage" src="/img/hirlevel_<?php print $sf_user->getAttribute('menuPic') == 'newsMenu' ? 'focus' : 'default' ?>_<?php print $sf_user->getCulture() ?>.jpg" /></a></li>
                    <li><a id="refMenu" href="<?php print url_for('rolunk_mondtak') ?>"><img class="navImage" src="/img/referenciak_<?php print $sf_user->getAttribute('menuPic') == 'refMenu' ? 'focus' : 'default' ?>_<?php print $sf_user->getCulture() ?>.jpg" /></a></li>
                </ul>
		     <script>
			$(function() {
			    $(".navImage")
				.mouseover(function() { 
				    $(this).attr("src", this.src.replace('default', 'focus'));
				})
				.mouseout(function() {
				    if($(this).parent().attr('id') != '<?php print $sf_user->getAttribute('menuPic') ?>'){
					$(this).attr("src", this.src.replace("focus", "default"));}
				});
			});
		     </script>
            </div>
            <div class="center_con">
		<?php if(!is_null($sf_user->getAttribute('leftMenuParams'))) : ?>
		    <?php $contentClass = 'content-2'; ?>
		    <div class="left_menu"><?php include_partial('company/leftMenu', array('leftMenuParams' => $sf_user->getAttribute('leftMenuParams'))) ?></div>
		<?php endif ?>
                <div class="<?php print isset($contentClass) ? $contentClass : 'content' ?>">
                    <?php if ($sf_user->hasFlash('message')): ?>
                        <div class="flash_notice"><?php print $sf_user->getFlash('message') ?></div>
                    <?php endif ?>
                    <?php print $sf_content ?>
                </div>
            </div>
	    <div id="footerBar" class="footerBar">
            </div>
            <div id="footer" class="footer">
            </div>
        </div>
	
	<div align="center">

	   