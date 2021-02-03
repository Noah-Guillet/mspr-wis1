<?php require_once 'layout/header.php' ?>

<main>

    <section id="home-entete">

        <div class="container">

            <div class="row align-items-start">
                <div class="col">
                    One of three columns
                </div>
                <div class="col">
                    One of three columns
                </div>
            </div>
            <div class="row align-items-center">
            </div>
            <div class="row align-items-end">
                <div class="col">
            </div>

        </div>

    </section>

    <br>
    <br>
    <br>
    <br>

    <section id="home-cards">

        <div class="container">

            <div class="row align-items-start">
                <div class="card" style="width: 18rem;">
                    <img src="image/humaaans1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Découvrez comment Bulleau participe a la protection de l'environnement</p>
                        <button type="button" class="btn btn-outline-success">ÉCOLOGIE</button>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="image/humaaans2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Découvrez comment Bulleau permet à la technologie d'avancer</p>
                            <button type="button" class="btn btn-outline-info">TECHNOLOGIE</button>
                        </div>
                    </div>
                </div>
            </div>

    </section>

    <section id="home-conception">

        <div class="container">
            <h2>CONCEPTION</h2>
            <p>L’eau est d'abord congelée sous forme de bulle puis trempée dans de la gélatine d’algues, gélatine qui bloque l’eau quand la glace fond</p>

        </div>

    </section>

    <section id="home-carousel">

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="image/marathon.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="image/festival.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/evenement.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>

    </section>

</main>

<a href class="btn btn-read-more"

<?php require_once 'layout/footer.php' ?>
