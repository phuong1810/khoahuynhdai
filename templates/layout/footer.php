<div class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-sm-12 col-md-6 cont-foot1">
                <div class="title-footer"><?=$footer['name'.$lang]?></div>
                <a class="logo-footer" href="">
                    <?= $func->getImage(['sizes' => '', 'upload' => UPLOAD_NEWS_L, 'image' => $footer['photo'], 'alt' => $setting['name' . $lang]]) ?>
                </a>
                <div class="cont-footer">
                    <?= $func->decodeHtmlChars($footer['content' . $lang]) ?>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 cont-foot2">
                <div class="title-footer">TƯ VẤN ĐẶT HÀNG</div>
                <div class="info-footer">
                    <div class="d-flex align-items-center justify-content-between info-footer--v2">
                        <div class="phone-footer"><?=$optsetting['phone']?></div>
                        <div class="email-footer"><?=$optsetting['email2']?><br><?=$optsetting['email3']?></div>
                        <div class="gopy-footer">Góp ý về dịch vụ<br><a href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>"><?=$optsetting['hotline']?></a></div>
                    </div>
                </div>
                <div class="dslienhe">
                    <?php foreach($dslienhe as $v) {?>
                        <div class="item-ds">
                            <a href="tel:<?=preg_replace('/[^0-9]/','',$v['desc'.$lang]);?>">
                                <img onerror="this.src='<?=THUMBS?>/39x39x1/assets/images/noimage.png';" src="<?=THUMBS?>/39x39x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>">
                                <div class="title">
                                    <p class="titl"><?=$v['name'.$lang]?></p>
                                    <p><?=$v['desc'.$lang]?></p>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>

            </div>
            <div class="col-12 col-sm-12 col-md-6 cont-foot3">
                <div class="title-footer">HƯỚNG DẪN VÀ THÔNG TIN</div>
                <ul class="mb24">
                    <?php foreach($huongdan as $k=>$v){if($k<6){?>
                        <li><a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><span>- <?=$v['name'.$lang]?></span></a></li>
                    <?php } } ?>
                </ul>
                <div class="title-footer">CHÍNH SÁCH</div>
                <ul class="mb24">
                    <?php foreach($chinhsach as $k=>$v){if($k<6){?>
                        <li><a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><span>- <?=$v['name'.$lang]?></span></a></li>
                    <?php } } ?>
                </ul>
                <div class="title-footer">HỢP TÁC & TÀI TRỢ</div>
                <div class="cont-hoptac"> <?= $func->decodeHtmlChars($optsetting['hoptac']) ?></div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 cont-foot4">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="title-footer">PHƯƠNG THỨC THANH TOÁN</div>
                        <img class="mb24" src="assets/images/phuongthuc.png" alt="Thanh toán được chấp nhận">
                    </div>

                </div>


            </div>
        </div>
        <div class="wrap-address">
            <div class="row justify-content-between">
                <div class="col-12 col-sm-6 col-12--v2"><div class="item"><span>Văn Phòng: </span><?=$optsetting['vanphong']?></div></div>
                <div class="col-12 col-sm-6"><div class="item"><span>Xưởng sản xuất: </span><?=$optsetting['xuongsanxuat']?></div></div>
            </div>
        </div>

        <div class="copyright">
            <?=$optsetting['copyright']?>
        </div>
    </div>
</div>