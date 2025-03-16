<?php
//@rodolfofonseca

require_once 'Classes/bancoDeDados.php';

//@note index
router_add('index', function () {
	verificar_conexao_internet();

	require_once 'includes/head.php';

	require_once 'includes/footer.php';
	exit;
});
?>