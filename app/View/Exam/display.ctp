<h2>Question <?php echo '1'; ?> of <?php echo count($question); ?></h2>
<div class="ac_content">
    <?php echo $question['Question']['id']; ?>.<?php echo $question['Question']['question']; ?>
    <?php echo $this->Form->input('QuestionAnswer.question_id', array('value' => $question['Question']['id'], 'type' => 'hidden')); ?>
    <div class="row">
        <ul class="opsi_jawaban col-md-9">
            <?php
            for ($i = 1; $i <= 5; $i++) {
                if ($question['Question']['sol' . $i] != '') {
                    ?>
                    <li>
                        <strong><?php echo $this->Util->answerMap($i); ?></strong>
                        <input class="required ans" type="radio" name="data[QuestionAnswer][answer]" value="<?php echo $i; ?>"/><?php echo $question['Question']['sol' . $i]; ?>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
        <div class="col-md-3">
            <?php
            if ($question['Question']['image'] != '') {
                echo '<a href="' . $this->webroot . $question['Question']['image'] . '" class="image-popup-no-margins">';
                echo $this->Html->image(str_replace('.', '_100.', $question['Question']['image']), array('style' => 'width:100px; height:100px; float:right'));
                echo '</a>';
            }
            ?>
        </div>
    </div>
</div>
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
    });
</script>