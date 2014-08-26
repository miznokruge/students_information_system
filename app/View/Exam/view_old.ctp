<div class="row">
    <div class="sets view col-md-10">

        <div class="bs-example">
            <h3>Ujian: <?php echo $set['Set']['name']; ?></h3>
            <ol>
                <li>Waktu: <?php echo $this->Util->secToMinute($set['Set']['timeset']); ?> <?php echo __('minutes'); ?></li>
                <li>Jawaban ditampilkan : <?php echo $set['Set']['answeron']; ?></li>
                <li>Tries : <?php echo $set['Set']['tries']; ?></li>
                <li>Is Open : <?php echo $set['Set']['isopen']; ?></li>
                <li>Pass Info : <?php echo $set['Set']['passinfo']; ?></li>
                <li>Jumlah Soal : <?php echo count($set['Question']); ?></li>
            </ol>
            <?php if (!$jawaban) { ?>
                <div id="defaultCountdown"></div>
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
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="q-detail">
                    <?php if (!empty($set['Question'])): ?>
                        <?php echo $this->Form->create("exam"); ?>
                        <div id="tb_exam"></div>
                        <button type="button" id="next" class="btn btn-primary btn-large">Submit</button>
                        <a href="#" id="tampilkan_skor" class="btn btn-success btn-large" style="display: none;"><?php echo __('View Result'); ?></a>
                        <?php echo $this->Form->end(); ?>
                    <?php endif; ?>
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
                                <li>
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
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div style="margin-bottom:10px;">
            <?php echo $this->Html->link(__('<i class="icon icon-chevron-left"></i> Back to Index'), array('action' => 'index'), array('class' => 'btn btn-block btn-primary', 'escape' => false)); ?> </li>
        </div>
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Actions'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">

                <ul class="nav-list">
                    <li><?php echo $this->Html->link(__('Edit Set'), array('action' => 'edit', $set['Set']['id'])); ?> </li>
                    <li><?php echo $this->Form->postLink(__('Delete Set'), array('action' => 'delete', $set['Set']['id']), array(), __('Are you sure you want to delete # %s?', $set['Set']['id'])); ?> </li>
                    <li><?php echo $this->Html->link(__('List Sets'), array('action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('New Set'), array('action' => 'add')); ?> </li>
                    <li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
                    <li><?php echo $this->Html->link(__('List Question Orders'), array('controller' => 'question_orders', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('New Question Order'), array('controller' => 'question_orders', 'action' => 'add')); ?> </li>
                    <li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
                    <li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
                    <li><?php echo $this->Html->link(__('List Ratings'), array('controller' => 'ratings', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('New Rating'), array('controller' => 'ratings', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php //if (!$jawaban) { ?>
<script type="text/javascript">
    $(document).ready(function() {

        $('.image-popup-no-margins').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            fixedContentPos: true,
            mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
            image: {
                verticalFit: true
            },
            zoom: {
                enabled: true,
                duration: 300 // don't foget to change the duration also in CSS
            }
        });
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
        function off() {
            document.forms[0].submit();
        }
        $('#defaultCountdown').countdown({
            until:<?php
if ($set['Set']['timeset'] == 0)
    echo '100000';
else
    echo $set['Set']['timeset'];
?>,
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
        var a = $('#t7_h').text();
        var b = $('#t7_m').text();
        if ((a == 0) && (b <= 9)) {
            //$('#defaultCountdown').addClass('red');
        }

        function getFirstQuestion(id) {
            $.get("<?php echo $this->webroot; ?>exam/display/" + id, function(data) {
                $("#tb_exam").html(data);
            });
        }
        getFirstQuestion(<?php echo $set['Question'][0]['id']; ?>);
        function getQuestion(id) {
            $.get("<?php echo $this->webroot; ?>exam/display/" + id, function(data) {
                $("#tb_exam").html(data);
            });
        }

        $("#next").click(function() {
            var p = $(this).parents('form').serialize();
            var q_id = $("#QuestionAnswerQuestionId").val();
            $.post("<?php echo $this->webroot; ?>exam/answer/" + q_id, p, function(x) {
                if (x == '') {
                    $("#tampilkan_skor").show();
                    $("#next").hide();
                } else {
                    var o = jQuery.parseJSON(x);
                    getQuestion(o.Question.id);
                }
            });
        });
    });
</script>
<?php //}     ?>
