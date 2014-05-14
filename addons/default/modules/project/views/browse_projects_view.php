<div id="main-container">
            <div id="breadcrumb">
                <ul class="breadcrumb">
                     <li><i class="fa fa-home"></i><a href="index.html"> Home</a></li>
                     <li class="active">Page</li>    
                     <li class="active">Search Result</li>   
                </ul>
            </div><!-- breadcrumb -->
            
            <div class="padding-md">
                <div class="search-filter">
                    <ul>
                        <?php foreach ($categories as $key => $value):?>
                        <li class="active"><a href=""><?php echo $value['name'];?></a></li>
                        <?php endforeach;?>
                    </ul>
                </div><!-- /search-filter -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group m-bottom-md">
                            <input type="text" class="form-control" placeholder="Search here...">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button">Search</button>
                            </span>
                        </div>
                        <div class="search-options clearfix">
<!--                             <strong style="margin-right:20px;">341 list(s)</strong>
 -->                            <!-- <select class="form-control input-sm" style="display:inline-block; width:100px;">
                                <option value="">Date</option>
                                <option>Name</option>
                                <option>Popular</option>
                            </select> -->
                            <div class="search-pager">
                                <ul class="pagination pagination-sm pagination-split no-margin">
                                    <li class="disabled"><a href="#">&laquo;</a></li>
                                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                 </ul>
                            </div><!-- /search-pager -->
                        </div><!-- /search-option -->
                        <?php foreach ($projects as $key => $project):?>
                        <div class="search-container">
                            <div class="panel panel-default">
                                <div class="panel-body">    
                                    <div class="search-header">
                                        <a href="{{url:site uri='project/view/<?php echo $project['id'];?>'}}" class="h4 inline-block"><?php echo $project['title'];?></a>
                                        <div class="text-muted"><?php echo $project['website'] =! ''? $project['website']:'';?></div>
                                    </div>
                                    
                                    <div class="seperator"></div>
                                    
                                    <p class="m-top-sm">
                                        <a href="#" class="pull-left avatar m-right-sm"> 
                                            <img src="{{url:base}}/resources/uploads/<?php echo $project['logo'];?>" alt="Author"> 
                                        </a>
                                        <?php echo strip_tags($project['description']);?>
                                    </p>
                                    
                                    <div class="text-right">
                                        <a class="btn btn-sm btn-success"><i class="fa fa-star"></i> Follow</a>
                                    </div>
                                </div>
                            </div><!-- /panel -->
                        </div><!-- /search-container -->
                        <?php endforeach;?>
                        <div class="search-options clearfix">
<!--                             <strong style="margin-right:20px;">341 list(s)</strong>
 -->                            <!-- <select class="form-control input-sm" style="display:inline-block; width:100px;">
                                <option value="">Date</option>
                                <option>Name</option>
                                <option>Popular</option>
                            </select> -->

                            <div class="search-pager">
                                <ul class="pagination pagination-sm pagination-split no-margin">
                                    <li class="disabled"><a href="#">&laquo;</a></li>
                                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                 </ul>
                            </div><!-- /search-pager -->
                        </div><!-- /search-option -->
                    </div><!-- /.col -->
                    <!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.padding-sm -->
        </div>