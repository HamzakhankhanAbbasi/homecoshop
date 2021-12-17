<!DOCTYPE html>
<!--header -->
<?php include 'inc/header.php'; ?>
<!-- End-header -->
<style>
    .int_infosidebar_style2{display:none;}
    .fd_review_delivery .nice-select {
    border-radius: 0;
    border: solid 1px #ebebeb;
    padding: 0 26px;
    font-weight: normal;
    color: #767676;
}
</style>
		<!--===Index2 Page Title start===-->
		<div class="int_about_page_title"> 
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
						<div class="int_bread_crumbs">
							<h1>Checkout payment</h1>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
						<div class="int_home_crumbs">
							<ul>
								<li><a href="index2.html">Home // </a><span> Checkout payment</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--===Index2 Page Title End===-->
		
		<!--===Start Index2 Product single Section===-->
		<div class="int_product_checkout"> 
			<div class="container">
				<div class="int_checkout_box">
					<div class="int_white_progress">
						<ul>
							<li class="progress_active">
								<div class="progress">
									<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:100%"></div>
								</div>
								<span>Cart</span>
							</li>
							<li class="progress_active">
								<div class="progress">
									<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:100%"></div>
								</div>
								<span>Delivery</span>
							</li>
							<li>
								<div class="progress">
									<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:100%"></div>
								</div>
								<span>Payment</span>
								<span class="pro_confirm">Confirmation</span>
							</li>
						</ul>
					</div>
					<div class="int_debit_cart">
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="int_credit_cart int_credit_white active" id="creditCard">
									<ul>
										<li>
											<input type="radio" name="p1" id="p1" checked>
											<label for="p1">
											</label>
										</li>
										<li>
											<h4>Credit Cart</h4>
											<p>Safe Money Transfer With Your Bank AccountVisa, Master, Discover, Amex</p>
										</li>
										<li><img src="assets/images/credit_cart_img.png" class="img-fluid" alt="image"/></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="int_credit_cart int_credit_white" id="payPal">
									<ul>
										<li>
											<input type="radio" name="p1" id="p2">
											<label for="p2">
											</label>
										</li>
										<li>
											<h4>paypal</h4>
											<p>Safe Money Transfer With Your Bank AccountVisa, Master, Discover, Amex</p>
										</li>
										<li><img src="assets/images/paypal_img.png" class="img-fluid" alt="image"/></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="fd_review_wrapper" id="fd_wrap">
						<div class="row">
							<div class="col-lg-12">
								<div class="row">
									<div class="col-md-6">
										<div class="form_block">
											<label>Cardholder Name</label>
											<input type="text" class="form_field" placeholder="John Doe">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form_block">
											<label>Card Number</label>
											<input type="text" class="form_field" placeholder="123445787612630">
										</div>
									</div>
									<div class="col-lg-2 col-md-6">
										<div class="form_block">
											<label>Month</label>
											<!--<input id="datepicker" class="form_field" placeholder="01/11/2019"/>-->
											<div class="form-group">
                                                         <select class="form-control space-select  checkout-form-1" id="sel1" name="orders_exp_date">
                                                            <option value="" selected="" disabled="">Month</option>
                                                            <option value="01">01</option>
                                                            <option value="01">02</option>
                                                            <option value="01">03</option>
                                                            <option value="01">04</option>
                                                            <option value="01">05</option>
                                                            <option value="01">06</option>
                                                            <option value="01">07</option>
                                                            <option value="01">08</option>
                                                            <option value="01">09</option>
                                                            <option value="01">10</option>
                                                            <option value="01">11</option>
                                                            <option>12</option>
                                                         </select>
                                                      </div>
										</div>
									</div>
									<div class="col-lg-2 col-md-6">
										<div class="form_block">
											<label>Year</label>
											<select class="form-control space-select  checkout-form-1" id="selectYear" name="orders_exp_date">
                                                            <option value="" selected="" disabled="">Year</option>
                                                         <option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option><option value="2051">2051</option></select>
										</div>
									</div>
										<div class="col-lg-2 col-md-6">
										<div class="form_block">
											<label>CVV Code</label>
											<input type="text" class="form_field" placeholder="222">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="int_shipping_pager">
						<ul>
							<li><a href="rta-cabinet-detail.php"><i class="fas fa-chevron-left"></i> Back To Shipping</a></li>
							<li><a href="checkout-confirmation.php" class="int_btn int_btn_two">Next Step</a></li>
						</ul>
					</div>
					<div class="clear_fix"></div>
				</div>
			</div>				
		</div>
		<!--======End Index2 Product single Section======-->
		
			<!--header -->
<?php include 'inc/footer.php'; ?>
<!-- End-header -->