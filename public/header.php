<?php 
$title = $title_list[$page_num];
if ($page_num == 0) {
    $index = "";
} else {
    $index = "index.php";
  }
?> 


<!DOCTYPE html>
<html lang="ja">
<head>
  <title><?php echo $title ?></title>
  <meta charset="utf-8">
  
  <meta name="description" content="LICTOOR株式会社">
  <meta name="keywords" content="LICTOOR,リクトール,lictoor,リクトール株式会社,LICTOOR株式会社,lictoor株式会社,lictory,不動産ソリューション,不動産賃貸,不動産売買">
  <meta http-equiv="Content-Script-Type" content="text/javascript">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta property="og:type" content="website">
  <meta property="og:title" content="【LICTOOR株式会社】Web・業務システムの制作">
  <meta property="og:site_name" content="LICTOOR">
  <meta property="og:url" content="http://lictoor.com">
  <meta property="og:description" content="LICTOOR株式会社の紹介">
  <meta property="og:image" content="">
  
  <link href="images/favicon.ico" rel="icon" type="image/vnd.microsoft.icon">
  
  <meta name="google" content="notranslate" />
   
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  
  <script type="text/javascript" src="./js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="./js/common.js"></script>

</head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66670718-6', 'auto');
  ga('send', 'pageview');

</script>
<?php require("page_config.php"); ?> 
<body>
<header>
  <div class="header-logo"><a href="index.php">LICTOOR</a></div>
  <div class="header-links">
<?php for ($i = 0; $i < 3; $i++): ?>
    <div class="header-link">
      <a href="<?php echo $index.$hp_config[$i]["link"] ?>"><?php echo $hp_config[$i]["main-title"] ?></a>
    </div>
<?php if ($i < 3): ?>
        <div class="header-space"></div>
<?php endif; ?>
<?php endfor; ?>
    <div class="header-link">
      <a href="<?php echo $hp_config[3]["link"] ?>"><?php echo $hp_config[3]["main-title"] ?></a>
    </div>
  </div>
  <div class="header-menu-button sp_visibility">Menu</div>
</header>