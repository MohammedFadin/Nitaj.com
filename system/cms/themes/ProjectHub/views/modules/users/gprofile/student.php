<div id="main-container">
            <div class="padding-md">
                <div class="panel panel-default">
                    <form class="form-horizontal no-margin form-border" id="formWizard1" novalidate>
                        <div class="panel-heading">
                            <?php echo lang('project_header');?>
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
                                            <input type="text" placeholder="Your Project Title" class="form-control input-sm" data-required="true">
                                        </div><!-- /.col -->
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2"><?php echo lang('project_logo');?></label>
                                        <div class="col-lg-6">
                                              <input type="file" class="form-control input-sm" data-required="true">
                                        </div><!-- /.col -->
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2"><?php echo lang('project_category');?></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control input-sm" data-required="true">
                                        </div><!-- /.col -->
                                    </div><!-- /form-group -->      
                                    <div class="form-group">
                                        <label class="control-label col-lg-2"><?php echo lang('project_school');?></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control input-sm" data-required="true">
                                        </div><!-- /.col -->
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-2"><?php echo lang('project_course');?></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control input-sm" data-required="true">
                                        </div><!-- /.col -->
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-2"><?php echo lang('project_website');?></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control input-sm" placeholder="http://your_project.com" data-required="true">
                                        </div><!-- /.col -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="wizardContent2">
                                    <div class="form-group">
                                        <label class="control-label col-lg-2"><?php echo lang('project_team');?></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control input-sm" placeholder="" data-required="true">
                                        </div><!-- /.col -->
                                    </div><!-- /form-group -->      
                                    <div class="form-group">
                                        <label class="control-label col-lg-2"><?php echo lang('project_social');?></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control input-sm" placeholder="Twitter url" data-type="urlstrict">
                                            <input type="text" class="form-control input-sm" placeholder="LinkedIn url" data-type="urlstrict">
                                            <input type="text" class="form-control input-sm" placeholder="Facebook url" data-type="urlstrict">
                                        </div><!-- /.col -->
                                    </div><!-- /form-group -->
                                </div>
                                <div class="tab-pane fade padding-md" id="wizardContent3">
                                <div class="form-group">
                                    <label class="control-label col-lg-2"><?php echo lang('project_desc');?></label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control input-sm" placeholder="" data-required="true">
                                        <div class="input"><?php echo form_textarea(array('id' => 'body', 'name' => 'code', 'value' => '', 'rows' => 30, 'class' => 'wysiwyg-advanced')); ?></div>
                                    </div><!-- /.col -->
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2"><?php echo lang('project_files');?></label>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control input-sm" data-type="urlstrict">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer clearfix">
                            <div class="pull-left">
                                <button class="btn btn-success btn-sm disabled" id="prevStep1" disabled>Previous</button>
                                <button type="submit" class="btn btn-sm btn-success" id="nextStep1">Next</button>
                            </div>

                            <div class="pull-right" style="width:30%">
                                <div class="progress progress-striped active m-top-sm m-bottom-none">
                                    <div class="progress-bar progress-bar-success" id="wizardProgress" style="width:33%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- /panel -->
            </div><!-- /.padding20 -->
        </div>
<link rel="stylesheet" type="text/css" href="http://localhost/senior-project/system/cms/themes/pyrocms/js/ckeditor/skins/moono-dark/editor.css?t=CAPD">        
<script src="{{ url:base }}system/cms/themes/ProjectHub/js/endless/endless_wizard.js"></script>
<script src="{{ url:base }}system/cms/themes/ProjectHub/js/parsley.min.js"></script>