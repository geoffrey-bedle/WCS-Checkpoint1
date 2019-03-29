<?php

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['firstname'])) {
        $errors['firstnameError'] = ' * Le prénom est obligatoire';
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST["firstname"])) {
        $errors['firstnameError'] = " * Lettres et espaces autorisés uniquement";
    }


    if (empty($_POST['lastname'])) {
        $errors['lastnameError'] = " * Le nom est obligatoire";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST["lastname"])) {
        $errors['lastnameError'] = " * Lettres et espaces autorisés uniquement";
    }


    if (empty($errors)) {
        foreach ($_POST as $key => $data) {
            $post[$key] = htmlspecialchars($data);

        }
        $query = "INSERT INTO contact  VALUES (null, :firstname, :lastname, :civility);";
        $insert = $pdo->prepare($query);
        $insert->bindParam(":firstname", $post["firstname"]);
        $insert->bindParam(':lastname', $post['lastname']);
        $insert->bindParam(':civility', $post['civility']);
        $insert->execute();
        $post[]=null;
    }


}


