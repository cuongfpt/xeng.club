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
<div id="divThongBao" style="display: none">
                        <div style="z-index:1000;display: block  !important; vertical-align: middle  !important; bottom: 0  !important; position: fixed  !important; right: 0  !important; width: 100%  !important; height: 100%  !important;"><div style=" height: 304px !important; margin: 0px auto !important;  background: transparent !important; border-radius: 10px !important;  width: 25% !important">
                            <div style="width: 100% !important; text-align: center !important; margin-top: 50% !important;" id="divFormLogin">
                                <div id="divContents">
                                    <div class="popup">  
                                    <a href="javascript:;" class="close-mobile" onclick="libs.closeAllPopup();"></a>
                                    <div class="content-pop login-pop" id="divFrmLogin">
                                        <a href="javascript:;" class="close" onclick="libs.closeAllPopup();"></a>
                                        <div class="login-box">
                                            <div class="img-login-box">
                                                <img src="public/site/images/img-login.png" alt="">
                                            </div>
                                            <p align="center" class="lgmessage" style="display: none;">Vui lòng đăng nhập để thực hiện chức năng này</p>
                                            <p class="title-login">
                                                đăng nhập tài khoản
                                            </p>
                                            <div class="warning-box" id="divWarning-box" style="display:none;">
                                            </div>
                                            <div class="form-login">
                                                <p><input type="text"  maxlength="14" id="txtUsername" placeholder="Nhập số điện thoại của bạn"></p>
                                                <p><input type="password"  id="txtPassword" placeholder="Mật khẩu"></p>          
                                                <p>
                                                 <a href="javascript:;">Quên mật khẩu ?</a>
                                                </p>
                                            </div>
                                            <div class="btn-login">
                                                <a href="javascript:;" class="btn-def" id="btnSubmit" onclick="Login();">Đăng nhập</a>
                                                <p>Đăng nhập bằng <a href="javascript:;" id="login-gg">
                                                <img src="public/site/images/fb-icon.png" alt=""></a><a href="javascript:;" id="#login-fb">
                                            <img src="public/site/images/icongoogle.png" alt="" style="width: 45px;margin-left: 8px;"></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                if (location.href.toLocaleLowerCase() == $(this).data("value")) {
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
        function ShowFormLogin(){
            $("#divThongBao").show();
        }
        function Login(){
        
            if($("#txtUsername").val()==""){
                $("#divWarning-box").show();
                $("#divWarning-box").html("Bạn cần nhập vào tên tài khoản");
                $("#txtUsername").focus();
            }
         else if($("#txtPassword").val()==""){
                $("#divWarning-box").show();
                $("#divWarning-box").html("Bạn cần nhập mật khẩu");
                $("#txtUsername").focus();
            }
            else{
                $("#divWarning-box").hide();
                $("#divWarning-box").html("");
                 $.ajax({
                type: "GET",
                url: "<?php echo $linkapi ?>",
                data: {
                    c: 3,
                    un: $("#txtUsername").val(),
                    pw: $.md5($("#txtPassword").val())
                },
                dataType: 'json',
                success: function (result) {
                    if(result.errorCode == 0){
                        var info = atob(result.sessionKey);
                        obj = JSON.parse(info);
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url('home/infouser')?>",
                            data: {
                                name: obj.nickname,
                                vin: obj.vinTotal,
                                ava : obj.avatar,
                                vip : obj.vippoint
                            },
                            dataType: 'json'

                        });
                       window.location.href="<?php echo base_url("/")?>"
                    } 
                    else if(result.errorCode == 1005){
                         $("#divWarning-box").show();
                            $("#divWarning-box").html("Tên đăng nhập không tồn tại");
                        }
                    else if(result.errorCode == 1007){
                           $("#divWarning-box").show();
                            $("#divWarning-box").html("Mật khẩu không chính xác");
                        }
                }
            });
            }
        }
        function bacVippoint(strVip){
            var strresult;
            if(strVip>=0 && strVip <= 10 ){
                strresult = "Cấp độ Đá ("+strVip+"/10 )";
            }else if(strVip>10 && strVip <= 100){
                strresult = "Cấp độ Bạc";
            }else if(strVip>100 && strVip <= 2000 ){
                strresult = "Cấp độ Vàng ("+strVip+"/2000 )";
            }else if(strVip>2000 && strVip <= 8000 ){
                strresult = "Cấp độ Bạch kim ("+strVip+"/8000 )";
            }else if(strVip>8000 && strVip <= 20000 ){
                strresult = "Cấp độ Kim cương ("+strVip+"/12000)";
            }else if(strVip>20000 && strVip <= 100000 ){
                strresult = "Cấp độ Siêu Vip ("+strVip+"/50000)";
            }
        return strresult;
    }
    function barPercent(strVip){
            var percent=0;
            if(strVip>=0 && strVip <= 10 ){
                percent = (parseInt(strVip)/10)*100;
            }else if(strVip>10 && strVip <= 100){
                  percent = (parseInt(strVip)/100)*100;
            }else if(strVip>100 && strVip <= 2000 ){
                 percent = (parseInt(strVip)/2000)*100;
            }else if(strVip>2000 && strVip <= 8000 ){
               percent = (parseInt(strVip)/8000)*100;
            }else if(strVip>8000 && strVip <= 20000 ){
                percent = (parseInt(strVip)/20000)*100;
            }else if(strVip>20000 && strVip <= 100000 ){
                 percent = (parseInt(strVip)/100000)*100;
            }
        return percent;
    }
     $('#txtPassword').keyup(function(e) {
        var enterKey = 13;
        if (e.which == enterKey){
            Login();
        }
    });
     $(document).ready(function(){
        var percent= barPercent($("#hdnvip").val());
      $(".vip").html(bacVippoint($("#hdnvip").val()));
       $(".info-status").html(bacVippoint($("#hdnvip").val())); 
       $(".barvip").html("<span style='width:"+percent+"%'></span>");
    
    });
     //login in google và facebook
       function start() {

        gapi.load('auth2', function() {
            auth2 = gapi.auth2.init({
                client_id: '632901182605-t0p14rbls6h017jspnrd8fantpqb4ooi.apps.googleusercontent.com',
                cookiepolicy: 'single_host_origin'
                // Scopes to request in addition to 'profile' and 'email'
                //scope: 'additional_scope'
            });
        });
    }
var accessTokenFBGG = "";
window.fbAsyncInit = function () {
    FB.init({
        appId: '911936332244929',
        cookie: true,
        xfbml: true,
        version: 'v2.7'
    });
    FB.getLoginStatus(function (response) {
        if (response.status === 'connected') {
            //document.getElementById('status').innerHTML = 'We are connected.';
            // document.getElementById('login').style.visibility = 'hidden';
        } else if (response.status === 'not_authorized') {
            // document.getElementById('status').innerHTML = 'We are not logged in.'
        } else {
            //document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
        }
    });
};

(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

$('#login-gg').click(function() {
    // signInCallback defined in step 6.
    auth2.grantOfflineAccess().then(signInCallback);

});
$('#login-fb').click(function() {
    FB.login(function (response) {
        if (response.status === 'connected') {
            accessTokenFBGG = response.authResponse.accessToken;
            $("#spinner-login").hide();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('home/loginFb')?>",
                data: {
                    access: accessTokenFBGG
                },
                dataType: 'json',
                success: function (result) {
                    
                    if (result == 0) {
                        
                        window.location.href = "<?php echo base_url("/")?>"
                    } else if (result == 1) {

                         $("#divWarning-box").show();
                        $("#divWarning-box").html("Accesstoken sai hoặc hết hạn");
                    }
                    else if (result == 2) {
                           $("#divWarning-box").show();
                        $("#divWarning-box").html("Tài khoản đang bị khóa đăng nhập");
                    }
                    else if (result == 3) {
                           $("#divWarning-box").show();
                        $("#divWarning-box").html("Tài khoản chưa cập nhật nickname");
                    } else if (result == 4) {
                           $("#divWarning-box").show();
                        $("#divWarning-box").html("");
                      
                    }
                    else if (result == 5) {
                           $("#divWarning-box").show();
                        $("#divWarning-box").html("Hệ thống đang bảo trì");
                    }
                }, error: function (XMLHttpRequest, textStatus, errorThrown) {
                    $("#spinner-login").hide();
                    $("#bsModal4").modal('show');
                }, timeout: timeOut
            });


        } else if (response.status === 'not_authorized') {

        } else {

        }
    });

});
    </script>