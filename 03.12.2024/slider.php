<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lol.css">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="city.jpg" alt="img" id="imge">
    </header>
    <div class="main">
        <form action="" method="post">
        <label for="nazwa">Podaj kategorie: </label>
        <input type="text" name="nazwa"  placeholder="Kategoria...">
        <br>
        <label for="road">Ścieżka: </label>
        <input type="text" name="road"  placeholder="Path...">


    </form>
    </div>

    <script>
        let tab = [];
        let i = 0;
        tab.push("boat.jpg");
        tab.push("Boat.jpg");
        tab.push("Boat.jpg");
        tab.push("Boat.jpg");
    
        function slide () {
            if (i == tab.length){
                i = 0;
            }
            image.setAtribute('src', tab[i]);
            i++;
        }

        setInterval(slide, 1000);

        <?php
            $conn = mysqli_connect("localhost", 'root', '', 'slider');
            if(!$conn)
            {
            die('Error connecting');
            }

            $sql = "SELECT sciezka FROM slider_tab";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    tab.push("<?php echo $row['sciezka'] ?>");
                    <?php
                }
            }
        ?>
    </script>
    
</body>
</html>
<!-- stworz baze danych slider z tabelą zdjęcia i kolumnami: nr_zdj (auto_increment), kategoria, sciezka -->
<!-- stworz strone slider php na ktorej w elemencie header bedziesz wyswietlac w ustalonym przez ciebie czasie zdjecia  -->
<!-- umozliwia uztkownikowi dodawanie zdjecia do bazy danych poprzez formularz jeśli zdjecie istnieje w bazie - poinformuj, jesli nie - dodaj -->
<!-- dzialanie slajdera otworz poprzez js -->