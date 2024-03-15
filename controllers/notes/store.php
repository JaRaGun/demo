<?php
use Core\Database;
use Core\Validator;
use Core\App;

require base_path("Core/Validator.php");
$db = App::resolve(Database::class);

$validator = new Validator();
$errors = [];

    if(! $validator->string($_POST['body'],1,1000))
    {
        $errors['body'] = "A body is no more than 1000 characters";
    }

    if(! empty($errors))
    {
        return view("notes/create.view.php", [
            'heading' => 'Create Note',
            'errors' => $errors ?? []
        ]);
    }

    if(empty($errors))
    {
        $db->query('INSERT INTO notes(body,user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 4
        ]);
    }


header('location: /notes');
    die();

