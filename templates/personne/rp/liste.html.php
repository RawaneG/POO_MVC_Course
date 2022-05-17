<div class="card ml-5">
        <div class="card-body">
            <h4 class="card-title">Liste des RP</h4>
            <p class="card-text">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Nom Complet</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($rps as $rp) 
                        {
                    ?>
                    <tr>
                        <td>
                            <?=
                                $rp->nom_complet;
                            ?>
                        </td>
                        <td>
                            <?=
                                $rp->role;
                            ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-success">
                                <a href="/add" class="text-decoration-none color-success link-success">Ajouter</a>
                            </button>
                            <button type="button" class="btn btn-outline-warning">
                                <a href="/edit" class="text-decoration-none color-warning link-warning">Modifier</a>
                            </button>
                            <button type="button" class="btn btn-outline-danger">
                                <a href="/delete" class="text-decoration-none color-danger link-danger">Supprimer</a>
                            </button>
                            <button type="button" class="btn btn-outline-primary">
                                <a href="/details" class="text-decoration-none color-primary link-primary">Détails</a>
                            </button>
                        </td>
                    </tr>
                    <?php     
                        }
                    ?>
                </tbody>
            </table>
            </p>
        </div>
    </div>