<?php 
    if(!empty($_POST['Jeux_Id'])){
        require_once("include/class/Database.php");
        Database::connect("localhost", "jeuxvideo", "root", "");
        //var_dump($_POST['Jeux_Id']);
        $sql = "SELECT * FROM `jeux` WHERE `Jeux_Id` = ?";
        $req = Database::$bdd->prepare($sql);
        $req->execute([$_POST['Jeux_Id']]);

        //$req->debugDumpParams();
        

        if($req->rowCount()>0){
            $result = $req->fetch(PDO::FETCH_OBJ);
        ?>
            <strong>titre :</strong> <?php echo $result->Jeux_Titre;?><br>
            <strong>Prix :</strong> <?php echo $result->Jeux_Prix;?><br>
            <strong>Description :</strong> <?php echo $result->Jeux_Description;?><br>
        <?php
        } else {
            echo "Le jeux n'existe pas";
        }
        
    } else {
        echo "error";
    }