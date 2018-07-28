<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Meno a priezvisko', $_POST['imObjectForm_2_1'], '', false);
	$form->setField('Email', $_POST['imObjectForm_2_2'], '', false);
	$form->setField('Text Vašej správy', $_POST['imObjectForm_2_3'], '', false);
	$form->setField('Tel./mobil', $_POST['imObjectForm_2_4'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'jsactive' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner($_POST['imObjectForm_2_2'] != "" ? $_POST['imObjectForm_2_2'] : 'okna@iwin.sk', 'okna@iwin.sk', 'Email z webu - Plastové okná', '', false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file