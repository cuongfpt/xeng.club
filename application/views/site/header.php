<div class="header">
        <div class="containerS">
            <div class="user-login" style="display: none;">
                <div class="ava">
                    <a href="javascript:;"><img src="public/site/images/noimages.png" alt=""></a>
                </div>
                <div class="info">
                    <p class="name"> </p>
                    <p class="vip"> <span></span></p>
                    <p class="barvip"><span style="width:60%"></span></p>
                </div>
            </div>
            <div class="user-login-mobile" style="display: none;">
                <a href="javascript:;"><img src="public/site/images/noimages.png" alt=""></a>
            </div>
            <div class="login">
                <ul>
                    <li><a href="javascript:;" onclick="libAccount.ShowFormLogin();"><span class="glyphicon glyphicon-log-in" aria-hidden="true" onclick="libAccount.Logout();"></span> Đăng nhập</a></li>
                    <li><a href="javascript:;" onclick="libAccount.Register()" target="_blank"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Đăng ký</a></li>
                </ul>
            </div>
            <!-- end login-->
            <div class="login-mobile">
                <a href="javascript:;" class="reg-mobile"><span class="glyphicon glyphicon-log-in" onclick="libAccount.ShowFormLogin();" aria-hidden="true"></span></a>
                <a href="javascript:;" onclick="libAccount.Register()" target="_blank" class="login-mobile"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
            </div>
            <div class="log-out" style="display: none;"><a href="javascript:;"><span class="glyphicon glyphicon-log-out" aria-hidden="true" onclick="libAccount.Logout();"></span></a></div>
            <!-- end login mobile-->
            <div class="logo">
                <a href="javascript:;"><img src="public/site/images/logo.png" alt=""></a>
            </div>
        </div>
    </div>
<div class="menu">
    <div class="containerS">
        <div class="navbar-header">
            <span class="title-site">Zon Club</span>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="javascript:;" data-value="http://vip.zon.club/">Trang chủ</a></li>
                <li><a href="javascript:;" data-value="http://vip.zon.club/profile.html" data-requiredlogin="1">Hồ sơ VIP</a></li>
                <li><a href="javascript:;" data-value="http://vip.zon.club/level-vip.html">Cấp độ VIP</a></li>
                <li><a href="javascript:;" data-value="http://vip.zon.club/benefit-1.html">Đặc quyền VIP</a></li>
                <li><a href="javascript:;" data-value="http://vip.zon.club/champion.html">Vinh danh</a></li>
                <li><a href="javascript:;" data-value="javascript:;" onclick="window.open(jsConfig.urlTinTuc, 'news')">Tin tức</a></li>
                <li><a href="javascript:;" data-value="http://vip.zon.club/faqs.html">Hỏi đáp</a></li>
                <li><a href="javascript:;" data-value="javascript:;" onclick="window.open(jsConfig.urlRootPortal, 'portal')">Chơi game</a></li>
            </ul>
        </div>
    </div>
</div>