<div class="pages profile" id="divProfile">
    <?php if($userinfo!=null) :?>
    <div class="containerS">
        <div class="left-profile col-md-4">
         <?php foreach ($userinfo as $key => $value): ?>
            <div class="b-ava">
                <span>
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
                </span>
            </div>
            <div class="vip-ava">
            <img src="public/site/images/stone.png" alt=""></div>
            <div class="info-left-profile">
                <ul>
                    <li>Tài khoản:</li>
                    <li id="username">test</li>
                    <li>Nhân vật:</li>
                    <li id="nickname"><?php echo $value['nickname'] ?></li>
                    <li>Ngày sinh:</li>
                    <li id="birthday">02/02/1988</li>
                </ul>
            </div>
            <div class="vip-status">
                <p class="info-status"></p>
                <p class="bar"></p>
            </div>
            <div class="list-info-profile">
                <p>
                    <a href="javascript:;">
                        <i class="glyphicon glyphicon-question-sign" aria-hidden="true"></i>
                        <span>Cấp độ hiện tại sẽ có hiệu lực đến ngày cuối cùng của tháng liền kề tháng người chơi được lên cấp </span>
                        </a>Hiệu lực cấp độ: Đến ngày <span id="dateExist">NaN/NaN/NaN</span>
                    </p>
                    <p>
                        <a href="javascript:;">
                            <i class="glyphicon glyphicon-question-sign" aria-hidden="true"></i>
                            <span>VP này dùng để xét hạng hàng tháng từ cấp độ Đá lên cấp độ Kim Cương  </span>
                            </a><span>Trong tháng:</span> Có được <strong id="vpMonth">0</strong> VP xét hạng
                        </p>
                        <p>
                            <a href="javascript:;">
                                <i class="glyphicon glyphicon-question-sign" aria-hidden="true"></i>
                                <span> VP này dùng để xét cấp độ siêu VIP</span>
                                </a><span>Trong năm:</span> Có được <strong id="vpYear">0</strong> VP xét hạng
                            </p>
                            <p>
                                <a href="javascript:;">
                                    <i class="glyphicon glyphicon-question-sign" aria-hidden="true"></i>
                                    <span> VP này dùng để đổi các phần thưởng. VP này sẽ bị reset vào ngày cuối cùng trong tháng    </span>
                                    </a><span>Đổi thưởng:</span> Bạn có <strong id="vpAward">0</strong> VP đổi thưởng
                                </p>
                            </div>
                            <!-- end list-info-profile-->
                            <div class="btn-profile">
                                <a href="/dac-quyen-vip" class="btn-def">Đặc quyền VIP </a>
                            </div>
                        <?php endforeach ?>
                        </div>
                        <!-- end left profile-->
                        <div class="right-profile col-md-8">
                            <div class="title-sub">
                                Thông tin chi tiết
                            </div>
                            <div class="list-right-profile">
                                <ul>
                                    <li>
                                        <div id="vpDuyTri" style="display: none;"> <p class="title-profile">Duy trì hạng</p><p><img src="public/site/images/stone.png" alt=""> Bạn cần thêm <span class="t-vp">0</span> VP trước ngày NaN/NaN/NaN để giữ  nguyên ở cấp độ <span class="vip-stone">Đá</span></p></div>
                                    </li>
                                    <li class="n-border">
                                        <div id="vpThangHang">
                                            <p class="title-profile">Thăng hạng</p>
                                            <p>
                                                <img src="public/site/images/bronze.png" alt=""> Bạn cần thêm <span class="t-vp">10</span> VP trước ngày <span class="lsm"></span> để đạt được cấp độ 
                                                <span class="vip-bronze">Đồng</span>
                                            </p>
                                            <p><img src="public/site/images/silver.png" alt=""> Bạn cần thêm <span class="t-vp">100</span> VP trước ngày <span class="lsm"></span> để đạt được cấp độ 
                                            <span class="vip-silver">Bạc</span></p><p><img src="public/site/images/gold.png" alt=""> Bạn cần thêm <span class="t-vp">2000</span> VP trước ngày <span class="lsm"></span> để đạt được cấp độ <span class="vip-gold">Vàng</span>
                                            </p>
                                            <p><img src="public/site/images/diamond.png" alt=""> Bạn cần thêm <span class="t-vp">8000</span> VP trước ngày <span class="lsm"></span> để đạt được cấp độ 
                                            <span class="vip-diamond">Bạch kim</span>
                                            </p>
                                            <p><img src="public/site/images/platinum.png" alt=""> Bạn cần thêm <span class="t-vp">20000</span> VP trước ngày <span class="lsm"></span> để đạt được cấp độ <span class="vip-platinum">Kim cương</span>
                                            </p>
                                            <p><img src="public/site/images/super.png" alt=""> Bạn cần thêm <span class="t-vp">100000</span> VP trước ngày <span class="lsm"></span> để đạt được cấp độ 
                                            <span class="vip-super">Siêu VIP</span>
                                            </p>
                                            </div>
                                        </li>
                                        <li class="n-border">
                                            <div id="vpTutHang" style="display: none;"><p class="title-profile">Tụt hạng</p></div>
                                        </li>
                                        
                                    </ul>
                                    <div class="notice">
                                        <p>* Lưu ý: VP xét hạng sẽ được reset vào ngày cuối cùng trong tháng</p>
                                        <p><a href="/cap-do-vip.html">Xem thêm cấp độ và quyền lợi VIP » </a></p>
                                    </div>
                                </div>
                            </div>
                            <!-- end right profile-->
                        </div>
                    <?php endif?>
                    </div>
<script type="text/javascript">
     $(document).ready(function(){
           var percent= barPercent($("#hdnvip").val());
        $(".info-status").html(bacVippoint($("#hdnvip").val())); 
        $(".bar").html("<span style='width:"+percent+"%'></span>");
         var today = new Date();
        var lastOfMonth =getFormattedDate(new Date(today.getFullYear(),today.getMonth()+1, 0));
        $(".lsm").html(lastOfMonth);
       });
function getFormattedDate(date) {
  var year = date.getFullYear();
  var month = (1 + date.getMonth()).toString();
  month = month.length > 1 ? month : '0' + month;
  var day = date.getDate().toString();
  day = day.length > 1 ? day : '0' + day;
  
  return day + '/' + month + '/' + year;
}
</script>