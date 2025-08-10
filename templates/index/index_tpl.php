
  
<?php if(count($gioithieu)){ ?>
    <section class="features">
        <h3>TÍNH NĂNG</h3>
        <h2>Tính năng nổi bật của Khóa cửa vân tay</h2>
        
        <div class="features-list">
            <div class="feature-item">
                <img src="assets/images/24-phone1.png" >
                <h4>Chia sẻ chìa khoá từ xa</h4>
                <p>Chia sẻ quyền mở khoá từ xa theo thời gian tuỳ chọn, không cần đứng gần khoá</p>
            </div>

            <div class="feature-item">
                <img src="assets/images/24-phone.png" alt="phone24">
                <h4>Quản lý qua ứng dụng di động</h4>
                <p>Bạn có thể cài đặt thêm hoặc xoá người dùng tạm thời và mở khoá từ xa tuỳ ý</p>
            </div>

            <div class="feature-item">
                <img src="assets/images/24-phone3.png" >
                <h4>Lưu trữ và ghi chép lịch sử</h4>
                <p>Kiểm tra lịch sử ra vào của khoá</p>
            </div>

            <div class="feature-item">
                <img src="assets/images/24-phone4.png" >
                <h4>Hình thức mở khoá đa dạng</h4>
                <p>Tích hợp mở khoá đa dạng: mật khẩu, vân tay, thẻ từ và liên kết với app điện thoại...</p>
            </div>
        </div>
    </section>
    <div class="wrap-about">
        <div class="wrap-content">
            <div class="title-global">
                <div class="ttl"><span>Về chúng tôi</span></div>
                <div class="ttl2"><?= $func->decodeHtmlChars($gioithieu['name' . $lang]) ?></div>
            </div>
            <div class="row">

                <div class="col-12 col-sm-12 col-md-6 col-lg-6">

                    <?php if(count($bvgioithieu)){ ?>
                        <ul class="bvgioithieu">
                        <?php foreach ($bvgioithieu as $k=>$v) { ?>
                            <li class="it-bvgioithieu">
                                <div class="numb"><?=$k+1?></div>
                                <div class="ttl"><?=$v['name'.$lang]?></div>
                                <div class="desc"><?=$v['desc'.$lang]?></div>
                            </li>
                        <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="img-about">
                        <img src="assets/images/bg-img-about.png">
                        <div class="img01">
                            <?= $func->getImage(['sizes' => '510x510x1', 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_NEWS_L, 'image' => $hagioithieu[0]['photo'], 'alt' => $func->decodeHtmlChars($gioithieu['name' . $lang])]) ?>
                        </div>
                        <div class="img02">
                            <?= $func->getImage(['sizes' => '510x510x1', 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_NEWS_L, 'image' => $hagioithieu[1]['photo'], 'alt' => $func->decodeHtmlChars($gioithieu['name' . $lang])]) ?>
                        </div>
                        <div class="img03">
                            <?= $func->getImage(['sizes' => '510x510x1', 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_NEWS_L, 'image' => $hagioithieu[2]['photo'], 'alt' => $func->decodeHtmlChars($gioithieu['name' . $lang])]) ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php if(count($splist)){ ?>
    <div class="wrap-splist">
        <div class="wrap-content">
            <div class="title-global title-global--center">
                <div class="ttl"><span>Thần Sơn Group</span></div>
                <div class="ttl2">Sản phẩm cỦA CHÚNG TÔi</div>
            </div>
            <?php foreach($splist as $v1) {
                $spnb = $cache->get("select name$lang, slugvi, slugen, id,photo from #_product where type = ? and id_list = ? and find_in_set('hienthi',status) and find_in_set('noibat',status) order by numb,id desc", array('san-pham',$v1['id']), 'result', 7200);
            ?>
                <div class="box-splist">
                    <div class="box-ttl-splist">
                        <h2 class="ttl-splist"><span><?= $v1['name' . $lang] ?></span></h2>
                        <a class="link-splist" href="<?= $v1[$sluglang] ?>">Xem tất cả</a>
                    </div>
                    <?php if(count($spnb)){ ?>
                        <div class="row">
                            <?php foreach ($spnb as $k => $v) { ?>
                                <div class="col-6 col-sm-6 col-md-3">
                                    <div class="box-product">
                                        <div class="product">
                                            <div class="text-decoration-none">
                                                <p class="pic-product scale-img">
                                                    <a class="scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                                        <?= $func->getImage(['sizes' => '261x229x1', 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                                    </a>
                                                </p>
                                                <h3 class="name-product text-split">
                                                    <a href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?> "><?= $v['name' . $lang] ?> </a>
                                                </h3>
                                                <a class="baogia-product" href="tel:<?= $func->parsePhone($optsetting['hotline']) ?>"><span>Báo giá:</span><b><?=$optsetting['hotline']?></b></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>

<?php if(count($luachon)){ ?>
    <div class="wrap-luachon">
        <div class="wrap-content">
            <div class="title-global title-global--left">
                <div class="ttl"><span>Lựa chọn thần sơn</span></div>
                <div class="ttl2">LÀM ĐỐI TÁC bạn được gì ?</div>
            </div>
            <div class="row">
                <?php foreach($luachon as $v) {?>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="item-luachon">
                            <div class="img-thumb">
                                <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                            </div>
                            <di class="ttl"><?= $v['name' . $lang] ?></di>
                            <di class="desc"><?= $v['desc' . $lang] ?></di>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
<?php } ?>

<?php if(count($trangtb)){ ?>
    <div class="wrap-trangtb">
        <div class="wrap-content">
            <div class="title-global title-global--left">
                <div class="ttl"><span>Lựa chọn thần sơn</span></div>
                <div class="ttl2"><?=$trangtb['name'.$lang]?></div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6">
                <div class="img-thumb">
                    <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '', 'upload' => UPLOAD_NEWS_L, 'image' => $trangtb['photo'], 'alt' => $trangtb['name' . $lang]]) ?>
                </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <?php foreach($bvtrangtb as $v) {?>
                        <div class="item-trangtb">
                            <div class="ttl"><?= $v['name' . $lang] ?></div>
                            <div class="desc"><?= $v['desc' . $lang] ?></div>
                        </div>
                    <?php } ?>
                </div>


            </div>
        </div>
    </div>
<?php } ?>

<div class="wrap-dktuvan">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-left">
            <div class="name-dktuvan">Đăng ký tư vấn</div>
            <div class="desc-dktuvan">Để lại thông tin để chúng tôi liên hệ với bạn sớm nhất</div>
            <form class="form-tuvan validation-tuvan" novalidate method="post" action="" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-12 col-md-6 tuvan-input">
                        <input type="text" class="form-control" id="name-tuvan" name="dataTuvan[name]" placeholder="Họ và tên">
                    </div>
                    <div class="col-12 col-md-6 tuvan-input">
                        <input type="text" class="form-control" id="phone-tuvan" name="dataTuvan[phone]" placeholder="Số điện thoại">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 col-md-6 tuvan-input">
                        <input type="email" class="form-control" id="email-tuvan" name="dataTuvan[email]" placeholder="Email" required />
                        <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                    </div>
                    <div class="col-12 col-md-6 tuvan-input">
                        <select id="dichvu" class="form-control" name="dataTuvan[dichvu]">
                            <option value="">Chọn dịch vụ</option>
                            <?php foreach($dichvu as $v) {?>
                                <option value="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                    </div>
                </div>
                <div class="tuvan-input">
                    <textarea class="form-control" id="content-tuvan" name="dataTuvan[content]" placeholder="Nội dung"></textarea>
                    <div class="invalid-feedback"><?= vuilongnhapnoidung ?></div>
                </div>
                <input type="hidden" name="check_spam_tuvan">

                <div class="tuvan-button c-btn-submit">
                    <button type="submit"  name="submit-tuvan" value="Gửi yêu cầu"><span>Gửi yêu cầu</span></button>
                </div>
            </form>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-right">
            <div class="name-dktuvan">Các bước liên hệ báo giá</div>
            <div class="desc-dktuvan">Để lại thông tin để chúng tôi liên hệ với bạn sớm nhất</div>
            <div class="box-baogia">
                <?php foreach($baogia as $k=>$v) {?>
                    <div class="baogia-it">
                        <div class="numb"><?=$k+1?></div>
                        <div class="ttl"><?= $v['name' . $lang] ?></div>
                        <div class="desc"><?= $v['desc' . $lang] ?></div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</div>
<?php if (count($partner)) { ?>
    <div class="wrap-partner">
        <div class="wrap-content">
            <div class="title-global">
                <div class="ttl"><span>Thần Sơn Group</span></div>
                <h2 class="ttl2">Đối tác khách hàng</h2>
                <p class="desc">Kích hoạt các con đường thương mại mới để nâng cao trải nghiệm của khách hàng ngày nay và tạo lợi thế cạnh tranh trong tương lai.</p>
            </div>
            <div class="row">
                <?php foreach ($partner as $v) { ?>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <a class="partner" href="<?= $v['link'] ?>" target="_blank" title="<?= $v['name' . $lang] ?>">
                            <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '218x122x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
<?php if (!empty($newsnb)) { ?>
    <div class="wrap-newsnb">
        <div class="wrap-content">
            <div class="box-newsnb">
                <div class="title-global">
                    <div class="ttl"><span>Thần Sơn group</span></div>
                    <h2 class="ttl2">Tin tức nổi bật</h2>
                </div>
                <div class="slide-news owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:20,screen:425|items:1|margin:20,screen:575|items:1|margin:20,screen:767|items:2|margin:20,screen:991|items:2|margin:20,screen:1199|items:3|margin:20" data-rewind="1" data-autoplay="1" data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="0" data-smartspeed="800" data-autoplayspeed="800" data-autoplaytimeout="5000" data-dots="0" data-animations="" data-nav="1" data-navcontainer=".control-newsnb">
                    <?php foreach ($newsnb as $k => $v) { ?>
                        <a class="item-news" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                            <div class="img-thumb">
                                <span class="scale-img">
                                    <?= $func->getImage(['class' => 'w-100', 'sizes' => '405x269x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                </span>
                            </div>
                            <div class="news-info">
                                <div class="cate">Tin tức <span class="date"><?= date("d/m/Y", $v['date_created']) ?></span></div>
                                <h3 class="news-name">
                                    <?= $v['name' . $lang] ?>
                                </h3>
                                <div class="desc"><?= $v['desc' . $lang] ?></div>
                                <div class="timhieu"><span>Tìm hiểu thêm</span></div>
                            </div>
                        </a>
                    <?php } ?>
                </div>
                <div class="control-newsnb control-owl transition"></div>
            </div>
        </div>
    </div>
<?php } ?>

