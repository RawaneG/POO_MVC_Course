<section style="background-color: #eee;">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <p class="text-center fw-bold mb-5 mx-1 mx-md-4 mt-4">
                                    <?=isset($profs->id) ? "Modifier " : "Ajouter" ?> un Professeur
                                </p>
                                <form class="mx-1 mx-md-4" action="/professeurs-add" method = "POST">
                                    <input type="hidden" name="modifier" value="<?=isset($profs->id) ? "modifier" : "" ?>">
                                    <input type="hidden" name="id" value="<?=isset($profs->id) ? $profs->id : "" ?>">
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Nom Complet</label>
                                        <input type="text" id="form3Example1c" class="form-control" name = "nom_complet"
                                        value="<?=isset($profs->id) ? $profs->nom_complet : "" ?>"/>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                                <label class="form-label d-block" for="form3Example1c">Grade</label>
                                                <select name="grade" class="form-select w-100 text-center">
                                                    <option value="Docteur">Docteur</option>
                                                    <option value="Ingénieur">Ingénieur</option>
                                                    <option value="Technicien">Technicien</option>
                                                </select>
                                            </div>
                                        </div>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <input type="submit" value="<?=isset($profs->id) ? "Modifier" : "Ajouter" ?>" class="btn btn-primary btn-lg">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-5 d-flex align-items-center order-1 order-lg-2">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                                class="img-fluid" alt="Sample image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>