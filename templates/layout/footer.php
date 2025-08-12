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
                    <div class="d-flex   info-footer--v2">
                         <div class="info-box2">
                            <div class="icon-circle">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="info-text">
                                <div>Tư vấn trực tiếp</div>
                                <span>0944 405 482</span>
                            </div>
                        </div>
                        
                        <div class="info-box">
                            <div class="icon-circle">
                                <i class="fa-solid fa-mobile-screen"></i>
                            </div>
                            <div class="info-text">
                                <div>Khiếu nại &amp; Bảo hành</div>
                                <span>0944 405 482</span>
                            </div>
                        </div>
                        <div class="footer-note">
                             Phục vụ 24/7 (cả ngày lễ và chủ nhật)
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 cont-foot4">
               <div class="col-inner">
                    <p>
                        <strong class="title-footer">SẢN PHẨM</strong>
                    </p>
                    <strong>
                        <a href="https://hyundaismartlock.vn/danh-muc-san-pham/khoa-cua-nhom/">
                            <span class="sp-color">khóa cửa nhôm</span>
                        </a>
                    </strong>
                    <br>
                    <strong>
                        <a href="https://hyundaismartlock.vn/danh-muc-san-pham/khoa-cua-go/">
                            <span class="sp-color">khóa cửa gỗ</span>
                        </a>
                    </strong>
                    <br>
                    <strong>
                        <a href="https://hyundaismartlock.vn/danh-muc-san-pham/khoa-cua-cong/">
                            <span class="sp-color">Khóa cửa cổng</span>
                        </a>
                    </strong>
                    <br>
                    <strong>
                        <a href="https://hyundaismartlock.vn/danh-muc-san-pham/khoa-khach-san/">
                            <span class="sp-color">Khóa khách sạn</span>
                        </a>
                    </strong>
                    <br>
                    <strong>
                        <a href="https://hyundaismartlock.vn/danh-muc-san-pham/khoa-face-id/">
                            <span class="sp-color">Khóa Face ID</span>
                        </a>
                    </strong>
                    <br>
                    <strong>
                        <a href="https://hyundaismartlock.vn/danh-muc-san-pham/khoa-dai-sanh/">
                            <span class="sp-color">Khóa biệt thự, đại sảnh</span>
                        </a>
                    </strong>
                
		        </div>

                


            </div>
            <d class="col-12 col-sm-12 col-md-6 cont-foot3">
                <div class="title-footer">CHÍNH SÁCH</div>
                    <ul class="mb24">
                        <?php foreach($chinhsach as $k=>$v){if($k<6){?>
                            <li><a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><span class="CS-footer">- <?=$v['name'.$lang]?></span></a></li>
                        <?php } } ?>
                    </ul>
            </div>
        </div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
       <div class="floating-buttons">
            <!-- Zalo -->
            <a class="zalo-btn" href="https://zalo.me/YOUR_NUMBER" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Icon_of_Zalo.svg" alt="Zalo">
            </a>

            <!-- Hotline -->
            <a class="hotline-btn" href="tel:0944 405 482">
                <div class="icon"><i class="fa-solid fa-phone"></i></div>
                <div class="text">
                    <span class="label">HOTLINE</span>
                    <span class="number">0944 405 482</span>
                </div>
            </a>
        </div>
    </div>
</div>