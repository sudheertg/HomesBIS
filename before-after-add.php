<link href="<?=ROOT_URL; ?>assets/css/owl.carousel.min.css" rel="stylesheet" />
<?php $this->load->view('company/header_company'); 
$coverphotolist = $classifieddetails->classifiedImages;

$kl=2;
?>

<section class="section_half no-top-padding border_bottom_line2">
<div class="container">
  <h2 class="font_bold"><?=$product_type->title; ?> Upload</h2>
      
</div>
</section>
<?php //print_r($classifieddetails); ?>

<form id="category_post_upload" method="post" class="form_main box outer_col_pro_details " enctype="multipart/form-data">
<input type="hidden" name="action" value="property" />
<input type="hidden" value="<?=(($searchCriteria && !empty($searchCriteria['ref_id'])) ? 0 :(($classifieddetails->id) ? $classifieddetails->id : 0)); ?>" name="classifiedId" id="classifiedId" />
<input type="hidden" value="<?=(($classifieddetails->classified_ref) ? $classifieddetails->classified_ref : ''); ?>" name="classified_ref" id="classified_ref" />
<input type="hidden" value="<?=(($classifieddetails->expire_date && $classifieddetails->expire_date!='0000-00-00 00:00:00') ? date('Y-m-d H:i', strtotime($classifieddetails->expire_date)) : ''); ?>" name="expire_date" id="expire_date" />
<?php /*?><input type="hidden" value="<?=(($classifieddetails->is_active) ? $classifieddetails->is_active : 0); ?>" name="is_active" /><?php */?>
<input type="hidden" value="<?=(($classifieddetails->is_active) ? 1 : 1); ?>" name="is_active" />
<input type="hidden" value="<?=(($classifieddetails->is_approved) ? $classifieddetails->is_approved : 0); ?>" name="is_approved" />
<input type="hidden" value="<?=(($classifieddetails->is_deleted) ? $classifieddetails->is_deleted : 0); ?>" name="is_deleted" />
<input type="hidden" id="category_id_pro" value="<?=(($classifieddetails->category_id) ? $classifieddetails->category_id : 0); ?>" name="category_id" />
<input type="hidden" value="<?=(($memberDetails->id) ? $memberDetails->id : ''); ?>" name="created_by" />
<input type="hidden" value="<?=(($memberDetails->classified_type) ? $memberDetails->classified_type	 : $product_type->id); ?>" name="classified_type" />
<?php for($ki=0; $ki<=3; $ki++){ if($classifieddetails->category_list){ ?>
<input type="hidden" id="category_id_<?=$ki; ?>"  value="<?=(($classifieddetails->category_list[$ki]->id) ? $classifieddetails->category_list[$ki]->id : ''); ?>" name="category_ids[<?=$ki; ?>]" />
<?php }else{
?>
<input type="hidden" id="category_id_<?=$ki; ?>"  value="<?=(($contentselectedCategory[$ki]->id) ? $contentselectedCategory[$ki]->id : ''); ?>" name="category_ids[<?=$ki; ?>]" />
<?php
}} ?>

<style>
    section.project-upload label.green {
    color: #030303;
}
label.green.green_main {
    color: #00b100 !important;
}
label.green.form-check-label span.form_italic.pull-right {
    font-weight: 400;
    color: #252525;
}
 .form-group.dmy_box {
    font-size: 14px;
}
.col-4.col-duration.col-duration-days input.form-control {
    width: 100px !important;
    display: inline-block;
    flex: 0 0 100%;
    max-width: 100%;
}
.dmy_box input {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
    width: 100%;
}
.form-group.dmy_box {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: end;
        -ms-flex-align: end;
            align-items: end;
    -webkit-box-orient: vertical;
    -webkit-box-direction: reverse;
        -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
}
.form-group.dmy_box input.form-control {
    margin-top: 8px;
}
section.project-upload .form-group.dashed-border .addd .plus {
    width: 40px;
    height: 40px;
    border: 1px solid #d8d8d8;
    line-height: 40px;
    border-radius: 44px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    margin: 0 auto;
}
section.project-upload .green-light h2 {
    font-size: 16px;
    font-weight: bold;
    margin: 8px 0px;
}
section.project-upload .green-light h1 {
    margin-bottom: 24px;
    border-bottom: 1px solid #252525;
        padding-bottom: 20px;
    border-top: 1px solid #252525;
    padding-top: 24px;
}
section.project-upload .green-light h1 {
    margin-bottom: 28px;
    border-bottom: 1px solid #aaaaaa;
    padding-bottom: 14px;
    border-top: 1px solid #aaaaaa;
    padding-top: 24px;
    margin-top: 2px;
}
section.products__main.before-fater figcaption p.headerrr {
    font-size: 15px;
    font-weight: 600;
    color: #00b100;
}
label.green.green_main {
    font-size: 20px !important;
    text-align: center !important;

}
section.project-upload button.add {

    left: 0px !important;
}
section.project-upload button.add {
    margin-top: 0px;
}
</style>
<section class="project-upload">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="row">
        <div class="col-md-12"><?php echo validation_errors();?>
            <?php
                    if(isset($errMsg) && $errMsg != ''){ ?>
            <div class="alert alert-danger"> <?php echo $errMsg;?> </div>
            <?php unset($errMsg);
                    }
                    if(isset($succMsg) && $succMsg != ''){ ?>
            <div class="alert alert-success"> <?php echo $succMsg;?> </div>
            <?php unset($succMsg);
                    }
                    ?></div>
                    </div>
                    
                    
                    <div class="row">
                         <div class="col-6">
          <div class="form-group">
            <label class="green form-check-label" for="">Project Name<sup class="red">*</sup> <span
									class="form_italic pull-right">Fill details in English</span></label>
            <input type="text" class="form-control" placeholder="" value="<?=(($classifieddetails->lang->en->title) ? $classifieddetails->lang->en->title : ''); ?>" maxlength="71" name="lang[1][title]" id="title_en" required>
          </div>
        </div>
        <div class="col-6">
          <div class="form-group">
            <label class="form-check-label" for="">
            <span class="form_italic for-marginn">Fill details in Arabic (Optional)</span>
            <div class="tooltips-right "> <a class="tooltips" data-toggle="tooltip" data-placement="top"
										title="Since our site contains two platforms (Arabic and English) we prefer to add your Project information in both languages to reach a larger segment of customers. The main language you selected must be filled in while the additional language is optional. (For example, if you add information in English only, those who browse the Arabic platform will find your information in English only"> <i class="fa fa-question" aria-hidden="true"></i> </a> </div>
            </label>
            <input type="text" class="form-control" placeholder="" value="<?=(($classifieddetails->lang->ar->title) ? $classifieddetails->lang->ar->title : ''); ?>" maxlength="71" name="lang[2][title]" id="title_ar">
          </div>
        </div>
                    </div>
        
       
        <div class="row">
               <div class="col-12">
          <div class="form-group">
            <label class="green" for="">Project Description<span>*</span></label>
            <div class="row">
              <div class="col-6">
                <textarea class="form-control" required maxlength="501" name="lang[1][description]" id="description_en"><?=(($classifieddetails->lang->en->description) ? stripslashes($classifieddetails->lang->en->description) : ''); ?></textarea>
              </div>
              <div class="col-6">
                <textarea class="form-control" maxlength="501" name="lang[2][description]" id="description_ar"><?=(($classifieddetails->lang->ar->description) ? stripslashes($classifieddetails->lang->ar->description) : ''); ?></textarea>
              </div>
            </div>
          </div>
        </div> 
        </div>
      
          
        
        
        
        
        
         <div class="row">
          <div class="col-sm-12 text-center mb-4"><label class="green green_main">The Project Guide </label></div>
          </div>
        <div class="row">
          <?php /*?><div class="col-sm-6">
            <div class="form-group">
              <label class="green">The Project Guide <span></span></label>
              <input type="text" class="form-control" placeholder=""  maxlength="100" name="project_guide" value="<?=(($classifieddetails->project_guide) ? $classifieddetails->project_guide : ''); ?>" id="project_guide">
            </div>
          </div><?php */?>
          <div class="col-sm-6">
            <div class="form-group">
              <label class="green">Property type <span>*</span></label>
              <select class="form-control" id="property_type" name="property_type" required>
              <option value="">Select</option>
            <?php foreach($buildingtypelist as $types){ ?>
				 <option value="<?php echo $types->reason_id?>" <?php echo (isset($classifieddetails->property_type) && $classifieddetails->property_type == $types->reason_id) ? 'selected="selected"' : ''; ?> ><?php echo $types->title; ?></option>
				<?php }?>
                <option value="999">Other</option>
          </select>
          <input type="text" style="margin-top: 7px;" class="form-control <?=(($classifieddetails->property_type_other) ? '' : 'hide'); ?>" placeholder="Other"  maxlength="100" name="property_type_other" value="<?=(($classifieddetails->property_type_other) ? $classifieddetails->property_type_other : ''); ?>" id="property_type_other">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label class="green">Location <span>*</span></label>
              <input type="text" class="form-control" required placeholder="Country - City"  maxlength="100" name="classified_address" value="<?=(($classifieddetails->classified_address) ? $classifieddetails->classified_address : ''); ?>" id="classified_address">
            </div>
          </div>
        </div>
        <div class="row">
          
          <div class="col-sm-6">
            <div class="form-group">
              <label class="green">Date of project <span>*</span></label>
              <input type="text" class="form-control datepicker" required placeholder="" autocomplete="off"  maxlength="15" name="date_of_project" value="<?=(($classifieddetails->date_of_project && $classifieddetails->date_of_project!='0000-00-00') ? date('d/m/Y',strtotime($classifieddetails->date_of_project)) : ''); ?>" id="date_of_project">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label class="green">Project size <span>*</span></label>
              <input type="text" class="form-control" required placeholder="Measure of area you covered"  maxlength="15" name="project_size" value="<?=(($classifieddetails->project_size) ? $classifieddetails->project_size : ''); ?>" id="project_size">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 text-center mb-4 mt-2"><label class="green green_main">The Project Highlights </label></div>
          <?php /*?><div class="col-sm-6">
            <div class="form-group">
              <label class="green">The Project Highlights <span class="optinal">Optional</span></label>
              <input type="text" class="form-control" placeholder=""  maxlength="50" name="project_highlights" value="<?=(($classifieddetails->project_highlights) ? $classifieddetails->project_highlights : ''); ?>" id="project_highlights">
            </div>
          </div><?php */?>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label class="green">Original Budget (<?=DEFAULT_CURRENCY_AED; ?>)<span>*</span></label>
             <!-- <div class="tooltips-right"> <a class="tooltips" data-toggle="tooltip" data-placement="right" title="Enter the amount with currency"> <i class="fa fa-question" aria-hidden="true"></i> </a> </div>-->
              <input type="text" class="form-control" required  placeholder="Owner Budget"  maxlength="15" name="amount" value="<?=(($classifieddetails->amount) ? $classifieddetails->amount : ''); ?>" id="amount">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label class="green">Actual Spend (<?=DEFAULT_CURRENCY_AED; ?>) <span></span></label>
              <input type="text" class="form-control" placeholder="Final Cost of your Job"  maxlength="15" name="special_amount" value="<?=(($classifieddetails->special_amount) ? $classifieddetails->special_amount : ''); ?>" id="special_amount">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group no-btm-margin">
              <label class="green"><?=$this->lang->line('estimated_duration_PRODUCT_TEXT'); ?><span></span></label>
              <?php /*?><input type="text" class="form-control" placeholder="Your first estimated time duration for the project"  maxlength="15" name="estimated_duration" value="<?=(($classifieddetails->estimated_duration) ? $classifieddetails->estimated_duration : ''); ?>" id="estimated_duration"><?php */?>
            </div>
            
            <div class="row">
            	<div class="col-4 col-duration col-duration-days">
                  <div class="form-group dmy_box">
                    <input type="text" class="form-control" placeholder="" min="0" max="31" maxlength="2" name="warranty_days" value="<?=(($classifieddetails->warranty_days) ? $classifieddetails->warranty_days : ''); ?>" id="warranty_days">Days
                  </div>
                </div>
                <div class="col-4 col-duration col-duration-months">
                  <div class="form-group dmy_box">
                    <input type="text" class="form-control" placeholder="" min="0" max="12" maxlength="2" name="warranty_months" value="<?=(($classifieddetails->warranty_months) ? $classifieddetails->warranty_months : ''); ?>" id="warranty_months">Months
                    
                  </div>
                </div>
                <div class="col-4 col-duration col-duration-years">
                  <div class="form-group dmy_box">
                    <input type="text" class="form-control" placeholder="" maxlength="2" name="warranty_years" value="<?=(($classifieddetails->warranty_years) ? $classifieddetails->warranty_years : ''); ?>" id="warranty_years">Years
                    
                  </div>
                </div>
            
            </div>
          </div>
          
          
          <div class="col-sm-6">
            <div class="form-group no-btm-margin">
              <label class="green"><?=$this->lang->line('actual_duration_PRODUCT_TEXT'); ?> <span></span></label>
              <?php /*?><input type="text" class="form-control" placeholder="How much time take the project"  maxlength="20" name="actual_duration" value="<?=(($classifieddetails->actual_duration) ? $classifieddetails->actual_duration : ''); ?>" id="actual_duration"><?php */?>
            </div>
            
            
            <div class="row">
            	<div class="col-4 col-duration col-duration-days">
                  <div class="form-group dmy_box">
                    <input type="text" class="form-control" placeholder="" min="0" max="31" maxlength="2" name="actual_warranty_days" value="<?=(($classifieddetails->actual_warranty_days) ? $classifieddetails->actual_warranty_days : ''); ?>" id="actual_warranty_days">Days
                  </div>
                </div>
                <div class="col-4 col-duration col-duration-months">
                  <div class="form-group dmy_box">
                    <input type="text" class="form-control" placeholder="" min="0" max="12" maxlength="2" name="actual_warranty_months" value="<?=(($classifieddetails->actual_warranty_months) ? $classifieddetails->actual_warranty_months : ''); ?>" id="actual_warranty_months">Months
                    
                  </div>
                </div>
                <div class="col-4 col-duration col-duration-years">
                  <div class="form-group dmy_box">
                    <input type="text" class="form-control" placeholder="" maxlength="2" name="actual_warranty_years" value="<?=(($classifieddetails->actual_warranty_years) ? $classifieddetails->actual_warranty_years : ''); ?>" id="actual_warranty_years">Years
                    
                  </div>
                </div>
            
            </div>
            
          </div>
          
          
          
        </div>
        <div class="row">
          
          <div class="col-sm-12">
            <div class="form-group">
              <label class="green"><?=$this->lang->line('owner_status_PRODUCT_TEXT'); ?> <span></span></label>
              
              <select class="form-control" name="owner_status" id="owner_status">
            	<option value="">Select</option>
            	<option <?=(($classifieddetails->owner_status=='They leave house during the project') ? 'selected="selected"' : ''); ?> value="They leave house during the project">They leave house during the project</option>
                <option <?=(($classifieddetails->owner_status=='They stay in the house during the project') ? 'selected="selected"' : ''); ?> value="They stay in the house during the project">They stay in the house during the project</option>
            </select>
              
              <?php /*?><input type="text" class="form-control" placeholder="Leave house during the project or he stay in the house"  maxlength="50" name="owner_status" value="<?=(($classifieddetails->owner_status) ? $classifieddetails->owner_status : ''); ?>" id="owner_status"><?php */?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="container_drag_drop form-group box_before  " >
              <label class="green">Before Photo <span>*</span></label>
              <div class="tooltips-right"> <a class="tooltips" data-toggle="tooltip" data-placement="right" title="You can add 1 photo only"> <i class="fa fa-question" aria-hidden="true"></i> </a> </div>
              <div class="box has-advanced-upload box_view_images <?=(($classifieddetails->classifiedImages && $classifieddetails->classifiedImages[0]->read_in==2) ? 'hide' : ''); ?>">
                <div class="box__input">
                  <input type="file"  name="files[0]" id="file_0" required class="box__file" accept="image/*" data-multiple-caption="{count} files selected">
                  <label for="file_0" class="box_label">Drop photo anywhere to upload <br>
                    Or</label>
                  <button type="button" class="box__button">Select photo</button>
                  <p class="small_font">Maximum upload photo size: 1 MB Each</p>
                </div>
                <div class="box__uploading">Uploading…</div>
                <div class="box__success">Done!</div>
                <div class="box__error">Error!</div>
                <input type="hidden" name="ajax" value="1">
              </div>
              
               <?php if($classifiedId!=0){  if($classifieddetails->classifiedImages){ ?>
                <div class="row sel_featured_img_row1" > 
                  <?php foreach ($classifieddetails->classifiedImages as $k_im=>$image) {  
                            if (file_exists(DIR_UPLOAD_CLASSIFIED.$image->classified_image) && $image->read_in==2) { $kl--;
                                $fileExists = true;?>                                
                                <div class="col-md-6 sel_featured_img_box img_adv_<?=$image->id; ?>">
          <div class="sel_featured_img"> <input type="hidden" value="<?=$image->id; ?>" name="imageoldid[]" />
                    <img src="<?php echo ROOT_URL_BASE;?>assets/timthumb.php?src=<?php echo DIR_UPLOAD_CLASSIFIED_SHOW . $image->classified_image; ?>&w=100" /> </div>
          <div class="sel_featured_img_info <?=(($searchCriteria && !empty($searchCriteria['ref_id'])) ? 'hide' : ''); ?>">
           
            <a href="javascript:void(0);" rel="<?=$image->id; ?>" class="image_delete_ads" ><span class="select_delete"> <i class="icon-cancel"></i> </span></a> </div>
        </div><?php } } ?>
                       </div>
                  <?php }} ?>
            </div>
           
          </div>
          <div class="col-sm-6">
            <div class="container_drag_drop box_after form-group ">
              <label class="green">After Photo  <span>*</span></label>
              <div class="tooltips-right"> <a class="tooltips" data-toggle="tooltip" data-placement="right" title="You can add 1 photo only"> <i class="fa fa-question" aria-hidden="true"></i> </a> </div>
              <div class="box has-advanced-upload box_view_images <?=(($classifieddetails->classifiedImages && ($classifieddetails->classifiedImages[1]->read_in==1 || $classifieddetails->classifiedImages[0]->read_in==1)) ? 'hide' : ''); ?>">
                <div class="box__input">
                  <input type="file"  name="files[1]" accept="image/*" id="file_1" required class="box__file" data-multiple-caption="{count} files selected" >
                  <label for="file_1" class="box_label">Drop file anywhere to upload <br>
                    Or</label>
                  <button type="button" class="box__button">Select File</button>
                  <p class="small_font">Maximum upload file size: 1 MB Each</p>
                </div>
                <div class="box__uploading">Uploading…</div>
                <div class="box__success">Done!</div>
                <div class="box__error">Error!</div>
                <input type="hidden" name="ajax" value="1">
              </div>
              <?php if($classifiedId!=0){  if($classifieddetails->classifiedImages){ ?>
                <div class="row sel_featured_img_row1"> 
                  <?php foreach ($classifieddetails->classifiedImages as $k_im=>$image) {  
                            if (file_exists(DIR_UPLOAD_CLASSIFIED.$image->classified_image) && $image->read_in==1) { $kl--;
                                $fileExists = true;?>                                
                                <div class="col-md-6 sel_featured_img_box img_adv_<?=$image->id; ?>">
          <div class="sel_featured_img"> <input type="hidden" value="<?=$image->id; ?>" name="imageoldid[]" />
                    <img src="<?php echo ROOT_URL_BASE;?>assets/timthumb.php?src=<?php echo DIR_UPLOAD_CLASSIFIED_SHOW . $image->classified_image; ?>&w=100" /> </div>
          <div class="sel_featured_img_info <?=(($searchCriteria && !empty($searchCriteria['ref_id'])) ? 'hide' : ''); ?>">
           
            <a href="javascript:void(0);" rel="<?=$image->id; ?>" class="image_delete_ads" ><span class="select_delete"> <i class="icon-cancel"></i> </span></a> </div>
        </div><?php } } ?>
                       </div>
                  <?php }} ?>
            </div>
            
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <label class="green">More photos <span class="optinal">Optional</span></label>
          </div>
          <div class="col-6">
            <div class="pull-right">
              <div class="tooltips-right"> <a class="tooltips" data-toggle="tooltip" data-placement="right" title="If you have more photos for this project for example other corner views or during the work. Add up to 4 photos"> <i class="fa fa-question" aria-hidden="true"></i> </a> </div>
            </div>
          </div>
        </div>
        <div class="form-group dashed-border">
          <div class="row">
          
          <?php  for($i=2; $i<=5; $i++){ $j = $i-$kl; ?>
          <div class="col-3">
            <div class="addd background-image" <?=(($coverphotolist[$j] && $coverphotolist[$j]->classified_image  && file_exists(DIR_UPLOAD_CLASSIFIED.$coverphotolist[$j]->classified_image)) ? " id='img_bg_".$coverphotolist[$j]->id."' style='background-image:url(".DIR_UPLOAD_CLASSIFIED_SHOW.$coverphotolist[$j]->classified_image.");'" :''); ?> >
            <div class="<?=(($coverphotolist[$j] && $coverphotolist[$j]->classified_image  && file_exists(DIR_UPLOAD_CLASSIFIED.$coverphotolist[$j]->classified_image)) ? "hide" :''); ?>">
              <input type="file" name="files[<?=$i;?>]" id="inputFile_<?=$i;?>" accept="image/*">
              <div class="plus"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
              <p>Add Photo</p>
              </div>
            </div>
            <?=(($coverphotolist[$j] && $coverphotolist[$j]->classified_image  && file_exists(DIR_UPLOAD_CLASSIFIED.$coverphotolist[$j]->classified_image)) ? '<i rel="'.$coverphotolist[$j]->id.'" class="fa fa-trash trash_del_img trash_del_icon"></i>' :''); ?>
            
          </div>
          <?php } ?>
          </div>
        </div>
        
        <div class="row">
        	<div class="col-md-12 text-center"><label class="green green_main">Cost Calculator</label></div>
            <div class="col-md-12 mb-4"><div class="row">
            
            
            <div class="col-sm-12">
                <div class="float-right">
                <label class="green green_dfgf">Add Fields as You Wish</label> <button type="button" class="add add_calu">Add</button>
                </div>
                </div>
            </div>  </div>
        </div>
        <div class="row">
          <div class="col-md-4">
              <label class="green">Comment <span class="optinal">Fill Details in english</span></label>
          </div>
          <div class="col-md-3"><label class="green">Cost (<?=DEFAULT_CURRENCY_AED; ?>)</label></div>
          <div class="col-md-4"><label><span class="optinal">Fill Details in Arabic</span></label>
          <div class="tooltips-right"><a class="tooltips" data-toggle="tooltip" data-placement="right" title="Fill the content in the field, if you want add extra field then click 'Add'. For more details see Quick Tips.)"> <i class="fa fa-question" aria-hidden="true"></i> </a></div>
          </div>
          <div class="col-md-1"></div>
         </div> 
          
        <?php //print_r($classifieddetails); 
		$calculator_list = (($classifieddetails->calculator_list) ? $classifieddetails->calculator_list : array());
		 $tot =0; $cl_k=0; if($calculator_list){ foreach($calculator_list as $cal){ $tot +=$cal->price; ?>
          <div class="row calculator_list_<?=$cl_k; ?>">
          <div class="col-md-4">
            <div class="form-group">             
              <input type="text" class="form-control" maxlength="50" name="calculator[<?=$cl_k; ?>][title]" placeholder="Example, Laminate doors" value="<?=(($cal->title) ? $cal->title : ''); ?>" id="calculator_title">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">             
              <input type="text" class="form-control calculator_list_price" placeholder="" maxlength="15" name="calculator[<?=$cl_k; ?>][price]" value="<?=(($cal->price) ? $cal->price : ''); ?>" id="calculator_price">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">             
              <input type="text" class="form-control" maxlength="50" name="calculator[<?=$cl_k; ?>][title_tr]" value="<?=(($cal->title_tr) ? $cal->title_tr : ''); ?>" id="calculator_title_tr">
            </div>
          </div>
          <div class="col-md-1"><?=(($cl_k==0) ? '<button type="button" class="add add_calu hide">Add</button>' : '<button rel="'.$cl_k.'" type="button" class="add del_calu"><i class="fa fa-trash" style="color:#F00"></i></button>'); ?></div>
          
        </div>
          <?php $cl_k++; }}else{ ?>
          
          <?php for($kl=$cl_k; $kl<=10; $kl++){ ?>
          <div class="row <?=(($kl==$cl_k) ? '' : 'hide'); ?>  calculator_list_<?=$kl; ?>">
          
          
          <div class="col-md-4">
            <div class="form-group">             
              <input type="text" class="form-control" maxlength="50" name="calculator[<?=$kl; ?>][title]" placeholder="Example, Laminate doors" value="" id="calculator_title">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">             
              <input type="text" class="form-control calculator_list_price" placeholder="" maxlength="15" name="calculator[<?=$kl; ?>][price]" value="" id="calculator_price">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">             
              <input type="text" class="form-control" maxlength="50" name="calculator[<?=$kl; ?>][title_tr]" value="" id="calculator_title_tr">
            </div>
          </div>
          <div class="col-md-1"><?=(($kl==0) ? '<button type="button" class="add add_calu hide">Add</button>' : '<button rel="'.$kl.'" type="button" class="add del_calu"><i class="fa fa-trash" style="color:#F00"></i></button>'); ?></div>
          
          
          
          
        </div>
          
          <?php }} ?>
          <input type="hidden" value="<?=$cl_k; ?>" id="cl_k" />
        
        
        <div class="row hide">
          <div class="col-md-6">
            <div class="form-group">
              <label class="green">Subtotal (<?=DEFAULT_CURRENCY_AED; ?>)</label>
              <input type="text" class="form-control" placeholder="Caluclate The cost of all things you add up"  maxlength="15" value="<?=(($tot) ? $tot : ''); ?>" id="subtotal_amount">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="green">Labor Estimate (<?=DEFAULT_CURRENCY_AED; ?>)</label>
              <?php if($classifieddetails->labour_amount){ $tot +=$classifieddetails->labour_amount; }?>
              <input type="text" class="form-control" placeholder="Calculate The Cost of your Labor work"  maxlength="15" name="labour_amount" value="<?=(($classifieddetails->labour_amount) ? $classifieddetails->labour_amount : ''); ?>" id="labour_amount">
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="form-group">
              <label class="green">Total (<?=DEFAULT_CURRENCY_AED; ?>)</label>
              <input type="text" class="form-control" placeholder="Final Cost"  maxlength="15" value="<?=(($tot) ? $tot : ''); ?>" id="total_amount">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label class="green">Tags </label>
              <div class="tooltips-right"> <a class="tooltips" data-toggle="tooltip" data-placement="right" title="Add search tags that fit your project. Tags will help better indexing your project, and it help visitors to find your project when they are searching for projects like yours."> <i class="fa fa-question" aria-hidden="true"></i> </a> </div>
              <textarea class="form-control" placeholder="Add keywords separated with commas, Ex: swimming pool, pool cleaning, pool fixing"  maxlength="200" name="classified_tags" id="classified_tags"><?=(($classifieddetails->classified_tags) ? $classifieddetails->classified_tags : ''); ?></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <button class="btn btn-dark green">Submit</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="green-light">
          <h1><img src="<?=ROOT_URL; ?>assets/images/bulb.png"> QUICK TIPS</h1>
          <h2>You can use this example like a guide if you want, just add your information</h2>
          <ul>
            <li> Laminate Doors $300</li>
            <li> 2 basins $280</li>
            <li> Benctop $180</li>
            <li> Taps & Hardware $410</li>
            <li> Tile Primer & Paint $100</li>
            <li> Shower Screen & Installation $525</li>
            <?php /*?><li><strong>Subtotal $1795</strong></li>
            <li><strong>Labour Estimate $950</strong></li><?php */?>
            <li><strong>Total $ 1795</strong></li>
            <li class="last-list" style="margin-top:15px;"><strong>For better photos comparing, try to take the After Photo from the same area, zoom and angle of the Before Photo</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>












</form>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=<?=GOOGLEMAP_API_KEY; ?>"></script>
<script type="text/javascript">
var searchInput = 'classified_address';

jQuery(document).ready(function ($) {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
    });
	
    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var near_place = autocomplete.getPlace();
        document.getElementById('loc_lat').value = near_place.geometry.location.lat();
        document.getElementById('loc_long').value = near_place.geometry.location.lng();
		
        document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
        document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
		//$('#search_tag_for_design').submit();
    });
});
</script> 
<script type="text/javascript">
$(".addd input[type='file']").on('change', function () {
	console.log($(this)[0].files[0]);
        
			var reader = new FileReader();
			var mydiv = $(this).parents('.addd');
			reader.onload = function (e) {
				console.log(e);
				console.log('image:-'+e.target.result);
				mydiv.css("background-image", "url("+e.target.result+")"); 
			}
			reader.readAsDataURL($(this)[0].files[0]);			
        
    });
	
$("#property_type").on('change', function () {
	var id = $(this).val();
	$("#property_type_other").val('');
	if(id==999){
		$("#property_type_other").removeClass('hide');
	}else{
		$("#property_type_other").addClass('hide');
	}	
});
	
(function (document, window, index) {
			// feature detection for drag&drop upload
			var isAdvancedUpload = function () {
				var div = document.createElement('div');
				return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window &&
					'FileReader' in window;
			}();
			// applying the effect for every form
			var forms = document.querySelectorAll('.box_after .box');		
				//console.log(form);
				var form = document.querySelector('.box_after .box');
        			var input = document.querySelector('.box_after input[type="file"]'),
					label = document.querySelector('.box_after .box_label'),
					errorMsg = document.querySelector('.box_after .box__error span'),
					restart = document.querySelectorAll('.box_after .box__restart'),
					droppedFiles = false,
					showFiles = function (files) {	
					console.log(files);					  
						  var FileSize = files[0].size/ 1024/ 1024 ; // in MB
						  if (FileSize > 1) {
							  label.textContent = 'Please upload file less than 1 MB';
						  } else {
							  label.textContent = files[0].name;							  
								var reader = new FileReader();
								reader.onload = function (e) {
									console.log(e);
									$('.box_after .box_view_images').css("background-image", "url("+e.target.result+")"); 
								}
								reader.readAsDataURL(files[0]);							  
							  
						  }
						  

					}/*,

					triggerFormSubmit = function () {

						var event = document.createEvent('HTMLEvents');

						event.initEvent('submit', true, false);

						form.dispatchEvent(event);

					}*/;



				// letting the server side to know we are going to make an Ajax request

				var ajaxFlag = document.createElement('input');
				ajaxFlag.setAttribute('type', 'hidden');
				ajaxFlag.setAttribute('name', 'ajax');
				ajaxFlag.setAttribute('value', 1);
				form.appendChild(ajaxFlag);

				// automatically submit the form on file select

				input.addEventListener('change', function (e) {
					showFiles(e.target.files);          
				});      

				// drag&drop files if the feature is available

				if (isAdvancedUpload) {
					form.classList.add(
						'has-advanced-upload'
					); // letting the CSS part to know drag&drop is supported by the browser


					['drag', 'dragstart', 'dragend', 'dragover', 'dragenter', 'dragleave', 'drop'].forEach(
						function (event) {
							form.addEventListener(event, function (e) {
								// preventing the unwanted behaviours
								e.preventDefault();
								e.stopPropagation();
							});
						});
					['dragover', 'dragenter'].forEach(function (event) {
						form.addEventListener(event, function () {
							form.classList.add('is-dragover');
						});
					});

					['dragleave', 'dragend', 'drop'].forEach(function (event) {
						form.addEventListener(event, function () {
							form.classList.remove('is-dragover');
						});
					});

					form.addEventListener('drop', function (e) {
						droppedFiles = e.dataTransfer.files; // the files that were dropped
						showFiles(droppedFiles);
						//triggerFormSubmit();
					});

				}

				// restart the form if has a state of error/success
				Array.prototype.forEach.call(restart, function (entry) {
					entry.addEventListener('click', function (e) {
						e.preventDefault();
						form.classList.remove('is-error', 'is-success');
						input.click();
					});
				});



				// Firefox focus bug fix for file input
				input.addEventListener('focus', function () {
					input.classList.add('has-focus');
				});

				input.addEventListener('blur', function () {
					input.classList.remove('has-focus');
				});

		}(document, window, 0));

</script>
<script type="text/javascript">

(function (document, window, index) {
			// feature detection for drag&drop upload
			var isAdvancedUpload = function () {
				var div = document.createElement('div');
				return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window &&
					'FileReader' in window;
			}();
			// applying the effect for every form
			var forms = document.querySelectorAll('.box_before .box');		
				//console.log(form);
				var form = document.querySelector('.box_before .box');
        var input = document.querySelector('.box_before input[type="file"]'),
					label = document.querySelector('.box_before .box_label'),
					errorMsg = document.querySelector('.box_before .box__error span'),
					restart = document.querySelectorAll('.box_before .box__restart'),
					droppedFiles = false,
					showFiles = function (files) {
						 
						//console.log(files[0].size/ 1024/ 1024);
						  var FileSize = files[0].size/ 1024/ 1024 ; // in MB
						  if (FileSize > 1) {
							  label.textContent = 'Please upload file less than 1 MB';
						  } else {
							  label.textContent = files.length > 1 ? (input.getAttribute('data-multiple-caption') || '').replace('{count}', files.length) : files[0].name;							  
								var reader = new FileReader();
								reader.onload = function (e) {
									console.log(e);
									$('.box_before .box_view_images').css("background-image", "url("+e.target.result+")"); 
								}
								reader.readAsDataURL(files[0]);							  
							  
						  }
						  
						  

					}/*,

					triggerFormSubmit = function () {

						var event = document.createEvent('HTMLEvents');

						event.initEvent('submit', true, false);

						form.dispatchEvent(event);

					}*/;



				// letting the server side to know we are going to make an Ajax request

				var ajaxFlag = document.createElement('input');
				ajaxFlag.setAttribute('type', 'hidden');
				ajaxFlag.setAttribute('name', 'ajax');
				ajaxFlag.setAttribute('value', 1);
				form.appendChild(ajaxFlag);

				// automatically submit the form on file select

				input.addEventListener('change', function (e) {
					showFiles(e.target.files);          
				});      

				// drag&drop files if the feature is available

				if (isAdvancedUpload) {
					form.classList.add(
						'has-advanced-upload'
					); // letting the CSS part to know drag&drop is supported by the browser


					['drag', 'dragstart', 'dragend', 'dragover', 'dragenter', 'dragleave', 'drop'].forEach(
						function (event) {
							form.addEventListener(event, function (e) {
								// preventing the unwanted behaviours
								e.preventDefault();
								e.stopPropagation();
							});
						});
					['dragover', 'dragenter'].forEach(function (event) {
						form.addEventListener(event, function () {
							form.classList.add('is-dragover');
						});
					});

					['dragleave', 'dragend', 'drop'].forEach(function (event) {
						form.addEventListener(event, function () {
							form.classList.remove('is-dragover');
						});
					});

					form.addEventListener('drop', function (e) {
						droppedFiles = e.dataTransfer.files; // the files that were dropped
						showFiles(droppedFiles);
						//triggerFormSubmit();
					});

				}

				// restart the form if has a state of error/success
				Array.prototype.forEach.call(restart, function (entry) {
					entry.addEventListener('click', function (e) {
						e.preventDefault();
						form.classList.remove('is-error', 'is-success');
						input.click();
					});
				});



				// Firefox focus bug fix for file input
				input.addEventListener('focus', function () {
					input.classList.add('has-focus');
				});

				input.addEventListener('blur', function () {
					input.classList.remove('has-focus');
				});

		}(document, window, 0));

</script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
<script>
		jQuery(function ($) {
			var dateToday = new Date();
			$(".datepicker").datepicker({
				//minDate: dateToday,
				dateFormat: 'dd/mm/yy',
    startDate: '+1d'
});
		
			$('[data-toggle="tooltip"]').tooltip()
		
			$('[data-toggle="popover"]').popover()
		});

		
	</script>
<script type="text/javascript">
jQuery(document).ready(function($){
    /*$("#file-3").on("change", function() {
		 var $el = $('#category_post_upload');
         if($("#file-3")[0].files.length > 6) {
                   alert("You can select only 6 images");
				   $('#file-3 + label > span').html('<i class="fa fa-plus"></i>');				  
				   $el.wrap('<form>').closest('form').get(0).reset();
				   $el.unwrap();
				   return false;
         } 
		 if($("#file-3")[0].files.length < 3) {
                   alert("minimum 3 images required");
				    $('#file-3 + label > span').html('<i class="fa fa-plus"></i>');
					$el.wrap('<form>').closest('form').get(0).reset();
				   $el.unwrap();
				   return false;
         } 
    });*/
	
	
	$.validator.addMethod("validPhoneNumber", function(value, element) {

            //$(element).val(value.trim());

            return this.optional(element) || validPhoneNumber(value);

        }, "Invalid phone number.");
		
	$.validator.addMethod("valueNotEquals", function(value, element, arg){
	  	return arg !== value;
	 }, "This field is required.");
 	
	$("#category_post_upload").validate({
			errorElement: 'span',
			//ignore: [],
			
    		ignore: ":not(select):hidden",
            rules: {

                classified_contact_email: {

                    required: true,

                    email: true,

                    maxlength: 200

                }, 
				'lang[1][title]': { rangelength: [0, 70] },
				'lang[1][title]': { rangelength: [0, 70] },
				'lang[1][description]': { rangelength: [0, 500] },
				'lang[2][description]': { rangelength: [0, 500] },               
				category_id:{valueNotEquals: "0"},
                classified_contact_no:{

                    required: false,

                    maxlength: 15,

                    /*number: true,*/

                   // validPhoneNumber: true,

                    minlength: 8

                },
				property_type_other:{
					required: function(element) {
						return ($("#property_type").val()=="999");
					}	
				},
				amount:{number: true},
				special_amount:{number: true},
				warranty_days:{ maxlength: 2, number: true},
				warranty_months:{ maxlength: 2, number: true},
				warranty_years:{ maxlength: 2, number: true},
				actual_warranty_days:{ maxlength: 2, number: true},
				actual_warranty_months:{ maxlength: 2, number: true},
				actual_warranty_years:{ maxlength: 2, number: true},
				'calculator[0][price]':{number: true},
				'calculator[1][price]':{number: true},
				'calculator[2][price]':{number: true},
				'calculator[3][price]':{number: true},
				'calculator[4][price]':{number: true},
				'calculator[5][price]':{number: true},
				'calculator[6][price]':{number: true},
				'calculator[7][price]':{number: true},
				'calculator[8][price]':{number: true},
				'calculator[9][price]':{number: true},
				'calculator[10][price]':{number: true},
				


            },

            messages: {

                classified_contact_email: {

                    required: 'Please enter email id',

                    email: 'Invalid email id',

                    maxlength: 'Maximum length allowed is 200'

                },

               

                classified_contact_no:{

                    /*required: 'Please enter your phone number',*/

                    maxlength: 'Invalid phone number',

                    /*number: 'Invalid phone number',*/

                },

                
            },
				errorPlacement: function (error, element) {
					if (element.attr("type") == "checkbox" || element.attr("type") == "radio") {
						error.insertAfter($(element).parents('div').prev($('.question_p_er')));
					}else if (element.is('select:hidden')) {
						error.insertAfter(element.next('.nice-select'));
					} else {
						error.insertAfter($(element));
					}
				}

        });
	
	
jQuery(".sel_featured_img_input").change(function() {    
	var relID = jQuery(this).val();
	
	var relthis = jQuery(this);
	$('.sel_featured_img_input').prop('checked', false);
	$(this).prop('checked', true); // Checks it
	
	//if(confirm('Are you sure you want to delete?')){
		if(relID){			
			
			//console.log(ID_iss);				
			data = 'classified_id=<?=(($classifieddetails->id) ? $classifieddetails->id : 0); ?>&read_in=1&reference_id='+relID+'&Table=<?=TABLE_CLASSIFIED_IMAGE; ?>';
			$.ajax({
				dataType:'html',
				url:'<?php print ROOT_URL_BASE ?>company_summary/updateMasterImage',
				data:data,
				method:'POST',
				success:function(data,status,xhr){
					//$('#show-ajax').html(data);
					//alert(data);
					//$('#img_bg_'+relID).removeAttr( 'style' );
					//relthis.prop('checked');
				}
			});
		}
		
		return false;
	//}
 
});

$(document).on('click', '.add_calu', function() { 
	var cl_k = $('#cl_k').val();
	var id = parseInt(cl_k)+1;
	$('#cl_k').val(id);
	$('.calculator_list_'+id).removeClass('hide');
	sumculc();
});
$(document).on('click', '.del_calu', function() { 
	var cl_k = $('#cl_k').val();
	var id = $(this).attr('rel');
	//$('#cl_k').val(id);
	$('.calculator_list_'+id).remove();
	sumculc();
});

$(document).on('change', '.calculator_list_price, #labour_amount', function() { 
	sumculc();
});

function sumculc(){
 	var a = 0;
    $(".calculator_list_price").each(function() {
       if($(this).val()){ a += parseInt($(this).val()); }
    });
	$('#subtotal_amount').val(a);
	if($('#labour_amount').val()){ a += parseInt($('#labour_amount').val()); }
	$('#total_amount').val(a);
    return a;
}

	$(document).on('click', '.image_delete_ads', function() { 
						
				var id = $(this).attr('rel');
				if(confirm('Are you sure you want to delete this image?')){
					data = 'reference_id='+id+'&Table=tbl_classified_image';
					$.ajax({
						dataType:'json',
						url:'<?php print ROOT_URL_BASE ?>delete_anypost',
						data:data,
						method:'POST',
						success:function(data,status,xhr){
							if(data==1){
								$('.img_adv_'+id).remove();
								$('#img_bg_'+id).removeAttr( 'style' );
								location.reload();
								//alert('image deleted successfully');
							}else{
								alert('image not deleted');							
							}
							
						add_length = document.getElementById("upload__photo_list_view").getElementsByTagName("li").length
				  		if(add_length>0){
						 	$('.btn-images-upload').removeClass("hidden");
						}if(add_length<1){
						 	$('.btn-images-upload').addClass("hidden");
						}
							
							//alert(data);
						}
					});
				}
				

			});
			$(document).on('click', '.trash_del_img', function() { 
			
	var relID = jQuery(this).attr('rel');
	var relthis = jQuery(this);
	if(confirm('Are you sure you want to delete?')){
		if(relID){			
			
			//console.log(ID_iss);				
			data = 'reference_id='+relID+'&Table=tbl_classified_image';
			$.ajax({
				dataType:'html',
				url:'<?php print ROOT_URL_BASE ?>delete_anypost',
				data:data,
				method:'POST',
				success:function(data,status,xhr){
					//$('#show-ajax').html(data);
					//alert(data);
					$('#img_bg_'+relID).removeAttr( 'style' );
					relthis.remove();
					location.reload();
				}
			});
		}
		
		return false;
	}
 
});
			
		$(document).on('change', '#file', function() { 
console.log('dffdgdgf');
if($("#file")[0].files.length > 4) {
                   alert("You can select only 4 images");
				   $('#file + label').html('Drop files anywhere to upload <br>Or');				  
				   $el.wrap('<form>').closest('form').get(0).reset();
				   $el.unwrap();
				   return false;
         }
});	
			});
</script> 
<script type="text/javascript">

jQuery( "#search_products_for_auto" ).autocomplete({
		 minLength: 2,
		 source: function (request, response) {
            $.ajax({
                type: 'GET',
                url: '<?=ROOT_URL; ?>company_summary/search_products_for_auto?type=<?=$product_type->id; ?>&search_products='+jQuery('#search_products_for_auto').val()+'&term='+encodeURIComponent(request.term),
                //data: { 'searchtext' : encodeURIComponent(request.term), 'langspecific' : '1' }, // problem here
                dataType: 'json',
                success: function(jsonData) {
					if(jsonData==0){
						
					}else{
                   		 response(jsonData);
						 //$('.form__group__error_list').addClass('hide');
					}
                }
            });
        },
       
		select: function (event, ui) {
			console.log(ui.item.value);        
			  this.value = ui.item.label;
			  window.location.replace('<?=ROOT_URL.'member/create-summary/'.$product_type->product_slug; ?>?ref_id='+ui.item.value);
			  return false;
	  }
    });
	
jQuery(document).on('click', '#product_main_category li', function($) { 
			var parent_id = jQuery(this).attr('rel');
			jQuery.ajax({
				dataType:'html',
				url:'<?=ROOT_URL; ?>company_summary/search_all_category_ul?type=Select Sub Category&parent_id='+parent_id,
				//data:data,
				method:'POST',
				success:function(data,status,xhr){
					//$('#show-ajax').html(data);
					console.log(data);
					jQuery('#product_type ul').html(data)
					jQuery('#product_style ul').html('')
					jQuery('#product_category ul').html('')
					jQuery('#product_cut_part ul').html('');
					jQuery('#category_id_pro').val(parent_id);
					jQuery('#category_id_0').val(parent_id);
					if(!data){
						jQuery('.outer_col_pro_details').removeClass('hide');
					}
					
				}
			});
			jQuery('#product_main_category li').removeClass('active');
					jQuery(this).addClass('active');
			
});
jQuery(document).on('click', '#product_type li', function($) { 
			var parent_id = jQuery(this).attr('rel');
			jQuery.ajax({
				dataType:'html',
				url:'<?=ROOT_URL; ?>company_summary/search_all_category_ul?type=Select Sub Category&parent_id='+parent_id,
				//data:data,
				method:'POST',
				success:function(data,status,xhr){
					//$('#show-ajax').html(data);
					//alert(data);
					jQuery('#product_style ul').html(data)
					jQuery('#product_category ul').html('');
					jQuery('#product_cut_part ul').html('');
					jQuery('#category_id_pro').val(parent_id);
					jQuery('#category_id_1').val(parent_id);
					if(!data){
						jQuery('.outer_col_pro_details').removeClass('hide');
					}
					
					
				}
			});
			jQuery('#product_type li').removeClass('active');
			jQuery(this).addClass('active');
			
});
jQuery(document).on('click', '#product_style li', function($) { 
			var parent_id = jQuery(this).attr('rel');
			jQuery.ajax({
				dataType:'html',
				url:'<?=ROOT_URL; ?>company_summary/search_all_category_ul?type=Select Sub Category&parent_id='+parent_id,
				//data:data,
				method:'POST',
				success:function(data,status,xhr){
					//$('#show-ajax').html(data);
					//alert(data);
					jQuery('#product_category ul').html(data)
					jQuery('#product_cut_part ul').html('');
					jQuery('#category_id_pro').val(parent_id);
					jQuery('#category_id_2').val(parent_id);
					if(!data){
						jQuery('.outer_col_pro_details').removeClass('hide');
					}
					
				}
			});
			jQuery('#product_style li').removeClass('active');
					jQuery(this).addClass('active');
			
});
jQuery(document).on('click', '#product_category li', function($) { 
			var parent_id = jQuery(this).attr('rel');
			jQuery('#category_id_pro').val(parent_id);
			var a=0;
			jQuery.ajax({
				dataType:'html',
				url:'<?=ROOT_URL; ?>company_summary/search_all_category_ul?type=Select Sub Category&parent_id='+parent_id,
				//data:data,
				method:'POST',
				success:function(data,status,xhr){
					//$('#show-ajax').html(data);
					//alert(data);
					//jQuery('#product_category_main_p').html(data)
					
					jQuery('#product_cut_part ul').html(data)
					jQuery('#category_id_pro').val(parent_id);
					jQuery('#category_id_3').val(parent_id);
					if(!data){
						jQuery('.outer_col_pro_details').removeClass('hide');
					}
					
					//jQuery('.col-outer_cate').addClass('hide');
					
				}
			});
			
			jQuery('#product_category li').removeClass('active');
			jQuery(this).addClass('active');
			
			
});
jQuery(document).on('click', '#product_cut_part li', function($) { 
			var parent_id = jQuery(this).attr('rel');
			jQuery('#category_id_pro').val(parent_id);
			
			jQuery.ajax({
				dataType:'html',
				url:'<?=ROOT_URL; ?>company_summary/search_all_category_last?type=Select Sub Category&parent_id='+parent_id,
				//data:data,
				method:'POST',
				success:function(data,status,xhr){
					//$('#show-ajax').html(data);
					//alert(data);
					//jQuery('#product_category_main_p').html(data)
					jQuery('#category_id_pro').val(parent_id);
					jQuery('#category_id_4').val(parent_id);
					jQuery('.outer_col_pro_details').removeClass('hide');
					//jQuery('.col-outer_cate').addClass('hide');
					
				}
			});
			
			jQuery('#product_cut_part li').removeClass('active');
			jQuery(this).addClass('active');
			
			
});

jQuery(document).on('change', '#classified_country', function($) { 
			var parent_id = jQuery(this).val();
			jQuery.ajax({
				dataType:'html',
				url:'<?=ROOT_URL; ?>search_all_geo?type=city&parent_id='+parent_id,
				//data:data,
				method:'POST',
				success:function(data,status,xhr){
					//$('#show-ajax').html(data);
					//alert(data);
					jQuery('#classified_city').html(data)
					
				}
			});
			
});
jQuery(document).on('change', '#classified_city', function($) { 
			var parent_id = jQuery(this).val();
			jQuery.ajax({
				dataType:'html',
				url:'<?=ROOT_URL; ?>search_all_geo?type=town&parent_id='+parent_id,
				//data:data,
				method:'POST',
				success:function(data,status,xhr){
					//$('#show-ajax').html(data);
					//alert(data);
					jQuery('#classified_town').html(data)
				}
			});
			jQuery('select').niceSelect();
});
</script> 

<?php /*?><link rel="stylesheet" href="<?php echo ROOT_URL_BASE?>css/intlTelInput.css">
<script src="<?php echo ROOT_URL_BASE?>js/intlTelInput.min.js"></script> 
<script>
    $("#classified_contact_no").intlTelInput({
      // allowDropdown: false,
      // autoHideDialCode: false,
       autoPlaceholder: "off",
       dropdownContainer: "body",
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      hiddenInput: "full_number",
      // initialCountry: "auto",
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      preferredCountries: ['ae', 'in'],
      separateDialCode: true,
      utilsScript: "<?php echo ROOT_URL_BASE?>js/utils.js"
    });
</script><?php */?>