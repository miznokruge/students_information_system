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
                    <?php echo $user['User']['first_name']; ?> <?php echo $user['User']['last_name']; ?><br>
                    <?php echo $user['User']['address']; ?><br>
                    <?php echo $user['User']['postal_code']; ?><br>
                    Phone: <?php echo $user['User']['phone']; ?>
                </address>
            </div>
            <div class="col-xs-6 text-right">
                <address>
                    <strong>Payment Method:</strong><br>
                    Bank Transfer
                    <br/>
                    <ul>
                        <li>BCA KCP Citra Raya a/n Misno no 7640435504</li>
                        <li>Bank Mega Citra Raya a/n Istiqomah no 7640435504</li>
                    </ul>
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
                                <td><?php echo $info['Membership']['name']; ?></td>
                                <td class="text-center">Rp.<?php echo number_format($info['Membership']['price'], 0); ?></td>
                                <td class="text-center">1</td>
                                <td class="text-right">Rp.<?php echo number_format($info['Membership']['price'], 0); ?></td>
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