<!doctype html>
<html lang="en"><head>
  <title>Arabia House</title>
  <?php include('header-bottom-border.php'); ?>
  <style>
  .box-gray-line .top-box button.btn.btn-green {
    position: absolute;
    right: 0px;
    top: 0px;
    z-index: 9;
    background: #00b100 !important;
    height: 50px !important;
    color: #fff !important;
    border-bottom-right-radius: 44px !important;
    border-top-right-radius: 44px !important;
    text-transform: uppercase;
    font-weight: 600;
    padding: 0px 20px;
    font-size: 14px;
}
</style>
  <section class="folow__save new gray products__main company-user review member forms project-upload">
    <div class="container">
      <div class="row">
        
        <div class="col-md-3">
          
          <div class="side-menu">
            
            <nav class="navbar navbar-default" role="navigation">
              
              <div class="side-menu-container">
                <div class="head one">
                  About Your Business
                </div>
                <div class="contentt">
                  <ul class="no-pad no-after">
                    <li ><a href="#">About Your Company</a></li>
                    <li><a href="#">Photos & Videos</a></li>
                    <li ><a href="#">Hours of Operation</a></li>
                    <li><a href="#">Contacts & Social Media</a></li>
					 <li class="active"><a href="#">Lead Type</a></li>
                  </ul>
                </div>
                
                
                
                
                
                
                <div class="head">
                  Account Settings
                </div>
                <div class="contentt">
                  <ul class="no-pad no-after">
                    <li><a href="#">Billing Information</a></li>
                    <li><a href="#">Transaction History</a></li>
                    <li><a href="#">Change Email & Password</a></li>
                    <li><a href="#">Delete Account</a></li>
                  </ul>
                </div>
                
                
              </div>
            </nav>
            
          </div>
          
        </div>
        
        
        
        
        
        
        
        
        
        
        
        <div class="col-md-9">
          <h1>Lead Type</h1>
		  <div class="row">
         <div class="col-8 box-gray-line">
                        <form method="post" id="service_form" enctype="multipart/form-data">
        <div class="row">
                                  <div class="col-sm-12 border-btm">
								<div class="top-box">
								  <h4>Add services that you would like to receive leads for</h4>
								  <div class="form-group add-button">
									<input type="text" class="form-control ui-autocomplete-input" id="servicename" placeholder="Ex: Pool Builder" autocomplete="off">
									<input type="hidden" id="serviceid">
																		<button type="button" class="btn btn-green services_add_auto">Add</button>
								  </div>
								  								  <p>Or Search by <a href="#" data-toggle="modal" data-target="#myModalQuote">Category</a></p>
								  								</div>
							  </div>
                    <!--/div>-->
          <div class="modal" id="myModalQuote">
            <div class="modal-dialog seven quote">
              <div class="modal-content"> 
                
                <!-- Modal Header -->
                
                <button type="button" class="close" data-dismiss="modal">×</button>
                <!-- Modal body -->
                <div class="modal-body">
                  <h1>Search by category</h1>
                  <div class="scroll-brt">
                    <div class="wrapper center-block">
                      <div class="panel-group snj-panel" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                          <div class="panel-heading active" role="tab" id="headingThree">
                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree14" aria-controls="collapseThree">
                              Pool designers &amp; builders                              </a> </h4>
                          </div>
                          <div id="collapseThree14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input jobcodes_input" value="24" id="jobcodes_24" name="jobcodes[]">
                                <label class="custom-control-label" for="jobcodes_24">
                                  Hot tub and spa installer                                </label>
                              </div>
                                                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input jobcodes_input" value="26" id="jobcodes_26" name="jobcodes[]">
                                <label class="custom-control-label" for="jobcodes_26">
                                  Pool design &amp; installing                                </label>
                              </div>
                                                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input jobcodes_input" value="28" id="jobcodes_28" name="jobcodes[]">
                                <label class="custom-control-label" for="jobcodes_28">
                                  Pool enclosure build                                </label>
                              </div>
                                                          </div>
                          </div>
                        </div>
                                                <div class="panel panel-default">
                          <div class="panel-heading active" role="tab" id="headingThree">
                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree15" aria-controls="collapseThree">
                              Pools maintenance                              </a> </h4>
                          </div>
                          <div id="collapseThree15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input jobcodes_input" value="25" id="jobcodes_25" name="jobcodes[]">
                                <label class="custom-control-label" for="jobcodes_25">
                                  Hot tub and spa repair                                </label>
                              </div>
                                                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input jobcodes_input" value="27" id="jobcodes_27" name="jobcodes[]">
                                <label class="custom-control-label" for="jobcodes_27">
                                  Pool tile - install or repair                                </label>
                              </div>
                                                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input jobcodes_input" value="29" id="jobcodes_29" name="jobcodes[]">
                                <label class="custom-control-label" for="jobcodes_29">
                                  Pool maintenance                                </label>
                              </div>
                                                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input jobcodes_input" value="189" id="jobcodes_189" name="jobcodes[]">
                                <label class="custom-control-label" for="jobcodes_189">
                                  Pool cleaning services                                </label>
                              </div>
                                                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input jobcodes_input" value="190" id="jobcodes_190" name="jobcodes[]">
                                <label class="custom-control-label" for="jobcodes_190">
                                  Swimming pool repair                                </label>
                              </div>
                                                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input jobcodes_input" value="191" id="jobcodes_191" name="jobcodes[]">
                                <label class="custom-control-label" for="jobcodes_191">
                                  Hot tub &amp; spa cleaning                                </label>
                              </div>
                                                          </div>
                          </div>
                        </div>
                                                <div class="panel panel-default">
                          <div class="panel-heading active" role="tab" id="headingThree">
                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree16" aria-controls="collapseThree">
                              Hot tubs, spas &amp; saunas                              </a> </h4>
                          </div>
                          <div id="collapseThree16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input jobcodes_input" value="24" id="jobcodes_24" name="jobcodes[]">
                                <label class="custom-control-label" for="jobcodes_24">
                                  Hot tub and spa installer                                </label>
                              </div>
                                                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input jobcodes_input" value="25" id="jobcodes_25" name="jobcodes[]">
                                <label class="custom-control-label" for="jobcodes_25">
                                  Hot tub and spa repair                                </label>
                              </div>
                                                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input jobcodes_input" value="192" id="jobcodes_192" name="jobcodes[]">
                                <label class="custom-control-label" for="jobcodes_192">
                                  Sauna installation                                </label>
                              </div>
                                                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input jobcodes_input" value="193" id="jobcodes_193" name="jobcodes[]">
                                <label class="custom-control-label" for="jobcodes_193">
                                  Sauna repair or maintenance                                </label>
                              </div>
                                                          </div>
                          </div>
                        </div>
                                              </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-dark green services_add_pop">Add selected Services</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="btomm-box">
          <div class="row">
            <div class="col-12">
              <h4>Your selected services</h4>
            </div>
          </div>
          <div class="row" id="outer_jobcodes_row">
                              <div class="col-4" id="outer_jobcodes_182">
              <div class="list-items">
                <p><span>1.</span> Christmas light                  <button type="button" rel="182" class="remove">Remove</button>
                </p>
              </div>
            </div>                        
            
          </div>
          <input type="hidden" value="2" id="num_job">
                   <div class="row lead">
							<div class="col-6">
								<p>Lead Language <div class="tooltips-right">
		<a class="tooltips" data-toggle="tooltip" data-placement="right" title="Add tags he fit your project, tags will help better indexing your project and more views.">
	  		<i class="fa fa-question" aria-hidden="true"></i>
		</a>
		</div></p>
						<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
    <label class="custom-control-label" for="customCheck">Arabic</label>
  </div>
						<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="English" name="English">
    <label class="custom-control-label" for="English">English</label>
  </div>
						<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="French" name="French">
    <label class="custom-control-label" for="French">French</label>
  </div>
							</div>
							<div class="col-6">
								<p>Budget Lead <div class="tooltips-right">
		<a class="tooltips" data-toggle="tooltip" data-placement="right" title="Add tags he fit your project, tags will help better indexing your project and more views.">
	  		<i class="fa fa-question" aria-hidden="true"></i>
		</a>
		</div></p>
						<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="Low" name="Low">
    <label class="custom-control-label" for="Low">$ (Low)</label>
  </div>
						<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="Moderate" name="Moderate">
    <label class="custom-control-label" for="Moderate">$$ (Moderate)</label>
  </div>
						<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="High" name="High">
    <label class="custom-control-label" for="High">$$$ (Moderate to High)</label>
  </div>
						<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="Ultra High" name="Ultra High">
    <label class="custom-control-label" for="Ultra High">$$$$ (Ultra High)</label>
  </div>
							</div>
						</div>
       
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-dark green">Save</button>
            </div>
          </div>
        </div>
        </form>
      </div>
	  
	  <div class="col-4">
        <div class="green-light quate">
          <h1><img src="https://thewebworld.info/demo/arabia-house/assets/images/important-tips.png"> Selection Tips </h1>
          <ul>
            <li> Bronze companies can select up to 5 leads, Silver up to 10 leads while Gold can select up to 20 Leads.</li>
            <li> Select services related to your 
              business</li>
            <li> You should choose project budget level you accept.</li>
            <li> You will only receive projects that match your budget conditions, except the manual budget and if the customer not sure.</li>
            <li id="uppe"> You should choose project communication language.</li>
         
          </ul>
        </div>
      </div>
	  
	  
	  
	  
	  </div>
    
          
        </div>
       
      </div>
          <div class="row">
            <div class="col-12">
              <div class="border-middle"></div>
            </div>
          </div>
          <div class="row">
         	      <div class="col-md-3"></div>
         	      <div class="col-md-9">
         	      	      <div class="row two-buttons">
            <div class="col-6">
              <button class="btn btn-dark">Back</button>
            </div>

            <div class="col-6">
              <div class="pull-right">
                <button class="btn btn-dark">Save & Next</button>
              </div>
            </div>
          </div>
         	      </div>
          	
          </div>
    </section>
    
    
    <p id="demo"></p>
    
    
    
    
    
    
    
    
    <div class="border-with-footer"></div>
    <?php include('footer-detail.php'); ?>
  </body>
  
  <script>
function myFunction(){
	var x = document.activeElement.tagName;
	document.getElementById('uppe').innerHTML = x;
}

  </script>
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

</html>