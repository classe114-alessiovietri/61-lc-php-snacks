<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>61 LC PHP Snacks</title>
    </head>
    <body>
        
        <section>
            <h2>
                Snack 1
            </h2>

            <p>
                Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
                Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e
                punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:

                Olimpia Milano - Cantù | 55-60
            </p>

            <?php
                $matches = [
                    [
                        'team-1' => 'Olimpia Milano',
                        'team-2' => 'Cantù',
                        'points-team-1' => 55,
                        'points-team-2' => 60,
                    ],
                    [
                        'team-1' => 'Lakers',
                        'team-2' => 'Heat',
                        'points-team-1' => 127,
                        'points-team-2' => 115,
                    ],
                    [
                        'team-1' => 'Magic',
                        'team-2' => 'Raptors',
                        'points-team-1' => 89,
                        'points-team-2' => 278,
                    ],
                ];
            ?>

            <ul>
                <?php
                    foreach($matches as $match) {
                        echo '<li>'.$match['team-1'].' - '.$match['team-2'].' | '.$match['points-team-1'].'-'.$match['points-team-2'].'</li>';
                    }
                ?>
            </ul>

            <ul>
                <?php
                    foreach($matches as $match) {
                ?>
                    <li>
                        <?php echo $match['team-1'].' - '.$match['team-2']; ?>
                        |
                        <?php echo $match['points-team-1'].'-'.$match['points-team-2']; ?>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </section>

        <section>
            <h2>
                Snack 2
            </h2>

            <p>
                Con un form passare come parametri GET name, mail e age e verificare
                (cercando i metodi che non conosciamo nella documentazione)
                - che name sia più lungo di 3 caratteri,
                - che mail contenga un punto e una chiocciola
                - che age sia un numero.
                Se tutto è ok stampare “Accesso riuscito”,
                altrimenti “Accesso negato”
            </p>

            <div>
                <form action="" method="GET">
                    <div>
                        <input type="text" name="name" placeholder="Nome...">
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Email...">
                    </div>
                    <div>
                        <input type="number" name="age" placeholder="Età...">
                    </div>
                    <div>
                        <button>
                            Invia
                        </button>
                    </div>
                </form>
            </div>

            <div>
                <?php
                    $tuttoOk = true;

                    if (strlen($_GET['name']) <= 3) {
                        $tuttoOk = false;
                    }
                    else if (
                        str_contains($_GET['email'], '@') == false
                        ||
                        str_contains($_GET['email'], '.') == false
                    ) {
                        $tuttoOk = false;
                    }
                    else if (is_numeric($_GET['age']) == false) {
                        $tuttoOk = false;
                    }
                    
                    if ($tuttoOk) {
                        $message = 'Accesso riuscito';
                    }
                    else {
                        $message = 'Accesso negato';
                    }
                ?>

                <h3>
                    <?php echo $message; ?>
                </h3>
            </div>
        </section>

        <section>
            <h2>
                Snack 3
            </h2>

            <p>
                Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
                Prendere il paragrafo e suddividerlo in tanti paragrafi.
                Ogni punto un nuovo paragrafo.
            </p>

            <?php
                $paragraph = 'Allontanatasi da questa compagnia, Alice ritrova il coniglio bianco e la sua casetta. Entrata in casa per cercare guanti e ventaglio del coniglio, mangia di nuovo, diventando ancora una volta enorme, tanto che le braccia le escono dalle finestre. Il coniglio, allarmato, chiama a raccolta Bill la lucertola che prova a passare attraverso il camino, ma Alice lo scaccia con un calcio. Fallita la spedizione di Bill, il coniglio tira sassi ad Alice che però diventano pasticcini. Mangiatone uno, ridiventa piccolissima e fugge dalla casa. Scansato il pericolo del cucciolo gigante, intrattiene una conversazione alquanto strana con un Bruco, tranquillamente appollaiato sul cappello di un fungo che fuma il narghilè. È al suo cospetto che Alice recita "Sei vecchio, Papà Guglielmo". Dopo aver compreso le ragioni della bambina, ed essersi allontanato, strisciando sull\'erba, il Bruco le rivela che le due parti del fungo la possono far crescere e rimpicciolire a suo piacimento.';
            
                $explodedParagraph = explode('.', $paragraph);
            ?>

            <div>
                <h3>
                    Paragrafo originale:
                </h3>
                <p>
                    <?php echo $paragraph; ?>
                </p>
            </div>

            <div>
                <h3>
                    Sottoparagrafi:
                </h3>
                <ul>
                    <?php
                        // foreach ($explodedParagraph as $singleParagraph) {
                        //     if (strlen(trim($singleParagraph)) > 0) {
                        //         echo '<li>'.$singleParagraph.'</li>';
                        //     }
                        // }

                        // OPPURE

                        for ($i = 0; $i < count($explodedParagraph); $i++) {
                            if (strlen(trim($explodedParagraph[$i])) > 0) {
                                echo '<li>'.$explodedParagraph[$i].'</li>';
                            }
                        }
                    ?>
                </ul>
            </div>
        </section>

    </body>
</html>