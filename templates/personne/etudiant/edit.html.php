<section style="background-color: #eee;">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <p class="text-center fw-bold mb-5 mx-1 mx-md-4 mt-4">Modifier un Étudiant</p>
                                <form class="mx-1 mx-md-4" action="/Etudiant-edit/<?= $etudiants->id ?>" method = "POST">
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Nom Complet</label>
                                        <input type="text" id="form3Example1c" class="form-control" name = "nom_complet"
                                        value="<?= $etudiants->nom_complet ?>"/> 
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example3c">Email</label>
                                        <input type="email" id="form3Example3c" class="form-control" name = "email"
                                        value="<?= $etudiants->login ?>"/>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example4c">Mot de Passe</label>
                                        <input type="password" id="form3Example4c" class="form-control" name = "mdp"
                                        value="<?= $etudiants->password ?>"/>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Matricule</label>
                                        <input type="text" id="form3Example1c" class="form-control" name = "matricule"
                                        value="<?= $etudiants->matricule ?>"/>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Adresse</label>
                                        <input type="text" id="form3Example1c" class="form-control" name = "adresse"
                                        value="<?= $etudiants->adresse ?>"/>
                                        </div>
                                    </div>
                                    <p class="text-center fw mb-3 mx-1 mx-md-4 mt-4">Sexe</p>
                                    <div class="d-flex flex-row justify-content-evenly align-items-center mb-4 ">
                                        <div class="form-outline mb-0">
                                            <label class="form-label" for="">Masculin</label>
                                        <input type="radio" id="" name="sexe" class="form-control-radio" value = "Masculin"/>
                                        </div>
                                        <div class="form-outline mb-0">
                                            <label class="form-label" for="">Féminin</label>
                                        <input type="radio" id="" name="sexe" class="form-control-radio" value = "Féminin"/>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <input type="submit" value="Modifier" class="btn btn-primary btn-lg">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-5 d-flex align-items-center order-1 order-lg-2">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img2.webp"
                                class="img-fluid" alt="Sample image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>