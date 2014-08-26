<div class="row">
    <div class="col-xs-12">
        <div class="invoice-title">
            <h2>Invoice</h2><h3 class="pull-right">Order # 12345</h3>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-6">
                <address>
                    <strong>Billed To:</strong><br>
                    John Smith<br>
                    1234 Main<br>
                    Apt. 4B<br>
                    Springfield, ST 54321
                </address>
            </div>
            <div class="col-xs-6 text-right">
                <address>
                    <strong>Shipped To:</strong><br>
                    Jane Smith<br>
                    1234 Main<br>
                    Apt. 4B<br>
                    Springfield, ST 54321
                </address>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <address>
                    <strong>Payment Method:</strong><br>
                    Visa ending **** 4242<br>
                    jsmith@email.com
                </address>
            </div>
            <div class="col-xs-6 text-right">
                <address>
                    <strong>Order Date:</strong><br>
                    March 7, 2014<br><br>
                </address>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><strong>Order summary</strong></h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <td><strong>Item</strong></td>
                                <td class="text-center"><strong>Price</strong></td>
                                <td class="text-center"><strong>Quantity</strong></td>
                                <td class="text-right"><strong>Totals</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- foreach ($order->lineItems as $line) or some such thing here -->
                            <tr>
                                <td>BS-200</td>
                                <td class="text-center">$10.99</td>
                                <td class="text-center">1</td>
                                <td class="text-right">$10.99</td>
                            </tr>
                            <tr>
                                <td>BS-400</td>
                                <td class="text-center">$20.00</td>
                                <td class="text-center">3</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td>BS-1000</td>
                                <td class="text-center">$600.00</td>
                                <td class="text-center">1</td>
                                <td class="text-right">$600.00</td>
                            </tr>
                            <tr>
                                <td class="thick-line"></td>
                                <td class="thick-line"></td>
                                <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                <td class="thick-line text-right">$670.99</td>
                            </tr>
                            <tr>
                                <td class="no-line"></td>
                                <td class="no-line"></td>
                                <td class="no-line text-center"><strong>Shipping</strong></td>
                                <td class="no-line text-right">$15</td>
                            </tr>
                            <tr>
                                <td class="no-line"></td>
                                <td class="no-line"></td>
                                <td class="no-line text-center"><strong>Total</strong></td>
                                <td class="no-line text-right">$685.99</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .invoice-title h2, .invoice-title h3 {
        display: inline-block;
    }

    .table > tbody > tr > .no-line {
        border-top: none;
    }

    .table > thead > tr > .no-line {
        border-bottom: none;
    }

    .table > tbody > tr > .thick-line {
        border-top: 2px solid;
    }
</style>

<div class="widget" id="invoice-details">
    <div class="widget-header">
        <h3>Invoice Details</h3>

        <div class="widget-actions">
            <div class="btn-group">
                <button class="btn btn-small">New Invoice</button>
                <button data-toggle="dropdown" class="btn btn-small dropdown-toggle"><span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">New Project</a></li>
                    <li><a href="#">New Client</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div><!-- /btn-group -->
        </div> <!-- /.widget-actions -->
    </div> <!-- /.widget-header -->

    <div class="widget-tabs">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#current-invoices">
                    <i class="icon-money"></i>
                    Current Invoice
                </a>
            </li>
            <li class="">
                <a href="#overdue-invoices">
                    <i class="icon-th-list"></i>
                    Overdue Invoices
                    <span class="badge badge-important">1</span>
                </a>
            </li>
            <li class="">
                <a href="#past-invoices">
                    <i class="icon-th-list"></i>
                    Past Invoices
                    <span class="badge badge-warning">4</span>
                </a>
            </li>
        </ul>

    </div> <!-- /.widget-tabs -->

    <div class="widget-content">

        <div class="tab-content">
            <div id="current-invoices" class="tab-pane active">


                <div class="pull-left">
                    <ul class="client_details">
                        <li><strong class="name">John Doe Inc.</strong></li>
                        <li>15 Doe Way</li>
                        <li>Doe City, MI 49000</li>
                        <li>United States</li>
                        <li>Phone: 269-555-5555</li>
                        <li>Faxe: 269-777-7777</li>
                    </ul>
                </div> <!-- /.pull-left -->

                <div class="pull-right">
                    <ul class="invoice_details">
                        <li>Status: <span class="label label-warning">Open</span></li>
                        <li>Invoice Number: 1001</li>
                        <li>Invoice Date: 10/25/2010</li>
                        <li>Job Number: WEB-2345</li>
                    </ul>
                </div> <!-- /.pull-right -->

                <div class="clear"></div>

                <br><br>

                <table class="table table-striped table-bordered table-highlight">

                    <thead>
                        <tr>
                            <th>Qty</th>
                            <th>Unit</th>
                            <th>Description</th>
                            <th class="price">Price</th>
                            <th class="total">Total</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>23.5</td>
                            <td>Hours</td>
                            <td>Custom Web Design</td>
                            <td class="price">100.00</td>
                            <td class="total">$2350.00</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Hours</td>
                            <td>Graphic Design</td>
                            <td class="price">75.00</td>
                            <td class="total">$750.00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Product</td>
                            <td>CMS Install/Setup</td>
                            <td class="price">1000.00</td>
                            <td class="total">$1000.00</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="sub_total"></td>
                            <td class="sub_total">Subtotal:</td>
                            <td class="sub_total">$4100.00</td>
                        </tr>
                        <tr class="total_bar">
                            <td colspan="3" class="grand_total"></td>
                            <td class="grand_total">Total:</td>
                            <td class="grand_total">$4100.00</td>
                        </tr>
                    </tbody>
                </table>

                <br>
                <hr>

                <h3>Invoice Notes</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div> <!-- /.tab-pane -->


            <div id="overdue-invoices" class="tab-pane">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div> <!-- /.tab-pane -->


            <div id="past-invoices" class="tab-pane">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div> <!-- /.tab-pane -->

        </div> <!-- /.tab-content -->

    </div> <!-- /widget-content -->

</div>

<div class="row">

    <div class="span6">

        <div class="widget">

            <div class="widget-header">
                <h3>Tabs on <em>Top</em></h3>
            </div> <!-- /.widget-header -->

            <div class="widget-content">

                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class=""><a data-toggle="tab" href="#tab1">Section 1</a></li>
                        <li class=""><a data-toggle="tab" href="#tab2">Section 2</a></li>
                        <li class="active"><a data-toggle="tab" href="#tab3">Section 3</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab1" class="tab-pane">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                            </p>
                        </div>
                        <div id="tab2" class="tab-pane">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                            </p>
                        </div>
                        <div id="tab3" class="tab-pane active">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                            </p>
                        </div>
                    </div>
                </div>


            </div> <!-- /widget-content -->

        </div> <!-- /widget -->


        <div class="widget">

            <div class="widget-header">
                <h3>Tabs on <em>Left</em></h3>
            </div> <!-- /.widget-header -->

            <div class="widget-content">

                <div class="tabbable tabs-left">
                    <ul class="nav nav-tabs">
                        <li class=""><a data-toggle="tab" href="#tab_l1">Section 1</a></li>
                        <li class=""><a data-toggle="tab" href="#tab_l2">Section 2</a></li>
                        <li class="active"><a data-toggle="tab" href="#tab_l3">Section 3</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab_l1" class="tab-pane">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                            </p>
                        </div>
                        <div id="tab_l2" class="tab-pane">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                            </p>
                        </div>
                        <div id="tab_l3" class="tab-pane active">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                            </p>
                        </div>
                    </div>
                </div>

            </div> <!-- /widget-content -->

        </div> <!-- /widget -->


    </div> <!-- /span6 -->



    <div class="span6">

        <div class="widget">

            <div class="widget-header">
                <h3>Tabs on <em>Bottom</em></h3>
            </div> <!-- /.widget-header -->

            <div class="widget-content">

                <div class="tabbable tabs-below">
                    <div class="tab-content">
                        <div id="tab_b1" class="tab-pane active">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                            </p>
                        </div>
                        <div id="tab_b2" class="tab-pane">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                            </p>
                        </div>
                        <div id="tab_b3" class="tab-pane">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                            </p>
                        </div>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab_b1">Section 1</a></li>
                        <li><a data-toggle="tab" href="#tab_b2">Section 2</a></li>
                        <li><a data-toggle="tab" href="#tab_b3">Section 3</a></li>
                    </ul>
                </div>


            </div> <!-- /widget-content -->

        </div> <!-- /widget -->


        <div class="widget">

            <div class="widget-header">
                <h3>Tabs on <em>Right</em></h3>
            </div> <!-- /.widget-header -->

            <div class="widget-content">

                <div class="tabbable tabs-right">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab_r1">Section 1</a></li>
                        <li><a data-toggle="tab" href="#tab_r2">Section 2</a></li>
                        <li><a data-toggle="tab" href="#tab_r3">Section 3</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab_r1" class="tab-pane active">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                            </p>
                        </div>
                        <div id="tab_r2" class="tab-pane">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                            </p>
                        </div>
                        <div id="tab_r3" class="tab-pane">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tellus felis, sit amet interdum tellus. Suspendisse sit amet scelerisque dui. Vivamus faucibus magna quis augue venenatis ullamcorper. Proin eget mauris eget orci lobortis luctus ac a sem. Curabitur feugiat, eros consectetur egestas iaculis,
                            </p>
                        </div>
                    </div>
                </div>


            </div> <!-- /widget-content -->

        </div> <!-- /widget -->

    </div> <!-- /span6 -->



    <div class="span12">

        <div class="widget">

            <div class="widget-header">

                <h3>
                    <i class="icon-sort"></i>
                    Basic Accordion

                </h3>
            </div> <!-- /.widget-header -->

            <div class="widget-content">

                <div id="basic-accordion" class="accordion">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a href="#collapseOne" data-parent="#basic-accordion" data-toggle="collapse" class="accordion-toggle">
                                Collapsible Group Item #1
                            </a>
                        </div>
                        <div class="accordion-body in collapse" id="collapseOne">
                            <div class="accordion-inner">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt.</p>

                                <p>Vivamus ac velit eget turpis pharetra placerat bibendum at risus. Vestibulum a sodales mauris. Curabitur et nibh nunc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a href="#collapseTwo" data-parent="#basic-accordion" data-toggle="collapse" class="accordion-toggle">
                                Collapsible Group Item #2
                            </a>
                        </div>
                        <div class="accordion-body collapse" id="collapseTwo">
                            <div class="accordion-inner">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqu.</p>

                                <p>Vivamus ac velit eget turpis pharetra placerat bibendum at risus. Vestibulum a sodales mauris. Curabitur et nibh nunc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a href="#collapseThree" data-parent="#basic-accordion" data-toggle="collapse" class="accordion-toggle">
                                Collapsible Group Item #3
                            </a>
                        </div>
                        <div class="accordion-body collapse" id="collapseThree">
                            <div class="accordion-inner">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3.</p>

                                <p>Vivamus ac velit eget turpis pharetra placerat bibendum at risus. Vestibulum a sodales mauris. Curabitur et nibh nunc.</p>

                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- /.widget-content -->

        </div> <!-- /.widget -->


    </div> <!-- /.span12 -->



    <div class="span12">

        <div class="widget widget-accordion">

            <div class="widget-header">

                <h3>
                    <i class="icon-sort"></i>
                    Widget Accordion

                </h3>
            </div> <!-- /.widget-header -->

            <div class="widget-content">

                <div id="sample-accordion" class="accordion">
                    <div class="accordion-group open">
                        <div class="accordion-heading">
                            <a href="#collapseFour" data-parent="#sample-accordion" data-toggle="collapse" class="accordion-toggle">
                                Collapsible Group Item #1
                            </a>

                            <i class="icon-plus toggle-icon"></i>
                        </div>
                        <div class="accordion-body in collapse" id="collapseFour">
                            <div class="accordion-inner">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt.</p>

                                <p>Vivamus ac velit eget turpis pharetra placerat bibendum at risus. Vestibulum a sodales mauris. Curabitur et nibh nunc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a href="#collapseFive" data-parent="#sample-accordion" data-toggle="collapse" class="accordion-toggle">
                                Collapsible Group Item #2
                            </a>

                            <i class="icon-plus toggle-icon"></i>
                        </div>
                        <div class="accordion-body collapse" id="collapseFive">
                            <div class="accordion-inner">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqu.</p>

                                <p>Vivamus ac velit eget turpis pharetra placerat bibendum at risus. Vestibulum a sodales mauris. Curabitur et nibh nunc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a href="#collapseSix" data-parent="#sample-accordion" data-toggle="collapse" class="accordion-toggle">
                                Collapsible Group Item #3
                            </a>

                            <i class="icon-plus toggle-icon"></i>
                        </div>
                        <div class="accordion-body collapse" id="collapseSix">
                            <div class="accordion-inner">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3.</p>

                                <p>Vivamus ac velit eget turpis pharetra placerat bibendum at risus. Vestibulum a sodales mauris. Curabitur et nibh nunc.</p>

                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- /.widget-content -->

        </div> <!-- /.widget -->


    </div> <!-- /.span12 -->




</div>