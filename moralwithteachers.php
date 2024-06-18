   <!DOCTYPE html>
   <html lang="en">

   <head>
       <title>moral with teachers</title>
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
           background: linear-gradient(to bottom, #B9E7C9, #F5F5DC, #FFFACD);
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

       .flex-container1 {
           display: flex;
           gap: 60px;
           justify-content: center;
           /* Adjust gap between cards if needed */
       }


       /* New CSS for Flexbox layout */
       .flex-container2 {
           display: flex;
           gap: 60px;
           justify-content: center;
           margin-top: 100px;
           /* Adjust gap between cards if needed */
       }


       /* New CSS for Flexbox layout */
       .flex-container3 {
           display: flex;
           gap: 60px;
           justify-content: center;
           margin-top: 100px;
           /* Adjust gap between cards if needed */
           margin-bottom: 100px;
       }

       .containertea {
           position: relative;
           width: 350px;
           height: 254px;
           transition: 200ms;
       }

       .containertea:active {
           width: 180px;
           height: 245px;
       }

       #cardtea {
           position: absolute;
           inset: 0;
           z-index: 0;
           display: flex;
           justify-content: center;
           align-items: center;
           border-radius: 20px;
           transition: 1000ms;
           background: linear-gradient(45deg, rgb(173, 216, 230) 0%, rgb(255, 182, 193) 46%, rgb(221, 160, 221) 100%);
       }

       .title {
           opacity: 0;
           transition-duration: 300ms;
           transition-timing-function: ease-in-out-out;
           transition-delay: 100ms;
           position: absolute;
           font-size: x-large;
           font-weight: bold;
           color: whitesmoke;
           text-align: center;

       }

       .tracker:hover~#cardtea .title {
           opacity: 1;
       }

       #prompt {
           bottom: 8px;
           left: 12px;
           z-index: 20;
           font-size: 20px;
           font-weight: bold;
           transition: 300ms ease-in-out-out;
           position: absolute;
           max-width: 110px;
           color: rgb(255, 255, 255);
       }

       .tracker {
           position: absolute;
           z-index: 200;
           width: 100%;
           height: 100%;
       }

       .tracker:hover {
           cursor: pointer;
       }

       .tracker:hover~#cardtea #prompt {
           opacity: 0;
       }

       .tracker:hover~#cardtea {
           transition: 300ms;
           filter: brightness(1.1);
       }

       .containertea:hover #cardtea::before {
           transition: 200ms;
           content: '';
           opacity: 80%;
       }

       .canvas {
           perspective: 800px;
           inset: 0;
           z-index: 200;
           position: absolute;
           display: grid;
           grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
           grid-template-rows: 1fr 1fr 1fr 1fr 1fr;
           gap: 0px 0px;
           grid-template-areas: "tr-1 tr-2 tr-3 tr-4 tr-5"
               "tr-6 tr-7 tr-8 tr-9 tr-10"
               "tr-11 tr-12 tr-13 tr-14 tr-15"
               "tr-16 tr-17 tr-18 tr-19 tr-20"
               "tr-21 tr-22 tr-23 tr-24 tr-25";
       }

       #cardtea::before {
           content: '';
           background: linear-gradient(43deg, rgb(152, 251, 152) 0%, rgb(255, 182, 193) 46%, rgb(255, 228, 196) 100%);
           filter: blur(2rem);
           opacity: 30%;
           width: 100%;
           height: 100%;
           position: absolute;
           z-index: -1;
           transition: 200ms;
       }

       .tr-1 {
           grid-area: tr-1;
       }

       .tr-2 {
           grid-area: tr-2;
       }

       .tr-3 {
           grid-area: tr-3;
       }

       .tr-4 {
           grid-area: tr-4;
       }

       .tr-5 {
           grid-area: tr-5;
       }

       .tr-6 {
           grid-area: tr-6;
       }

       .tr-7 {
           grid-area: tr-7;
       }

       .tr-8 {
           grid-area: tr-8;
       }

       .tr-9 {
           grid-area: tr-9;
       }

       .tr-10 {
           grid-area: tr-10;
       }

       .tr-11 {
           grid-area: tr-11;
       }

       .tr-12 {
           grid-area: tr-12;
       }

       .tr-13 {
           grid-area: tr-13;
       }

       .tr-14 {
           grid-area: tr-14;
       }

       .tr-15 {
           grid-area: tr-15;
       }

       .tr-16 {
           grid-area: tr-16;
       }

       .tr-17 {
           grid-area: tr-17;
       }

       .tr-18 {
           grid-area: tr-18;
       }

       .tr-19 {
           grid-area: tr-19;
       }

       .tr-20 {
           grid-area: tr-20;
       }

       .tr-21 {
           grid-area: tr-21;
       }

       .tr-22 {
           grid-area: tr-22;
       }

       .tr-23 {
           grid-area: tr-23;
       }

       .tr-24 {
           grid-area: tr-24;
       }

       .tr-25 {
           grid-area: tr-25;
       }

       .tr-1:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(20deg) rotateY(-10deg) rotateZ(0deg);
       }

       .tr-2:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(20deg) rotateY(-5deg) rotateZ(0deg);
       }

       .tr-3:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(20deg) rotateY(0deg) rotateZ(0deg);
       }

       .tr-4:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(20deg) rotateY(5deg) rotateZ(0deg);
       }

       .tr-5:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(20deg) rotateY(10deg) rotateZ(0deg);
       }

       .tr-6:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(10deg) rotateY(-10deg) rotateZ(0deg);
       }

       .tr-7:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(10deg) rotateY(-5deg) rotateZ(0deg);
       }

       .tr-8:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(10deg) rotateY(0deg) rotateZ(0deg);
       }

       .tr-9:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(10deg) rotateY(5deg) rotateZ(0deg);
       }

       .tr-10:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(10deg) rotateY(10deg) rotateZ(0deg);
       }

       .tr-11:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(0deg) rotateY(-10deg) rotateZ(0deg);
       }

       .tr-12:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(0deg) rotateY(-5deg) rotateZ(0deg);
       }

       .tr-13:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);
       }

       .tr-14:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(0deg) rotateY(5deg) rotateZ(0deg);
       }

       .tr-15:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(0deg) rotateY(10deg) rotateZ(0deg);
       }

       .tr-16:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(-10deg) rotateY(-10deg) rotateZ(0deg);
       }

       .tr-17:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(-10deg) rotateY(-5deg) rotateZ(0deg);
       }

       .tr-18:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(-10deg) rotateY(0deg) rotateZ(0deg);
       }

       .tr-19:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(-10deg) rotateY(5deg) rotateZ(0deg);
       }

       .tr-20:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(-10deg) rotateY(10deg) rotateZ(0deg);
       }

       .tr-21:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(-20deg) rotateY(-10deg) rotateZ(0deg);
       }

       .tr-22:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(-20deg) rotateY(-5deg) rotateZ(0deg);
       }

       .tr-23:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(-20deg) rotateY(0deg) rotateZ(0deg);
       }

       .tr-24:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(-20deg) rotateY(5deg) rotateZ(0deg);
       }

       .tr-25:hover~#cardtea {
           transition: 125ms ease-in-out;
           transform: rotateX(-20deg) rotateY(10deg) rotateZ(0deg);
       }

       .noselect {

           -webkit-user-select: none;

           -moz-user-select: none;
           /* Old versions of Firefox */
           -ms-user-select: none;
           /* Internet Explorer/Edge */
           user-select: none;
           /* Non-prefixed version, currently
									supported by Chrome, Edge, Opera and Firefox */
       }


       .containertea2 {
           position: relative;
           width: 350px;
           height: 254px;
           transition: 200ms;
       }

       .containertea2:active {
           width: 180px;
           height: 245px;
       }

       #cardtea2 {
           position: absolute;
           inset: 0;
           z-index: 0;
           display: flex;
           justify-content: center;
           align-items: center;
           border-radius: 20px;
           transition: 1000ms;
           background: linear-gradient(45deg, rgb(235, 175, 140) 0%, rgb(190, 190, 210) 46%, rgb(210, 180, 140) 100%);
       }

       .title2 {
           opacity: 0;
           transition-duration: 300ms;
           transition-timing-function: ease-in-out-out;
           transition-delay: 100ms;
           position: absolute;
           font-size: x-large;
           font-weight: bold;
           color: whitesmoke;
           text-align: center;


       }

       .tracker2:hover~#cardtea2 .title2 {
           opacity: 1;
       }

       #prompt2 {
           bottom: 8px;
           left: 12px;
           z-index: 20;
           font-size: 20px;
           font-weight: bold;
           transition: 300ms ease-in-out-out;
           position: absolute;
           max-width: 110px;
           color: rgb(255, 255, 255);
       }

       .tracker2 {
           position: absolute;
           z-index: 200;
           width: 100%;
           height: 100%;
       }

       .tracker2:hover {
           cursor: pointer;
       }

       .tracker2:hover~#cardtea2 #prompt2 {
           opacity: 0;
       }

       .tracker2:hover~#cardtea2 {
           transition: 300ms;
           filter: brightness(1.1);
       }

       .containertea2:hover #cardtea2::before {
           transition: 200ms;
           content: '';
           opacity: 80%;
       }

       .canvas2 {
           perspective: 800px;
           inset: 0;
           z-index: 200;
           position: absolute;
           display: grid;
           grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
           grid-template-rows: 1fr 1fr 1fr 1fr 1fr;
           gap: 0px 0px;
           grid-template-areas: "tr-1 tr-2 tr-3 tr-4 tr-5"
               "tr-6 tr-7 tr-8 tr-9 tr-10"
               "tr-11 tr-12 tr-13 tr-14 tr-15"
               "tr-16 tr-17 tr-18 tr-19 tr-20"
               "tr-21 tr-22 tr-23 tr-24 tr-25";
       }

       #cardtea2::before {
           content: '';
           background: linear-gradient(43deg, rgb(220, 180, 130) 0%, rgb(190, 190, 210) 46%, rgb(220, 190, 200) 100%);
           filter: blur(2rem);
           opacity: 30%;
           width: 100%;
           height: 100%;
           position: absolute;
           z-index: -1;
           transition: 200ms;
       }

       .tr-1 {
           grid-area: tr-1;
       }

       .tr-2 {
           grid-area: tr-2;
       }

       .tr-3 {
           grid-area: tr-3;
       }

       .tr-4 {
           grid-area: tr-4;
       }

       .tr-5 {
           grid-area: tr-5;
       }

       .tr-6 {
           grid-area: tr-6;
       }

       .tr-7 {
           grid-area: tr-7;
       }

       .tr-8 {
           grid-area: tr-8;
       }

       .tr-9 {
           grid-area: tr-9;
       }

       .tr-10 {
           grid-area: tr-10;
       }

       .tr-11 {
           grid-area: tr-11;
       }

       .tr-12 {
           grid-area: tr-12;
       }

       .tr-13 {
           grid-area: tr-13;
       }

       .tr-14 {
           grid-area: tr-14;
       }

       .tr-15 {
           grid-area: tr-15;
       }

       .tr-16 {
           grid-area: tr-16;
       }

       .tr-17 {
           grid-area: tr-17;
       }

       .tr-18 {
           grid-area: tr-18;
       }

       .tr-19 {
           grid-area: tr-19;
       }

       .tr-20 {
           grid-area: tr-20;
       }

       .tr-21 {
           grid-area: tr-21;
       }

       .tr-22 {
           grid-area: tr-22;
       }

       .tr-23 {
           grid-area: tr-23;
       }

       .tr-24 {
           grid-area: tr-24;
       }

       .tr-25 {
           grid-area: tr-25;
       }

       .tr-1:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(20deg) rotateY(-10deg) rotateZ(0deg);
       }

       .tr-2:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(20deg) rotateY(-5deg) rotateZ(0deg);
       }

       .tr-3:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(20deg) rotateY(0deg) rotateZ(0deg);
       }

       .tr-4:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(20deg) rotateY(5deg) rotateZ(0deg);
       }

       .tr-5:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(20deg) rotateY(10deg) rotateZ(0deg);
       }

       .tr-6:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(10deg) rotateY(-10deg) rotateZ(0deg);
       }

       .tr-7:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(10deg) rotateY(-5deg) rotateZ(0deg);
       }

       .tr-8:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(10deg) rotateY(0deg) rotateZ(0deg);
       }

       .tr-9:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(10deg) rotateY(5deg) rotateZ(0deg);
       }

       .tr-10:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(10deg) rotateY(10deg) rotateZ(0deg);
       }

       .tr-11:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(0deg) rotateY(-10deg) rotateZ(0deg);
       }

       .tr-12:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(0deg) rotateY(-5deg) rotateZ(0deg);
       }

       .tr-13:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);
       }

       .tr-14:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(0deg) rotateY(5deg) rotateZ(0deg);
       }

       .tr-15:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(0deg) rotateY(10deg) rotateZ(0deg);
       }

       .tr-16:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(-10deg) rotateY(-10deg) rotateZ(0deg);
       }

       .tr-17:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(-10deg) rotateY(-5deg) rotateZ(0deg);
       }

       .tr-18:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(-10deg) rotateY(0deg) rotateZ(0deg);
       }

       .tr-19:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(-10deg) rotateY(5deg) rotateZ(0deg);
       }

       .tr-20:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(-10deg) rotateY(10deg) rotateZ(0deg);
       }

       .tr-21:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(-20deg) rotateY(-10deg) rotateZ(0deg);
       }

       .tr-22:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(-20deg) rotateY(-5deg) rotateZ(0deg);
       }

       .tr-23:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(-20deg) rotateY(0deg) rotateZ(0deg);
       }

       .tr-24:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(-20deg) rotateY(5deg) rotateZ(0deg);
       }

       .tr-25:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(-20deg) rotateY(10deg) rotateZ(0deg);
       }

       .noselect2 {
           -webkit-touch-callout: none;
           /* iOS Safari */
           -webkit-user-select: none;
           /* Safari */
           /* Konqueror HTML */
           -moz-user-select: none;
           /* Old versions of Firefox */
           -ms-user-select: none;
           /* Internet Explorer/Edge */
           user-select: none;
           /* Non-prefixed version, currently
									supported by Chrome, Edge, Opera and Firefox */
       }


       .containertea3 {
           position: relative;
           width: 350px;
           height: 254px;
           transition: 200ms;
       }

       .containertea3:active {
           width: 180px;
           height: 245px;
       }

       #cardtea3 {
           position: absolute;
           inset: 0;
           z-index: 0;
           display: flex;
           justify-content: center;
           align-items: center;
           border-radius: 20px;
           transition: 1000ms;
           background: linear-gradient(45deg, rgb(160, 230, 170) 0%, rgb(200, 130, 200) 46%, rgb(200, 240, 210) 100%);
       }

       .title3 {
           opacity: 0;
           transition-duration: 300ms;
           transition-timing-function: ease-in-out-out;
           transition-delay: 100ms;
           position: absolute;
           font-size: x-large;
           font-weight: bold;
           color: whitesmoke;
           text-align: center;
       }

       .tracker3:hover~#cardtea3 .title3 {
           opacity: 1;
       }

       #prompt3 {
           bottom: 8px;
           left: 12px;
           z-index: 20;
           font-size: 20px;
           font-weight: bold;
           transition: 300ms ease-in-out-out;
           position: absolute;
           max-width: 110px;
           color: rgb(255, 255, 255);
       }

       .tracker3 {
           position: absolute;
           z-index: 200;
           width: 100%;
           height: 100%;
       }

       .tracker3:hover {
           cursor: pointer;
       }

       .tracker3:hover~#cardtea3 #prompt3 {
           opacity: 0;
       }

       .tracker3:hover~#cardtea3 {
           transition: 300ms;
           filter: brightness(1.1);
       }

       .containertea3:hover #cardtea3::before {
           transition: 200ms;
           content: '';
           opacity: 80%;
       }

       .canvas3 {
           perspective: 800px;
           inset: 0;
           z-index: 200;
           position: absolute;
           display: grid;
           grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
           grid-template-rows: 1fr 1fr 1fr 1fr 1fr;
           gap: 0px 0px;
           grid-template-areas: "tr-1 tr-2 tr-3 tr-4 tr-5"
               "tr-6 tr-7 tr-8 tr-9 tr-10"
               "tr-11 tr-12 tr-13 tr-14 tr-15"
               "tr-16 tr-17 tr-18 tr-19 tr-20"
               "tr-21 tr-22 tr-23 tr-24 tr-25";
       }

       #cardtea3::before {
           content: '';
           background: linear-gradient(43deg, rgb(170, 240, 180) 0%, rgb(200, 130, 200) 46%, rgb(240, 200, 210) 100%);
           filter: blur(2rem);
           opacity: 30%;
           width: 100%;
           height: 100%;
           position: absolute;
           z-index: -1;
           transition: 200ms;
       }

       .tr-1 {
           grid-area: tr-1;
       }

       .tr-2 {
           grid-area: tr-2;
       }

       .tr-3 {
           grid-area: tr-3;
       }

       .tr-4 {
           grid-area: tr-4;
       }

       .tr-5 {
           grid-area: tr-5;
       }

       .tr-6 {
           grid-area: tr-6;
       }

       .tr-7 {
           grid-area: tr-7;
       }

       .tr-8 {
           grid-area: tr-8;
       }

       .tr-9 {
           grid-area: tr-9;
       }

       .tr-10 {
           grid-area: tr-10;
       }

       .tr-11 {
           grid-area: tr-11;
       }

       .tr-12 {
           grid-area: tr-12;
       }

       .tr-13 {
           grid-area: tr-13;
       }

       .tr-14 {
           grid-area: tr-14;
       }

       .tr-15 {
           grid-area: tr-15;
       }

       .tr-16 {
           grid-area: tr-16;
       }

       .tr-17 {
           grid-area: tr-17;
       }

       .tr-18 {
           grid-area: tr-18;
       }

       .tr-19 {
           grid-area: tr-19;
       }

       .tr-20 {
           grid-area: tr-20;
       }

       .tr-21 {
           grid-area: tr-21;
       }

       .tr-22 {
           grid-area: tr-22;
       }

       .tr-23 {
           grid-area: tr-23;
       }

       .tr-24 {
           grid-area: tr-24;
       }

       .tr-25 {
           grid-area: tr-25;
       }

       .tr-1:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(20deg) rotateY(-10deg) rotateZ(0deg);
       }

       .tr-2:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(20deg) rotateY(-5deg) rotateZ(0deg);
       }

       .tr-3:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(20deg) rotateY(0deg) rotateZ(0deg);
       }

       .tr-4:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(20deg) rotateY(5deg) rotateZ(0deg);
       }

       .tr-5:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(20deg) rotateY(10deg) rotateZ(0deg);
       }

       .tr-6:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(10deg) rotateY(-10deg) rotateZ(0deg);
       }

       .tr-7:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(10deg) rotateY(-5deg) rotateZ(0deg);
       }

       .tr-8:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(10deg) rotateY(0deg) rotateZ(0deg);
       }

       .tr-9:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(10deg) rotateY(5deg) rotateZ(0deg);
       }

       .tr-10:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(10deg) rotateY(10deg) rotateZ(0deg);
       }

       .tr-11:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(0deg) rotateY(-10deg) rotateZ(0deg);
       }

       .tr-12:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(0deg) rotateY(-5deg) rotateZ(0deg);
       }

       .tr-13:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);
       }

       .tr-14:hover~#cardtea2 {
           transition: 125ms ease-in-out;
           transform: rotateX(0deg) rotateY(5deg) rotateZ(0deg);
       }

       .tr-15:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(0deg) rotateY(10deg) rotateZ(0deg);
       }

       .tr-16:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(-10deg) rotateY(-10deg) rotateZ(0deg);
       }

       .tr-17:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(-10deg) rotateY(-5deg) rotateZ(0deg);
       }

       .tr-18:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(-10deg) rotateY(0deg) rotateZ(0deg);
       }

       .tr-19:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(-10deg) rotateY(5deg) rotateZ(0deg);
       }

       .tr-20:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(-10deg) rotateY(10deg) rotateZ(0deg);
       }

       .tr-21:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(-20deg) rotateY(-10deg) rotateZ(0deg);
       }

       .tr-22:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(-20deg) rotateY(-5deg) rotateZ(0deg);
       }

       .tr-23:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(-20deg) rotateY(0deg) rotateZ(0deg);
       }

       .tr-24:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(-20deg) rotateY(5deg) rotateZ(0deg);
       }

       .tr-25:hover~#cardtea3 {
           transition: 125ms ease-in-out;
           transform: rotateX(-20deg) rotateY(10deg) rotateZ(0deg);
       }

       .noselect3 {
           -webkit-user-select: none;
           /* Safari */
           /* Konqueror HTML */
           -moz-user-select: none;
           /* Old versions of Firefox */
           -ms-user-select: none;
           /* Internet Explorer/Edge */
           user-select: none;
           /* Non-prefixed version, currently
									supported by Chrome, Edge, Opera and Firefox */
       }

   </style>

   <body>
       <div class="jumbotron text-center">

           <h1>🌼TinyHearts🌼</h1>
           <p1>Educating Hearts💌, Enlightening Minds💭ˎˊ˗</p1>
       </div>

       <h2>
           👩🏻‍🏫 Moral Values with Teachers 🧑🏻‍🏫</h2><br><br>

       <div class="flex-container1">
           <div class="containertea noselect">
               <div class="canvas">
                   <div class="tracker tr-1"></div>
                   <div class="tracker tr-2"></div>
                   <div class="tracker tr-3"></div>
                   <div class="tracker tr-4"></div>
                   <div class="tracker tr-5"></div>
                   <div class="tracker tr-6"></div>
                   <div class="tracker tr-7"></div>
                   <div class="tracker tr-8"></div>
                   <div class="tracker tr-9"></div>
                   <div class="tracker tr-10"></div>
                   <div class="tracker tr-11"></div>
                   <div class="tracker tr-12"></div>
                   <div class="tracker tr-13"></div>
                   <div class="tracker tr-14"></div>
                   <div class="tracker tr-15"></div>
                   <div class="tracker tr-16"></div>
                   <div class="tracker tr-17"></div>
                   <div class="tracker tr-18"></div>
                   <div class="tracker tr-19"></div>
                   <div class="tracker tr-20"></div>
                   <div class="tracker tr-21"></div>
                   <div class="tracker tr-22"></div>
                   <div class="tracker tr-23"></div>
                   <div class="tracker tr-24"></div>
                   <div class="tracker tr-25"></div>
                   <div id="cardtea">
                       <p id="prompt">HOVER OVER :D</p>
                       <div class="title">❆ Politeness ❆<br> Addressing teachers with proper <br> manners and kind behaviour, <br> also using polite language.</div>


                   </div>
               </div>
           </div>


           <div class="containertea noselect">
               <div class="canvas">
                   <div class="tracker tr-1"></div>
                   <div class="tracker tr-2"></div>
                   <div class="tracker tr-3"></div>
                   <div class="tracker tr-4"></div>
                   <div class="tracker tr-5"></div>
                   <div class="tracker tr-6"></div>
                   <div class="tracker tr-7"></div>
                   <div class="tracker tr-8"></div>
                   <div class="tracker tr-9"></div>
                   <div class="tracker tr-10"></div>
                   <div class="tracker tr-11"></div>
                   <div class="tracker tr-12"></div>
                   <div class="tracker tr-13"></div>
                   <div class="tracker tr-14"></div>
                   <div class="tracker tr-15"></div>
                   <div class="tracker tr-16"></div>
                   <div class="tracker tr-17"></div>
                   <div class="tracker tr-18"></div>
                   <div class="tracker tr-19"></div>
                   <div class="tracker tr-20"></div>
                   <div class="tracker tr-21"></div>
                   <div class="tracker tr-22"></div>
                   <div class="tracker tr-23"></div>
                   <div class="tracker tr-24"></div>
                   <div class="tracker tr-25"></div>
                   <div id="cardtea">
                       <p id="prompt">HOVER OVER :D</p>
                       <div class="title">❆ Attentiveness ❆ <br> Paying attention in class,<br> showing interest in learning and <br> writing down important points <br> from the lesson</div>


                   </div>
               </div>
           </div>



           <div class="containertea noselect">
               <div class="canvas">
                   <div class="tracker tr-1"></div>
                   <div class="tracker tr-2"></div>
                   <div class="tracker tr-3"></div>
                   <div class="tracker tr-4"></div>
                   <div class="tracker tr-5"></div>
                   <div class="tracker tr-6"></div>
                   <div class="tracker tr-7"></div>
                   <div class="tracker tr-8"></div>
                   <div class="tracker tr-9"></div>
                   <div class="tracker tr-10"></div>
                   <div class="tracker tr-11"></div>
                   <div class="tracker tr-12"></div>
                   <div class="tracker tr-13"></div>
                   <div class="tracker tr-14"></div>
                   <div class="tracker tr-15"></div>
                   <div class="tracker tr-16"></div>
                   <div class="tracker tr-17"></div>
                   <div class="tracker tr-18"></div>
                   <div class="tracker tr-19"></div>
                   <div class="tracker tr-20"></div>
                   <div class="tracker tr-21"></div>
                   <div class="tracker tr-22"></div>
                   <div class="tracker tr-23"></div>
                   <div class="tracker tr-24"></div>
                   <div class="tracker tr-25"></div>
                   <div id="cardtea">
                       <p id="prompt">HOVER OVER :D</p>
                       <div class="title">❆ Accountability ❆<br> Taking responsibility for one’s <br>own actions, such as completing <br> assignments on time and owning <br>up to mistakes.</div>


                   </div>
               </div>
           </div>
       </div>

       <div class="flex-container2">
           <div class="containertea2 noselect2">
               <div class="canvas2">
                   <div class="tracker2 tr-1"></div>
                   <div class="tracker2 tr-2"></div>
                   <div class="tracker2 tr-3"></div>
                   <div class="tracker2 tr-4"></div>
                   <div class="tracker2 tr-5"></div>
                   <div class="tracker2 tr-6"></div>
                   <div class="tracker2 tr-7"></div>
                   <div class="tracker2 tr-8"></div>
                   <div class="tracker2 tr-9"></div>
                   <div class="tracker2 tr-10"></div>
                   <div class="tracker2 tr-11"></div>
                   <div class="tracker2 tr-12"></div>
                   <div class="tracker2 tr-13"></div>
                   <div class="tracker2 tr-14"></div>
                   <div class="tracker2 tr-15"></div>
                   <div class="tracker2 tr-16"></div>
                   <div class="tracker2 tr-17"></div>
                   <div class="tracker2 tr-18"></div>
                   <div class="tracker2 tr-19"></div>
                   <div class="tracker2 tr-20"></div>
                   <div class="tracker2 tr-21"></div>
                   <div class="tracker2 tr-22"></div>
                   <div class="tracker2 tr-23"></div>
                   <div class="tracker2 tr-24"></div>
                   <div class="tracker2 tr-25"></div>
                   <div id="cardtea2">
                       <p id="prompt2">HOVER OVER :D</p>
                       <div class="title2">✩⋆⸜ Hard Work ✩⋆⸜<br>Putting in effort and <br>perseverance in studies and <br>school activities, such as <br> improving academic performance.</div>


                   </div>
               </div>
           </div>



           <div class="containertea2 noselect2">
               <div class="canvas2">
                   <div class="tracker2 tr-1"></div>
                   <div class="tracker2 tr-2"></div>
                   <div class="tracker2 tr-3"></div>
                   <div class="tracker2 tr-4"></div>
                   <div class="tracker2 tr-5"></div>
                   <div class="tracker2 tr-6"></div>
                   <div class="tracker2 tr-7"></div>
                   <div class="tracker2 tr-8"></div>
                   <div class="tracker2 tr-9"></div>
                   <div class="tracker2 tr-10"></div>
                   <div class="tracker2 tr-11"></div>
                   <div class="tracker2 tr-12"></div>
                   <div class="tracker2 tr-13"></div>
                   <div class="tracker2 tr-14"></div>
                   <div class="tracker2 tr-15"></div>
                   <div class="tracker2 tr-16"></div>
                   <div class="tracker2 tr-17"></div>
                   <div class="tracker2 tr-18"></div>
                   <div class="tracker2 tr-19"></div>
                   <div class="tracker2 tr-20"></div>
                   <div class="tracker2 tr-21"></div>
                   <div class="tracker2 tr-22"></div>
                   <div class="tracker2 tr-23"></div>
                   <div class="tracker2 tr-24"></div>
                   <div class="tracker2 tr-25"></div>
                   <div id="cardtea2">
                       <p id="prompt2">HOVER OVER :D</p>
                       <div class="title2">✩⋆⸜ Positive Attitude ✩⋆⸜<br> Maintain a positivity and show <br> support for teachers’ efforts <br> and respect their authority.</div>


                   </div>
               </div>
           </div>


           <div class="containertea2 noselect2">
               <div class="canvas2">
                   <div class="tracker2 tr-1"></div>
                   <div class="tracker2 tr-2"></div>
                   <div class="tracker2 tr-3"></div>
                   <div class="tracker2 tr-4"></div>
                   <div class="tracker2 tr-5"></div>
                   <div class="tracker2 tr-6"></div>
                   <div class="tracker2 tr-7"></div>
                   <div class="tracker2 tr-8"></div>
                   <div class="tracker2 tr-9"></div>
                   <div class="tracker2 tr-10"></div>
                   <div class="tracker2 tr-11"></div>
                   <div class="tracker2 tr-12"></div>
                   <div class="tracker2 tr-13"></div>
                   <div class="tracker2 tr-14"></div>
                   <div class="tracker2 tr-15"></div>
                   <div class="tracker2 tr-16"></div>
                   <div class="tracker2 tr-17"></div>
                   <div class="tracker2 tr-18"></div>
                   <div class="tracker2 tr-19"></div>
                   <div class="tracker2 tr-20"></div>
                   <div class="tracker2 tr-21"></div>
                   <div class="tracker2 tr-22"></div>
                   <div class="tracker2 tr-23"></div>
                   <div class="tracker2 tr-24"></div>
                   <div class="tracker2 tr-25"></div>
                   <div id="cardtea2">
                       <p id="prompt2">HOVER OVER :D</p>
                       <div class="title2">✩⋆⸜ Empathy ✩⋆⸜<br>Offering help or <br> understanding when teachers <br>face difficulties.</div>


                   </div>
               </div>
           </div>
       </div>
       <div class="flex-container3">
           <div class="containertea3 noselect3">
               <div class="canvas3">
                   <div class="tracker3 tr-1"></div>
                   <div class="tracker3 tr-2"></div>
                   <div class="tracker3 tr-3"></div>
                   <div class="tracker3 tr-4"></div>
                   <div class="tracker3 tr-5"></div>
                   <div class="tracker3 tr-6"></div>
                   <div class="tracker3 tr-7"></div>
                   <div class="tracker3 tr-8"></div>
                   <div class="tracker3 tr-9"></div>
                   <div class="tracker3 tr-10"></div>
                   <div class="tracker3 tr-11"></div>
                   <div class="tracker3 tr-12"></div>
                   <div class="tracker3 tr-13"></div>
                   <div class="tracker3 tr-14"></div>
                   <div class="tracker3 tr-15"></div>
                   <div class="tracker3 tr-16"></div>
                   <div class="tracker3 tr-17"></div>
                   <div class="tracker3 tr-18"></div>
                   <div class="tracker3 tr-19"></div>
                   <div class="tracker3 tr-20"></div>
                   <div class="tracker3 tr-21"></div>
                   <div class="tracker3 tr-22"></div>
                   <div class="tracker3 tr-23"></div>
                   <div class="tracker3 tr-24"></div>
                   <div class="tracker3 tr-25"></div>
                   <div id="cardtea3">
                       <p id="prompt3">HOVER OVER :D</p>
                       <div class="title3">ꕥ Gratitude ꕥ<br>Verbally expressing gratitude <br>for the teacher’s help <br>and guidance.</div>


                   </div>
               </div>
           </div>



           <div class="containertea3 noselect3">
               <div class="canvas3">
                   <div class="tracker3 tr-1"></div>
                   <div class="tracker3 tr-2"></div>
                   <div class="tracker3 tr-3"></div>
                   <div class="tracker3 tr-4"></div>
                   <div class="tracker3 tr-5"></div>
                   <div class="tracker3 tr-6"></div>
                   <div class="tracker3 tr-7"></div>
                   <div class="tracker3 tr-8"></div>
                   <div class="tracker3 tr-9"></div>
                   <div class="tracker3 tr-10"></div>
                   <div class="tracker3 tr-11"></div>
                   <div class="tracker3 tr-12"></div>
                   <div class="tracker3 tr-13"></div>
                   <div class="tracker3 tr-14"></div>
                   <div class="tracker3 tr-15"></div>
                   <div class="tracker3 tr-16"></div>
                   <div class="tracker3 tr-17"></div>
                   <div class="tracker3 tr-18"></div>
                   <div class="tracker3 tr-19"></div>
                   <div class="tracker3 tr-20"></div>
                   <div class="tracker3 tr-21"></div>
                   <div class="tracker3 tr-22"></div>
                   <div class="tracker3 tr-23"></div>
                   <div class="tracker3 tr-24"></div>
                   <div class="tracker3 tr-25"></div>
                   <div id="cardtea3">
                       <p id="prompt3">HOVER OVER :D</p>
                       <div class="title3">ꕥ Participation ꕥ<br>Actively participating in class <br>and contributing to discussions <br>and activities.</div>


                   </div>
               </div>
           </div>


           <div class="containertea3 noselect3">
               <div class="canvas3">
                   <div class="tracker3 tr-1"></div>
                   <div class="tracker3 tr-2"></div>
                   <div class="tracker3 tr-3"></div>
                   <div class="tracker3 tr-4"></div>
                   <div class="tracker3 tr-5"></div>
                   <div class="tracker3 tr-6"></div>
                   <div class="tracker3 tr-7"></div>
                   <div class="tracker3 tr-8"></div>
                   <div class="tracker3 tr-9"></div>
                   <div class="tracker3 tr-10"></div>
                   <div class="tracker3 tr-11"></div>
                   <div class="tracker3 tr-12"></div>
                   <div class="tracker3 tr-13"></div>
                   <div class="tracker3 tr-14"></div>
                   <div class="tracker3 tr-15"></div>
                   <div class="tracker3 tr-16"></div>
                   <div class="tracker3 tr-17"></div>
                   <div class="tracker3 tr-18"></div>
                   <div class="tracker3 tr-19"></div>
                   <div class="tracker3 tr-20"></div>
                   <div class="tracker3 tr-21"></div>
                   <div class="tracker3 tr-22"></div>
                   <div class="tracker3 tr-23"></div>
                   <div class="tracker3 tr-24"></div>
                   <div class="tracker3 tr-25"></div>
                   <div id="cardtea3">
                       <p id="prompt3">HOVER OVER :D</p>
                       <div class="title3">ꕥ Integrity ꕥ<br>Avoid cheating or plagiarism <br> during exams or when <br> completing homeworks, also <br> submitting genuine work.</div>


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
               background: #BFB0C4;
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
