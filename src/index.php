<?php

require 'vendor/autoload.php';

use Google\Cloud\Firestore\FirestoreClient;

putenv('GOOGLE_APPLICATION_CREDENTIALS=/var/www/html/key.json');

$firestore = new FirestoreClient([
  'projectId' => 'smart-charter-309411',
]);

/*$firestore->collection('users')->add([
  'username' => 'shitiz',
  'password' => 'pleasework',
]);*/

print_r($firestore->collection('users')->documents());