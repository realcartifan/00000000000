<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep dla uczniów</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>

    </header>
    <div id="columnContainer">
        <aside id='left'>
            <h2>Taniej o 30%</h2>
            <?php
            $db new mysqli('localhost')
            ?>
            <ol>
                <li>humki</li>
                <li>cienkopis</li>
                <li>pisaki</li>
                <li>markery</li>
            </ol>
        </aside>
    </div>
    <main>
        <h2>sprawdz cene</h2>
        <form action="index.php" method="post"></form>
        <select name="itemSelect" id=""></select>
        <option value="gumki do mazania">gumki do mazania</option>
        <option value="cienkopisy">cienkopisy</option>
        <option value="pisaki 60 sztuki">pisaki 60 sztuki</option>
        <option value="markery 4 sztuki">markery 4 sztuki</option>
    </main>
    <aside id="right">
<h2>konakt</h2>
<p>email<a href="bok@sklep.pl">:bok@sklep.pl</a></p>
<img src="promocja1.png" alt="promocia">
    </aside>
    <footer>pesel:00000000000000000</footer>
</body>

</html>