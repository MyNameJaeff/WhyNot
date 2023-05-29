<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Watuh</title>
</head>
<body>
    <?php
    if(isset($_POST['beräkna'])){
        $nötmängd = $_POST['input1'];
        $fläskmängd = $_POST['input2'];
        $kycklingmängd = $_POST['input3'];

        $water1 = 15622 * floatval($nötmängd);
        $water2 = 6073 * floatval($fläskmängd);
        $water3 = 4331 * floatval($kycklingmängd);

        $lifeval1 = $water1 / 1095;
        $lifeval2 = $water2 / 1095;
        $lifeval3 = $water3 / 1095;
        
    }
    ?>
    <header>
        <div class="logobox">
            <img src="cloud.jpg" alt="webbsiteLogo" class="logoimage">
        </div>
    </header>
    <main>
        <div class="valueBoxes">
            <div class="inputBox">
                <h2 style="border-bottom: 3px solid white;">Mängd kött per vecka (kg):</h2>
                <form method="POST" class="meatInputs">
                    <div class="meatInput meat1">
                        <label for="input1">Nötkött: </label>
                        <input type="text" name="input1" value="<?php echo $nötmängd; ?>">
                    </div>
                    <div class="meatInput meat2">
                        <label for="input2">Fläsk: </label>
                        <input type="text" name="input2" value="<?php echo $fläskmängd; ?>">
                    </div>
                    <div class="meatInput meat3">
                        <label for="input3">Kyckling: </label>
                        <input type="text" name="input3" value="<?php echo $kycklingmängd; ?>">
                    </div>
                    <input type="submit" value="Beräkna" name="beräkna" class="beräknaKnapp">
                </form>
            </div>
            <div class="waterBoxes">
                <h2 style="border-bottom: 3px solid white;">Mängd vatten (L):</h2>
                <div class="waterBox water1">
                    <p class="watervalue" name="watervalue1"><?php echo $water1 . "L"; ?></p>
                </div>
                <div class="waterBox water2">
                    <p class="watervalue" name="watervalue2"><?php echo $water2 . "L"; ?></p>
                </div>
                <div class="waterBox water3">
                    <p class="watervalue" name="watervalue3"><?php echo $water3 . "L"; ?></p>
                </div>
            </div>
            <div class="yearBox">
                <h3 style="border-bottom: 3px solid white;">Hur länge en skulle kunna<br>leva på den mängd vatten:</h2>
                <div class="lifebox life1">
                    <p class="lifevalue" name="lifevalue1"><?php echo round($lifeval1, 2) . " år"; ?></p>
                </div>
                <div class="lifebox life2">
                    <p class="lifevalue" name="lifevalue2"><?php echo round($lifeval2, 2) . " år"; ?></p>
                </div>
                <div class="lifebox life3">
                    <p class="lifevalue" name="lifevalue3"><?php echo round($lifeval3, 2) . " år"; ?></p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p class="infotext">En vuxen människa lever på ca 1,095L vatten om året<br>medans 1kg nötkött använder 15,622L vatten</p>
        <img src="goal.png" alt="natowatergoalimage" class="goalImg">
    </footer>
</body>
</html>