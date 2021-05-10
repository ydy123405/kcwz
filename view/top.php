<!-- top区 -->
		<div class="row" id="top">
			<!-- top区中安全区 -->
			<div class="col-md-8 col-md-offset-2" style="background-color: none;">
				<!-- 安全区中导航条 -->
				<nav class="navbar-default" id="top-nav">
					<div class="container-fluid">
						<!-- 导航条中logo -->
						<div class="navbar-header">
							<a class="navbar-brand" href="#">
								<img src="img/logo.png" height="100%">
							</a>
						<!-- 导航条中logo -->
						</div>
						<!-- 导航条中主题选择 -->
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown" >
								<a id="theme" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">更换主题<span class="caret"></span></a>
								<ul class="dropdown-menu" style="text-align: center;">
									<!-- <li><button onclick="get_theme(this)" class="btn-block" style="border: none;background-color: #0E4D9F;"><a href="#" style="color: #ffffff;">蓝色</a></button></li> -->
									<li><a href="#" style="color: #0E4D9F;" id="theme_blue">蓝色</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#" style="color: #CF0000;" id="theme_red">红色</a></li>
									<!-- <li><button onclick="get_theme(this)" class="btn-block" style="border: none;background-color: #CF0000;"><a href="#" style="color: #ffffff;">红色</a></button></li> -->
									<li role="separator" class="divider"></li>
									<li><a href="#" style="color: #36A285;" id="theme_green">绿色</a></li>
									<!-- <li><button onclick="get_theme(this)" class="btn-block" style="border: none;background-color: #216352;"><a href="#" style="color: #ffffff;">绿色</a></button></li> -->
								</ul>
							</li>
						<!-- 导航条中主题选择 -->
						</ul>
					</div>
				<!-- 安全区中导航条 -->
				</nav>
			<!-- top区中安全区 -->
			</div>
		<!-- top区 -->
		</div>
		
		<!-- banner -->
		<div class="row" id="banner">
			<!-- banner1 -->
			<div class="col-md-8 col-md-offset-2" style="overflow: hidden;height: 360px;">
				<!-- <img src="img/banner20210408.jpg" height="100%" width="100%"/>
				<img src="img/banner20201217.jpg" width="100%" height="100%"/>
				<img src="img/banner20210305fang.jpg" width="100%" height="100%"/>
				<img src="img/banner20210309.jpg" width="100%" height="100%"/> -->
				<div id="banner_carousel" class="carousel slide">
					
					<!-- 轮播图片 -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="img/banner20210408.jpg" height="100%" width="100%"/>
						</div>
						<div class="item">
							<img src="img/banner20201217.jpg" width="100%" height="100%"/>
						</div>
						<div class="item">
							<img src="img/banner20210305fang.jpg" width="100%" height="100%"/>
						</div>
						<div class="item">
							<img src="img/banner20210309.jpg" width="100%" height="100%"/>
						</div>
					</div>
					
					<!-- 左右切换按钮 -->
					<a class="left carousel-control" href="#banner_carousel" data-slide="prev" role="button">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="right carousel-control" href="#banner_carousel" data-slide="next" role="button">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
			</div>
		</div>
		<!-- banner下面小按钮 -->
		<div class="row" id="banner_btn">
			<div class="col-md-8 col-md-offset-2">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-3" id="banner_1" data-target="#banner_carousel" data-slide-to="0"></div>
						<div class="col-md-3 col-sm-3 col-xs-3" id="banner_2" data-target="#banner_carousel" data-slide-to="1"></div>
						<div class="col-md-3 col-sm-3 col-xs-3" id="banner_3" data-target="#banner_carousel" data-slide-to="2"></div>
						<div class="col-md-3 col-sm-3 col-xs-3" id="banner_4" data-target="#banner_carousel" data-slide-to="3"></div>
					</div>
				</div>
			</div>
		<!-- banner下面小按钮 -->
		</div>
		<!-- banner -->