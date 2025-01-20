<?php

require_once "bootstrap.php";

$users = $apiClient->getUsers();

foreach ($users as $user) {
	$entityManager->persist($user);
	$entityManager->flush();
	$user->print();
	echo "\n \n";
}

?>