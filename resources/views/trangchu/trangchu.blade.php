@extends('layouts.frontLayout.index')
@section('content')
<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Sản phẩm tiêu biểu
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			
			<!-- //product left -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md-12">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">ĐIỆN THOẠI</h3>
						@foreach($dienthoai as $sp)
						
						<div class="col-xs-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{asset('SanPham/small/'.$sp->anh)}}" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{url('/chitietsanpham/'.$sp->id_sanpham)}}" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">{{$sp->ten_sanpham}}</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">{{$sp->price}},000đ</span>
										
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="{{url('/chitietsanpham/'.$sp->id_sanpham)}}" method="post">
											{{csrf_field()}}
											<fieldset>
												
												<a style="box-shadow: 0 0 1px transparent;
    background: #1accfd;
    border-radius: 4px;
    color: #fff;
    letter-spacing: 2px;" href="{{url('/chitietsanpham/'.$sp->id_sanpham)}}" title="">Thêm vào giỏ</a>
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						
						@endforeach
						<div class="clearfix"></div>
					</div>
					<!-- //first section (nuts) -->
					<!-- second section (nuts special) -->
					<div class="product-sec1 product-sec2">
						<div class="col-xs-7 effect-bg">
							<h3 class="">Pure Energy</h3>
							<h6>Enjoy our all healthy Products</h6>
							<p>Get Extra 10% Off</p>
						</div>
						<h3 class="w3l-nut-middle">Nuts & Dry Fruits</h3>
						<div class="col-xs-5 bg-right-nut">
							<img src="images/nut1.png" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- //second section (nuts special) -->
					<!-- third section (oils) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Thời trang</h3>
						@foreach($thoitrang as $sp)
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCarQt_shelfItem">
								<div class="men-thumb-item">
									<img src="{{asset('SanPham/small/'.$sp->anh)}}" alt="" width="100%;">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Chi tiết	</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">{{$sp->mieuta}}</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">{{$sp->price}}000 đ</span>
										<del>$280.00</del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="" method="post">
											{{csrf_field()}}
											<fieldset>
												
												<a style="box-shadow: 0 0 1px transparent;
    background: #1accfd;
    border-radius: 4px;
    color: #fff;
    letter-spacing: 2px;" href="{{url('/chitietsanpham/'.$sp->id_sanpham)}}" title="">Thêm vào giỏ</a>
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						@endforeach
						<div class="clearfix"></div>
					</div>
					<!-- //third section (oils) -->
					<!-- fourth section (noodles) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Nhà cửa-Đời sống</h3>
						@foreach($nhacua as $sp)
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCarQt_shelfItem">
								<div class="men-thumb-item">
									<img src="{{asset('SanPham/small/'.$sp->anh)}}" alt="" width="100%;">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Chi tiết	</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">{{$sp->mieuta}}</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">{{$sp->price}}000 đ</span>
										<del>$280.00</del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="" method="post">
											{{csrf_field()}}
											<fieldset>
												
												<a style="box-shadow: 0 0 1px transparent;
    background: #1accfd;
    border-radius: 4px;
    color: #fff;
    letter-spacing: 2px;" href="{{url('/chitietsanpham/'.$sp->id_sanpham)}}" title="">Thêm vào giỏ</a>
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						@endforeach
						<div class="clearfix"></div>
					</div>
					<!-- //fourth section (noodles) -->
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->
	<!-- special offers -->
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Nổi bật
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
					{{-- @foreach($random as $random)
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="single.html">
									<img src="{{asset('SanPham/small/'.$random->anh)}}" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
										<a href="single.html">{{$random->mieuta}}</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">{{$random->price}}000 đ</span>
										<del>$280.00</del>
									</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="business" value=" " />
											<input type="hidden" name="item_name" value="Aashirvaad, 5g" />
											<input type="hidden" name="amount" value="220.00" />
											<input type="hidden" name="discount_amount" value="1.00" />
											<input type="hidden" name="currency_code" value="USD" />
											<input type="hidden" name="return" value=" " />
											<input type="hidden" name="cancel_return" value=" " />
											<input type="submit" name="submit" value="Add to cart" class="button" />
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</li>
					@endforeach --}}
				</ul>
			</div>
		</div>
	</div>
	<!-- //special offers -->
	<!-- newsletter -->
	<div class="footer-top">
		<div class="container-fluid">
			<div class="col-xs-8 agile-leftmk">
				<h2>Get your Groceries delivered from local stores</h2>
				<p>Free Delivery on your first order!</p>
				<form action="#" method="post">
					<input type="email" placeholder="E-mail" name="email" required="">
					<input type="submit" value="Subscribe">
				</form>
				<div class="newsform-w3l">
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
				</div>
			</div>
			<div class="col-xs-4 w3l-rightmk">
				<img src="images/tab3.png" alt=" ">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
@endsection