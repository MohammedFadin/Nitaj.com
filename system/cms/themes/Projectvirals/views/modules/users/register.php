<link rel="stylesheet" href="system/cms/themes/Projectvirals/css/clear_forms/less/styles.css" type="text/css" />           
    <div class="block">
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
                            <h3 class="header"><?php echo lang('user:register_step1');?></h3>
                            <hr/>
                        </div>
                        <div class="col1">
                            <div class="form-heading"><!-- without social -->
                                <h4 class="header"></h4>                                                        
                            </div>  
                            <div class="form-body">
                                <input type="text" placeholder="Email address">                            
                           </div>                                 
                        </div>          
                    </div>
                    <?php echo form_close();?>;
                </div>
            </div>
        </div>
    </div>