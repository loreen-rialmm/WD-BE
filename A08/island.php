<?php
include("connect.php");
include("classes.php");

$cards = array();
$islandId = $_GET['id'];


$islandQuery = "SELECT * FROM islandsofpersonality WHERE islandOfPersonalityID = $islandId";
$islandResult = executeQuery($islandQuery);
$islandData = mysqli_fetch_assoc($islandResult);

$island = new Island(
    $islandData['islandOfPersonalityID'],
    $islandData['name'],
    $islandData['shortDescription'],
    $islandData['longDescription'],
    $islandData['color'],
    $islandData['image'],
    $islandData['status']
);

$islandContentQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = $islandId";
$islandContentResult = executeQuery($islandContentQuery);

while ($contentRow = mysqli_fetch_assoc($islandContentResult)) {
    $card = new IslandCard(
        $contentRow['islandContentID'],
        $contentRow['islandOfPersonalityID'],
        $contentRow['image'],
        $contentRow['content'],
        $contentRow['color']
    );
    array_push($cards, $card);
}

foreach ($cards as $card) {
    $island->addCard($card);
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Loreen's Rialm | Personality Island</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    <link rel="stylesheet" href="island.css">

</head>

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top w3-hide-small">
        <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
            <a href="#" class="w3-bar-item w3-button">HOME</a>
            <a href="#core" class="w3-bar-item w3-button">CORE</a>
            <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
        </div>
    </div>

    <!-- Header with image -->
    <header class="bgimg w3-display-container" id="home"
        style="background-image: url('images/<?php echo $islandData['image']; ?>.jpg');">

        <div class="w3-display-bottomleft w3-padding">
            <a href="./" class="w3-tag w3-xlarge" style="text-decoration: none;">BACK</a>
        </div>

        <div class="w3-display-middle w3-center">
            <span class="w3-text-white w3-hide-small" style="font-size:100px">
                WELCOME<br>TO<br><?php echo strtoupper($islandData['name'])?> ISLAND
            </span>
            <p><a href="#core" class="w3-button w3-xxlarge w3-black">Fav Core Memories</a></p>
        </div>
    </header>

    <!-- Core Memories Container -->
    <div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="core">
        <div class="w3-content">

            <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">CORE MEMORIES</h1>

            <?php 
            foreach ($island->cards as $card) {
                echo $card->buildCard();
            }
            ?>
        </div>
    </div>

    <!-- About Container -->
    <div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
        <div class="w3-content">
            <h1 class="w3-center w3-jumbo" style="margin-bottom:64px"><b>About</b></h1>
            <p class="w3-half" style="font-size:28px"><?php echo $island->longDescription; ?></p>
            <img src="images/<?php echo $islandData['image']; ?>.jpg" style="width:380px" class="w3-circle w3-half w3-right w3-center"
                alt="Family">
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
        <p class="w3-hover-text-gray">© 2024 Loreen Marajas</p>
    </footer>

    <script>
        // Tabbed Menu
        function openMenu(evt, menuName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("menu");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
            }
            document.getElementById(menuName).style.display = "block";
            evt.currentTarget.firstElementChild.className += " w3-red";
        }
        document.getElementById("myLink").click();
    </script>

</body>

</html>