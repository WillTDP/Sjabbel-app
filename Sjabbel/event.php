<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sjabbel</title>
    <link rel="stylesheet" href="styleevent.css">
</head>
<body>
<div class="home flex-col-hstart-vstart clip-contents">
      <div class="group-601 flex-col-hcenter">
        <div class="group-364">
          <div class="hamburger flex-col" onclick="on()">
            <div class="circles flex-row" onclick="on()">
              <div class="ellipse-1" />
              <div class="ellipse-2" />
            </div>
            <div class="group-649 flex-row">
              <div class="ellipse-3" />
              <div class="ellipse-4" />
            </div>
          </div>
          <a href="profile.php">
            <img
                src="https://firebasestorage.googleapis.com/v0/b/unify-bc2ad.appspot.com/o/6o5xp34susd-372%3A82?alt=media&token=6e757a6e-f5dd-472c-8377-eab67ca9c6f3"
                alt="Not Found"
                class="user"
            />
          </a>
        </div>

      <img
        src="https://firebasestorage.googleapis.com/v0/b/unify-bc2ad.appspot.com/o/6o5xp34susd-16%3A53?alt=media&token=967278f2-7668-4dc3-8135-3c4059bc7f00"
        alt="Not Found"
        class="logo-wip-1"
      />
      <div class="event">
        <img src="assets/event1img.png" alt="eventimg" class="eventimg">
        <a class="back" href="index.php">Back</a>
        <p class="title">Stam Cafe</p>
        <p class="Details">Event Details</p>
        <p class="text">
Scoete van Roi wordt 50 jaar en dat betekend voor t'Zolderke 
natuurlijk ook feest!!
Wij nodigen alle leiding en oud-leiding uit voor een gezellige 
avond outdoor-zolderke in de tuin van het meisjeslokaal.
Iedereen die kan bewijzen (oud-)leiding te zijn 
(foto's, hemd, ...) krijgt een drankje op de kosten van 
t'Zolderke zelf!!
Muziek, drank, vuur en sfeer worden allemaal voorzien!.</p>
      <p class="Place">Place:</p>
      <p class="PlacE">t’ Zolderke, Hoefkantweg 5 1860 Meise</p>
      <p class="Date">Date:</p>
      <p class="DatE">13/05/2022, Tomorrow</p>
      <p class="users">Participants</p>
      <a href="agenda.php" class="participatebtn">
        <p class="btn"></p>
        <p class="Participate">Participate</p>
      </a>
      </div>

      <!--trying to get the hamburger menu to work-->
<div id="popout"  onclick="off()">
    <div class="rectangle"></div>
    <a href="agenda.php">
      <img src="assets/calendar.png" alt="callendar" class="calendar">
    </a>
    <img src="assets/Settings.png" alt="settings" class="settings">
    <img src="assets/Bell.png" alt="bell" class="bell">
</div>
<script>
function on() {
  document.getElementById("popout").style.display = "block";
}

function off() {
  document.getElementById("popout").style.display = "none";
}
</script>

      <div class="bar">
        <div class="rect"> </div>
        <a href="index.php">
            <div class="home_button"></div>
            <img src="assets/home.png" alt="home" class="homeimg">
        </a>
        <a href="games.php">
          <img src="assets/Crosshair.png" alt="games" class="gamesimg">
        </a>
        <a href="map.php">
            <img src="assets/Map.png" alt="map" class="mapimg">
        </a>  
    </div>
</body>
</html> 