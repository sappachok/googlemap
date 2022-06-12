<button onclick="getLocation()">Get Current Position</button>

<form action="insert.php" method="post">
    <p>
        <label>Name</label><br>        
        <input type="text" name="name">
    </p>
    <p>
        <label>Latitude</label><br>        
        <input id="lat" type="text" name="lat">
    </p>
    <p>
        <label>Longitude</label><br>        
        <input id="lon" type="text" name="lon">
    </p>
    <p>
        <button type="submit" name="save" value="true">บันทึกเพิ่มรายการ</button>
    </p>             
</form>

<script>
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  document.getElementById("lat").value = position.coords.latitude;
  document.getElementById("lon").value = position.coords.longitude;
}
</script>