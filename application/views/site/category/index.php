<div class="pages benefit" id="divBenefit">
    <div class="containerS">
        <div class="left-benefit col-md-8">
            <div class="title-sub">
                TIN TỨC
            </div>
            
            
            <!-- end benefit mobile-->
            <div id="divBenefitContain">
                <div class="exchange-benefit">
                    <ul id="listnew">
                        <?php if (!empty($list)): ?>
                        <?php foreach ($list as $row): ?>
                        <li>
                            <div class="item_news">
                                <div class="div_images">
                                    <a href="  <?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><img
                                    src="<?php echo public_url('uploads/news/' . $row->images) ?>"></a>
                                </div>
                                <div class="div_content">
                                    <a class="title_new" href="  <?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><?php echo $row->title ?></a>
                                    <div class="date"><?php echo date("d/m/Y", strtotime($row->createTime)) ?></div>
                                    <div class="description">
                                        <?php echo trim_text($row->description,400) ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                        <?php else: ?>
                        <li><h3 style="color: wheat">
                            Đang cập nhật .....
                        </h3></li>
                        <?php endif ?>
                    </ul>
                     <?php if($count >= 3): ?>
                        <div class="pagination">
                        </div>
                     <?php endif; ?>
                </div>
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
</div>
</div>