<?php
include '../includes/_head.php';
$query = "SELECT * FROM contact ORDER BY firstname ASC ";
$res = $pdo->query($query);
$contact = $res->fetchAll(PDO::FETCH_ASSOC);

$query= "SELECT * FROM civility";
$res=$pdo->query($query);
$civilities=$res->fetchAll(PDO::FETCH_ASSOC);


include '../src/_civilityFunction.php';
include '../src/fullnameFunction.php';
include '../includes/formValidation.php';

?>


<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Contact</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Ajouter <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">supprimer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">modifier</a>
                </li>

            </ul>
        </div>
    </nav>
</header>
<section>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Civilité</th>
            <th scope="col">Nom Prénom</th>


        </tr>
        </thead>


        <?php

        foreach ($contact as $value) {
             $civility=civility($value['civility_id']);

            ?>
        <tbody>
            <tr>
                <th scope="row"><?=$civilities[$civility]['civility']?></th>
                <td><?=fullname($value['lastname'],$value['firstname'])?></td>


            </tr>
        </tbody>
            <?php
        }
        ?>

    </table>



</section>
<section>

    <h1>Ajouter un contact</h1>
    <form method="post" action="index.php">
        <div class="form-group">
            <label for="firstname">Prénom :</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Votre Prénom">
            <?php if (isset($errors['firstnameError'])) {?>
            <div class="alert alert-danger" role="alert">  <?= $errors['firstnameError'];
                } ?></div>
        </div>
        <div class="form-group">
            <label for="lastname">Nom :</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Votre Nom">

        <?php if (isset($errors['lastnameError'])) {?>
            <div class="alert alert-danger" role="alert">  <?= $errors['lastnameError'];
                } ?></div>
        </div>
        <div>
        <label for="exampleFormControlSelect1">Civilité</label>
        <select class="form-control" name="civility" id="exampleFormControlSelect1">
            <option value="1">Mr. </option>
            <option value="2">Mme.</option>
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>
<?php

?>
<footer>

</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
