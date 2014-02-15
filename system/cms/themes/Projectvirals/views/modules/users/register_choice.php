<link rel="stylesheet" href="{{ url:base }}/system/cms/themes/Projectvirals/css/clear_forms/less/styles.css" type="text/css" />           
    <div>
        <div class="container">
        	<div class="row-fluid">
            	<!-- errors valid -->
        <?php if (!empty($error_string)): ?>
        <!-- Woops... -->
        <div class="row-fluid">
            <div class="span12">
              <div class="alert alert-error">
                <a class="close">&times;</a>
                <?php echo $error_string;?>
              </div>
            </div>
        </div>
        <?php endif; ?>     		
        	</div>
            <div class="row">
                <div class="span12">
					<?php echo form_open('register', array('id'=>'register', 'class' => 'crud_form')); ?>                
                    <div class="clear-form two-col">
                        <div class="form-heading">
                            <h3 class="header"><?php echo lang('user:register_step0');?></h3>
                            <hr/>
                        </div>
                        <div class="col1">                            
                            <h4><?php echo lang('user:register_with_social');?></h4>
                            <p>
                            </p>
                            <a href="{{ url:site uri='social/session/facebook' }}" class="btn btn-large btn-block btn-fb"><?php echo lang('user:register_linkedin_btn');?></a>
                            <a href="{{ url:site uri='social/session/twitter' }}" class="btn btn-large btn-block btn-twitter"><?php echo lang('user:register_twitter_btn');?></a>
                        </div>
                        <div class="col2">
                            <div class="form-heading"><!-- without social -->
                                <h4 class="header"><?php echo lang('user:register_without_social');?></h4>                                                        
                            </div>  
                            <div class="form-body">                              
                                    <a href="{{ url:site uri='users/register' }}" class="btn btn-large btn-block btn-fb"><?php echo lang('user:register_btn');?></a>
                           </div>                                 
                        </div>          
                    </div>
                    <?php echo form_close();?>;
                </div>
            </div>
        </div>
    </div>