		<header id="header" class="header-section header-position header-border header-bg-dark-fix container-fluid no-padding">			
			<div class="container">
				<div class="row">
					<!-- nav -->
					<nav class="navbar navbar-default ow-navigation">
						<div class="navbar-header">
							<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							 
							<a href="{{route('getIndex')}}" class="navbar-brand">
								<img src="landing/images/logo/favicon.png" width="60" alt="Logo" style="display: inline-block;margin-right: 0;"/>
								<span style="vertical-align: bottom;margin-left: -10px">Pisolution</span>
							</a>
						</div>
						<div class="navbar-collapse collapse navbar-right" id="navbar">
							<ul class="nav navbar-nav navbar-right">
								<li class="active dropdown">
									<a href="{{route('getIndex')}}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Về chúng tôi</a>
								</li>
								
								<li class="dropdown mega-dropdown">
									<a href="" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Dịch vụ</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu mega-menu" role="menu">
										<div class="dropdown-box ">
											<ul>
												<li>
													<a href="{{route('getSolution')}}" title="">Giải pháp phi tập trung</a>
												</li>
												<li>
													<a href="{{route('getAppGame')}}" title="Header 2">Game / App Mobile</a>
												</li>
												<li>
													<a href="landing/header3.html" title="Header 3">Thiết kế website</a>
<!--
													<ul class="dropdown-menu mega-menu menu-2" role="menu">
														<div class="dropdown-box">
															<ul>
																<li class="dropdown">
																	<a href="landing/header1.html" title="Header 1">Web bán hàng</a>
																</li>
																<li>
																	<a href="landing/header2.html" title="Header 2">Web doanh nghiệp</a>
																</li>
																<li>
																	<a href="landing/header2.html" title="Header 2">Nền tảng đấu giá</a>
																</li>
															</ul>
														</div>
													</ul>
-->
												</li>
												<li>
													<a href="https://azfintech.co/" title="" target="_blank">Dịch vụ marketing đa quốc gia</a>
												</li>
											</ul>
										</div>
									</ul>
								</li>
								<li class=""> 
									<a href="{{route('getProduct')}}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
								</li>
								<li class=""> 
									<a href="landing/#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Bảng giá</a>
								</li>
								<li class=""> 
									<a href="{{route('getNew')}}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Tin tức</a>
								</li>
								<li class=""> 
									<a href="landing/#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Liên hệ</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>