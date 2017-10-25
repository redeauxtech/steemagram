<?php include 'config/declare.php'; ?>

<!-- a universal file that has all the classes included -->
<?php include 'config/classesGetter.php'; ?>

<!-- creating objects -->
<?php
  $universal = new universal;
  $avatar = new Avatar;
  $noti = new notifications;
  $message = new message;
?>

<?php
  $title = "{$noti->titleNoti()} Whoops! Error • Steemagram";
  $keywords = "error, 404, document not found, webpage not found, steemagram, blockchain, steem, steemit, share, sharing, videos, pictures";
  $desc = "Whoops there has been an error, sorry about that! • Steemagram";
?>

<?php
  if ($universal->isLoggedIn()) {
    include 'includes/header.php';
    include 'needs/heading.php';
    include 'needs/nav.php';
    include_once 'needs/search.php';
  } else if ($universal->isLoggedIn() == false) {
    include 'index_include/index_header.php';
  }
?>

<div class="badshah">
  <div class="err">
    <h1>Oops, that page doesn't exist!</h1>
    <img src="<?php echo DIR; ?>/images/needs/error-3.svg" alt="404">
    <?php
      if ($universal->isLoggedIn()) {
    ?>
    <a href="<?php echo DIR; ?>/profile/<?php echo $universal->getUsernameFromSession(); ?>" class="sec_btn">View profile</a>
    <a href="<?php echo DIR; ?>" class="pri_btn">Try going to homepage</a>
    <?php } else { ?>
      <a href="<?php echo DIR; ?>/login" class="sec_btn">Login</a>
      <a href="<?php echo DIR; ?>" class="pri_btn">Try going to homepage</a>
    <?php } ?>
  </div>
</div>

<?php
if ($universal->isLoggedIn()) {
  include 'includes/footer.php';
} else if ($universal->isLoggedIn() == false) {
  include 'index_include/index_footer.php';
}
?>
