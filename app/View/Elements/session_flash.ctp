<div class="alert alert-success alert-dismissable" id="flash_message">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Info:</strong>
    <?php echo $message; ?>
</div>
<script>
    $(function() {
        $("#flash_message").delay(5000).hide("slow");
    })
</script>