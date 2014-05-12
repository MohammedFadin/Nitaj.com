<div id="main-container">
    <div class="row-fluid" >
        <!-- errors valid -->
    <?php if (validation_errors()):?>
        <div class="span12">
            <div class="alert alert-error">
                <a class="close">&times;</a>
                <?php echo validation_errors();?>
            </div>                  
        </div>
    <?php endif;?>              
    </div>
            <div class="padding-md">
                <?php echo form_open_multipart('project/create', array('class' => 'crud_form form-horizontal no-margin form-border', 'id' => 'formWizard1')); ?>                            
                <div class="panel panel-default">
                    <!-- <form class="form-horizontal no-margin form-border" id="formWizard1" novalidate> -->
                        <div class="panel-heading">
                            <h4><?php echo lang('project_header');?></h4>
                        </div>
                        <div class="panel-tab">
                            <ul class="wizard-steps wizard-demo" id="wizardDemo1"> 
                                <li class="active">
                                    <a href="#wizardContent1" data-toggle="tab">Step 1</a>
                                </li> 
                                <li>
                                    <a href="#wizardContent2" data-toggle="tab">Step 2</a>
                                </li> 
                                <li>
                                    <a href="#wizardContent3" data-toggle="tab">Step 3</a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="wizardContent1">
                                    <div class="form-group">
                                        <label class="control-label col-lg-2"><?php echo lang('project_title');?></label>
                                        <div class="col-lg-6">
                                            <input type="text" name="project_title" placeholder="Your Project Title" value="<?php echo set_value('project_title');?>" class="form-control input-sm" data-required="true">
                                        </div><!-- /.col -->
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2"><?php echo lang('project_logo');?></label>
                                        <div class="col-lg-6">
                                            <div class="upload-file">
                                                <input type="file" name="project_logo" id="upload-demo" class="upload-demo" <?php echo set_value('project_logo');?>>
                                                <label data-title="إختر شعار" for="upload-demo" class="selected">
                                                    <span data-title="لم يتم إختيار أي ملف"></span>
                                                </label>
                                                </div>    
<!--                                             <div class="upload-file">
                                              <?php echo form_upload('project_logo', set_value('project_logo'), 'class=upload-demo'); ?>
                                            </div> -->
                                        </div><!-- /.col -->
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2"><?php echo lang('project_category');?></label>
                                        <div class="col-lg-6">
<!--                                         <?php var_dump($categories);?>
 -->                                            <!-- <input type="text" name="project_category" class="form-control input-sm" value="<?php echo set_value('project_category');?>" data-required="true"> -->
                                            <?php echo form_dropdown('project_category', $categories, set_value('project_category'), 'class=form-control');?>
                                        </div><!-- /.col -->
                                    </div><!-- /form-group -->      
                                    <div class="form-group">
                                        <label class="control-label col-lg-2"><?php echo lang('project_school');?></label>
                                        <div class="col-lg-6">
                                            <input type="text" name="project_school" class="form-control input-sm" value="<?php echo set_value('project_school');?>" data-required="true">
                                        </div><!-- /.col -->
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-2"><?php echo lang('project_course');?></label>
                                        <div class="col-lg-6">
                                            <input type="text" name="project_course" class="form-control input-sm" value="<?php echo set_value('project_course');?>" data-required="true">
                                        </div><!-- /.col -->
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-2"><?php echo lang('project_website');?></label>
                                        <div class="col-lg-6">                                        
                                            <div class="input-group">
                                                <span class="input-group-addon">URL</span>                                            
                                                <input type="text" name="project_website" class="form-control input-sm" value="<?php echo set_value('project_website');?>" placeholder="http://your_project.com" data-required="true">
                                            </div><!-- /.col -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="wizardContent2">
                                    <div class="form-group">
                                        <label class="control-label col-lg-2"><?php echo lang('project_team');?></label>
                                        <div class="col-lg-6">
                                            <!-- <input type="text" name="project_team" class="form-control input-sm" value="<?php echo set_value('project_team');?>" placeholder="" data-required="true"> -->
                                            <input type="text" name="tag[]" value="" class="tag form-control input-sm"/>
                                        </div><!-- /.col -->
                                    </div><!-- /form-group -->      
                                    <div class="form-group">
                                        <label class="control-label col-lg-2"><?php echo lang('project_social');?></label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">&nbsp; @&nbsp; </span>
                                                <input type="text" name="project_twitter" class="form-control" value="<?php echo set_value('project_twitter');?>" placeholder="ُTwitter Username">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">URL</span>
                                                <input type="text" name="project_linkedin" class="form-control" value="<?php echo set_value('project_linkedin');?>" placeholder="LinkedIn URL" data-type="urlstrict">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">URL</span>
                                                <input type="text" name="project_facebook" class="form-control" value="<?php echo set_value('project_facebook');?>" placeholder="Facebook URL" data-type="urlstrict">
                                            </div>
                                        </div><!-- /.col -->
                                    </div><!-- /form-group -->
                                </div>
                                <div class="tab-pane fade padding-md" id="wizardContent3">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label"><?php echo lang('project_desc');?></label>
                                        <div class="col-lg-10">
                                            <?php echo form_textarea(array('id' => 'wysihtml5-textarea', 'name' => 'project_description', 'value' => set_value('project_description'), 'class' => 'form-control', 'row' => 6));?>
                                        </div><!-- /.col -->
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-2"><?php echo lang('project_files');?></label>
                                        <div class="col-lg-6">
                                            <input type="file" name="project_files[]" multiple />
                                            <br/>
                                            <br/>
                                            <div class="alert">
                                                <i class="fa fa-warning">Note: You can choose multiple of files</i>
                                            </div>
                                        </div>
                                        
                                    </div>
                            </div>
                        </div>
                        <div class="panel-footer clearfix">
                            <div class="pull-left">
                                <button class="btn btn-success btn-sm disabled" id="prevStep1" disabled>Previous</button>
                                <button type="submit" class="btn btn-sm btn-success" id="nextStep1">Next</button>
                                <input  type="submit" class="btn btn-sm btn-success" id="lastStepBtn" value="Submit"/>                            
                            </div>

                            <div class="pull-right" style="width:30%">
                                <div class="progress progress-striped active m-top-sm m-bottom-none">
                                    <div class="progress-bar progress-bar-success" id="wizardProgress" style="width:33%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                <?php echo form_close();?>
        </div>
    </div> 
<script type="text/javascript">

$(document).ready(function () {
   $('input.tag').tagedit({
      autocompleteURL: 'auto_complete_project_team' 
    });
});
    
</script>    

<!-- <script type="text/javascript">
    $('#textarea').textext({
        plugins : 'tags autocomplete ajax',
        prompt : '',
        ajax : {
            url : 'project/ajaxteam',
            dataType : 'json',
            cacheResults : true
        }
    });
</script>    --> 