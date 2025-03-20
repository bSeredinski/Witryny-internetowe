<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="color">Choose a color:</label> <br>
        <input type="radio" id="red" name="color" value="red"> red <br>
        <input type="radio" id="red" name="color" value="green"> green <br>
        <input type="radio" id="red" name="color" value="blue"> blue <br>
        <button type="submit" onclick="">Submit</button>
    </form>

    <?php

        if(isset($_POST['color']) && !empty($_POST['color'])) {
            $color = $_POST['color'];
            diff($color);
        }
        function diff($color){
            echo "<div style='background-color: $color; width: 200px; height: 200px;'>";
        }

    
    ?>


</body>
</html>



<!-- stworz funkcje kwadrat ktora dynamicznie wykonuje diva o wielkosci 200 na 200 i nada kolor wybrany z formularza -->