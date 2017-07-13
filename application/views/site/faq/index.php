<div class="pages faq">
    <div class="containerS">
        <div class="title-sub">
            Câu hỏi thường gặp
        </div>
        <div class="list-faq">
            <ul>
             <?php $i = 1 ?>
             <?php foreach ($list as $row): ?>
                <li>
                    <a href="#q<?php echo $i?>" class="title-faq" data-toggle="collapse"><?php echo $i?>. <?php echo $row->question?>?</a>
                    <div class="show-anwser collapse" id="q<?php echo $i?>">
                        <?php echo $row->answer?>
                    </div>
                </li>
                 <?php $i++ ?>
            <?php endforeach?>
            </ul>
            <div class="contact">
                <p>Thông tin liên hệ</p>
                <p>Để biết thêm thông tin và giải đáp các thắc mắc khác, vui lòng liên hệ CSKH:</p>
                <p>- Tổng đài: 1900 6799</p>
                <p>- Email: hotro@Zon.club</p>
            </div>
        </div>
    </div>
</div>