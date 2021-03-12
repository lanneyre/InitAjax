<?php
require_once("include/class/Database.php");
Database::connect("localhost", "jeuxvideo", "root", "");

$sql = "SELECT * FROM `jeux`";
$req = Database::$bdd->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>
    <option value="" disabled selected>-- Merci de choisir un jeu --</option>
    <?php
foreach($req as $jeu){
    ?>
    <option value="<?php echo $jeu->Jeux_Id;?>"><?php echo $jeu->Jeux_Titre;?></option>
    <?php
}