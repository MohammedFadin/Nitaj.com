<div id="main-container">
            <div class="row row-merge">
                <div class="col-sm-3 bg-primary custom-grid menu-grid">
                    <button type="button" class="navbar-toggle" id="inboxMenuToggle" >
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="menu-header">
                        Private Message
                        <a class="btn btn-sm pull-right" href="#newFolder" data-toggle="modal"><i class="fa fa-plus"></i></a>
                    </div>
                    <ul class="inbox-menu" id="inboxMenu">
                        <li>
                            <a href="#">
                                <i class="fa fa-inbox fa-lg"></i>
                                <span class="m-left-xs">Inbox</span>
                                <span class="badge badge-success pull-right">19</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-envelope fa-lg"></i>
                                <span class="m-left-xs">Sent PM</span>
                                <span class="badge badge-danger pull-right">1</span>
                            </a>
                        </li>
                    </ul>
                </div><!-- /.col -->
                <div class="col-sm-9">
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
                            <a class="btn btn-sm btn-danger"><i class="fa fa-plus"></i> Write PM</a>
                            <a class="btn btn-sm btn-default"><i class="fa fa-trash-o"></i> Delete</a>
                    
                            <div class="pull-right">
                                <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-refresh"></i></a>          
                                <div class="btn-group" id="inboxFilter">
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Read</a></li>
                                        <li><a href="#">Unread</a></li>
                                        <li><a href="#">Starred</a></li>
                                        <li><a href="#">Unstarred</a></li>
                                    </ul>
                                </div><!-- /btn-group -->
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
                                <span class="from">Sarah</span>      
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
                                <span class="from">Asiri</span>  
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
                                <span class="from">Sobialab</span>     
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
                                <span class="from">Sarah</span>      
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
                                <span class="from">Asiri</span>      
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
                                <span class="from">Sobialab</span>     
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
                                <span class="from">Sarah</span>      
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
                                <span class="from">Asiri</span>      
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
                                <span class="from">Sobialab</span>     
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
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>