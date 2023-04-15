<?php
$session = session();
if(!empty($session->get('user_danger_alert')))
 {
 	?>
  <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
    <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>  -->
    <?php echo $session->get('user_danger_alert'); ?>
  </div>

 	<?php
//  unset($session->get('user_danger_alert'));
// session()->unset('user_danger_alert');
session()->remove('user_danger_alert');
}
if(!empty($session->get('user_success')))
 {
 ?>
 <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
    <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>  -->
    <?php echo $session->get('user_success'); ?>
  </div>
 	
 	<?php
 	// unset($session->get('user_success'));
  // session()->unset('user_success');
  session()->remove('user_success');
}
if(!empty($session->get('user_info')))
 {
 	?>
  <div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
    <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>  -->
    <?php echo $session->get('user_info'); ?>
  </div>
 	<?php
//  unset($session->get('user_info'));
session()->unset('user_info');
}
if(!empty($session->get('user_warning')))
 {
 	?>
  <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
    <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>  -->
    <?php echo $session->get('user_warning'); ?>
  </div>
 	<?php
 	// unset($session->get('user_warning'));
  session()->unset('user_warning');
 
}

?>