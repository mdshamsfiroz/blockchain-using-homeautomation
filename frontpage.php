<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Automation System</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap');

body {
    font-family: 'Jost', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
    
    
}

header {
    background-color: #98aad3;
    color: white;
    padding: 10px;
    text-align: center;

}

nav {
    background-color: #674fe0af;
    overflow: hidden;

}

nav a {
    float: right;
    display: block;
    color: white;
    text-align: center;
    padding: 20px 20px;
    text-decoration: none;
    font-size: 20px;
    
    border-radius: 6px;

}

nav a:hover {
    background-color: #ddd;
    color: black;
    text-decoration: underline;
    

}

.bg-img {
    position: absolute;
    height: 100%;
    width: 100%;
    background-image: url("https://img.freepik.com/premium-photo/smart-home-interface-with-augmented-realty-iot-object-interior-design_756748-3169.jpg");
    background-size: cover;
    background-position: center;
    filter: blur(5px);
    z-index: -1;

}

section {

    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.logo {
    float: left;
    display: block;

    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 20px;

}



h1 {
    font-size: 50px;
    color: #000000;
}

p {
    font-size: 30px;
    color: #000000;
}

.cta-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4c7daf;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    margin-top: 20px;
    border-color: black;
}

.cta-button:hover {
    background-color: whitesmoke;
    color: black;

    border-color: black;
}

.feature {
    margin-top: 30px;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.feature-item {
    flex: 1;
    margin: 10px;
    padding: 20px;
    background-color: #eee;
    border-radius: 8px;
    text-align: center;
    font-size: 20px;
}

.feature-item h2 {
    color: #333;
}

@media only screen and (max-width: 600px) {
    .feature {
        flex-direction: column;
    }
}


</style>

<body>



    <nav>
        <div>
            <img src="logo.png" class="logo" alt="logo" width="110px" height="50px">
        </div>
        <div class="nav_login">
            
            <a href="index.php">Login/Sign Up</a>
        </div>
        
        
        <div class="nav_home">
            <a href="#blog">Blog</a>
            <a href="#contact">Contact</a>
            <a href="#features">Features</a>
            <a href="#services">Services</a>
            <a href="#about">About</a>
            <a href="#home">Home</a>
        </div>
    </nav>
    <header>
        <h1>Welcome to Home Automation System</h1>
        <p>Your Smart Home Awaits You</p>
        <a href="#features" class="cta-button">Explore Features</a>
    </header>
    <div class="bg-img"></div>

    <section id="features">

        <h2>Features</h2>
        <div class="feature">
            <div class="feature-item">
                <h2>Smart Lighting</h2>
                <p >Control the lighting in your home with just a tap on your device.</p>
            </div>
            <div class="feature-item">
                <h2>Door Lock</h2>
                <p>Set and adjust the room by locking or open the door.</p>
            </div>
            <div class="feature-item">
                <h2>Security Systems</h2>
                <p>Keep your home secure with advanced security systems and surveillance.</p>
            </div>
            <div class="feature-item">
                <h2>Energy Efficiency</h2>
                <p>Optimize energy consumption with smart appliances and monitoring.</p>
            </div>
        </div>
    </section>
    
    



</body>

</html>