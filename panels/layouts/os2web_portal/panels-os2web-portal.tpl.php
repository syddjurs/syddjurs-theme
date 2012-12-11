<div class="panel-display panel-node " <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-panel grid-9 panel-region-middle-top">
    <div class="inside"><?php print $content['middle_top']; ?></div>
  </div>

  <div class="panel-panel grid-6 panel-region-middle-center">
    <div class="inside"><?php print $content['middle_center']; ?></div>
  </div>

  <div class="panel-panel grid-3 panel-region-middle-right">
    <div class="inside"><?php print $content['middle_right']; ?></div>
  </div>
</div>
