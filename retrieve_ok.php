<?php include 'config/declare.php'; ?>

<!-- a universal file that has all the classes included -->
<?php include 'config/classesGetter.php'; ?>

<!-- creating objects -->
<?php
  $universal = new universal;
?>

<?php
  if ($universal->isLoggedIn()) {
    header('Location: '.DIR);
  }
?>

<?php
  $title = "Thanks for registering • Steemagram";
  $keywords = "steemagram, blockchain, steem, steemit, videos, pictures, sharing, share, upvote, crypto, currency";
  $desc = "Steemagram is a blockchain based social network! Share pictures, videos and make new friends.";
?>

<?php include 'index_include/index_header.php'; ?>

<div class="badshah">

  <div class="about_div inst thanks_div">
    <img src="<?php echo DIR; ?>/images/needs/icon40x40.png" alt="">
    <div class="">
      <span>A message has been sent to you email. Check your inbox and click on the link provided in the message to retrieve your account.</span>
    </div>
  </div>

</div>

<?php include 'index_include/index_footer.php'; ?>
