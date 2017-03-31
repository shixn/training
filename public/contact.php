<?php
$page_num = 1;
require("./config/config.php");
require_once('./config/mail.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] != "POST") {
  setToken();

} else {
  checkToken();

  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $admin = $_POST["admin"];
  $content = $_POST["content"];
  $error = array();

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error["email"] = "メールアドレスの形式が正しくありません";}
  if ($email == "") {
    $error["email"] = "メールアドレスを入力して下さい";}
  if ($content == "") {
    $error["content"] = "内容を入力して下さい";}
  if ($name == "") {
    $error["name"] = "お名前を入力してください";}
  if (mb_strlen($content) > 300) {
    $error["content"] = "内容は300文字以内で入力して下さい";
  }

  if (empty($error)) {
    $to = CONTACT_MAIL;
    $subject = "【お問い合わせ】";
    $fromaddress = $email;
    $fromname = $name;
    $body = 'Name：'.$name."\n".'Email：'.$email."\n".'Phone：'.$phone."\n".'Admin：'.$admin."\n".'Content：'.$content;

    mailsender($to,$subject,$body,$fromname,$fromaddress);

    header('Location: '.SITE_URL);
    exit;
  }
}

require("header.php");
?>
<article>
  <div class="contact-title">Contact us</div>
  <div class="section-space"></div>
  <div class="contact-article">
    <form method="POST" action="">
      <p>お名前*：<?php if ($error["name"]) { echo "<span class=\"error-message\">" . h($error["name"]) . "</span>";} ?></p>
      <p><input type="text" name="name" value="<?php echo h($name);?>"></p>
      <p>メールアドレス*：<?php if ($error["email"]) {echo "<span class=\"error-message\">" . h($error["email"]) . "</span>";} ?></p>
      <p><input type="text" name="email" value="<?php echo h($email);?>"></p>
      <p>電話番号：</p>
      <p><input type="text" name="phone" value="<?php echo h($phone);?>"></p>
      <p>所属(法人名)：
      <p><input type="text" name="admin" value="<?php echo h($admin);?>"></p>
      <p>お問い合わせ内容*：<?php if ($error["content"]) {echo "<span class=\"error-message\">" . h($error["content"]) . "</span>";} ?></p>
      <p><textarea name="content" cols="40" rows="5"><?php echo h($content);?></textarea></p>
      <p class="text-center"><input type="submit" value="送信"></p>
      <input type="hidden" name="token" value="<?php echo h($_SESSION["token"]) ; ?>">
    </form>
  </div>
</article>
<footer>
  ©2016 LICTOOR Inc.
</footer>
</body>
</html>
