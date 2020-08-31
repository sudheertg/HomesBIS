<!doctype html>
<html lang="en">

<head>
	<title>Arabia House</title>
	<link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/zoom/Vendor/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="assets/zoom/Vendor/fancybox/helpers/jquery.fancybox-thumbs.css" />
	<link href="assets/zoom/zoom.css" rel="stylesheet" />
	<?php include( 'header-bottom-border.php'); ?>
	<section class="folow__save new gray products__main company-user review member forms">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="side-menu">
						<nav class="navbar navbar-default" role="navigation">
							<div class="side-menu-container">
								<div class="head one">About Your Business</div>
								<div class="contentt">
									<ul class="no-pad no-after">
										<li><a href="#">About Your Company</a>
										</li>
										<li><a href="#">Photos & Videos</a>
										</li>
										<li><a href="#">Hours of Operation</a>
										</li>
										<li><a href="#">Contacts & Social Media</a>
										</li>
										<li class="active"><a href="#">Premium Upgrade Setiings</a>
										</li>
									</ul>
								</div>
								<div class="head">Account Settings</div>
								<div class="contentt">
									<ul class="no-pad no-after">
										<li><a href="#">Billing Information</a>
										</li>
										<li><a href="#">Transaction History</a>
										</li>
										<li><a href="#">Change Email & Password</a>
										</li>
										<li><a href="#">Delete Account</a>
										</li>
									</ul>
								</div>
							</div>
						</nav>
					</div>
				</div>
				<div class="col-md-9">
					<h1>Premium Upgrade Setiings</h1>
					<p class="mandtry-font">All fields marked with <span class="red-top">*</span> are mandatory</p>
					<form action="#">
						<div class="form-group ">
							<label>Current Location <span class="red">*</span>
							</label>
							<input type="text" class="form-control" id="" placeholder="UAE, Dubai">
						</div>
						<div  class="form-group flext-items ">
						<div class="row">
						<div class="co-1">
									<label>Additional Cities <span class="red">*</span>
							</label>
						</div>
							<div class="co-2">
							
								<select class="form-control dynamic-field" id="dynamic-field-1" >
								<option value="" disabled selected hidden required>Select New Location</option>
								<option>Algeria</option>
								<option>Andorra</option>
							</select>
							</div>
							<div class="co-3">
								<button class="btn btn-green"  id="add-button">Add</button>
							</div>
						</div>
						
						
						</div>
						<div class="form-group some-text">
						
						
							
									<p class="text-left float-left">Premium Cities:4</p>
							
									
									<p class="text-right float-right">Premium Cities:4</p>
									
							</div>
						<div class="form-group">
							<label>Current Category <span class="red">*</span>
							</label>
							<input type="text" class="form-control" placeholder="Kitchen Designer" id="">
						</div>
					
						
						
						
							<div class="form-group flext-items two">
						<div class="row">
						<div class="co-1">
							<label>Additional Category <span class="red">*</span>
							</label>
						</div>
							<div class="co-2">
							
								<select class="form-control dynamic-fieldd" id="dynamic-field-2">
								<option value="" disabled selected hidden required>Select New Categories</option>
								<option>New Categorie</option>
								<option>New Categorie</option>
							</select>
							</div>
							<div class="co-3">
								<button class="btn btn-green" id="add-buttonTwo">Add</button>
							</div>
						</div>
						
						
						</div>
					
					
							<div class="form-group some-text">
						
						
							
									<p class="text-left float-left">Premium Categories:4</p>
							
									
									<p class="text-right float-right">Selected Categories:0</p>
									
							</div>
						
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="border-middle"></div>
				</div>
			</div>
			<div class="row text-center margin-top">
				<div class="col-12">
					<button class="btn btn-dark">Save & Next</button>
				</div>
			</div>
	</section>
	<div class="border-with-footer"></div>
	<?php include( 'footer-detail.php'); ?>
	</body>
	<script>
		// Initialize tooltip component
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
		
		// Initialize popover component
		$(function () {
		  $('[data-toggle="popover"]').popover()
		})
	</script>
	<script>
	$('#add-mail').click(function(){
$('.email').append('<input type="text" value="@domain.com"/>');
});</script>

<script>
	$(document).ready(function() {
  var buttonAdd = $("#add-button");
  var buttonRemove = $("#remove-button");
  var className = ".dynamic-field";
  var count = 0;
  var field = "";
  var maxFields = 5;

  function totalFields() {
    return $(className).length;
  }

  function addNewField() {
    count = totalFields() + 1;
    field = $("#dynamic-field-1").clone();
    field.attr("id", "dynamic-field-" + count);
    field.children("label").text("Field " + count);
    field.find("input").val("");
    $(className + ":last").after($(field));
  }

  function removeLastField() {
    if (totalFields() > 1) {
      $(className + ":last").remove();
    }
  }

  function enableButtonRemove() {
    if (totalFields() === 2) {
      buttonRemove.removeAttr("disabled");
      buttonRemove.addClass("shadow-sm");
    }
  }

  function disableButtonRemove() {
    if (totalFields() === 1) {
      buttonRemove.attr("disabled", "disabled");
      buttonRemove.removeClass("shadow-sm");
    }
  }

  function disableButtonAdd() {
    if (totalFields() === maxFields) {
      buttonAdd.attr("disabled", "disabled");
      buttonAdd.removeClass("shadow-sm");
    }
  }

  function enableButtonAdd() {
    if (totalFields() === (maxFields - 1)) {
      buttonAdd.removeAttr("disabled");
      buttonAdd.addClass("shadow-sm");
    }
  }

  buttonAdd.click(function() {
    addNewField();
    enableButtonRemove();
    disableButtonAdd();
  });

  buttonRemove.click(function() {
    removeLastField();
    disableButtonRemove();
    enableButtonAdd();
  });
});</script>
<script>
	$(document).ready(function() {
  var buttonAdd = $("#add-buttonTwo");
  var buttonRemove = $("#remove-button");
  var className = ".dynamic-fieldd";
  var count = 0;
  var field = "";
  var maxFields = 5;

  function totalFields() {
    return $(className).length;
  }

  function addNewField() {
    count = totalFields() + 1;
    field = $("#dynamic-field-2").clone();
    field.attr("id", "dynamic-fieldd-" + count);
    field.children("label").text("Field " + count);
    field.find("input").val("");
    $(className + ":last").after($(field));
  }

  function removeLastField() {
    if (totalFields() > 1) {
      $(className + ":last").remove();
    }
  }

  function enableButtonRemove() {
    if (totalFields() === 2) {
      buttonRemove.removeAttr("disabled");
      buttonRemove.addClass("shadow-sm");
    }
  }

  function disableButtonRemove() {
    if (totalFields() === 1) {
      buttonRemove.attr("disabled", "disabled");
      buttonRemove.removeClass("shadow-sm");
    }
  }

  function disableButtonAdd() {
    if (totalFields() === maxFields) {
      buttonAdd.attr("disabled", "disabled");
      buttonAdd.removeClass("shadow-sm");
    }
  }

  function enableButtonAdd() {
    if (totalFields() === (maxFields - 1)) {
      buttonAdd.removeAttr("disabled");
      buttonAdd.addClass("shadow-sm");
    }
  }

  buttonAdd.click(function() {
    addNewField();
    enableButtonRemove();
    disableButtonAdd();
  });

  buttonRemove.click(function() {
    removeLastField();
    disableButtonRemove();
    enableButtonAdd();
  });
});</script>
</html>