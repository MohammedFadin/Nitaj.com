		<div id="main-container">
			<div id="breadcrumb">
				<ul class="breadcrumb">
					 <li><i class="fa fa-home"></i><a href="index.html"> Home</a></li>
					 <li>Page</li>	 
					 <li class="active">Profile</li>	 
				</ul>
			</div><!--breadcrumb-->
			<ul class="tab-bar grey-tab">
				<li class="active">
					<a href="#overview" data-toggle="tab">
						<span class="block text-center">
							<i class="fa fa-home fa-2x"></i> 
						</span>
						{{helper:lang line="profile_overview"}}
					</a>
				</li>
				<li>
					<a href="#edit" data-toggle="tab">
						<span class="block text-center">
							<i class="fa fa-edit fa-2x"></i> 
						</span>
						{{helper:lang line="profile_edit"}}
					</a>
				</li>
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
													<?php echo '<p>'.$key.': <strong>'.$value.'</strong></p>';?> 
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
											<?php $work_edu = unserialize($_user['work_and_education']);?>
											<?php foreach ($work_edu as $key => $value):?>
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
							<div class="tab-pane fade" id="edit">
								
								<div class="row">
									<div class="panel panel-info pull-right">
										<div class="panel-body">
											Last Update on 12 Oct,2013
										</div>
									</div><!-- /panel -->
								</div><!-- /.row -->
								
								<div class="panel panel-default">
									<form class="form-horizontal form-border">
										<div class="panel-heading">
											Basic Information
										</div>
										<div class="panel-body">
											<div class="form-group">
												<label class="control-label col-md-2">Username</label>												
												<div class="col-md-10">
													<input type="text" class="form-control input-sm" placeholder="Username" value="John Doe">
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-md-2">Password</label>
												<div class="col-md-10">
													<input type="password" class="form-control input-sm" value="Password">
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-md-2">Email</label>
												<div class="col-md-10">
													<input type="text" class="form-control input-sm" value="john_doe@email.com">
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-md-2">Gender</label>
												<div class="col-md-10">
													<label class="label-radio inline">
														<input type="radio" name="inline-radio" checked>
														<span class="custom-radio"></span>
														Male
													</label>
													<label class="label-radio inline">
														<input type="radio" name="inline-radio">
														<span class="custom-radio"></span>
														Female
													</label>
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-md-2">Address</label>
												<div class="col-md-10">
													<textarea class="form-control" rows="3"></textarea>
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-md-2">Phone</label>
												<div class="col-md-10">
													<input type="text" class="form-control input-sm">
												</div><!-- /.col -->
											</div><!-- /form-group -->
										</div>
										<div class="panel-footer">
											<div class="text-right">
												<button class="btn btn-sm btn-success">Update</button>
												<button class="btn btn-sm btn-success" type="reset">Reset</button>
											</div>
										</div>
									</form>
								</div><!-- /panel -->
							
								<div class="panel panel-default">
									<div class="panel-body padding-xs">
										<textarea class="form-control no-border no-shadow" rows="2" placeholder="What's on your mind?"></textarea>
									</div>
									<div class="panel-footer clearfix">
										<a class="btn btn-xs btn-success pull-right">Post</a>
									</div>
								</div><!-- /panel -->
								<div class="panel panel-default">
									<div class="panel-heading">
										About Me
									</div>
									<div class="panel-body padding-xs">
										<textarea class="form-control no-border no-shadow" rows="5" placeholder="Who are you?"></textarea>
									</div>
									<div class="panel-footer clearfix">
										<a class="btn btn-xs btn-success pull-right">Save</a>
									</div>
								</div><!-- /panel -->
									
								<div class="panel panel-default">
									<div class="panel-heading">
										Products
									</div>
									<table class="table table-bordered table-condensed table-hover table-striped table-vertical-center">
										<thead>
											<tr>
												<th></th>
												<th class="text-center">Name</th>
												<th class="text-center">Price</th>
												<th class="text-center">Total Sales</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="text-center hidden-xs">
													<img data-src="holder.js/60x60" alt="Product Image" src=".">
												</td>
												<td class="text-center">
													Leather Bag
												</td>
												<td class="text-center">
													$50
												</td>
												<td class="text-center">
													102
												</td>
												<td class="text-center">
													<a class="btn btn-sm btn-success">Edit</a>
												</td>
											</tr>
											<tr>
												<td class="text-center hidden-xs">
													<img data-src="holder.js/60x60" alt="Product Image" src=".">
												</td>
												<td class="text-center">
													Brown Sunglasses
												</td>
												<td class="text-center">
													$80
												</td>
												<td class="text-center">
													310
												</td>
												<td class="text-center">
													<a class="btn btn-sm btn-success">Edit</a>
												</td>
											</tr>
											<tr>
												<td class="text-center hidden-xs">
													<img data-src="holder.js/60x60" alt="Product Image" src=".">
												</td>
												<td class="text-center">
													Summer Dress
												</td>
												<td class="text-center">
													$35
												</td>
												<td class="text-center">
													89
												</td>
												<td class="text-center">
													<a class="btn btn-sm btn-success">Edit</a>
												</td>
											</tr>
										</tbody>
									</table>
									<div class="panel-footer text-right">
										<a class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Add Product</a>
										<a class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
									</div>
								</div><!-- panel -->
							</div><!-- /tab2 -->
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
											<span class="from">John Doe</span>		
										
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
											<span class="from">Jane Doe</span>		
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
											<span class="from">John Doe</span>		
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
											<span class="from">John Doe</span>		
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
											<span class="from">John Doe</span>		
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
											<span class="from">John Doe</span>		
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