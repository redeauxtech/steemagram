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
  $title = "{$noti->titleNoti()} Developer • Steemagram";
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

  <div class="dev_div inst">
    <img src="<?php echo DIR; ?>/images/needs/tumblr_ne4s7eGNYj1snc5kxo1_500.gif" alt="">
	<span><h3>What's New?</h3><br /></span>
	<span><b>10/15/2017</b> - Started ripping through the code to get Steemagram developed.</span>
	<span><b>Like Button</b> - We tied the like button together with the upvote button from Steemit via Steem Connect!</span>
	<span><b>Login/Signup</b> - Starting implimentation of Steemit login/sign-up via Steem Connect v2 API!</span>
	<span><b>Future Updates</b> - We plan to include more features from Steemit: flags(downvotes), comments, reposting, wallet and IPFS for videos.</span>
	<span><br /></span>
	<span>Steemagram is being developed by <a href="https://www.steemit.com/@redeauxtech">Redeaux Technologies</a>.</span>
	<span><br /></span>
    <span>Orginal code developed by, <a href="https://www.quora.com/profile/Shaikh-Takkar/">Faiyaz Shaikh</a>. </span>
    <div class="dev_div_links"><a href="https://www.quora.com/profile/Shaikh-Takkar/" class="sec_btn">Faiyaz Shaikh</a>
      <a href="https://www.steemit.com/@redeauxtech" class="sec_btn">Redeaux Technologies</a>
	  <a href="https://www.quora.com/profile/Shaikh-Takkar/" class="sec_btn">Faiyaz Shaikh</a>
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
