		<div id="main-container">
			<ul class="tab-bar grey-tab">
				<li class="active">
					<a href="#overview" data-toggle="tab">
						<span class="block text-center">
							<i class="fa fa-home fa-2x"></i> 
						</span>
						{{helper:lang line="profile_overview"}}
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
								<strong class="font-14"><!-- {{user:display_name user_id=_user:id}}{{name}}{{/user:display_name}} --></strong>
								<small class="block text-muted">
									<!-- {{user:email user_id=_user:id}}{{name}}{{/user:email}} -->
								</small> 
								<div class="seperator"></div>
								<a class="btn btn-success btn-xs m-bottom-sm">{{helper:lang line="profile_follow"}}</a>
								<div class="seperator"></div>
								<a href="http://facebook.com/<?php echo $_user['facebook'];?>" class="social-connect tooltip-test facebook-hover" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
								<a href="http://twitter.com/<?php echo $_user['twitter'];?>" class="social-connect tooltip-test twitter-hover" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
								<a href="http://googleplus.com/<?php echo $_user['google_plus'];?>" class="social-connect tooltip-test google-plus-hover" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
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
							<div class="tab-pane fade in active" id="overview">
								<div class="row">
									<div class="col-md-6">
										<div class="panel panel-default fadeInDown animation-delay2">
											<div class="panel-heading"><!-- mini resume-->
												{{helper:lang line="profile_mini_resume"}}
											</div>
											<div class="panel-body">
												<p><?php echo $_user['mini_resume'];?></p>
											</div>
												<li class="list-group-item"> 
													<p>{{helper:lang line="profile_achievements"}}: <?php echo $_user['achievements'];?></p> 
												</li> 											
										</div><!-- /panel --><!-- mini resume-->
											
										<div class="panel panel-default fadeInDown animation-delay3"><!-- panel work & education-->
											<div class="panel-heading">
												<i class="fa fa-gavel"></i> {{helper:lang line="profile_personal_section"}}
											</div>
											<ul class="list-group"> 
												<?php foreach ($_user as $key => $value):?>
													<?php if ($key == 'group' || $key == 'email' || $key == 'first_name' || $key == 'last_name' || $key == 'dob'):?>
												<li class="list-group-item"> 
													<?php echo '<p>'.(lang('user:'.$key) == null)? lang('user:'.$key) : lang('user:'.$key);?> <?php echo ': <strong>'.$value.'</strong></p>';?>
												</li>
												<?php endif;?>
												<?php endforeach;?> 
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
											<ul class="list-group"> 
											<?php $work_edu = (empty($_user['work_and_education']))? NULL:unserialize($_user['work_and_education']) ;?>
											<?php foreach ((array)$work_edu as $key => $value):?>
												<li class="list-group-item"> 
													<p><?php echo $value;?></p> 
													<small class="block text-muted">
														<i class="fa fa-clock-o"></i> 2014
													</small>
												</li> 
											<?php endforeach;?>
											</ul><!-- /list-group -->
										</div>									
									</div><!-- /panel work & education-->								
									<div class="col-md-6">
									</div><!-- /.col -->
								</div><!-- /.row -->
							</div><!-- /tab1 -->
						</div><!-- /tab-content -->
					</div><!-- /.col -->
				</div><!-- /.row -->			
			</div><!-- /.padding-md -->

		</div><!-- /main-container -->