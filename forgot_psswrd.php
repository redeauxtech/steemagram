<?php
  $title = "Forgot password • Steemagram";
  $keywords = "steemagram, blockchain, steem, steemit, videos, pictures, sharing, share, upvote, crypto, currency";
  $desc = "Steemagram is a blockchain based social network! Share pictures, videos and make new friends.";
?>

<?php include 'index_include/index_header.php'; ?>
<div class="notify"><span></span></div>
<div class="forgot">
  <div class="forgot_info">
    <span>Password retrieval</span>
  </div>
  <div class="forgot_main">
    <form class="forgot_form" action="" method="post">
      <span>Please enter the email you registered with</span>
      <input type="text" name="forgot_text" value="" placeholder="Your email.." required spellcheck="false" autofocus class="forget_text" id="forget_text">
      <input type="submit" name="forgot_submit" value="Recover" class="f_p_submit">
    </form>
  </div>
</div>

<div class="overlay-2"></div>

<?php include 'index_include/index_footer.php'; ?>
<script type="text/javascript">
  $('.forgot').passwordRetrieval();
</script>
