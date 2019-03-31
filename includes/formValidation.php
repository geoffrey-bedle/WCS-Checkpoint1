<?php

$errors = [];
$succesMessage = '';

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
        $query = "INSERT INTO contact  VALUES (null, :lastname, :firstname, :civility);";
        $insert = $pdo->prepare($query);
        $insert->bindParam(":firstname", $post["firstname"]);
        $insert->bindParam(':lastname', $post['lastname']);
        $insert->bindParam(':civility', $post['civility']);
        $insert->execute();
        $post[] = null;
        $succesMessage = ' <div class="alert alert-success succes-message" role="alert">Votre contact a bien été ajouté</div>';
    }


}


