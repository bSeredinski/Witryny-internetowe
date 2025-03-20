<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            margin:0;
            margin-bottom: 10px;
            padding: 4px
        }
    </style>
</head>
<body>
    
    <form action="func.php" method="get">
        <input type="text" name="day" id="" placeholder="dzień" >
        <br>
        <input type="text" name="month" id="" placeholder="miesiąc" >
        <br>
        <input type="text" name="year" id="" placeholder="rok" >
        <br>
        <input type="submit" value="wyslij">
    </form>
<!-- 
napisz skrypt, który na podstawie wpisanej daty urodzin wyświetli jaki to był dzień tygodnia
oblicz ile dni mineło od danej daty 
zmodyfikuj funkcję wyświetlającą dzień tygodnia, tak aby wyświetliła się po polsku, użyj formatu 'w' funkcji date i switcha
napisz skrypt sprawddzający pełnoletność użytkownika, w zależności od wyniku wyświetl stosowny komunikat
-->
</body>
</html>