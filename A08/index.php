<?php
include("connect.php");
include("classes.php");

$menuTabs = '';
$islands = [];

$query = "SELECT * FROM islandsofpersonality";
$result = executeQuery($query);

while ($row = mysqli_fetch_assoc($result)) {
  $islands[] = new Island(
    $row['islandOfPersonalityID'],
    $row['name'],
    $row['shortDescription'],
    $row['longDescription'],
    $row['color'],
    $row['image'],
    $row['status'],
  );

  $menuTabs .= '
  <a href="javascript:void(0)" onclick="openMenu(event, \'' . $row['name'] . '\');" id="myLink">
    <div class="w3-col s3 tablink w3-padding-large w3-hover-red">' . $row['name'] . '</div>
  </a>';

}
?>


<!DOCTYPE html>
<html>

<head>
  <title>Loreen's Rialm</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
  <link rel="stylesheet" href="styles.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top w3-hide-small">
    <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
      <a href="#" class="w3-bar-item w3-button">HOME</a>
      <a href="#islands" class="w3-bar-item w3-button">ISLANDS</a>
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#contact" class="w3-bar-item w3-button">CONTACT</a>
    </div>
  </div>

  <!-- Header with image -->
  <header class="bgimg" id="home">
    <div class="w3-display-bottomleft w3-padding">
      <span class="w3-tag w3-xlarge">by yours truly</span>
    </div>
    <div class="w3-display-middle w3-center">
      <span class="w3-text-white w3-hide-small fw-bold" style="font-size:135px">WELCOME<br>TO MY RIALM</span>
      <p><a href="#islands" class="w3-button w3-xxlarge w3-black">GET TO KNOW ME</a></p>
    </div>
  </header>

  <!-- Menu Container -->
  <div class="w3-container w3-padding-64 w3-black w3-xxlarge" id="islands">
    <div class="w3-content">

      <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">THE ISLANDS OF MY PERSONALITY</h1>
      <div class="w3-row w3-center w3-border w3-border-dark-grey">
        <?php echo $menuTabs; ?>
      </div>

      <?php foreach ($islands as $island) {
          echo $island->buildIsland();
        }?>
    </div>
  </div>

  <!-- About Container -->
  <div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
    <div class="w3-content">
      <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">About</h1>
      <p>Explore the islands that shape who I am, each representing a key aspect of my life. Like in Inside Out, these
        islands reveal the core of my personality.
        From the love and support of Family Island, to the cherished memories on Friends Island, every island tells
        its
        own story. Sponty Trip Island captures my adventurous spirit, while Film and Music Island fuels my creativity
        with stories and melodies.
        Each island has its own unique charm. Join me on this journey to discover the people and passions that define
        me. Welcome to my personality—every island plays a part in making me who I am.
      </p>

      <div class="w3-row">
        <div class="w3-col s9">
          <p><strong>The Creator?</strong> That would be me, Ma. Loreen M. Marajas. Join me as I bring each island to
            life
            and shape the stories that define them.</p>
        </div>
        <div class="w3-col s3">
          <img src="images/aboutImg1.jpg" style="width:135px; border-radius: 8px;"
            class="w3-square w3-right no-grayscale" alt="Creator">
        </div>
      </div>
    </div>
  </div>

  <!-- Contact -->
  <div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
    <div class="w3-content" id="contact">
      <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Contact</h1>
      <p class="w3-xxlarge"><strong>Reach out to me at these social medias below.</strong><br> Feel free to share your
        thoughts or recommend any special requests.</p>

      <ul class="socials">
        <li>
          <a class="text-caps-small" href="mailto:marajasmaloreen@gmail.com" target="_blank"
            rel="noopener noreferrer"><i class="bi bi-envelope" style="font-size: 40px;"></i>
          </a>
        </li>
        <li>
          <a class="text-caps-small" href="https://github.com/loreen-rialmm" target="_blank"
            rel="noopener noreferrer"><i class="bi bi-github" style="font-size: 40px;"></i>
          </a>
        </li>
        <li>
          <a class="text-caps-small" href="https://www.instagram.com/ria_oreen/" target="_blank"
            rel="noopener noreferrer"><i class="bi bi-instagram" style="font-size: 40px;"></i>
          </a>
        </li>
        <li>
          <a class="text-caps-small" href="https://www.facebook.com/loreen.marajas" target="_blank"
            rel="noopener noreferrer"><i class="bi bi-facebook" style="font-size: 40px;"></i>
          </a>
        </li>
      </ul>
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