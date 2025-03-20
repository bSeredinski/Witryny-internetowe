<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post"> <br>
        <input type="text" name="imie"> imie <br>
        <input type="text" name="Nazwisko"> Nazwisko <br>
        <input type="tel" name="tel"> Telephone <br>
        <input type="email" name="email"> Email <br>
    </form>     
    <?php
        $conn = mysqli_connect("localhost","root", "", "smigma");
        if(!$conn){
            exit();
        }
        else{
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $number = $_POST['number'];
            $email = $_POST['email'];
            
            $sql = "INSERT INTO uzytkownik(imie, nazwisko, telefon, email) VALUES ('$name', '$surname', '$number', '$email');";
            
            $sql1= "SELECT * FROM uzytkownik where email = '$email'";
            
            $wynik = mysqli_query($conn,$sql1);
    
            if(mysqli_num_rows($wynik) == 0){
                mysqli_query($conn, $sql);
            }
        
            echo "Dane zostały dodane do bazy";
        }
    
    ?>  
</body>
</html>