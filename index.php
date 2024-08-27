<?php
        
        date_default_timezone_set('Asia/Jakarta');

        
        $hour = date("H");

        
        if ($hour >= 5 && $hour < 12) {
            $message = "Pagi";
        } elseif ($hour >= 12 && $hour < 15) {
            $message = "Siang";
        } elseif ($hour >= 15 && $hour < 18) {
            $message = "Sore";
        } else {
            $message = "Malam";
        }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supportme (Angkatan 24) - SMP Bruderan Purwokerto</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>

        


        
  * {
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
    overflow: hidden;
    font-family: "Karla", sans-serif;
}
header {
    background: #fff;
    width: 100%;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 50px;
}
header .logo {
    font-size: 30px;
    text-transform: uppercase;
}
header nav ul {
    display: flex;
}
header nav ul li a {
    display: inline-block;
    color: #000;
    padding: 5px 0;
    margin: 0 10px;
    border: 3px solid transparent;
    text-transform: uppercase;
    transition: 0.2s;
}
header nav ul li a:hover,
header nav ul li a.active {
    border-bottom-color: dodgerblue;
}
.hamburger {
    cursor: pointer;
    display: none;
}
.hamburger div {
    width: 30px;
    height: 3px;
    margin: 5px 0;
    background: #000;
}
@media only screen and (max-width: 900px) {
    header {
        padding: 0 30px;
    }
}
@media only screen and (max-width: 700px) {
    .hamburger {
        display: block;
    }
    header nav {
        position: absolute;
        width: 100%;
        left: -100%;
        top: 70px;
        width: 100%;
        background: #fff;
        padding: 30px;
        transition: 0.3s;
    }
    header #nav_check:checked ~ nav {
        left: 0;
    }
    header nav ul {
        display: block;
    }
    header nav ul li a {
        margin: 5px 0;
    }
}
    </style>

</head>
<body style="background-color: white; background-size: cover; background-position: center; background-repeat: no-repeat;">
<header>
        <div class="logo"></div>
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <ul>
                <li>
                    <a href="index">Home</a>
                </li>
                <li>
                    <a href="publik" target="__blank">Upload files</a>
                </li>
                <li>
                    <a href="chat">Chat</a>
                </li>
                <li>
                    <a href="" class="active">Donate</a>
                </li>
                <li>
                    <a href="album-lulus">Lulus</a>
                </li>
            </ul>
        </nav>
        <label for="nav_check" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </label>
    </header>

    <div style="text-align: center;">
            <h3>Support saya dengan donate</h3>            
    </div>

<div class="container">
        
        <main>
            <img src="assests/qr-me.png">
        </main>
        <h3 style="text-align: center;"><a href="https://saweria.co/xynsupport" target="__blank">Scan QR untuk support saya<a></h3>

        <h4 style="text-align: center;  border: 2px solid #000; background-color: #3b3636; padding: 10px 10px; border-radius: 5px; color: white; margin-top: -10px; margin-top: 30px;"><a href="https://saweria.co/widgets/leaderboard?streamKey=34f2b29c9084c17b93d3cc621909db4e" target="__blank" style="color: white;">Leaderboard</a></h4>
        <footer>build v0.3. develoment by billy</footer>
    </div>
</body>
</html>
