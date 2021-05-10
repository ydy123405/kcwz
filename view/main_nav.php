<!-- 胶囊导航 -->
		<br />
		<div class="row" id="main-nav">
			<div class="col-md-8 col-md-offset-2">
				<div class="container-fluid">
					<div class="row">
						<ul class="nav nav-tabs">
							<li role="presentation" ><a id="<?php echo (($_SESSION['main_nav']['index']) ? $_SESSION['main_nav']['index'] : "") ?>" href="index.php?p=index" class="main-nav-pre">首页</a></li>
							<li role="presentation" ><a id="<?php echo (($_SESSION['main_nav']['introduce']) ? $_SESSION['main_nav']['introduce'] : "") ?>" href="index.php?p=introduce" class="main-nav-pre">课程介绍</a></li>
							<li role="presentation" ><a id="<?php echo (($_SESSION['main_nav']['team']) ? $_SESSION['main_nav']['team'] : "") ?>" href="index.php?p=team" class="main-nav-pre">教学团队</a></li>
							<li role="presentation" ><a id="<?php echo (($_SESSION['main_nav']['build']) ? $_SESSION['main_nav']['build'] : "") ?>" href="index.php?p=build" class="main-nav-pre">课程建设</a></li>
							<li role="presentation" ><a id="<?php echo (($_SESSION['main_nav']['resources']) ? $_SESSION['main_nav']['resources'] : "") ?>" href="index.php?p=resources" class="main-nav-pre">课程资源</a></li>
							<li role="presentation" ><a id="<?php echo (($_SESSION['main_nav']['q_and_a']) ? $_SESSION['main_nav']['q_and_a'] : "") ?>" href="index.php?p=q_and_a" class="main-nav-pre">问题与答疑</a></li>
							<li role="presentation" ><a id="<?php echo (($_SESSION['main_nav']['study']) ? $_SESSION['main_nav']['study'] : "") ?>" href="index.php?p=study" class="main-nav-pre">课程研究</a></li>
						</ul>
					</div>
				</div>
			</div>
		<!-- 胶囊导航 -->
		</div>