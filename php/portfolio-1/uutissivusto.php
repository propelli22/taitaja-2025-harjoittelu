<!-- Tietokannan data ei ole ajantasalla, joten käytin vain vko 21 dataa -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uutissivusto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Satuvaltakunnan tarinat</h1>
        <h2>Uutisia lumotusta maasta</h2>

        <nav>
            <h3>Viikon sää - viikko <?php echo "21"; ?></h3>
        </nav>

        <section>
            <!-- Tässä oli for loop joka haki viikko kohtaiset sää tiedot-->
            <?php
                $vko = 21;

                $saaXML = simplexml_load_file("saa.xml") or die("Virhe: XML-syötteen käsittely epäonnistui");

                
            ?>
        </section>
        
    </header>

    <div id="main-container">
        <main>
            <!--Tässä oli for loop joka haki 2 uusinta pääuutista -->
        </main>

        <aside>
            <ul>
                <li id="uusimmat">Uusimmat uutiset</li>
                <!-- tässä oli for loop joka haki kaikki uutiset -->

                <li id="vierailevat">Vierailevat kirjoittajat</li>
                <!-- tässä oli for loop joka haki kaikki vieras blogit-->
            </ul>
        </aside>
    </div>
</body>
</html>