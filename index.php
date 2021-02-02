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

        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>

    </section>

</main>

<?php require_once 'layout/footer.php' ?>
