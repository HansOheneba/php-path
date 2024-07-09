<?php 
use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$currentUserID = 1;


$note = $db->query("select * from notes where id = :id", [
    'id' => $_POST['id']
])->fetchOrAbort();


authorize($note['userID'] === $currentUserID);


if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = "Oh dear... A note body of no more than 1,000 characters is required to update the note";
}

if(!empty($errors))
{
    return view("notes/edit.view.php", [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note

    ]);
    }


 $db->query("update notes set body = :body where id = :id", [
        'id' => $_POST['id'],
        'body' => $_POST['body']
    ])->fetchAll();  


header("location: /note?id={$note['id']}");
die();
