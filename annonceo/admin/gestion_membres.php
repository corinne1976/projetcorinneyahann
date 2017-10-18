<?php require('../inc/init.inc.php'); ?>
<?php require('../inc/header.inc.php'); ?>

<?php
$resultat = $pdo -> query("SELECT * FROM membre");
$membres = $resultat -> fetchAll(PDO::FETCH_ASSOC);
$contenu .= '<div class="container">';
$contenu .='<h2>Il y a ' .$resultat -> rowCount() . ' inscrits sur le site</h2>';
    $contenu .='<table class="table">';
        $contenu .= '<tr>';

            for($i = 0; $i < $resultat -> columnCount(); $i++){
                $colonne = $resultat -> getColumnMeta($i);
                $contenu .= '<th>'. $colonne['name'] . '</th>';
            }
            $contenu .= '<th colspan="2">Actions</th>';
        $contenu .= '</tr>';

        foreach($membres as $value) { // Parcourt tous les enregistrements
            $contenu .= '<tr>';// ligne pour chaque enregistrement
                foreach($value as $value2) { // Parcourt toutes les infos de chaque enregistrements
                    $contenu .= '<td>' . $value2 . '</td>';
                }

            $contenu .= '<td class = "modif"><a href="modif_membres.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></button></a></td>';

            $contenu .= '<td class = "modif"><a href="modif_membres.php"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-user" aria-hidden="true"></button></a></td>';

            $contenu .= '<td class="supr"><a href="gestion_membres.php"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>';
            $contenu .= '</tr>';
        }

     $contenu .= '<table/>';

// $resultat = $pdo -> exec("DELETE FROM membre WHERE id_membre = $membres[id_membre]");

?>
<?= $contenu; ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 order-md-0">
                <form type="#" method="post">
                    <div class="form-group">
                        <label for="pseudo">Pseudo</label>
                        <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo">
                    </div>
                    <div class="form-group">
                        <label for="mdp">Mot de passe</label>
                        <input type="text" class="form-control" id="pseudo" name="mdp" placeholder="Entrez votre mot de passe">
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre Nom">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prenom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre Prénom">
                    </div>
                </div>
        <div class="col-md-6 order-md-4">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="Email" name="Email" placeholder="Entrez votre Email">
                    </div>
                    <div class="form-group">
                        <label for="email">Téléphone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Entrez votre Téléphone">
                    </div>
                    <div class="form-group">
                        <label for="civilite">Civilité</label>
                        <select class="form-control" id="civilite" name="civilite">
                            <option value="m">Homme</option>
                            <option value="f">Femme</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="statut">Statut</label>
                        <select class="form-control" id="statut" name="statut">
                            <option value="1">Admin</option>
                            <option value="0">Membre</option>
                        </select>
                    </div>
        </div>
    <input  class=" col-md-6   col-md-offset-3 btn btn-info" type="submit" value="Enregistrer"/>
</form>
</div>

<?= $contenu = '</div>'; ?>

<?php require('../inc/footer.inc.php'); ?>
