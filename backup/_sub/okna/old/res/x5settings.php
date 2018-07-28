<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'http://okna.iwin.sk',
	'public_folder' => '',
	'salt' => '5io5g1beyr0303h720405757cdcu0947ba37l0e0w9vutl8i9qvbhwzlo0'
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS (used only in the administration settings, in the 'test' page)
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS (used only in the administration settings, in the 'guestbooks' page)
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();

/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->setEmailType('html');
$ImMailer->setHTMLHeader('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 v10 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#708090" style="background-color: #708090;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 9.0pt Tahoma; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none;  width: 700px;border-style: solid; border-color: #808080; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 0; border-bottom: none; border-left-width: 1px;background-color: #FFFFFF" width="700px">' . "\n\t\t");
$ImMailer->setHTMLFooter("\n\t" . '</td></tr>' . "\n\t" . '<tr><td id="imEmailFooter" style="font: normal normal normal 7.0pt Tahoma; color: #000000; background-color: transparent; text-align: center; text-decoration: none;  width: 700px;border-style: solid; border-color: #808080; border-top-width: 0; border-top: none; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; padding: 10px; background-color: #FFFFFF" width="700px">' . "\n\t\t" . 'Tento e-mail obsahuje informácie, ktoré sú určené výhradne pre vyššie uvedeného adresáta.<br> Ak ste obdržali tento e-mail omylom, oznámte to bezodkladne odosielateľovi a zmažte ho, bez skopírovania.' . "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '</body>' . "\n" . '</html>');
$ImMailer->setBodyBackground('#FFFFFF');
$ImMailer->setBodyBackgroundEven('#FFFFFF');
$ImMailer->setBodyBackgroundOdd('#F0F0F0');
$ImMailer->setBodyBackgroundBorder('#CDCDCD');
$ImMailer->setBodySeparatorBorderColor('#000000');
$ImMailer->setEmailBackground('#708090');
$ImMailer->setEmailContentStyle('font: normal normal normal 9.0pt Tahoma; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none; ');

// End of file x5settings.php