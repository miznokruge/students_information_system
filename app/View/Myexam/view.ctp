<?php
if ($statistic['Statistic']['totalscore'] >= $statistic['Set']['passpercent']) {
    $res = '<label class="label label-success">Passed</label>';
} else {
    $res = '<label class="label label-danger">Failed</label>';
}
?>
<div class="row">
    <div class="statistics view col-md-8">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Statistic'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
                        <td>
                            <?php echo h($statistic['Statistic']['id']); ?>
                            &nbsp;
                        </td>
                    </tr><tr>		<td width="200"><?php echo __('Set'); ?></td>
                        <td>
                            <?php echo $this->Html->link($statistic['Set']['name'], array('controller' => 'sets', 'action' => 'view', $statistic['Set']['id'])); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>		<td><?php echo __('Score'); ?></td>
                        <td>
                            <?php echo h($statistic['Statistic']['score']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>		<td><?php echo __('Totalscore'); ?></td>
                        <td>
                            <?php echo h($statistic['Statistic']['totalscore']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo __('Min required Total Score'); ?></td>
                        <td>
                            <?php echo h($statistic['Set']['passpercent']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo __('Status'); ?></td>
                        <td>
                            <?php echo $res; ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>		<td><?php echo __('Rquestions'); ?></td>
                        <td>
                            <?php echo h($statistic['Statistic']['rquestions']); ?>
                            &nbsp;
                        </td>
                    </tr><tr>		<td><?php echo __('Wquestions'); ?></td>
                        <td>
                            <?php echo h($statistic['Statistic']['wquestions']); ?>
                            &nbsp;
                        </td>
                    </tr><tr>		<td><?php echo __('Time'); ?></td>
                        <td>
                            <?php echo h($statistic['Statistic']['time']); ?>
                            &nbsp;
                        </td>
                    </tr><tr>		<td><?php echo __('Deleted'); ?></td>
                        <td>
                            <?php echo h($statistic['Statistic']['deleted']); ?>
                            &nbsp;
                        </td>
                    </tr>                </table>
            </div>
        </div>
        <!-- disini -->
    </div>
    <div class="col-md-4">
        <div style="margin-bottom:10px;">
            <?php echo $this->Html->link(__('<i class="icon icon-chevron-left"></i> Back to Index'), array('action' => 'index'), array('class' => 'btn btn-block btn-primary', 'escape' => false)); ?> </li>
        </div>
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Other Exam to try'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <ul class="nav-list">
                    <?php foreach ($other as $o) { ?>
                        <li><?php echo $this->Html->link(__($o['Set']['name']), array('controller' => 'exam', 'action' => 'view', $o['Set']['id'])); ?> </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>