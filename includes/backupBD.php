<?php 
	//Crear el archivo de RESPALDO de MySQL
	//Editar esta Seccion
	$dbhost = "localhost";
	$dbuser = "naatik";
	$dbpass = "naatik";
	$dbname = "controlescolarv3";

	$sendTo = "Webmaster <jluis.yama@gmail.com>";
	$sendFrom = "Automated Backup <backup@youdomain.com>";
	$sendsubject = "Dayly mysql Backup";
	$bodyofemail = "Here is your dayly backup.";

	$backupfile = $dbname.date("Y-m-d"),'.sql';
	system('mysqldump -h $dbhost -u $dbuser -p $dbpass $dbname > $backupfile');

	//== Mail de file
	include ('Mail.php');
	include 'Mail/mime.php';

	$message = new Mail_mime();
	$text = "$bodyofemail";
	$message->setTXTBody($text);
	$message->AddAttachment($backupfile);
	$body = $mesage->get();
	$estraheaders = array('From' => $sendFrom, "Subject"=>$sendsubject );
	$headers = $message->headers($extraheaders);
	$mail = Mail::factory("mail");
	$mail->send($sendTo, $headers, $body);

	//Delete the file from the server
	unlink($backupfile);
?>