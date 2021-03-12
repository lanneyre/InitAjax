<?php
    require_once("include/class/Database.php");
    Database::connect("localhost", "jeuxvideo", "root", "");

    $sql = "SELECT * FROM `jeux`";
    $req = Database::$bdd->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>
<table id="jeuxvideo">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Prix</th>
            <th>Mode</th>
            <th>Description</th>
            <th>Date de sortie</th>
            <th>Connexion</th>
            <th>Pays d'origine</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($req as $jeu){
        ?>
        <tr>
            <td><?php echo $jeu->Jeux_Titre;?></td>
            <td><?php echo $jeu->Jeux_Prix;?></td>
            <td><?php echo $jeu->Jeux_Mode;?></td>
            <td><?php echo $jeu->Jeux_Description;?></td>
            <td><?php echo $jeu->Jeux_DateSortie;?></td>
            <td><?php echo $jeu->Jeux_Connexion;?></td>
            <td><?php echo $jeu->Jeux_PaysOrigine;?></td>
        </tr>
        <?php
        } ?>
    </tbody>
</table>