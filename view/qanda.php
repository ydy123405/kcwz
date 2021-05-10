<!-- 主区域 -->
		<div class="row" id="main_qa">
			<div class="col-md-8 col-md-offset-2 main-article">
			<?php $qa=get_Qa();$n=1;?>
				<?php foreach ($qa as $key => $value){?>
				<!-- 空白部分 -->
				<div class="blank-md"></div>
				<div class="container-fluid">
					<div id="<?php echo "main_qa_".$n;?>">
						<div class="row">
							<div class="main-qa-q">
								<span class="glyphicon glyphicon-triangle-bottom"></span>
								<?php echo $value['title'];?>
							</div>
						</div>
						<div class="row">
							<div class="main-qa-a">
								<div class="blank-small"></div>
								<div class="blank-small"></div>
								<p><?php echo change_Content_to_Html_in_Qa($value['content']);?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<?php $n++;};?>
			</div>
		</div>