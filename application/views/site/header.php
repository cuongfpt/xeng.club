<div class="header">
        <div class="containerS">
           <?php if($userinfo!=null) :?> 
            <div class="user-login">
             <?php foreach ($userinfo as $key => $value): ?>
                <div class="ava">
                    <a href="javascript:;">
                   <?php if ($value['avatar'] == 1): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_1.png') ?>">
                                <?php elseif ($value['avatar'] == 2): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_2.png') ?>">
                                <?php elseif ($value['avatar'] == 3): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_3.png') ?>">
                                <?php elseif ($value['avatar'] == 4): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_4.png') ?>">
                                <?php elseif ($value['avatar'] == 5): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_5.png') ?>">
                                <?php elseif ($value['avatar'] == 6): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_6.png') ?>">
                                <?php elseif ($value['avatar'] == 7): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_7.png') ?>">
                                <?php elseif ($value['avatar'] == 8): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_8.png') ?>">
                                <?php elseif ($value['avatar'] == 9): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_9.png') ?>">
                                <?php elseif ($value['avatar'] == 10): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_10.png') ?>">
                                <?php elseif ($value['avatar'] == 11): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_11.png') ?>">
                                <?php elseif ($value['avatar'] == 12): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_12.png') ?>">
                                <?php else: ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_1.png') ?>">
                                <?php endif; ?>
                    </a>
                </div>
                 
                <div class="info">
                    <p class="name"><?php echo $value['nickname'] ?> (<a href="<?php echo base_url('home/logout') ?>">Thoát</a>)</p>
                    <p class="vip"> <input type="hidden" value="<?php echo $value['vippoint'] ?>" id="hdnvip"><span></span></p>
                    <p class="barvip"></p>
                </div>
                  <?php endforeach ?>
            </div>
            <?php endif ?>
            <div class="user-login-mobile" style="display: none;">
                <a href="javascript:;"><img src="public/site/images/noimages.png" alt=""></a>
            </div>
            <?php if($userinfo==null): ?>

            <div class="login">
                <ul>
                    <li><a href="javascript:;" onclick="ShowFormLogin();"><span class="glyphicon glyphicon-log-in" aria-hidden="true" onclick="Logout();"></span> Đăng nhập</a></li>
                    <li><a href="javascript:;" onclick="Register()" target="_blank"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Đăng ký</a></li>
                </ul>
                 <input type="hidden" value="" id="hdnvip">
            </div>
        <?php endif ?>
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
             <?php echo $menu_list ?>
               
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
 $("#profilevip").click(function(){
   if($("#hdnvip").val()==""){
    ShowFormLogin();
   }
   else{
    window.location.href="<?php echo base_url("ho-so-vip")?>";
   }

 });
</script>