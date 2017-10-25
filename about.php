<?php include 'config/declare.php'; ?>

<!-- a universal file that has all the classes included -->
<?php include 'config/classesGetter.php'; ?>

<!-- creating objects -->
<?php
  $universal = new universal;
  $avatar = new Avatar;
  $post = new post;
  $noti = new notifications;
  $message = new message;
?>

<?php
  $title = "{$noti->titleNoti()} About • Steemagram";
  $keywords = "steemagram, blockchain, steem, steemit, videos, pictures, sharing, share, upvote, crypto, currency";
  $desc = "Steemagram is a blockchain based social network! Share pictures, videos and make new friends.";
?>

<!-- including files for header of document -->
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

<div class="overlay"></div>
<div class="notify"><span></span></div>
<div class="badshah">

  <div class="about_div inst">
    <img src="<?php echo DIR; ?>/images/needs/glyph-steemagram.png" alt="">
    <div class="">
      <span>Steemagram is a blockchain based photo and video sharing platform. Capture life's events and store them in a decentralized way.</span>
      <span>On Steemagram you control your privacy, and we do not sell or market your information or content.</span>
	  <span>ISteemagram has the upvotes build into the like button, so with one click of that heart it is liked and upvoted.</span>
      <span>You can login or sign-up to Steemagram using Steemit via Steem Connect.</span>
    </div>
  </div>

</div>

<?php
if ($universal->isLoggedIn()) {
  include 'includes/footer.php';
} else if ($universal->isLoggedIn() == false) {
  include 'index_include/index_footer.php';
}
?>
