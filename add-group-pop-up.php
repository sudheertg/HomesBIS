<!doctype html>
<html lang="en">
	<head>
		<title>Arabia House</title>
		<link href="assets/css/owl.carousel.min.css" rel="stylesheet"/>
		<?php include('header-bottom-border.php'); ?>
		
	
	
	

	
	
	
	
	
	

	

			<section class="project-upload what">
				<div class="container">
					<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							
								<button class="btn btn-dark green" data-toggle="modal" data-target="#myModalselect">Add Group</button>
								
									<button class="btn btn-dark green" data-toggle="modal" data-target="#myModalselect-rules">Group Rules</button>
									
									<button class="btn btn-dark green" data-toggle="modal" data-target="#myModalselect-invite-member">Invite Member</button>
								
							</div>
				
					</div>
				
						</div>
						
						
						
					
					</div>
					
					
					
				
				
					
				</div>
			</section>
		
			
			<div class="modal" id="myModalselect">
    <div class="modal-dialog seven add-group">
      <div class="modal-content">
      
        <!-- Modal Header -->

         <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!-- Modal body -->
        <div class="modal-body">
         <h1>Add Group</h1>
          <h4 class="row_margin_20">Settings</h4>
       
       
     <div class="row row_margin_20">
					<div class="col-12">
						<div class="check_box_big">
							<input type="radio" name="delivery_type" value="We Deliver" id="we_deliver">
							<label for="we_deliver">Public Group <br><span>This is an open group. Users may join without approval and all content 
in this group will be visible to all community members.</span></label>
						</div>
					</div>
				
				</div>
      <hr>
       
      <div class="row row_margin_20">
					<div class="col-12">
						<div class="check_box_big row_margin_20ss">
							<input type="radio" name="delivery_type" value="We Deliver" id="we_deliver">
							<label for="we_deliver">Closed Group <br><span>This is a closed group. Users can only join by invitation and all content 
added in this group will be hidden for nonmembers.</span></label>
						</div>
					</div>
				
				</div>
      
      <div class="row ">
      	<div class="col-12">
      		<p>In order to change the group type, please go to group setting</p>
      	</div>
      </div>
        <div class="row ">
        <div class="col-12">
        	<button class="green_button">Continue</button>
        </div>
			</div>
        </div>
        
       
        
      </div>
    </div>
		</div>
		
		
		
		
		<div class="modal" id="myModalselect-rules">
    <div class="modal-dialog seven add-group">
      <div class="modal-content">
      
        <!-- Modal Header -->

         <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!-- Modal body -->
        <div class="modal-body">
         <h1>Group Rules</h1>
          <h4 class="row_margin_20">If you agree to these rules, you can join the group.</h4>
       
       
     
    
       
     
      
    
        <div class="row ">
        <div class="col-12">
        	<button class="green_button">I Agree</button>
        	<button class="green_button">No Thanks</button>
        </div>
			</div>
        </div>
        
       
        
      </div>
    </div>
		</div>
		
		
		
		<div class="modal" id="myModalselect-invite-member">
    <div class="modal-dialog seven invite-member">
      <div class="modal-content">
      
        <!-- Modal Header -->

         <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!-- Modal body -->
        <div class="modal-body">
         <h1>Invite Member</h1>
          <h4 class="row_margin_20">Kitchen Group</h4>
       
       
     
    <div class="row row_margin_20">
    	<div class="col-6">
    		<div class="select-box">
    			<img src="assets/images/man.png">
					<p>A (Our Site) Member</p>
					<img src="assets/images/check.png" class="chekk">
    		</div>
    	</div>
    	<div class="col-6">
    		<div class="select-box">
    			<img src="assets/images/man.png">
    			<p>Isn’t a Member yet?</p>
    		</div>
    	</div>
    </div>
       
     
      
    
        <div class="row">
        <div class="col-12">
        <div class="form-group">
        	<input type="text" class="form-control" placeholder="Enter Email ID">
        	<button class="btn btn-green">Send Invite</button>
        </div>
        </div>
			</div>
        </div>
        
       
        
      </div>
    </div>
		</div>
	

	<div class="border-with-footer"></div>
	<?php include('footer.php'); ?>
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

</html>