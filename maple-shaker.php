<!--header -->
<?php include 'inc/header.php'; ?>
<!-- End-header -->
<style>
   .int_infosidebar_style2{display:none;}
   .tabs {
   max-width: 999px;
   width: 100%;
   margin: 0 auto;
   }
   #tab-button {
   display: table;
   table-layout: fixed;
   width: 100%;
   margin: 0;
   padding: 0;
   list-style: none;
   }
   #tab-button li {
   display: table-cell;
   width: 20%;
   }
   #tab-button li a {
   display: block;
   padding: 25px 20px;
   background: #e84521;
   border: 1px solid #ddd;
   text-align: center;
   color: #000;
   text-decoration: none;
   }
   #tab-button li:not(:first-child) a {
   border-left: none;
   }
   #tab-button li a:hover,
   #tab-button .is-active a {
   border-bottom-color: transparent;
   background: #fff;
   }
   .tab-contents {
   padding: 25px 20px 0px;
   /* border: 1px solid #ddd; */
   }
   .tab-button-outer {
   display: none;
   }
   .tab-contents {
   margin-top: 20px;
   }
   .tab-button-outer {
   position: relative;
   z-index: 2;
   display: block;
   }
   .tab-select-outer {
   display: none;
   }
   .tab-contents {
   position: relative;
   top: -1px;
   margin-top: 0;
   }
   .rta-detail-sec1{
   padding:30px 0;
   }
   .cabinets-head{
   padding: 5px 0px 5px 10px;
   background: #e84521;
   width: 100%;
   margin-bottom: 25px;
   }
   .head-text1{
   font-size:25px;
   color: #fff;
   font-weight:600;
   }
   .base-num-text{
   font-size:18px;
   color:#e84521;
   font-weight:600;
   }
   .description-detail{
   color:#000;
   font-size:16px;
   }
   .description-detail2{
   margin-top:5px;
   color:#000;
   font-size:16px;
   }
   .price{
   font-weight:700 !important;
   }
   .cart-text{
   color:#000;
   font-size:16px;
   }
   /* .border-line{
   max-width:300px;
   height:2px;
   color:#000;
   } */
   .gen-btn {
   color: #fff;
   font-size: 16px;
   line-height: 1;
   font-weight: 400;
   width: 130px;
   height: 40px;
   margin: 0 auto;
   /* border-radius: 10px; */
   border: none;
   outline: none;
   text-decoration: none;
   display: flex;
   justify-content: center;
   align-items: center;
   transition: all 0.25s;
   }
   .gen-btn-2 {
   background: #e84521;
   }
   .gen-btn-2:hover {
   background: #e84521;
   color:#000;
   }
   .quaitity-box {
   display: inline-block;
   padding: 10px 3px;
   border-radius: 10px;
   }
   .quaitity-box .plus-minus {
   position: relative;
   /* padding-left: 100px; */
   }
   .quaitity-box .plus-minus span {
   -webkit-user-select: none;
   -moz-user-select: none;
   -ms-user-select: none;
   cursor: pointer;
   font-size: 18px;
   font-weight: 700;
   }
   .quaitity-box .plus-minus input {
   border: 0;
   width: 2%;
   background: #efefef !important;
   font-size: 17px;
   color: #191919;
   font-weight: 600;
   border-radius: 8px;
   border: 1px solid #c2c2c2;
   text-align: center;
   width: 45px;
   margin: 0 7px;
   outline: none;
   }
   .quaitity-box .plus-minus span {
   -webkit-user-select: none;
   -moz-user-select: none;
   -ms-user-select: none;
   cursor: pointer;
   font-size: 18px;
   font-weight: 700;
   }
   .line {
   background-color: #ccc;
   max-width: 990px;
   height: 1px;
   margin: 0 auto 5px;
   }
   .gen-text-box {
   margin-top: 5px;
   }
   .base-image {
   display: flex;
   justify-content: center;
   align-items: center;
   min-height: 280px;
   }
   .add-btn{
   width:140px !important;
   height: 40px !important;
   display: flex;
   justify-content: center;
   align-items: center;
   }
</style>
<!--===Index2 Page Title start===-->
<div class="int_about_page_title">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
            <div class="int_bread_crumbs">
               <h1>Maple Shaker</h1>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
            <div class="int_home_crumbs">
               <ul>
                  <li><a href="index2.html">Home // </a><span>Maple Shaker</span></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!--===Index2 Page Title End===-->
<section class="rta-detail-sec1">
   <!-- tab-start -->
   <div class="container">
      <div class="tabs">
         <div class="tab-button-outer">
            <ul id="tab-button">
               <li><a href="#tab01">BASE CABINETS</a></li>
               <li><a href="#tab02">WALL CABINETS</a></li>
               <li><a href="#tab03">TALL CABINETS</a></li>
               <li><a href="#tab04">OVEN CABINETS</a></li>
               <li><a href="#tab05">ACCESSORIES</a></li>
            </ul>
         </div>
         <div class="tab-select-outer">
            <select id="tab-select">
               <option value="#tab01">BASE CABINETS</option>
               <option value="#tab02">WALL CABINETS</option>
               <option value="#tab03">TALL CABINETS</option>
               <option value="#tab04">OVEN CABINETS</option>
               <option value="#tab05">ACCESSORIES</option>
            </select>
         </div>
         <!-- tab-01-start -->
         <div id="tab01" class="tab-contents">
            <!-- tab-01-head-start -->
            <div class="row">
               <div class="col-12 col-md-12 col-lg-12">
                  <div class="cabinets-head">
                     <P class="head-text1">Base Pull Spice Rack</P>
                  </div>
               </div>
            </div>
            <!-- tab-01-head-end-->
            <!-- main-row-start -->
            <div class="row">
               <!-- tab-01-image-start -->
               <div class="col-12 col-md-3 col-lg-3 ">
                  <div class="base-image">
                     <img src="assets/images/base-pull-rack.jpg" class="img-fluid">
                  </div>
               </div>
               <!-- tab-01-image-end -->
               <div class="col-12 col-md-9 col-lg-9 ">
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-BPPO6</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-detail-end -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-BPPO9</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
               </div>
            </div>
            <!-- main-row-end -->
            <!-- Base-single-door-start -->
            <!-- tab-01-head-start -->
            <div class="row">
               <div class="col-12 col-md-12 col-lg-12">
                  <div class="cabinets-head">
                     <P class="head-text1">Base Single Door</P>
                  </div>
               </div>
            </div>
            <!-- tab-01-head-end-->
            <!-- main-row-start -->
            <div class="row">
               <!-- tab-01-image-start -->
               <div class="col-12 col-md-3 col-lg-3 ">
                  <div class="base-image">
                     <img src="assets/images/single-door.jpg" class="img-fluid">
                  </div>
               </div>
               <!-- tab-01-image-end -->
               <div class="col-12 col-md-9 col-lg-9 ">
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B09</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-detail-end -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B09F</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B12</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B15</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B18</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B21</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
               </div>
            </div>
            <!-- main-row-end -->
            <!-- Base-single-door-end -->
            <!-- <h2>Tab 1</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quos aliquam consequuntur, esse provident impedit minima porro! Laudantium laboriosam culpa quis fugiat ea, architecto velit ab, deserunt rem quibusdam voluptatum.</p> -->
            <!-- tab-01-div-end -->
         </div>
         <!-- tab-01-end -->
         <div id="tab02" class="tab-contents">
            <!-- tab-2-start -->
            <!-- <div id="tab01" class="tab-contents"> -->
            <div class="row">
               <div class="col-12 col-md-12 col-lg-12">
                  <div class="cabinets-head">
                     <P class="head-text1">Wall Cabinet </P>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12 col-md-3 col-lg-3 ">
                  <div class="base-image">
                     <img src="assets/images/wall-cabinet.jpg" class="img-fluid">
                  </div>
               </div>
               <div class="border-line"></div>
               <div class="col-12 col-md-9 col-lg-9 ">
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-BPPO6</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B21</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B21</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B21</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B21</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
               </div>
            </div>
            <!-- tab-2-end -->
         </div>
         <div id="tab03" class="tab-contents">
            <!-- tab-3-start -->
            <!-- <div id="tab01" class="tab-contents"> -->
            <div class="row">
               <div class="col-12 col-md-12 col-lg-12">
                  <div class="cabinets-head">
                     <P class="head-text1">Tall Cabinet </P>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12 col-md-3 col-lg-3 ">
                  <div class="base-image">
                     <img src="assets/images/tall.jpg" class="img-fluid">
                  </div>
               </div>
               <div class="border-line"></div>
               <div class="col-12 col-md-9 col-lg-9 ">
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-BPPO6</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B21</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B21</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B21</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B21</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B21</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
               </div>
            </div>
            <!-- tab-3-end -->
         </div>
         <div id="tab04" class="tab-contents">
            <!--tab-4-start  -->
            <!-- <div id="tab01" class="tab-contents"> -->
            <div class="row">
               <div class="col-12 col-md-12 col-lg-12">
                  <div class="cabinets-head">
                     <P class="head-text1">Oven </P>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12 col-md-3 col-lg-3 ">
                  <div class="base-image">
                     <img src="assets/images/oven.jpg" class="img-fluid">
                  </div>
               </div>
               <div class="border-line"></div>
               <div class="col-12 col-md-9 col-lg-9 ">
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-BPPO6</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B21</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B21</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
               </div>
            </div>
            <!-- tab-4-end -->
         </div>
         <div id="tab05" class="tab-contents">
            <!-- tab-5-start -->
            <!--tab-4-start  -->
            <!-- <div id="tab01" class="tab-contents"> -->
            <div class="row">
               <div class="col-12 col-md-12 col-lg-12">
                  <div class="cabinets-head">
                     <P class="head-text1">Accessories </P>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12 col-md-3 col-lg-3 ">
                  <div class="base-image">
                     <img src="assets/images/acc.jpg" class="img-fluid">
                  </div>
               </div>
               <div class="border-line"></div>
               <div class="col-12 col-md-9 col-lg-9 ">
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-BPPO6</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B21</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B21</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B21</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B21</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
                  <!-- start -->
                  <!-- line-code-start -->
                  <div class="row">
                     <div class="col-12 col-md-9 col-lg-9">
                        <div class="line"></div>
                     </div>
                  </div>
                  <!-- line-code-end -->
                  <!-- inside-second-detail-start -->
                  <div class="row">
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="base-number">
                           <p class="base-num-text">WS-B21</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="description-detail">Description<br><span>1 Door</span></p>
                           <p class="description-detail2">W-6 In<br><span>D-24 In</span><br><span>H-34.5 In</span></p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="base-number">
                           <p class="base-num-text price">$88.14</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-2 col-lg-2">
                        <div class="cart">
                           <p class="cart-text">Quantity:</p>
                           <div class="quaitity-box">
                              <form>
                                 <div class="plus-minus">
                                    <!-- <span class="minus">-</span> -->
                                    <input type="number" class="count" name="qty" value="1">
                                    <!-- <span class="plus">+</span> -->
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3 col-lg-3">
                        <div class="gen-text-box">
                           <a href="#" class="int_btn int_btn_two add-btn">Add to Cart</a>
                        </div>
                     </div>
                  </div>
                  <!-- inside-second-detail-end -->
                  <!-- end -->
               </div>
            </div>
            <!-- tab-4-end -->
            <!-- tab-5-end -->
         </div>
      </div>
      <!-- tab-end -->
   </div>
</section>
<!--===Start About us page About Section===-->
<!-- <div class="int_about_style2 int_about_section2"> 
   <div class="container">
   	<div class="about_box_wrapper">
   		<div class="row">
   			<div class="col-lx-12 col-lg-6 col-md-12 offset-lg-6 offset-md-0 pl-0 pr-0">
   				<div class="about_contentbox">
   					<div class="about_content">
   						<div class="int_heading">
   							<h4>About US</h4>										
   						</div>
   						<h2 class="about_head1">We Build Our Projects With Your <br><span>Dreams And Ideas.</span></h2>
   						<h5>Elitsed do eiusimod tempor incididunt ut labore et dolore magna aliqua Utnim ad minim veniam, quis nostrixercitation ullamco laboris.</h5>
   						<p class="about_deatils">Consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusimod tempor incididunt ut labor  e et dolore magna aliqua. <u>Ut enimere ad minim veerernireeam qureesgiis nostrixercitation ullamco laboris nisi</u> ut aliquip ex ea commodo consequat. Duis aute irure doerlor in repreheinderit tate velit eesse cillum dolore eu fugiat nulla parereiatur. Excepteur sint occerewaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
   						<p>
   						<p class="about_deatils_two"><u>Ut enim ad minim veniam quis nostrixercitation ullamco laboris nisi</u> ut aliquip eerex earer commodo consequat. Duis aute irure dolor in repreheinderit tate.</p>
   						
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>
   </div>				
   </div> -->
<!--===End About us page About Section===-->
<!-- <div class="int_index2_clnt_team_test_back"> 
   <div class="container"> 
   
     <div class="int_testimonial_slide2">
       <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
         <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-1080px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 1080px;">
             <div class="int_testimonial2_flex">
               <div class="int_content_img"> <img src="assets/images/index2_test2img2.jpg" class="img-fluid" alt="images"> </div>
               <div class="int_content_text2">
                 <div class="int_qoute_svg"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 298.667 298.667">
                   <g>
                     <polygon points="0,170.667 64,170.667 21.333,256 85.333,256 128,170.667 128,42.667 0,42.667 "></polygon>
                     <polygon points="170.667,42.667 170.667,170.667 234.667,170.667 192,256 256,256 298.667,170.667 298.667,42.667 "></polygon>
                   </g>
                   </svg> </div>
                 <h4>Our Testimonial</h4>
                 <h2>What Clients Says</h2>
                 <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 	enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatatyujklmmknnnnnn. </p>
                 <h5>Rebecca Ruth</h5>
                 <h6>Project Manager</h6>
               </div>
             </div>
           </div>
           <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 1080px;">
             <div class="int_testimonial2_flex">
               <div class="int_content_img"> <img src="assets/images/index2_test2img.jpg" class="img-fluid" alt="images"> </div>
               <div class="int_content_text2">
                 <div class="int_qoute_svg"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 298.667 298.667">
                   <g>
                     <polygon points="0,170.667 64,170.667 21.333,256 85.333,256 128,170.667 128,42.667 0,42.667 "></polygon>
                     <polygon points="170.667,42.667 170.667,170.667 234.667,170.667 192,256 256,256 298.667,170.667 298.667,42.667 "></polygon>
                   </g>
                   </svg> </div>
                 <h4>Our Testimonial</h4>
                 <h2>What Clients Say</h2>
                 <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 	enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat. </p>
                 <h5>John William</h5>
                 <h6>Project Manager</h6>
               </div>
             </div>
           </div>
           <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 1080px;">
             <div class="int_testimonial2_flex">
               <div class="int_content_img"> <img src="assets/images/index2_test2img2.jpg" class="img-fluid" alt="images"> </div>
               <div class="int_content_text2">
                 <div class="int_qoute_svg"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 298.667 298.667">
                   <g>
                     <polygon points="0,170.667 64,170.667 21.333,256 85.333,256 128,170.667 128,42.667 0,42.667 "></polygon>
                     <polygon points="170.667,42.667 170.667,170.667 234.667,170.667 192,256 256,256 298.667,170.667 298.667,42.667 "></polygon>
                   </g>
                   </svg> </div>
                 <h4>Our Testimonial</h4>
                 <h2>What Clients Says</h2>
                 <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 	enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatatyujklmmknnnnnn. </p>
                 <h5>Rebecca Ruth</h5>
                 <h6>Project Manager</h6>
               </div>
             </div>
           </div>
         <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 1080px;">
             <div class="int_testimonial2_flex">
               <div class="int_content_img"> <img src="assets/images/index2_test2img.jpg" class="img-fluid" alt="images"> </div>
               <div class="int_content_text2">
                 <div class="int_qoute_svg"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 298.667 298.667">
                   <g>
                     <polygon points="0,170.667 64,170.667 21.333,256 85.333,256 128,170.667 128,42.667 0,42.667 "></polygon>
                     <polygon points="170.667,42.667 170.667,170.667 234.667,170.667 192,256 256,256 298.667,170.667 298.667,42.667 "></polygon>
                   </g>
                   </svg> </div>
                 <h4>Our Testimonial</h4>
                 <h2>What Clients Say</h2>
                 <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 	enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat. </p>
                 <h5>John William</h5>
                 <h6>Project Manager</h6>
               </div>
             </div>
           </div></div> -->
<!--=== Add Arrows ===-->
<!-- <div class="int_team2_slider_arrow">
   <div class="swiper-button-next swiper-button-white" tabindex="0" role="button" aria-label="Next slide"></div>
   <div class="swiper-button-prev swiper-button-white" tabindex="0" role="button" aria-label="Previous slide"></div>
   </div>
   <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
   </div>
   </div> -->
<!--===Index2 Testimonial Section end===--> 
<!-- </div> -->
<!--===Index2 About us page Testimonial end===-->
<!--===Start Footer Section===-->
<!--header -->
<?php include 'inc/footer.php'; ?>
<!-- End-header -->