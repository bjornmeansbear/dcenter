<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
?>
<!--page.tpl.php-->
<?php print $mothership_poorthemers_helper; ?>
<div id="wrap">  
  <header class="cf" role="banner">
  	<div id="header2">
  
    <figure class="logo">
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
<!--         <?php echo views_embed_view('logo', $display_id = 'block_1') ?> -->
        <?php 
          $view = views_get_view('logo'); 
          print $view->preview('block', array(1));
        ?>
      </a>
    </figure>
  
  	<?php if($site_name OR $site_slogan ): ?>
    <hgroup>
  		<?php if($site_name): ?>
      <a href="/"><h1><?php print $site_name; ?></h1></a>
      <?php endif; ?>
    </hgroup>
    <?php endif; ?>
  	
  	<br class="clear cf" />

    <?php if ($main_menu): ?>
    <nav id="main-menu" class="navigation column fullwidth">
      <?php print theme('links__system_main_menu', array(
        'links' => $main_menu,
        'attributes' => array(
          'id' => 'main-menu-links',
          'class' => array('links', 'clearfix'),
        ),
        'heading' => array(
          'text' => t('Main menu'),
          'level' => 'h2',
          'class' => array('element-invisible'),
        ),
      )); ?>
    </nav> <!-- /#main-menu -->
    <?php endif; ?>
  
 
    <?php if ($secondary_menu): ?>
    <nav id="secondary-menu" class="navigation column fullwidth">
      <?php print theme('links__system_secondary_menu', array(
        'links' => $secondary_menu,
        'attributes' => array(
          'id' => 'secondary-menu-links',
          'class' => array('links', 'clearfix'),
        ),
        'heading' => array(
          'text' => t('Secondary menu'),
          'level' => 'h2',
          'class' => array('element-invisible'),
        ),
      )); ?>
    </nav> <!-- /#secondary-menu -->
    <?php endif; ?>
  	
    <?php if ($page['header']): ?>
      <div class="header">
        <?php print render($page['header']); ?>
      </div>
    <?php endif; ?>

  	</div>
  </header>
</div>

  <div id="wrap_page">
  <div class="page cf">
    <div class="triptych">
      <div class="one-third columns">
      <?php print render($page['trip1']); ?>
      </div>
      <div class="one-third columns">
      <?php print render($page['trip2']); ?>
      </div>
      <div class="one-third columns last">
      <?php print render($page['trip3']); ?>
      </div>
    </div>
  </div><!--/page-->
  </div>
  
  <div id="foot_wrap">
  <footer role="contentinfo" class="cf">
    <?php print render($page['footer']); ?>
  </footer>
  </div>
  
  

