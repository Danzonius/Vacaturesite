<html>
    <?php include './linking.php';?>

    <!-- HEADER AREA -->
    <?php include './includes/header.php';?>
            
        <div class="sub_menu_home"></div>    
    </header>
    <!-- /HEADER AREA -->
    
    <!-- INLOG POP-UP -->
    <!--<section class="login_outer">
        <div class="login">
            <i class="fa fa-times"></i>
            <form>
                <h2>Log in</h2>
                <input type="text" class="login_box" placeholder="Gebruikersnaam">
                <input type="text" class="login_box" placeholder="Wachtwoord">  
                <input type="submit" class="login_button" value="Verstuur">
            </form>  
        </div>
    </section>-->
    <!-- /INLOG POP-UP -->

    <!-- MAIN AREA -->
    <main class="no_top_padding">
        <div class="search-area">
            <div class="wrapper">
                <h3>Een prachtige slogan.</h3>
                
                <form action="<?php echo $zoekresultaten.'#searchbar'; ?>" method="post">
                    
                    <div class="search-bar">
                        <input class="search" name="zoekveld" type="text" placeholder="Doorzoek de vacatures.."/>

                        <br>

                        <p>Omgeving: </p>
                        <select class="filters" name="omgeving">
                            <option value="alles">Selecteer...</option>
                            <option value="Noord-Holland">Noord-Holland</option>
                            <option value="Zuid-Holland">Zuid-Holland</option>
                            <option value="Utrecht">Utrecht</option>
                            <option value="Flevoland">Flevoland</option>
                            <option value="Gelderland">Gelderland</option>
                            <option value="Overijssel">Overijssel</option>
                            <option value="Noord-Brabant">Noord-Brabant</option>
                            <option value="Groningen">Groningen</option>
                            <option value="Drenthe">Drenthe</option>
                            <option value="Friesland">Friesland</option>
                            <option value="Limburg">Limburg</option>
                            <option value="Zeeland">Zeeland</option>
                            <option value="Internationaal">Internationaal</option>
                        </select>

                        <p>Periode: </p>
                        <select class="filters" name="duur">
                            <option value="alles">Selecteer...</option>
                            <option value="6 maanden">6 maanden</option>
                            <option value="1 jaar">1 jaar</option>
                            <option value="2 jaar">2 jaar</option>
                            <option value="Anders">Anders</option>
                        </select> 

                        <p>Studierichting: </p>
                        <select class="filters" name="opleiding">
                            <option value="alles">Selecteer...</option>
                            <option value="Informatica">WO - Informatica</option>
                            <option value="Informatiekunde">WO - Informatiekunde</option>
                            <option value="Informatie, Multimedia, Management">WO - Informatie, Multimedia, Management</option>
                            <option value="Medische Informatiekunde">WO - Medische Informatiekunde</option>
                            <option value="Kunstmatige Intelligentie">WO - Kunstmatige Intelligentie</option>
                            <option value="Anders">Anders</option>
                        </select>
                    </div>

                    <input class="submit" name="zoeken" type="submit" value="Zoeken">
                </form>
                
            </div>
        </div>
        
        <div class="wrapper">
            <div class="columns">
                <h2 class="looks_like_h1">Title #1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
                
            <div class="columns col">
                <h2 class="looks_like_h1">Title #2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
                
            <div class="columns col">
                <h2 class="looks_like_h1">Title #3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
        </div> 
    </main>
    <!-- /MAIN AREA -->

    <!-- FOOTER AREA -->
        <?php include './includes/footer.php';?>
    <!-- /FOOTER AREA -->
    
</body>
    
</html>