<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config.php';
// require $_SERVER['DOCUMENT_ROOT'] . '/samples/spacelance/config.php';

require $root . '/templates/head.php';
require $root . '/templates/header.php';
?>

<main>
	<?php
	require $root . '/templates/hero.php';
	require $root . '/templates/steps.php';
	require $root . '/templates/offer.php';
	require $root . '/templates/latestwork.php';

	?>
</main>

<?php
require $root . '/templates/footer.php';
?>