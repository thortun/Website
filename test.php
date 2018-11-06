
<!DOCTYPE html>
<html>
	<head>
        <!-- IMPORT CSS STYLES --!>
        <link type="text/css" rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/css/navstyles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
    <style>
        #floating-guy{
            position:fixed;
            width:20%;
            height:20%;
            top:40%;left:40%;right:0;bottom:0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index:2;
            cursor:pointer;
        }
    </style>
	</head>
    <body>
        <div id="floating-guy"></div>
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
