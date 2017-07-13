<div class="pages champion">
	<div class="containerS">
		<div class="list-champion">
			<ul>
			<?php for($i = 1; $i <= 12; $i++ ): ?>
				  <?php foreach($list as $row):?>
				  	<?php if($i == $row->month): ?>
					<li>
						<a href="javascript:;" onclick="#">
							<img src="<?php echo public_url('uploads/victory/'.$row->avatar) ?>" alt=""><span class="info-t-vipmem">Top <br>tháng <?php echo $i?></span>
							<div class="info-vipmem"><span><?php echo $row->username ?></span><img src="public/site/images/gold.png" alt="" width="40"></div>
						</a>
					</li>
					<?php endif ?>
					<?php endforeach?>
					<?php foreach($result as $key => $value):?>
			            <?php if($i == $value): ?>
						    <li>
								<a href="javascript:;" onclick="#">
									<img src="public/site/images/vinhdanhDefault.jpg" alt=""><span class="info-t-vipmem">Top <br>tháng <?php echo $i?></span>
								</a>
							</li>
			            <?php endif; ?>
            <?php endforeach;?>
				<?php endfor?>
				
			</ul>
		</div>
	</div>
</div>