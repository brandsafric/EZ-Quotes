<?php only_admin_access(); ?>
<div class="mw-module-admin-wrap">
<script>
    $(document).ready(function () {
        $("#add-ez_quotes-form").submit(function (event) {
            event.preventDefault();
            var data = $(this).serialize();
            var url = "<?php print api_url('save_quote'); ?>";
            var post = $.post(url, data);
            post.done(function (data) {
                mw.reload_module_parent("ez_quotes");
                mw.reload_module("ez_quotes/list");
            });
        });
    });
</script>
	<div id="users-admin">
		<form id="add-ez_quotes-form">
			<h3>Add new Quote</h3>
			<label class="mw-ui-label">Name</label>
			<input type="text" name="name" class="mw-ui-field">
			<label class="mw-ui-label">Quote Text</label>
			<textarea  name="quote_text" class="mw-ui-field"></textarea>
			<input type="submit" name="submit" value="Save" class="mw-ui-btn"/>
		</form>
	</div>
</div>