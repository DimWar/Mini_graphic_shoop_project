<?php if (!empty($_SESSION['error'])) : ?>
	<h3 style="background-color: #3a3a3a;text-align:center;color:white"><?= $_SESSION['error'] ?></h3>
<?php unset($_SESSION['error']);endif; ?>