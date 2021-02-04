<?php require_once 'layout/header.php' ?>
<section id="contact-titre">

<div class="container">
        <h1>CONTACT</h1>
</div>

</section>


<section id="formulaire">

<div class="container">
    <div class="row align-items-start">
        <div class="col">
            <img src="image/humaaans3.png" height="402" width="600">
        </div>
        <div class="col">
            <form class="row g-3">
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Prenom</label>
                    <input type="text" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="inputPassword4">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>

</section>

<?php require_once 'layout/footer.php' ?>
