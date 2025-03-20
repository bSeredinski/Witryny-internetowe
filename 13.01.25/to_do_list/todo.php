<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Zadanie</h1>
    </header>
    <article>
        <form action="" method="post">
            <label for="nazwa">
                Nazwa zadania:
                <input type="text" name="nazwa" id="nazwa">
            </label>
            

            <label for="data">
                Deadline:
                <input type="date" name="data" id="data">
            </label>
            

            <button type="submit">
                Dodaj zadanie
            </button>
        </form>
        <?php
            $conn = new mysqli ('localhost', 'root', '', 'todo');
            if($conn->connect_error){
                die("Connection failed: ". $conn->connect_error);
            }
            if(isset($_POST['nazwa']) &&!empty($_POST['nazwa']) && isset($_POST['data']) &&!empty($_POST['data'])){
                $task = $_POST['nazwa'];
                $deadline = $_POST['data'];
                $sql = "INSERT INTO todo(Zadanie, Deadline) VALUES ('$task', '$deadline')";
                mysqli_query($conn, $sql);
            } else {
                echo "Podaj info";
            }
            mysqli_close($conn);
        ?>

        <div class="table">
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </article>



<!-- poprzez strone pobieraj zadanię do wykonania oraz deadline, zapisuj info do bazy danych i wyświetlaj zawartość tabeli pod formularzem -->
</body>
</html>