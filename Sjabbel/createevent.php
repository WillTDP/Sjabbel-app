<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sjabbel</title>
    <link rel="stylesheet" href="styleeventcreate.css">
    <script type="module" src="map.js"></script>
</head>
<body>

<div class="home flex-col-hstart-vstart clip-contents">
      <div class="group-601 flex-col-hcenter">
        <div class="group-364">
          <div class="hamburger flex-col">
            <div class="circles flex-row"   onclick="on()">
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
        <img src="assets/placeholder.png" alt="eventimg" class="eventimg">
        <a class="back" href="index.php">Back</a>
        <img class="arrow" src="assets/arrow-left-circle.png" alt="arrow">
        <p class="title">Event Name</p>
        <input type="text" class="titlebox"></p>
        <div class="dat">
            <p class="Date">Event Date</p>
            <input type="text" class="DatE">
            <p class="slash">.../.../....</p>
            <img class="calendar2" src="assets/calendarb.png" alt="calendar">
        </div>
        <div class="descr">
            <p class="Details">Event Description</p>
            <input type="text" class="descrbox">
        </div>
      <p class="Place">Location</p>
      <input type="text" class="PlacE">
      <img class="locationimg" src="assets/location.png" alt="">
      <a href="event.php" class="participatebtn">
        <p class="btn"></p>
        <p class="Participate">Create Event</p>
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
            <img src="assets/Mapgr.png" alt="map" class="mapimg">
        </a>  
    </div>
</body>

</html> 