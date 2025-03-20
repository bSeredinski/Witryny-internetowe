<?php 
$conn = mysqli_connect("localhost", "root", "", "hihihi");

if(mysqli_connect_errno()){
    exit();
}
else{
    echo "połączono z bazą danych <br>";
}

mysqli_query($conn, "SET CHARACTER SET UTF8");
$sql = "INSERT INTO apass(user, haslo) VALUES ('"$_POST['login']"', '"['password']"'; ";
$wynik = mysqli_query($conn, $sql);
if(mysqli_num_rows($wynik) > 0)
{
    while($row = mysqli_fetch_assoc($wynik))
    {
        echo "Miasto: $row[nazwa] <br>";
    }
}
else 
{
    echo "brak miast";
}
?>