<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo base_url('dashboard')?>">Home</a>
            <i class="icon-angle-right"></i> 
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="<?php echo base_url('theme/option')?>">Add Theme Option</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Theme Option</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message');?></p>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="<?php echo base_url('save/option')?>" method="post" enctype="multipart/form-data">
                    <fieldset>
                        
                        <div class="control-group">
                            <div class="controls">
                                <h2>Header Options</h2>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Site Logo</label>
                            <div class="controls">
                                <input class="span6 typeahead" name="site_logo" id="fileInput" type="file"/>
                                <input name="delete_logo" value="<?php echo get_option('site_logo');?>"  type="hidden"/>
                            </div>
                        </div> 
                        <div class="control-group">
                            <div class="controls">
                                <img src="<?php echo base_url('uploads/');?><?php echo get_option('site_logo');?>" style="width:300px;height:200px"/>
                            </div>
                        </div> 
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Site Favicon</label>
                            <div class="controls">
                                <input class="span6 typeahead" name="site_favicon" id="fileInput" type="file"/>
                                <input name="delete_favicon" value="<?php echo get_option('site_favicon');?>"  type="hidden"/>
                            </div>
                        </div> 
                        
                        <div class="control-group">
                            <div class="controls">
                                <img src="<?php echo base_url('uploads/');?><?php echo get_option('site_favicon');?>" style="width:300px;height:200px"/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <div class="controls">
                                <h2>Footer Options</h2>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Copyright Info</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php get_option('site_copyright');?>" name="site_copyright" id="fileInput" type="text"/>
                            </div>
                        </div> 
                        
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Contact Number 1 Info</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php get_option('site_contact_num1');?>" name="site_contact_num1" id="fileInput" type="text"/>
                            </div>
                        </div> 
                        
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Contact Number 2 Info</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php get_option('site_contact_num2');?>" name="site_contact_num2" id="fileInput" type="text"/>
                            </div>
                        </div> 
                        
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Facebook Link</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php get_option('site_facebook_link');?>" name="site_facebook_link" id="fileInput" type="text"/>
                            </div>
                        </div> 
                        
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Twitter Link</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php get_option('site_twitter_link');?>" name="site_twitter_link" id="fileInput" type="text"/>
                            </div>
                        </div> 
                        
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Google plus Link</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php get_option('site_google_plus_link');?>" name="site_google_plus_link" id="fileInput" type="text"/>
                            </div>
                        </div> 
                        
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Email Link</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php get_option('site_email_link');?>" name="site_email_link" id="fileInput" type="text"/>
                            </div>
                        </div> 
                        
                        
                        <div class="control-group">
                            <div class="controls">
                                <h2>Contact Page Information</h2>
                            </div>
                        </div> 
                        
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Contact Title</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php get_option('contact_title');?>" name="contact_title" id="fileInput" type="text"/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Contact SubTitle</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php get_option('contact_subtitle');?>" name="contact_subtitle" id="fileInput" type="text"/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Contact Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="contact_description" cols="30" rows="8">
                                    <?php get_option('contact_description');?>

                                </textarea>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <div class="controls">
                                <h2>Company Information </h2>
                            </div>
                        </div> 
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Company Location</label>
                            <div class="controls">
                                <textarea class="cleditor" name="company_location" cols="30" rows="8">
                                    <?php get_option('company_location');?>
                                </textarea>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Company Phone Number</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php get_option('company_number');?>" name="company_number" id="fileInput" type="text"/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Company Email Address</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php get_option('company_email');?>" name="company_email" id="fileInput" type="text"/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Company Facebook</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php get_option('company_facebook');?>" name="company_facebook" id="fileInput" type="text"/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Company Twitter</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php get_option('company_twitter');?>" name="company_twitter" id="fileInput" type="text"/>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>   

            </div>
        </div><!--/span-->

    </div><!--/row-->


</div><!--/.fluid-container-->

<!-- end: Content -->