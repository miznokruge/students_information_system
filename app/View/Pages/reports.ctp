<?php
echo $this->Html->css(array('pages/reports','custom'));
?>
<div class="row">
    <div class="col-md-12">
        <div class="widget big-stats-container stacked">
            <div class="widget-content">
                <div id="big_stats" class="cf">
                    <div class="stat">								
                        <h4>Pending Sales Today</h4>
                        <span class="value">12</span>								
                    </div> <!-- .stat -->
                    <div class="stat">								
                        <h4>Completed Sales Today</h4>
                        <span class="value">23</span>								
                    </div> <!-- .stat -->
                    <div class="stat">								
                        <h4>Returned Items Today</h4>
                        <span class="value">2</span>								
                    </div> <!-- .stat -->
                    <div class="stat">								
                        <h4>Something Else</h4>
                        <span class="value">13</span>								
                    </div> <!-- .stat -->
                </div>
            </div> <!-- /widget-content -->
        </div> <!-- /widget -->
    </div> <!-- /span12 -->	
</div> <!-- /row -->
<div class="row">
    <div class="col-md-6">
        <div class="widget stacked">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3>Quick Stats</h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <div style="padding: 0px; position: relative;" id="pie-chart" class="chart-holder"><canvas height="250" width="531" class="base"></canvas><canvas style="position: absolute; left: 0px; top: 0px;" height="250" width="531" class="overlay"></canvas><div class="legend"><table style="position:absolute;top:10px;right:5px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #888;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(255,153,0);overflow:hidden"></div></div></td><td class="legendLabel">Series1</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #888;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(34,34,34);overflow:hidden"></div></div></td><td class="legendLabel">Series2</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #888;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(102,102,102);overflow:hidden"></div></div></td><td class="legendLabel">Series3</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #888;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(187,187,187);overflow:hidden"></div></div></td><td class="legendLabel">Series4</td></tr></tbody></table></div></div>
            </div> <!-- /widget-content -->
        </div> <!-- /widget -->
    </div> <!-- /span6 -->
    <div class="col-md-6">
        <div class="widget stacked">
            <div class="widget-header">
                <i class="icon-list-alt"></i>
                <h3>Recent News</h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <div style="padding: 0px; position: relative;" id="bar-chart" class="chart-holder"><canvas height="250" width="531" class="base"></canvas><canvas style="position: absolute; left: 0px; top: 0px;" height="250" width="531" class="overlay"></canvas><div class="tickLabels" style="font-size:smaller"><div class="xAxis x1Axis" style="color:#545454"><div class="tickLabel" style="position:absolute;text-align:center;left:38px;top:228px;width:48px">1.0</div><div class="tickLabel" style="position:absolute;text-align:center;left:90px;top:228px;width:48px">1.5</div><div class="tickLabel" style="position:absolute;text-align:center;left:143px;top:228px;width:48px">2.0</div><div class="tickLabel" style="position:absolute;text-align:center;left:196px;top:228px;width:48px">2.5</div><div class="tickLabel" style="position:absolute;text-align:center;left:249px;top:228px;width:48px">3.0</div><div class="tickLabel" style="position:absolute;text-align:center;left:301px;top:228px;width:48px">3.5</div><div class="tickLabel" style="position:absolute;text-align:center;left:354px;top:228px;width:48px">4.0</div><div class="tickLabel" style="position:absolute;text-align:center;left:407px;top:228px;width:48px">4.5</div><div class="tickLabel" style="position:absolute;text-align:center;left:459px;top:228px;width:48px">5.0</div></div><div class="yAxis y1Axis" style="color:#545454"><div class="tickLabel" style="position:absolute;text-align:right;top:210px;right:520px;width:11px">0</div><div class="tickLabel" style="position:absolute;text-align:right;top:174px;right:520px;width:11px">10</div><div class="tickLabel" style="position:absolute;text-align:right;top:138px;right:520px;width:11px">20</div><div class="tickLabel" style="position:absolute;text-align:right;top:102px;right:520px;width:11px">30</div><div class="tickLabel" style="position:absolute;text-align:right;top:65px;right:520px;width:11px">40</div><div class="tickLabel" style="position:absolute;text-align:right;top:29px;right:520px;width:11px">50</div><div class="tickLabel" style="position:absolute;text-align:right;top:-7px;right:520px;width:11px">60</div></div></div></div>
            </div> <!-- /widget-content -->
        </div> <!-- /widget -->
    </div> <!-- /span6 -->
</div> <!-- /row -->
<div class="row">
    <div class="col-md-4">
        <div class="widget stacked widget-table">
            <div class="widget-header">
                <span class="icon-list-alt"></span>
                <h3>Top Referrers</h3>
            </div> <!-- .widget-header -->
            <div class="widget-content">
                <table class="table table-bordered table-responsive table-striped">
                    <thead><tr>								
                            <th>Referrer</th>
                            <th>Uniques</th>								
                        </tr></thead>
                    <tbody><tr>
                            <td class="description"><a href="http://google.com">http://google.com</a></td>
                            <td class="value"><span>1123</span></td>
                        </tr>
                        <tr>
                            <td class="description"><a href="http://yahoo.com">http://yahoo.com</a></td>
                            <td class="value"><span>927</span></td>
                        </tr>
                        <tr>
                            <td class="description"><a href="http://themeforest.net">http://themeforest.net</a></td>
                            <td class="value"><span>834</span></td>
                        </tr>
                        <tr>
                            <td class="description"><a href="http://codecanyon.net">codecanyon.net</a></td>
                            <td class="value"><span>625</span></td>
                        </tr>
                        <tr>
                            <td class="description"><a href="http://graphicriver.net">http://graphicriver.net</a></td>
                            <td class="value"><span>593</span></td>
                        </tr>
                        <tr>
                            <td class="description"><a href="http://bing.com">http://bing.com</a></td>
                            <td class="value"><span>324</span></td>
                        </tr>
                    </tbody></table>
            </div> <!-- .widget-content -->
        </div> <!-- /widget -->	
    </div> <!-- /span4 -->
    <div class="col-md-4">
        <div class="widget stacked widget-table">
            <div class="widget-header">
                <span class="icon-file"></span>
                <h3>Most Visited Pages</h3>
            </div> <!-- .widget-header -->
            <div class="widget-content">
                <table class="table table-bordered table-responsive table-striped">
                    <thead><tr>								
                            <th>Page</th>
                            <th>Visits</th>								
                        </tr></thead>
                    <tbody><tr>
                            <td class="description"><a href="javascript:;">Homepage</a></td>
                            <td class="value"><span>1123</span></td>
                        </tr>
                        <tr>
                            <td class="description"><a href="javascript:;">Portfolio</a></td>
                            <td class="value"><span>927</span></td>
                        </tr>
                        <tr>
                            <td class="description"><a href="javascript:;">Services</a></td>
                            <td class="value"><span>834</span></td>
                        </tr>
                        <tr>
                            <td class="description"><a href="javascript:;">Contact Us</a></td>
                            <td class="value"><span>625</span></td>
                        </tr>
                        <tr>
                            <td class="description"><a href="javascript:;">Testimonials</a></td>
                            <td class="value"><span>593</span></td>
                        </tr>
                        <tr>
                            <td class="description"><a href="javascript:;">Signup</a></td>
                            <td class="value"><span>456</span></td>
                        </tr>
                    </tbody></table>
            </div> <!-- .widget-content -->
        </div>
    </div> <!-- /span4 -->
    <div class="col-md-4">
        <div class="widget stacked widget-table">
            <div class="widget-header">
                <span class="icon-external-link"></span>
                <h3>Browsers</h3>
            </div> <!-- .widget-header -->
            <div class="widget-content">
                <table class="table table-bordered table-responsive table-striped">
                    <thead><tr>								
                            <th>Browser</th>
                            <th>Visits</th>								
                        </tr></thead>
                    <tbody><tr>
                            <td class="description">Firefox</td>
                            <td class="value"><span>1123</span></td>
                        </tr>
                        <tr>
                            <td class="description">Chrome</td>
                            <td class="value"><span>927</span></td>
                        </tr>
                        <tr>
                            <td class="description">Internet Explorer</td>
                            <td class="value"><span>834</span></td>
                        </tr>
                        <tr>
                            <td class="description">Safari</td>
                            <td class="value"><span>625</span></td>
                        </tr>
                        <tr>
                            <td class="description">Opera</td>
                            <td class="value"><span>593</span></td>
                        </tr>
                        <tr>
                            <td class="description">Netscape</td>
                            <td class="value"><span>123</span></td>
                        </tr>
                    </tbody></table>
            </div> <!-- .widget-content -->
        </div>
    </div> <!-- /span4 -->
</div> <!-- /row -->
