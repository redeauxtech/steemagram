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
  if (!$universal->isLoggedIn()) {
    header('Location: '.DIR.'/login');
  }
?>

<?php
  $title = "Email activation!! • Steemagram";
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
      <span>
        <?php 
            $e_v = $universal->e_verified($_SESSION['id']);
            if($e_v){
                echo "Your account has already been verified!";
            } else {
                echo "Thanks, Your account has been verified!";
            }
        ?>
      </span>
    </div>
  </div>

</div>

<?php include 'includes/footer.php'; ?>
