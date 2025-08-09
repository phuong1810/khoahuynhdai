<div class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-sm-12 col-md-6 cont-foot1">
               <div>
                    <div class="title-footer">CÔNG TY TNHH TM & DV KC HOME</div>
                    <div class="content-foot1">
                        MST: 0318018538 <br>
                        Hotline: 0944 405 482 (24/7) <br>
                        Head Office: 482 Trường Chinh, P. Tân Hưng Thuận, Q.12, HCM
                    </div>
                    <div class="content-foot2">
                        CHI NHÁNH TÂN PHÚ (Hồ Chí Minh) <br>
                        Địa chỉ: 378/57 Thoại Ngọc Hầu, P. Phú Thạnh, Q. Tân Phú
                    </div>
                    <div>
                        CHI NHÁNH HAI BÀ TRƯNG (Hà Nội) <br>
                        Địa chỉ: 20 Trương Định, P. Trương Định, Q. Hai Bà Trưng
                    </div>
               </div>
            </div>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            <div class="col-12 col-sm-5 col-md-2 cont-foot2">
                <div class="title-footer">TỔNG ĐÀI HỖ TRỢ </div>
                <div class="info-footer">
                    <div class="d-flex align-items-center  info-footer--v2">
                        <ul class="list">
                            <li class="icon">
                                <i class="fa-solid fa-phone"></i>
                                Tư vấn trực tiếp
                                <br>
                                <span>0944405482</span>
                            </li>
                            <li class="icon">
                                <i class="fa-solid fa-mobile-screen"></i>
                                Khiếu nại & Bảo hành
                                <br>
                                <span>0944405482</span>
                            </li>
                            <li>
                                <em>Phục vụ 24/7(cả ngày lễ và chủ nhật)</em>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 cont-foot4">
               <div class="col-inner">
                    <p>
                        <strong>SẢN PHẨM</strong>
                    </p>
                    <p class="sp-color">
                        <strong>
                            <a href="https://hyundaismartlock.vn/danh-muc-san-pham/khoa-cua-nhom/">Khóa cửa nhôm</a>
                        </strong>
                        <br>
                        <strong>
                            <a href="https://hyundaismartlock.vn/danh-muc-san-pham/khoa-cua-go/">Khóa cửa gỗ</a>
                        </strong>
                        <br>
                        <strong>
                            <a href="https://hyundaismartlock.vn/danh-muc-san-pham/khoa-cua-cong/">Khóa cửa cổng</a>
                        </strong>
                        <br>
                        <a href="https://hyundaismartlock.vn/danh-muc-san-pham/khoa-khach-san/">
                            <strong>Khóa khách sạn</strong>
                        </a>
                        <br>
                        <a href="https://hyundaismartlock.vn/danh-muc-san-pham/khoa-face-id/">
                            <strong>Khóa Face ID</strong>
                        </a>
                        <br>
                        <a href="https://hyundaismartlock.vn/danh-muc-san-pham/khoa-dai-sanh/">
                            <strong>Khóa biệt thự, đại sảnh</strong>
                        </a>
                    </p>
		        </div>

                


            </div>
            <div class="col-12 col-sm-12 col-md-6 cont-foot3">
                <div class="title-footer">CHÍNH SÁCH</div>
                <ul class="mb24">
                    <?php foreach($chinhsach as $k=>$v){if($k<6){?>
                        <li><a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><span>- <?=$v['name'.$lang]?></span></a></li>
                    <?php } } ?>
                </ul>
                <div class="title-footer">HỢP TÁC & TÀI TRỢ</div>
                <div class="cont-hoptac"> <?= $func->decodeHtmlChars($optsetting['hoptac']) ?></div>
            </div>
            
        </div>
       

        <div class="copyright">
            <?=$optsetting['copyright']?>
        </div>
    </div>
</div>