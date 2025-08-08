<div class="header <?php if ($source != 'index') { echo 'header-product';} ?>">
  <div class="header-top">
    <div class="wrap-content">
      <div class="d-flex">
        <div class="info-header">
          <div class="info-header-v2 address">Địa chỉ: <?=$optsetting['address']?></div>
          <div  class="info-header-v2 email"><?=$optsetting['email']?></div>
        </div>
        <?php if (!empty($social)) { ?>
          <div class="social">
            <ul>
              <?php foreach ($social as $v) { ?>
                <li>
                  <a href="<?= $v['link'] ?>" target="_blank" title="Mạng xã hội">
                    <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => 'Mạng xã hội']) ?>
                  </a>
                </li>
              <?php } ?>
            </ul>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="header-midd">
    <div class="wrap-content">
      <div class="d-flex">
        <div class="cont-left">
          <a class="logo-header" href="">
            <?= $func->getImage(['sizes' => '', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name' . $lang]]) ?>
            <h2 class="ttl">Dây Ni long Thần Sơn</h2>
          </a>
        </div>
        <div class="cont-midd">
          <div class="box-search">
            <div class="search w-clear">
              <input type="text" id="keyword" placeholder="Nhập từ khoá tìm kiếm" onkeypress="doEnter(event,'keyword');" />
              <p onclick="onSearch('keyword');"></p>
            </div>

          </div>
        </div>
        <ul class="cont-right">
          <li class="hotline">
            <p>Hotline hỗ trợ</p>
            <b><?= $optsetting['hotline'] ?></b>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="header-bottom">
    <div class="wrap-content">
      <?php include TEMPLATE . LAYOUT . "menu.php"; ?>
    </div>
  </div>
  <?php include TEMPLATE . LAYOUT . "mmenu.php"; ?>
</div>