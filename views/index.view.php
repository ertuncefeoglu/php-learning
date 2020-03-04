<?php require('partials/head.php'); ?>

	<ul>
		<?php foreach ($users as $user) : ?>
				<li>
					<?= $user->name; ?>
				</li>
		<?php endforeach; ?>
	</ul>
	
<h1>Submit your name</h1>
<form method="POST" action="/names">
		<input name="name"/>
		<button type="submit">Submit</button>
</form>
	<h1>Task for the day</h1>
	<ul>

		<?php foreach ($tasks as $task) : ?>
				<li>
					<?php if ($task->completed): ?>
						<strike> <?= $task->description; ?> </strike>
					<?php else : ?>
						<?= $task->description; ?>	
					<?php endif; ?>

				</li>
		<?php endforeach; ?>

<!--

				<li>
					<strong>Name :</strong> <?=$task['title'] ?>
				</li>
				<li>
					<strong>Due date :</strong> <?=$task['due'] ?>
				</li>
				<li>
					<strong>Person responsible :</strong> <?=$task['assigned_to'] ?>
				</li>
				<li>
					<strong>Status :</strong>

					 <!-- <?=$task['completed']? 'Complete' : 'Incomplete'; ?> -->

					 <?php
						if ($task['completed']) {
							echo '&#9989';
						}
						else {
							echo 'Incomplete';
						}	
					 ?>
				</li>
-->				
	</ul>
<?php require('partials/footer.php'); ?>