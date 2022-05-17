<div class="card ml-5">
        <div class="card-body">
            <h4 class="card-title">Liste des Professeurs</h4>
            <p class="card-text">
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                    <th scope="col">Nom Complet</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($profs as $prof) 
                        {
                    ?>
                    <tr>
                        <td>
                            <?=
                                $prof->nom_complet;
                            ?>
                        </td>
                        <td>
                        <?=
                                $prof->grade;
                            ?>
                        </td>
                        <td>
                        <?=
                                $prof->role;
                            ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-success">Ajouter</button>
                            <button type="button" class="btn btn-outline-primary">Modifier</button>
                            <button type="button" class="btn btn-outline-danger">Suppimer</button>
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