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
                cursor:pointer;
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
                max-width:fit-content;
                margin: 0 auto;
                
            }
            button {
                font-size: 18px;
                padding: 10px 20px;
                cursor: pointer;
            }
            #orangeContainer {
                display:flex;
                justify-content: center;
                text-align: center;
                align-items: center;
                flex-wrap: wrap;
                width: 100%;
                max-width:1200px;
                margin: 0 auto;
                padding-bottom: 50px;
            }
            .item {
                padding: 20px 40px;
                width: 300px;
                height: 200px;
                background-image: url('siteImages/kawaii-orangeAtComputer.png');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                font-size: 24px;
                font-weight: bold;
                color: #ffffff;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
                border: none;
                border-radius: 10px;
                margin: 10px;
                cursor: pointer;
                transition: transform 0.3s ease;
                white-space: normal;
                overflow: hidden;
                line-height: 1.2;
             }
            
            .item:hover {
                transform: scale(1.15);
                
            }
            #infoBoard {
                background-size: cover;
                background-color: lightgray;
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
                <button class="item" data-default-text="BUILD" data-hover-text="BUILD your new WEBSITE" data-expo-text="whether its an online-store, portfolio, we build whatever you need for our business"> BUILD</button>
                <button class="item" data-default-text="LEARN" data-hover-text="Learn to BUILD your new WEBSITE" data-expo-text="if you're more interested in doing it you self orangeBandit will teach you all the neccesary skill required to build your dream WEBSITE"> LEARN</button>
                <button class="item" data-default-text="CONSULT" data-hover-text="Explore New Ideas" data-expo-text="can't fully explain what you want hop on a consultation call and we'll help flesh out all you dream Ideas"> CONSULT</button>
            </div>
            <div id="infoBoard">
                <h1> orangeBandit is committed to help you achieve whats best for your career, and business</h1>
                <p class="infoText"> fucking hell</p>
            </div>
        </section>


        <script>
            let expoText = "";
            let expoPar = document.getElementByClass('infoText');
            document.querySelectorAll('.item').forEach(button => {

                const defaultText = button.getAttribute('data-default-text');
                const hoverText = button.getAttribute('data-hover-text');

                
                expoText = button.getAttribute('data-expo-text');

                button.addEventListener('mouseenter', () => {
                    button.textContent = hoverText;
                    expoPar.textContent = expoText
                })
                button.addEventListener('mouseleave', () => {
                    button.textContent = defaultText;
                    expoPar.defaultText = ""
                })


            })
        </script>
    </body>
</html>