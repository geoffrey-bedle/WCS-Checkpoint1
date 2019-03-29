<?php
include '../includes/_head.php';
$query = "SELECT * FROM contact ORDER BY firstname ASC ";
$res = $pdo->query($query);
$contact = $res->fetchAll(PDO::FETCH_ASSOC);

$query= "SELECT * FROM civility";
$res=$pdo->query($query);
$civilities=$res->fetchAll(PDO::FETCH_ASSOC);





include '../includes/_civilityFunction.php'



?>


<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<section>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Civility</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>

        </tr>
        </thead>


        <?php

        foreach ($contact as $value) {
             $civility=civility($value['civility_id']);

            ?>
        <tbody>
            <tr>
                <th scope="row"><?=$civilities[$civility]['civility']?></th>
                <td><?=$value['firstname']?></td>
                <td><?=$value['lastname']?></td>

            </tr>
        </tbody>
            <?php
        }
        ?>

    </table>



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
