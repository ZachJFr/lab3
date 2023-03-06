<h2 style="color: white;"><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>

        <div style="color: white;" class="main">
		<br>
		<b>
		<table>
		<tr>
		<th style="color: white;">-----</th>
		 <th style="color: white;"><?= esc($guest_item['name']) ?> </th>
         <th style="color: white;"><?= esc($guest_item['email']) ?> </th>
		 <th style="color: white;"><?= esc($guest_item['comment']) ?> </th>
		</tr>
		</table>
        </div>
    <?php endforeach ?>

<?php else: ?>
    <h3 style="color: white;">No guest</h3>
    <p style="color: white;">Unable to find any guest for you.</p>

<?php endif ?>