<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  </header>
  <?php endif; ?>
  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>
<?php if (arg(0) == 'node' && is_numeric(arg(1))) $nodeid = arg(1); ?>
<div class="printvenlig-side"><a href="/print/<?php print $nodeid; ?>"></a></div>

  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>  
  
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
<?php
    print "<div class='last-updated-node'> Opdateret: " . format_date($node->changed, "short")."</div>";
?>

    <?php print render($content['comments']); ?>
  </div>

  <div class="del-bund">
    <div class="del">
       <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
          <a class="addthis_button_compact">Del <img src="/<?php echo drupal_get_path(theme, cmstheme); ?>/images/blank.png"/> </a>
       </div>
    </div>
    <div class="fandt-du"><a href="/contact?edit[subject]=<?php print $node_url; ?>">Fandt du ikke det du søgte</a></div>

    <div class="synes-om">
      <div class="addthis_toolbox addthis_default_style">
        <a class="addthis_button_facebook_like" fb:like:width="104"></a>
      </div>
    </div>
  </div>

 <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>


<script type="text/javascript">
//Script til at kollapse p-tags på indholdsside

(function ($) {
var is_visible = false;
 
$("h2").wrapInner('<a href="#" class="toggleLink">');
$("p").wrap('<div class="toggle">');
$('.toggle').hide(); 
$('a.toggleLink').click(function() {
$(this).parent().next('.toggle').toggle();
 
return false;
 
});
}(jQuery));

</script>

