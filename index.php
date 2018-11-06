<!DOCTYPE html>
<html>
	<head>
        <?php include('globalheader.html') ?> 
        <!-- IMPORT CSS STYLES --!>
        <link type="text/css" rel="stylesheet" href="/css/mystyles.css">
        <link rel="stylesheet" href="/css/navstyles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
	</head>
    <body>
        <h1 class="center" id="demo"> Header! </h1>
        <div class="top-nav-bar">
            <a class="nav-button" href=""></a>
        </div>
        <div class="left-section"> 
            <?php include('navigation.html'); ?>    <!-- Include navigation --!>
        </div>
        <div class="middle-section">
            <p class="middle-text"> 
                <?php include('text.txt'); ?>
            </p>
        </div>
    </body>         
</html>
