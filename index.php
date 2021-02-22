<?php require_once 'layout/header.php' ?>

<main>

    <section id="home-entete">


        <div class="container">

            <h1>Bulleau</h1>

            <svg class="pulse" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink">
                <circle id="Oval" cx="512" cy="512" r="512"></circle>
                <circle id="Oval" cx="512" cy="512" r="512"></circle>
                <circle id="Oval" cx="512" cy="512" r="512"></circle>
            </svg>

        </div>
    </section>

    <section id="home-pres">
        <div class="container">

            <div class="row align-items-start">
                <div class="col">
                    <div class="home-pres-texte">
                    <p>Une bouteille d'eau comestible est un emballage comestible pouvant contenir de l'eau. Cette « bouteille » résistante peut contenir de l'eau potable, hygiénique et biodégradable. Composé d'une double membrane d'alginate de sodium, cet emballage est biodégradable et peut même être ingéré par l'homme.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="home-pres-img">
                    <img src="image/capsule.jpg">
                    </div>
                </div>
            </div>



        </div>
    </section>


    <section id="home-cards">
        <div class="container">

            <div class="row align-items-start">
                <div class="col">
                    <div class="card-1">
                        <img src="image/Humaaans3.png" alt="..."
                        <div class="card-body">
                            <div class="btn-1">
                                <button type="button" class="btn btn-success">ECOLOGIE</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-2">
                            <img src="image/humaaans2.png" alt="..."
                            <div class="card-body">
                                <div class="btn-2">
                                    <button type="button" class="btn btn-primary">TECHNOLOGIE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    
</main>

<?php require_once 'layout/footer.php' ?>
