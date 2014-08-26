<div class="row">
    <div class="col-md-6 col-xs-12">
        <div class="widget stacked">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3>Quick Stats</h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <div class="stats">
                    <div class="stat">
                        <span class="stat-value">12,386</span>
                        Site Visits
                    </div> <!-- /stat -->
                    <div class="stat">
                        <span class="stat-value">9,249</span>
                        Unique Visits
                    </div> <!-- /stat -->
                    <div class="stat">
                        <span class="stat-value">70%</span>
                        New Visits
                    </div> <!-- /stat -->
                </div> <!-- /stats -->
                <div id="chart-stats" class="stats">
                    <div class="stat stat-chart">
                        <div id="donut-chart" class="chart-holder"></div> <!-- #donut -->
                    </div> <!-- /substat -->
                    <div class="stat stat-time">
                        <span class="stat-value">00:28:13</span>
                        Average Time on Site
                    </div> <!-- /substat -->
                </div> <!-- /substats -->
            </div> <!-- /widget-content -->
        </div> <!-- /widget -->
        <div class="widget widget-nopad stacked">
            <div class="widget-header">
                <i class="icon-list-alt"></i>
                <h3>Recent News</h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <ul class="news-items">
                    <li>
                        <div class="news-item-detail">
                            <a href="javascript:;" class="news-item-title">Duis aute irure dolor in reprehenderit</a>
                            <p class="news-item-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                        <div class="news-item-date">
                            <span class="news-item-day">08</span>
                            <span class="news-item-month">Mar</span>
                        </div>
                    </li>
                    <li>
                        <div class="news-item-detail">
                            <a href="javascript:;" class="news-item-title">Duis aute irure dolor in reprehenderit</a>
                            <p class="news-item-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                        <div class="news-item-date">
                            <span class="news-item-day">08</span>
                            <span class="news-item-month">Mar</span>
                        </div>
                    </li>
                    <li>
                        <div class="news-item-detail">
                            <a href="javascript:;" class="news-item-title">Duis aute irure dolor in reprehenderit</a>
                            <p class="news-item-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                        <div class="news-item-date">
                            <span class="news-item-day">08</span>
                            <span class="news-item-month">Mar</span>
                        </div>
                    </li>
                </ul>
            </div> <!-- /widget-content -->
        </div> <!-- /widget -->
        <div class="widget stacked">
            <div class="widget-header">
                <i class="icon-file"></i>
                <h3>Content</h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div> <!-- /widget-content -->
        </div> <!-- /widget -->
    </div> <!-- /span6 -->
    <div class="col-md-6">
        <div class="widget stacked">
            <div class="widget-header">
                <i class="icon-bookmark"></i>
                <h3>Quick Shortcuts</h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <div class="shortcuts">
                    <?php echo $this->Html->link(__('<i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">Settings</span>'), array('controller' => 'configs'), array('escape' => false, 'class' => 'shortcut')); ?>
                    <?php echo $this->Html->link(__('<i class="shortcut-icon icon-bookmark"></i><span class="shortcut-label">Products</span>'), array('controller' => 'products'), array('escape' => false, 'class' => 'shortcut')); ?>
                    <?php echo $this->Html->link(__('<i class="shortcut-icon icon-signal"></i><span class="shortcut-label">Customers</span>'), array('controller' => 'customers'), array('escape' => false, 'class' => 'shortcut')); ?>
                    <?php echo $this->Html->link(__('<i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">Suppliers</span>'), array('controller' => 'suppliers'), array('escape' => false, 'class' => 'shortcut')); ?>
                    <?php echo $this->Html->link(__('<i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">Application Setting</span>'), array('controller' => 'app_configs'), array('escape' => false, 'class' => 'shortcut')); ?>
                    <a href="javascript:;" class="shortcut">
                        <i class="shortcut-icon icon-bookmark"></i>
                        <span class="shortcut-label">Bookmarks</span>
                    </a>
                    <a href="javascript:;" class="shortcut">
                        <i class="shortcut-icon icon-signal"></i>
                        <span class="shortcut-label">Reports</span>
                    </a>
                    <a href="javascript:;" class="shortcut">
                        <i class="shortcut-icon icon-comment"></i>
                        <span class="shortcut-label">Comments</span>
                    </a>
                    <a href="javascript:;" class="shortcut">
                        <i class="shortcut-icon icon-user"></i>
                        <span class="shortcut-label">Users</span>
                    </a>
                    <a href="javascript:;" class="shortcut">
                        <i class="shortcut-icon icon-file"></i>
                        <span class="shortcut-label">Notes</span>
                    </a>
                    <a href="javascript:;" class="shortcut">
                        <i class="shortcut-icon icon-picture"></i>
                        <span class="shortcut-label">Photos</span>
                    </a>
                    <a href="javascript:;" class="shortcut">
                        <i class="shortcut-icon icon-tag"></i>
                        <span class="shortcut-label">Tags</span>
                    </a>
                </div> <!-- /shortcuts -->
            </div> <!-- /widget-content -->
        </div> <!-- /widget -->
        <div class="widget stacked">
            <div class="widget-header">
                <i class="icon-signal"></i>
                <h3>Chart</h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <div id="area-chart" class="chart-holder"></div>
            </div> <!-- /widget-content -->
        </div> <!-- /widget -->
        <div class="widget stacked widget-table action-table">
            <div class="widget-header">
                <i class="icon-th-list"></i>
                <h3>Table</h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table table-striped table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>Engine</th>
                            <th>Browser</th>
                            <th class="td-actions"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 4.0</td>
                            <td class="td-actions">
                                <a href="javascript:;" class="btn btn-xs btn-primary">
                                    <i class="btn-icon-only icon-ok"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 5.0</td>
                            <td class="td-actions">
                                <a href="javascript:;" class="btn btn-xs btn-primary">
                                    <i class="btn-icon-only icon-ok"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 5.5</td>
                            <td class="td-actions">
                                <a href="javascript:;" class="btn btn-xs btn-primary">
                                    <i class="btn-icon-only icon-ok"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 5.5</td>
                            <td class="td-actions">
                                <a href="javascript:;" class="btn btn-xs btn-primary">
                                    <i class="btn-icon-only icon-ok"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 5.5</td>
                            <td class="td-actions">
                                <a href="javascript:;" class="btn btn-xs btn-primary">
                                    <i class="btn-icon-only icon-ok"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 5.5</td>
                            <td class="td-actions">
                                <a href="javascript:;" class="btn btn-xs btn-primary">
                                    <i class="btn-icon-only icon-ok"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- /widget-content -->
        </div> <!-- /widget -->
    </div> <!-- /span6 -->
</div> <!-- /row -->