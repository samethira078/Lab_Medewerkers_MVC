	<?php
	//	echo "<pre>";
	//print_r($employees);
	//echo "</pre>";
	?>
	<h1>Overzicht van personen</h1>
	<ul>
		<?php foreach ( $employees as $employee ) { ?>
		<li>
            <span><?php echo $employee['name'] ?> is <?php echo $employee['age'] ?> jaar</span>
			<a href="/employee/update/<?php echo $employee['id'] ?>">Wijzigen</a> <a href="/employee/delete/<?php echo $employee['id'] ?>">Verwijderen</a>
            <?php
                };
            ?>
		</li>
	</ul>