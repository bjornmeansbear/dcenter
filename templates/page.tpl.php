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
    <?php if ($page['sidebar_first']): ?>
      <div class="sidebar-one">
      <?php print render($page['sidebar_first']); ?>
      </div>
    <?php endif; ?>
  
    <div id="main" role="main" class="main content">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
  
<!--       <?php print $breadcrumb; ?> -->
  
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
  
      <?php if ($tabs): ?>
        <nav class="tabs"><?php print render($tabs); ?></nav>
      <?php endif; ?>
  
      <?php if($page['highlighted'] OR $messages){ ?>
        <div class="drupal-messages">
        <?php print render($page['highlighted']); ?>
        <?php print $messages; ?>
        </div>
      <?php } ?>
  
      <?php print render($page['content_pre']); ?>
  
      <?php print render($page['content']); ?>
  
      <?php print render($page['content_post']); ?>
      
     
    </div><!--/main-->

    <?php if ($page['sidebar_second']): ?>
      <div class="sidebar-two">
        <?php print render($page['sidebar_second']); ?>
      </div>
    <?php endif; ?>

  </div><!--/page-->
  </div>
  
  <div id="foot_wrap">
  <footer role="contentinfo" class="cf">
    <?php print render($page['footer']); ?>
  </footer>
  </div>
  
  

