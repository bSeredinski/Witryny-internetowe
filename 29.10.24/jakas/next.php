<form action="" method="post">
    <textarea name="opis" placeholder="wpisz opinie"></textarea>
    <input type="submit" value="wypisz">
</form>

<?php
    if(isset($_POST["opis"]) && !empty($_POST["opis"]))
    {
        $o = $_POST["opis"];
        $o = str_replace(" ", "", $o);
        $o = strtolower($o);
        $o = trim($o, "A");
        echo "Podales tekst " . $o;
    }
    else
    {
        echo "Wpisz cos";
    }
        
?>