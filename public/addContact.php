<?php
include '../includes/_head.php';
include '../includes/formValidation.php';
?>


<body>

<?php include '../includes/_nav.php' ?>

<section class="form">

    <h2>Ajouter un contact</h2>
    <form method="post" action="addContact.php">
        <div class="form-group">
            <label for="firstname">Prénom :</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Votre Prénom">
            <?php if (isset($errors['firstnameError'])) { ?>
            <div class="alert alert-danger" role="alert">  <?= $errors['firstnameError'];
                } ?></div>
        </div>
        <div class="form-group">
            <label for="lastname">Nom :</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Votre Nom">

            <?php if (isset($errors['lastnameError'])) { ?>
            <div class="alert alert-danger" role="alert">  <?= $errors['lastnameError'];
                } ?></div>
        </div>
        <div>
            <label for="exampleFormControlSelect1">Civilité</label>
            <select class="form-control" name="civility" id="exampleFormControlSelect1">
                <option value="1">Mr.</option>
                <option value="2">Mme.</option>
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-dark">Ajouter</button>
        </div>

        <?php if (empty($errors) && isset($_POST)) {
            echo $succesMessage;
        } ?>
    </form>
</section>

<?php include '../includes/_script.php' ?>
</body>

