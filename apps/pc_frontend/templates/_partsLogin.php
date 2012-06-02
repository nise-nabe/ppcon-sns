<div class="hero-unit">
<div class="row-fluid">
<div class="span8">
  <h2>ペアプロ合コン</h2>
  <h1>PPCon</h1>
</div>
<div class="span4">
  <h4>参加者の方はこちら</h4>
  <?php include_customizes($id, 'before') ?>

  <div id="<?php echo $id ?>" class="loginForm">

  <?php include_customizes($id, 'top') ?>

  <form action="<?php echo $link_to ?>" method="post" class="well">
  <?php echo $form ?>
  <input type="submit" class="input_submit btn btn-success" value="<?php echo __('Login') ?>" />
  </form>

  <?php if ($form->getAuthAdapter()->getAuthConfig('invite_mode') == 2
    && opToolkit::isEnabledRegistration('pc')
    && $form->getAuthAdapter()->getAuthConfig('self_invite_action')) : ?>
  <?php echo link_to(__('Register'), $form->getAuthAdapter()->getAuthConfig('self_invite_action')) ?>
  <?php endif; ?>

  <?php include_customizes($id, 'bottom') ?>

  </div>

  <?php include_customizes($id, 'after') ?>
</div>
</div>
</div>
