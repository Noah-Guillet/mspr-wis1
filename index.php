<?php require_once 'layout/header.php' ?>

<main>

    <section id="home-entete">

        <div class="container">

            <div class="row align-items-start">
                <div class="col">
                    <div class="titre">
                    <h1>Bulleau</h1>
                    </div>
                </div>
                <div class="col">
                    <img src="image/capsule.jpg">
                </div>
            </div>
            <div class="row align-items-center">
            </div>
            <div class="row align-items-end">
                <div class="col">
                </div>

            </div>

    </section>


    <section id="home-cards">

            <div class="row align-items-start">
                <div class="card-1">
                    <img src="image/humaaans1.png"  alt="..." width="400" height="259"
                    <div class="card-body">
                        <div class="btn-1">
                        <button type="button" class="btn btn-outline-success">ÉCOLOGIE</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-2">
                        <img src="image/humaaans2.png" alt="..." width="400" height="259"
                        <div class="card-body">
                            <div class="btn-2">
                            <button type="button" class="btn btn-outline-info">TECHNOLOGIE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>

    <section id="home-conception">

        <div class="container">
            <h2>CONCEPTION</h2>
            <p>L’eau est d'abord congelée sous forme de bulle puis trempée dans de la gélatine d’algues, gélatine qui bloque l’eau quand la glace fond.</p>

        </div>

    </section>

    <section id="home-carousel">

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="image/mara.jpg" class="d-block w-auto" alt="photo">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="image/fest.jpg" class="d-block w-auto" alt="photo">
                </div>
                <div class="carousel-item">
                    <img src="image/even.jpeg" class="d-block w-auto" alt="photo">
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


        <div class="paragraphes">

            <p>La capsule Bulleau sera mis en vente principalement lors de Marathon, Festival et Evenements</p>

        </div>

    </section>

    <section id="home-tarifs"

             <div class="container">

                 <h2>TARIFS</h2>

                 <p>Une Capsule Bulleau coute environ 20 centimes.</p>

             </div>

    <section id="formu">

        <div class="container">

            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="1234@abcd.fr">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Ville</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="Votre ville">
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Code Postal</label>
                    <input type="text" class="form-control" id="inputZip" placeholder="Votre Code Postal">
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Accepter les CGU
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Accepter</button>
                </div>
            </form>

        </div>


    </section>





</main>

<?php require_once 'layout/footer.php' ?>
