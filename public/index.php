<?php
include '../includes/_head.php';
$query = "SELECT * FROM contact ORDER BY lastname ASC ";
$res = $pdo->query($query);
$contact = $res->fetchAll(PDO::FETCH_ASSOC);

$query = "SELECT * FROM civility";
$res = $pdo->query($query);
$civilities = $res->fetchAll(PDO::FETCH_ASSOC);


include '../src/_civilityFunction.php';
include '../src/fullnameFunction.php';


?>


<body>
<?php include '../includes/_nav.php' ?>

<section>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Civilité</th>
            <th scope="col">Nom Prénom</th>
            <th scope="col">Tél.</th>
        </tr>
        </thead>

        <?php
        foreach ($contact as $value) {
            $civility = civility($value['civility_id']);
            ?>
            <tbody>
            <tr>
                <th scope="row"><?= $civilities[$civility]['civility'] ?></th>
                <td><?= fullname($value['lastname'], $value['firstname']) ?></td>
                <td></td>
            </tr>
            </tbody>
        <?php } ?>
    </table>


</section>

<?php

?>
<footer>

</footer>

<?php include '../includes/_script.php' ?>
</body>
