
<!-- <div class="break-crum">
    <div class="text-crum"><?php echo $info->title ?></div>
<div class="star">
   <?php
          if($info_rate!=null){
             for($i = 1; $i <= 5; $i++) {
                 if($i <= $info_rate[0]->rating) {
                  ?>
                 <span class="star_rated" onclick="ratestar(<?php echo $info_rate[0]->news_id; ?>, <?php echo $i; ?>)"><img src="<?php echo public_url('site') ?>/images/rate-btn2-hover.png"></span>
                     <?php }  else {  ?>
                 <span  onclick="ratestar(<?php echo $info->id ?>,<?php echo $i; ?>)"><img src="<?php echo public_url('site') ?>/images/rate-btn2.png"></span>
                   <?php  }
             }
          }
          else {  for($i = 1; $i <= 5; $i++) { ?>
             <span  onclick="ratestar(<?php echo $info->id ?>,<?php echo $i; ?>)"><img src="<?php echo public_url('site') ?>/images/rate-btn2.png"></span>
          <?php } }?>
         <span style="float: left;color: #fff"> <?php echo $result_rate ?></span>
    </div>

   <div style="width: 13%;float: left;color: #fff">
     <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
   </div>
   <div style="width: 20%;float: left;"> 
       <div class="a2a_kit a2a_default_style">
          <a class="a2a_button_google_plus_share"></a>
      </div>
    </div>
<div class="list_cate">
    <div class="content_left" style="color: #fff">
        <?php echo $info->content ?>
		 <div class="content_news_other_footer">
            <?php echo $sign ?>
        </div>
        <?php if ($list != false): ?>
         <div class="content_news_other">
                 <span> Các tin khác</span>
                   <ul>
                       <?php $i = 1; ?>
                       <?php foreach ($list as $row): ?>
                           <?php if ($i <= 5): ?>
                            <li><a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><?php echo $row->title ?></a></li>
                           <?php endif ?>
                           <?php $i++ ?>
                        <?php endforeach; ?>
                    </ul>
             </div>
         <?php endif ?>
    </div>
    <?php $this->load->view('site/right') ?>
</div>
<script type="text/javascript">
  $("document").ready(function(){
    var url      = window.location.href; 
    $(".fb-like").attr("data-href",url);
  });
            function ratestar($id,$rate){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url("home/updateRate")?>',
                    data:{'id':$id,'rate':$rate},
                    success: function(data) { 
                       location.reload();
                    }
                });
            }
        </script>

<script async src="//static.addtoany.com/menu/page.js"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 -->
 <div class="pages benefit" id="divBenefit">
    <div class="containerS">
        <div class="left-benefit col-md-8">
            <div class="title-sub">
               <?php echo $info->title ?>
               <div class="star">
               <?php
                      if($info_rate!=null){
                         for($i = 1; $i <= 5; $i++) {
                             if($i <= $info_rate[0]->rating) {
                              ?>
                             <span class="star_rated" onclick="ratestar(<?php echo $info_rate[0]->news_id; ?>, <?php echo $i; ?>)"><img src="<?php echo public_url('site') ?>/images/rate-btn2-hover.png"></span>
                                 <?php }  else {  ?>
                             <span  onclick="ratestar(<?php echo $info->id ?>,<?php echo $i; ?>)"><img src="<?php echo public_url('site') ?>/images/rate-btn2.png"></span>
                               <?php  }
                         }
                      }
                      else {  for($i = 1; $i <= 5; $i++) { ?>
                         <span  onclick="ratestar(<?php echo $info->id ?>,<?php echo $i; ?>)"><img src="<?php echo public_url('site') ?>/images/rate-btn2.png"></span>
                      <?php } }?>
                     <span style="float: left;color: #fff"> <?php echo $result_rate ?></span>
                </div>
            </div>
            <!-- end benefit mobile-->
            <div id="divBenefitContain">
                <div class="exchange-benefit">
                    <?php echo $info->content ?>
                     <?php echo $sign ?>
                </div>
                <?php if ($list != false): ?>
         <div class="content_news_other">
                 <span> Các tin khác</span>
                   <ul>
                       <?php $i = 1; ?>
                       <?php foreach ($list as $row): ?>
                           <?php if ($i <= 5): ?>
                            <li><a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><?php echo $row->title ?></a></li>
                           <?php endif ?>
                           <?php $i++ ?>
                        <?php endforeach; ?>
                    </ul>
             </div>
         <?php endif ?>
            </div>
        </div>
        <!-- end left benefit-->
        <div class="right-benefit col-md-4">
            <div class="tab-right-vip">
                <ul>
                    <li class="active" data-value="1"><a href="javascript:;" onclick="libMenu.BindDataMenuRight(5);">Vinh danh</a></li>
                    <li><a href="javascript:;" data-value="2">Top quà tặng</a></li>
                </ul>
            </div>
            <div class="list-right-vip" id="divTopVip">
                <ul>
                    <li>
                        <strong>nam3689 </strong>đổi VP thành công <span class="t-cygan">(Từ 6 VP sang 3.600 ZON)</span> <span class="t-grey"> 5 phút, 19 giây trước
                    </span>
                </li>
                <li>
                    <strong>tuanhuyen77777 </strong>đổi VP thành công <span class="t-cygan">(Từ 6 VP sang 1.800 ZON)</span> <span class="t-grey"> 6 phút, 45 giây trước</span>
                </li>
                <li>
                    <strong>Locphat868 </strong>đổi VP thành công <span class="t-cygan">(Từ 68 VP sang 40.800 ZON)</span> <span class="t-grey"> 8 phút, 31 giây trước</span>
                </li>
                <li>
                    <strong>taolabiu </strong>đổi VP thành công <span class="t-cygan">(Từ 11 VP sang 3.300 ZON)</span> <span class="t-grey"> 11 phút, 13 giây trước</span>
                </li>
                <li><strong>tit7878 </strong>đổi VP thành công <span class="t-cygan">(Từ 201 VP sang 120.600 ZON)</span> <span class="t-grey"> 16 phút, 21 giây trước</span>
            </li>
        </ul>
    </div>
    <div class="list-right-vip" id="divGift" style="display:none;">
        <ul>
            <li>Comming soon</li>
        </ul>
    </div>
</div>
<script>
$(document).ready(function () {
libMenu.BindDataMenuRight(5);
});
</script>
<script>
    $(document).ready(function () {
        Pagging();
    });
    function Pagging() {
        var items = $("#listnew li");
        var numItems = items.length;
        $("#num").html(numItems);
        var perPage = 5;

        // only show the first 2 (or "first per_page") items initially
        items.slice(perPage).hide();
        // now setup pagination
        $(".pagination").pagination({
            items: numItems,
            itemsOnPage: perPage,

            cssStyle: "",
            onPageClick: function (pageNumber) { // this is where the magic happens
                // someone changed page, lets hide/show trs appropriately
                var showFrom = perPage * (pageNumber - 1);
                var showTo = showFrom + perPage;

                items.hide() // first hide everything, then show for the new page
                    .slice(showFrom, showTo).show();
            }
        });
    }
</script>
 <script type="text/javascript">
  $("document").ready(function(){
    var url      = window.location.href; 
    $(".fb-like").attr("data-href",url);
  });
            function ratestar($id,$rate){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url("Home/updateRate")?>',
                    data:{'id':$id,'rate':$rate},
                    success: function(data) { 
                       location.reload();
                    }
                });
            }
        </script>

<script async src="//static.addtoany.com/menu/page.js"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</div>
</div>