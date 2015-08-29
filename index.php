<?php $data = get_quotes("no_limit=true"); ?>
<?php if ($data): ?>
<div id="ezq_<?php print $params['id'] ?>" class="quotes">
    <?php foreach ($data as $item): ?>
        <blockquote>
            <p>"<?php print $item['quote_text'] ?>"</p>
			<p>- <?php print $item['name'] ?></p>
        </blockquote>
    <?php endforeach; ?>
</div>
<?php endif; ?>