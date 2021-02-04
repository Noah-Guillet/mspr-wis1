<?php require_once 'layout/header.php' ?>

<section id="faq-titre">
    <div class="container">
        <h1>F.A.Q</h1>
    </div>
</section>

<section id="faq-accordeon">
    <div class="container">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Quelle est la contenance de la capsule ?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Elle contient 4 cl d’eau, aujourd’hui les bulles ont différents volumes !
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Quelle est le prix de la capsule ?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">La capsule coute environ 20 centimes l'unité.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Comment la capsule est faite ?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">L’eau est d'abord congelée sous forme de bulle puis trempée dans de la gélatine d’algues, gélatine qui bloque l’eau quand la glace fond.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'layout/footer.php' ?>
