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
							<h1>Checkout delivery</h1>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
						<div class="int_home_crumbs">
							<ul>
								<li><a href="index2.html">Home // </a><span> Checkout delivery</span></li>
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
							<li>
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
					<div class="fd_review_wrapper fd_review_delivery">
					  <div class="billing_address mb-4">
						<h4 class="border_btm_input">Billing Details</h4>
						<div class="row">
							<div class="col-md-6">
								<div class="form_block">
									<input type="text" class="form_field" placeholder="Name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form_block">
									<input type="text" class="form_field" placeholder="Email">
								</div>
							</div>
    							<div class="col-md-12">
            						<div class="form_block">
            							<input type="text" class="form_field" placeholder="Address01">
            						</div>
            					</div>
								<div class="col-md-12">
        							<div class="form_block">
        								<input type="text" class="form_field" placeholder="Address02">
        							</div>
							</div>
								<div class="col-md-4">
								<select class="nice-select wide">
								  <option data-display="Country">Country</option>
								  <option value="1">Option 1</option>
								  <option value="2">Option 2</option>
								  <option value="4">Option 3</option>
								</select>
							</div>
									<div class="col-md-4">
								<select class="nice-select wide">
								  <option data-display="State">State</option>
								  <option value="1">Option 1</option>
								  <option value="2">Option 2</option>
								  <option value="4">Option 3</option>
								</select>
							</div>
								<div class="col-md-4">
								<select class="nice-select wide">
								  <option data-display="Pin Code">Pin Code</option>
								  <option value="1">Option 1</option>
								  <option value="2">Option 2</option>
								  <option value="4">Option 3</option>
								</select>
							</div>
							
							
						  </div>
						</div>
						<!--check-box-start-->
						<div class="row">
						  <div class="col-12 col-md-12 col-lg-12"> 
						    <div class="form-check toggleBillingDetails">
                                <input type="checkbox" id="chkBtn" class="form-check-input mr-2" required>
                                <label class="form-check-label" for="chkBtn">Same As Shipping Address</label>
                            </div>
                          </div>   
                            
                        </div>    
						<!--checkbox-end-->
						<div class="shipping_address">
    						<h4 class="border_btm_input">shipping address</h4>
    						<div class="row">
    							<div class="col-md-6">
    								<div class="form_block">
    									<input type="text" class="form_field" placeholder="First Name">
    								</div>
    							</div>
    							<div class="col-md-6">
    								<div class="form_block">
    									<input type="text" class="form_field" placeholder="Last Name">
    								</div>
    							</div>
    							<div class="col-md-12">
    								<div class="form_block">
    									<input type="text" class="form_field" placeholder="Address01">
    								</div>
    							</div>
    							<div class="col-md-12">
    								<div class="form_block">
    									<input type="text" class="form_field" placeholder="Address02">
    								</div>
    							</div>
    							<div class="col-md-4">
    								<select class="nice-select wide">
    								  <option data-display="Country">Country</option>
    								  <option value="1">Option 1</option>
    								  <option value="2">Option 2</option>
    								  <option value="4">Option 3</option>
    								</select>
    							</div>
    							<div class="col-md-4">
    								<select class="nice-select wide">
    								  <option data-display="State">State</option>
    								  <option value="1">Option 1</option>
    								  <option value="2">Option 2</option>
    								  <option value="4">Option 3</option>
    								</select>
    							</div>
    							<div class="col-md-4">
    								<select class="nice-select wide">
    								  <option data-display="Pin Code">Pin Code</option>
    								  <option value="1">Option 1</option>
    								  <option value="2">Option 2</option>
    								  <option value="4">Option 3</option>
    								</select>
    							</div>
    						</div>
					    </div>
					</div>
					<div class="int_shipping_pager mb-4">
						<ul>
							<li><a href="rta-cabinet-detail.php"><i class="fas fa-chevron-left"></i> Back To Shipping</a></li>
							<li><a href="checkout-payment.php" class="int_btn int_btn_two">Next Step</a></li>
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