<script>
    $(document).ready(function () {
        libChampion.Init();
    });
</script>
<div class="footer">
        <div class="menu-footer">
            <div class="containerS">
                <ul>
                       <?php echo $listfooter ?>
                </ul>
            </div>
        </div>
        <div class="containerS">
            <div class="left-menu-footer">
                <p><a href="javascript:;" onclick="window.open(jsConfig.urlDieuKhoan, 'portal')">Điều khoản</a> | <a href="javascript:;" onclick="window.open(jsConfig.urlHoTro, 'portal')">Hỗ trợ</a> | <a href="javascript:;" onclick="window.open(jsConfig.urlFanpage, 'fanpage')">Fanpage</a></p>
                <p>Tổng đài: <a href="tel:+8419006799">1900 6799</a> - Email: <a href="hotro@zon.club">hotro@zon.club</a> </p>
            </div>
            <div class="right-menu-footer">
                <p>©2017 Bản quyền thuộc <a href="javascript:;" onclick="window.open(jsConfig.urlRootPortal, 'portal')">Zon.club</a></p>
                <p>Game dành cho 13+</p>
            </div>
        </div>
    </div>
    <script src="<?php echo public_url('site') ?>/js/jsConfig.js"></script>
     <script src="<?php echo public_url('site') ?>/js/vip.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            libMenu.Init();
            libAccount.GetAccountInfor();
            //Set active menu

            //Menu footer
            $("#navbar .navbar-nav li,.footer .containerS li").removeClass("active");
            $.each($("#navbar .navbar-nav a,.footer .containerS li a"), function (i, item) {
                if (location.href.toLocaleLowerCase() == $(this).data("value").toLocaleLowerCase()) {
                    $(this).parent().addClass("active");
                }
            });
            //End Set active menu

            $('#fullpage').fullpage({
                verticalCentered: true,
                autoScrolling: false,
                fitToSection: false,
                afterLoad: function (anchorLink, index) {
                    if (index == 3) {
                        $('.count').each(function () {
                            $(this).prop('Counter', 0).animate({
                                Counter: $(this).text()
                            }, {
                                duration: 2000,
                                easing: 'swing',
                                step: function (now) {
                                    $(this).text(Math.ceil(now));
                                }
                            });
                        });
                    }
                },
                afterRender: function () {
                    console.log('afterRender')
                },
            });
         
            $('.active-lang').click(function () {
                $('.list-langbox').toggleClass('active');

            });
            $.each($("img"), function (i, item) {
                if ($(item)[0].src.length <= 0) {
                    $(item)[0].src = utils.rootUrl + "/Content/images/noimages.png";
                }
            });
        });
    </script>