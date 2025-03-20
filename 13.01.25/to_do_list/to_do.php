<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>to do list</title>
    <link rel="stylesheet" href="to_do.css"/>
</head>
<body>
<header>
    <h1>TO DO LIST</h1>

</header>

<aside>
    <form method="post">
        <input type="text" name="zadanie" placeholder="Nazwa zadania">
        <br>
        Data <input type="date" name="zad_data">
        <br>
        Godzina od<input type="time" name="godz_od">
        do<input type="time" name="godz_do">
        <button type="submit">Add</button>
    </form>
    <?php
$conn = new mysqli("localhost","root","","todolist3");
if($conn -> connect_errno){
    die("Connection failed: ". $conn->connect_error);
}
if(isset($_POST['zadanie']) && !empty($_POST['zadanie']) && isset($_POST['zad_data']) && !empty($_POST['zad_data']) 
&& isset($_POST['godz_od']) && !empty($_POST['godz_od']) && isset($_POST['godz_do']) && !empty($_POST['godz_do'])){
    
    $task = $_POST['zadanie'];
    $task_date = $_POST['zad_data'];
    $hour_from = $_POST['godz_od'];
    $hour_to = $_POST['godz_do'];
    $sql = "INSERT INTO lista(zadanie,zad_data,od_godz,do_godz) VALUES ('$task', '$task_date', '$hour_from', '$hour_to')";
    mysqli_query($conn, $sql);
}
 else{
    echo "Nie podano wszystkich informacji";
}



mysqli_close($conn);
?>
</aside>
<section>

</section>
<footer>

</footer>

    

    
</body>
</html>