<?php 
$page_num = 0;
require("header.php"); ?>
<article>
  <div class="article-top-title">
    <?php echo $hp_title["title"]; ?>
  </div>
  <div class="article-top-space"></div>
  <div class="article-top-article">
    <?php echo $hp_title["article"]; ?>
  </div>
  <section>
<?php for ($k = 0; $k < 3; $k++): ?> 
    <div class="section-space"></div>
    <div id="link<?php echo $k ;?>" class="section-top">
      <div class="section-main-title"><?php echo $hp_config[$k]["main-title"] ;?></div>
    </div>
    <div class="section-space"></div>
    <div class="section-subtitle"><?php echo $hp_config[$k]["sub-title"] ;?></div>
    <div class="section-content">
      <div class="section-content-develop">
        <div class="section-content-develop-title">開発</div>
          <div class="section-content-develop-content">
  <?php for ($t = 0; $t < count($hp_config[$k]["develop-list"]); $t++): ?>
            <?php echo $hp_config[$k]["develop-list"][$t]?><br>
  <?php endfor; ?>
        </div>
      </div><div class="section-content-space">
      </div><div class="section-content-case">
        <div class="section-content-case-title">事例</div>
        <div class="section-content-case-content">
  <?php for ($p = 0; $p < count($hp_config[$k]["case-list"]); $p++): ?>
            <?php echo $hp_config[$k]["case-list"][$p]?><br>
  <?php endfor; ?>
        </div>
      </div>
      <div class="section-content-article"><?php echo $hp_config[$k]["article"] ?></div>
    </div>
<?php if ($k == 1): ?>
    <a href="#"><div class="infomation-page-linkbutton">情報マネージメントページへ</div></a>
<?php endif; ?>
<?php endfor; ?>
  </section>
</article>
<footer>
  ©2016 LICTOOR Inc.
</footer>
</body>
</html>
