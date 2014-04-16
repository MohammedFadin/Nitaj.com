		<div id="main-container">
			<div id="breadcrumb">
			</div><!--breadcrumb-->
			<ul class="tab-bar grey-tab">
				<li>
					<a href="{{url:site uri='my-profile'}}" >
						<span class="block text-center">
							<i class="fa fa-home fa-2x"></i> 
						</span>
						{{helper:lang line="profile_overview"}}
					</a>
				</li>
				<li class="active">
					<a href="#edit" data-toggle="tab">
						<span class="block text-center">
							<i class="fa fa-edit fa-2x"></i> 
						</span>
						{{helper:lang line="profile_edit"}}
					</a>
				<li>
					<a href="#message" data-toggle="tab">
						<span class="block text-center">
							<i class="fa fa-envelope fa-2x"></i> 
						</span>	
						Messages
					</a>
				</li>
			</ul>
			<div class="padding-md">
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<div class="row">
							<div class="col-xs-6 col-sm-12 col-md-6 text-center">
								<a href="#">
									<img src="{{helper:gravatar email="user:email" url-only="TRUE"}}" class="img-thumbnail" width="124px" height="124px" />
								</a>
								<div class="seperator"></div>
								<div class="seperator"></div>
							</div><!-- /.col -->
							<div class="col-xs-6 col-sm-12 col-md-6">
								<strong class="font-14">{{user:display_name user_id=_user:id}}{{name}}{{/user:display_name}}</strong>
								<small class="block text-muted">
									{{user:email user_id=_user:id}}{{name}}{{/user:email}}
								</small> 
								<div class="seperator"></div>
								<a class="btn btn-success btn-xs m-bottom-sm">{{helper:lang line="profile_follow"}}</a>
								<div class="seperator"></div>
								<a href="http://facebook.com/<?php echo $_user['facebook'];?>" class="social-connect tooltip-test facebook-hover" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
								<a href="http://twitter.com/<?php echo $_user['twitter'];?>" class="social-connect tooltip-test twitter-hover" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
								<a href="http://google.com/plus/<?php echo $_user['google_plus'];?>" class="social-connect tooltip-test google-plus-hover" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
								<div class="seperator"></div>
								<div class="seperator"></div>
							</div><!-- /.col -->
						</div><!-- /.row -->
						<div class="panel">
							<div class="panel-body">
								<div class="row">
									<div class="col-xs-4 text-center">
										<span class="block font-14">12</span>
										<small class="text-muted">Follower</small>
									</div><!-- /.col -->
									<div class="col-xs-4 pull-right">
										<span class="block font-14">1</span>
										<small class="text-muted">Projects</small>
									</div><!-- /.col -->
								</div><!-- /.row -->
							</div>
						</div><!-- /panel -->
						
						<h5 class="headline">
							{{helper:lang line="profile_skills"}}
							<span class="line"></span>
						</h5>
						<dl>
							<dt>Autocad <span class="pull-right">90%</span></dt>
							<dd>
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-success animated-bar" style="width:90%"></div>
								</div>
							</dd>
							<dt>Marketing <span class="pull-right">75%</span></dt>
							<dd>
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-info animated-bar" style="width:75%"></div>
								</div>
							</dd>
							<dt>Drawing <span class="pull-right">65%</span></dt>
							<dd>
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-warning animated-bar" style="width:65%"></div>
								</div>
							</dd>
							<dt>PHP <span class="pull-right">50%</span></dt>
							<dd>
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-danger animated-bar" style="width:50%"></div>
								</div>
							</dd>
						</dl>
					</div><!-- /.col -->
					<div class="col-md-9 col-sm-9">
						<div class="tab-content">
							<div class="tab-pane fade" id="overview">
								<div class="row">
									<div class="col-md-6">
										<div class="panel panel-default fadeInDown animation-delay2">
											<div class="panel-heading"><!-- mini resume-->
												{{helper:lang line="profile_mini_resume"}}
											</div>
											<div class="panel-body">
												<p>{{user:mini_resume user_id=_user:id}}{{name}}{{/user:mini_resume}}</p>
											</div>
												<li class="list-group-item"> 
													<p>{{helper:lang line="profile_achievements"}}: {{user:achievements user_id=_user:id}}{{name}}{{/user:achievements}}</p> 
												</li> 											
										</div><!-- /panel --><!-- mini resume-->
											
										<div class="panel panel-default fadeInDown animation-delay3"><!-- panel work & education-->
											<div class="panel-heading">
												<i class="fa fa-gavel"></i> {{helper:lang line="profile_personal_section"}}
											</div>
											<ul class="list-group"> 
												<li class="list-group-item"> 
													<p><strong> </strong></p> 
												</li> 
											</ul><!-- /list-group -->																						
										</div><!-- /panel Personal Details-->
									</div><!-- /.col -->
									<div class="col-md-6">
										<div class="panel panel-default fadeInUp animation-delay4">
											<div class="panel-heading">
												{{helper:lang line="profile_myprojects"}} <span class="badge badge-primary">2</span>
											</div>
											<div class="list-group">
												<a href="#" class="list-group-item">
													<div class="list-group-item-text clearfix">
														<span class="img-demo">
															<img src="https://cdn0.iconfinder.com/data/icons/yooicons_set01_socialbookmarks/128/social_google_box.png"/>
														</span>
														<div class="pull-left m-left-sm m-top-sm">
															<strong>Google Project</strong>
															<span class="badge badge-success">1000 {{helper:lang line="profile_total_supporters"}}</span>
															<span class="text-muted block"></span>
														</div>
													</div>
												</a>
												<a href="#" class="list-group-item">
													<div class="list-group-item-text clearfix">
														<span class="img-demo">
															<img src="https://cdn0.iconfinder.com/data/icons/yooicons_set01_socialbookmarks/128/social_google_box.png"/>
														</span>
														<div class="pull-left m-left-sm m-top-sm">
															<strong>Google Project</strong>
															<span class="badge badge-info">50 Supporters</span>
															<span class="text-muted block"></span>
														</div>
													</div>
												</a>
												<a href="#" class="list-group-item">
													<div class="list-group-item-text clearfix">
														<p><strong>Team Members: </strong>Mohammed Fadin, Asiri</p>
														<p><strong>{{helper:lang line="profile_investors"}}: </strong>KFUPM, Remal IT</p>
													</div>
												</a>												
											</div><!-- /list-group -->	
										</div><!-- /panel -->
									</div><!-- /.col MyProjects-->
									<div class="col-md-6"><!-- panel work & education-->
										<div class="panel panel-default fadeInUp animation-delay4">
											<div class="panel-heading">
												<i class="fa fa-gavel"></i> {{helper:lang line="profile_work_education"}}
											</div>
											{{ user:profile user_id=_user:id }}
											{{work_and_education}}
											<ul class="list-group"> 
												<li class="list-group-item"> 
													<p>{{value}}</p> 
													<small class="block text-muted">
														<i class="fa fa-clock-o"></i> 2014
													</small>
												</li> 
										{{/work_and_education}}
											{{ /user:profile }}														
											</ul><!-- /list-group -->
										</div>									
									</div><!-- /panel work & education-->								
									<div class="col-md-6">
									</div><!-- /.col -->
								</div><!-- /.row -->
							</div><!-- /tab1 -->
							<div class="tab-pane fade in active" id="edit">
								<div class="row">
									<div class="panel panel-info pull-right">
										<div class="panel-body">
											Created On <?php echo date('Y-m-d H:i:s', $_user['updated_on']);?>
										</div>
									</div><!-- /panel -->
								</div><!-- /.row -->
    <div class="row-fluid">
        <?php if (validation_errors()): ?>
        <!-- Woops... -->
        <div class="row-fluid">
            <div class="span12">
              <div class="alert alert-error">
                <a class="close">&times;</a>
                <?php echo validation_errors();?>
              </div>
            </div>
        </div>
        <?php endif; ?>
        </div>								
								<div class="panel panel-default">
<!-- 									<form class="form-horizontal form-border">
 -->            <?php echo form_open_multipart('', array('id'=>'user_edit', 'class' => 'crud_form form-horizontal form-border')); ?>																
										<div class="panel-heading">
											Basic Information
										</div>
										<div class="panel-body">
											<div class="form-group">
												<label class="control-label col-md-2"><i class="fa fa-twitter-square fa-2x"></i></label>
												<div class="col-md-2">
													<input type="text" name="twitter" value="<?php echo $_user['twitter'];?>" class="form-control input-sm">
												</div><!-- /.col -->
												<label class="control-label col-md-2"><i class="fa fa-facebook-square fa-2x"></i></label>
												<div class="col-md-2">
													<input type="text" name="facebook" value="<?php echo $_user['facebook'];?>" class="form-control input-sm">
												</div><!-- /.col -->
												<label class="control-label col-md-2"><i class="fa fa-google-plus fa-2x"></i></label>
												<div class="col-md-2">
													<input type="text" name="google_plus" value="<?php echo $_user['google_plus'];?>" class="form-control input-sm">
												</div><!-- /.col -->																								
											</div>
											<div class="form-group">
												<label class="control-label col-md-2"><?php echo lang('profile_display_name'); ?></label>												
												<div class="col-md-10">
													<input type="text" name="display_name" class="form-control input-sm" placeholder="Username" value="<?php echo $display_name;?>">
												</div><!-- /.col -->
											</div>
											<div class="form-group">
												<label class="control-label col-md-2">First Name</label>												
												<div class="col-md-10">
													<input type="text" name="first_name" class="form-control input-sm" placeholder="First Name" value="<?php echo $_user['first_name']; ?>" required>
												</div><!-- /.col -->
											</div>
											<div class="form-group">
												<label class="control-label col-md-2">Last Name</label>												
												<div class="col-md-10">
													<input type="text" name="last_name" class="form-control input-sm" placeholder="Last Name" value="<?php echo $_user['last_name']; ?>" required>
												</div><!-- /.col -->
											</div>											
											<div class="form-group">
												<label class="control-label col-md-2"><?php echo lang('user:password_label') ?></label>
												<div class="col-md-10">
													<input type="password" name="password" class="form-control input-sm" value="">
												</div><!-- /.col -->
											</div>	                              			
											<div class="form-group">
												<label class="control-label col-md-2">Email</label>
												<div class="col-md-10">
													<input type="text" name="email" class="form-control input-sm" value="<?php echo $_user['email'];?>" required>
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<?php foreach ($profile_fields as $field):?>
												<?php if ($field['input']):?>
												<?php if ($field['field_slug'] == 'work_and_education'):?>
											<div class="form-group">
												<div class="row">
											<label class="col-md-2 control-label"><strong>My SKill List</strong></label>
												</div>
												<?php echo $field['input'];?>
											</div>
												<?php endif;?>
												<?php endif;?>
											<?php endforeach;?>
											<div class="form-group">
												<label class="control-label col-md-2">Website Language</label>
												<div class="col-md-10">
													<label class="label-radio inline">
														<input type="radio" name="lang" value="en" <?php echo $_user['lang']=='en'? 'checked':'';?>>
														<span class="custom-radio"></span>
														English
													</label>
													<label class="label-radio inline">
														<input type="radio" name="lang" value="ar" <?php echo $_user['lang']=='ar'? 'checked':'';?>>
														<span class="custom-radio"></span>
														Arabic
													</label>
												</div><!-- /.col -->
											</div>
											<div class="form-group">
												<label class="control-label col-md-2">Gender</label>
												<div class="col-md-10">
													<label class="label-radio inline">
														<input type="radio" name="gender" value="m" <?php echo $_user['gender']=='m'? 'checked':'';?>>
														<span class="custom-radio"></span>
														Male
													</label>
													<label class="label-radio inline">
														<input type="radio" name="gender" value="f" <?php echo $_user['gender']=='f'? 'checked':'';?>>
														<span class="custom-radio"></span>
														Female
													</label>
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-md-2">Mini Resume</label>
												<div class="col-md-10">
													<textarea name="mini_resume" class="form-control" rows="3"><?php echo $_user['mini_resume'];?></textarea>
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-md-2">Achievement</label>
												<div class="col-md-10">
													<textarea name="achievements" class="form-control" rows="3"><?php echo $_user['achievements'];?></textarea>
												</div><!-- /.col -->
											</div>
											<!-- /form-group -->
										</div>
										<div class="panel panel-default">
									<div class="panel-heading">
										My Skills
									</div>
									<?php foreach ($profile_fields as $field):?>
										<?php if ($field['input']):?>
										<?php if ($field['field_slug'] == 'skills_list'):?>
											<?php echo $field['input'];?>
										<?php endif;?>
										<?php endif;?>
									<?php endforeach;?>
									
								</div>
										<div class="panel-footer">
                    						<div class="text-right">
												<button name="btnSubmit" class="btn btn-sm btn-success">Update</button>			
											</div>
								</div><!-- /panel -->
							</div><!-- /tab2 -->
						</div>
        					<?php echo form_close(); ?>							
							<div class="tab-pane fade" id="message">
								<div class="panel panel-default inbox-panel">
									<div class="panel-heading">
										<div class="input-group">
											<input type="text" class="form-control input-sm" placeholder="Search here...">
												<span class="input-group-btn">
												<button class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
											</span>
										</div><!-- /input-group -->
									</div>
									<div class="panel-body">
										<label class="label-checkbox inline">
											<input type="checkbox" id="chk-all">
											 <span class="custom-checkbox"></span>
										</label>
										<a class="btn btn-sm btn-danger"><i class="fa fa-plus"></i> Write Mail</a>
										<a class="btn btn-sm btn-default"><i class="fa fa-trash-o"></i> Delete</a>
								
										<div class="pull-right">
											<a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-refresh"></i></a>			
											<div class="btn-group" id="inboxFilter">
												<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
													All
													<span class="caret"></span>
												</button>
												<ul class="dropdown-menu pull-right">
													<li><a href="#">Read</a></li>
													<li><a href="#">Unread</a></li>
													<li><a href="#">Starred</a></li>
													<li><a href="#">Unstarred</a></li>
												</ul>
											</div>
										</div>
									</div>
									<ul class="list-group">
										<li class="list-group-item clearfix inbox-item">
											<label class="label-checkbox inline">
												<input type="checkbox" class="chk-item">
												<span class="custom-checkbox"></span>
											</label>
											<span class="starred"><i class="fa fa-star fa-lg"></i></span>
											<span class="from">Mohammed Fadin</span>		
										
											<span class="detail">
												<span class="label label-danger">Important</span>		
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.
											</span>
											<span class="inline-block pull-right">
												<span class="attachment"><i class="fa fa-paperclip fa-lg"></i></span>							
												<span class="time">2:32 Am</span>		
											</span>
										</li>
										<li class="list-group-item clearfix inbox-item">
											<label class="label-checkbox inline">
												<input type="checkbox" class="chk-item">
												<span class="custom-checkbox"></span>
											</label>
											<span class="starred"><i class="fa fa-star fa-lg"></i></span>
											<span class="from">Mohammed Fadin</span>		
											<span class="detail">
												<span class="label label-info">Work</span>		
												Nunc vel lorem volutpat, placerat erat ut, pulvinar mi.
											</span>		
											<span class="inline-block pull-right">
												<span class="attachment"><i class="fa fa-paperclip fa-lg"></i></span>							
												<span class="time">1:17 Am</span>		
											</span>
										</li>
										<li class="list-group-item clearfix inbox-item">
											<label class="label-checkbox inline">
												<input type="checkbox" class="chk-item">
												<span class="custom-checkbox"></span>
											</label>
											<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
											<span class="from">My business</span>		
											<span class="detail">Phasellus ac feugiat mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus.</span>		
											<span class="inline-block pull-right">
												<span class="time">Yesterday</span>		
											</span>
										</li>
										<li class="list-group-item clearfix inbox-item">
											<label class="label-checkbox inline">
												<input type="checkbox" class="chk-item">
												<span class="custom-checkbox"></span>
											</label>
											<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
											<span class="from">Mohammed Fadin</span>		
											<span class="detail">Suspendisse tristique ullamcorper sapien id pulvinar.</span>		
											<span class="inline-block pull-right">
												<span class="time">Oct 10</span>		
											</span>
										</li>
										<li class="list-group-item clearfix inbox-item">
											<label class="label-checkbox inline">
												<input type="checkbox" class="chk-item">
												<span class="custom-checkbox"></span>
											</label>
											<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
											<span class="from">Bill Doe</span>	
											<span class="detail">
												<span class="label label-danger">Important</span>												
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.
											</span>		
											<span class="inline-block pull-right">
												<span class="time">Oct 9</span>		
											</span>
										</li>
										<li class="list-group-item clearfix inbox-item">
											<label class="label-checkbox inline">
												<input type="checkbox" class="chk-item">
												<span class="custom-checkbox"></span>
											</label>
											<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
											<span class="from">My friend</span>		
											<span class="detail">
												<span class="label label-warning">Private</span>												
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.
											</span>		
											<span class="inline-block pull-right">
												<span class="time">Oct 9</span>			
											</span>
										</li>
										<li class="list-group-item clearfix inbox-item">
											<label class="label-checkbox inline">
												<input type="checkbox" class="chk-item">
												<span class="custom-checkbox"></span>
											</label>
											<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
											<span class="from">Mohammed Fadin</span>		
											<span class="detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.</span>
											<span class="inline-block pull-right">
												<span class="attachment"><i class="fa fa-paperclip fa-lg"></i></span>							
												<span class="time">Sep 27</span>		
											</span>							
										</li>
										<li class="list-group-item clearfix inbox-item">
											<label class="label-checkbox inline">
												<input type="checkbox" class="chk-item">
												<span class="custom-checkbox"></span>
											</label>
											<span class="starred"><i class="fa fa-star fa-lg"></i></span>
											<span class="from">Jane Doe</span>		
											<span class="detail">Nunc vel lorem volutpat, placerat erat ut, pulvinar mi.</span>		
											<span class="inline-block pull-right">
												<span class="time">Sep 25</span>		
											</span>
										</li>
										<li class="list-group-item clearfix inbox-item">
											<label class="label-checkbox inline">
												<input type="checkbox" class="chk-item">
												 <span class="custom-checkbox"></span>
											</label>
											<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
											<span class="from">My business</span>		
											<span class="detail">
												<span class="label label-info">Work</span>		
												Phasellus ac feugiat mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus.
											</span>		
											<span class="inline-block pull-right">
												<span class="time">Sep 1</span>		
											</span>
										</li>
										<li class="list-group-item clearfix inbox-item">
											<label class="label-checkbox inline">
												<input type="checkbox" class="chk-item">
												<span class="custom-checkbox"></span>
											</label>
											<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
											<span class="from">Mohammed Fadin</span>		
											<span class="detail">Suspendisse tristique ullamcorper sapien id pulvinar.</span>
											<span class="inline-block pull-right">								
												<span class="time">Aug 30</span>		
											</span>
										</li>
										<li class="list-group-item clearfix inbox-item">
											<label class="label-checkbox inline">
												<input type="checkbox" class="chk-item">
												<span class="custom-checkbox"></span>
											</label>
											<span class="starred"><i class="fa fa-star fa-lg"></i></span>
											<span class="from">Bill Doe</span>		
											<span class="detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.</span>		
											<span class="inline-block pull-right">
												<span class="time">Aug 18</span>		
											</span>
										</li>
										<li class="list-group-item clearfix inbox-item">
											<label class="label-checkbox inline">
												<input type="checkbox" class="chk-item">
												<span class="custom-checkbox"></span>
											</label>
											<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
											<span class="from">My friend</span>		
											<span class="detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.</span>		
											<span class="inline-block pull-right">
												<span class="time">Aug 17</span>		
											</span>
										</li>
										<li class="list-group-item clearfix inbox-item">
											<label class="label-checkbox inline">
												<input type="checkbox" class="chk-item">
												<span class="custom-checkbox"></span>
											</label>
											<span class="starred"><i class="fa fa-star fa-lg"></i></span>
											<span class="from">Jane Doe</span>		
											<span class="detail">Nunc vel lorem volutpat, placerat erat ut, pulvinar mi.</span>		
											<span class="inline-block pull-right">
												<span class="time">July 13</span>		
											</span>
										</li>
										<li class="list-group-item clearfix inbox-item">
											<label class="label-checkbox inline">
												<input type="checkbox" class="chk-item">
												 <span class="custom-checkbox"></span>
											</label>
											<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
											<span class="from">My business</span>		
											<span class="detail">Phasellus ac feugiat mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus.</span>		
											<span class="inline-block pull-right">
												<span class="time">July 13</span>		
											</span>
										</li>
										<li class="list-group-item clearfix inbox-item">
											<label class="label-checkbox inline">
												<input type="checkbox" class="chk-item">
												 <span class="custom-checkbox"></span>
											</label>
											<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
											<span class="from">Mohammed Fadin</span>		
											<span class="detail">Suspendisse tristique ullamcorper sapien id pulvinar.</span>		
											<span class="inline-block pull-right">
												<span class="time">July 11</span>		
											</span>
										</li>
										<li class="list-group-item clearfix inbox-item">
											<label class="label-checkbox inline">
												<input type="checkbox" class="chk-item">
												<span class="custom-checkbox"></span>
											</label>
											<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
											<span class="from">Bill Doe</span>		
											<span class="detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.</span>		
											<span class="inline-block pull-right">
												<span class="time">July 8</span>		
											</span>
										</li>
										<li class="list-group-item clearfix inbox-item">
											<label class="label-checkbox inline">
												<input type="checkbox" class="chk-item">
												<span class="custom-checkbox"></span>
											</label>
											<span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
											<span class="from">My friend</span>		
											<span class="detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.</span>		
											<span class="inline-block pull-right">
												<span class="time">July 4</span>		
											</span>
										</li>
									</ul><!-- /list-group -->
									<div class="panel-footer clearfix">
										<div class="pull-left">112 messages</div>
										<div class="pull-right">
											<span class="middle">Page 1 of 8 </span>
											<ul class="pagination middle">
												<li class="disabled"><a href="#"><i class="fa fa-step-backward"></i></a></li>
												<li class="disabled"><a href="#"><i class="fa fa-caret-left large"></i></a></li>
												<li><a href="#"><i class="fa fa-caret-right large"></i></a></li>
												<li><a href="#"><i class="fa fa-step-forward"></i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- /panel -->
							</div><!-- /tab3 -->
						</div><!-- /tab-content -->
					</div><!-- /.col -->
				</div><!-- /.row -->			
			</div><!-- /.padding-md -->
		</div><!-- /main-container -->