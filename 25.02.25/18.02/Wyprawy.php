<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Szczyt adrenaliny</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <!--
    przygotuj stronę typu one page, miejsca w którym musimy dokonać rezerwacji z minimum 4 sekcjami, w rezerwacji formularz połączony z bazą danych,
    sprawdzjący czy dany termin jest wolny, galeria(modyfikacje css), w kontakcie wartości dla hrefa mailto, tel i inne oraz slider wykonany js
    -->
    <header>
        <h1>Rezerwacja wypraw wysokogórskich "Szczyt adrenaliny"</h1>
        <a href="#onas"><button>O nas</button></a>
        <a href="#rezerwacja"><button>Rezerwacja</button></a>
        <a href="#galeria"><button>Galeria</button></a>
        <a href="#kontakt"><button>Kontakt</button></a>
    </header>
    <section id="onas">
        <div>
            <p onclick="previous()">&larr;</p>
            <img src="5.jpg" alt="slider" id="slide">
            <p onclick="next()">&rarr;</p>
        </div>
        <p>Jesteśmy pasjonatami górskich przygód, specjalizującymi się w organizacji profesjonalnych wypraw wysokogórskich. Nasz zespół składa się z doświadczonych przewodników górskich oraz ekspertów w zakresie bezpieczeństwa, którzy zadbają o każdy szczegół Waszej podróży. Oferujemy szeroki wachlarz tras, dostosowanych do różnych poziomów trudności, aby każdy, niezależnie od doświadczenia, mógł poczuć magię gór. Z nami przeżyjesz niezapomniane chwile w najwyższych pasmach świata, w pełni korzystając z bezpiecznej i komfortowej podróży.</p>
    </section>
    <article id="rezerwacja">
        <h2>Rezerwacja</h2>
        <form action="" method="post">
            <label for="dataa">Data wyprawy: </label>
            <input type="date" name="dataa">
            <br>
            <label for="miejsce">Miejsce: </label>
            <select name="miejsce">
                <option value="k2">K2</option>
                <option value="everest">Everest</option>
                <option value="manaslu">Manaslu</option>
                <option value="montb">Mont Blanc</option>
                <option value="matterhorn">Matterhorn</option>
            </select>
            <br>
            <input type="submit" value="Zarezerwuj" id="zar">
            <?php
            if(isset($_POST["dataa"]) && !empty($_POST["dataa"]) && isset($_POST["miejsce"]) && !empty($_POST["miejsce"])){
                $miejsce = $_POST["miejsce"];
                $data = $_POST["dataa"];
            }
            ?>
        </form>
    </article>
    <main id="galeria">
        <h2>Galeria</h2>
        <img src="1.jpg" alt="K2">
        <img src="2.jpg" alt="everest">
        <img src="3.jpg" alt="manaslu">
        <img src="4.jpg" alt="montBlanc">
        <img src="5.jpg" alt="matterhorn">
    </main>
    <footer id="kontakt">
        <h2>Kontakt</h2>
        <h3>Masz pytania?</h5>
        <p>Mail: <a href="mailto:adrenalinaSzczyt@gmail.com">adrenalinaSzczyt@gmail.com</a></p>
        <p>Telefon: <a href="tel:+48795316931">+48 795 316 931</a></p>
    </footer>

    <script>
        let x = 1;
        setInterval(() => {
            x += 1;
            if(x > 5){
                x = 1;
            }
            document.getElementById("slide").setAttribute("src", x + ".jpg");
        }, 6000);

        function previous(){
            x--;
            if(x < 1){
                x = 5;
            }
            document.getElementById("slide").setAttribute("src", x + ".jpg");
        }

        function next(){
            x++;
            if(x > 5){
                x = 1;
            }
            document.getElementById("slide").setAttribute("src", x + ".jpg");
        }
        </script>
</body>
</html>