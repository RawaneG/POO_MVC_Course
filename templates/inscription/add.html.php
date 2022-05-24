<section style="background-color: #eee;">
    <div class="container">
        <div class="row d-flex justify-content-evenly align-items-center">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1 w-100">
                                <p class="text-center fw-bold mb-5 mx-1 mx-md-4 mt-4">Inscrire un Étudiant</p>
                                <form class="w-100 d-flex justify-content-evenly flex-wrap align-items-center" action="/Etudiant-add" method = "POST">
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Nom Complet</label>
                                        <input type="text" id="form3Example1c" class="form-control" name = "nom_complet"/>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example3c">Email</label>
                                        <input type="email" id="form3Example3c" class="form-control" name = "email"/>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example4c">Mot de Passe</label>
                                        <input type="password" id="form3Example4c" class="form-control" name = "mdp"/>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example4cd">Confirmer le Mot de Passe</label>
                                        <input type="password" id="form3Example4cd" class="form-control" name = "confirm_mdp"/>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Matricule</label>
                                        <input type="text" id="form3Example1c" class="form-control" name = "matricule"/>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Adresse</label>
                                        <input type="text" id="form3Example1c" class="form-control" name = "adresse"/>
                                        </div>
                                    </div>
                                    <?php
                                    foreach ($inscriptions as $inscription) 
                                    {
                                        ?>
                                    <div class="d-flex flex-row align-items-center mb-4 w-75">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label d-block" for="form3Example1c">Filière</label>
                                            <select name="filiere" class="form-select w-100 text-center">
                                                <option value="<?= $inscription->filiere ?>"><?= $inscription->filiere ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4 w-75">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label d-block" for="form3Example1c">Classe</label>
                                            <select name="classe" class="form-select w-100 text-center">
                                                <option value="<?= $inscription->libelle ?>"><?= $inscription->libelle ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4 w-75">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label d-block" for="form3Example1c">Niveau</label>
                                            <select name="niveau" class="form-select w-100 text-center">
                                                <option value="<?= $inscription->niveau ?>"><?= $inscription->niveau ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4 w-75">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label d-block" for="form3Example1c">Année Scolaire</label>
                                            <select name="annee" class="form-select w-100 text-center">
                                                <option value="<?= $inscription->libelle_annee ?>"><?= $inscription->libelle_annee ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    <p class="text-center fw mb-3 mx-1 mx-md-4 mt-4 w-100">Sexe</p>
                                    <div class="d-flex flex-row justify-content-evenly align-items-center mb-4 w-100">
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
                                        <input type="submit" value="Inscrire" class="btn btn-dark btn-lg">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>