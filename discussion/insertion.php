<link rel="stylesheet" href="moncompte.css">
<?php 
    session_start();
    session_status();
?>
<div  class="message_vue">
    <div class="profil_messager">
            <?php
                $fileprofil ="profils/user" . $_SESSION['id'] . ".png";
                if (file_exists($fileprofil)) {
            ?>
                    <img src= <?= $fileprofil ?>>
            <?php
                }else{
            ?>
                    <img src="profils/profil.png">
            <?php
                }
            ?>
                <h3><?= $_SESSION['pseudo'] ?></h3>
    </div>
        <p id ="text_messager"></p>
        <h6> <?= date("Y-m-d H:i:s") ?></h6>
</div>
<script src="script.js"></script>