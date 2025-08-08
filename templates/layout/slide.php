<?php if($template != 'product/product_detail'){?>
<div class="slideshow <?php if ($source != 'index') { echo 'slidenone'; } ?>">
    <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1" data-rewind="1" data-autoplay="0" data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="0" data-smartspeed="800" data-autoplayspeed="800" data-autoplaytimeout="5000" data-dots="1" data-animations="" data-nav="0" data-navcontainer=".control-slideshow">
        <?php foreach ($slider as $v) { ?>
            <div class="slideshow-item" owl-item-animation>
                <?php if ($source == 'index') { ?>
                    <a class="slideshow-image" href="<?= $v['link'] ?>"  title="<?= $v['name' . $lang] ?>">
                        <?= $func->getImage(['class' => 'w-100', 'sizes' => '', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>

                    </a>
                    <div class="info-slider">
                        <div class="wrap-content">
                            <div class="row row-direction">
                                <div class="col-12 col-md-6 col-lg-7">
                                    <div class="info-slideshow">
                                        <div class="info-slideshow-info">
                                            <div class="ttl"><?= $v['name' . $lang] ?></div>
                                            <div class="ttl2"><?= $func->decodeHtmlChars($v['desc' . $lang]) ?></div>
                                            <div class="desc"><?= $func->decodeHtmlChars($v['content' . $lang]) ?></div>
                                            <div class="box-btn">
                                                <div class="c-btn"><a href="<?= $v['link'] ?>" target="_blank"><span>Xem thêm</span></a></div>
                                                <div class="c-btn c-btn-white"><a href="<?= $v['link'] ?>" target="_blank"><span>Yêu cầu báo giá</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-video">
                        <a data-fancybox href="<?= $v['link_video'] ?>">
                            <div class="button-play"></div>
                            <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo2'], 'alt' => $v['name' . $lang]]) ?>
                        </a>
                    </div>
                <?php } else {?>
                    <a class="slideshow-image-sub" data-fancybox href="<?= $v['link_video'] ?>" title="<?= $v['name' . $lang] ?>">
                        <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                    </a>
                <?php } ?>

            </div>

        <?php } ?>
    </div>
</div>
<?php } ?>

