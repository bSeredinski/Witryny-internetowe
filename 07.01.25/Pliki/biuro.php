<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Turystyka moja pasja</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>
                Podróże z uśmiechem
            </h1>
        </header>
        <section>
            <p>
                
                <?php
                    if(isset($_COOKIE['ciastko'])) {
                        echo "Witaj ponownie na naszej stronie";
                    }
                    else {
                        setcookie('ciastko', '1', time() + (60+60));
                        echo "Witaj, nasza strona uzywa ciasteczek";
                    }
                ?>
            </p>
        </section>
        <div class="con">
            <aside>
                <h2>
                    Nasze wycieczki
                </h2>
                <ol>
                    <li>autokarowe</li>
                        <ul>
                            <li>po Polsce</li>
                            <li>do Niemiec i Czech</li>
                        </ul>
                    <li>samolotem</li>
                        <ul>
                            <li>Grecja</li>
                            <li>Barcelona</li>
                            <li>Wenecja</li>
                        </ul>
                </ol>
                <h2>
                    Pobierz dokumenty
                </h2>
                <p>
                    <a href="regulamin.txt" target="_blank">Regulamin biura podróży</a>
                </p>
                <p>
                    <a href="http://galeria.pl">Zgjęcia naszych wycieczek</a>
                </p>
            </aside>
            <nav>
                <table>
                    <tr>
                        <td><img src="polska.jpg" alt="Zwiedzianie Krakowa"></td>
                        <td><img src="wlochy.jpg" alt="Wenecja i nie tylko"></td>
                    </tr>
                    <tr>
                        <td><img src="grecja.jpg" alt="Gorące greckie wyspy"></td>
                        <td><img src="hiszpania.jpg" alt="Słoneczna Barcelona"></td>
                    </tr>
                </table>
            </nav>
        </div>
        <footer>
            Stronę przygotował: 000000000000
        </footer>
    </div>
</body>
</html>