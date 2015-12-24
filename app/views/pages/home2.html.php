<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <div class="logo"></div>
        <div class="registration">
            <ul>
                <li>Sign In</li>
                <li>Log In</li>
            </ul>
        </div>
    </nav>
    <div class="jumbo">
        <h1>Volunteer Matching</h1>
    </div>

    <div class="body">
        <?php
        echo $body;
        ?>
        <p>
        Wij van Volunteer Matching hebben één doel:
        Wij matchen Vluchtelingen met Vrijwliigers in jouw Buurt.

        Wij van Volunteer Matching hebben een missie:
        Wij willen aan elke Vluchteling één of meerdere Vrijwillegers koppelen om het inburgeren te versnellen.

        De Vluchtelingen hebben jullie hulp hard nodig. Schrijf je in en doe mee. </p>

        <button>Volunteer nu als vriend </button>
    </div>
    <footer></footer>
</body>
</html>