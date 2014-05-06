
<?php echo $this->tag->javascriptInclude('theme/admin/js/plugins/sparkline/jquery.sparkline.min.js'); ?>
<?php echo $this->tag->javascriptInclude('https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;libraries=places&sensor=false', false); ?>
<?php echo $this->tag->javascriptInclude('theme/admin/js/plugins/fancybox/jquery.fancybox.pack.js'); ?>
<?php echo $this->tag->javascriptInclude('theme/admin/js/plugins/rickshaw/d3.v3.js'); ?>
<?php echo $this->tag->javascriptInclude('theme/admin/js/plugins/rickshaw/rickshaw.min.js'); ?>
<?php echo $this->tag->javascriptInclude('theme/admin/js/plugins/knob/jquery.knob.js'); ?>
<?php echo $this->tag->javascriptInclude('theme/admin/js/plugins/daterangepicker/moment.min.js'); ?>
<?php echo $this->tag->javascriptInclude('theme/admin/js/plugins/daterangepicker/daterangepicker.js'); ?>
<?php echo $this->tag->javascriptInclude('theme/admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>
<?php echo $this->tag->javascriptInclude('theme/admin/js/plugins/jvectormap/jquery-jvectormap-europe-mill-en.js'); ?>

<?php echo $this->tag->javascriptInclude('theme/admin/js/plugins.js'); ?>
<?php echo $this->tag->javascriptInclude('theme/admin/js/demo.js'); ?>
<?php echo $this->tag->javascriptInclude('theme/admin/js/actions.js'); ?>
<?php echo $this->tag->javascriptInclude('theme/admin/js/maps.js'); ?>
<?php echo $this->tag->javascriptInclude('theme/admin/js/charts.js'); ?>
 <script>
         
 </script> 
<div class="page-container">
            
            <div class="page-head">
                
                <ul class="page-head-elements">
                    <li><a href="#" class="page-navigation-toggle"><span class="fa fa-bars"></span></a></li>
                    <li class="search">
                        <input type="text" class="form-control" placeholder="Search..."/>
                    </li>
                </ul>

                <ul class="page-head-elements pull-right">
                    <li>
                        <div class="informer informer-pulsate">5</div>
                        <a href="#" class="dropdown"><span class="fa fa-comments"></span></a>                        
                        <div class="popup">
                            <div class="list no-controls scroll" style="height: 300px;">
                                <a href="#" class="list-item">
                                    <div class="list-item-content">
                                        <h4>John Doe</h4>
                                        <p><img src="<?php echo $this->url->getBaseUri(); ?>/theme/admin/img/samples/users/user-30.jpg" class="img-circle pull-left"/> Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
                                        <span class="date">15:54</span>
                                    </div>                                
                                </a>
                                <a href="#" class="list-item">
                                    <div class="list-item-content">
                                        <h4>Benedict Cumberbatch</h4>
                                        <p><img src="<?php echo $this->url->getBaseUri(); ?>/theme/admin/img/samples/users/ben.jpg" class="img-circle pull-left"/> Nulla non venenatis nisl, nec sodales dolor</p>
                                        <span class="date">12:01</span>
                                    </div>
                                </a>
                                <a href="#" class="list-item">
                                    <div class="list-item-content">
                                        <h4>Jonny Lee Miller</h4>
                                        <p><img src="<?php echo $this->url->getBaseUri(); ?>/theme/admin/img/samples/users/jonny.jpg" class="img-circle pull-left"/> Ut leo ante, sodales vitae semper</p>
                                        <span class="date">10:25</span>
                                    </div>
                                </a>
                                <a href="#" class="list-item">
                                    <div class="list-item-content">
                                        <h4>Lucy Liu</h4>
                                        <p><img src="<?php echo $this->url->getBaseUri(); ?>/theme/admin/img/samples/users/liu.jpg" class="img-circle pull-left"/> Maecenas non felis tincidunt, rhoncus risus...</p>
                                        <span class="date">10:18</span>
                                    </div>
                                </a>
                                <a href="#" class="list-item">
                                    <div class="list-item-content">
                                        <h4>Martin Freeman</h4>
                                        <p><img src="<?php echo $this->url->getBaseUri(); ?>/theme/admin/img/samples/users/martin.jpg" class="img-circle pull-left"/> Maecenas non felis tincidunt, rhoncus risus</p>
                                        <span class="date">9:32</span>
                                    </div>
                                </a>
                            </div>
                            <div class="popup-block tac"><a href="pages-mailbox-inbox.html">Show all messages</a></div>
                        </div>
                        <div class="informer informer-pulsate">5</div>
                    </li>
                    
                    <li><a href="#" class="page-sidebar-toggle"><span class="fa fa-tasks"></span></a></li>
                </ul>
                
            </div>
            
            <div class="page-navigation">
                
<!--                <div class="page-navigation-info">
                    <a href="index.html" class="logo">Gemini</a>
                </div>-->
                
                <div class="profile">                    
                    <img src="<?php echo $this->url->getBaseUri(); ?>/theme/admin/img/samples/users/user-30.jpg"/>
                    <div class="profile-info">
                        <a href="#" class="profile-title"><?php echo $this->session->get('auth')['name'] ?></a>
                        <span class="profile-subtitle">Administrator</span>
                        <div class="profile-buttons">
                            <div class="btn-group">                                
                                <a class="but dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation" class="dropdown-header">Profile Menu</li>
                                    <li><a href="#">Messages</a></li>                                    
                                    <li><a href="#">Statistics</a></li>
                                    <li><a href="#">Changelog</a></li>
                                    <li><a href="#">Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="index/end">Logout</a></li>
                                </ul>
                            </div>
                        </div>                        
                    </div>
                </div>

                <ul class="navigation">
                    <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fa fa-desktop"></i> Layouts</a>
                        <ul>
                            <li><a href="layout-boxed.html">Boxed Layout</a></li>
                            <li><a href="layout-nonav.html">Hidden Navigation</a></li>
                            <li><a href="blank.html">Blank</a></li>
                        </ul>
                    </li>                    
                    <li><a href="#"><i class="fa fa-pencil"></i> Form Stuff</a>
                        <ul>
                            <li><a href="form-elements.html">Elements</a></li>
                            <li><a href="form-editable.html">Editable Form</a></li>
                            <li><a href="form-validation.html">Validation</a></li>
                            <li><a href="form-wizard.html">Wizard</a></li>
                            <li><a href="form-wysiwyg.html">WYSIWYG Editors</a></li>
                            <li><a href="form-files.html">File Handling <span class="label label-danger">New</span></a></li>
                        </ul>
                    </li>                    
                    <li><a href="#"><i class="fa fa-cogs"></i> UI Elements</a>
                        <ul>
                            <li><a href="ui-widgets.html">Widgets</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-slider-progress.html">Slider & Progress</a></li>
                            <li><a href="ui-modals.html">Modals & Popups</a></li>
                            <li><a href="ui-tabs.html">Tabs & Accordion</a></li>
                            <li><a href="ui-lists.html">Lists</a></li>
                            <li><a href="ui-blocks-panels.html">Blocks & Panels</a></li>
                            <li><a href="ui-icons.html">Icons</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                            <li><a href="ui-nestable.html">Nestable List</a></li>
                            <li><a href="ui-calendar.html">Calendar<span class="label label-danger">New</span></a></li>
                        </ul>
                    </li> 
                    <li><a href="#"><i class="fa fa-table"></i> Tables</a>
                        <ul>
                            <li><a href="tables-default.html">Default Tables</a></li>
                            <li><a href="tables-datatables.html">DataTables</a></li>                            
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> Maps</a>
                        <ul>
                            <li><a href="maps-google.html">Google Maps</a></li>
                            <li><a href="maps-vector.html">Vector Maps</a></li>                            
                        </ul>
                    </li>
                    <li><a href="charts.html"><i class="fa fa-bar-chart-o"></i> Charts</a>
                    <li><a href="#"><i class="fa fa-folder-open"></i> Pages</a>
                        <ul>
                            <li><a href="#"><i class="fa fa-envelope"></i> Mailbox</a>
                                <ul>
                                    <li><a href="pages-mailbox-inbox.html"><i class="fa fa-inbox"></i> Inbox</a></li>
                                    <li><a href="pages-mailbox-new.html"><i class="fa fa-pencil"></i> New Message</a></li>
                                    <li><a href="pages-mailbox-view.html"><i class="fa fa-eye"></i> View Message</a></li>
                                </ul>
                            </li>
                            <li><a href="pages-signin.html"><i class="fa fa-sign-in"></i> Sign in</a></li>
                            <li><a href="pages-signup.html"><i class="fa fa-user"></i> Sign up</a></li>
                            <li><a href="pages-timeline.html"><i class="fa fa-location-arrow"></i> Timeline</a></li>
                            <li><a href="pages-invoice.html"><i class="fa fa-dollar"></i> Invoice</a></li>
                            <li><a href="pages-profile.html"><i class="fa fa-users"></i> Profile<span class="label label-danger">New</span></a></li>
                            <li><a href="pages-gallery.html"><i class="fa fa-picture-o"></i> Gallery<span class="label label-danger">New</span></a></li>
                            <li><a href="pages-search.html"><i class="fa fa-search"></i> Search<span class="label label-danger">New</span></a></li>
                            <li><a href="pages-faq.html"><i class="fa fa-info-circle"></i> FAQ<span class="label label-danger">New</span></a></li>
                            <li><a href="pages-error-404.html"><i class="fa fa-warning"></i> Error 404</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-code-fork"></i> Navigation Levels</a>
                        <ul>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Second Level</a>
                                <ul>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Third Level</a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-caret-right"></i> Fourth Level</a>
                                                <ul><li><a href="#"><i class="fa fa-caret-right"></i> Fifth Level</a></li></ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </li>                    
                </ul>
                
            </div>
            
            <div class="page-content">

                <div class="container">
                    
                    <div class="page-toolbar">
                        
                        <div class="page-toolbar-block">
                            <div class="page-toolbar-title">Dashboard</div>
                            <div class="page-toolbar-subtitle">Exclusive responsive dashboard</div>
                        </div>
                        
                        <div class="page-toolbar-block pull-right">
                            <div class="widget-info">
                                <div class="widget-info-title">Views</div>
                                <div class="widget-info-value">2,012</div>
                            </div>
                            <div class="widget-info">
                                <div class="widget-info-title">Comments</div>
                                <div class="widget-info-value">323</div>
                            </div>                            
                            <div class="widget-info">
                                <div class="pull-left">
                                    <div class="widget-info-title">Social Activites</div>
                                    <div class="widget-info-value">1,342</div>
                                </div>
                                <div class="widget-info-chart pull-left">
                                    <span class="sparkline" sparkType="bar" sparkBarColor="#4BBDF1" sparkWidth="100" sparkHeight="45" sparkBarWidth="5">5,4,3,2,4,5,6,7,8,6,4,5</span>
                                </div>
                            </div>
                            <div class="widget-info">
                                <div class="pull-left">
                                    <div class="widget-info-title">Click rate</div>
                                    <div class="widget-info-value">30.36</div>
                                </div>
                                <div class="widget-info-chart pull-left">
                                    <span class="sparkline" sparkType="bar" sparkBarColor="#AAD979" sparkWidth="100" sparkHeight="45" sparkBarWidth="5">5,2,3,4,6,3,4,8,7,6,5,4</span>
                                </div>
                            </div>                            
                        </div>         
                        
                    </div>                    

                    <div class="row">  
						                 <?php echo $this->getContent(); ?>
                        <div class="col-md-8">                            
                            
                            <div class="block">
                                <div class="block-head">
                                    <h2>Projects</h2>
                                    <ul class="buttons">
                                        <li><a href="#" class="block-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="block-toggle"><span class="fa fa-chevron-down"></span></a></li>
                                        <li><a href="#" class="block-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>  
                                </div>
                                <div class="block-content list nbfc">                                    
                                    <div class="list-item">
                                        <div class="list-item-content">
                                            <div class="list-item-container list-item-container-small">
                                                <p><span class="label label-info">Working</span></p>
                                                <p class="list-item-date"><i class="fa fa-clock-o"></i> 17:43</p>
                                            </div>
                                            <div class="list-item-container">
                                                <h4>Development UI Kit</h4>
                                                <div class="progress progress-small">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                                </div>
                                            </div>
                                            <div class="list-item-container">
                                                <h4>John Doe</h4>
                                                <p class="text-muted">Web Designer</p>
                                            </div>
                                            <div class="list-item-container">
                                                <h4>State:</h4>
                                                <p class="text-muted">In progress...</p>
                                            </div>
                                            <div class="list-item-right">
                                                <button class="btn btn-primary list-item-trigger"><i class="fa fa-pencil"></i></button>
                                            </div>
                                        </div>
                                        <div class="list-item-controls">
                                            <button class="btn btn-default"><i class="fa fa-pencil-square-o"></i> View</button>
                                            <button class="btn btn-warning"><i class="fa fa-pause"></i> Pause</button>
                                            <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
                                        </div>
                                    </div>
                                    <div class="list-item">
                                        <div class="list-item-content">
                                            <div class="list-item-container list-item-container-small">
                                                <p><span class="label label-info">Working</span></p>
                                                <p class="list-item-date"><i class="fa fa-clock-o"></i> 15:55</p>
                                            </div>
                                            <div class="list-item-container">
                                                <h4>Working with customers</h4>
                                                <div class="progress progress-small">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                                </div>
                                            </div>
                                            <div class="list-item-container">
                                                <h4>Brad Pitt</h4>
                                                <p class="text-muted">Manager</p>
                                            </div>
                                            <div class="list-item-container">
                                                <h4>State:</h4>
                                                <p class="text-muted">In progress...</p>
                                            </div>
                                            <div class="list-item-right">
                                                <button class="btn btn-primary list-item-trigger"><i class="fa fa-pencil"></i></button>
                                            </div>
                                        </div>
                                        <div class="list-item-controls">
                                            <button class="btn btn-default"><i class="fa fa-pencil-square-o"></i> View</button>
                                            <button class="btn btn-warning"><i class="fa fa-pause"></i> Pause</button>
                                            <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
                                        </div>
                                    </div>                                    
                                    <div class="list-item">
                                        <div class="list-item-content">
                                            <div class="list-item-container list-item-container-small">
                                                <p><span class="label label-danger">Removed</span></p>
                                                <p class="list-item-date"><i class="fa fa-clock-o"></i> 14:12</p>
                                            </div>
                                            <div class="list-item-container">
                                                <h4>MySQL - Update Server</h4>
                                                <div class="progress progress-small">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 5%"></div>
                                                </div>                                                                                                
                                            </div>
                                            <div class="list-item-container">
                                                <h4>Martin Freeman</h4>
                                                <p class="text-muted">System Administrator</p>
                                            </div>
                                            <div class="list-item-container">
                                                <h4>Reason:</h4>
                                                <p class="text-muted">Money...</p>
                                            </div>
                                            <div class="list-item-right">
                                                <button class="btn  btn-primary list-item-trigger"><i class="fa fa-pencil"></i></button>
                                            </div>
                                        </div>
                                        <div class="list-item-controls">                                            
                                            <button class="btn btn-danger"><i class="fa fa-refresh"></i> Restore</button>
                                        </div>
                                    </div>
                                    <div class="list-item">
                                        <div class="list-item-content">
                                            <div class="list-item-container list-item-container-small">
                                                <p><span class="label label-warning">Paused</span></p>
                                                <p class="list-item-date"><i class="fa fa-clock-o"></i> 12:32</p>
                                            </div>
                                            <div class="list-item-container">
                                                <h4>dashboard.html</h4>
                                                <div class="progress progress-small">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                </div>                                                                                                
                                            </div>
                                            <div class="list-item-container">
                                                <h4>John Doe</h4>
                                                <p class="text-muted">Web Designer</p>
                                            </div>
                                            <div class="list-item-container">
                                                <h4>Comment:</h4>
                                                <p class="text-muted">Waiting for dev...</p>
                                            </div>
                                            <div class="list-item-right">
                                                <button class="btn btn-primary list-item-trigger"><i class="fa fa-pencil"></i></button>
                                            </div>
                                        </div>
                                        <div class="list-item-controls">
                                            <button class="btn btn-default"><i class="fa fa-pencil-square-o"></i> View</button>
                                            <button class="btn btn-warning"><i class="fa fa-play"></i> Start</button>
                                            <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
                                        </div>
                                    </div>
                                    <div class="list-item">
                                        <div class="list-item-content">
                                            <div class="list-item-container list-item-container-small">
                                                <p><span class="label label-success">Done</span></p>
                                                <p class="list-item-date"><i class="fa fa-clock-o"></i> 09:17</p>
                                            </div>
                                            <div class="list-item-container">
                                                <h4>Framework-ui.psd</h4>
                                                <div class="progress progress-small">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 99%"></div>
                                                </div>                                                                                                
                                            </div>
                                            <div class="list-item-container">
                                                <h4>Lucy Liu</h4>
                                                <p class="text-muted">Designer</p>
                                            </div>
                                            <div class="list-item-container">
                                                <h4>Complete:</h4>
                                                <p class="text-muted"><a href="#"><i class="fa fa-floppy-o"></i> download</a></p>
                                            </div>
                                            <div class="list-item-right">
                                                <button class="btn btn-primary list-item-trigger"><i class="fa fa-pencil"></i></button>
                                            </div>
                                        </div>
                                        <div class="list-item-controls">
                                            <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="block">
                                <div class="block-head">
                                    <h2>Latest Visits</h2>
                                    <div class="block-head-form pull-right">
                                        <div id="reportrange" class="dtrange">                                            
                                            <span></span><b class="caret"></b>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="block-content np">
                                    <div id="charts-legend"></div>
                                    <div class="chart-legend">
                                        <div id="legend"></div>
                                    </div>
                                </div>                                                                
                                <div class="block-footer np">
                                    <ul class="inline-info inline-info-three">
                                        <li>
                                            <span>2,331</span>
                                            visits
                                        </li>
                                        <li>
                                            <span>1,621</span>
                                            return
                                        </li>
                                        <li>
                                            <span>710</span>
                                            new
                                        </li>
                                    </ul>                                    
                                </div>
                            </div>
                            
                            <div class="block">
                                <div class="block-head">
                                    <h2>5 latest transactions</h2>
                                    <div class="block-head-form">
                                        <button class="btn btn-info"><i class="fa fa-eye"></i> View All</button>
                                    </div>
                                </div>
                                <div class="block-content np">
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th>Payee name</th>
                                            <th>Amount</th>
                                            <th>Description</th>
                                            <th>Date/Time</th>
                                            <th>Fee</th>
                                            <th>Manager</th>
                                        </tr>
                                        <tr>
                                            <td>Angelina Jolie</td>
                                            <td>$157.10</td>
                                            <td>Dont forget about fee</td>
                                            <td>20.01.2014 19:24</td>
                                            <td>$30.42</td>
                                            <td>John Doe</td>
                                        </tr>
                                        <tr>
                                            <td>Brad Pitt</td>
                                            <td>$39.45</td>
                                            <td>Delivery...</td>
                                            <td>20.01.2014 18:55</td>
                                            <td>$3.94</td>
                                            <td>John Doe</td>
                                        </tr>
                                        <tr>
                                            <td>Martin Freeman</td>
                                            <td>$78.00</td>
                                            <td>Will pay by cash</td>
                                            <td>20.01.2014 16:41</td>
                                            <td>$0.00</td>
                                            <td>John Doe</td>
                                        </tr>
                                        <tr>
                                            <td>Lucy Liu</td>
                                            <td>$427.31</td>
                                            <td>Call me...</td>
                                            <td>20.01.2014 15:11</td>
                                            <td>$15.71</td>
                                            <td>John Doe</td>
                                        </tr>
                                        <tr>
                                            <td>Jonny Lee Miller</td>
                                            <td>$65.15</td>
                                            <td>Empty</td>
                                            <td>20.01.2014 12:01</td>
                                            <td>$5.65</td>
                                            <td>John Doe</td>
                                        </tr>                                            
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            
                            <div class="widget-window">
                                <div class="window">
                                    <div class="window-title">Recent Sales</div>
                                </div>
                                <div class="window" style="padding: 0px;">
                                    <div id="europe-map" style="height: 250px;"></div>
                                </div>
                            </div>
                            
                            <div class="timeline">
                                <div class="timeline-event">
                                    <div class="timeline-date">
                                        <div><span>18</span> Jan</div>
                                    </div>
                                </div>
                                <div class="timeline-event">
                                    <div class="timeline-event-icon"><i class="fa fa-picture-o"></i></div>
                                    <div class="timeline-event-content">
                                        <div class="event-title">New images in gallery</div>
                                        <p>
                                            <a href="<?php echo $this->url->getBaseUri(); ?>/theme/admin/img/samples/images/img-0.jpg" class="fancybox" rel="img-group"><img src="<?php echo $this->url->getBaseUri(); ?>/theme/admin/img/samples/images/img-0-thumb.jpg" width="70" class="img-rounded"/></a>
                                            <a href="<?php echo $this->url->getBaseUri(); ?>/theme/admin/img/samples/images/img-1.jpg" class="fancybox" rel="img-group"><img src="<?php echo $this->url->getBaseUri(); ?>/theme/admin/img/samples/images/img-1-thumb.jpg" width="70" class="img-rounded"/></a>
                                            <a href="<?php echo $this->url->getBaseUri(); ?>/theme/admin/img/samples/images/img-2.jpg" class="fancybox" rel="img-group"><img src="<?php echo $this->url->getBaseUri(); ?>/theme/admin/img/samples/images/img-2-thumb.jpg" width="70" class="img-rounded"/></a>
                                        </p>
                                        <div class="event-date"><i class="fa fa-clock-o"></i> 16:42</div>
                                    </div>
                                </div>
                                <div class="timeline-event">
                                    <div class="timeline-event-icon"><i class="fa fa-pencil"></i></div>
                                    <div class="timeline-event-content">
                                        <div class="event-title">Lorem ipsum dolor</div>
                                        <p>ullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibuset magnis dis parturient montes, nascetur ridiculus mus...</p>
                                        <p>
                                            <a href="#">application_v12.zip</a><br/>
                                            <a href="#">documents.rar</a><br/>
                                            <a href="#">archive.tar</a>
                                        </p>
                                        <div class="event-date"><i class="fa fa-clock-o"></i> 23:19</div>
                                    </div>
                                </div>
                                <div class="timeline-event">
                                    <div class="timeline-date">
                                        <div><span>17</span> Jan</div>
                                    </div>
                                </div>
                                <div class="timeline-event">
                                    <div class="timeline-event-icon"><i class="fa fa-map-marker"></i></div>
                                    <div class="timeline-event-content">
                                        <div class="event-title">Conference in Kyiv</div>
                                        <div id="main-map-google" style="width: 100%; height: 150px;"></div>
                                        <div class="event-date"><i class="fa fa-clock-o"></i> 14:15</div>
                                    </div>
                                </div>                                
                                                                
                                <div class="timeline-event">
                                    <div class="timeline-date">
                                        <div><span><i class="fa fa-ellipsis-h"></i></span> more</div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>
            <div class="page-sidebar">
				<div class="sidebar-heading"><i class="fa fa-user"></i> Contacts</div>
                <div class="sidebar-title">online</div>
                <div class="list-contacts">
                    <a class="list-item">
                        <div class="list-item-image">
                            <img src="<?php echo $this->url->getBaseUri(); ?>/theme/admin/img/samples/users/user-30.jpg" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>John Doe</h4>
                            <p>New York</p>
                        </div>
                        <div class="item-status item-status-online"></div>
                    </a>
                    <a class="list-item">
                        <div class="list-item-image">
                            <img src="<?php echo $this->url->getBaseUri(); ?>/theme/admin/img/samples/users/brad.jpg" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>Brad Pitt</h4>
                            <p>Los Angeles</p>
                        </div>
                        <div class="item-status item-status-online"></div>
                    </a>
                    <a class="list-item">
                        <div class="list-item-image">
                            <img src="<?php echo $this->url->getBaseUri(); ?>/theme/admin/img/samples/users/jolie.jpg" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>Angelina Jolie</h4>
                            <p>Los Angeles</p>
                        </div>
                        <div class="item-status item-status-away"></div>
                    </a>
                    <a class="list-item">
                        <div class="list-item-image">
                            <img src="<?php echo $this->url->getBaseUri(); ?>/theme/admin/img/samples/users/jonny.jpg" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>Jonny Lee Miller</h4>
                            <p>London</p>
                        </div>
                        <div class="item-status item-status-offline"></div>
                    </a>
                </div>
                
                <div class="sidebar-title">offline</div>
                <div class="list-contacts">
                    <a class="list-item">
                        <div class="list-item-image">
                            <img src="<?php echo $this->url->getBaseUri(); ?>/theme/admin/img/samples/users/liu.jpg" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>Lucy Liu</h4>
                            <p>New York</p>
                        </div>
                        <div class="item-status"></div>
                    </a>
                    <a class="list-item">
                        <div class="list-item-image">
                            <img src="<?php echo $this->url->getBaseUri(); ?>/theme/admin/img/samples/users/ben.jpg" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>Benedict Cumberbatch</h4>
                            <p>London</p>
                        </div>
                        <div class="item-status"></div>
                    </a>
                    <a class="list-item">
                        <div class="list-item-image">
                            <img src="<?php echo $this->url->getBaseUri(); ?>/theme/admin/img/samples/users/martin.jpg" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>Martin Freeman</h4>
                            <p>Aldershot</p>
                        </div>
                        <div class="item-status"></div>
                    </a>
                </div>
                
                <div class="sidebar-block">
                    <button class="btn btn-success btn-block"><i class="fa fa-plus"></i></button>
                </div>                                
			</div>
        </div>
	  