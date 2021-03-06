
<div id="fullpage" class="fullpage-wrapper" style="height: 100%; position: relative; transform: translate3d(0px, 0px, 0px);">
<div class="main">
    <div class="section fp-auto-height box1 fp-section active fp-completely" id="section0" style="height: 317px;">
        <!-- Carousel
        ================================================== -->
        <div class="fp-slides"><div class="fp-slidesContainer" style="width: 100%;"><div id="myCarousel" class="carousel slide fp-slide fp-table active" data-ride="carousel" style="width: 100%;"><div class="fp-tableCell" style="height: 317px;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
            <?php $i=1;?>
             <?php if (!empty($list2)) { ?>
                    <?php foreach ($list2 as $row): ?>
                        <?php if($i==1):?>
                        <div class="item active">
                             <a href="javascript:;"><img src="<?php echo public_url('uploads/adv/right/' . $row->images)?>" alt=""></a>
                        </div>
                    <?php else:?>
                         <div class="item">
                             <a href="javascript:;"><img src="<?php echo public_url('uploads/adv/right/' . $row->images)?>" alt=""></a>
                        </div>
                    <?php endif?>
                    <?php $i++ ?>
                    <?php endforeach ?>
                <?php } ?>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- /.carousel -->
        </div></div></div></div>
        <div class="lvvip">
            <div class="containerS">
                <ul>
                    <li class="right-lvvip">
                        <div class="lvvip-img1">
                            <img src="public/site/images/p1-card.png" alt="">
                        </div>
                        <div class="lvvip-img2">
                            <img src="public/site/images/p1-dice.png" alt="">
                        </div>
                    </li>
                    <li class="left-lvvip">
                        <h1><?php echo $TitleLevelVip?></h1>
                        <p><?php echo $ContentLevelVip ?></p>
                       
                        <a href="<?php echo base_url("/cap-do-vip")?>" class="btn-def">Xem thêm</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end lv vip-->
    </div>
    <!-- end section 1-->
    <div class="section fp-auto-height box2 fp-section fp-table" id="section1" style="height: 317px;"><div class="fp-tableCell" style="height: 317px;">
        <div class="benefit-vip">
            <div class="containerS">
                <h1><?php echo $TitleBenefit?></h1>
                <p><?php echo $ContentBenefit?></p>
                <div class="list-benefit">
                    <div class="col-md-3">
                        <p><a href="<?php echo base_url("/dac-quyen-vip")?>"><img src="<?php echo public_url("/uploads/adv/".$Images1Benefit)?>" alt=""></a></p>
                        <p class="title-benefit"><?php echo $TextImages1Benefit?></p>
                        <a href="<?php echo base_url("/dac-quyen-vip")?>" class="btn-def">Xem thêm</a>
                    </div>
                    <div class="col-md-3">
                        <p><a href="<?php echo base_url("/dac-quyen-vip")?>"><img src="<?php echo public_url("/uploads/adv/".$Images2Benefit)?>" alt=""></a></p>
                        <p class="title-benefit"><?php echo $TextImages2Benefit?></p>
                        <a href="<?php echo base_url("/dac-quyen-vip")?>" class="btn-def">Xem thêm</a>
                    </div>
                    <div class="col-md-3">
                        <p><a href="<?php echo base_url("/dac-quyen-vip")?>"><img src="<?php echo public_url("/uploads/adv/".$Images3Benefit)?>" alt=""></a></p>
                        <p class="title-benefit"><?php echo $TextImages3Benefit?></p>
                        <a href="<?php echo base_url("/dac-quyen-vip")?>" class="btn-def">Xem thêm</a>
                    </div>
                    <div class="col-md-3">
                        <p><a href="<?php echo base_url("/dac-quyen-vip")?>"><img src="<?php echo public_url("/uploads/adv/".$Images4Benefit)?>" alt=""></a></p>
                        <p class="title-benefit"><?php echo $TextImages4Benefit?></p>
                        <a href="<?php echo base_url("/dac-quyen-vip")?>" class="btn-def">Xem thêm</a>
                    </div>
                </div>
                <!-- end benefit-->
            </div>
        </div>
        <!-- end benefit vip-->
    </div></div>
    <!-- end section 2-->
    <div class="section fp-auto-height box3 fp-section fp-table" id="section2" style="height: 317px;"><div class="fp-tableCell" style="height: 317px;">
        <div class="topvip">
            <div class="containerS">
                <div class="col-md-7">
                    <div class="box3-img">
                        <div class="box3-img1">
                            <img src="public/site/images/p2-coin.png" alt="">
                        </div>
                        <div class="box3-img2">
                            <img src="public/site/images/p2-cup.png" alt="">
                        </div>
                        <div class="box3-img3">
                            <img src="public/site/images/p2-girl.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h1>TOP VIP - Nơi đỉnh cao hội tụ </h1>
                    <p>+<span class="count">100</span> game thủ đạt thứ hạng Siêu VIP</p>
                    <p>+<span class="count">3000</span> game thủ nhận quà sinh nhật</p>
                    <p>+<span class="count">10000</span> game thủ đổi thưởng thành công</p>
                    <a href="/champion.html" class="btn-def">Xem thêm</a>
                </div>
            </div>
        </div>
        <!-- end topvip-->
    </div></div>
    <!-- end section 3-->
</div>
</div>