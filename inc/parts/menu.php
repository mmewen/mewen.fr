<div id='menu'>
	<a href='<?php
				if (isset($page) && $page=="projets")
					echo "./";
				else
					echo "#"; ?>' class='menu'>
		<div class='menu_item <?php if (isset($page) && $page=="index") echo "selected" ?>' id='menu_item_haut'>
			<?php
			if (isset($lang) && $lang=="en") {
				echo "Resume";
			} else {
				echo "Présentation";
			}
			?>
		</div>
	</a>

	<!-- <div class='menu_item' id='menu_item_milieu1' > -->
	<a href='<?php
				if (isset($page) && $page=="index")
					echo "projets.php";
				else
					echo "#"; ?>' class='menu'>
		<div class='menu_item <?php if (isset($page) && $page=="projets") echo "selected" ?>' id='menu_item_bas' >
			<?php
			if (isset($lang) && $lang=="en") {
				echo "Projects";
			} else {
				echo "Projets";
			}
			?>
		</div>
	</a>

	<!-- <div class='menu_item' id='menu_item_bas'>
		Plus à venir...
	</div> -->

	<div id='langue'>
	<?php
	if (isset($lang) && $lang=="en") {
		?>
		<a href="../fr/" title="Passer à la version française">
			<img src="../inc/img/drapeau.jpg" alt="Passer à la version française" width='40px'>
		</a>
		<?php
	} else {
		?>
		<a href="../en/" title="Change language to English">
			<img src="../inc/img/flag.jpg" alt="Change language to English" width='40px'>
		</a>
		<?php
	}
	?>
	</div>
</div>