<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="siteImages/icon.png" type="image/x-icon">
        <title>Orange Bandit</title>
        <style>
            @font-face {
                font-family: 'headerfont';
                src: url(siteFonts/SixtyfourConvergence-Regular.ttf);
            }
            @font-face {
                font-family: 'mainfont';
                src: url(siteFonts/Comfortaa-VariableFont_wght.ttf);
            }
            #mainheader {
                font-family: 'mainfont',Arial, sans-serif;
                
                color: brown;
                margin: 0 auto;
                text-align: center;
                max-width: 800px;
                padding-top: 10px;
                padding-bottom: 50px;
            }
            #hicon {
                width: 100px;
                height: 100px;
                display: block;
                margin: 0 auto;
                background-blend-mode:color-dodge;
            }
            body {
                font-family: 'mainfont',Arial, sans-serif;
                max-width: 800px;
                margin: 0 auto;
                padding: 20px;
                
            }
            button {
                font-size: 18px;
                padding: 10px 20px;
                cursor: pointer;
            }
        </style>

        
    </head>
    <body>
        <header>
            <img id="hicon" src="siteImages/icon.png" alt="">
            <h1 id="mainheader">orangeBandit</h1>
        </header>
        <section>
            <div id="orangeContainer">
                <button id="orangeButton">Take Orange</button>
            </div>
            <div id="scoreContainer"></div>
            <div id="gameOverContainer"></div>
            <div id="restartButtonContainer"></div>
        </section>
        <p>
            In this game, you will be presented with a series of oranges. Each time you choose to take an orange, your score will increase by 1. However, if you choose to take an orange that's not an orange, your score will decrease by 2. The game will continue until you either reach a score of 100 or lose all your points.
        </p>
        <button onclick="playGame()">Start Game</button>

        <script>
            function playGame() {
                alert("Game started! This function needs to be implemented.");
                // Implement your game logic here
            }
        </script>
    </body>
</html>