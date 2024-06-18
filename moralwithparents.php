   <!DOCTYPE html>
   <html lang="en">

   <head>
       <title>moral with parents</title>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   </head>
   <style>
       .jumbotron {
           background-image: url(img/iewfhkx.jpg);
           background-size: cover;
           background-repeat: no-repeat;
           background-position: top;
           height: 400px;
           padding-top: 120px;
           box-shadow: 0 -4px 8px 10px rgba(0, 0, 0, 0.1);
       }

       body {
           background: linear-gradient(to bottom, #B9E7C9, #F5F5DC, #FFD1DC);
       }

       h1 {
           color: #295054;
           font-family: cursive;
       }

       p1 {
           color: #295054;
           font-family: serif;
           font-style: italic;
           font-size: 20px;
       }

       h2 {
           align-content: center;
           align-items: center;
           text-align: center;
           font-family: serif;
           color: #2A0753;
           margin-top: 70px;
           margin-bottom: 50px;
           font-size: 40px;
       }

       .container-parents1 {
           width: 380px;
           height: 270px;
           perspective: 900px;
       }

       .card1 {
           height: 100%;
           width: 100%;
           background-color: aliceblue;
           position: relative;
           transition: transform 1500ms;
           transform-style: preserve-3d;
           border-radius: 2rem;
       }

       .container-parents1:hover>.card1 {
           cursor: pointer;
           transform: rotateY(180deg) rotateZ(180deg);
       }

       .front1 {
           height: 100%;
           width: 100%;
           border-radius: 2rem;
           position: absolute;
           box-shadow: 0 0 10px 2px rgba(50, 50, 50, 2.5);
           backface-visibility: hidden;
           color: #FEF4FF;
           font-family: serif;
           font-size: 20px;
           text-align: center;
           background: linear-gradient(-135deg, #FAD2FF, #90C4F0);
           display: flex;
           justify-content: center;
           flex-direction: column;
           align-items: center;
           gap: 20px;
       }

       .back1 {
           display: flex;
           justify-content: center;
           flex-direction: column;
           align-items: center;
           gap: 20px;
           height: 100%;
           width: 100%;
           border-radius: 2rem;
           position: absolute;
           box-shadow: 0 0 10px 2px rgba(50, 50, 50, 2.5);
           backface-visibility: hidden;
           color: black;
           font-family: serif;
           font-size: 20px;
           text-align: center;
           background: linear-gradient(-135deg, #FAD2FF, #90C4F0);
       }

       .back1 {
           transform: rotateY(180deg) rotateZ(180deg);
       }

       .back1-heading,
       .front1-heading {
           font-size: 28px;
           font-family: serif;
       }

       /* New CSS for Flexbox layout */
       .flex-container1 {
           display: flex;
           gap: 80px;
           justify-content: center;
           /* Adjust gap between cards if needed */
       }

       .container-parents2 {
           width: 380px;
           height: 270px;
           perspective: 900px;
       }

       .card2 {
           height: 100%;
           width: 100%;
           background-color: aliceblue;
           position: relative;
           transition: transform 1500ms;
           transform-style: preserve-3d;
           border-radius: 2rem;
       }

       .container-parents2:hover>.card2 {
           cursor: pointer;
           transform: rotateY(180deg) rotateZ(180deg);
       }

       .front2 {
           height: 100%;
           width: 100%;
           border-radius: 2rem;
           position: absolute;
           box-shadow: 0 0 10px 2px rgba(50, 50, 50, 2.5);
           backface-visibility: hidden;
           color: #FEF4FF;
           font-family: serif;
           font-size: 20px;
           text-align: center;
           background: linear-gradient(-135deg, #FFC0F7, #EBE987);
           display: flex;
           justify-content: center;
           flex-direction: column;
           align-items: center;
           gap: 20px;
       }

       .back2 {
           display: flex;
           justify-content: center;
           flex-direction: column;
           align-items: center;
           gap: 20px;
           height: 100%;
           width: 100%;
           border-radius: 2rem;
           position: absolute;
           box-shadow: 0 0 10px 2px rgba(50, 50, 50, 2.5);
           backface-visibility: hidden;
           color: black;
           font-family: serif;
           font-size: 20px;
           text-align: center;
           background: linear-gradient(-135deg, #FFC0F7, #EBE987);
       }

       .back2 {
           transform: rotateY(180deg) rotateZ(180deg);
       }

       .back2-heading,
       .front2-heading {
           font-size: 28px;
           font-family: serif;
       }

       /* New CSS for Flexbox layout */
       .flex-container2 {
           display: flex;
           gap: 80px;
           justify-content: center;
           margin-top: 100px;
           /* Adjust gap between cards if needed */
       }

       .container-parents3 {
           width: 380px;
           height: 270px;
           perspective: 900px;
       }

       .card3 {
           height: 100%;
           width: 100%;
           background-color: aliceblue;
           position: relative;
           transition: transform 1500ms;
           transform-style: preserve-3d;
           border-radius: 2rem;
       }

       .container-parents3:hover>.card3 {
           cursor: pointer;
           transform: rotateY(180deg) rotateZ(180deg);
       }

       .front3 {
           height: 100%;
           width: 100%;
           border-radius: 2rem;
           position: absolute;
           box-shadow: 0 0 10px 2px rgba(50, 50, 50, 2.5);
           backface-visibility: hidden;
           color: #FEF4FF;
           font-family: serif;
           font-size: 20px;
           text-align: center;
           background: linear-gradient(-135deg, #E4D0FB, #9BE5E1);
           display: flex;
           justify-content: center;
           flex-direction: column;
           align-items: center;
           gap: 20px;
       }

       .back3 {
           display: flex;
           justify-content: center;
           flex-direction: column;
           align-items: center;
           gap: 20px;
           height: 100%;
           width: 100%;
           border-radius: 2rem;
           position: absolute;
           box-shadow: 0 0 10px 2px rgba(50, 50, 50, 2.5);
           backface-visibility: hidden;
           color: black;
           font-family: serif;
           font-size: 20px;
           text-align: center;
           background: linear-gradient(-135deg, #E4D0FB, #9BE5E1);
       }

       .back3 {
           transform: rotateY(180deg) rotateZ(180deg);
       }

       .back3-heading,
       .front3-heading {
           font-size: 28px;
           font-family: serif;
       }

       /* New CSS for Flexbox layout */
       .flex-container3 {
           display: flex;
           gap: 80px;
           justify-content: center;
           margin-top: 100px;
           /* Adjust gap between cards if needed */
           margin-bottom: 100px;
       }

   </style>

   <body>
       <div class="jumbotron text-center">

           <h1>🍃TinyHearts🍃</h1>
           <p1>Educating Hearts💌, Enlightening Minds💭ˎˊ˗</p1>
       </div>

       <h2>
           👨‍👩‍👧‍👧 Moral Values with Parents 👫</h2><br><br>

       <div class="flex-container1">
           <div class="container-parents1">
               <div class="card1">
                   <div class="front1">
                       <p class="front1-heading">Hover Here :)</p>
                   </div>
                   <div class="back1">
                       <p class="back1-heading">❀ Honesty ❀</p>
                       <p>Being truthful and transparent <br> with parents.</p>
                   </div>
               </div>
           </div>



           <div class="container-parents1">
               <div class="card1">
                   <div class="front1">
                       <p class="front1-heading">Hover Here :)</p>
                   </div>
                   <div class="back1">
                       <p class="back1-heading">❀ Responsibility ❀</p>
                       <p>Fulfilling duties and <br> responsibilities as a child <br> towards parents.</p>
                   </div>
               </div>
           </div>



           <div class="container-parents1">
               <div class="card1">
                   <div class="front1">
                       <p class="front1-heading">Hover Here :)</p>
                   </div>
                   <div class="back1">
                       <p class="back1-heading">❀ Love ❀</p>
                       <p>Show love and affection to the parents, <br> appreciating them for who they are <br> and the love they provide.</p>
                   </div>
               </div>
           </div>

       </div>

       <div class="flex-container2">
           <div class="container-parents2">
               <div class="card2">
                   <div class="front2">
                       <p class="front2-heading">Hover Here :)</p>
                   </div>
                   <div class="back2">
                       <p class="back2-heading">.☘︎ ݁˖ Patience .☘︎ ݁˖</p>
                       <p>Exercise patience with the parents, <br> especially as they age and may <br> require more support and understanding.</p>
                   </div>
               </div>
           </div>



           <div class="container-parents2">
               <div class="card2">
                   <div class="front2">
                       <p class="front2-heading">Hover Here :)</p>
                   </div>
                   <div class="back2">
                       <p class="back2-heading">.☘︎ ݁˖ Gratitude .☘︎ ݁˖</p>
                       <p>Express gratitude for the sacrifices and <br> efforts the parents have made <br> for our upbringing and well-being. </p>
                   </div>
               </div>
           </div>



           <div class="container-parents2">
               <div class="card2">
                   <div class="front2">
                       <p class="front2-heading">Hover Here :)</p>
                   </div>
                   <div class="back2">
                       <p class="back2-heading">.☘︎ ݁˖ Support .☘︎ ݁˖</p>
                       <p>Offer support to the parents, both <br> emotionally and physically, especially <br> during times of need or difficulty.</p>
                   </div>
               </div>
           </div>

       </div>
       <div class="flex-container3">
           <div class="container-parents3">
               <div class="card3">
                   <div class="front3">
                       <p class="front3-heading">Hover Here :)</p>
                   </div>
                   <div class="back3">
                       <p class="back3-heading"> ๋࣭⭑⚝ Understanding ࣭⭑⚝</p>
                       <p>Show understanding and compassion for <br> the parents' life experiences and <br> the challenges they have faced.</p>
                   </div>
               </div>
           </div>



           <div class="container-parents3">
               <div class="card3">
                   <div class="front3">
                       <p class="front3-heading">Hover Here :)</p>
                   </div>
                   <div class="back3">
                       <p class="back3-heading"> ๋࣭⭑⚝ Communication ๋࣭⭑⚝˖</p>
                       <p>Maintain open and effective communication <br> with the parents, ensuring a healthy <br> and strong relationship.</p>
                   </div>
               </div>
           </div>



           <div class="container-parents3">
               <div class="card3">
                   <div class="front3">
                       <p class="front3-heading">Hover Here :)</p>
                   </div>
                   <div class="back3">
                       <p class="back3-heading"> ๋࣭⭑⚝ Faithfulness ࣭⭑⚝</p>
                       <p>Remain faithful to the ethical and <br> moral principles the parents have taught us, <br> integrating them into our daily life.</p>
                   </div>
               </div>
           </div>

       </div>

       <style>
           .button11 {
               display: flex;
               height: 3em;
               width: 150px;
               align-items: center;
               justify-content: center;
               background-color: #eeeeee4b;
               border-radius: 6px;
               letter-spacing: 2px;
               transition: all 0.2s linear;
               cursor: pointer;
               background: #BBE8F8;
               color: black;
               font-weight: 300;
           }

           .button11>svg {
               margin-right: 5px;
               margin-left: 5px;
               font-size: 30px;
               transition: all 0.4s ease-in;
           }

           .button11:hover>svg {
               font-size: 2.2em;
               transform: translateX(-5px);
           }

           .button11:hover {
               box-shadow: 15px 15px 43px #d1d1d1, -9px -9px 33px #ffffff;
               transform: translateY(-2px);
           }

       </style>

       <div class="flex-container3">
           <button id="button11" class="button11" onclick="redirectToHome()">
               <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
                   <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
               </svg>
               <span>Back</span>
           </button>
           <script>
               function redirectToHome() {
                   window.location.href = 'bootstrap.php';
               }

           </script>
       </div>



   </body>

   </html>
