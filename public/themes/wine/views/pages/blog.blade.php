@extends('layouts.frontend')
@section('title', 'Blog')
@section('content')



	<div id="breadcrumb" class="clearfix">
		<div class="container">
			<!-- Breadcrumb -->
			<div class="breadcrumb clearfix">
				<a class="home" href="{{ url('/') }}" title="Return to Home">Home</a>
				<span class="navigation-pipe" >&gt;</span>
            <span class="navigation_page">
                <a href="{{ url('blog') }}">Blog</a>
            </span>
			</div>
			<!-- /Breadcrumb -->
		</div>
	</div>
	<!-- Content -->
	<div id="columns" class="columns-container">
		<div class="container">
			<div class="row">
				<div id="top_column" class="center_column col-xs-12 col-sm-12 col-md-12"></div>
			</div>
			<div class="row">
				<!-- Left -->
				<div id="left_column" class="column sidebar col-md-3" role="navigation">
					<!-- Block categories module -->
					<div id="categories_block_left" class="block nopadding">
						<h4 class="title_block">
							Categories
						</h4>
						<div class="block_content">
							<ul class="list-block bullet tree dhtml">
								@foreach($menu_cate as $item_cate)
									<li >
										<a href="{{  URL('product',[$item_cate->id,$item_cate->alias]) }}" class="selected" title="Kosher">
											{{ $item_cate->title }}
											<span id="leo-cat-14" style="display:none" class="leo-qty badge"></span>
										</a>
									</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<!-- Center -->
				<div id="center_column" class="col-md-9">
					<div class="inner block clearfix">
						<div id="blog-listing" class="blogs-container">
							<h1 class="blog-title">Lastest Blogs</h1>
							<div class="leading-blog">
								<div class="nocol-lg-12">
									<div class="blog-item">
										<h4>
											<a href="{{ url('blog/blog-1') }}" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum">Urna pretium elit mauris cursus Curabitur at elit Vestibulum</a>
										</h4>
										<div class="blog-meta">
                                        <span class="blog-author">
                                            <span class="icon-user"> Posted By:</span>
                                            <a href="blogcd64.html?author=1" title="Demo Demo">Demo Demo</a>
                                        </span>
                                        <span class="blog-cat">
                                            <span class="icon-list"> In:</span>
                                            <a href="blog/sub-category-1-c4.html" title="Sub Category 1">Sub Category 1</a>
                                        </span>
                                        <span class="blog-created">
                                            <span class="icon-calendar"> On: </span>
			Wednesday, December 18, 2013

                                        </span>
                                        <span class="blog-ctncomment">
                                            <span class="icon-comment"> Comment:</span>
			1

                                        </span>
                                        <span class="blog-hit">
                                            <span class="icon-heart"> Hit:</span>
			1677

                                        </span>
										</div>
										<div class="blog-image">
											<img src="{{ theme('img/leoblog/b/6/900_760/b-blog-4.jpg') }}" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" style="width: 100%"/>
										</div>
										<div class="blog-shortinfo">
											<p>Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus. At Nulla id tincidunt ut sed semper vel Lorem condimentum ornare. Laoreet Vestibulum lacinia massa a commodo habitasse velit Vestibulum tincidunt In. Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla vitae orci convallis condimentum auctor sit dui. Urna pretium elit mauris cursus Curabitur at elit Vestibulum.</p>
											<p>
												<a href="{{ url('blog/blogger') }}" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" class="btn btn-default">Read more</a>
											</p>
										</div>
									</div>
								</div>
								<div class="nocol-lg-12">
									<div class="blog-item">
										<h4>
											<a href="{{ url('blog/blog-2') }}" title="Morbi condimentum molestie Nam enim odio sodales">Morbi condimentum molestie Nam enim odio sodales</a>
										</h4>
										<div class="blog-meta">
                                        <span class="blog-author">
                                            <span class="icon-user"> Posted By:</span>
                                            <a href="blogcd64.html?author=1" title="Demo Demo">Demo Demo</a>
                                        </span>
                                        <span class="blog-cat">
                                            <span class="icon-list"> In:</span>
                                            <a href="blog/sub-category-1-c4.html" title="Sub Category 1">Sub Category 1</a>
                                        </span>
                                        <span class="blog-created">
                                            <span class="icon-calendar"> On: </span>
			Wednesday, December 18, 2013

                                        </span>
                                        <span class="blog-ctncomment">
                                            <span class="icon-comment"> Comment:</span>
			0

                                        </span>
                                        <span class="blog-hit">
                                            <span class="icon-heart"> Hit:</span>
			1225

                                        </span>
										</div>
										<div class="blog-image">
											<img src="{{ theme('img/leoblog/b/7/900_760/b-blog-5.jpg') }}" title="Morbi condimentum molestie Nam enim odio sodales" style="width: 100%"/>
										</div>
										<div class="blog-shortinfo">
											<p>Sed mauris Pellentesque elit Aliquam at lacus interdum nascetur elit ipsum. Enim ipsum hendrerit Suspendisse turpis laoreet fames tempus ligula pede ac. Et Lorem penatibus orci eu ultrices egestas Nam quam Vivamus nibh.</p>
											<p>
												<a href="{{ url('blog/blog-2') }}" title="Morbi condimentum molestie Nam enim odio sodales" class="btn btn-default">Read more</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="secondary-blog">
								<div class="row">
									<div class="col-lg-4">
										<div class="blog-item">
											<h4>
												<a href="{{ url('blog/blog-3') }}" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus">Turpis at eleifend leo mi elit Aenean porta ac sed faucibus</a>
											</h4>
											<div class="blog-meta">
                                            <span class="blog-author">
                                                <span class="icon-user"> Posted By:</span>
                                                <a href="blogcd64.html?author=1" title="Demo Demo">Demo Demo</a>
                                            </span>
                                            <span class="blog-cat">
                                                <span class="icon-list"> In:</span>
                                                <a href="blog/sub-category-1-c4.html" title="Sub Category 1">Sub Category 1</a>
                                            </span>
                                            <span class="blog-created">
                                                <span class="icon-calendar"> On: </span>
			Wednesday, December 18, 2013

                                            </span>
                                            <span class="blog-ctncomment">
                                                <span class="icon-comment"> Comment:</span>
			0

                                            </span>
                                            <span class="blog-hit">
                                                <span class="icon-heart"> Hit:</span>
			903

                                            </span>
											</div>
											<div class="blog-image">
												<img src="{{ theme('img/leoblog/b/8/276_234/b-blog-6.jpg') }}" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus"/>
											</div>
											<div class="blog-shortinfo">
												<p>Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla vitae orci convallis condimentum auctor sit dui. Urna pretium elit mauris cursus Curabitur at elit Vestibulum</p>
												<p>
													<a href="{{ url('blog/blog-3') }}" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" class="btn btn-default">Read more</a>
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="blog-item">
											<h4>
												<a href="{{ url('blog/blog-4') }}" title="Nullam ullamcorper nisl quis ornare molestie">Nullam ullamcorper nisl quis ornare molestie</a>
											</h4>
											<div class="blog-meta">
                                            <span class="blog-author">
                                                <span class="icon-user"> Posted By:</span>
                                                <a href="blogcd64.html?author=1" title="Demo Demo">Demo Demo</a>
                                            </span>
                                            <span class="blog-cat">
                                                <span class="icon-list"> In:</span>
                                                <a href="blog/sub-category-1-c4.html" title="Sub Category 1">Sub Category 1</a>
                                            </span>
                                            <span class="blog-created">
                                                <span class="icon-calendar"> On: </span>
			Wednesday, December 18, 2013

                                            </span>
                                            <span class="blog-ctncomment">
                                                <span class="icon-comment"> Comment:</span>
			0

                                            </span>
                                            <span class="blog-hit">
                                                <span class="icon-heart"> Hit:</span>
			822

                                            </span>
											</div>
											<div class="blog-image">
												<img src="{{ theme('img/leoblog/b/9/276_234/b-blog-7.jpg') }}" title="Nullam ullamcorper nisl quis ornare molestie"/>
											</div>
											<div class="blog-shortinfo">
												<p>Suspendisse posuere, diam in bibendum lobortis, turpis ipsum aliquam risus, sit amet dictum ligula lorem non nisl. Ut vitae nibh id massa vulputate euismod ut quis justo. Ut bibendum sem at massa lacinia, eget elementum ante consectetur. Nulla id pharetra dui, at rhoncus urna. Maecenas non porttitor purus. Nullam ullamcorper nisl quis ornare molestie</p>
												<p>
													<a href="{{ url('blog/blog-4') }}" title="Nullam ullamcorper nisl quis ornare molestie" class="btn btn-default">Read more</a>
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="blog-item">
											<h4>
												<a href="{{ url('blog/blog-6') }}" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum">Urna pretium elit mauris cursus Curabitur at elit Vestibulum</a>
											</h4>
											<div class="blog-meta">
                                            <span class="blog-author">
                                                <span class="icon-user"> Posted By:</span>
                                                <a href="blogcd64.html?author=1" title="Demo Demo">Demo Demo</a>
                                            </span>
                                            <span class="blog-cat">
                                                <span class="icon-list"> In:</span>
                                                <a href="blog/sub-category-1-c4.html" title="Sub Category 1">Sub Category 1</a>
                                            </span>
                                            <span class="blog-created">
                                                <span class="icon-calendar"> On: </span>
			Monday, December 16, 2013

                                            </span>
                                            <span class="blog-ctncomment">
                                                <span class="icon-comment"> Comment:</span>
			0

                                            </span>
                                            <span class="blog-hit">
                                                <span class="icon-heart"> Hit:</span>
			811

                                            </span>
											</div>
											<div class="blog-image">
												<img src="{{ theme('img/leoblog/b/5/276_234/b-blog-3.jpg') }}" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum"/>
											</div>
											<div class="blog-shortinfo">
												<p>Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus. At Nulla id tincidunt ut sed semper vel Lorem condimentum ornare. Laoreet Vestibulum lacinia massa a commodo habitasse velit Vestibulum tincidunt In. Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. </p>
												<p>
													<a href="{{ url('blog/blog-6') }}" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" class="btn btn-default">Read more</a>
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="blog-item">
											<h4>
												<a href="{{ url('blog/blog-5') }}" title="Ipsum cursus vestibulum at interdum Vivamus">Ipsum cursus vestibulum at interdum Vivamus</a>
											</h4>
											<div class="blog-meta">
                                            <span class="blog-author">
                                                <span class="icon-user"> Posted By:</span>
                                                <a href="blogcd64.html?author=1" title="Demo Demo">Demo Demo</a>
                                            </span>
                                            <span class="blog-cat">
                                                <span class="icon-list"> In:</span>
                                                <a href="blog/sub-category-1-c4.html" title="Sub Category 1">Sub Category 1</a>
                                            </span>
                                            <span class="blog-created">
                                                <span class="icon-calendar"> On: </span>
			Wednesday, December  4, 2013

                                            </span>
                                            <span class="blog-ctncomment">
                                                <span class="icon-comment"> Comment:</span>
			0

                                            </span>
                                            <span class="blog-hit">
                                                <span class="icon-heart"> Hit:</span>
			964

                                            </span>
											</div>
											<div class="blog-image">
												<img src="{{ theme('img/leoblog/b/4/276_234/b-blog-2.jpg') }}" title="Ipsum cursus vestibulum at interdum Vivamus"/>
											</div>
											<div class="blog-shortinfo">
												<p>Donec tellus Nulla lorem Nullam elit id ut elit feugiat lacus. Congue eget dapibus congue tincidunt senectus nibh risus Phasellus tristique justo. Justo Pellentesque Donec lobortis faucibus Vestibulum Praesent mauris volutpat vitae metus. Ipsum cursus vestibulum at interdum Vivamus nunc fringilla Curabitur ac quis. Nam lacinia wisi tortor orci quis vitae.</p>
												<p>
													<a href="{{ url('blog/blog-5') }}" title="Ipsum cursus vestibulum at interdum Vivamus" class="btn btn-default">Read more</a>
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="blog-item">
											<h4>
												<a href="{{ url('blog/blog-7') }}" title="At risus pretium urna tortor metus fringilla">At risus pretium urna tortor metus fringilla</a>
											</h4>
											<div class="blog-meta">
                                            <span class="blog-author">
                                                <span class="icon-user"> Posted By:</span>
                                                <a href="blogcd64.html?author=1" title="Demo Demo">Demo Demo</a>
                                            </span>
                                            <span class="blog-cat">
                                                <span class="icon-list"> In:</span>
                                                <a href="blog/sub-category-1-c4.html" title="Sub Category 1">Sub Category 1</a>
                                            </span>
                                            <span class="blog-created">
                                                <span class="icon-calendar"> On: </span>
			Thursday, November 28, 2013

                                            </span>
                                            <span class="blog-ctncomment">
                                                <span class="icon-comment"> Comment:</span>
			2

                                            </span>
                                            <span class="blog-hit">
                                                <span class="icon-heart"> Hit:</span>
			656

                                            </span>
											</div>
											<div class="blog-image">
												<img src="{{ theme('img/leoblog/b/3/276_234/b-blog-1.jpg') }}" title="At risus pretium urna tortor metus fringilla"/>
											</div>
											<div class="blog-shortinfo">
												<p>Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor. At risus pretium urna tortor metus fringilla interdum mauris tempor congue</p>
												<p>
													<a href="{{ url('blog/blog-7') }}" title="At risus pretium urna tortor metus fringilla" class="btn btn-default">Read more</a>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="top-pagination-content clearfix bottom-line">
								<!-- Pagination -->
								<div id="pagination" class="pagination clearfix"></div>
								<div class="product-count">
									Showing 1 - 7 of 7 items
								</div>
								<!-- /Pagination -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection