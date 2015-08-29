<?php only_admin_access(); ?>
<div class="mw-module-admin-wrap">
<script>
    function delete_quote(id) {
        var are_you_sure = confirm("Are you sure?");
        if (are_you_sure == true) {
            var data = {}
            data.id = id;
            var url = "<?php print api_url('delete_quote'); ?>";
            var post = $.post(url, data);
            post.done(function (data) {
                mw.reload_module("quotes");
                mw.reload_module("quotes/list");
            });
        }
    }
</script>
<?php $data = get_quotes("no_limit=true"); ?>
<?php if ($data): ?>
<div id="users-admin">
    <table width="100%" class="mw-ui-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Quote</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $item): ?>
            <tr>
                <td><?php print $item['name'] ?></td>
                <td><?php print $item['quote_text'] ?></td>
                <td><a class="mw-ui-btn"
                       href="javascript:delete_quote('<?php print $item['id'] ?>');">Delete
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
<?php endif; ?>