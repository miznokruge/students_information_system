<div class="row">
    <div class="sets view col-md-10">
        <div class="bs-example">
            <h3>Ujian: <?php echo $set['Set']['name']; ?></h3>
            <ol>
                <li>Waktu: <?php echo $this->Util->secToMinute($set['Set']['timeset']); ?> <?php echo __('minutes'); ?></li>
                <li>Jawaban ditampilkan : <?php echo $set['Set']['answeron']; ?></li>
                <li>Tries : <?php echo $set['Set']['tries']; ?></li>
                <li>Tries used : <?php echo $tries; ?></li>
                <li>Is Open : <?php echo $set['Set']['isopen']; ?></li>
                <li>Pass Info : <?php echo $set['Set']['passinfo']; ?></li>
            </ol>
            <?php if ($start_exam == false) { ?>
                <?php
                if ($tries > $set['Set']['tries']):
                    ?>
                    <div class="alert alert-danger">
                        <h2><?php echo __('Cannot start Exam'); ?></h2>
                        <p>
                            <?php echo __('Sorry. exam tries has been exceeded'); ?>
                        </p>
                    </div>
                    <?php
                else:
                    ?>
                    <div class = "well">
                        <h5>Exam not started</h5>
                        <p>
                            Please click "start exam" to start exam
                        </p>
                        <?php
                        echo $this->Form->create("Set", array("url" => array('controller' => 'exam', 'action' => 'start', $set['Set']['id'])));
                        if ($set['Set']['password'] != '') {
                            echo $this->Form->input('Set.password', array('class' => 'form-control', 'div' => 'form-group', 'label' => 'Please enter enrollment key'));
                        }
                        echo $this->Form->submit(__('Start Exam'), array('class' => 'btn btn-lg btn-primary'));
                        echo $this->Form->end();
                        ?>
                    </div>
                <?php
                endif;
            }
            ?>
            <?php if ($start_exam) { ?>
                <?php if (!$jawaban) {
                    ?>
                    <script type="text/javascript">
                        $(document).ready(function() {

                            startCount();

                            function startCount()
                            {
                                timer = setInterval(count, 1000);
                            }
                            function count()
                            {
                                var time_shown = $("#realtime").text();
                                var time_chunks = time_shown.split(":");
                                var hour, mins, secs;

                                hour = Number(time_chunks[0]);
                                mins = Number(time_chunks[1]);
                                secs = Number(time_chunks[2]);
                                secs++;
                                if (secs == 60) {
                                    secs = 0;
                                    mins = mins + 1;
                                }
                                if (mins == 60) {
                                    mins = 0;
                                    hour = hour + 1;
                                }
                                if (hour == 13) {
                                    hour = 1;
                                }

                                $("#realtime").text(hour + ":" + plz(mins) + ":" + plz(secs));

                            }

                            function plz(digit) {

                                var zpad = digit + '';
                                if (digit < 10) {
                                    zpad = "0" + zpad;
                                }
                                return zpad;
                            }

                        });
                    </script>
                    <div id="box-timer">
                        <?php if ($set['Set']['timeset'] != '0') { ?>
                            <div id="cdw"></div>
                        <?php } else { ?>
                            <div id="realtime"></div>
                        <?php } ?>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-warning alert-dismissable">
                        Salah: <?php echo $wrong; ?>, Benar: <?php echo $right; ?>, Percent : <?php echo number_format($right / $jumlah * 100, 2); ?>% | untuk lulus, anda perlu <?php echo $set['Set']['passpercent']; ?> %
                    </div>
                <?php }
                ?>
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#q-detail" data-toggle="tab">Questions</a></li>
                    <li class=""><a href="#home" data-toggle="tab"><?php echo __('Question Set Detail'); ?></a></li>
                    <li class=""><a href="#profile" data-toggle="tab">Comments (<?php echo count($set['Comment']); ?>)</a></li>
                    <li class=""><a href="#stat" data-toggle="tab">Stat (<?php echo count($set['Statistic']); ?>)</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="q-detail">
                        <?php if (!empty($set['Question']) && $disable == FALSE): ?>
                            <?php echo $this->Form->create("exam"); ?>
                            <table cellpadding = "0" cellspacing = "0" id="tb_exam">
                                <tr>
                                    <th align="left"><?php echo __('Question'); ?></th>
                                    <!-- <?php if ($jawaban) { ?> <th><?php echo __('Solution'); ?></th><?php } ?>
                                  <th><?php echo __('Solexp'); ?></th>
                                 <th><?php echo __('Ismcq'); ?></th>
                                 <th><?php echo __('Ismultiple'); ?></th>
                                 <th><?php echo __('Isoe'); ?></th>
                                 <th><?php echo __('Image'); ?></th>
                                 <th><?php echo __('Imageext'); ?></th>
                                 <th><?php echo __('Isimport'); ?></th>
                                 <th><?php echo __('Status'); ?></th>
                                 <th><?php echo __('Deleted'); ?></th>-->
                                </tr>
                                <?php
                                $no = 0;
                                foreach ($set['Question'] as $question):
                                    ?>
                                    <tr>
                                        <td style="padding-bottom: 20px;">
                                            <?php echo ($no + 1); ?>.<?php echo $question['question']; ?>
                                            <input type="hidden" name="data[exam][<?php echo $no; ?>][qst]" value="<?php echo $question['id']; ?>"/>
                                            <div class="row">
                                                <ul class="opsi_jawaban col-md-8">
                                                    <?php
                                                    if ($jawaban) {
                                                        $pilih_disable = 'readonly = "readonly" ';
                                                    } else {
                                                        $pilih_disable = '';
                                                    }
                                                    for ($i = 1; $i <= 5; $i++) {
                                                        if ($question['sol' . $i] != '') {
                                                            ?>
                                                            <li>
                                                                <input <?php
                                                                echo $pilih_disable;
                                                                if (isset($eval[$no]['answer']) && $eval[$no]['answer'] == $i) {
                                                                    ?>checked="checked"<?php } ?> class="ans" type="radio" name="data[exam][<?php echo $no; ?>][answer]" value="<?php echo $i; ?>"/><?php echo $question['sol' . $i]; ?>
                                                            </li>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                                <div class="col-md-4">
                                                    <?php
                                                    if ($question['image'] != '') {
                                                        echo '<a href = "' . $this->webroot . $question['image'] . '" class = "ui-lightbox">';
                                                        echo $this->Html->image(str_replace('.', '_100.', $question['image']), array('style' => 'width:100px;
                        height:100px;
                        float:right'));
                                                        echo '</a>';
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <?php if ($jawaban) { ?>
                                                <?php
                                                if ($jawaban) {
                                                    if ($eval[$no]['answer'] == $eval[$no]['solution']) {
                                                        ?>
                                                        <label class="label label-success">Benar</label>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <label class="label label-danger">Salah</label>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                                <?php
                                                if ($set['Set']['answeron'] == 1) {
                                                    echo 'Jawaban benar: <strong>' . $this->Util->answerMap($eval[$no]['solution']) . '</strong>';
                                                }
                                                ?>
                                            <?php } ?>
                                        </td>
                                         <!--  <?php if ($jawaban) { ?><td><?php echo $this->Util->answerMap($question['solution']); ?></td><?php } ?>
                                    <td><?php echo $question['solexp']; ?></td>
                                   <td><?php echo $question['ismcq']; ?></td>
                                   <td><?php echo $question['ismultiple']; ?></td>
                                   <td><?php echo $question['isoe']; ?></td>
                                   <td><?php echo $question['image']; ?></td>
                                   <td><?php echo $question['imageext']; ?></td>
                                   <td><?php echo $question['isimport']; ?></td>
                                   <td><?php echo $question['status']; ?></td>
                                   <td><?php echo $question['deleted']; ?></td>-->
                                    </tr>
                                    <?php
                                    $no++;
                                endforeach;
                                ?>
                            </table>
                            <?php if (!$jawaban) { ?>
                                <p>
                                    Donec sit amet tellus euismod, ullamcorper libero eu, aliquam ante. Nullam vitae urna tincidunt lacus posuere ultrices ac ac mi.
                                <div class="form-group">
                                    <div class="form-control">
                                        <input type="checkbox" /> Nullam vitae urna tincidunt lacus posuere ultrices ac ac mi
                                    </div>
                                </div>
                                </p>
                                <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
                            <?php } ?>
                            <?php echo $this->Form->end(); ?>
                            <?php
                        else:
                            echo '<div class = "alert alert-danger">' . __('Exam tries has been reached. please contact admin to solve this problem.') . '</div>';
                        endif;
                        ?>
                    </div>
                    <div class="tab-pane fade" id="home">
                        <strong>Home</strong>
                        <table class="table-striped table">
                            <tr>		<td><?php echo __('Id'); ?></td>
                                <td>
                                    <?php echo h($set['Set']['id']); ?>
                                    &nbsp;
                                </td>
                            </tr><tr>		<td><?php echo __('Name'); ?></td>
                                <td>
                                    <?php echo h($set['Set']['name']); ?>
                                    &nbsp;
                                </td>
                            </tr><tr>		<td><?php echo __('Description'); ?></td>
                                <td>
                                    <?php echo h($set['Set']['description']); ?>
                                    &nbsp;
                                </td>
                            </tr><tr>		<td><?php echo __('Answeron'); ?></td>
                                <td>
                                    <?php echo h($set['Set']['answeron']); ?>
                                    &nbsp;
                                </td>
                            </tr><tr>		<td width="200"><?php echo __('Category'); ?></td>
                                <td>
                                    <?php echo $this->Html->link($set['Category']['name'], array('controller' => 'categories', 'action' => 'view', $set['Category']['id'])); ?>
                                    &nbsp;
                                </td>
                            </tr><tr>		<td><?php echo __('Creator'); ?></td>
                                <td>
                                    <?php echo h($set['Set']['creator']); ?>
                                    &nbsp;
                                </td>
                            </tr><tr>		<td><?php echo __('Password'); ?></td>
                                <td>
                                    <?php echo h($set['Set']['password']); ?>
                                    &nbsp;
                                </td>
                            </tr><tr>		<td><?php echo __('Isopen'); ?></td>
                                <td>
                                    <?php echo h($set['Set']['isopen']); ?>
                                    &nbsp;
                                </td>
                            </tr><tr>		<td><?php echo __('Tries'); ?></td>
                                <td>
                                    <?php echo h($set['Set']['tries']); ?>
                                    &nbsp;
                                </td>
                            </tr><tr>		<td><?php echo __('Timeset'); ?></td>
                                <td>
                                    <?php echo h($set['Set']['timeset']); ?> <?php echo __('seconds'); ?>
                                    &nbsp;
                                </td>
                            </tr><tr>		<td><?php echo __('Passpercent'); ?></td>
                                <td>
                                    <?php echo h($set['Set']['passpercent']); ?>
                                    &nbsp;
                                </td>
                            </tr><tr>		<td><?php echo __('Passinfo'); ?></td>
                                <td>
                                    <?php echo h($set['Set']['passinfo']); ?>
                                    &nbsp;
                                </td>
                            </tr><tr>		<td width="200"><?php echo __('Question Order'); ?></td>
                                <td>
                                    <?php echo $this->Html->link($set['QuestionOrder']['name'], array('controller' => 'question_orders', 'action' => 'view', $set['QuestionOrder']['id'])); ?>
                                    &nbsp;
                                </td>
                            </tr><tr>		<td><?php echo __('Questionnumber'); ?></td>
                                <td>
                                    <?php echo h($set['Set']['questionnumber']); ?>
                                    &nbsp;
                                </td>
                            </tr><tr>		<td><?php echo __('Deleted'); ?></td>
                                <td>
                                    <?php echo h($set['Set']['deleted']); ?>
                                    &nbsp;
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <?php if (!empty($set['Comment'])): ?>
                            <ul id="comments">
                                <?php foreach ($set['Comment'] as $comment): ?>
                                    <li style="list-style: none;"><i class="icon icon-user"></i>
                                        <strong><?php echo $comment['User']['username']; ?></strong> <?php echo $this->Timeago->inWords($comment['time']); ?> ago
                                        <p><?php echo $comment['comment']; ?></p>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php
                        else:
                            echo '<h5>' . __('No Comments yet') . '</h5>';
                            echo '<h3>' . __('Be the first to comment') . '</h3>';
                        endif;
                        ?>
                        <div class="comments form">
                            <?php
                            echo $this->Form->create('Comment', array(
                                'inputDefaults' => array(
                                    'div' => 'form-group',
                                    'wrapInput' => false,
                                    'class' => 'form-control'
                                ),
                                'class' => ''
                            ));
                            ?>
                            <fieldset>
                                <legend><?php echo __('Add Comment'); ?></legend>
                                <?php
                                echo $this->Form->input('comment');
                                echo $this->Form->input('set_id', array("value" => $set['Set']['id'], 'type' => 'hidden'));
                                echo $this->Form->input('user_id', array("type" => "hidden", "value" => 1));
                                ?>
                            </fieldset>
                            <button type="button" id="commentSubmitForm" class="btn btn-primary btn-large">Submit</button>
                            <?php echo $this->Form->end(); ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="stat">
                        <?php if (!empty($set['Statistic'])): ?>
                            <table class="table table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Set</th>
                                    <th>Time</th>
                                    <th>Total Score</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($set['Statistic'] as $stat):
                                    ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $stat['User']['username'] ?></td>
                                        <td><?php echo $stat['Set']['name'] ?></td>
                                        <td><?php echo $this->Timeago->inWords($stat['time']); ?> ago</td>
                                        <td><?php echo $stat['totalscore']; ?></td>
                                    </tr>
                                    <?php
                                    $no++;
                                endforeach;
                                ?>
                            </table>
                            <?php
                        else:
                            echo '<h5>' . __('No Stat yet') . '</h5>';
                        endif;
                        ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="col-md-2">
        <div style="margin-bottom:10px;">
            <?php echo $this->Html->link(__('<i class = "icon icon-chevron-left"></i> Back to Index'), array('action' => 'index'), array('class' => 'btn btn-block btn-primary', 'escape' => false)); ?> </li>
        </div>
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Exam to try'); ?></h3>
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
<link href="<?php echo $this->webroot; ?>js/plugins/lightbox/themes/evolution-dark/jquery.lightbox.css" rel="stylesheet">
<?php if (!$jawaban) { ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#commentSubmitForm").click(function() {
                var v = $('#CommentViewForm').serialize();
                $.post('<?php echo $this->webroot; ?>comments/add/ajax', v, function(data) {
                    if (data == 'ok') {
                        $('#CommentViewForm').find('input,textarea').val('');
                        var msg = '<div class="alert alert-success alert-dismissable">' +
                                '<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> × </button>' +
                                '<strong> Info: </strong>' +
                                'Your comment has been saved. </div>';
                        $("#CommentViewForm").html(msg).delay(3000).fadeOut(300);
                    } else {
                        alert("sorry. error logged and sent to administrator");
                    }
                });
            });
    <?php if ($set['Set']['timeset'] != '0') { ?>
                function off() {
                    document.forms[0].submit();
                }
                $('#cdw').countdown({
                    until:<?php echo $set['Set']['timeset']; ?>,
                    format: 'DHMS',
                    onExpiry: off,
                    layout: '<div id="t7_timer"><?php echo __('Sisa waktu anda'); ?> :<br/>' +
                            '<div id="t7_vals">' +
                            //'<div id="t7_d" class="t7_numbs">{dnnn}</div>'+
                            '<div id="t7_h" class="t7_numbs">{hnn}</div>' +
                            '<div id="t7_m" class="t7_numbs">{mnn}</div>' +
                            '<div id="t7_s" class="t7_numbs">{snn}</div>' +
                            '</div>' +
                            '<div id="t7_labels">' +
                            //'<div id="t7_dl" class="t7_labs">days</div>'+
                            '<div id="t7_hl" class="t7_labs">jam</div>' +
                            '<div id="t7_ml" class="t7_labs">menit</div>' +
                            '<div id="t7_sl" class="t7_labs">detik</div>' +
                            '</div>' +
                            '</div>'
                });
                //			$(".ans").click(function() {
                //				$(this).parents("ul").delay(2000).slideUp(1000);
                //			});
    <?php } ?>
        });
    </script>
<?php } ?>
