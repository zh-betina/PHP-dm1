<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>DM 1 - Janvier 2022</title>
</head>

<body>
    <h1>DM 1 - Janvier 2022</h1>
    <section>
        <h2>Ex 1</h2>
        <pre>
        $notes_etudiants = [
            "Eric" => 16, "Julien" => 14, "Mathilde" => 15,
            "Marc" => 13, "Fabien" => 10, "Julie" => 12, "Laurent" => 8,
            "Mégane" => 17
        ];
        </pre>
        <?php
        $notes_etudiants = [
            "Eric" => 16, "Julien" => 14, "Mathilde" => 15,
            "Marc" => 13, "Fabien" => 10, "Julie" => 12, "Laurent" => 8,
            "Mégane" => 17
        ];
        ?>
        <h3>1.1a - For</h3>
        <pre>
        $students = array_keys($notes_etudiants);
                    for ($i = 0; $i < count($students); $i++) {
                        echo "< tr >< td >" . $students[$i] .
                            "< / td >< td >" . $notes_etudiants[$students[$i]] .
                            "< / tr >";
                    }
        </pre>
        <table>
            <thead>
                <tr>
                    <td>Noms</td>
                    <td>Notes</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $students = array_keys($notes_etudiants);
                for ($i = 0; $i < count($students); $i++) {
                    echo "<tr><td>" . $students[$i] .
                        "</td><td>" . $notes_etudiants[$students[$i]] .
                        "</tr>";
                }

                ?>
            </tbody>
        </table>
        <h3>1.1b - Foreach</h3>
        <pre>
        foreach ($notes_etudiants as $key => $value) {
                        echo "< tr >< td >" . $key .
                            "< / td >< td >" . $value .
                            "< / tr >";
                    }
        </pre>
        <table>
            <thead>
                <tr>
                    <td>Noms</td>
                    <td>Notes</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($notes_etudiants as $key => $value) {
                    echo "<tr><td>" . $key .
                        "</td><td>" . $value .
                        "</tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
    <section>
        <h3>1.2</h3>
        <pre>
            $notes_etudiants["Jaques"] = 19;
            $notes_etudiants["Lise"] = 19;

            print_r($notes_etudiants);

        </pre>
        <?php
        $notes_etudiants["Jaques"] = 19;
        $notes_etudiants["Lise"] = 19;

        print_r($notes_etudiants);
        ?>
    </section>
    <section>
        <h3>1.3</h3>
        <pre>
        $bestStudents = array_keys($notes_etudiants, max($notes_etudiants));
        $bestStudents = join(" et ",$bestStudents);

        < p >L'(es)étudiant(s) ayant la meilleure note est/sont : < ? = $bestStudents ? > < / p >
    </pre>
        <?php
        $bestStudents = array_keys($notes_etudiants, max($notes_etudiants));
        $bestStudents = join(" et ", $bestStudents);
        ?>
        <p>L'(es)étudiant(s) ayant la meilleure note est/sont : <strong><?= $bestStudents ?></strong>.</p>
    </section>
    <section>
        <h3>1.4</h3>
        <pre>
        $worstStudents = array_keys($notes_etudiants, min($notes_etudiants));
        $worstStudents = join(" et ",$worstStudents);

        < p > L'(es)étudiant(s) ayant la note la plus bas est/sont : < ? = $worstStudents ? >.< /p >
    </pre>
        <?php
        $worstStudents = array_keys($notes_etudiants, min($notes_etudiants));
        $worstStudents = join(" et ", $worstStudents);
        ?>
        <p>L'(es)étudiant(s) ayant la note la plus bas est/sont : <strong><?= $worstStudents ?></strong>.</p>
    </section>
    <section>
        <h3>1.5</h3>
        <pre>
        ksort($notes_etudiants);
        </pre>
        <table>
            <thead>
                <tr>
                    <td>Noms</td>
                    <td>Notes</td>
                </tr>
            </thead>
            <tbody>
                <?php
                ksort($notes_etudiants);
                foreach ($notes_etudiants as $key => $value) {
                    echo "<tr><td>" . $key .
                        "</td><td>" . $value .
                        "</tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
    <section>
        <h3>1.6</h3>
        <pre>
            arsort($notes_etudiants);
        </pre>
        <table>
            <thead>
                <tr>
                    <td>Noms</td>
                    <td>Notes</td>
                </tr>
            </thead>
            <tbody>
                <?php
                arsort($notes_etudiants);
                foreach ($notes_etudiants as $key => $value) {
                    echo "<tr><td>" . $key .
                        "</td><td>" . $value .
                        "</tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
    <section>
        <h3>1.7</h3>
        <pre>
        $avg = array_sum($notes_etudiants)/count($notes_etudiants);
    </pre>
        <?php
        $avg = array_sum($notes_etudiants) / count($notes_etudiants);
        ?>
        <p>La moyenne de la classe est egale à <strong><?= $avg ?></strong>.</p>
    </section>
    <section>
        <h2>Ex 2</h2>
        <pre>
        $personnes = array(
            'mdupond'=> array('prenom' => 'Martin', 'nom' => 'Dupond', 'age' => 25, 'ville' => 'Paris'), 
            'jm'=> array('prenom' => 'Jean', 'nom' => 'Martin', 'age' => 20, 'ville' => 'Villetaneuse'), 
            'toto'=> array('prenom' => 'Tom', 'nom' => 'Tonge', 'age' => 18, 'ville' => 'Epinay'), 
            'arn'=> array('prenom' => 'Arnaud', 'nom' => 'Dupond', 'age' => 33, 'ville' => 'Paris'), 
            'eailta'=> array('prenom'=>'Emilie', 'nom'=>'Ailta', 'age'=>46, 'ville'=>'Villetaneuse'), 
            'dask' => array('prenom'=>'Damien', 'nom'=>'Askier','age'=>7,'ville'=>'Villetaneuse')); 
        </pre>
        <?php
        $personnes = array(
            'mdupond' => array('prenom' => 'Martin', 'nom' => 'Dupond', 'age' => 25, 'ville' => 'Paris'),
            'jm' => array('prenom' => 'Jean', 'nom' => 'Martin', 'age' => 20, 'ville' => 'Villetaneuse'),
            'toto' => array('prenom' => 'Tom', 'nom' => 'Tonge', 'age' => 18, 'ville' => 'Epinay'),
            'arn' => array('prenom' => 'Arnaud', 'nom' => 'Dupond', 'age' => 33, 'ville' => 'Paris'),
            'eailta' => array('prenom' => 'Emilie', 'nom' => 'Ailta', 'age' => 46, 'ville' => 'Villetaneuse'),
            'dask' => array('prenom' => 'Damien', 'nom' => 'Askier', 'age' => 7, 'ville' => 'Villetaneuse')
        );
        ?>
    </section>
    <section>
        <h3>2.1</h3>
        <pre>
        echo "< pre >";
        var_dump($personnes);
        echo "< / pre >";
        $keys = array_keys($personnes);

        foreach ($keys as $key) {
            echo "< li >" . $key . "< / li >";
        }

        #type de cle : < ?= gettype($keys[0])? >
        #type de valeurs : < ?= gettype($personnes[$keys[0]])? >
        </pre>
        <p>Les clé du tableau $personnes sont les clés suivant :</p>
        <ul>
            <?php
            $keys = array_keys($personnes);
            foreach ($keys as $key) {
                echo "<li>" . $key . "</li>";
            }
            ?>
        </ul>
        <p>Le type de ces clés correspond au type <strong><?= gettype($keys[0]) ?></strong>.</p>
        <p>Le type des valeurs du tableau $personnes correspond au <strong><?= gettype($personnes[$keys[0]]) ?></strong>.</p>
        <p>Ces <strong>array</strong> contiennent eux-meme les autres valeurs, notamment des <strong>string</strong> et <strong>int</strong>,
            avec les clés en <strong>string</strong>.</p>
    </section>
    <section>
        <h3>2.2</h3>
        <pre>
        $personnes['toto']['ville'];
        $personnes['arn']['age'];
        </pre>
        <p> Ville : <?= $personnes['toto']['ville'] ?>.</p>
        <p> Age : <?= $personnes['arn']['age'] ?>.</p>
    </section>
    <section>
        <h3>2.3</h3>
        <pre>
        array_push($personnes['cols'], $personnes);
            $cols = ["Prénom", "Nom", "Age", "Ville"];
            $personnes['cols'] = $cols;
            echo "< pre >";
            print_r($personnes);
            echo "< / pre>";
        </pre>
        <?php
        array_push($personnes['cols'], $personnes);
        $cols = ["Prénom", "Nom", "Age", "Ville"];
        $personnes['cols'] = $cols;
        echo "<pre>";
        print_r($personnes);
        echo "</pre>";
        ?>
    </section>
    <section>
        <h3>2.4</h3>
        <pre>
        $result = [];
            $keyword = "Villetaneuse";
            foreach($personnes as $person) {
                if(in_array($keyword, $person)) {
                    array_push($result, $person['nom']);
                }
            }
            $result = join(", ", $result);
        </pre>
        <?php
        $result = [];
        $keyword = "Villetaneuse";
        foreach ($personnes as $person) {
            if (in_array($keyword, $person)) {
                array_push($result, $person['nom']);
            }
        }
        $result = join(", ", $result);
        ?>
        <p>Dans la ville <?= $keyword ?> habite(nt) : <?= empty($result) ? "--" : $result ?>.</p>
    </section>
    <section>
        <h2>Ex 3</h2>
        <h3>3.1</h3>
        <pre>
        array_push($personnes["emails"], $personnes);
            $emails = array("dupond.martin@free.com","martin.jean@fiscali.fr",
            "tonge.tom@waladoo.fr ","dupond.arnaud@waladoo.fr",
            "ailta.emilie@fiscali.fr","askier.damien@fiscali.fr");
            
            $names = array_keys($personnes);
            $counter = 0;
            
            foreach($names as $name) {
                if ($counter < 6) {
                    $personnes['emails'][$name] = $emails[$counter];
                    $counter += 1;
                }
            }
        </pre>
        <?php
        array_push($personnes["emails"], $personnes);
        $emails = array("dupond.martin@free.com", "martin.jean@fiscali.fr", "tonge.tom@waladoo.fr ", "dupond.arnaud@waladoo.fr", "ailta.emilie@fiscali.fr", "askier.damien@fiscali.fr");

        $names = array_keys($personnes);
        $counter = 0;

        foreach ($names as $name) {
            if ($counter < 6) {
                $personnes['emails'][$name] = $emails[$counter];
                $counter += 1;
            }
        }

        echo "<pre>";
        print_r($personnes);
        echo "</pre>";
        ?>

    </section>
    <section>
        <h3>3.2</h3>
        <pre>
    $domains = [];
        foreach($personnes['emails'] as $email => $val) {
            $domainName = explode('@', $val);
            array_push($domains, $domainName[1]);
        }

        $stats = array_count_values($domains);

        foreach($stats as $key => $val) {
            echo "< p>Fournisseur d'acces : ";
            print_r($key);
            echo " = ";
            print_r(round($val * 100/count($domains), 2));
            echo "%.< / p>";
        }
    </pre>
        <?php
        $domains = [];
        foreach ($personnes['emails'] as $email => $val) {
            $domainName = explode('@', $val);
            array_push($domains, $domainName[1]);
        }

        $stats = array_count_values($domains);

        foreach ($stats as $key => $val) {
            echo "<p>Fournisseur d'acces : ";
            print_r($key);
            echo " = ";
            print_r(round($val * 100 / count($domains), 2));
            echo "%.</p>";
        }
        ?>
    </section>
    <section>
        <h2>Ex 4</h2>
        <h3>4.1</h3>
        <?php
        $mois = [
            'janvier', 'fevrier', 'mars', 'avril',
            'mai', 'juin', 'juillet', 'aout', 'septembre',
            'octobre', 'novembre', 'decembre'
        ];
        $months = [
            'january', 'february', 'march', 'april', 'may',
            'june', 'july', 'august', 'september', 'october', 'november',
            'december'
        ];

        echo "<pre>";
        print_r($mois);
        echo "<br>";
        print_r($months);
        echo "</pre>";
        ?>
        <h3>4.2+4.3</h3>
        <pre>
        if (!empty($_POST['transTxt'])) {
            $txt = strtolower($_POST['transTxt']);
            if (in_array($txt, $mois)) {
                $index = array_search($txt, $mois);
                $trans = $months[$index];
                echo "< p>Traduction (FR->EN) pour :" . $_POST['transTxt'] . "< / p>";
                print_r($trans);
            } else if (in_array($txt, $months)) {
                $index = array_search($txt, $months);
                $trans = $mois[$index];
                echo "< p>Traduction (EN->FR) pour : " . $_POST['transTxt'] . "< / p>";
                print_r($trans);
            } else {
                echo "< p>Le mot n'existe pas dans notre dictionnaire< / p>";
            }
        }
        </pre>
        <form method="post" action="./index.php">
            <label>
                Texte à traduire :
                <input name="transTxt" type="text" required>
            </label>
            <button type="submit">Traduire</button>
        </form>
        <?php
        if (!empty($_POST['transTxt'])) {
            $txt = strtolower($_POST['transTxt']);
            if (in_array($txt, $mois)) {
                $index = array_search($txt, $mois);
                $trans = $months[$index];
                echo "<p>Traduction (FR->EN) pour :" . $_POST['transTxt'] . "</p>";
                print_r($trans);
            } else if (in_array($txt, $months)) {
                $index = array_search($txt, $months);
                $trans = $mois[$index];
                echo "<p>Traduction (EN->FR) pour : " . $_POST['transTxt'] . "</p>";
                print_r($trans);
            } else {
                echo "<p>Le mot n'existe pas dans notre dictionnaire</p>";
            }
        }
        ?>
    </section>
</body>

</html>