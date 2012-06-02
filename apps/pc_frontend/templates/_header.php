<h1><?php echo link_to($op_config['sns_name'], '@homepage') ?></h1>

<div id="globalNav">
<?php
$globalNavOptions = array(
  'type'      => opToolkit::isSecurePage() ? 'secure_global' : 'insecure_global',
  'culture'   => sfContext::getInstance()->getUser()->getCulture(),
);
include_component('default', 'globalNav', $globalNavOptions);
?>
</div><!-- globalNav -->
