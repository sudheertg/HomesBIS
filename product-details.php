<!doctype html>
<html lang="en">

<head>
	<title>Arabia House</title>
	<link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/zoom/Vendor/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="assets/zoom/Vendor/fancybox/helpers/jquery.fancybox-thumbs.css" />
	<link href="assets/zoom/zoom.css" rel="stylesheet" />
	<style>
		section.prdouct-detail ul.no-pad.left__arrow li {
  
    padding-left: 19px !important;
  
}
		.col-md-5.project-detailes ul.no-pad.left__arrow li {
    line-height: 27px !important;
}
		.nav-link {
    display: block;
    padding: 0px 0px !important;
    margin-bottom: 10px !important;
}
		.nav-tabs .nav-link {
    border: 0px solid transparent !important;
   
		}
		.col-10{
			padding: 0px !important;
		}
		.tab-content {
     height: 545px;

    width: 544px;
    background: #ffffff;
    border-radius: 0px;
    overflow: hidden;
}
		.tab-content img{
			width: 100%;
			height: 100%;
		}
		.nav-tabs {
    border-bottom: 0px solid #dee2e6 !important;
}
.col-2 a.nav-link.active {
    /* height: 80px !important; */
    /* width: 80px !important; */
    /* background: aqua; */
    /* margin-bottom: 7px !important; */
    border-radius: 0px !important;
    overflow: hidden;
    border-right: 4px solid #00b100 !important;
    background: #00b100 !important;
}

		.gal_box_img_head p {
    color: #fff;
    margin: 0;
    font-size: 14px !important;
			
    padding: 6px 20px !important;
}
		img.zoomLeens {
    position: absolute !important;
    bottom: 28px !important;
    z-index: 9999 !important;
    right: 0px !important;
    width: 40px !important;
    height: 42px !important;
    transform: scale(1) !important;
			opacity: 0;
			transition: all 0.5s ease;
}
		.gal_box_img:hover img.zoomLeens{
			opacity: 1 !important;
			right: 27px !important;
		}
		i.fa.fa-plus {
    color: #ccc !important;
}
		
		button.btn.btn-link.collapsed{
			text-decoration: none !important;
		}
		section.prdouct-detail .carousel-control-next, section.prdouct-detail .carousel-control-prev {
    position: absolute;
    top: 11px !important;
		}
		section.prdouct-detail .row.bread .col-md-2 .pull-right:after {

    top: 0px !important;
  
}
		img.product-zoom {
     position: absolute;
    z-index: 999;
    width: 40px;
    height: 42px;
    right: 40px;
    bottom: 27px;
    cursor: pointer;
    /* transform: translate(-50%,-50%); */
    opacity: 0;
    transition: all 0.5s ease;
}
		.tab-pane:hover img.product-zoom{
			opacity: 1 !important;
		}
	</style>
	<?php include( 'header.php'); ?>
	<div class="modal fade Request-Information" id="myModalprodoct">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<!-- Modal body -->
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<div class="row">
						<div class="col-12 text-center">
							<h1>Request Information</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<div class="custom-control custom-checkbox mb-3">
									<input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
									<label class="custom-control-label" for="customCheck"><span class="adjust">Request Wholesale Price</span>
									</label>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group one">
								<div class="custom-control custom-checkbox mb-3">
									<input type="checkbox" class="custom-control-input" id="customCheck2" name="example2">
									<label class="custom-control-label" for="customCheck2"><span class="adjust">Request Documentation</span>
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group two">
								<textarea class="form-control" placeholder="Add your inquiry here"></textarea>
							</div>
						</div>
					</div>
					<div class="row btms">
						<div class="col-6">
							<div class="form-group">
								<label>Your Full Name <span>*</span>
								</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label>Telephone <span class="optional">(Optional)</span>
								</label>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group lastgropu">
								<div class="custom-control custom-checkbox mb-3">
									<input type="checkbox" class="custom-control-input" id="customCheck3" name="example3">
									<label class="custom-control-label" for="customCheck3"><span class="adjust">I would also like to be contacted by telephone.</span>
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<div class="custom-control custom-checkbox mb-3">
									<input type="checkbox" class="custom-control-input" id="customCheck4" name="example4">
									<label class="custom-control-label" for="customCheck4"><span class="adjust two">By clicking <strong>Send</strong>  I agree to the <a href="#">Terms of Use</a> and acknowledge the <br>
<a href="#">Privacy Policy</a>. Yourrequest will be send and shared to the selected <strong>Company</strong> <br>
		  you submit a request to. By clicking <strong> Send</strong>  I confirm ths is a project inquiry <br>
and not a promotional message or solicitation.</span>
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 text-center">
							<div class="form-group lst">
								<button>Send</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade Request-Information pop-up-template" id="pop-up">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<div class="row">
						<div class="col-12 text-center">
							<h1>Pop up Template</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas
								<br>auguae, eu vulputate magna eros eu erat.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-12 text-center">
							<div class="form-group lst">
								<button>Accept</button>
								<button class="reject">Reject</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="sub__page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<ul class="no-pad inline-list social">
						<li>	<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						</li>
						<li>	<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						</li>
						<li>	<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						</li>
						<li>	<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</li>
						<li>	<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						</li>
					</ul>
				</div>
				<div class="col-md-6">
					<div class="pull-right">
						<ul class="no-pad inline-list circle-radius">
							<li><a href=""><i class="fa fa-heart" aria-hidden="true"></i></a>
							</li>
							<li><a href=""><i class="fa fa-users" aria-hidden="true"></i></a>
							</li>
							<li><a href=""><i class="fa fa-bell" aria-hidden="true"></i><span>3</span></a>
							</li>
							<li class="drop__down">
								<a href="">
									<img src="assets/images/profile-image.png"> <i class="fa fa-angle-down" aria-hidden="true"></i>
								</a>
								<ul class="no-pad inline-list sub__menu"></ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="sub__banner">
		<div class="container">
			<div class="row"></div>
		</div>
	</section>
	<section class="navigation__two">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="flex__items">
						<div class="product__logo">
							<img src="assets/images/the-design-house.png">
						</div>
						<div class="green__band">
							<p>
								<img src="assets/images/percentage.png"> <strong>Special Offer:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing eli...</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="rounded-rect">
					<div class="black__transparent">
						<div class="product__heading">
							<h1><img src="assets/images/right-check.png"> The Design House</h1>
						</div>
						<div class="reviewas">
							<ul class="no-pad inline-list">
								<li>5.0 <span><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span>
								</li>
								<li><a href="#">Add</a>
								</li>
							</ul>
							<p>23 Reviews</p>
						</div>
					</div>
					<div class="product__nav">
						<ul class="no-pad inline-list">
							<li><a href="#">About Us</a>
							</li>
							<li><a href="#">Products</a>
							</li>
							<li><a href="#">Projects</a>
							</li>
							<li><a href="#">Special Offers</a>
							</li>
							<li><a href="#">Before & After</a>
							</li>
							<li><a href="#">Reviews</a>
							</li>
							<li><a href="#">Favourites</a>
							</li>
							<li><a href="#">Posts & Replies</a>
							</li>
							<li><a href="#">Groups</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="folow__save">
		<div class="container">
			<div class="row">
				<div class="btm__border">
					<div class="col-md-left">
						<ul class="no-pad inline-list two__buttons">
							<li><a href="#">Follow</a>
							</li>
							<li><a href="#">Save</a>
							</li>
						</ul>
					</div>
					<div class="col-md-right">
						<div class="pull-right">
							<ul class="no-pad inline-list three__buttons">
								<li><a href="#"><span>1300</span> Followers</a>
								</li>
								<li><a href="#"><span>56</span> Followers</a>
								</li>
								<li><a href="#"><span>112</span> Followers</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="prdouct-detail this-photo">
		<div class="container">
			<div class="row bread">
				<div class="col-md-10">
					<ul class="no-pad inline-list breadcrumb-list">
						<li><a href="#">Home</a><span>/</span>
						</li>
						<li><a href="#">Patio Furniture  </a><span>/</span>
						</li>
						<li><a href="#">Patio Tables  </a><span>/</span>
						</li>
						<li><a href="#">Selen Outdoor 12-inch Lattice Side Table</a>
						</li>
					</ul>
				</div>
				<div class="col-md-2">
					<div class="pull-right">
						<a class="carousel-control-prev" href="#demo" data-slide="prev"> <span class=""><i class="fa fa-angle-left" aria-hidden="true"></i> Prev</span>
						</a>
						<a class="carousel-control-next" href="#demo" data-slide="next"> <span class="">Next <i class="fa fa-angle-right" aria-hidden="true"></i></span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div id="demo" class="carousel" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<div class="row">
									<div class="col-2">
										<ul class="nav nav-tabs" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" data-toggle="tab" href="#home">
													<img src="assets/images/product-detail/thumb-one.jpg">
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#menu1">
													<img src="assets/images/product-detail/thumb-2.jpg">
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#menu2">
													<img src="assets/images/product-detail/thumb-3.jpg">
												</a>
											</li>
										</ul>
									</div>
									<div class="col-10">
										<div class="tab-content">
											<div id="home" class="tab-pane active">
												<a href="assets/images/product-detail/big.jpg" data-rel="lightcase:myCollection">
													<img src="assets/images/zoom-product.png" class="product-zoom">
													<img src="assets/images/product-detail/big.jpg">
												</a>
											</div>
											<div id="menu1" class="tab-pane fade">
												<a href="assets/images/before.png" data-rel="lightcase:myCollection">
													<img src="assets/images/zoom-product.png" class="product-zoom">
													<img src="assets/images/before.png">
												</a>
											</div>
											<div id="menu2" class="tab-pane fade">
												<a href="assets/images/product-detailes/2.jpg" data-rel="lightcase:myCollection">
													<img src="assets/images/zoom-product.png" class="product-zoom">
													<img src="assets/images/product-detailes/2.jpg">
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="accordians">
											<!--Accordion wrapper-->
											<div class="bs-example">
												<div class="accordion" id="accordionExample">
													<div class="card panel panel-default activeee">
														<div class="card-header" id="headingOne">
															<h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"><i class="fa fa-minus"></i> Description</button>									
                </h2>
														</div>
														<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
															<div class="card-body">
																<p>Praesent dapibus, neque id cursus faucibus, tortor neque etas auguae, eu vulputate maeros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. Phasellus ultric es nulla quis nibh. Quisque a lectus. Praesent dapibus, neque id cursus faucibus, tortor neque etas auguae, eu vulputate maeros eu erat.</p>
																<p>Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor.</p>
															</div>
														</div>
													</div>
													<div class="card panel panel-default">
														<div class="card-header" id="headingTwo">
															<h2 class="mb-0">
                    <button type="button" class="btn btn-link " data-toggle="collapse" data-target="#collapseTwo"><i class="fa fa-plus"></i> Origin</button>
                </h2>
														</div>
														<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
															<div class="card-body">
																<p>Praesent dapibus, neque id cursus faucibus, tortor neque etas auguae, eu vulputate maeros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. Phasellus ultric es nulla quis nibh. Quisque a lectus. Praesent dapibus, neque id cursus faucibus, tortor neque etas auguae, eu vulputate maeros eu erat.</p>
															</div>
														</div>
													</div>
													<div class="card panel panel-default">
														<div class="card-header" id="headingThree">
															<h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-plus"></i> Specifications</button>                     
                </h2>
														</div>
														<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
															<div class="card-body">
																<p>Praesent dapibus, neque id cursus faucibus, tortor neque etas auguae, eu vulputate maeros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. Phasellus ultric es nulla quis nibh. Quisque a lectus. Praesent dapibus, neque id cursus faucibus, tortor neque etas auguae, eu vulputate maeros eu erat.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Accordion wrapper -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<h1 class="prducthead">Selen Outdoor 12-inch Lattice
<br>Side Table</h1>
								<p class="price">AED1500 <span>AED1500</span>
								</p>
								<p class="other">Other Retailer My Charge AED3000</p>
								<ul class="no-pad left__arrow">
									<li><span>Delivery:</span> We Deliver</li>
									<li><span>Shipping Cost:</span> Free</li>
									<li><span>In Store Collect:</span> Yes</li>
									<li><span>Return:</span> Within 15 days</li>
								</ul>
								<div class="warranty">
									<p><i class="fa fa-check" aria-hidden="true"></i>  <strong>Warranty:</strong> Protected by our <strong>1 year guarantee!</strong>
									</p>
								</div>
								<div class="btnss">	<a href="#"><i class="fa fa-question" aria-hidden="true"></i> Ask a Question</a>
									<a href="#" data-toggle="modal" data-target="#myModalprodoct"><i class="fa fa-calculator" aria-hidden="true"></i> Request Wholesale Price</a>
									<a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Receive Documentation</a>
								</div>
								<div class="two__btns">	<a href="#"><i class="fa fa-users" aria-hidden="true"></i> Share in Group</a>
									<a href="#" data-toggle="modal" data-target="#pop-up"><i class="fa fa-heart" aria-hidden="true"></i> Add to Favorites</a>
								</div>
								<div class="tags">
									<p><strong>Tags:</strong> Contemporary, Kilim, Turkish, Look Kilim, Look Contemporary, Size Large, Make Hand Woven,Table, Patio,Green</p>
								</div>
								<div class="tags">
									<p><strong>Type:</strong> Patio Stool</p>
								</div>
							</div>
						</div>
						
						
						<!--review code from here-->
						<div class="row">
							<div class="col-md-7 margin-tpp">
								<div class="row">
									<div class="col-sm-12">
										<h1>Ask a question. 30 Questions answered</h1>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<textarea class="form-control" placeholder="Type your question here"></textarea>
										</div>
										<div class="form-group">
											<button class="green">Publish</button>
										</div>
									</div>
								</div>
								<div class="row q-and-a">
									<div class="col-12">
										<h6><span>Question:</span> What is Lorem Ipsum?</h6>
										<p><span>Answer:</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
										<div class="border-btmo"></div>
									</div>
									<div class="col-12">
										<h6><span>Question:</span> What is Lorem Ipsum?</h6>
										<p><span>Answer:</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
										<div class="border-btmo"></div>
									</div>
									<div class="col-12">
										<h6><span>Question:</span> What is Lorem Ipsum?</h6>
										<p><span>Answer:</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
										<div class="border-btmo"></div>
									</div>
									<div class="col-12">	
									<a href="" class="see_all one">View More</a> 
									</div>
									<div class="more-q-and-a">
										<div class="col-12">
											<h6><span>Question:</span> What is Lorem Ipsum?</h6>
											<p><span>Answer:</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
											<div class="border-btmo"></div>
										</div>
										<div class="col-12">
											<h6><span>Question:</span> What is Lorem Ipsum?</h6>
											<p><span>Answer:</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
											<div class="border-btmo"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--review code end here-->
						
						
						<div class="row">
							<div class="col-md-8">
								<ul class="no-pad inline-list share">
									<li>
										<a href="#">
											<img src="assets/images/share-facebook.png">Share <span>3</span>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="assets/images/share-twitter.png">Tweet <span>1</span>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="assets/images/share-printarest.png">Pin it<span></span>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="assets/images/share-gplus.png"> <span>+1</span>
										</a>
									</li>
									<li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
									</li>
								</ul>
							</div>
							<div class="col-md-4">
								<div class="pull-right">
									<ul class="no-pad inline-list print">
										<li>
											<a href="#">
												<img src="images/email.png">E mail</span>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="images/print.png">Print</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="related__products products__main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Related Products</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="rectangle">
						<a href="#">
							<figure>
								<img src="assets/images/products/1.jpg" class="img-fluid">
							</figure>
							<figcaption>
								<p>Safavieh Torre Concrete...</p>
								<p class="price">AED1500 <span><cot>AED1500</cot></span>
								</p>
							</figcaption>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="rectangle">
						<a href="#">
							<figure>
								<img src="assets/images/products/2.jpg" class="img-fluid">
							</figure>
							<figcaption>
								<p>Sarcelles Modern Woven...</p>
								<p class="price">AED1500 <span><cot>AED1500</cot></span>
								</p>
							</figcaption>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="rectangle">
						<a href="#">
							<figure>
								<img src="assets/images/products/3.jpg" class="img-fluid">
							</figure>
							<figcaption>
								<p>Safavieh Jaslyn Concrete..</p>
								<p class="price">AED1500 <span><cot>AED1500</cot></span>
								</p>
							</figcaption>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="rectangle">
						<a href="#">
							<figure>
								<img src="assets/images/products/3.jpg" class="img-fluid">
							</figure>
							<figcaption>
								<p>Safavieh Jaslyn Concrete..</p>
								<p class="price">AED1500 <span><cot>AED1500</cot></span>
								</p>
							</figcaption>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include( 'footer.php'); ?>
	<script>
		(function() {
		  
		  $(".panel").on("show.bs.collapse hide.bs.collapse", function(e) {
		    if (e.type=='show'){
		      $(this).addClass('activeee');
		    }else{
		      $(this).removeClass('activeee');
		    }
		  });  
		
		}).call(this);
	</script>
	<script>
		$(document).ready(function(){
		        // Add minus icon for collapse element which is open by default
		        $(".collapse.show").each(function(){
		        	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
		        });
		        
		        // Toggle plus minus icon on show hide of collapse element
		        $(".collapse").on('show.bs.collapse', function(){
		        	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
		        }).on('hide.bs.collapse', function(){
		        	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
		        });
		    });
			   
			    $('.see_all.one').on('click', function(e) {
		    e.preventDefault();
		    if ($('.more-q-and-a').hasClass('opened')) {
		        $('.more-q-and-a').removeClass('opened');
		        $(this).text('View More');
		    } else {
		        $('.more-q-and-a').addClass('opened');
		        $(this).text('View Less');
		    }
		});
	</script>
	</body>

</html>