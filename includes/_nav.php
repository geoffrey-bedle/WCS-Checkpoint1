<?php
include '../src/activeFunction.php';
?>




<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../public/index.php">Contact</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item <?php activeClass('addContact.php') ?>">
                    <a class="nav-link" href="../public/addContact.php">Ajouter <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php activeClass('suppContact.php') ?>">
                    <a class="nav-link" href="../public/suppContact.php">supprimer</a>
                </li>
                <li class="nav-item <?php activeClass('modify.php') ?> ">
                    <a class="nav-link" href="../public/modify.php">modifier</a>
                </li>

            </ul>
        </div>
    </nav>
</header>









