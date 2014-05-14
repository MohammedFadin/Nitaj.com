<div id="main-container" style="margin-top: -50px;">
            <div class="padding-md">
                <div class="row">
                    <div class="col-md-11"> 
                        <h3 class="headline m-top-md"></h3>
<!--                         <?php var_dump($project);?>
 -->                        <div class="row">   
                            <div class="col-md-8">
                            <div class="panel-body">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3><?php echo $project['title'];?></h3>
                                                </div>
                                                <div class="panel-tab clearfix">
                                                    <ul class="tab-bar">
                                                        <li class="active"><a href="#overview" data-toggle="tab"><i class="fa fa-archive"></i> Overview</a></li>
                                                        <li><a href="#project_files" data-toggle="tab"><i class="fa fa-file"></i> Project Files</a></li>
                                                        <li><a href="#project_activity" data-toggle="tab"><i class="fa fa-bar-chart-o"></i> Project Activity</a></li>
                                                    </ul>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="overview">
                                                            <div class="text-center"> <!-- photo-->
                                                                     <img src="{{url:base}}/resources/uploads/<?php echo $project['logo'];?>" width="200" height="200">
                                                            </div>
                                                            <br/>
                                                            <?php echo $project['description'];?>
                                                        </div>
                                                        <div class="tab-pane fade" id="project_files">
                                                            <object data="{{url:base}}/resources/uploads/Process_Creation_and_Execution2.pdf" type="application/pdf" width="100%" height="500">
                                                            </object>
                                                        </div>
                                                        <div class="tab-pane fade" id="project_activity">
                                                        <p>Future Feature</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /panel -->
                                        </div>
                                <!-- <div class="panel blog-container">

                                    <div class="panel-body">
                                                                            
                                        <h4><?php echo $project['title'];?></h4>
                                        <small class="text-muted">By <a href="#"><strong> John Doe</strong></a> |  Post on Aug 15, 2013  | 3 comments</small>
                                        <div class="seperator"></div>
                                        <div class="seperator"></div>
                                        <div class="text-center">
                                                 <img src="{{url:base}}/resources/uploads/<?php echo $project['logo'];?>" width="200" height="200">
                                                <div class="image-overlay"></div>   
                                        </div>
                                        <p class="m-top-sm m-bottom-sm"><?php echo $project['description'];?></p>
                                        <div class="m-top-sm">
                                            <a href="#" class="btn btn-sm btn-success">Previous</a>
                                            <a href="#" class="btn btn-sm btn-success pull-right">Next Post</a>
                                        </div>
                                    </div>
                                </div> --><!-- /panel -->
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="share-blog clearfix">
                                            <span class="pull-left" style="line-height: 25px;">Project on Social Networks</span>
                                            <div class="pull-right">
                                                <a href="<?php echo $project['facebook'] =! ''? $project['facebook']: '';?>" class="social-connect tooltip-test facebook-hover" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                                <a href="http://twitter.com/<?php echo $project['twitter'] =! ''? $project['twitter']: '';?>" class="social-connect tooltip-test twitter-hover" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="<?php echo $project['linkedin'] =! ''? $project['linkedin']: '';?>" class="social-connect tooltip-test linkedin-hover" data-toggle="tooltip" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /panel -->
                                <h4 class="headline">
                                    About The Founders
                                    <span class="line"></span>
                                </h4>
                                    <?php foreach ($project_team as $key => $member):?>
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <!-- <img src="img/user.jpg" alt="Author" class="img-rounded" style="height:50px; width:50px;"> -->
                                                <i class="fa fa-user fa-3x"></i>
                                            </a>
                                            <div class="media-heading">
                                                <a href="{{url:site uri='/user/<?php echo $member['display_name'];?>'}}" target="_blank"><?php echo $member['first_name'] . ' ' . $member['last_name'];?></a><br>
                                                <!-- <small class="text-muted">Web Designer</small> -->
                                            </div>
                                            <div class="media-body">
                                                <?php echo $member['mini_resume'];?>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /panel -->
                                    <?php endforeach;?>
                                <h4 class="headline">
                                    Comments (none)
                                    <span class="line"></span>
                                </h4>
      <!--                               <?php echo $this->comments->display('1', 'project') ;?>
                                    <?php echo $this->comments->form() ;?> -->
                                <!-- /media-list -->                   
                                <h4 class="headline">
                                    Add Comment
                                    <span class="line"></span>
                                </h4>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>                                             
                                                <input type="text" class="form-control input-sm" placeholder="Name">
                                            </div><!-- /form-group -->
                                        </div><!-- /.col -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Website</label>
                                                <input type="text" class="form-control input-sm" placeholder="Website Url">
                                            </div><!-- /form-group -->
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                    <textarea class="form-control" rows="10"></textarea>
                                    <div class="seperator"></div>
                                    <div class="text-right m-bottom-md">
                                        <button class="btn btn-success">Post Comment</button>
                                    </div>
                                </form>
                            </div><!-- /.col -->
                            <div class="col-md-4">
                                <h4 class="headline">
                                    Similar Projects
                                    <span class="line"></span>
                                </h4>
                                <div class="media popular-post">
                                    <a class="pull-left" href="single_post.html">
                                        <img src="img/gallery1.jpg" alt="Popular Post">
                                    </a>
                                    <div class="media-body">
                                        Mechanical project for pipelining waters more efficient
                                    </div>
                                </div>
                                <div class="media popular-post">
                                    <a class="pull-left" href="single_post.html">
                                        <img src="img/gallery2.jpg" alt="Popular Post">
                                    </a>
                                    <div class="media-body">
                                        3dMax building project for alburj in Dammam
                                    </div>
                                </div>
                                <!-- <h4 class="headline">
                                    CATEGORY
                                    <span class="line"></span>
                                </h4> -->
                                <!-- <ul class="category">
                                    <li><a href="#"><i class="fa fa-chevron-right"></i> Music</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i> Videos</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i> Photography</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i> Food</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i> Uncategorized</a></li>
                                </ul> -->
                                <h4 class="headline">
                                    TAGS
                                    <span class="line"></span>
                                </h4>
                                <div class="tag-wrapper">
                                    <a class="blog-tag" href="#">Technology</a> 
                                    <a class="blog-tag" href="#">Medicen</a> 
                                    <a class="blog-tag" href="#">AutoCad</a>
                                    <a class="blog-tag" href="#">Matlab</a>
                                </div>
                                <h4 class="headline">
                                    Student? Join the projec team
                                    <span class="line"></span>
                                </h4>
                                <button class="btn btn-lg btn-warning" type="button">Join the Team</button>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.padding-md -->
        </div>