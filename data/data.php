<html>
<head>
    <?php 
	$path=$_SERVER['DOCUMENT_ROOT'];
	$path.='/globalheader.html';
	include_once($path);
    ?>
    <link rel="stylesheet" href="/css/mystyles.css">
    <link rel="stylesheet" href="/css/navstyles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>

<div>
<div class="top-nav-bar">
</div>
<div class="left-section">
    <?php include("navhydr.html"); ?> <!--Navigation file --!>
</div>
<div class="middle-section" style="background-color:white;">
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Water')">Water</button>
        <button class="tablinks" onclick="openTab(event, 'Temperature')">Temp.</button>
        <button class="tablinks" onclick="openTab(event, 'Distance')">Dist.</button>
    </div>
    <div id='Water' class="tabcontent">
        <h3>Water</h3>
        <p>
            This is the average water consumed by the plants. It is measured by weighing the plants every 10 minutes to get the weight-gradient. Evaporation should also be taken into account.
        <div style="text-align:center;">
        <img src="foo.png" style="max-width:100%;max-height:100%"></img>
        </div>
    </div>
    <div id='Temperature' class="tabcontent">
        <h3>Temperature</h3>
        <p>
            Varying temperature of the globe!
        </p>
    </div>
    <div id='Distance' class="tabcontent">
        Distance
    </div>
</div>
</div>
<script>
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    var activeTab;
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</body>
</html>
