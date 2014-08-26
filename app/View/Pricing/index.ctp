
<div class="pricing-header">
    <h1>30-day Free Trial on All Accounts</h1>
    <h2>No hidden fees. Cancel at anytime. No risk.</h2>
</div> <!-- /.pricing-header -->
<div class="pricing-plans plans-4">
    <?php foreach ($packs as $p) { ?>
        <div class="plan-container">
            <div class="plan stacked <?php echo $p['Membership']['class']; ?>">
                <div class="plan-header">
                    <div class="plan-title">
                        <?php echo $p['Membership']['name']; ?>
                    </div> <!-- /plan-title -->
                    <div class="plan-price">
                        <span class="note">Rp</span><?php echo number_format($p['Membership']['price'], 0); ?><span class="term">Per Year</span>
                    </div> <!-- /plan-price -->
                </div> <!-- /plan-header -->
                <div class="plan-features">
                    <ul>
                        <li><strong>Free</strong> setup</li>
                        <li>Pembahasan Soal <strong><i class="icon-<?php echo $p['Membership']['pembahasan_soal']; ?>"></i></strong></li>
                        <li>Kunci Jawaban <i class="icon-<?php echo $p['Membership']['kunci_jawaban']; ?>"></i></li>
                        <li>Kisi-kisi Soal <i class="icon-<?php echo $p['Membership']['kisi2_soal']; ?>"></i></li>
                        <li>Jumlah Set Soal : <strong><?php echo $p['Membership']['jumlah_set_soal']; ?></strong></li>
                    </ul>
                </div> <!-- /plan-features -->
                <div class="plan-actions">
                    <?php echo $this->Html->link(__('Purchase Now'), array('plugin' => false, 'action' => 'purchase', $p['Membership']['id']), array('class' => 'btn btn-default')); ?>
                </div> <!-- /plan-actions -->
            </div> <!-- /plan -->
        </div> <!-- /plan-container -->
    <?php } ?>
</div> <!-- /pricing-plans -->
<div class="clear"></div>
<br>
<br>
<hr>
<div class="pricing-header">
    <h2>Frequently Asked Questions</h2>
</div> <!-- /.pricing-header -->
<br>
<div class="row">
    <div class="col-md-6">
        <strong><a href="javascript:;">Excepteur sint occaecat cupidatat non proident, sunt?</a></strong>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        <br>
        <strong><a href="javascript:;">Excepteur sint occaecat cupidatat non proident, sunt?</a></strong>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <br>
        <strong><a href="javascript:;">Excepteur sint occaecat cupidatat non proident, sunt?</a></strong>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        <br>
        <strong><a href="javascript:;">Excepteur sint occaecat cupidatat non proident, sunt?</a></strong>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div> <!-- /.span6 -->
    <div class="col-md-6">
        <strong><a href="javascript:;">Excepteur sint occaecat cupidatat non proident, sunt?</a></strong>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <br>
        <strong><a href="javascript:;">Excepteur sint occaecat cupidatat non proident, sunt?</a></strong>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        <br>
        <strong><a href="javascript:;">Excepteur sint occaecat cupidatat non proident, sunt?</a></strong>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <br>
        <strong><a href="javascript:;">Excepteur sint occaecat cupidatat non proident, sunt?</a></strong>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div> <!-- /.span6 -->
</div> <!-- /.row -->