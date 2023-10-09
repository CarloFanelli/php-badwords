<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>

<body>

    <form action="script.php" method="POST">
        <div>
            <label for="paragraph">Inserisci il testo</label>
            <textarea name="paragraph" id="paragraph" cols="25" rows="5"></textarea>
        </div>
        <div>
            <label for="badword">Inserisci la parola da censurare</label>
            <input type="text" name="badword" id="badword">
        </div>
        <button type="submit">invia</button>
    </form>

</body>

</html>