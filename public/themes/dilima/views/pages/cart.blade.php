@extends('layouts.frontend')
@section('title','Shopping Cart')
@section('content')
	<div class="page-content">
		<!-- Start breadcume area -->
		<div class="breadcume-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="breadcrumb">
							<a title="Return to Home" href="index-2.html" class="home"><i class="fa fa-home"></i></a>
							<span class="navigation-pipe">&gt;</span>
							<a title="Automotive & Motorcycle" href="index-2.html">My account</a>
							<span class="navigation-pipe">&gt;</span>
							Shopping cart
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End breadcume area -->
		<div class="cart-page-content">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<h4 class="cart-title">Shopping cart</h4>
						<div class="table-responsive">
							<table class="cart-table">
								<thead>
								<tr>
									<th>Product</th>
									<th>Product name</th>
									<th></th>
									<th>Unit Price</th>
									<th>Qty</th>
									<th>Subtotal</th>
									<th></th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										<a href="single-product.html"><img alt="" class="img-responsive" src="img/product/faded-short-sleeves-tshirt.jpg"></a>
									</td>
									<td>
										<h6><a href="single-product.html">Printed Chiffon Dress</a></h6>
									</td>
									<td><a href="#">Edit</a></td>
									<td>
										<div class="cart-price">$50.00</div>
									</td>
									<td>
										<form>
											<input type="text" placeholder="1">
										</form>
									</td>
									<td>
										<div class="cart-subtotal">$50.00</div>
									</td>
									<td><i class="fa fa-trash"></i></td>
								</tr>
								<tr>
									<td>
										<a href="single-product.html"><img alt="" class="img-responsive" src="img/product/printed-chiffon-dressac.jpg"></a>
									</td>
									<td>
										<h6><a href="single-product.html">Blouse</a></h6>
									</td>
									<td><a href="#">Edit</a></td>
									<td>
										<div class="cart-price">$32.40</div>
									</td>
									<td>
										<form>
											<input type="text" placeholder="1">
										</form>
									</td>
									<td>
										<div class="cart-subtotal">$32.40</div>
									</td>
									<td><i class="fa fa-trash"></i></td>
								</tr>
								<tr>
									<td>
										<a href="single-product.html"><img alt="" class="img-responsive" src="img/product/printed-summer-dress.jpg"></a>
									</td>
									<td>
										<h6><a href="single-product.html">Printed Summer Dress</a></h6>
									</td>
									<td><a href="#">Edit</a></td>
									<td>
										<div class="cart-price">$36.60</div>
									</td>
									<td>
										<form>
											<input type="text" placeholder="1">
										</form>
									</td>
									<td>
										<div class="cart-subtotal">$36.60</div>
									</td>
									<td><i class="fa fa-trash"></i></td>
								</tr>
								<tr>
									<td colspan="7" class="actions">
										<div class="cartPage-btn">
											<ul>
												<li><a href="#" class="cbtn">Continue Shopping</a></li>
												<li><a href="#" class="cbtn">UPDATE SHOPPING CART</a></li>
												<li><a href="#" class="cbtn">CLEAR SHOPPING CART</a></li>
											</ul>
										</div>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- start cart discount code area -->
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="cart-discount-code-area">
							<h2>Discount codes</h2>
							<p>Enter your coupon code if you have one.</p>
							<input type="text">
							<a href="#">Apply coupon</a>
						</div>
					</div>
					<!-- End cart discount code area -->
				</div>
				<div class="row">
					<!-- Start Stmate shoping and cart -->
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="Stmate-shoping-and-cart">
							<h2>Estimate Shipping and Tax</h2>
							<p>Enter your destination to get a shipping estimate.</p>
							<form>
								<div class="shippingTitle"><p><span>*</span>Country</p></div>
								<div class="selectOption">
									<div class="selectParent">
										<select>
											<option value="">Please Select</option>
											<option value="1">Country 1</option>
											<option value="2">Country 2</option>
											<option value="1">Country 3</option>
											<option value="2">Country 4</option>
											<option value="1">Country 5</option>
											<option value="2">Country 6</option>
											<option value="1">Country 7</option>
											<option value="2">Country 8</option>
										</select>
									</div>
								</div>
								<div class="shippingTitle"><p>State/Province</p></div>
								<div class="selectOption">
									<div class="selectParent">
										<select>
											<option value="">Please Select</option>
											<option value="1">Region 1</option>
											<option value="2">Region 2</option>
											<option value="1">Region 3</option>
											<option value="2">Region 4</option>
											<option value="1">Region 5</option>
											<option value="2">Region 6</option>
											<option value="1">Region 7</option>
											<option value="2">Region 8</option>
										</select>
									</div>
								</div>
								<div class="shippingTitle"><p>Zip/Postal Code</p></div>
								<div class="selectOption">
									<input type="text">
								</div>
								<button type="submit">Get Quotes</button>
							</form>
						</div>
					</div>
					<!-- End Stmate shoping and cart -->
				</div>
			</div>
		</div>
	</div>
	<!-- End page content -->
	<!-- Start brand and client -->
	<div class="brand-and-client">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="area-title">
						<h3>BRAND & CLIENTS</h3>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="brand-logo featured-product-area">
						<div class="clients">
							<a href="#"><img src="img/brand-logo/1.jpg" alt=""></a>
						</div>
						<div class="clients">
							<a href="#"><img src="img/brand-logo/2.jpg" alt=""></a>
						</div>
						<div class="clients">
							<a href="#"><img src="img/brand-logo/3.jpg" alt=""></a>
						</div>
						<div class="clients">
							<a href="#"><img src="img/brand-logo/4.jpg" alt=""></a>
						</div>
						<div class="clients">
							<a href="#"><img src="img/brand-logo/5.jpg" alt=""></a>
						</div>
						<div class="clients">
							<a href="#"><img src="img/brand-logo/6.jpg" alt=""></a>
						</div>
						<div class="clients">
							<a href="#"><img src="img/brand-logo/1.jpg" alt=""></a>
						</div>
						<div class="clients">
							<a href="#"><img src="img/brand-logo/3.jpg" alt=""></a>
						</div>
						<div class="clients">
							<a href="#"><img src="img/brand-logo/4.jpg" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End brand and client -->
	<!-- Start blog area -->
	<div class="blog-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="area-title">
						<h3>The Blog</h3>
					</div>
				</div>
				<div class="blog-box featured-product-area">
					<div class="col-sm-4">
						<a href="single-blog.html"><img src="img/blog/4-home-default.jpg" alt=""></a>
						<span class="blog-date">2015-08-12 04:40:21</span>
						<div class="blog-info">
							<h3><a href="single-blog.html">Share the Love for PrestaShop 1.6</a></h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
							<a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-sm-4">
						<a href="single-blog.html"><img src="img/blog/3-home-default.jpg" alt=""></a>
						<span class="blog-date">2015-08-12 04:40:21</span>
						<div class="blog-info">
							<h3><a href="single-blog.html">Answers to your Questions about PrestaShop</a></h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
							<a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-sm-4">
						<a href="single-blog.html"><img src="img/blog/2-home-default.jpg" alt=""></a>
						<span class="blog-date">2015-08-12 04:40:21</span>
						<div class="blog-info">
							<h3><a href="single-blog.html">What is Bootstrap? – The History and the Hype</a></h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
							<a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-sm-4">
						<a href="single-blog.html"><img src="img/blog/1-home-default.jpg" alt=""></a>
						<span class="blog-date">2015-08-12 04:40:21</span>
						<div class="blog-info">
							<h3><a href="single-blog.html">From Now we are certified web agency</a></h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
							<a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection