<html>
        
    <?php include '../includes/connect.php';?>
    
    <?php include './linking.php';?>

<script>
function delVac(idvac, idwn) {
    var titel = "Titel bericht";
    var message = "Weet u zeker dat u '" + titel + "' uit uw favorieten wilt verwijderen?";
    
    if (confirm(message) == true) {
        /* code om rij uit database te verwijderen */
        window.location.replace(<?php echo json_encode($favorieten); ?>);
    }
}
</script>
    
    <!-- 
        $stmt = $db->prepare("DELETE FROM favorieten WHERE ID_werknemers=:idwerknemers AND ID_vacatures=:idvacatures ");
        $stmt->execute(array(':idwerknemers' => $ID_werknemers, ':idvacatures' => $ID_vacatures));
    -->
    

    <!-- HEADER AREA -->
    <?php include '../includes/header.php';?>
    
        <div class="sub_menu">
            <div class="wrapper">
                <a href="<?php echo $home; ?>">Home</a>
                <span class="dash">/</span>
                <a href="<?php echo $mijn_account; ?>">Mijn Account</a>
                <span class="dash">/</span>
                <a href="<?php echo $favorieten; ?>">Mijn Favorieten</a>
            </div>
        </div>
            
    </header>
    <!-- /HEADER AREA -->
    
    <!-- MAIN AREA -->
    <div class="wrapper beheer">  
        <?php include '../includes/sidebar_werknemers.php';?>
            
        <main>
            <h1>Mijn Favorieten</h1>
            <p class="back">
                <a href="<?php echo $mijn_account; ?>">
                    <i class="fa fa-chevron-left"></i>Terug naar overzicht
                </a>
            </p>
                
            <div class="full"> 
                
                <?php 
            
                $stmt = $db->prepare("SELECT ID_werknemers, ID_vacatures, werknemers.ID, vacatures.ID, vacatures.ID_werkgevers, werkgevers.ID, werkgevers.naam, locatie, datum, titel, beschrijving_aanbod FROM favorieten INNER JOIN werknemers ON ID_werknemers = werknemers.ID INNER JOIN vacatures ON ID_vacatures = vacatures.ID INNER JOIN werkgevers ON vacatures.ID_werkgevers = werkgevers.ID WHERE werkgevers.ID = 1");
                $stmt->execute();
                $row_count = $stmt->rowCount();

                if ($row_count > 0) {
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
                        $idvac = $row["ID_vacatures"];
                        $idwn = $row["ID_werknemers"];
                        $res_timestamp = strtotime($row['datum']);
                        $datum = date("d/m/y",$res_timestamp);
                        $tijd = date("H:i",$res_timestamp);

                        $res_beschr = mb_substr($row["beschrijving_aanbod"], 0, 300);

                        ?>
                        <div class='vac_mini'>
                            <a onclick="delVac()">
                                <i class='fa fa-close fa-lg delete'></i>
                            </a>
                            
                            <a href="<?php echo $detail_vacature; ?>?id=<?php echo $id; ?>">
                                <h4><i class='fa fa-heart fa-fw'></i> <?php echo $row["titel"]; ?></h4>
                                <p class='vac_mini_info'><?php echo $row["naam"]; ?> | <?php echo $row["locatie"]; ?> | Geplaatst op <?php echo $datum; ?> om <?php echo $tijd; ?></p>
                                <p class='vac_mini_beschr'><?php echo $res_beschr; ?>...</p>
                            </a>
                       </div>
                    <?php
                    }
                } else {
                    echo "<p class='info'>Je hebt nog geen vacature als favoriet opgeslagen!</p>";
                }?>
                
            </div>
        </main>
    </div>
    <!-- /MAIN AREA -->

    <!-- FOOTER AREA -->
        <?php include '../includes/footer.php';?>
    <!-- /FOOTER AREA -->
    
</body>
    
</html>