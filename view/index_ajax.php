<!-- 空白部分 -->
		<div class="blank-md"></div>
		
		<!-- 主区域 -->
		<!-- 最外框 -->
		<div id="main">
			<!-- 第一行 -->
			<div class="row" id="main_row_1">
				<div class="col-md-8 col-md-offset-2">
					<!-- 左边 -->
					<div class="col-md-6" style="">
						<!-- 课程简介标题 -->
						<div class="row">
							<div class="col-md-8">
								<span class="main-header-font-1">课程简介</span>
								<span class="main-header-font-2">&nbsp;Introduce</span>
							</div>
						</div>
						<!-- 课程简介分割线 -->
						<div class="row">
							<ul class="nav nav-list"><li class="li-divider"></li></ul>
						</div>
						<!-- 空白行 -->
						<div class="row blank-small"></div>
						<!-- 课程简介内容 -->
						<div class="row" id="course_idc">
							<p class="text-left p-small" id="course_idc_p">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加载中......
								<script type="text/javascript">
									$.ajax({
										url: "php/ajax/a_index_ajax.php",
										async: true,
										data: {column:"课程简介"},
										success: function(data){
										//console.log(data)
										data = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+data
										$("#course_idc_p").html(data)
										},
										error: function(data){
										//console.log(data)
										}
									})
								</script>
							</p>
						</div>
					<!-- 左边 -->
					</div>
					<!-- 右边 -->
					<div class="col-md-5 col-md-offset-1" style="">
						<!-- 课程负责人标题 -->
						<div class="row">
							<div class="col-md-8">
								<span class="main-header-font-1">课程负责人</span>
								<span class="main-header-font-2">&nbsp;Principal</span>
							</div>
						</div>
						<!-- 课程负责人分割线 -->
						<div class="row">
							<ul class="nav nav-list"><li class="li-divider"></li></ul>
						</div>
						<!-- 空白行 -->
						<div class="row blank-small"></div>
						<!-- 课程负责人内容 -->
						<div class="row" id="course_pcl">
							<p class="text-left p-small" id="course_pcl_p">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加载中......
								<script type="text/javascript">
									$.ajax({
										url: "php/ajax/a_index_ajax.php",
										async: true,
										data: {column:"课程负责人"},
										success: function(data){
										//console.log(data)
										data = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+data
										$("#course_pcl_p").html(data)
										},
										error: function(data){
										//console.log(data)
										}
									})
								</script>
							</p>
						</div>
					<!-- 右边 -->
					</div>
				</div>
			<!-- 第一行row -->
			</div>
			
			<!-- 空白部分 -->
			<div class="row blank-big"></div>
			
			<!-- 第二行 -->
			<div class="row" id="main_row_2">
				<div class="col-md-8 col-md-offset-2">
					<!-- 左边 -->
					<div class="col-md-6">
						<!-- 课程动态标题 -->
						<div class="row  main-header-theme">
							<div class="col-md-8">
								<span class="main-header-font-1" style="color: #FFFFFF;">课程动态</span>
								<span class="main-header-font-2" style="color: #EEEEEE;">&nbsp;Dynamic State</span>
							</div>
						</div>
						
						<!-- 课程动态内容 -->
						<div class="row main-row-2-content">
							<div class="col-md-8">
								<ul class="main-row-2-content-list">
									<!-- <li><span class="glyphicon glyphicon-play theme-font" style="font-size: 12x;"></span><a>&nbsp;&nbsp;数据结构设计大赛</a></li> -->
									<!-- max8个 -->
									<li><a>>&nbsp;&nbsp;数据结构设计大赛（2013/11/01）</a></li>
									<li><a>>&nbsp;&nbsp;数据结构研讨大会（2013/11/01）</a></li>
									<li><a>>&nbsp;&nbsp;数据结构研讨大会（2013/11/01）</a></li>
									<li><a>>&nbsp;&nbsp;数据结构研讨大会（2013/11/01）</a></li>
									<li><a>>&nbsp;&nbsp;数据结构研讨大会（2013/11/01）</a></li>
									<li><a>>&nbsp;&nbsp;数据结构研讨大会（2013/11/01）</a></li>
									<li><a>>&nbsp;&nbsp;数据结构研讨大会（2013/11/01）</a></li>
									<li><a>>&nbsp;&nbsp;数据结构研讨大会（2013/11/01）</a></li>
									<li><a>>&nbsp;&nbsp;数据结构研讨大会（2013/11/01）</a></li>
									<li><a>>&nbsp;&nbsp;数据结构研讨大会（2013/11/01）</a></li>
								</ul>
							</div>
							
						</div>
						
						<!-- 课程动态底部 -->
						<div class="row main-bottom-theme">
							<div class="col-md-12 text-right">
								<span class="main-header-font-2" style="color: #EEEEEE;">MORE></span>
							</div>
						</div>
					<!-- 左边 -->
					</div>
					
					<!-- 空白部分 -->
					<div class="row blank-big hidden-lg hidden-md"></div>
					
					<!-- 右边 -->
					<div class="col-md-5 col-md-offset-1">
						<!-- 教学资源标题 -->
						<div class="row  main-header-theme">
							<div class="col-md-8">
								<span class="main-header-font-1" style="color: #FFFFFF;">教学资源</span>
								<span class="main-header-font-2" style="color: #EEEEEE;">&nbsp;Resource</span>
							</div>
						</div>
						<!-- 教学资源内容 -->
						<div class="row main-row-2-content">
							<br />
							<div class="row text-right">
								<div class="col-md-5 col-md-offset-1">
									<div class="main-row-2-img">
										<img src="img/jxkj.png" width="100%" height="100%"/>
									</div>
								</div>
								<div class="col-md-5">
									<div class="main-row-2-img">
										<img src="img/jxsp.png" width="100%" height="100%"/>
									</div>
								</div>
							</div>
							<br />
							<div class="row text-right hidden-sm hidden-xs">
								<div class="col-md-5 col-md-offset-1">
									<div class="main-row-2-img">
										<img src="img/jxkj.png" width="100%" height="100%"/>
									</div>
								</div>
								<div class="col-md-5 hidden-sm hidden-xs">
									<div class="main-row-2-img">
										<img src="img/jxsp.png" width="100%" height="100%"/>
									</div>
								</div>
							</div>
						</div>
						
						<!-- 课程动态底部 -->
						<div class="row main-bottom-theme">
							<div class="col-md-12 text-right">
								<span class="main-header-font-2" style="color: #EEEEEE;">MORE></span>
							</div>
						</div>
					<!-- 右边 -->
					</div>
				</div>
			<!-- 第二行row -->
			</div>
			
			<!-- 空白部分 -->
			<div class="row blank-big"></div>
			
			<!-- 第三行 -->
			<div class="row" id="main_row_3">
				<div class="col-md-8 col-md-offset-2">
					<!-- 课程组成员标题 -->
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-8">
								<span class="main-header-font-1">课程组成员</span>
								<span class="main-header-font-2">&nbsp;Members</span>
							</div>
						</div>
						<!-- 空白行 -->
						<div class="row">
							<div class="row blank-small"></div>
						</div>
						<!-- 课程组成员内容 -->
						<div class="row main-row-3-content">
							<div class="col-md-1 hidden-sm hidden-xs" style="height: 150px;line-height: 175px;"><span class="glyphicon glyphicon-chevron-left theme-font" style="font-size: 36px;"></span></div>
							<div class="col-md-10 col-sm-10 col-xs-10">
								<div class="row" style="height: 100px;margin-top: 25px;">
									<div class="col-md-2"><img class="main-row-3-content-img" src="img/member-1.png"/></div>
									<div class="col-md-2"><img class="main-row-3-content-img" src="img/member-2.png"/></div>
									<div class="col-md-2"><img class="main-row-3-content-img" src="img/noimg.png"/></div>
									<div class="col-md-2"><img class="main-row-3-content-img" src="img/noimg.png"/></div>
									<div class="col-md-2"><img class="main-row-3-content-img" src="img/noimg.png"/></div>
									<div class="col-md-2"><img class="main-row-3-content-img" src="img/noimg.png"/></div>
								</div>
							</div>
							<div class="col-md-1 hidden-sm hidden-xs" style="height: 150px;line-height: 175px;"><span class="glyphicon glyphicon-chevron-right theme-font" style="font-size: 36px;"></span></div>
						</div>
					</div>
				</div>
			<!-- 第三行 -->
			</div>
		</div>
		
		<!-- 空白部分 -->
		<div class="row blank-big"></div>
		
		<!-- 第四行 -->
		<div class="row" id="main_row_4">
			<div class="col-md-8 col-md-offset-2">
				<div class="col-md-12">
					<!-- 标题行 -->
					<div class="row" style="height: 25px;">
						<div class="col-md-4"><div class="search-line"></div></div>
						<div class="col-md-offset-1 col-md-2" style="text-align: center;"><span class="main-header-font-1">全站搜索</span></div>
						<div class="col-md-offset-1 col-md-4"><div class="search-line"></div></div>
					</div>
					<!-- 搜索主行 -->
					<div class="row">
						<div class="blank-md"></div>
					</div>
					<div class="row">
						<div class="col-md-offset-3 col-md-6">
							<div class="row">
								<div class="col-md-8" style="height: 30px;"><input class="search-main" placeholder="  请输入搜索内容" id="search_in"/></div>
								<div class="col-md-4" style="height: 30px;"><input class="search-btn" type="button" value="搜索" id="search_btn"/></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 空白部分 -->
		<div class="row">
			<div class="blank-big"></div>
		</div>
		
		<!-- 友情链接 -->
		<div class="row" id="friend-link">
			<div class="col-md-8 col-md-offset-2">
				<div class="container-fluid">
					<span class="glyphicon glyphicon-send theme-font"></span>
					<span>友情链接：</span>
					<a href="https://www.cqnu.edu.cn/index.htm" target="_blank">重庆师范大学</a>
					<a href="https://www.baidu.com" target="_blank">百度</a>
				</div>
			</div>
		</div>