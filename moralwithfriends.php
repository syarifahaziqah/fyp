   <!DOCTYPE html>
   <html lang="en">

   <head>
       <title>moral with friends</title>
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
           background: linear-gradient(to bottom, #D7F0D6, #E7D6E7, #CCE9F2);
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


       /* New CSS for Flexbox layout */
       .flex-container1 {
           display: flex;
           gap: 80px;
           justify-content: center;
           /* Adjust gap between cards if needed */
       }


       /* New CSS for Flexbox layout */
       .flex-container2 {
           display: flex;
           gap: 80px;
           justify-content: center;
           margin-top: 100px;
           /* Adjust gap between cards if needed */
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

       .book {
           position: relative;
           border-radius: 10px;
           width: 380px;
           height: 280px;
           background: linear-gradient(45deg, #ffdab9, #afeeee);

           -webkit-box-shadow: 1px 1px 12px #000;
           box-shadow: 1px 1px 12px #000;
           -webkit-transform: preserve-3d;
           -ms-transform: preserve-3d;
           transform: preserve-3d;
           -webkit-perspective: 2000px;
           perspective: 2000px;
           display: -webkit-box;
           display: -ms-flexbox;
           display: flex;
           -webkit-box-align: center;
           -ms-flex-align: center;
           align-items: center;
           -webkit-box-pack: center;
           -ms-flex-pack: center;
           justify-content: center;
           color: #000;
       }

       .cover {
           top: 0;
           position: absolute;
           background: linear-gradient(45deg, #d8bfd8, #b0e0e6);

           width: 100%;
           height: 100%;
           border-radius: 10px;
           cursor: pointer;
           -webkit-transition: all 0.5s;
           transition: all 0.5s;
           -webkit-transform-origin: 0;
           -ms-transform-origin: 0;
           transform-origin: 0;
           -webkit-box-shadow: 1px 1px 12px #000;
           box-shadow: 1px 1px 12px #000;
           display: -webkit-box;
           display: -ms-flexbox;
           display: flex;
           -webkit-box-align: center;
           -ms-flex-align: center;
           align-items: center;
           -webkit-box-pack: center;
           -ms-flex-pack: center;
           justify-content: center;
       }

       .book:hover .cover {
           -webkit-transition: all 0.5s;
           transition: all 0.5s;
           -webkit-transform: rotatey(-80deg);
           -ms-transform: rotatey(-80deg);
           transform: rotatey(-80deg);
       }

       p {
           font-size: 20px;
           font-weight: bolder;
           font-family: serif;
           text-align: center;
       }

       .book2 {
           position: relative;
           border-radius: 10px;
           width: 380px;
           height: 280px;
           background: linear-gradient(45deg, #ffe4e1, #d3d3d3);

           -webkit-box-shadow: 1px 1px 12px #000;
           box-shadow: 1px 1px 12px #000;
           -webkit-transform: preserve-3d;
           -ms-transform: preserve-3d;
           transform: preserve-3d;
           -webkit-perspective: 2000px;
           perspective: 2000px;
           display: -webkit-box;
           display: -ms-flexbox;
           display: flex;
           -webkit-box-align: center;
           -ms-flex-align: center;
           align-items: center;
           -webkit-box-pack: center;
           -ms-flex-pack: center;
           justify-content: center;
           color: #000;
       }

       .cover2 {
           top: 0;
           position: absolute;
           background: linear-gradient(45deg, #e6e6fa, #d0e7b5);
           width: 100%;
           height: 100%;
           border-radius: 10px;
           cursor: pointer;
           -webkit-transition: all 0.5s;
           transition: all 0.5s;
           -webkit-transform-origin: 0;
           -ms-transform-origin: 0;
           transform-origin: 0;
           -webkit-box-shadow: 1px 1px 12px #000;
           box-shadow: 1px 1px 12px #000;
           display: -webkit-box;
           display: -ms-flexbox;
           display: flex;
           -webkit-box-align: center;
           -ms-flex-align: center;
           align-items: center;
           -webkit-box-pack: center;
           -ms-flex-pack: center;
           justify-content: center;
       }

       .book2:hover .cover2 {
           -webkit-transition: all 0.5s;
           transition: all 0.5s;
           -webkit-transform: rotatey(-80deg);
           -ms-transform: rotatey(-80deg);
           transform: rotatey(-80deg);
       }

       .book3 {
           position: relative;
           border-radius: 10px;
           width: 380px;
           height: 280px;
           background: linear-gradient(45deg, #ffcccb, #afeeee);
           -webkit-box-shadow: 1px 1px 12px #000;
           box-shadow: 1px 1px 12px #000;
           -webkit-transform: preserve-3d;
           -ms-transform: preserve-3d;
           transform: preserve-3d;
           -webkit-perspective: 2000px;
           perspective: 2000px;
           display: -webkit-box;
           display: -ms-flexbox;
           display: flex;
           -webkit-box-align: center;
           -ms-flex-align: center;
           align-items: center;
           -webkit-box-pack: center;
           -ms-flex-pack: center;
           justify-content: center;
           color: #000;
       }

       .cover3 {
           top: 0;
           position: absolute;
           background: linear-gradient(45deg, #ffb6c1, #87cefa);
           width: 100%;
           height: 100%;
           border-radius: 10px;
           cursor: pointer;
           -webkit-transition: all 0.5s;
           transition: all 0.5s;
           -webkit-transform-origin: 0;
           -ms-transform-origin: 0;
           transform-origin: 0;
           -webkit-box-shadow: 1px 1px 12px #000;
           box-shadow: 1px 1px 12px #000;
           display: -webkit-box;
           display: -ms-flexbox;
           display: flex;
           -webkit-box-align: center;
           -ms-flex-align: center;
           align-items: center;
           -webkit-box-pack: center;
           -ms-flex-pack: center;
           justify-content: center;
       }

       .book3:hover .cover3 {
           -webkit-transition: all 0.5s;
           transition: all 0.5s;
           -webkit-transform: rotatey(-80deg);
           -ms-transform: rotatey(-80deg);
           transform: rotatey(-80deg);
       }

   </style>

   <body>
       <div class="jumbotron text-center">

           <h1>🍂TinyHearts🍂</h1>
           <p1>Educating Hearts💌, Enlightening Minds💭ˎˊ˗</p1>
       </div>

       <h2>
           👯‍♂️ Moral Values with Friends 👯‍♀️</h2><br><br>

       <div class="flex-container1">
           <div class="book">
               <p>✼ Acceptance ✼<br> Respecting friends for who <br>they are, including their opinions, <br>beliefs, and differences.</p>
               <div class="cover">
                   <p>Hover Here :></p>
               </div>
           </div>



           <div class="book">
               <p>✼ Generosity ✼<br> Being willing to lend a <br>helping hand, offer support,<br> and share resources with <br>friends.</p>
               <div class="cover">
                   <p>Hover Here :></p>
               </div>
           </div>



           <div class="book">
               <p>✼ Reliability ✼<br> Being dependable and keeping <br>promises, showing up for <br>friends when they need support.</p>
               <div class="cover">
                   <p>Hover Here :></p>
               </div>
           </div>

       </div>

       <div class="flex-container2">
           <div class="book2">
               <p>❃ Loyalty ❃<br> Standing by friends through thick <br>and thin, remaining loyal <br>and supportive even in difficult <br> times.</p>
               <div class="cover2">
                   <p>Hover Here :></p>
               </div>
           </div>


           <div class="book2">
               <p>❃ Forgiveness ❃<br>Forgiving friends for mistakes <br>or disagreements, letting go <br>of resentment and <br>fostering reconciliation.</p>
               <div class="cover2">
                   <p>Hover Here :></p>
               </div>
           </div>



           <div class="book2">
               <p>❃ Appreciation ❃<br> Recognizing friends’ efforts <br> and expressing gratitude for <br>their presence in one’s life.</p>
               <div class="cover2">
                   <p>Hover Here :></p>
               </div>
           </div>

       </div>
       <div class="flex-container3">
           <div class="book3">
               <p>❁ Equality ❁<br> Treating friends with fairness <br>and equality, avoiding favoritism or discrimination.</p>
               <div class="cover3">
                   <p>Hover Here :></p>
               </div>
           </div>


           <div class="container-parents3">
               <div class="book3">
                   <p>❁ Enjoyment ❁<br>Sharing joy and laughter with <br> friends, enjoying shared experiences <br> and creating cherished memories <br> together.</p>
                   <div class="cover3">
                       <p>Hover Here :></p>
                   </div>
               </div>
           </div>



           <div class="book3">
               <p>❁ Encouragement ❁<br> Providing encouragement and <br>motivation to friends to pursue <br> their goals and aspirations.</p>
               <div class="cover3">
                   <p>Hover Here :></p>
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
               background: #CDF0D3;
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
