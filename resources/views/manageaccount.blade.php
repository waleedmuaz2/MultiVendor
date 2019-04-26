@extends('layouts.app')
@section('title','Manage Account')
@section('content')
@include('layouts.header')
		<!-- /BREADCRUMB -->


		<div class="section group">

			
			<div class="col span_1_of_3">
					
			<p1 >Personal Profile | <a href="#">EDIT</a></p1><br><br>
					
<P>Asad Ali<br> 
asadzulfiqar28@gmail.com<br><br>
<a href="#">Unsubscribe from our Newsletter</a>
			</div>
			<div class="col span_1_of_3">
				<br><p>
				Address Book |<a href="#"> Add</a><br>
				Save your shipping address here.
			</p>
			</div>
			<div class="col span_1_of_3"><br><br>
			<P>Save your billing address here.</P>
			</div>
		</div>


		
<!-- /NAVIGATION -->
<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
	<div class="col-md-12">
		<div class="order-summary clearfix">
			<div class="section-title">
				<h3 class="title">My Orders</h3>
			</div>
			<table class="shopping-cart-table table">
				<thead>
					<tr>
						<th>Product</th>
						<th></th>
						<th class="text-center">Price</th>
						
						<th class="text-center">Total</th>
						<th class="text-right"></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
						<td class="details">
							<a href="#">Product Name Goes Here</a>
							<ul>
								<li><span>Size: XL</span></li>
								<li><span>Color: Red</span></li>
							</ul>
						</td>
						<td class="price text-center"><strong>$32.50</strong><br><del class="font-weak"><small>$40.00</small></del></td>
						
						<td class="total text-center"><strong class="primary-color">$32.50</strong></td>
						<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
					</tr>
					<tr>
						<td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
						<td class="details">
							<a href="#">Product Name Goes Here</a>
							<ul>
								<li><span>Size: XL</span></li>
								<li><span>Color: Yellow</span></li>
							</ul>
						</td>
						<td class="price text-center"><strong>$32.50</strong></td>
						
						<td class="total text-center"><strong class="primary-color">$32.50</strong></td>
						<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
					</tr>
					<tr>
						<td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
						<td class="details">
							<a href="#">Product Name Goes Here</a>
							<ul>
								<li><span>Size: XL</span></li>
								<li><span>Color: Green</span></li>
							</ul>
						</td>
						<td class="price text-center"><strong>$32.50</strong></td>
						
						<td class="total text-center"><strong class="primary-color">$32.50</strong></td>
						<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
					</tr>
				</tbody>
				<tfoot>
					</tfoot></table>
				</div>
			</div>
		</div>
					  </div></div>
	


@include('layouts.footer')
@endsection