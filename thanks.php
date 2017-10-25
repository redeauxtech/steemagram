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
  if (!$universal->isLoggedIn() || $universal->e_verified($_SESSION['id'])) {
    header('Location: '.DIR.'/login');
  }
?>

<?php
  $title = "Thanks for registering • Steemagram";
  $keywords = "steemagram, blockchain, steem, steemit, videos, pictures, sharing, share, upvote, crypto, currency";
  $desc = "Steemagram is a blockchain based social network! Share pictures, videos and make new friends.";
?>

<?php 
  include 'includes/header.php';
  include 'needs/heading.php';
  include 'needs/nav.php';
?>

<div class="badshah">

  <div class="about_div inst thanks_div">
    <img src="<?php echo DIR; ?>/images/needs/glyph-steemagram.png" alt="">
    <div class="">
      <span>A message has been sent to you email. Check your inbox and click on the link provided in the message to verify your email.</span>
    </div>
  </div>

</div>

<?php include 'includes/footer.php'; ?>
