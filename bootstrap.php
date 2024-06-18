<!DOCTYPE html>
<html lang="en">

<head>
    <title>fyp home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
    body {
        background: linear-gradient(to right, #FFD1DC, #D3E5DC, #FAEBD7);
    }

    .item h4 {
        font-size: 22px;
        line-height: 1.75em;
        font-weight: 400;
        font-style: italic;
        margin: 70px 0;
        color: #7B6290;
        font-family: serif;
    }

    container-fluid,
    h4 {
        color: beige;
        font-family: serif;
    }

    h2 {
        margin-top: 20px;
        color: #446B74;
        font-style: italic;
        font-size: 45px;
    }

    p {
        color: #3A718E;
        font-size: 19px;
        font-style: italic;
        margin-bottom: 40px;
    }

    .col-sm-8 {
        margin-top: 10px;
        margin-bottom: 5px;
    }

    .homepic img {
        margin-left: 70px;
    }

    h3 {
        margin-top: 100px;
        text-align: center;
        color: #5C306B;
        font-family: serif;
        font-size: 40px;
    }

    h5 {
        font-family: serif;
        color: #6A425A;
        margin-top: 80px;
        font-size: 40px;
    }


    p5 {
        font-family: serif;
        font-style: italic;
        font-size: 24px;
        color: #835671;
    }

    .jumbotron {
        color: darkslategrey;
        font-family: serif;
        background-image: url("img/bgimage.png");
        background-size: contain;
        background-repeat: no-repeat;
        background-position: top;
        height: 535px;
        padding-top: 120px;
        box-shadow: 0 -4px 8px 10px rgba(0, 0, 0, 0.1);
    }

    h10 {
        margin-top: 150px;
        font-size: 80px;
        margin-bottom: 80px;
        font-family: cursive;
    }

    .home {
        font-family: serif;
        padding: 60px 50px;
        margin-left: 110px;
        color: aliceblue;
    }

    .logo {
        font-size: 200px;
    }

    @media screen and (max-width: 768px) {
        .col-sm-4 {
            text-align: center;
            margin: 25px 0;
        }
    }

    .carousel-control.right,
    .carousel-control.left {
        color: #5D3D78;
    }

    .carousel-indicators li {
        border-color: #5D3D78;
    }

    .carousel-indicators li.active {
        background-color: #5D3D78;
    }

    .btn2 {
        height: 16em;
        width: 33.2em;
        display: grid;
        align-items: center;
        justify-content: center;
        background: linear-gradient(to right,
                #f0e5ff,
                /* Soft lavender */
                #dce4ff,
                /* Soft light blue */
                #c8f7f4,
                /* Soft aqua */
                #d9ffef,
                /* Soft mint */
                #d4f6d4,
                /* Soft light green */
                #fff6d9,
                /* Soft light yellow */
                #ffdcd0,
                /* Soft peach */
                #ffc1c1
                /* Soft light pink */
            );
        border: 4px solid white;
        cursor: pointer;
    }

    .wrapper {
        height: 4em;
        width: 9em;
        position: relative;
        background: transparent;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .text {
        font-size: 27px;
        z-index: 1;
        color: #000;
        padding: 10px 20px;
        border-radius: 15px;
        background: rgba(255, 255, 255, 0.7);
        transition: all 0.6s ease;
        font-family: serif;
        margin-top: 30px;
    }

    .flower {
        display: grid;
        grid-template-columns: 1em 1em;
        position: absolute;
        transition: grid-template-columns 0.8s ease;
    }

    .flower1 {
        top: -12px;
        left: -13px;
        transform: rotate(5deg);
    }

    .flower2 {
        bottom: -5px;
        left: 8px;
        transform: rotate(35deg);
    }

    .flower3 {
        bottom: -15px;
        transform: rotate(0deg);
    }

    .flower4 {
        top: -14px;
        transform: rotate(15deg);
    }

    .flower5 {
        right: 11px;
        top: -3px;
        transform: rotate(25deg);
    }

    .flower6 {
        right: -15px;
        bottom: -15px;
        transform: rotate(30deg);
    }

    .petal {
        height: 1em;
        width: 1em;
        border-radius: 40% 70% / 7% 90%;
        background: linear-gradient(#07a6d7, #93e0ee);
        border: 0.5px solid #96d1ec;
        z-index: 0;
        transition: width 0.8s ease, height 0.8s ease;
    }

    .two {
        transform: rotate(90deg);
    }

    .three {
        transform: rotate(270deg);
    }

    .four {
        transform: rotate(180deg);
    }

    .btn2:hover .petal {
        background: linear-gradient(#0761d7, #93bdee);
        border: 0.5px solid #96b4ec;
    }

    .btn2:hover .flower {
        grid-template-columns: 1.5em 1.5em;
    }

    .btn2:hover .flower .petal {
        width: 1.5em;
        height: 1.5em;
    }

    .btn2:hover .text {
        background: rgba(255, 255, 255, 0.4);
    }

    .btn2:hover div.flower1 {
        animation: 15s linear 0s normal none infinite running flower1;
    }

    @keyframes flower1 {
        0% {
            transform: rotate(5deg);
        }

        100% {
            transform: rotate(365deg);
        }
    }

    .btn2:hover div.flower2 {
        animation: 13s linear 1s normal none infinite running flower2;
    }

    @keyframes flower2 {
        0% {
            transform: rotate(35deg);
        }

        100% {
            transform: rotate(-325deg);
        }
    }

    .btn2:hover div.flower3 {
        animation: 16s linear 1s normal none infinite running flower3;
    }

    @keyframes flower3 {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .btn2:hover div.flower4 {
        animation: 17s linear 1s normal none infinite running flower4;
    }

    @keyframes flower4 {
        0% {
            transform: rotate(15deg);
        }

        100% {
            transform: rotate(375deg);
        }
    }

    .btn2:hover div.flower5 {
        animation: 20s linear 1s normal none infinite running flower5;
    }

    @keyframes flower5 {
        0% {
            transform: rotate(25deg);
        }

        100% {
            transform: rotate(-335deg);
        }
    }

    .btn2:hover div.flower6 {
        animation: 15s linear 1s normal none infinite running flower6;
    }

    @keyframes flower6 {
        0% {
            transform: rotate(30deg);
        }

        100% {
            transform: rotate(390deg);
        }
    }

    .moral-values-container {
        margin-bottom: 100px;
        background-color: #EBF5E7;
        padding: 10px 0px 100px;
        box-shadow: 0 -4px 8px 6px rgba(0, 0, 0, 0.1);
    }




    .parents {
        --bg-color: #ceb2fc;
        --bg-color-light: #f0e7ff;
        --text-color-hover: #fff;
        --box-shadow-color: rgba(206, 178, 252, 0.48);
    }

    .teachers {
        --bg-color: #A9D3DC;
        --bg-color-light: #63B4C6;
        --text-color-hover: #fff;
        --box-shadow-color: rgba(169, 281, 220, 0.48);
    }

    .friends {
        --bg-color: #DCA9D6;
        --bg-color-light: #B670AE;
        --text-color-hover: #fff;
        --box-shadow-color: rgba(206, 178, 252, 0.48);
    }

    .card {
        width: 310px;
        height: 381px;
        background: #F0F0F0;
        border-top-right-radius: 10px;
        overflow: hidden;
        display: flex;
        display: inline-grid;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
        box-shadow: 0 14px 26px rgba(0, 0, 0, 0.04);
        transition: all 0.3s ease-out;
        text-decoration: none;
        margin: 50px;
        align-content: center;
    }

    .card:hover {
        transform: translateY(-5px) scale(1.005) translateZ(0);
        box-shadow: 0 24px 36px rgba(0, 0, 0, 0.11),
            0 24px 46px var(--box-shadow-color);
    }

    .card:hover .overlay {
        transform: scale(4) translateZ(0);
    }

    .card:hover .circle {
        border-color: var(--bg-color-light);
        background: var(--bg-color);
    }

    .card:hover .circle:after {
        background: var(--bg-color-light);
    }

    .card:hover p {
        color: var(--text-color-hover);
    }

    .card p {
        font-size: 19px;
        color: black;
        margin-top: 20px;
        z-index: 1000;
        font-family: serif;
        transition: color 0.4s ease-out;
    }

    .circle {
        width: 141px;
        height: 141px;
        border-radius: 50%;
        background: #F0F0F0;
        border: 1.5px solid var(--bg-color);
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        z-index: 1;
        transition: all 0.4s ease-out;
        margin-left: 190px;
        margin-top: 30px;
    }

    .circle:after {
        content: "";
        width: 110px;
        height: 110px;
        display: block;
        position: absolute;
        background: var(--bg-color);
        border-radius: 50%;
        top: 20px;
        left: 20px;
        transition: opacity 0.4s ease-out;
    }

    .circle svg {
        z-index: 10000;
        transform: translateZ(0);
    }

    .overlay {
        width: 154px;
        position: absolute;
        height: 156px;
        border-radius: 50%;
        background: var(--bg-color);
        top: 30px;
        left: 80px;
        z-index: 0;
        transition: transform 0.4s ease-out;
    }

    h6 {
        margin-top: 80px;
        font-family: serif;
        color: #593009;
        font-size: 40px;
    }

    p6 {
        color: #816448;
        font-family: serif;
        font-style: italic;
        font-size: 30px;
    }

    h8 {
        margin-top: 80px;
        font-family: serif;
        color: #5B5A4A;
        font-size: 45px;
    }

    p8 {
        color: #787451;
        font-family: serif;
        font-style: italic;
        font-size: 30px;
    }

    .moralrelationship-container {
        margin-bottom: 100px;
        background-color: #EDEDED;
        padding: 10px 0px 100px;
        box-shadow: 0 -4px 8px 6px rgba(0, 0, 0, 0.1);
    }

    p7 {
        color: black;
        font-family: serif;
        font-size: 20px;
        margin-top: 20px;
    }


    .cardmoon {
        margin-left: 480px;
        width: 300px;
        height: 390px;
        background: linear-gradient(135deg, rgba(48, 48, 48, 1) 48%, rgba(0, 0, 0, 1) 100%);
        background-size: 300%, 300%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        border-radius: 15px;
        box-shadow: 5px 5px 15px 5px #000000;
        overflow: hidden;
        transition: all 1s ease;
    }

    .moon {
        width: 70px;
        height: 70px;
        top: 15%;
        right: 120px;
        position: absolute;
        fill: white;
        transform: rotate(-20deg);
        transition: all 1s ease;
    }

    .rocket {
        width: 70px;
        height: 70px;
        bottom: -2%;
        left: -2%;
        position: absolute;
        fill: white;
        transition: all 1.9s ease;
    }

    .star {
        position: absolute;
        background: radial-gradient(circle, rgba(251, 239, 63, 1) 0%, rgba(255, 253, 212, 1) 100%);
        clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
    }

    .star-1 {
        width: 100px;
        height: 100px;
        bottom: 90px;
        left: -15px;
        transition: all 1s ease;
    }

    .star-2 {
        width: 150px;
        height: 150px;
        top: -10%;
        left: -10%;
        transition: all .5s ease;
    }

    .star-3 {
        width: 100px;
        height: 100px;
        bottom: 5%;
        right: -15px;
        transition: all .3s ease;
    }

    .star-4 {
        width: 20px;
        height: 20px;
        top: 4%;
        right: 5px;
        transition: all 1.4s ease;
    }

    .star-5 {
        width: 20px;
        height: 20px;
        bottom: 24%;
        right: 45%;
        animation: rotate 3s normal linear infinite;
    }

    .star-6 {
        width: 20px;
        height: 20px;
        top: 14%;
        right: 25%;
        animation: rotate 5s normal linear infinite;
    }

    .star-7 {
        width: 40px;
        height: 40px;
        top: 34%;
        right: 65%;
        animation: rotate 5s normal linear infinite;
    }

    .card-info span {
        font-size: 1.2em;
        color: white;
        font-weight: 600;
        text-transform: uppercase;
        transition: all 1s ease;
    }

    .cardmoon:hover {
        background: rgb(48, 48, 48);
        background: linear-gradient(135deg, rgba(48, 48, 48, 1) 10%, rgba(0, 0, 0, 1) 90%);
        background-size: 100%, 100%;
    }

    .cardmoon:hover .star-1,
    .cardmoon:hover .star-3 {
        background: linear-gradient(90deg, rgba(255, 241, 0, 1) 0%, rgba(246, 249, 93, 1) 77%, rgba(238, 255, 0, 1) 100%);
        transform: scale(1.2) rotate(10deg);
    }

    .cardmoon:hover .star-2,
    .cardmoon:hover .star-4,
    .cardmoon:hover .star-5 {
        background: linear-gradient(90deg, rgba(255, 241, 0, 1) 0%, rgba(246, 249, 93, 1) 77%, rgba(238, 255, 0, 1) 100%);
        transform: scale(1.2) rotate(-150deg);
    }

    .cardmoon:hover .rocket {
        transform: scale(.3) translate(450px, -730px) rotate(-260deg);
    }

    .cardmoon:hover .moon {
        width: 50px;
        height: 50px;
    }

    .cardmoon:hover span {
        font-size: 1.5em;
    }

    @keyframes rotate {
        0% {
            -webkit-transform: rotate3d(0, 0, 1, 0deg);
            transform: rotate3d(0, 0, 1, 0deg);
        }

        25% {
            -webkit-transform: rotate3d(0, 0, 1, 90deg);
            transform: rotate3d(0, 0, 1, 90deg);
        }

        50% {
            -webkit-transform: rotate3d(0, 0, 1, 180deg);
            transform: rotate3d(0, 0, 1, 180deg);
        }

        75% {
            -webkit-transform: rotate3d(0, 0, 1, 270deg);
            transform: rotate3d(0, 0, 1, 270deg);
        }

        100% {
            -webkit-transform: rotate3d(0, 0, 1, 360deg);
            transform: rotate3d(0, 0, 1, 360deg);
        }
    }


    .swipe {
        position: relative;
        background-color: black;
        width: 200px;
        height: 80px;
        color: #CECCA3;
        border-radius: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        letter-spacing: 2px;
        border-top: 0.5px solid rgba(0, 0, 0, 0.35);
        border-left: 0.5px solid rgba(0, 0, 0, 0.35);
        padding-left: 40px;
        cursor: pointer;
        transition: 0.35s ease;
    }

    .swipe:hover {
        padding-left: 0;
        padding-right: 40px;
        color: white;
    }

    .container2 {
        position: absolute;
        left: 5px;
        width: 50px;
        height: 50px;
        background: #CECCA3;
        border-radius: 50%;
        transition: 0.35s ease;
        display: flex;
        justify-content: center;
        align-items: center;
        color: black;
    }

    .swipe:hover .container2 {
        left: calc(100% - 55px);
        color: white;
    }

    .moralrelationship-container {
        background-color: #D8C9D7;
    }

</style>


<body>

    <div class="jumbotron text-center">
        <h10>TinyHearts</h10>
        <p>Educating Hearts💗, Enlightening Minds💭ˎˊ˗</p>
    </div>

    <div id="about" class="containerfluid">
        <div class="home">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Moral Education</h2>
                    <p>Teaching people about the difference between good and bad, supporting them to make moral decisions, and shaping their character to become responsible and caring members of society are the main objectives of moral education. Values education, on the other hand, aims to provide people with a solid ethic to help them overcome challenges in life by creating values like honesty, empathy, respect, and morality. A person must get both moral and values education in order to develop into a well-educated person.</p>
                </div>
                <div class="homepic">
                    <img src="img/WhatsApp_Image_2024-06-14_at_05.05.52_d6e51d93-removebg-preview.png" alt="home" width="270px">
                </div>
            </div>
        </div>
    </div>




    <div id="moralvalues" class="container-fluid moral-values-container">
        <div class="container-fluid text-center bg-grey">
            <h5>Moral Values<br>

                ┈┈┈┈⋆⋅☆⋅⋆┈┈┈┈
            </h5>

            <p5>Embark on a journey of morality and integrity with these basic values in mind.<br><br><br></p5>

            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <button2 class="btn2">
                            <div class="wrapper">
                                <p class="text">Honesty</p>

                                <div class="flower flower1">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower2">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower3">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower4">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower5">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower6">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                            </div>
                        </button2>
                    </div>
                </div>




                <div class="col-sm-4">
                    <div class="thumbnail">
                        <button2 class="btn2">
                            <div class="wrapper">
                                <p class="text">Gratitude</p>

                                <div class="flower flower1">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower2">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower3">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower4">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower5">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower6">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                            </div>
                        </button2>
                    </div>
                </div>




                <div class="col-sm-4">
                    <div class="thumbnail">
                        <button2 class="btn2">
                            <div class="wrapper">
                                <p class="text">Forgiveness</p>

                                <div class="flower flower1">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower2">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower3">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower4">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower5">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower6">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                            </div>
                        </button2>
                    </div>
                </div>




                <div class="col-sm-4">
                    <div class="thumbnail">
                        <button2 class="btn2">
                            <div class="wrapper">
                                <p class="text">Respect</p>

                                <div class="flower flower1">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower2">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower3">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower4">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower5">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower6">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                            </div>
                        </button2>
                    </div>
                </div>




                <div class="col-sm-4">
                    <div class="thumbnail">
                        <button2 class="btn2">
                            <div class="wrapper">
                                <p class="text">Responsibility</p>

                                <div class="flower flower1">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower2">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower3">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower4">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower5">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower6">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                            </div>
                        </button2>
                    </div>
                </div>




                <div class="col-sm-4">
                    <div class="thumbnail">
                        <button2 class="btn2">
                            <div class="wrapper">
                                <p class="text">Courage</p>

                                <div class="flower flower1">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower2">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower3">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower4">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower5">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                                <div class="flower flower6">
                                    <div class="petal one"></div>
                                    <div class="petal two"></div>
                                    <div class="petal three"></div>
                                    <div class="petal four"></div>
                                </div>
                            </div>
                        </button2>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <div id="importance" class="importance">
        <h3>☘𐙚. The Importance ☾☘.</h3>
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <h4>༘⋆✿ Character Improvement ༘⋆✿<br>
                        Moral education encourages the development of strong <br>
                        character characteristics including honesty, responsibility, <br>
                        and truthfulness, all of which are necessary for performance and personal improvement.
                        <br><span style="font-style: serif;"></span>
                    </h4>
                </div>
                <div class="item">
                    <h4>࣪⋆˚˖° Empathising࣪ ⋆˚˖°<br>
                        Empathy encourages kindness, compassion, and the ability to view <br>
                        things from many angles by teaching us how to understand and <br>
                        feel the feelings of others.
                        <br><span style="font-style: serif;"></span>
                    </h4>
                </div>
                <div class="item">
                    <h4>.☘ ݁˖ Encouraging Moral Decision-Making .☘ ݁˖<br>
                        Moral education gives people what needed to make <br>
                        moral decisions, encouraging them to act <br>
                        properly even in challenging situations.
                        <br><span style="font-style: serif;"></span>
                    </h4>
                </div>
                <div class="item">
                    <h4>•ᴗ•❀ Building a More Perfect Society ❀•ᴗ•<br>
                        Moral values are established, which helps to create a more peaceful <br>
                        and loving society where people unite for better outcomes <br>
                        and show respect for one another.
                        <br><span style="font-style: serif;"></span>
                    </h4>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>





    <div id="valuesinrelationship" class="container-fluid moralrelationship-container">
        <div class="container-fluid">
            <div class="text-center">
                <h6>˗ˏˋ ♡ ˎˊ˗ Moral Values in Relationships ˗ˏˋ ♡ ˎˊ˗</h6>
                <p6>Respectful Hearts, Harmonious Paths</p6>
            </div>


            <style>
                .button3 {
                    border: 2px solid black;
                    width: 150px;
                    padding: 12px 30px 12px 30px;
                    border-radius: 60px;
                    background-color: #E8DFFF;
                    font-weight: bolder;
                    font-size: 15px;
                    box-shadow: 0px 0px 1px;
                    transform: all 2s esase;
                    transition-duration: .3s;
                    display: inline-block;
                    position: relative;
                    top: 0px;
                    /* Adjust as needed */
                    left: 0%;
                    /* Adjust as needed */
                    transform: translateX(0%);
                    z-index: 1000;
                    margin-top: 0px;
                    margin-bottom: 20px;
                    align-items: center;
                    margin-left: 200px;
                    color: black;
                }

                .button3:hover {
                    transform: translateY(-10px);
                    box-shadow: 0px 7px 1px rgb(0, 0, 0);
                    border: 1px solid black;
                }

                .button3:active {
                    transform: translateY(-50px);
                    box-shadow: 0px 0px 1px;
                }

                .button4 {
                    border: 2px solid black;
                    width: 150px;
                    padding: 12px 30px 12px 30px;
                    border-radius: 30px;
                    background-color: #D7EEF1;
                    font-weight: bolder;
                    font-size: 15px;
                    box-shadow: 0px 0px 1px;
                    transform: all 2s esase;
                    transition-duration: .3s;
                    position: inherit;
                    top: 0px;
                    /* Adjust as needed */
                    left: 0%;
                    /* Adjust as needed */
                    transform: translateX(0%);
                    z-index: 1000;
                    margin-top: 0px;
                    margin-bottom: 20px;
                    align-items: center;
                    margin-left: 200px;
                    color: black;

                }

                .button4:hover {
                    transform: translateY(-10px);
                    box-shadow: 0px 7px 1px rgb(0, 0, 0);
                    border: 1px solid black;
                }

                .button4:active {
                    transform: translateY(-50px);
                    box-shadow: 0px 0px 1px;
                }

                .button5 {
                    border: 2px solid black;
                    width: 150px;
                    padding: 12px 30px 12px 30px;
                    border-radius: 30px;
                    background-color: #EFD7F1;
                    font-weight: bolder;
                    font-size: 15px;
                    box-shadow: 0px 0px 1px;
                    transform: all 2s ease;
                    transition-duration: .3s;
                    position: inherit;
                    top: 0px;
                    /* Adjust as needed */
                    left: 0%;
                    /* Adjust as needed */
                    transform: translateX(0%);
                    z-index: 1000;
                    margin-top: 0px;
                    margin-bottom: 20px;
                    align-items: center;
                    margin-left: 200px;
                    color: black;

                }

                .button5:hover {
                    transform: translateY(-10px);
                    box-shadow: 0px 7px 1px rgb(0, 0, 0);
                    border: 1px solid black;
                }

                .button5:active {
                    transform: translateY(-50px);
                    box-shadow: 0px 0px 1px;
                }

            </style>

            <div class="container">
                <div class="row">
                    <div class="col-sm-4 text-center mx-auto">
                        <div class="card parents">
                            <div class="overlay"></div>
                            <div class="circle">

                                <svg height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 439.801 439.801" xml:space="preserve" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <path style="fill:#D8B4A4;" d="M116.877,74.784c-3.6,2.497-7.678,3.916-12,3.916c-4.322,0-8.4-1.419-12-3.916v5.176l12,23.487 l12-23.487V74.784z"></path>
                                            <polygon style="fill:#604b72;" points="114.827,94.961 127.71,100.829 128.34,86.295 120.615,83.633 "></polygon>
                                            <path style="fill:#D8B4A4;" d="M104.877,73.7c11.731,0,21.274-13.606,21.274-30.331v-7.216c-4.819-0.817-8.115-4.066-9.55-9.346 c-2.863,1.9-6.982,3.061-11.724,3.061c-4.742,0-8.861-1.161-11.724-3.061c-1.435,5.28-4.731,8.529-9.551,9.346l0.001,7.216 C83.602,60.094,93.146,73.7,104.877,73.7z M113.879,44.2c0.93-0.93,2.6-0.93,3.53,0c0.47,0.46,0.73,1.11,0.73,1.76 c0,0.66-0.26,1.309-0.73,1.77c-0.46,0.47-1.11,0.73-1.77,0.73c-0.65,0-1.3-0.26-1.76-0.73c-0.47-0.461-0.74-1.11-0.74-1.77 C113.139,45.31,113.409,44.66,113.879,44.2z M98.399,58.093c1.175,0,2.161,0.811,2.428,1.903c0.486,0.299,1.873,0.819,4.049,0.819 c2.176,0,3.562-0.52,4.049-0.82c0.267-1.092,1.253-1.903,2.428-1.903c1.381,0,2.5,1.119,2.5,2.5c0,3.075-3.692,5.223-8.978,5.223 c-5.286,0-8.978-2.147-8.978-5.223C95.899,59.212,97.018,58.093,98.399,58.093z M91.609,45.961c0-0.65,0.27-1.3,0.73-1.76 c0.94-0.94,2.6-0.94,3.54,0c0.47,0.46,0.73,1.11,0.73,1.76c0,0.66-0.26,1.3-0.73,1.77c-0.47,0.47-1.11,0.73-1.77,0.73 c-0.65,0-1.3-0.26-1.77-0.73C91.879,47.27,91.609,46.62,91.609,45.961z"></path>
                                            <path style="fill:#5c5c5c;" d="M88.971,20.062c0-1.381,1.119-2.5,2.5-2.5h0.001c0.001,0,0.001,0,0.001,0c1.381,0,2.5,1.119,2.5,2.5 c0,1.96,4.248,4.807,10.903,4.807c6.656,0,10.903-2.847,10.903-4.807c0-1.381,1.119-2.5,2.5-2.5c0,0,0.001,0,0.001,0 c0.001,0,0.001,0,0.001,0c1.381,0,2.5,1.119,2.5,2.5c0,6.191,1.807,9.856,5.369,10.952V18.238c0.005-0.243,0.05-4.204-3.381-7.71 C119.18,6.86,113.16,5,104.877,5s-14.304,1.86-17.894,5.528c-3.431,3.506-3.386,7.466-3.382,7.633l0.001,12.853 C87.165,29.918,88.971,26.253,88.971,20.062z"></path>
                                            <path style="fill:#E5CBBD;" d="M122.311,308.539c-0.186,0.83-0.038,1.674,0.413,2.385c0.451,0.711,1.152,1.204,1.974,1.387 c0.823,0.186,1.668,0.037,2.379-0.414c0.711-0.451,1.204-1.152,1.387-1.974c0.014-0.061,0.029-0.121,0.047-0.18l16.583-54.767 l-9.73-5.755L122.311,308.539z"></path>
                                            <path style="fill:#604b72;" d="M107.379,109.54v125.308h25.195l2.774-10.511c0.151-0.674,1.231-5.037,4.494-9.371v-75.098 c0-0.058,0.123-0.777,0.139-0.822l14.447-41.473c-3.175-2.841-7.572-5.424-13.677-7.008c-0.063-0.016-7.48-2.57-7.48-2.57 l-0.726,16.754c-0.036,0.83-0.482,1.588-1.191,2.023c-0.399,0.245-0.852,0.369-1.307,0.369c-0.353,0-0.706-0.075-1.037-0.225 l-16.459-7.498L107.379,109.54z"></path>
                                            <path style="fill:#000000;" d="M139.842,289.577l-6.52,21.534c-0.492,2.083-1.755,3.858-3.566,5.007 c-1.322,0.839-2.823,1.272-4.353,1.272c-0.597,0-1.199-0.066-1.795-0.199c-2.124-0.475-3.938-1.749-5.105-3.587 c-1.167-1.839-1.548-4.022-1.072-6.148l13.421-60.987c-0.65-0.619-0.937-1.549-0.7-2.445l1.102-4.176H69.912v177.623h24.089 l8.377-161.27c0.072-1.378,1.239-2.433,2.627-2.367c1.29,0.067,2.289,1.105,2.354,2.368l0.017-0.001l8.377,161.27h24.089V289.577z"></path>
                                            <polygon style="fill:#604b72;" points="94.926,94.961 89.138,83.633 81.414,86.295 82.044,100.829 "></polygon>
                                            <path style="fill:#604b72;" d="M69.912,139.867v94.98h32.463V109.54l-5.172-10.122l-16.459,7.498 c-0.33,0.15-0.684,0.225-1.037,0.225c-0.455,0-0.908-0.124-1.307-0.369c-0.709-0.435-1.155-1.193-1.191-2.023l-0.726-16.754 c0,0-7.418,2.554-7.48,2.57c-6.094,1.58-10.487,4.184-13.663,7.046c0,0,14.453,41.525,14.466,41.571 C69.833,139.277,69.912,139.81,69.912,139.867z"></path>
                                            <path style="fill:#ffe2cc;" d="M65.018,425.467c-2.564,2.717-3.339,6.783-3.565,9.333h32.422v-12.33h-21 C69.491,422.471,66.922,423.451,65.018,425.467z"></path>
                                            <path style="fill:#f0e5ff;" d="M150.426,243.566l-8.008-23.46c-1.604,2.77-2.15,5.132-2.196,5.345 c-0.007,0.035-0.018,0.077-0.027,0.112l-4.727,17.909l12.598,7.452L150.426,243.566z"></path>
                                            <polygon style="fill:#604b72;" points="26.644,232.164 42.461,232.164 47.143,223.562 26.015,223.562 "></polygon>
                                            <path style="fill:#D8B4A4;" d="M25.756,242.898c-0.233,1.797,0.248,3.581,1.355,5.021c1.108,1.439,2.709,2.361,4.51,2.595 c1.8,0.232,3.586-0.247,5.025-1.355c1.439-1.108,2.361-2.71,2.595-4.511c0.009-0.069,1.607-7.483,1.607-7.483H26.512 L25.756,242.898z"></path>
                                            <path style="fill:#604b72;" d="M47.191,112.299c-0.008,0.087-20.828,106.262-20.828,106.262h22.932l15.532-78.514l-13.298-38.176 C47.717,107.214,47.199,112.209,47.191,112.299z"></path>
                                            <path style="fill:#000000;" d="M311.723,101.245l16.316-3.916V84.749c-6.033-5.448-10.006-14.661-10.006-25.088v-6.889h0.003 c-0.001-1.177,0.829-2.227,2.027-2.456c0.182-0.035,18.173-3.631,18.173-15.186V20.041c-4.467,0.26-14.199,1.577-20.778,7.912 c-4.554,4.384-6.862,10.5-6.862,18.177c0,0.403-0.098,0.801-0.284,1.158c-0.221,0.421-21.267,41.252-5.906,56.657 C306.584,102.818,309.008,101.883,311.723,101.245z"></path>
                                            <path style="fill:#ffe0d6;" d="M323.034,54.749v4.912c0,13.938,7.941,25.278,17.703,25.278s17.703-11.34,17.703-25.278v-4.912 c-4.099-1.09-13.266-4.208-17.703-11.093C336.3,50.541,327.133,53.658,323.034,54.749z M330.289,63.2c-0.65,0-1.3-0.27-1.77-0.73 c-0.46-0.47-0.73-1.11-0.73-1.77c0-0.66,0.27-1.3,0.73-1.77c0.94-0.93,2.61-0.93,3.54,0c0.47,0.47,0.73,1.11,0.73,1.77 c0,0.66-0.26,1.3-0.73,1.77C331.599,62.93,330.949,63.2,330.289,63.2z M349.419,58.93c0.92-0.93,2.6-0.93,3.53,0 c0.47,0.47,0.73,1.11,0.73,1.77c0,0.66-0.26,1.3-0.73,1.77c-0.46,0.46-1.11,0.73-1.77,0.73c-0.66,0-1.3-0.27-1.76-0.74 c-0.47-0.461-0.74-1.1-0.74-1.76C348.679,60.04,348.949,59.4,349.419,58.93z M345.04,72.163c0.253-1.112,1.249-1.943,2.438-1.943 c1.381,0,2.5,1.119,2.5,2.5c0,3.14-3.8,5.333-9.24,5.333s-9.24-2.193-9.24-5.333c0-1.381,1.119-2.5,2.5-2.5 c1.189,0,2.185,0.831,2.438,1.943c0.493,0.32,1.959,0.89,4.303,0.89C343.08,73.053,344.547,72.482,345.04,72.163z"></path>
                                            <path style="fill:#604b72;" d="M152.773,179.716c-0.3-1.939-0.463-3.937-0.463-5.981c0-21.627,8.779-28.827,16.056-31.772 c0,0-5.796-29.576-5.804-29.663c-0.035-0.362-0.583-5.263-4.319-10.481l-13.317,38.23L152.773,179.716z"></path>
                                            <path style="fill:#5c5c5c;" d="M273.885,159.36l0.007,0.004c0.194-0.31,0.451-0.585,0.781-0.792 c1.17-0.733,2.712-0.381,3.446,0.788l5.152,8.206h21.31c0-15.564-10.503-22.491-20.765-22.491 c-12.178,0-19.278,7.747-20.764,22.491h5.68L273.885,159.36z"></path>
                                            <path style="fill:#000000;" d="M361.407,50.315c1.2,0.228,2.031,1.278,2.03,2.456h0.003v6.889c0,10.426-3.972,19.638-10.004,25.086 V97.33l16.328,3.918c2.712,0.637,5.132,1.57,7.307,2.696c15.357-15.406-5.688-56.235-5.907-56.656 c-0.186-0.357-0.284-0.755-0.284-1.158c0-7.688-2.316-13.811-6.884-18.197c-6.606-6.343-16.304-7.642-20.759-7.895V35.13 C343.237,46.727,361.225,50.281,361.407,50.315z"></path>
                                            <path style="fill:#ffe0d6;" d="M340.737,89.939c-2.701,0-5.292-0.635-7.697-1.795v11.157c0,1.156-0.792,2.161-1.917,2.431 l-11.383,2.731c1.27,6.898,9.374,11.413,20.997,11.413c11.624,0,19.729-4.514,20.999-11.413l-11.383-2.731 c-1.124-0.27-1.917-1.275-1.917-2.431V88.143C346.031,89.303,343.439,89.939,340.737,89.939z"></path>
                                            <path style="fill:#E5CBBD;" d="M304.879,173.734c0-0.395-0.008-0.781-0.014-1.168h-22.976c-0.86,0-1.66-0.442-2.117-1.171 l-3.77-6.004l-3.77,6.004c-0.457,0.729-1.257,1.171-2.117,1.171h-7.346c-0.006,0.387-0.014,0.773-0.014,1.168 c0,14.895,9.448,27.012,21.061,27.012C295.43,200.746,304.879,188.629,304.879,173.734z M291.829,176.56c0.93-0.93,2.6-0.93,3.54,0 c0.46,0.46,0.73,1.11,0.73,1.77c0,0.65-0.27,1.3-0.73,1.76c-0.47,0.47-1.11,0.73-1.77,0.73c-0.66,0-1.3-0.26-1.77-0.73 c-0.46-0.46-0.73-1.11-0.73-1.76C291.099,177.67,291.369,177.02,291.829,176.56z M272.269,180.13c-0.47-0.46-0.74-1.1-0.74-1.76 c0-0.66,0.27-1.31,0.74-1.77c0.93-0.93,2.6-0.93,3.53,0c0.47,0.47,0.73,1.11,0.73,1.77c0,0.65-0.26,1.3-0.73,1.76 c-0.46,0.47-1.11,0.74-1.77,0.74C273.379,180.87,272.729,180.6,272.269,180.13z M275.429,190.622 c-0.003-1.381,1.113-2.503,2.494-2.506c0.002,0,0.004,0,0.006,0c1.087,0,2.013,0.694,2.357,1.664 c0.508,0.251,1.722,0.605,3.499,0.605c0.01,0,0.02,0,0.03,0c1.794-0.004,3.018-0.366,3.527-0.62 c0.34-0.973,1.265-1.671,2.355-1.674c0.002,0,0.004,0,0.006,0c1.378,0,2.497,1.115,2.5,2.494c0.003,0.992-0.425,2.825-3.312,3.952 c-1.392,0.543-3.191,0.844-5.065,0.848c-0.015,0-0.03,0-0.044,0C278.791,195.385,275.436,193.474,275.429,190.622z"></path>
                                            <path style="fill:#E5CBBD;" d="M178.372,205.746c-2.635,0-5.179-0.487-7.578-1.384c-0.153,0.563-0.497,1.053-0.974,1.388 c1.201,1.841,4.449,3.471,8.515,3.471c0.013,0,0.029,0.001,0.038,0c0.013,0.001,0.025,0,0.038,0c4.066,0,7.314-1.629,8.515-3.471 c-0.477-0.334-0.821-0.825-0.974-1.388C183.551,205.259,181.007,205.746,178.372,205.746z"></path>
                                            <path style="fill:#ffe0d6;" d="M296.301,201.928l4.347,1.509c0.572-2.559,1.168-5,1.786-7.331c-1.798,2.256-3.862,4.191-6.133,5.72 V201.928z"></path>
                                            <path style="fill:#5c5c5c;" d="M157.608,167.566h5.68l5.152-8.206c0.734-1.17,2.276-1.523,3.446-0.788 c0.33,0.207,0.587,0.483,0.781,0.792l0.007-0.004l5.152,8.206h21.31c-1.486-14.744-8.586-22.491-20.765-22.491 C166.194,145.075,159.094,152.822,157.608,167.566z"></path>
                                            <path style="fill:#604b72;" d="M153.397,182.867l4.331,21.894l8.16-2.832v-0.103C159.924,197.811,155.375,191.014,153.397,182.867z "></path>
                                            <path style="fill:#E5CBBD;" d="M283.816,205.746c-2.635,0-5.179-0.487-7.578-1.384c-0.153,0.564-0.498,1.055-0.976,1.39 c1.199,1.849,4.452,3.487,8.549,3.469c0.002,0,0.004,0,0.005,0c0.013,0.001,0.025,0,0.038,0c4.066,0,7.314-1.629,8.515-3.471 c-0.477-0.334-0.821-0.825-0.974-1.388C288.995,205.259,286.451,205.746,283.816,205.746z"></path>
                                            <path style="fill:#E5CBBD;" d="M174.327,171.395l-3.77-6.004l-3.77,6.004c-0.457,0.729-1.257,1.171-2.117,1.171h-7.346 c-0.006,0.387-0.014,0.773-0.014,1.168c0,14.895,9.448,27.012,21.062,27.012c11.614,0,21.062-12.117,21.062-27.012 c0-0.395-0.008-0.781-0.014-1.168h-22.976C175.584,172.566,174.784,172.124,174.327,171.395z M166.819,180.14 c-0.46-0.47-0.73-1.11-0.73-1.77c0-0.66,0.27-1.31,0.73-1.77c0.93-0.93,2.61-0.93,3.54,0c0.46,0.46,0.73,1.11,0.73,1.77 c0,0.66-0.27,1.3-0.73,1.77c-0.47,0.46-1.11,0.73-1.77,0.73C167.929,180.87,167.289,180.6,166.819,180.14z M186.389,176.56 c0.92-0.93,2.6-0.93,3.53,0c0.47,0.46,0.74,1.11,0.74,1.76c0,0.66-0.27,1.31-0.74,1.77c-0.46,0.47-1.11,0.73-1.76,0.73 c-0.66,0-1.31-0.26-1.77-0.73c-0.47-0.46-0.73-1.11-0.73-1.77C185.659,177.67,185.919,177.02,186.389,176.56z M181.898,189.765 c0.34-0.973,1.265-1.671,2.355-1.674c0.002,0,0.004,0,0.006,0c1.378,0,2.497,1.115,2.5,2.494c0.002,0.992-0.425,2.825-3.312,3.952 c-1.392,0.543-3.191,0.844-5.064,0.848c-0.015,0-0.03,0-0.044,0c-4.991,0-8.346-1.911-8.353-4.763 c-0.003-1.381,1.113-2.503,2.494-2.506c0.002,0,0.004,0,0.006,0c1.087,0,2.013,0.694,2.357,1.664 c0.511,0.252,1.758,0.639,3.529,0.605C180.164,190.381,181.388,190.019,181.898,189.765z"></path>
                                            <path style="fill:#5c5c5c;" d="M156.468,308.103l-5.532,52.011h21.701l3.245-37.104c0.121-1.375,1.338-2.387,2.708-2.273 c1.227,0.107,2.164,1.086,2.267,2.272l0.005,0l3.269,37.105h21.677l-5.532-52.011H156.468z"></path>
                                            <path style="fill:#5c5c5c;" d="M305.72,308.103h-43.809l-5.532,52.011h21.701l3.245-37.104c0.121-1.375,1.331-2.387,2.708-2.273 c1.227,0.107,2.164,1.086,2.267,2.272l0.005,0l3.269,37.105h21.677L305.72,308.103z"></path>
                                            <polygon style="fill:#E5CBBD;" points="302.684,423.149 305.693,365.114 291.785,365.114 291.765,423.149 "></polygon>
                                            <path style="fill:#fffafa;" d="M305.052,428.149h-13.288l-0.002,6.651h19.955c0.021-0.014,0.043-0.027,0.064-0.042 c-0.227-1.535-0.772-3.489-2.071-4.861C308.599,428.726,307.075,428.154,305.052,428.149z"></path>
                                            <path style="fill:#f0e5ff;" d="M321.964,225.443c-0.045-0.209-0.59-2.568-2.193-5.337l-8.009,23.46l2.36,7.358l12.598-7.452 C326.719,243.472,321.973,225.483,321.964,225.443z"></path>
                                            <path style="fill:#fffafa;" d="M262.58,428.149c-2.024,0.004-3.547,0.577-4.657,1.749c-1.31,1.383-1.855,3.36-2.078,4.902h20.025 l-0.003-6.651H262.58z"></path>
                                            <polygon style="fill:#E5CBBD;" points="275.867,423.149 275.847,365.114 261.94,365.114 264.948,423.149 "></polygon>
                                            <path style="fill:#b59ebd;" d="M311.381,256.796l-0.91,48.697l0.301,2.826h17.25l-15.494-51.167 c-0.243-0.017-0.485-0.055-0.718-0.144C311.659,256.951,311.516,256.88,311.381,256.796z"></path>
                                            <path style="fill:#000000;" d="M319.508,434.801h18.729v-14.648h-10.914C326.582,423.368,324.592,429.493,319.508,434.801z"></path>
                                            <path style="fill:#ffe0d6;" d="M393.101,143.419l-14.906,6.772c-0.525,1.513-1.189,2.862-1.945,4.066l26.1,85.728 c0.018,0.059,0.034,0.118,0.047,0.178c0.348,1.543,1.276,2.858,2.614,3.703c1.338,0.846,2.926,1.118,4.467,0.771 c1.544-0.349,2.859-1.277,3.705-2.615c0.845-1.337,1.118-2.924,0.769-4.467L393.101,143.419z"></path>
                                            <path style="fill:#ffe0d6;" d="M332.432,316.118c-1.127-0.715-2.042-1.674-2.691-2.798h-13.848 c0.217,9.863,1.676,48.171,11.438,101.833h10.905v-97.904c-0.484,0.087-0.969,0.142-1.452,0.142 C335.256,317.39,333.755,316.958,332.432,316.118z"></path>
                                            <path style="fill:#ffe0d6;" d="M343.685,313.604c-0.14,0.221-0.29,0.432-0.448,0.636v100.913h10.907 c9.767-53.693,11.221-91.974,11.437-101.833h-21.734C343.792,313.414,343.744,313.511,343.685,313.604z"></path>
                                            <path style="fill:#000000;" d="M343.237,420.152v14.648h18.731c-5.084-5.308-7.074-11.433-7.815-14.648H343.237z"></path>
                                            <path style="fill:#ffe2cc;" d="M136.879,422.471h-21v12.33h29.491c0.177-1.603,0.608-3.708,1.631-5.698 C145.193,424.645,141.873,422.471,136.879,422.471z"></path>
                                            <path style="fill:#E5CBBD;" d="M326.823,249.221l-9.73,5.755l16.583,54.767c0.018,0.059,0.034,0.119,0.047,0.18 c0.184,0.821,0.676,1.522,1.387,1.974c0.711,0.451,1.555,0.598,2.378,0.414c0.822-0.184,1.523-0.676,1.974-1.387 c0.451-0.711,0.599-1.555,0.415-2.376L326.823,249.221z"></path>
                                            <path style="fill:#E5CBBD;" d="M221.379,249.221l-9.73,5.755l16.583,54.767c0.018,0.059,0.034,0.119,0.047,0.18 c0.184,0.821,0.676,1.522,1.387,1.974c0.711,0.451,1.555,0.598,2.378,0.414c0.822-0.184,1.523-0.676,1.974-1.387 c0.451-0.711,0.599-1.555,0.415-2.376L221.379,249.221z"></path>
                                            <path style="fill:#f0e5ff;" d="M261.003,243.495l1.114,59.607h43.397l1.114-59.607c0.001-0.049,0.121-0.722,0.134-0.761 l9.31-27.272c-1.999-1.831-4.627-3.414-8.072-4.197c-0.089-0.02-10.905-3.768-10.905-3.768c-1.902,3.909-7.113,6.724-13.242,6.724 c-0.011,0-0.021,0-0.032,0c-0.004,0-0.007,0-0.011,0c-0.011,0-0.021,0-0.032,0c-6.13,0-11.34-2.815-13.242-6.724 c0,0-10.816,3.748-10.905,3.768c-3.445,0.784-6.074,2.366-8.072,4.197l9.31,27.272 C260.883,242.773,261.002,243.447,261.003,243.495z"></path>
                                            <polygon style="fill:#E5CBBD;" points="170.423,423.149 170.403,365.114 156.495,365.114 159.504,423.149 "></polygon>
                                            <polygon style="fill:#E5CBBD;" points="186.341,365.114 186.321,423.149 197.239,423.149 200.248,365.114 "></polygon>
                                            <path style="fill:#fffafa;" d="M157.136,428.149c-2.023,0.004-3.547,0.577-4.657,1.749c-1.31,1.383-1.854,3.36-2.078,4.902h20.025 l-0.002-6.651H157.136z"></path>
                                            <path style="fill:#f0e5ff;" d="M202.556,211.265c-0.089-0.02-0.178-0.045-0.265-0.076l-10.64-3.692 c-1.902,3.909-7.113,6.724-13.242,6.724c-0.011,0-0.021,0-0.032,0c-0.003,0-0.007,0-0.011,0c-0.011,0-0.021,0-0.032,0 c-6.13,0-11.34-2.815-13.242-6.724l-10.64,3.692c-0.087,0.03-0.176,0.056-0.265,0.076c-3.445,0.784-6.074,2.366-8.072,4.197 l9.31,27.272c0.013,0.039,0.133,0.712,0.134,0.761l1.114,59.607h43.398l1.114-59.607c0.001-0.049,0.121-0.722,0.134-0.761 l9.31-27.272C208.63,213.631,206.001,212.049,202.556,211.265z"></path>
                                            <path style="fill:#fffafa;" d="M186.32,428.149l-0.002,6.651h20.025c-0.223-1.54-0.768-3.519-2.078-4.902 c-1.11-1.172-2.633-1.745-4.657-1.749H186.32z"></path>
                                            <polygon style="fill:#E5CBBD;" points="233.654,281.737 237.35,298.535 250.539,254.976 240.809,249.221 "></polygon>
                                            <path style="fill:#b59ebd;" d="M374.406,129.451c4.084,3.703,5.379,9.424,5.002,14.697l12.588-5.719l-2.327-10.506 c-0.164-0.712-4.308-17.873-21.061-21.811l-1.976-0.474c-1.806,9.234-11.755,15.238-25.896,15.238 c-14.139,0-24.088-6.004-25.894-15.237l-1.964,0.471c-16.765,3.941-20.91,21.102-21.078,21.83l-2.323,10.489l12.588,5.718 c-0.377-5.273,0.919-10.994,5.003-14.696c1.024-0.928,2.604-0.849,3.532,0.173c0.927,1.023,0.85,2.604-0.173,3.532 c-3.872,3.509-4.158,10.384-2.439,15.361c1.341,3.884,3.715,6.408,6.195,6.585c1.252,0.09,2.243,1.094,2.317,2.347l0.852,14.491 c0.033,0.552-0.119,1.1-0.431,1.557c-4.467,6.54-8.337,17.165-11.517,31.59l3.845,1.335c13.99,3.265,17.316,16.689,17.592,17.914 l5.196,19.687c0.237,0.896-0.049,1.826-0.7,2.445c0,0,13.532,61.566,13.565,61.852h40.702 c-0.177-16.261-2.023-106.967-21.05-134.823c-0.312-0.457-0.464-1.005-0.431-1.557l0.854-14.491 c0.074-1.253,1.065-2.257,2.317-2.347c2.479-0.177,4.852-2.7,6.193-6.584c1.719-4.978,1.434-11.854-2.438-15.363 c-1.023-0.927-1.1-2.508-0.173-3.531C371.802,128.602,373.384,128.523,374.406,129.451z"></path>
                                            <path style="fill:#f0e5ff;" d="M216.549,225.563c-0.011-0.04-0.02-0.08-0.029-0.12c-0.045-0.209-0.59-2.568-2.193-5.337 l-8.009,23.46l2.36,7.358l12.598-7.452L216.549,225.563z"></path>
                                            <path style="fill:#f0e5ff;" d="M245.666,225.451c-0.007,0.035-0.018,0.077-0.027,0.112l-4.727,17.909l12.598,7.452l2.36-7.358 l-8.008-23.46C246.258,222.877,245.713,225.239,245.666,225.451z"></path>
                                            <path style="fill:#000000;" d="M172.485,188.116c-0.002,0-0.004,0-0.006,0c-1.381,0.003-2.498,1.125-2.494,2.506 c0.007,2.852,3.361,4.763,8.353,4.763c0.015,0,0.03,0,0.044,0c1.874-0.004,3.672-0.305,5.064-0.848 c2.887-1.126,3.314-2.959,3.312-3.952c-0.003-1.379-1.122-2.494-2.5-2.494c-0.002,0-0.004,0-0.006,0 c-1.089,0.003-2.014,0.701-2.355,1.674c-0.51,0.254-1.734,0.616-3.527,0.62c-1.771,0.034-3.018-0.353-3.529-0.605 C174.498,188.81,173.572,188.116,172.485,188.116z"></path>
                                            <path style="fill:#000000;" d="M171.089,178.37c0-0.66-0.27-1.31-0.73-1.77c-0.93-0.93-2.61-0.93-3.54,0 c-0.46,0.46-0.73,1.11-0.73,1.77c0,0.66,0.27,1.3,0.73,1.77c0.47,0.46,1.11,0.73,1.77,0.73c0.66,0,1.3-0.27,1.77-0.73 C170.819,179.67,171.089,179.03,171.089,178.37z"></path>
                                            <path style="fill:#000000;" d="M188.159,180.82c0.65,0,1.3-0.26,1.76-0.73c0.47-0.46,0.74-1.11,0.74-1.77 c0-0.65-0.27-1.3-0.74-1.76c-0.93-0.93-2.61-0.93-3.53,0c-0.47,0.46-0.73,1.11-0.73,1.76c0,0.66,0.26,1.31,0.73,1.77 C186.849,180.56,187.499,180.82,188.159,180.82z"></path>
                                            <path style="fill:#000000;" d="M288.891,194.537c2.887-1.126,3.315-2.959,3.312-3.952c-0.003-1.379-1.122-2.494-2.5-2.494 c-0.002,0-0.004,0-0.006,0c-1.089,0.003-2.014,0.701-2.355,1.674c-0.51,0.254-1.734,0.616-3.527,0.62c-0.01,0-0.02,0-0.03,0 c-1.777,0-2.991-0.355-3.499-0.605c-0.344-0.97-1.27-1.664-2.357-1.664c-0.002,0-0.004,0-0.006,0 c-1.381,0.003-2.498,1.125-2.494,2.506c0.007,2.852,3.361,4.763,8.353,4.763c0.015,0,0.03,0,0.044,0 C285.7,195.381,287.499,195.08,288.891,194.537z"></path>
                                            <path style="fill:#000000;" d="M276.529,178.37c0-0.66-0.26-1.3-0.73-1.77c-0.93-0.93-2.6-0.93-3.53,0 c-0.47,0.46-0.74,1.11-0.74,1.77c0,0.66,0.27,1.3,0.74,1.76c0.461,0.47,1.11,0.74,1.76,0.74c0.66,0,1.31-0.27,1.77-0.74 C276.269,179.67,276.529,179.02,276.529,178.37z"></path>
                                            <path style="fill:#000000;" d="M293.599,180.82c0.66,0,1.3-0.26,1.77-0.73c0.46-0.46,0.73-1.11,0.73-1.76 c0-0.66-0.27-1.31-0.73-1.77c-0.94-0.93-2.61-0.93-3.54,0c-0.46,0.46-0.73,1.11-0.73,1.77c0,0.65,0.27,1.3,0.73,1.76 C292.299,180.56,292.939,180.82,293.599,180.82z"></path>
                                            <path style="fill:#000000;" d="M333.997,70.22c-1.381,0-2.5,1.119-2.5,2.5c0,3.14,3.8,5.333,9.24,5.333s9.24-2.193,9.24-5.333 c0-1.381-1.119-2.5-2.5-2.5c-1.189,0-2.185,0.831-2.438,1.943c-0.493,0.32-1.959,0.89-4.303,0.89c-2.343,0-3.81-0.57-4.303-0.89 C336.181,71.05,335.186,70.22,333.997,70.22z"></path>
                                            <path style="fill:#000000;" d="M332.789,60.7c0-0.66-0.26-1.3-0.73-1.77c-0.93-0.93-2.6-0.93-3.54,0 c-0.46,0.47-0.73,1.11-0.73,1.77c0,0.66,0.27,1.3,0.73,1.77c0.47,0.46,1.12,0.73,1.77,0.73c0.66,0,1.31-0.27,1.77-0.73 C332.529,62,332.789,61.36,332.789,60.7z"></path>
                                            <path style="fill:#000000;" d="M351.179,63.2c0.66,0,1.31-0.27,1.77-0.73c0.47-0.47,0.73-1.11,0.73-1.77c0-0.66-0.26-1.3-0.73-1.77 c-0.93-0.93-2.61-0.93-3.53,0c-0.47,0.47-0.74,1.11-0.74,1.77c0,0.66,0.27,1.3,0.74,1.76C349.879,62.93,350.519,63.2,351.179,63.2z "></path>
                                            <path style="fill:#000000;" d="M397.315,139.322c-0.001-0.005-0.002-0.011-0.004-0.016l-2.763-12.475 c-0.147-0.651-2.976-12.531-13.157-20.175c15.705-17.519-2.84-55.854-5.516-61.139c-0.125-8.82-2.955-15.947-8.416-21.191 c-9.995-9.598-25.223-9.385-26.723-9.34c-1.518-0.044-16.729-0.254-26.719,9.339c-5.462,5.244-8.292,12.372-8.416,21.191 c-2.677,5.285-21.223,43.622-5.515,61.14c-10.184,7.645-13.013,19.524-13.163,20.185l-2.931,13.235 c-0.058,0-0.12-0.002-0.176-0.002c-7.487,0-26.061,2.485-26.061,33.659c0,12.099,5.494,22.65,13.577,28.091v0.103l-12.948,4.494 c-13.99,3.265-17.316,16.689-17.592,17.914l-5.196,19.687c-0.237,0.896,0.049,1.826,0.7,2.445l-5.202,23.638l-5.202-23.638 c0.65-0.619,0.936-1.549,0.7-2.445l-5.196-19.687c-0.275-1.226-3.602-14.65-17.592-17.914l-12.948-4.494v-0.102 c8.084-5.442,13.578-15.993,13.578-28.092c0-30.923-18.573-33.659-26.062-33.659c-1.438,0-3.227,0.113-5.187,0.48l-5.658-28.846 c-0.218-1.976-2.823-20.049-25.426-25.96l-20.225-6.97v-8.502c5.668-6.486,9.274-16.138,9.274-26.907l-0.001-9.492 c0-0.003,0.001-0.005,0.001-0.007c0-0.002-0.001-0.005-0.001-0.007l-0.001-15.528c0.01-0.248,0.18-6.121-4.698-11.193 C121.893,2.403,114.635,0,104.877,0C95.119,0,87.86,2.403,83.302,7.142c-4.878,5.072-4.708,10.945-4.7,11.096V43.37 c0,10.769,3.606,20.421,9.274,26.907v8.502l-20.225,6.97c-22.604,5.912-25.208,23.987-25.426,25.961 c0,0-21.391,109.424-21.389,109.461c0.001,0.024-0.006,0.047-0.004,0.071l0.976,13.347l-1.01,7.659 c-0.406,3.125,0.429,6.222,2.351,8.719c1.922,2.498,4.702,4.097,7.827,4.503c0.517,0.067,1.034,0.101,1.547,0.101 c2.587,0,5.089-0.847,7.173-2.452c2.468-1.9,4.059-4.638,4.488-7.719l2.13-9.859l7.23-13.285 c0.012-0.022,11.367-56.87,11.367-56.87v71.961c0,0.005,0.002,0.009,0.002,0.014c0,0.005-0.002,0.009-0.002,0.014v181.948 c-1.306,0.706-2.486,1.607-3.529,2.712c-5.49,5.816-5.026,15.021-5.003,15.41c0.076,1.323,1.171,2.356,2.496,2.356h37.5 c1.381,0,2.5-1.119,2.5-2.5v-17.266l6.002-115.548l6.002,115.548v17.266c0,1.381,1.119,2.5,2.5,2.5h59.549 c0.663,0,1.299-0.264,1.768-0.732c0.469-0.469,0.732-1.105,0.732-1.769l-0.024-72.231c1.076-0.208,1.916-1.107,2.015-2.237 l0.963-11.011l0.97,11.013c0.099,1.12,0.926,2.011,1.989,2.228l-0.024,72.239c0,0.663,0.263,1.299,0.732,1.769 c0.469,0.469,1.105,0.732,1.768,0.732h25.167c1.323,0,2.417-1.03,2.496-2.351c0.017-0.275,0.359-6.795-3.557-10.962 c-1.521-1.618-3.427-2.653-5.688-3.094l3.022-58.28h3.333c0.709,0,1.385-0.301,1.859-0.828c0.474-0.527,0.702-1.231,0.627-1.937 l-6.048-56.855l0.91-48.697c0.135,0.084,0.278,0.155,0.429,0.212c0.233,0.089,0.475,0.128,0.718,0.144l16.339,53.959 c0.492,2.083,1.755,3.858,3.566,5.007c1.323,0.839,2.823,1.272,4.353,1.272c0.597,0,1.198-0.066,1.795-0.199 c2.125-0.475,3.938-1.749,5.105-3.587c0.935-1.474,1.356-3.169,1.246-4.874l15.617-51.578c0.243-0.017,0.485-0.055,0.718-0.144 c0.15-0.057,0.294-0.128,0.429-0.212l0.91,48.697l-6.048,56.855c-0.075,0.705,0.153,1.409,0.627,1.937 c0.474,0.527,1.15,0.828,1.859,0.828h3.333l3.022,58.28c-2.261,0.441-4.167,1.477-5.688,3.094 c-3.916,4.167-3.574,10.686-3.557,10.962c0.079,1.32,1.173,2.351,2.496,2.351h25.167c0.663,0,1.299-0.264,1.768-0.732 c0.469-0.469,0.732-1.105,0.732-1.769l-0.024-72.231c1.076-0.208,1.916-1.107,2.015-2.237l0.963-11.011l0.97,11.013 c0.099,1.12,0.926,2.011,1.989,2.228L286.76,437.3c0,0.663,0.263,1.299,0.732,1.769c0.469,0.469,1.105,0.732,1.768,0.732h79.764 c1.119,0,2.102-0.744,2.406-1.821c0.304-1.078-0.145-2.225-1.1-2.811c-9.186-5.633-11.25-15.549-11.57-17.473 c10.118-54.99,11.604-94.362,11.82-104.377h17.541c1.381,0,2.5-1.119,2.5-2.5c0-4.378-0.246-106.844-21.459-139.422l0.691-11.74 c0.853-0.277,1.67-0.688,2.448-1.204l25.241,82.904c0.659,2.805,2.36,5.194,4.799,6.735c1.768,1.117,3.771,1.692,5.812,1.692 c0.807-0.001,1.62-0.09,2.426-0.272c2.847-0.642,5.272-2.355,6.83-4.822c1.558-2.467,2.062-5.393,1.421-8.229L397.315,139.322z M343.237,20.038c4.455,0.252,14.153,1.551,20.759,7.895c4.568,4.386,6.884,10.508,6.884,18.197c0,0.403,0.098,0.801,0.284,1.158 c0.22,0.421,21.264,41.25,5.907,56.656c-2.175-1.125-4.596-2.059-7.307-2.696l-16.328-3.918V84.747 c6.032-5.448,10.004-14.66,10.004-25.086v-6.889h-0.003c0.001-1.178-0.831-2.228-2.03-2.456c-0.182-0.035-18.17-3.589-18.17-15.185 V20.038z M350.353,101.732l11.383,2.731c-1.27,6.898-9.375,11.413-20.999,11.413c-11.623,0-19.727-4.514-20.997-11.413 l11.383-2.731c1.124-0.27,1.917-1.275,1.917-2.431V88.144c2.405,1.16,4.996,1.795,7.697,1.795c2.702,0,5.294-0.636,7.699-1.795 v11.158C348.436,100.457,349.229,101.462,350.353,101.732z M340.737,43.655c4.437,6.885,13.605,10.003,17.703,11.093v4.912 c0,13.938-7.941,25.278-17.703,25.278s-17.703-11.34-17.703-25.278v-4.912C327.133,53.658,336.3,50.541,340.737,43.655z M310.312,47.288c0.187-0.357,0.284-0.755,0.284-1.158c0-7.677,2.309-13.792,6.862-18.177c6.579-6.334,16.311-7.651,20.778-7.912 V35.13c0,11.555-17.991,15.151-18.173,15.186c-1.198,0.229-2.028,1.279-2.027,2.456h-0.003v6.889 c0,10.427,3.973,19.64,10.006,25.088V97.33l-16.316,3.916c-2.715,0.638-5.139,1.573-7.317,2.699 C289.045,88.54,310.092,47.709,310.312,47.288z M283.816,145.075c10.262,0,20.765,6.927,20.765,22.491h-21.31l-5.152-8.206 c-0.734-1.17-2.276-1.522-3.446-0.788c-0.33,0.207-0.587,0.483-0.781,0.792l-0.007-0.004l-5.152,8.206h-5.68 C264.538,152.822,271.638,145.075,283.816,145.075z M262.755,173.734c0-0.395,0.008-0.781,0.014-1.168h7.346 c0.86,0,1.66-0.442,2.117-1.171l3.77-6.004l3.77,6.004c0.457,0.729,1.257,1.171,2.117,1.171h22.976 c0.006,0.387,0.014,0.773,0.014,1.168c0,14.895-9.449,27.012-21.062,27.012C272.203,200.746,262.755,188.629,262.755,173.734z M302.433,196.106c-0.618,2.331-1.214,4.772-1.786,7.331l-4.347-1.509v-0.102C298.572,200.297,300.635,198.362,302.433,196.106z M292.368,205.75c-1.201,1.841-4.448,3.471-8.515,3.471c-0.013,0-0.024,0.001-0.038,0c-0.001,0-0.003,0-0.005,0 c-4.097,0.018-7.35-1.621-8.549-3.469c0.478-0.335,0.823-0.826,0.976-1.39c2.399,0.898,4.943,1.384,7.578,1.384 c2.635,0,5.179-0.487,7.578-1.384C291.548,204.925,291.891,205.416,292.368,205.75z M199.434,173.734 c0,14.895-9.449,27.012-21.062,27.012c-11.613,0-21.062-12.117-21.062-27.012c0-0.395,0.008-0.781,0.014-1.168h7.346 c0.86,0,1.66-0.442,2.117-1.171l3.77-6.004l3.77,6.004c0.457,0.729,1.257,1.171,2.117,1.171h22.976 C199.426,172.953,199.434,173.339,199.434,173.734z M186.924,205.75c-1.201,1.841-4.448,3.471-8.515,3.471 c-0.013,0-0.025,0.001-0.038,0c-0.009,0.001-0.025,0-0.038,0c-4.066,0-7.314-1.629-8.515-3.471 c0.478-0.335,0.821-0.825,0.974-1.388c2.399,0.898,4.943,1.384,7.578,1.384c2.635,0,5.179-0.487,7.578-1.384 C186.103,204.925,186.447,205.416,186.924,205.75z M165.887,201.826v0.103l-8.16,2.832l-4.331-21.894 C155.375,191.014,159.924,197.811,165.887,201.826z M178.372,145.075c12.179,0,19.279,7.747,20.765,22.491h-21.31l-5.152-8.206 l-0.007,0.004c-0.194-0.31-0.451-0.585-0.781-0.792c-1.17-0.734-2.712-0.381-3.446,0.788l-5.152,8.206h-5.68 C159.094,152.822,166.194,145.075,178.372,145.075z M162.562,112.299c0.008,0.087,5.804,29.663,5.804,29.663 c-7.276,2.945-16.056,10.145-16.056,31.772c0,2.044,0.163,4.043,0.463,5.981l-7.847-39.668l13.317-38.23 C161.979,107.037,162.527,111.937,162.562,112.299z M135.468,243.472l4.727-17.909c0.009-0.035,0.02-0.077,0.027-0.112 c0.046-0.212,0.592-2.574,2.196-5.345l8.008,23.46l-2.36,7.358L135.468,243.472z M145.095,254.976l-16.583,54.767 c-0.018,0.059-0.034,0.119-0.047,0.18c-0.184,0.821-0.676,1.522-1.387,1.974c-0.711,0.452-1.556,0.6-2.379,0.414 c-0.821-0.184-1.522-0.676-1.974-1.387c-0.451-0.711-0.599-1.555-0.413-2.385l13.054-59.318L145.095,254.976z M152.958,206.416 l-0.018,0.006c-3.243,0.757-5.906,2.063-8.098,3.633v-44.668L152.958,206.416z M130.047,107.141c0.455,0,0.908-0.124,1.307-0.369 c0.708-0.435,1.155-1.193,1.191-2.023l0.726-16.754c0,0,7.418,2.554,7.48,2.57c6.105,1.584,10.502,4.167,13.677,7.008 l-14.447,41.473c-0.016,0.045-0.139,0.765-0.139,0.822v75.098c-3.263,4.334-4.342,8.697-4.494,9.371l-2.774,10.511h-25.195V109.54 l5.172-10.122l16.459,7.498C129.341,107.066,129.694,107.141,130.047,107.141z M104.877,103.447l-12-23.487v-5.176 c3.6,2.497,7.678,3.916,12,3.916c4.322,0,8.4-1.419,12-3.916v5.176L104.877,103.447z M128.34,86.295l-0.63,14.533l-12.882-5.868 l5.788-11.327L128.34,86.295z M86.983,10.528C90.573,6.86,96.593,5,104.877,5s14.304,1.86,17.894,5.528 c3.431,3.506,3.386,7.466,3.381,7.71v12.776c-3.562-1.096-5.369-4.762-5.369-10.952c0-1.381-1.119-2.5-2.5-2.5c0,0,0,0-0.001,0 c0,0,0,0-0.001,0c-1.381,0-2.5,1.119-2.5,2.5c0,1.96-4.248,4.807-10.903,4.807c-6.656,0-10.903-2.847-10.903-4.807 c0-1.381-1.119-2.5-2.5-2.5c0,0,0,0-0.001,0h-0.001c-1.381,0-2.5,1.119-2.5,2.5c0,6.191-1.807,9.856-5.37,10.953l-0.001-12.853 C83.597,17.995,83.552,14.034,86.983,10.528z M83.602,43.37l-0.001-7.216c4.82-0.817,8.115-4.066,9.551-9.346 c2.863,1.9,6.982,3.061,11.724,3.061c4.742,0,8.861-1.161,11.724-3.061c1.435,5.28,4.731,8.529,9.55,9.346v7.216 c0,16.724-9.544,30.331-21.274,30.331C93.146,73.7,83.602,60.094,83.602,43.37z M89.138,83.633l5.788,11.327l-12.882,5.868 l-0.63-14.533L89.138,83.633z M39.241,244.648c-0.234,1.801-1.156,3.403-2.595,4.511c-1.439,1.108-3.225,1.587-5.025,1.355 c-1.8-0.234-3.402-1.155-4.51-2.595c-1.108-1.439-1.589-3.224-1.355-5.021l0.756-5.734h14.337 C40.849,237.164,39.25,244.579,39.241,244.648z M42.461,232.164H26.644l-0.628-8.603h21.127L42.461,232.164z M49.296,218.562 H26.364c0,0,20.82-106.175,20.828-106.262c0.008-0.09,0.526-5.085,4.338-10.427l13.298,38.176L49.296,218.562z M55.34,97.611 c3.176-2.863,7.569-5.466,13.663-7.046c0.063-0.016,7.48-2.57,7.48-2.57l0.726,16.754c0.036,0.83,0.482,1.588,1.191,2.023 c0.399,0.245,0.852,0.369,1.307,0.369c0.353,0,0.706-0.075,1.037-0.225l16.459-7.498l5.172,10.122v125.308H69.912v-94.98 c0-0.058-0.079-0.59-0.106-0.686C69.792,139.136,55.34,97.611,55.34,97.611z M93.875,434.801H61.453 c0.226-2.55,1.001-6.617,3.565-9.333c1.903-2.017,4.473-2.997,7.856-2.997h21V434.801z M107.375,256.201l-0.017,0.001 c-0.065-1.263-1.064-2.3-2.354-2.368c-1.388-0.066-2.555,0.988-2.627,2.367l-8.377,161.27H69.912V239.848h61.342l-1.102,4.176 c-0.237,0.896,0.049,1.826,0.7,2.445l-13.421,60.987c-0.475,2.125-0.095,4.309,1.072,6.148c1.167,1.839,2.98,3.113,5.105,3.587 c0.597,0.133,1.198,0.199,1.795,0.199c1.529,0,3.03-0.433,4.353-1.272c1.811-1.149,3.074-2.924,3.566-5.007l6.52-21.534v127.893 h-24.089L107.375,256.201z M145.37,434.801h-29.491v-12.33h21c4.994,0,8.314,2.174,10.122,6.632 C145.978,431.093,145.547,433.198,145.37,434.801z M144.842,419.355v-146.29l4.818-15.912c0.243-0.017,0.485-0.055,0.718-0.144 c0.15-0.057,0.294-0.128,0.429-0.212l0.91,48.697l-6.048,56.855c-0.075,0.705,0.153,1.409,0.627,1.937 c0.474,0.527,1.15,0.828,1.859,0.828h3.333l3.022,58.28c-1.474,0.288-2.78,0.854-3.944,1.643 C149.136,422.54,147.202,420.632,144.842,419.355z M150.402,434.801c0.223-1.542,0.768-3.519,2.078-4.902 c1.11-1.172,2.633-1.745,4.657-1.749h13.288l0.002,6.651H150.402z M156.495,365.114h13.908l0.019,58.036h-10.918L156.495,365.114z M204.264,429.898c1.31,1.384,1.855,3.362,2.078,4.902h-20.025l0.002-6.651h13.288 C201.631,428.154,203.155,428.726,204.264,429.898z M186.321,423.149l0.02-58.036h13.908l-3.009,58.036H186.321z M205.808,360.114 h-21.677l-3.269-37.105l-0.005,0c-0.104-1.186-1.04-2.165-2.267-2.272c-1.37-0.114-2.588,0.898-2.708,2.273l-3.245,37.104h-21.701 l5.532-52.011h43.809L205.808,360.114z M201.319,242.734c-0.013,0.039-0.133,0.712-0.134,0.761l-1.114,59.607h-43.398 l-1.114-59.607c-0.001-0.048-0.121-0.722-0.134-0.761l-9.31-27.272c1.999-1.831,4.627-3.414,8.072-4.197 c0.089-0.02,0.178-0.045,0.265-0.076l10.64-3.692c1.902,3.909,7.112,6.724,13.242,6.724c0.01,0,0.021,0,0.032,0 c0.003,0,0.007,0,0.011,0c0.011,0,0.021,0,0.032,0c6.129,0,11.34-2.815,13.242-6.724l10.64,3.692 c0.087,0.03,0.176,0.056,0.265,0.076c3.445,0.784,6.074,2.366,8.072,4.197L201.319,242.734z M206.318,243.566l8.009-23.46 c1.603,2.769,2.148,5.128,2.193,5.337c0.009,0.04,0.018,0.08,0.029,0.12l4.727,17.909l-12.598,7.452L206.318,243.566z M234.019,310.924c-0.451,0.711-1.152,1.204-1.974,1.387c-0.824,0.184-1.667,0.037-2.378-0.414 c-0.711-0.451-1.204-1.152-1.387-1.974c-0.014-0.061-0.029-0.121-0.047-0.18l-16.583-54.767l9.73-5.755l13.056,59.327 C234.618,309.369,234.47,310.213,234.019,310.924z M237.35,298.535l-3.697-16.798l7.156-32.517l9.73,5.755L237.35,298.535z M253.51,250.924l-12.598-7.452l4.727-17.909c0.009-0.035,0.02-0.077,0.027-0.112c0.046-0.212,0.592-2.574,2.196-5.345l8.008,23.46 L253.51,250.924z M251.559,215.462c1.998-1.831,4.627-3.414,8.072-4.197c0.089-0.02,10.905-3.768,10.905-3.768 c1.902,3.909,7.112,6.724,13.242,6.724c0.01,0,0.021,0,0.032,0c0.003,0,0.007,0,0.011,0c0.011,0,0.021,0,0.032,0 c6.129,0,11.34-2.815,13.242-6.724c0,0,10.816,3.748,10.905,3.768c3.445,0.784,6.074,2.366,8.072,4.197l-9.31,27.272 c-0.013,0.039-0.133,0.712-0.134,0.761l-1.114,59.607h-43.397l-1.114-59.607c-0.001-0.048-0.121-0.722-0.134-0.761L251.559,215.462 z M311.762,243.566l8.009-23.46c1.603,2.769,2.148,5.128,2.193,5.337c0.009,0.04,4.755,18.029,4.755,18.029l-12.598,7.452 L311.762,243.566z M328.022,308.32h-17.25l-0.301-2.826l0.91-48.697c0.135,0.084,0.278,0.155,0.429,0.212 c0.233,0.089,0.475,0.128,0.718,0.144L328.022,308.32z M255.846,434.801c0.223-1.542,0.768-3.519,2.078-4.902 c1.11-1.172,2.633-1.745,4.657-1.749h13.288l0.003,6.651H255.846z M261.94,365.114h13.908l0.02,58.036h-10.919L261.94,365.114z M286.306,323.009l-0.005,0c-0.104-1.186-1.04-2.165-2.267-2.272c-1.378-0.114-2.588,0.898-2.708,2.273l-3.245,37.104H256.38 l5.532-52.011h43.809l5.532,52.011h-21.677L286.306,323.009z M305.693,365.114l-3.009,58.036h-10.918l0.02-58.036H305.693z M311.716,434.801h-19.955l0.002-6.651h13.288c2.023,0.004,3.547,0.577,4.657,1.749c1.299,1.372,1.845,3.326,2.071,4.861 C311.759,434.773,311.737,434.787,311.716,434.801z M313.366,426.488c-1.521-1.618-3.427-2.653-5.689-3.094l3.022-58.28h3.333 c0.263,0,0.517-0.054,0.762-0.133c1.749,15.116,4.275,32.903,7.921,52.716c-0.252,1.518-1.594,8.024-6.676,13.469 C315.512,429.558,314.684,427.891,313.366,426.488z M338.237,434.801h-18.729c5.084-5.308,7.074-11.433,7.815-14.648h10.914 V434.801z M338.237,415.152h-10.905c-9.763-53.662-11.221-91.97-11.438-101.833h13.848c0.649,1.124,1.563,2.083,2.691,2.798 c1.323,0.839,2.823,1.272,4.353,1.272c0.483,0,0.968-0.055,1.452-0.142V415.152z M339.464,310.924 c-0.451,0.711-1.152,1.204-1.974,1.387c-0.823,0.184-1.667,0.037-2.378-0.414c-0.711-0.451-1.204-1.152-1.387-1.974 c-0.014-0.061-0.029-0.121-0.047-0.18l-16.583-54.767l9.73-5.755l13.056,59.327C340.062,309.369,339.915,310.213,339.464,310.924z M361.968,434.801h-18.731v-14.648h10.916C354.894,423.368,356.884,429.493,361.968,434.801z M354.144,415.152h-10.907V314.239 c0.158-0.204,0.308-0.415,0.448-0.636c0.059-0.093,0.107-0.189,0.161-0.284h21.734C365.365,323.178,363.911,361.46,354.144,415.152 z M371.048,133.155c3.871,3.51,4.156,10.385,2.438,15.363c-1.341,3.883-3.714,6.406-6.193,6.584 c-1.252,0.09-2.243,1.094-2.317,2.347l-0.854,14.491c-0.033,0.552,0.119,1.1,0.431,1.557 c19.026,27.856,20.873,118.562,21.05,134.823h-40.702c-0.033-0.286-13.565-61.852-13.565-61.852c0.65-0.619,0.937-1.549,0.7-2.445 l-5.196-19.687c-0.275-1.226-3.602-14.65-17.592-17.914l-3.845-1.335c3.18-14.426,7.05-25.05,11.517-31.59 c0.312-0.457,0.464-1.004,0.431-1.557l-0.852-14.491c-0.074-1.253-1.065-2.257-2.317-2.347c-2.48-0.177-4.853-2.701-6.195-6.585 c-1.718-4.977-1.432-11.852,2.439-15.361c1.023-0.928,1.101-2.508,0.173-3.532c-0.927-1.022-2.508-1.101-3.532-0.173 c-4.085,3.702-5.381,9.423-5.003,14.696l-12.588-5.718l2.323-10.489c0.168-0.728,4.313-17.89,21.078-21.83l1.964-0.471 c1.806,9.233,11.754,15.237,25.894,15.237c14.14,0,24.09-6.004,25.896-15.238l1.976,0.474 c16.753,3.938,20.897,21.099,21.061,21.811l2.327,10.506l-12.588,5.719c0.377-5.273-0.918-10.995-5.002-14.697 c-1.023-0.928-2.604-0.85-3.531,0.173C369.948,130.647,370.025,132.228,371.048,133.155z M308.486,160.715l0.689-2.261 c0.778,0.515,1.595,0.926,2.447,1.204l0.69,11.74c-0.853,1.309-1.681,2.759-2.488,4.33 C309.856,175.067,309.744,165.443,308.486,160.715z M413.184,242.021c-0.845,1.337-2.161,2.266-3.705,2.615 c-1.541,0.347-3.129,0.075-4.467-0.771c-1.338-0.845-2.266-2.16-2.614-3.703c-0.014-0.06-0.029-0.12-0.047-0.178l-26.1-85.728 c0.756-1.204,1.419-2.553,1.945-4.066l14.906-6.772l20.852,94.135C414.301,239.097,414.029,240.684,413.184,242.021z"></path>
                                            <path style="fill:#000000;" d="M104.877,65.816c5.286,0,8.978-2.147,8.978-5.223c0-1.381-1.119-2.5-2.5-2.5 c-1.175,0-2.161,0.811-2.428,1.903c-0.487,0.3-1.873,0.82-4.049,0.82c-2.176,0-3.563-0.52-4.049-0.819 c-0.268-1.093-1.253-1.903-2.428-1.903c-1.381,0-2.5,1.119-2.5,2.5C95.899,63.669,99.591,65.816,104.877,65.816z"></path>
                                            <path style="fill:#000000;" d="M95.879,47.731c0.47-0.47,0.73-1.11,0.73-1.77c0-0.65-0.26-1.3-0.73-1.76 c-0.94-0.94-2.6-0.94-3.54,0c-0.46,0.46-0.73,1.11-0.73,1.76c0,0.66,0.27,1.309,0.73,1.77c0.47,0.47,1.12,0.73,1.77,0.73 C94.769,48.461,95.409,48.2,95.879,47.731z"></path>
                                            <path style="fill:#000000;" d="M115.639,48.461c0.66,0,1.31-0.26,1.77-0.73c0.47-0.461,0.73-1.11,0.73-1.77 c0-0.65-0.26-1.3-0.73-1.76c-0.93-0.93-2.6-0.93-3.53,0c-0.47,0.46-0.74,1.11-0.74,1.76c0,0.66,0.27,1.309,0.74,1.77 C114.339,48.2,114.989,48.461,115.639,48.461z"></path>
                                        </g>
                                    </g>
                                </svg>

                            </div>

                            <p>Moral Values<br>with Parents</p>

                            <button id="myButton" class="button3" onclick="redirectToMoralWithParents()">
                                Click Here
                            </button>

                            <script>
                                function redirectToMoralWithParents() {
                                    window.location.href = 'moralwithparents.php';
                                }

                            </script>
                        </div>

                    </div>



                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 text-center mx-auto">
                                <div class="card teachers">
                                    <div class="overlay"></div>
                                    <div class="circle">



                                        <svg viewBox="-10.75 0 365.63 365.63" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <defs>
                                                    <style>
                                                        .a {
                                                            fill: #f9ecec;
                                                        }

                                                        .b {
                                                            fill: #ff8585;
                                                        }

                                                        .c {
                                                            fill: #000000;
                                                        }

                                                        .d {
                                                            fill: #c3b5ac;
                                                        }

                                                        .e {
                                                            fill: #000000;
                                                        }

                                                        .f {
                                                            fill: #d1f0ff;
                                                        }

                                                        .g {
                                                            fill: #faffd6;
                                                        }

                                                        .h {
                                                            fill: #6d6b69;
                                                        }

                                                        .i {
                                                            fill: #000000;
                                                        }

                                                    </style>
                                                </defs>
                                                <path class="a" d="M223.667,74.453a48.654,48.654,0,0,0,6.2-9.1l.014-.033a17.843,17.843,0,0,1-20.271-3.053c.222,1.533.414,2.886.414,2.886A36.071,36.071,0,0,0,215.3,79.584a2.486,2.486,0,0,0,.82.9c.763.405,1.627-.189,2.295-.776A54.367,54.367,0,0,0,223.667,74.453Z"></path>
                                                <path class="b" d="M283.981,269.633v9.93c5.39,3.11,20.486,11.777,25.474,14.659a5.678,5.678,0,0,0,5.124,0l24.991-14.433a5.045,5.045,0,0,0,2.529-4.382V264.1Z"></path>
                                                <path class="b" d="M207.52,314.588v9.931c5.39,3.109,20.486,11.776,25.474,14.659a5.678,5.678,0,0,0,5.124,0l24.991-14.432a5.047,5.047,0,0,0,2.529-4.383v-11.3Z"></path>
                                                <path class="c" d="M126.633,133.426l55.057-31.782c.006-11.862.062-96.794.062-99.653C164.936,11.7,15.779,97.829,2.069,105.75c-.015,2.36-.04,87.56-.042,99.6l112.6-65,10.719-6.188Z"></path>
                                                <path class="d" d="M4.047,218.249,2,219.431c0-.7,0-6.04.006-14.062-5.359,3.092,183.662-106.021,179.711-103.741-.006,8.151-.008,13.519-.008,14.032Z"></path>
                                                <path class="e" d="M4,219.431q0-6.177,0-12.352.006-13.394.013-26.786l.015-32.066q.007-13.886.013-27.771,0-4.709,0-9.418c0-1.623.109-3.288,0-4.909-.008-.121,0-.244,0-.365l-.991,1.727q3.791-2.192,7.581-4.38l13.849-8,18.62-10.753,21.9-12.643,23.671-13.67,23.953-13.832,22.737-13.129,20.024-11.562,15.814-9.132,10.141-5.856,1.415-.817-3.01-1.727q0,6.127,0,12.254,0,13.452-.01,26.906-.006,15.993-.013,31.988,0,13.954-.01,27.909,0,4.715,0,9.428c0,1.593-.1,3.226,0,4.818.007.12,0,.244,0,.366l.991-1.727-5.711,3.3-13.205,7.625-19,10.972-22.931,13.241L94.924,163.463,69.592,178.091,45.786,191.837l-20.38,11.768L10.089,212.45l-8.318,4.8-.78.451c-2.229,1.286-.217,4.744,2.018,3.454l13.33-7.7,28.929-16.705,37.373-21.581,39.337-22.714,34.174-19.734,22-12.7c1.461-.844,2.97-1.635,4.4-2.538,1.111-.7,1.161-1.654,1.162-2.786q0-1.83,0-3.661.006-16.8.013-33.591.008-22.085.017-44.17.006-14.682.011-29.363V1.991A2.019,2.019,0,0,0,180.743.264L163.675,10.12l-30.648,17.7L95.243,49.636,56.676,71.907,24.129,90.7Q13.913,96.6,3.7,102.5c-.8.462-1.619.9-2.4,1.389-1.219.757-1.239,1.733-1.239,2.946q0,4.4,0,8.794-.009,17.55-.017,35.1Q.023,171.171.013,191.609.006,204.64,0,217.669q0,.88,0,1.762C0,222,4,222.009,4,219.431Z"></path>
                                                <path class="e" d="M180.68,99.917l-5.74,3.313-13.3,7.679L142.5,121.957l-22.977,13.264L94.348,149.753,68.92,164.431l-23.735,13.7L24.777,189.913l-15.071,8.7-8.023,4.632-.666.384c-2.229,1.286-.217,4.744,2.019,3.454l6.008-3.469,13.512-7.8,19.292-11.136L64.919,171.36q12.6-7.277,25.21-14.552l25.405-14.666,23.656-13.655,20.27-11.7,14.875-8.587,7.769-4.485.594-.343c2.229-1.287.217-4.745-2.018-3.454Z"></path>
                                                <path class="e" d="M340.091,276.7q0,12.435.008,24.868c0,2.574,4,2.578,4,0q0-12.433-.008-24.868c0-2.573-4-2.578-4,0Z"></path>
                                                <path class="e" d="M310.336,294.566v24.176c0,2.574,4,2.578,4,0V294.566c0-2.574-4-2.578-4,0Z"></path>
                                                <path class="a" d="M283.783,299.418c.069-.045.136-.092.2-.139,0-2.3,0-5.159-.008-8.073-1.286-.053-2.653-.1-3.837-.159a7.214,7.214,0,0,1-4.208-1.1,5.835,5.835,0,0,1-1.049-2.565c-.049-.3-.1-.595-.144-.892-1.316-.388-4.465.039-5.762.35a5.239,5.239,0,0,0-3.033,2.435,3.568,3.568,0,0,0-.425,1.729,3.681,3.681,0,0,0,.605,2.411,7.579,7.579,0,0,0,.542.687c2.1,2.386,5.1,3.745,8.04,4.96a15.169,15.169,0,0,0,5.14,1.423A6.8,6.8,0,0,0,283.783,299.418Z"></path>
                                                <path class="a" d="M275.008,287.928c-.049-.183-.091-.367-.125-.545-.744-4.523-1.232-8.94-1.608-13.836-.125-1.631-.17-3.984-.284-5.615l-.035-.5c3.321,1.462,7.566,3.192,10.522,4.548l.5.23c0,2.756,0,5.1,0,7.38,0,2.961,0,7.352,0,11.617-1.287-.053-2.655-.1-3.84-.159a7.214,7.214,0,0,1-4.208-1.1A4.959,4.959,0,0,1,275.008,287.928Z"></path>
                                                <path class="f" d="M312.138,272.489c-1.134,1.4-3.392,2.23-5.445,2.556a17.216,17.216,0,0,1-5.289-.134c-6.633-1.439-11.742-3.97-17.423-7.147v4.458l-.5-.243c-3.1-1.423-7.624-3.258-11.011-4.764a2,2,0,0,1-1.181-1.914q.065-1.482.138-2.924c1.087-6.584,6.379-10.206,12.464-11.494l28.84-3.614Z"></path>
                                                <path class="e" d="M281.868,268.871a74.548,74.548,0,0,0,16.018,7.222c4.923,1.4,11.863,2.127,15.666-2.19,1.7-1.925-1.123-4.764-2.828-2.828-1.426,1.618-3.852,2.08-5.918,2.11a22.485,22.485,0,0,1-7.081-1.316,72.764,72.764,0,0,1-13.838-6.452c-2.245-1.267-4.263,2.187-2.019,3.454Z"></path>
                                                <path class="e" d="M283.356,248.955c-6.025,1.314-11.572,4.992-13.447,11.116a16.854,16.854,0,0,0-.623,5.23c.05,2.248,1.478,3.344,3.373,4.169,3.266,1.421,6.569,2.756,9.809,4.236a2.061,2.061,0,0,0,2.737-.718,2.017,2.017,0,0,0-.718-2.736c-2.821-1.288-5.691-2.466-8.541-3.689q-.941-.4-1.878-.814c-.19-.083-.818-.38-.809-.362.072.143.047-.521.044-.456a14.774,14.774,0,0,1,.552-4.077c1.54-4.634,6.062-7.06,10.565-8.042,2.513-.548,1.45-4.405-1.064-3.857Z"></path>
                                                <path class="e" d="M283.859,296.4c-1.085,2.07-3.512,2.368-5.587,1.824a27.893,27.893,0,0,1-7.733-3.44c-1.531-.983-4.184-2.965-2.54-4.961,1.312-1.592,4.126-1.59,6.02-1.457a2.018,2.018,0,0,0,2-2,2.038,2.038,0,0,0-2-2,18.643,18.643,0,0,0-3.932.25,8.006,8.006,0,0,0-3.49,1.131,6.484,6.484,0,0,0-2.514,8.118c1.212,2.515,4.037,4.3,6.444,5.506a26.194,26.194,0,0,0,8.786,3.075,8.174,8.174,0,0,0,8-4.027c1.194-2.278-2.257-4.3-3.454-2.019Z"></path>
                                                <path class="e" d="M270.991,267.932c.375,5.7.707,11.358,1.51,17.024.345,2.431.5,5.641,2.876,7.022,2.48,1.444,5.875,1.118,8.639,1.229,2.574.1,2.569-3.9,0-4-1.292-.052-2.585-.093-3.876-.16a5.581,5.581,0,0,1-2.9-.613c.25.175.122.236.037-.05-.064-.215-.17-.425-.237-.641a12.251,12.251,0,0,1-.364-1.738c-.194-1.23-.373-2.461-.529-3.7-.605-4.788-.839-9.569-1.155-14.377-.168-2.555-4.169-2.574-4,0Z"></path>
                                                <path class="a" d="M257.55,250.8a1.566,1.566,0,0,1-1.582,0l-49.923-28.852a1.571,1.571,0,0,1-.632-.687l-.158.017V238.3l1.123.648,50.877,29.4L330.766,225.9V208.52Z"></path>
                                                <path class="e" d="M329.757,224.173q-12.4,7.161-24.807,14.325l-38.478,22.219-10.227,5.906h2.019q-8.788-5.074-17.574-10.156l-26.729-15.448-6.573-3.8c-2.234-1.289-4.25,2.166-2.019,3.454q8.676,5.01,17.348,10.026l26.793,15.484,6.735,3.893a2.027,2.027,0,0,0,2.019,0l25.658-14.817,38.242-22.083,9.612-5.551c2.228-1.286.217-4.744-2.019-3.453Z"></path>
                                                <path class="e" d="M203.255,221.277v57.067c0,2.574,4,2.578,4,0V221.277c0-2.574-4-2.578-4,0Z"></path>
                                                <path class="e" d="M328.766,207.5v57.067c0,2.574,4,2.578,4,0V207.5c0-2.573-4-2.578-4,0Z"></path>
                                                <path class="e" d="M255.522,250.8v57.067c0,2.574,4,2.578,4,0V250.8c0-2.573-4-2.578-4,0Z"></path>
                                                <path class="b" d="M331.094,208.33,257.55,250.8a1.566,1.566,0,0,1-1.582,0l-49.923-28.852a1.592,1.592,0,0,1,0-2.762c12.863-7.431,63.568-36.711,73.544-42.471a1.558,1.558,0,0,1,1.578,0l49.931,28.85A1.6,1.6,0,0,1,331.094,208.33Z"></path>
                                                <path class="e" d="M330.085,206.6,308.65,218.981l-29.741,17.174L257.876,248.3c-.4.232-.8.474-1.207.7-.164.09.261.045.2.009a3.049,3.049,0,0,1-.287-.166c-.247-.17-.528-.305-.788-.455l-4.3-2.488-13.25-7.657-28.312-16.363-2.242-1.3a2.043,2.043,0,0,0-.445-.257c-.345-.075.015-.079.01.241s-.342.3-.024.25a1.964,1.964,0,0,0,.463-.268l4.252-2.456,12.139-7.011,30.489-17.607,23.83-13.761,1.658-.958c.342-.2.528-.152.178-.271a4.367,4.367,0,0,1,.693.4l3.994,2.308,12.853,7.427,28.608,16.53,2.256,1.3c.341.2.679.4,1.023.592.828.459-.117-.058.427-.441-2.089,1.47-.093,4.94,2.019,3.454a3.674,3.674,0,0,0,1.242-5.011A6.879,6.879,0,0,0,330.654,203l-5.418-3.13-14.876-8.595L283.579,175.8c-.542-.313-1.075-.647-1.641-.911-1.478-.688-2.788-.23-4.1.528l-3.966,2.291q-5.985,3.454-11.968,6.911l-31.474,18.175-24.763,14.3c-1.335.771-2.42,1.8-2.42,3.472,0,1.7,1.128,2.726,2.483,3.509l5.1,2.946,14.612,8.444,27.628,15.967c.526.3,1.047.621,1.579.913a4.022,4.022,0,0,0,4.144.049c1-.54,1.98-1.144,2.968-1.714l10.447-6.033,29.91-17.272L328.4,212.2l3.708-2.141C334.332,208.77,332.32,205.312,330.085,206.6Z"></path>
                                                <path class="a" d="M299.119,213.149l-31.513,18.2-21.81-12.6c2.73-1.578,28.1-16.229,31.51-18.2l21.813,12.6Z"></path>
                                                <path class="e" d="M298.109,211.422q-13.543,7.819-27.087,15.642l-4.425,2.555h2.019q-9.466-5.466-18.93-10.939l-2.88-1.665v3.454q13.243-7.656,26.494-15.3l5.016-2.9H276.3q9.468,5.468,18.933,10.939l2.879,1.664-.919-2.258h0a2.059,2.059,0,0,0,1.4,2.46,2.016,2.016,0,0,0,2.46-1.4h0a2.078,2.078,0,0,0-.919-2.259q-9.442-5.451-18.881-10.909l-2.931-1.694a2.022,2.022,0,0,0-2.019,0q-13.423,7.751-26.845,15.5l-4.665,2.694a2.019,2.019,0,0,0,0,3.454q9.432,5.447,18.859,10.9l2.951,1.705a2.022,2.022,0,0,0,2.019,0l27.341-15.788,4.171-2.409C302.357,213.59,300.345,210.132,298.109,211.422Z"></path>
                                                <path class="e" d="M281.968,279.615q0,10.976.016,21.952c0,2.574,4,2.578,4,0q0-10.976-.016-21.952c0-2.574-4-2.578-4,0Z"></path>
                                                <path class="g" d="M318.286,200.569a23.8,23.8,0,0,0-9.451.375c-4.618,1.067-8.92,3.167-13.175,5.254a22.622,22.622,0,0,0-6.185,5.145c-3.642,4.013-6.654,7.019-9.642,11.8a2.34,2.34,0,0,1-.78.932,1.432,1.432,0,0,1-1.111.132c-1.842-.664-4.82-1.509-7.264-2.131-1.778,2.467-3.727,8.721-4.461,14.569a1.12,1.12,0,0,0,.727,1.3c6.6,1.424,11.434,2.957,18.156,2.8a7.978,7.978,0,0,0,3.355-.8,5.673,5.673,0,0,0,.591-.342c-.739,2.1-1,2.717-1.731,4.8-.936,2.672-1.837,5.8-.4,8.219a7.728,7.728,0,0,0,3.053,2.638c4.54,2.518,9.8,3.052,14.931,2.741a55.674,55.674,0,0,0,7.293-1.362s12.376-5.446,18.179-11.006a139,139,0,0,0,.219-18.192c-.118-4.938-1.823-14.375-2.793-18.7a21.939,21.939,0,0,0-1.911-4.106,6.794,6.794,0,0,0-3.021-2.572A16.814,16.814,0,0,0,318.286,200.569Z"></path>
                                                <path class="a" d="M260.631,221.34a9.117,9.117,0,0,0-4.271,1.606c-2.34,1.536-2.651,4.591-2.049,8.087a5.855,5.855,0,0,0,4.322,4.822,19.4,19.4,0,0,0,5.558.33l2.111-.126a45.954,45.954,0,0,1,3.214-11.889l-.061-.331a5.816,5.816,0,0,0-4.044-4.006c-2.03-.469-3.158,1.308-4.631,1.488Z"></path>
                                                <path class="e" d="M296.33,229.419a81.053,81.053,0,0,1-7.431,7.739c-1.657,1.539-3.51,1.634-5.672,1.584a40.5,40.5,0,0,1-6.31-.658c-2.1-.381-4.188-.875-6.273-1.356q-.889-.206-1.78-.406l-.457-.1q-.863-.377-.19.427c-.043-.006.534-3.147.593-3.43.708-3.4,1.575-7.227,3.594-10.129l-2.258.919c1.754.449,3.5.926,5.232,1.46,1.629.5,3.192,1.241,4.807.249,1.409-.866,2.254-2.966,3.2-4.273.96-1.327,2-2.587,3.084-3.819a86.811,86.811,0,0,1,6.769-7.267c2.62-2.372,6.037-3.787,9.25-5.17a32.485,32.485,0,0,1,10.751-2.887c3.29-.195,7.143.22,9.886,2.233a8.316,8.316,0,0,1,2.172,3.278,13.245,13.245,0,0,1,.945,3.234c.58,2.859,1.075,5.736,1.506,8.621s.717,5.742.883,8.641c.163,2.839.473,5.682.491,8.527.016,2.573,4.016,2.578,4,0-.016-2.48-.261-4.962-.423-7.435-.158-2.415-.3-4.815-.6-7.219q-.579-4.565-1.406-9.093A28.2,28.2,0,0,0,328.9,206.1a15.966,15.966,0,0,0-2.006-3.483,10.7,10.7,0,0,0-4.262-2.84,21.56,21.56,0,0,0-10.45-1.393,37.018,37.018,0,0,0-10.389,2.786A43.437,43.437,0,0,0,292,206.22c-2.858,2.171-5.188,5.026-7.574,7.686-1.265,1.411-2.483,2.858-3.635,4.361q-.892,1.164-1.717,2.375-.372.549-.729,1.109-.207.321-.405.65.514-.218-.161-.06h1.063a31.858,31.858,0,0,1-3.576-1.084c-1.346-.394-2.7-.76-4.06-1.108a2.069,2.069,0,0,0-2.258.919c-1.844,2.648-2.792,6.054-3.557,9.148a40.985,40.985,0,0,0-1.148,6.21,3.354,3.354,0,0,0,.794,2.61,5.341,5.341,0,0,0,2.986,1.194,106.448,106.448,0,0,0,11.689,2.276c4.04.446,8.314.671,11.579-2.131a66.444,66.444,0,0,0,7.864-8.128c1.626-1.972-1.189-4.817-2.828-2.828Z"></path>
                                                <path class="e" d="M287.1,239.113c-1.244,3.537-3.28,7.444-2.9,11.286.454,4.548,4.423,6.8,8.357,8.183,6.55,2.3,13.565,1.639,20.162-.018,2.495-.627,1.438-4.486-1.063-3.857-5.4,1.357-10.941,1.994-16.411.519-2.766-.745-7.1-2.143-7.083-5.616.019-3.2,1.744-6.455,2.792-9.434.856-2.433-3.007-3.479-3.857-1.063Z"></path>
                                                <path class="e" d="M271.384,223.307c-.652-2.945-3.891-5.775-6.988-5.53-1.478.118-2.486.96-3.773,1.548.4-.184-.357.085-.116.031-.425.095-.871.114-1.3.2a10.623,10.623,0,0,0-2.283.777,8.511,8.511,0,0,0-3.485,2.729,8.384,8.384,0,0,0-1.343,4.078c-.3,2.949.287,6.383,2.42,8.567,2.5,2.562,6.326,2.659,9.674,2.476a2.044,2.044,0,0,0,2-2,2.019,2.019,0,0,0-2-2,23.4,23.4,0,0,1-4.006-.06,5.262,5.262,0,0,1-2.26-.751,4.148,4.148,0,0,1-1.369-1.686,9.134,9.134,0,0,1-.506-3.116,11.07,11.07,0,0,1,.054-1.5,11.434,11.434,0,0,1,.3-1.159c-.076.187.1-.192.115-.227.048-.089.1-.178.149-.265s.108-.171.168-.253c.195-.267-.162.174.067-.067a3.594,3.594,0,0,1,1.048-.789,7.418,7.418,0,0,1,2.826-.986,8.227,8.227,0,0,0,2.948-1.163,5.652,5.652,0,0,1,.613-.331c-.342.146.531-.116.163-.065a1.747,1.747,0,0,1,1.223.336,3.648,3.648,0,0,1,1.8,2.271,2,2,0,1,0,3.858-1.064Z"></path>
                                                <path class="e" d="M295.284,218.83q.153.33.3.664l-.2-.478a23.128,23.128,0,0,1,.964,2.85,2.065,2.065,0,0,0,.919,1.195,2,2,0,0,0,2.736-.717,2.085,2.085,0,0,0,.2-1.541,25.555,25.555,0,0,0-1.46-3.991,2.011,2.011,0,0,0-1.195-.92,2.047,2.047,0,0,0-1.541.2,2.017,2.017,0,0,0-.919,1.195l-.072.532a2.007,2.007,0,0,0,.273,1.009Z"></path>
                                                <path class="a" d="M313.569,203.842c4.762-3.991,6.443-11.12,7-15.006,1.186-8.33-4.734-15.675-12.394-17.707a18.543,18.543,0,0,0-17.155,4.105,19.174,19.174,0,0,0-6.291,13.944,15.092,15.092,0,0,0,2.294,8.4,10.732,10.732,0,0,0,7.122,4.791"></path>
                                                <path class="e" d="M314.984,205.256c4.48-3.858,6.628-9.958,7.476-15.66a17.887,17.887,0,0,0-6.569-16.712,20.264,20.264,0,0,0-19.19-3.259,21,21,0,0,0-13.5,15.313c-1.667,7.83,1.562,17.793,10.4,19.362a2.058,2.058,0,0,0,2.461-1.4,2.017,2.017,0,0,0-1.4-2.46c-6.227-1.105-8.625-7.814-7.791-13.475a17.1,17.1,0,0,1,10.095-13.191,16.432,16.432,0,0,1,15.52,1.532,14.026,14.026,0,0,1,6.154,12.8c-.51,5.154-2.492,10.876-6.5,14.323-1.954,1.683.886,4.5,2.829,2.829Z"></path>
                                                <path class="h" d="M321.685,185.586c-.288-2.622-2.129-11.984-13.514-14.457a18.659,18.659,0,0,0-23.053,14.411,9.756,9.756,0,0,1,8.4,5.432c1.841,3.819.991,8.312.414,12.511a4.59,4.59,0,0,0,.229,2.83,4.521,4.521,0,0,0,2.2,1.529c3.289,1.649,10.373,3.233,19.1-.606a16.764,16.764,0,0,0,4.948-3.347,8.362,8.362,0,0,0,1.764-3.939C322.755,197.349,322.375,191.866,321.685,185.586Z"></path>
                                                <path class="e" d="M323.685,185.586a18.693,18.693,0,0,0-7.22-12.947,22.071,22.071,0,0,0-24.543-.624,21.172,21.172,0,0,0-8.733,12.994,2.03,2.03,0,0,0,1.929,2.531,7.81,7.81,0,0,1,5.816,3.019c1.614,2.106,1.808,4.826,1.657,7.378-.083,1.4-.278,2.785-.473,4.171a9.107,9.107,0,0,0,.046,4.6c.792,2.085,3.171,2.973,5.122,3.684a24.118,24.118,0,0,0,13.309.548c4.8-1.062,10.9-3.441,12.873-8.367a17.741,17.741,0,0,0,.983-6.925c-.052-3.364-.4-6.723-.766-10.065a2.06,2.06,0,0,0-2-2,2.013,2.013,0,0,0-2,2c.31,2.847.6,5.7.72,8.562a21.193,21.193,0,0,1-.257,5.654,7,7,0,0,1-3.693,4.641,23,23,0,0,1-7.128,2.688,19.7,19.7,0,0,1-11.4-.755,7.065,7.065,0,0,1-1.87-.917c-.61-.662-.073-2.32.041-3.137a29.861,29.861,0,0,0,.358-8.289,11.943,11.943,0,0,0-11.335-10.493l1.929,2.532a16.757,16.757,0,0,1,16.73-13.449c6.043.078,11.84,2.852,14.54,8.385a15.423,15.423,0,0,1,1.008,2.8c.1.392.19.787.264,1.185.034.186.061.373.094.559.081.456-.054-.463,0,.029a2.059,2.059,0,0,0,2,2A2.013,2.013,0,0,0,323.685,185.586Z"></path>
                                                <path class="e" d="M281.981,269.633v9.93a2.01,2.01,0,0,0,.991,1.727q11.381,6.564,22.775,13.1c1.7.981,3.351,2.139,5.35,2.372,2.665.311,4.657-.912,6.858-2.183l13.23-7.641,7.585-4.38a13.213,13.213,0,0,0,3.568-2.494,7.335,7.335,0,0,0,1.761-4.66c.09-2.575-3.91-2.571-4,0-.083,2.353-2.418,3.163-4.178,4.18L329.49,283.3l-12.811,7.4c-1.518.877-3.191,2.284-5.032,2.12-1.44-.128-2.87-1.3-4.1-2q-5.629-3.243-11.264-6.48t-11.3-6.5l.99,1.726v-9.93c0-2.574-4-2.578-4,0Z"></path>
                                                <path class="b" d="M342.1,263.2c0-12.285-.013-27.542-.013-32.483a1.692,1.692,0,0,0-2.512-1.488c-6.112,3.392-18.064,10.32-24.592,14.224a5.131,5.131,0,0,0-2.512,4.4v32.523C321.669,274.948,333.128,268.305,342.1,263.2Z"></path>
                                                <path class="e" d="M314.467,294.566v-44.33c0-1.3-.251-2.92.49-4.057a7.008,7.008,0,0,1,2.528-1.894q1.548-.918,3.1-1.831,7.031-4.134,14.114-8.181,1.583-.9,3.17-1.8c.284-.161,2.709-1.246,2.711-1.52,0,.226-.5-.086-.457-.1-.239.065.119-.269-.04-.013-.1.155,0,.689,0,.875v1.994q0,5.877,0,11.754.006,14.97.011,29.94c0,2.573,4,2.578,4,0q0-14.013-.01-28.025,0-6.416,0-12.83a28.929,28.929,0,0,0-.065-4.417,3.694,3.694,0,0,0-2.76-3.017c-1.458-.337-2.64.346-3.863,1.031-4.728,2.648-9.42,5.36-14.1,8.086q-3.519,2.049-7.023,4.12c-2.368,1.4-4.718,2.722-5.534,5.559a17.214,17.214,0,0,0-.269,4.683v43.969c0,2.574,4,2.578,4,0Z"></path>
                                                <path class="e" d="M313.474,282.133q14.727-8.721,29.616-17.168c2.239-1.269.226-4.726-2.019-3.454q-14.891,8.44-29.616,17.168c-2.214,1.311-.2,4.77,2.019,3.454Z"></path>
                                                <path class="e" d="M263.63,321.655q0,12.434.008,24.867c0,2.574,4,2.579,4,0q0-12.433-.008-24.867c0-2.574-4-2.578-4,0Z"></path>
                                                <path class="e" d="M233.875,339.522V363.7c0,2.573,4,2.578,4,0V339.522c0-2.574-4-2.578-4,0Z"></path>
                                                <path class="f" d="M239.959,305.037l-32.532-9.2c-6.085,1.288-11.377,4.909-12.465,11.493-.179,3.548.821,14.993,1.365,19.454a8.723,8.723,0,0,0,.307,2.159,6.323,6.323,0,0,0,1.316,1.88c2.775,3.032,6.555,3.222,9.209,3.663l2.522.025c0-3.676-.008-7.307-.015-9.442a3.154,3.154,0,0,1-1.5-2.688c0-1.881,0-4.164,0-5.587v-3.714c5.424,3.006,10.393,5.4,16.773,6.785a17.216,17.216,0,0,0,5.289.133c2.053-.325,4.311-1.155,5.445-2.555l15.886-9.127-.458-.13Z"></path>
                                                <path class="a" d="M189.114,330.6a4.92,4.92,0,0,1,2.017-1,17.119,17.119,0,0,1,5.809-.044,8.585,8.585,0,0,0,1.01,1.272c2.9,3.17,6.9,3.233,9.564,3.725,0,3.209.006,6.457.008,9.086a7.554,7.554,0,0,1-4.3,1.139,16.884,16.884,0,0,1-5.717-1.583c-3.266-1.352-6.609-2.863-8.944-5.517a8.338,8.338,0,0,1-.6-.765,3.976,3.976,0,0,1-.675-2.641,5.3,5.3,0,0,1,.583-2.222A5.98,5.98,0,0,1,189.114,330.6Z"></path>
                                                <path class="e" d="M206.9,293.91c-7.4,1.622-14.093,7.069-13.946,15.181.063,3.5.357,6.992.656,10.473q.218,2.512.476,5.02c.188,1.8.108,3.913.9,5.543,2.2,4.5,7.2,5.573,11.643,6.29a2.062,2.062,0,0,0,2.46-1.4,2.015,2.015,0,0,0-1.4-2.46c-3.223-.52-6.755-.861-8.84-3.735-.752-1.037-.623-2.843-.756-4.108q-.237-2.245-.432-4.5c-.282-3.2-.537-6.4-.667-9.609a21.616,21.616,0,0,1-.04-3.112,9.943,9.943,0,0,1,1.9-4.516c2.149-2.941,5.641-4.459,9.1-5.217,2.514-.552,1.45-4.409-1.063-3.858Z"></path>
                                                <path class="e" d="M205.407,313.826a74.451,74.451,0,0,0,16.018,7.222c4.923,1.4,11.863,2.128,15.666-2.189,1.7-1.925-1.123-4.765-2.829-2.828-1.425,1.618-3.851,2.08-5.917,2.11a22.485,22.485,0,0,1-7.081-1.316,72.826,72.826,0,0,1-13.838-6.452c-2.245-1.267-4.263,2.187-2.019,3.453Z"></path>
                                                <path class="e" d="M207.88,340.343c-1.168,2.228-3.786,2.759-6.084,2.228a31.022,31.022,0,0,1-8.1-3.377c-1.884-1.079-4.84-2.838-4.348-5.372.557-2.869,4.227-2.581,6.415-2.408a2.016,2.016,0,0,0,2-2,2.04,2.04,0,0,0-2-2c-3.928-.311-8.638.357-10.089,4.676a6.832,6.832,0,0,0,.56,5.829,14.591,14.591,0,0,0,4.2,3.962,30.724,30.724,0,0,0,5.047,2.612,27.246,27.246,0,0,0,6.029,2.09c3.772.643,7.96-.662,9.825-4.221,1.195-2.277-2.256-4.3-3.453-2.019Z"></path>
                                                <path class="a" d="M181.089,295.755a1.566,1.566,0,0,1-1.582,0c-5.8-3.352-40.418-23.36-49.923-28.852a1.573,1.573,0,0,1-.632-.688l-.158.018v17.021l1.123.649c1.165.672,49.4,28.547,50.876,29.4,3.322-1.917,71.384-41.221,73.512-42.45v-17.38Z"></path>
                                                <path class="e" d="M253.3,269.128q-12.4,7.161-24.807,14.325l-38.478,22.22-10.227,5.9H181.8q-8.788-5.074-17.574-10.156L137.5,285.974q-3.286-1.9-6.573-3.8c-2.234-1.29-4.25,2.166-2.019,3.454q8.676,5.01,17.348,10.026l26.793,15.484q3.368,1.946,6.735,3.892a2.022,2.022,0,0,0,2.019,0l25.658-14.816L245.7,278.133l9.612-5.551c2.228-1.287.216-4.745-2.019-3.454Z"></path>
                                                <path class="e" d="M126.794,266.233V323.3c0,2.574,4,2.579,4,0V266.233c0-2.574-4-2.578-4,0Z"></path>
                                                <path class="e" d="M252.305,252.455v57.067c0,2.573,4,2.578,4,0V252.455c0-2.574-4-2.578-4,0Z"></path>
                                                <path class="e" d="M179.061,295.755v57.067c0,2.573,4,2.578,4,0V295.755c0-2.574-4-2.578-4,0Z"></path>
                                                <path class="b" d="M254.633,253.286l-73.544,42.469a1.566,1.566,0,0,1-1.582,0c-5.8-3.352-40.418-23.36-49.923-28.852a1.592,1.592,0,0,1,0-2.762c12.863-7.431,63.568-36.711,73.544-42.472a1.558,1.558,0,0,1,1.578,0l49.93,28.851A1.594,1.594,0,0,1,254.633,253.286Z"></path>
                                                <path class="e" d="M253.624,251.559l-21.435,12.378-29.741,17.174-21.033,12.146c-.4.232-.8.474-1.207.7-.164.089.261.044.2.009-.095-.052-.2-.105-.287-.166-.247-.17-.528-.305-.788-.455l-4.305-2.489-13.25-7.657-28.312-16.363-2.242-1.3a2,2,0,0,0-.445-.257c-.345-.076.015-.079.01.241s-.342.3-.025.249a1.916,1.916,0,0,0,.464-.268l4.252-2.455,12.139-7.012L178.1,238.429q11.914-6.88,23.83-13.76l1.658-.958c.341-.2.528-.153.178-.271a4.314,4.314,0,0,1,.692.4q2,1.154,4,2.308l12.853,7.426,28.608,16.53,2.256,1.3c.34.2.679.4,1.023.591.827.459-.117-.057.427-.44-2.089,1.47-.093,4.94,2.019,3.454A3.674,3.674,0,0,0,256.885,250a6.866,6.866,0,0,0-2.693-2.048l-5.417-3.13-14.876-8.6-26.781-15.475c-.542-.312-1.075-.647-1.641-.91-1.478-.689-2.789-.23-4.1.528l-3.967,2.29-11.967,6.911-31.474,18.176q-12.381,7.15-24.763,14.3c-1.335.772-2.42,1.8-2.42,3.473,0,1.7,1.128,2.726,2.482,3.508l5.1,2.946,14.612,8.445,27.628,15.967c.526.3,1.046.621,1.579.912a4.02,4.02,0,0,0,4.144.049c1-.539,1.98-1.143,2.968-1.714l10.447-6.033,29.91-17.271,26.282-15.177,3.708-2.141C257.871,253.726,255.859,250.268,253.624,251.559Z"></path>
                                                <path class="a" d="M221.007,258.26l-31.512,18.2-21.81-12.6c2.73-1.578,28.1-16.229,31.51-18.2l21.813,12.6Z"></path>
                                                <path class="e" d="M220,256.533q-13.543,7.819-27.087,15.642l-4.425,2.556h2.019q-9.466-5.467-18.93-10.94l-2.88-1.665v3.454q13.244-7.656,26.494-15.3l5.016-2.9h-2.019q9.467,5.467,18.932,10.939l2.88,1.664-.919-2.258h0a2.059,2.059,0,0,0,1.4,2.46,2.016,2.016,0,0,0,2.46-1.4h0a2.079,2.079,0,0,0-.919-2.259q-9.442-5.451-18.881-10.909l-2.931-1.694a2.022,2.022,0,0,0-2.019,0q-13.424,7.751-26.845,15.5l-4.665,2.694a2.019,2.019,0,0,0,0,3.454q9.432,5.447,18.859,10.9l2.951,1.705a2.022,2.022,0,0,0,2.019,0L217.846,262.4l4.171-2.409C224.246,258.7,222.234,255.243,220,256.533Z"></path>
                                                <path class="e" d="M205.507,324.57q0,10.977.016,21.952c0,2.574,4,2.579,4,0q0-10.976-.016-21.952c0-2.573-4-2.578-4,0Z"></path>
                                                <path class="a" d="M214.752,245.564a13.382,13.382,0,0,0,5.165,1.677c.211-4.234-.014-9.5-2.179-13.146a9.733,9.733,0,0,0-9.19-4.653,18.653,18.653,0,0,0-.225,4.672,16.275,16.275,0,0,0,2.9,8.544A12.185,12.185,0,0,0,214.752,245.564Z"></path>
                                                <path class="i" d="M217.738,234.1c2.165,3.644,2.39,8.912,2.179,13.146l.033.195V250.6l.873-.243a55.25,55.25,0,0,1,11.551-4.459,25.32,25.32,0,0,1,6.836-.659c3.658-4.428,4.906-8.2,4.793-14.567-.15-8.411-5.109-15.349-13.888-16.576a18.644,18.644,0,0,0-21.566,15.345A9.729,9.729,0,0,1,217.738,234.1Z"></path>
                                                <path class="g" d="M241.825,245.525a23.782,23.782,0,0,0-9.451.375c-4.618,1.067-8.92,3.166-13.175,5.253a22.643,22.643,0,0,0-6.185,5.145c-3.642,4.014-6.654,7.02-9.642,11.8a2.344,2.344,0,0,1-.781.933,1.429,1.429,0,0,1-1.11.132c-1.842-.665-4.82-1.509-7.265-2.131-1.777,2.466-3.726,8.72-4.46,14.569a1.119,1.119,0,0,0,.727,1.3c6.6,1.425,11.434,2.958,18.155,2.8a8,8,0,0,0,3.356-.8,5.492,5.492,0,0,0,.591-.341c-.739,2.1-1,2.716-1.731,4.8-.936,2.672-1.837,5.8-.4,8.218a7.73,7.73,0,0,0,3.053,2.639c4.54,2.517,9.8,3.052,14.931,2.741a55.674,55.674,0,0,0,7.293-1.362s12.376-5.446,18.179-11.007a138.984,138.984,0,0,0,.219-18.191c-.118-4.939-1.823-14.375-2.793-18.7a21.88,21.88,0,0,0-1.911-4.106,6.808,6.808,0,0,0-3.021-2.573A16.812,16.812,0,0,0,241.825,245.525Z"></path>
                                                <path class="e" d="M219.917,245.241a10.848,10.848,0,0,1-7.421-4.219,14.906,14.906,0,0,1-2.228-8.117,16.918,16.918,0,0,1,8.1-14.679,17.442,17.442,0,0,1,15.66-.958,14.092,14.092,0,0,1,7.72,10.575,22.521,22.521,0,0,1-.182,8.584,17.625,17.625,0,0,1-3.774,7.408c-1.616,1.978,1.2,4.824,2.828,2.829a22.773,22.773,0,0,0,4.521-8.061,26.192,26.192,0,0,0,.767-9.635c-.586-5.967-3.53-11.606-8.859-14.632-5.876-3.338-13.528-3.153-19.509-.205A20.878,20.878,0,0,0,206.292,231.7a19.034,19.034,0,0,0,2.86,11.5,15.144,15.144,0,0,0,10.765,6.041,2.012,2.012,0,0,0,2-2,2.049,2.049,0,0,0-2-2Z"></path>
                                                <path class="e" d="M208.9,231.411a7.922,7.922,0,0,1,7.724,4.882c1.459,3.384,1.462,7.335,1.291,10.948a2,2,0,0,0,4,0c.214-4.515,0-9.342-2.069-13.454a11.8,11.8,0,0,0-10.946-6.376,2.043,2.043,0,0,0-2,2,2.019,2.019,0,0,0,2,2Z"></path>
                                                <path class="a" d="M183.892,266.334A9.064,9.064,0,0,0,179.9,267.9c-2.34,1.536-3.218,4.658-2.616,8.154.448,2.606,2.8,4.211,4.889,4.756a19.441,19.441,0,0,0,5.558.33l2.111-.126a45.954,45.954,0,0,1,3.214-11.889l-.061-.331a5.817,5.817,0,0,0-4.044-4.007c-2.03-.469-3.158,1.309-4.631,1.488C184.172,266.294,184.03,266.313,183.892,266.334Z"></path>
                                                <path class="e" d="M219.869,274.374a80.935,80.935,0,0,1-7.431,7.739c-1.657,1.539-3.51,1.634-5.672,1.585a40.747,40.747,0,0,1-6.31-.658c-2.1-.382-4.188-.876-6.273-1.356-.593-.137-1.186-.274-1.78-.407l-.458-.1q-.861-.377-.189.427c-.043-.006.534-3.148.593-3.43.707-3.4,1.575-7.228,3.594-10.13l-2.258.919c1.754.45,3.5.926,5.232,1.461,1.629.5,3.191,1.241,4.806.248,1.41-.866,2.255-2.966,3.2-4.273.96-1.326,2-2.587,3.084-3.818a86.811,86.811,0,0,1,6.769-7.267c2.62-2.373,6.037-3.788,9.25-5.171a32.46,32.46,0,0,1,10.751-2.886c3.29-.2,7.143.22,9.886,2.233a8.3,8.3,0,0,1,2.172,3.278,13.233,13.233,0,0,1,.945,3.234c.58,2.858,1.075,5.736,1.506,8.62s.717,5.742.883,8.642c.163,2.839.473,5.681.491,8.526.016,2.573,4.016,2.579,4,0-.016-2.479-.261-4.961-.423-7.434-.158-2.415-.3-4.816-.6-7.22q-.579-4.565-1.407-9.093a28.174,28.174,0,0,0-1.794-6.985,15.966,15.966,0,0,0-2.006-3.483,10.706,10.706,0,0,0-4.262-2.84,21.572,21.572,0,0,0-10.45-1.393,36.986,36.986,0,0,0-10.389,2.787,43.434,43.434,0,0,0-9.788,5.048c-2.858,2.172-5.188,5.027-7.574,7.687-1.265,1.411-2.483,2.857-3.636,4.361q-.891,1.162-1.716,2.375-.372.549-.729,1.108-.207.322-.405.65.514-.217-.161-.059h1.063a31.8,31.8,0,0,1-3.576-1.084c-1.347-.4-2.7-.76-4.06-1.109a2.072,2.072,0,0,0-2.259.919c-1.843,2.649-2.791,6.055-3.556,9.149a40.939,40.939,0,0,0-1.148,6.21,3.353,3.353,0,0,0,.794,2.609,5.327,5.327,0,0,0,2.986,1.194,106.448,106.448,0,0,0,11.689,2.276c4.04.447,8.314.671,11.579-2.13A66.515,66.515,0,0,0,222.7,277.2c1.626-1.972-1.189-4.818-2.828-2.829Z"></path>
                                                <path class="e" d="M210.637,284.069c-1.245,3.536-3.281,7.444-2.9,11.286.454,4.548,4.423,6.8,8.357,8.182,6.55,2.3,13.565,1.64,20.162-.018,2.5-.627,1.438-4.485-1.063-3.857-5.4,1.357-10.941,1.994-16.411.52-2.766-.746-7.1-2.143-7.083-5.616.018-3.2,1.744-6.456,2.792-9.434.856-2.433-3.007-3.479-3.857-1.063Z"></path>
                                                <path class="e" d="M194.922,268.263c-.657-2.972-3.961-5.846-7.092-5.517a6.038,6.038,0,0,0-2.239.721c-.233.123-.457.262-.683.4-.111.066-.22.133-.332.2-.061.034-.535.265-.343.191.219-.085-.131.035-.185.047-.373.083.629-.083-.268.05-.427.063-.852.121-1.273.218a10.861,10.861,0,0,0-2.261.826,8.725,8.725,0,0,0-5,6.805c-.441,3.1.1,6.466,2.62,8.564,2.793,2.325,6.371,2.57,9.865,2.38a2.044,2.044,0,0,0,2-2,2.018,2.018,0,0,0-2-2,23.4,23.4,0,0,1-4.006-.061,10.649,10.649,0,0,1-1.211-.25,3.591,3.591,0,0,1-1.055-.427,4.292,4.292,0,0,1-1.872-1.737,6.206,6.206,0,0,1-.485-2.831,5.875,5.875,0,0,1,.116-1.278,8.678,8.678,0,0,1,.407-1.337,3.813,3.813,0,0,1,1.637-1.816,7.625,7.625,0,0,1,3.052-1.124,7.888,7.888,0,0,0,2.866-1.114,6.206,6.206,0,0,1,.7-.381c-.338.144.534-.113.163-.065a1.573,1.573,0,0,1,1.115.276,3.706,3.706,0,0,1,1.91,2.33,2,2,0,1,0,3.857-1.063Z"></path>
                                                <path class="e" d="M218.823,263.786q.153.33.295.664l-.2-.478a22.846,22.846,0,0,1,.963,2.85,2.073,2.073,0,0,0,.92,1.195,2,2,0,0,0,2.736-.718,2.085,2.085,0,0,0,.2-1.541,25.555,25.555,0,0,0-1.46-3.991,2.01,2.01,0,0,0-1.195-.919,2.043,2.043,0,0,0-1.541.2,2.017,2.017,0,0,0-.919,1.195l-.072.532a1.987,1.987,0,0,0,.273,1.009Z"></path>
                                                <path class="e" d="M205.52,314.588v9.931a2.01,2.01,0,0,0,.991,1.727q11.381,6.564,22.775,13.1c1.7.982,3.351,2.139,5.35,2.373,2.664.31,4.657-.912,6.858-2.183l13.23-7.641,7.585-4.38a13.235,13.235,0,0,0,3.568-2.494,7.337,7.337,0,0,0,1.761-4.661c.09-2.574-3.91-2.571-4,0-.083,2.353-2.418,3.164-4.178,4.18l-6.432,3.714-12.81,7.4c-1.518.877-3.191,2.285-5.032,2.121-1.44-.128-2.87-1.3-4.1-2q-5.631-3.243-11.265-6.479t-11.294-6.5l.99,1.727v-9.931c0-2.573-4-2.578-4,0Z"></path>
                                                <path class="b" d="M265.638,308.153c0-12.285-.013-27.542-.013-32.483a1.692,1.692,0,0,0-2.512-1.488c-6.112,3.392-18.064,10.32-24.592,14.224a5.131,5.131,0,0,0-2.512,4.4v32.523C245.211,319.9,256.67,313.261,265.638,308.153Z"></path>
                                                <path class="e" d="M238.006,339.522v-44.33c0-1.3-.251-2.92.49-4.057a7,7,0,0,1,2.528-1.894q1.548-.919,3.1-1.831,7.031-4.136,14.114-8.181,1.583-.9,3.169-1.8c.284-.16,2.71-1.245,2.712-1.519,0,.225-.5-.086-.457-.1-.239.065.118-.269-.04-.012-.1.155,0,.689,0,.875v1.994q0,5.876,0,11.753.006,14.97.011,29.94c0,2.574,4,2.578,4,0q0-14.013-.01-28.025l-.006-12.829a28.812,28.812,0,0,0-.064-4.418,3.693,3.693,0,0,0-2.761-3.016c-1.458-.337-2.639.346-3.863,1.031-4.727,2.647-9.419,5.359-14.1,8.086q-3.519,2.048-7.023,4.119c-2.368,1.4-4.719,2.723-5.534,5.56a17.21,17.21,0,0,0-.269,4.683v43.969c0,2.573,4,2.578,4,0Z"></path>
                                                <path class="e" d="M237.013,327.089q14.726-8.721,29.616-17.168c2.239-1.27.225-4.727-2.019-3.454q-14.891,8.439-29.616,17.168c-2.214,1.31-.2,4.77,2.019,3.454Z"></path>
                                                <path class="a" d="M241.042,178.389a6.71,6.71,0,0,0-2-4.258,14.169,14.169,0,0,1-2.528.524c-4.884.469-9.517.746-13.836-1.582l-3.487-2.551c-4.11.613-8.647.843-11.868-.274a8.76,8.76,0,0,1-1.035-.438c-1.666,1.492-5.285,4.693-6.111,6.21a6.061,6.061,0,0,0-.416,5.416,5.883,5.883,0,0,0,4.106,2.965,13.531,13.531,0,0,0,5.207-.111,35.039,35.039,0,0,0,7.962-2.338,7.465,7.465,0,0,0,.056,2.65,5.566,5.566,0,0,0,3.027,3.556,10.707,10.707,0,0,0,5.894.857,32.1,32.1,0,0,0,8.708-2.255c1.817-.672,3.732-1.449,4.855-3.028A7.3,7.3,0,0,0,241.042,178.389Z"></path>
                                                <path class="e" d="M205.272,168.035c-1.343,1.215-2.7,2.41-4,3.678a12.678,12.678,0,0,0-3.565,5.015,7.187,7.187,0,0,0,1.841,7.674,10.292,10.292,0,0,0,8.145,2.093,37.136,37.136,0,0,0,9.482-2.45,2.063,2.063,0,0,0,1.4-2.46,2.014,2.014,0,0,0-2.46-1.4,31.967,31.967,0,0,1-8.88,2.357c-2.158.192-5.407-.063-5.891-2.645a4.491,4.491,0,0,1,.683-3.079c.053-.084.43-.565.12-.187.109-.133.219-.266.333-.4.347-.4.714-.785,1.086-1.162,1.45-1.47,3.006-2.828,4.536-4.212a2,2,0,0,0-2.828-2.829Z"></path>
                                                <path class="e" d="M219.843,174.764c-3.034,2.059-5.149,5.214-4.883,9a8.009,8.009,0,0,0,6.534,7.018c4.1.864,8.4-.188,12.268-1.551,3.724-1.312,7.134-2.729,8.7-6.642,1.294-3.233.62-8.673-2.827-10.432-2.288-1.168-4.315,2.282-2.019,3.454.907.462,1.283,1.851,1.425,2.781a5.588,5.588,0,0,1-1.2,4.333,8.668,8.668,0,0,1-3.872,2.188,41.775,41.775,0,0,1-5.825,1.791c-2.688.563-6.853,1-8.684-1.616-1.677-2.394.4-5.509,2.4-6.867,2.118-1.437.119-4.9-2.019-3.454Z"></path>
                                                <path class="a" d="M225.4,122.7c-2.152.117-4.337.158-6.495.153l-.759,0h-.114c-5.458-.018-10.733-.377-14.75-.7.008.241.01.374.01.374.234,11.4,1.383,37.319,1.9,46.627a7.761,7.761,0,0,0,2.134,1.1c3.221,1.117,7.758.887,11.868.274l3.487,2.551c4.319,2.328,8.952,2.051,13.836,1.582a11.315,11.315,0,0,0,4.377-1.333c.156-12.442.017-40.493-.751-52.7A88.64,88.64,0,0,1,225.4,122.7Z"></path>
                                                <path class="e" d="M218.533,124.744q0,18.254.084,36.507.033,5.391.094,10.782c.031,2.572,4.031,2.579,4,0-.159-13.119-.168-26.241-.176-39.361q0-3.965,0-7.928c0-2.574-4-2.578-4,0Z"></path>
                                                <path class="e" d="M201.288,122.522c.169,8.093.511,16.184.851,24.272q.271,6.448.573,12.9.127,2.688.261,5.375a22.679,22.679,0,0,0,.285,4.616c.36,1.311,2.195,2.009,3.349,2.431a16.2,16.2,0,0,0,3.844.8,37.115,37.115,0,0,0,9.269-.457,2.013,2.013,0,0,0,1.4-2.46,2.052,2.052,0,0,0-2.46-1.4c-3.866.563-9.067,1.252-12.461-1.171l.99,1.727c-.684-12.415-1.2-24.844-1.625-37.27-.108-3.119-.208-6.238-.273-9.357-.053-2.571-4.053-2.58-4,0Z"></path>
                                                <path class="e" d="M221.666,174.8a20.2,20.2,0,0,0,9.194,2.172,30.749,30.749,0,0,0,8.339-.8c1.133-.31,2.783-.758,3.416-1.84.489-.835.288-2.2.3-3.152q.027-3.024.031-6.048c.022-9.934-.05-19.872-.268-29.8-.1-4.685-.226-9.372-.5-14.05-.148-2.559-4.149-2.576-4,0,.81,14.013.778,28.1.768,42.134,0,3.3-.016,6.607-.057,9.911l.991-1.727c-2.139,1.339-5.087,1.279-7.522,1.359a17.169,17.169,0,0,1-8.672-1.608c-2.282-1.185-4.307,2.265-2.019,3.454Z"></path>
                                                <path class="a" d="M226.894,33.658c-11.5-3.451-18-.292-19.916,4.208a25.817,25.817,0,0,0-2.292,5.5,26.874,26.874,0,0,0-.527,3.623c-.03.323-.055.629-.076.9a17.916,17.916,0,0,0,31.6,12.891c2.231-.069,3.5-.045,5.332-.86a6.78,6.78,0,0,0,3.721-3.992,5.408,5.408,0,0,0-1.092-5.314,4.589,4.589,0,0,0-2.933-1.53s.938-8.513-6.728-12.263A49.149,49.149,0,0,0,226.894,33.658Z"></path>
                                                <path class="i" d="M219.364,26.878a20.625,20.625,0,0,0-2.72.891,17.07,17.07,0,0,0-6.458,4.9,21.246,21.246,0,0,0,11.187,8.193.869.869,0,0,0,.8-.028.878.878,0,0,0,.236-.559l.436-2.653,6.642,5.963a17.224,17.224,0,0,0,5.153,2.744l8.929,2.976a17.073,17.073,0,0,0,.17-9.289,17.653,17.653,0,0,0-6.14-9.646,19.22,19.22,0,0,0-11.153-4.125A24.859,24.859,0,0,0,219.364,26.878Z"></path>
                                                <path class="e" d="M236.2,62.769a13.73,13.73,0,0,0,6.288-1.347,8.814,8.814,0,0,0,4.114-4.79,7.522,7.522,0,0,0-.618-6.216,7.012,7.012,0,0,0-4.747-3.257,2,2,0,0,0-1.063,3.857c.388.077.757.181,1.135.293s-.321-.2.027.015c.108.065.226.135.337.2.323.177-.292-.292.069.05.124.117.252.229.372.35s.228.24.337.365c-.277-.32.043.089.08.149.088.147.165.3.24.452-.195-.4.041.146.07.243.058.194.1.39.14.588-.075-.348,0-.012.01.158s.012.348.006.522c0,.116-.012.231-.023.347q.051-.322.014-.1a7.793,7.793,0,0,1-.306,1.092c.153-.4-.071.118-.095.163-.083.156-.173.307-.268.455-.064.1-.131.2-.2.289q.177-.222.042-.059c-.141.149-.269.309-.414.454-.125.124-.257.239-.387.357-.333.306.2-.107-.148.118a11.9,11.9,0,0,1-1.054.613c-.337.173.2-.055-.226.095-.173.061-.345.124-.521.178a9.511,9.511,0,0,1-1.169.267c.358-.062.029,0-.145.012s-.353.029-.529.039c-.456.028-.912.04-1.368.053a2,2,0,0,0,0,4Z"></path>
                                                <path class="f" d="M193.2,73.348c.607.635,1.222,1.267,1.837,1.88,3.643-4.538,9.25-7.849,14.851-11.2A36.187,36.187,0,0,0,215.3,79.584a2.486,2.486,0,0,0,.82.9c.763.405,1.627-.189,2.295-.776a49.061,49.061,0,0,0,11.636-14.7c3.623-.434,9.3,3.722,11.719,6.553a26.855,26.855,0,0,1,3.359,5.029,41.8,41.8,0,0,1,2.956,8.389,29.076,29.076,0,0,1-2.657,21.158,28.333,28.333,0,0,1-3.568,5.05c-.08.091-.16.18-.241.27.132,1.122.237,2,.237,2s.484,4.067.484,6.667A92.067,92.067,0,0,1,225.4,122.7c-9.682.524-20.049-.405-25.518-.844-.314-4.092-.207-13.467-.484-17.867l-3.7-9.961c-3.814,3.105-8.194-4.679-9.928-7.1-2.692-3.757-5.164-7.679-7.489-11.673l10.467-6.786c.454.517.939,1.064,1.448,1.629C191.13,71.144,192.15,72.252,193.2,73.348Z"></path>
                                                <path class="e" d="M163.662,35.763Q169.3,48,174.253,60.539a2.061,2.061,0,0,0,2.461,1.4,2.015,2.015,0,0,0,1.4-2.46q-5.136-13.017-10.995-25.731a2.017,2.017,0,0,0-2.737-.718,2.046,2.046,0,0,0-.717,2.736Z"></path>
                                                <path class="e" d="M232.5,67.364c8.273,2.974,12.338,11.529,13.986,19.577a26.878,26.878,0,0,1-6.774,23.628,27.22,27.22,0,0,1-11.317,7.147c-2.439.79-1.395,4.653,1.064,3.857a30.749,30.749,0,0,0,21.2-33.834,36.664,36.664,0,0,0-4.885-14.062,24.579,24.579,0,0,0-12.212-10.17c-2.427-.872-3.472,2.992-1.064,3.857Z"></path>
                                                <path class="e" d="M230.435,91.613a13,13,0,0,1-.8,2.709l.2-.478a12.978,12.978,0,0,1-1.666,2.841,2,2,0,0,0-.2,1.541,2,2,0,0,0,2.46,1.4l.478-.2a2.011,2.011,0,0,0,.717-.717,14.089,14.089,0,0,0,2.671-6.027,2.15,2.15,0,0,0-.2-1.541,2,2,0,0,0-2.736-.718,1.966,1.966,0,0,0-.919,1.195Z"></path>
                                                <path class="a" d="M181.644,59.023a9.717,9.717,0,0,0-4.518,1.007,8.348,8.348,0,0,0-4.59,6.721,7.831,7.831,0,0,0,3.713,7.183,3.309,3.309,0,0,0,2.814.466l1.355-.534,7.1-4.6.18-1.621c.267-2.4-.178-5.511-2.384-7.34A5.994,5.994,0,0,0,181.644,59.023Z"></path>
                                                <path class="e" d="M207.407,63.181c-4.956,2.978-10.084,6.1-13.789,10.632h2.829c-2.174-2.179-4.257-4.447-6.291-6.758a2.012,2.012,0,0,0-2.423-.313l-10.467,6.786a2.038,2.038,0,0,0-.718,2.736c2.946,5.047,6.148,9.956,9.561,14.7,2.237,3.109,6.434,7.95,10.593,4.791a2.066,2.066,0,0,0,.717-2.737,2.014,2.014,0,0,0-2.736-.717,2.087,2.087,0,0,1-.81.452c.129-.024-.357-.05-.349-.048a4.208,4.208,0,0,1-1.556-.977,22.309,22.309,0,0,1-3.333-4.121c-2.974-4.4-5.951-8.766-8.633-13.361l-.717,2.737L189.752,70.2l-2.424-.312c2.034,2.311,4.116,4.578,6.29,6.758a2.014,2.014,0,0,0,2.829,0c3.507-4.288,8.288-7.189,12.979-10.007,2.2-1.324.2-4.784-2.019-3.454Z"></path>
                                                <path class="e" d="M189.694,67.644a10.677,10.677,0,0,0-2.188-7.97c-2.057-2.455-5.363-2.988-8.367-2.421-5.987,1.13-10.294,7.52-7.994,13.429,1.222,3.138,4.7,6.881,8.45,5.647a2.044,2.044,0,0,0,1.4-2.46,2.019,2.019,0,0,0-2.46-1.4.942.942,0,0,1-.833-.032,4.285,4.285,0,0,1-1.119-.706,6,6,0,0,1-1.633-2.251,5.715,5.715,0,0,1,.376-5.107,6.665,6.665,0,0,1,4.217-3.116,7.2,7.2,0,0,1,2.6-.2,6.027,6.027,0,0,1,.74.175c.1.031.206.065.307.1.328.121-.2-.1.115.052a2.867,2.867,0,0,1,1,.708,4.8,4.8,0,0,1,1.271,2.506c.038.163.133.689.132.675-.025-.188.012.154.011.152.012.174.026.346.033.52a11.845,11.845,0,0,1-.06,1.7,2.014,2.014,0,0,0,2,2,2.045,2.045,0,0,0,2-2Z"></path>
                                                <path class="e" d="M197.394,103.988c.358,5.948.048,11.924.484,17.867a2.062,2.062,0,0,0,2,2c6.794.546,13.593,1.05,20.414,1a101.23,101.23,0,0,0,22.578-2.8,2.027,2.027,0,0,0,1.469-1.928,60.941,60.941,0,0,0-.484-6.667,2.062,2.062,0,0,0-2-2,2.012,2.012,0,0,0-2,2,60.959,60.959,0,0,1,.484,6.667l1.468-1.929a96.575,96.575,0,0,1-21.98,2.661c-6.666.027-13.309-.465-19.949-1l2,2c-.436-5.943-.126-11.919-.484-17.867-.154-2.558-4.155-2.575-4,0Z"></path>
                                                <path class="a" d="M220.016,101.455c-1.511-3.853-3.122-9.853-5.066-15.289-7.278.381-13.889.77-20.356,1.034q3.519,12.228,7.643,24.365c2.1-.185,5.557-.377,7.957-.643Z"></path>
                                                <path class="e" d="M221.945,100.923c-1.939-5.006-3.27-10.231-5.067-15.289a2.05,2.05,0,0,0-1.928-1.468c-6.785.356-13.568.754-20.356,1.034a2.024,2.024,0,0,0-1.929,2.532Q196.2,100,200.308,112.1a2.039,2.039,0,0,0,1.929,1.468c2.651-.227,5.311-.359,7.957-.643a2.059,2.059,0,0,0,2-2,2.013,2.013,0,0,0-2-2c-2.646.284-5.306.416-7.957.643l1.928,1.469q-4.107-12.092-7.642-24.366L194.594,89.2c6.788-.28,13.571-.678,20.356-1.034L213.021,86.7c1.8,5.057,3.128,10.283,5.067,15.289a2.06,2.06,0,0,0,2.46,1.4,2.016,2.016,0,0,0,1.4-2.461Z"></path>
                                                <path class="a" d="M215.65,102.949a4.726,4.726,0,0,0-.876.387c-4.987,2.887-3.6,10.13-.8,12.416,5.5,4.486,9.611,4.4,15.31,1.514,2.376-1.61,3.993-3.76,3.829-7-.123-2.421-.86-3.993-2.211-4.8a4.75,4.75,0,0,0-5.629.117,17.62,17.62,0,0,0-6.079-2.921A7.145,7.145,0,0,0,215.65,102.949Z"></path>
                                                <path class="e" d="M215.118,101.021a8.873,8.873,0,0,0-5.633,9.281,11.64,11.64,0,0,0,1.457,4.866,12.036,12.036,0,0,0,4.269,3.934,13.4,13.4,0,0,0,12.434,1.081,12.391,12.391,0,0,0,5.668-3.975,9.124,9.124,0,0,0,1.8-5.937c-.112-2.461-.871-4.99-3.021-6.413a6.863,6.863,0,0,0-7.828,0h2.019c-3.3-2.277-7.126-4.087-11.168-2.839-2.452.757-1.406,4.62,1.063,3.857a5.8,5.8,0,0,1,4.053.181,18.524,18.524,0,0,1,4.033,2.255,1.935,1.935,0,0,0,2.019,0,3.032,3.032,0,0,1,3.757-.029,2.379,2.379,0,0,1,.685.967,6.493,6.493,0,0,1,.4,2.319c.051,3.017-2.173,4.857-4.824,5.863a9.322,9.322,0,0,1-8.264-.31,18.11,18.11,0,0,1-2.276-1.491,7.5,7.5,0,0,1-.669-.564c-.08-.077-.153-.161-.23-.24-.058-.063-.114-.128-.168-.194q.173.228.047.054c-.14-.2-.271-.408-.392-.622-.048-.084-.379-.755-.261-.483a8.839,8.839,0,0,1-.527-1.766,6.855,6.855,0,0,1,.219-3.367,4.262,4.262,0,0,1,2.4-2.573,2.052,2.052,0,0,0,1.4-2.46A2.017,2.017,0,0,0,215.118,101.021Z"></path>
                                                <path class="e" d="M205.251,36.857c-3.769,6.87-4.514,15.422-.53,22.392a19.939,19.939,0,0,0,31.8,3.6c1.769-1.869-1.055-4.7-2.828-2.828a16.111,16.111,0,0,1-22.19,1.262c-6.519-5.717-6.77-15.17-2.8-22.41,1.238-2.258-2.215-4.279-3.454-2.019Z"></path>
                                                <path class="e" d="M214.4,46.469a3.134,3.134,0,0,1-1.474,2.241,2.438,2.438,0,0,1-1.816.186,2.736,2.736,0,0,1-1.839-1.649,3.2,3.2,0,0,1,1.1-3.6,2.529,2.529,0,0,1,3.411.481A2.82,2.82,0,0,1,214.4,46.469Z"></path>
                                                <path class="e" d="M225.9,50.772a3.138,3.138,0,0,1-1.474,2.241,2.436,2.436,0,0,1-1.816.185,2.731,2.731,0,0,1-1.839-1.648,3.2,3.2,0,0,1,1.1-3.6,2.53,2.53,0,0,1,3.411.481A2.823,2.823,0,0,1,225.9,50.772Z"></path>
                                                <path class="e" d="M208.705,38.876a18.683,18.683,0,0,1,5.919-7.687,17.207,17.207,0,0,1,9.815-2.962c6.51-.151,12.846,2.7,15.968,8.62a15.941,15.941,0,0,1,1.392,11.39c-.643,2.495,3.214,3.559,3.857,1.064a20,20,0,0,0-7.729-21.152c-6.783-4.7-16.637-5.448-23.914-1.319a21.474,21.474,0,0,0-8.762,10.027,2.064,2.064,0,0,0,.717,2.736,2.016,2.016,0,0,0,2.737-.717Z"></path>
                                                <path class="e" d="M209.932,35.611a23.044,23.044,0,0,0,7.675,5.907c1.322.62,3.345,1.761,4.857,1.345,2.072-.569,2.03-2.984,2.314-4.714l-3.343.883c2.158,1.938,4.3,3.893,6.476,5.814a18.329,18.329,0,0,0,6.2,3.407c2.437.845,3.484-3.017,1.063-3.857-4.383-1.52-7.539-5.164-10.913-8.193-1.008-.905-3.082-.705-3.342.883a9.3,9.3,0,0,1-.471,2.734l.717-.717-.244.1,1.009-.273a7.05,7.05,0,0,1-2.306-.871,21.375,21.375,0,0,1-2.582-1.44,20.021,20.021,0,0,1-4.283-3.841c-1.672-1.963-4.489.878-2.829,2.828Z"></path>
                                                <path class="e" d="M208.094,65.684a39.047,39.047,0,0,0,3.062,10.442,30.261,30.261,0,0,0,2.416,4.467,4.06,4.06,0,0,0,2.306,1.924,3.755,3.755,0,0,0,2.869-.566,24.215,24.215,0,0,0,3.927-3.5q1.675-1.68,3.187-3.512a52.938,52.938,0,0,0,5.732-8.58c1.219-2.267-2.233-4.29-3.453-2.019a49.22,49.22,0,0,1-10.281,13.179c-.282.258-.559.533-.86.77-.126.1-.5.254-.527.349q1.016.531.642.065c-.092-.137-.182-.275-.268-.415-.21-.332-.412-.67-.609-1.01a32.041,32.041,0,0,1-1.9-3.8,36.808,36.808,0,0,1-2.388-8.862,2.013,2.013,0,0,0-2.46-1.4,2.054,2.054,0,0,0-1.4,2.461Z"></path>
                                            </g>
                                        </svg>
                                    </div>

                                    <p>Moral Values<br>with Teachers</p>
                                    <button id="myButton2" class="button4" onclick="redirectToMoralWithTeachers()">
                                        Click Here
                                    </button>

                                    <script>
                                        function redirectToMoralWithTeachers() {
                                            window.location.href = 'moralwithteachers.php';
                                        }

                                    </script>

                                </div>

                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4 text-center mx-auto">
                                        <div class="card friends">
                                            <div class="overlay"></div>
                                            <div class="circle">


                                                <svg height="209px" width="209px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-35.84 -35.84 583.68 583.68" xml:space="preserve" fill="#1e1515" stroke="#1e1515" transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)" stroke-width="0.0051200099999999995">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="28.672056000000005">
                                                        <path style="fill:#8995d2;" d="M280.462,55.427h192.274c17.625,0,32.046,14.421,32.046,32.046v112.16 c0,17.625-14.421,32.046-32.046,32.046H304.325v30.386c0,3.569-4.315,5.356-6.838,2.832c0,0-49.07-47.64-49.07-65.265V87.472 C248.416,69.848,262.837,55.427,280.462,55.427z"></path>
                                                        <path style="fill:#9e6796;" d="M249.418,25.033H37.115c-17.625,0-32.046,14.421-32.046,32.046v112.16 c0,17.625,14.421,32.046,32.046,32.046h124.177v30.386c0,3.569,4.315,5.356,6.838,2.832l33.219-33.219h48.069 c17.625,0,32.046-14.421,32.046-32.046V57.077C281.463,39.453,267.043,25.033,249.418,25.033z"></path>
                                                        <g>
                                                            <path style="fill:#E6AF78;" d="M179.583,430.769c-2.63-0.751-10.849-3.731-10.861-10.336l-0.061-19.376l-64.528,0.14l0.012,19.377 c0.011,5.821-6.361,8.848-9.672,10.006l42.028,25.731L179.583,430.769z"></path>
                                                            <path style="fill:#E6AF78;" d="M168.722,420.434l-0.051-16.221c-8.474,16.474-25.631,27.752-45.433,27.752 c-7.954,0-15.484-1.82-22.197-5.064c-2.089,1.871-4.775,3.052-6.568,3.68l42.028,25.731l43.082-25.541 C176.953,430.017,168.734,427.038,168.722,420.434z"></path>
                                                        </g>
                                                        <path style="fill:#d8c0ab;" d="M168.671,404.212l-0.01-3.154l-64.528,0.14l0.012,19.377c0.005,2.668-1.336,4.743-3.103,6.326 c6.713,3.244,14.241,5.064,22.197,5.064C143.04,431.964,160.196,420.687,168.671,404.212z"></path>
                                                        <path style="fill:#846662;" d="M184.386,279.969c-24.414,3.534-56.462-19.422-80.324,0.15c-14.45,0.027-23.636,11.551-23.607,26.912 c0.027,14.477,8.02,43.21,8.02,43.21l0.015,7.758c-0.027-14.091,8.253-37.808,8.253-37.808c41.423-0.078,75.53,11.763,87.75,16.609 l-0.001-0.751l0.001,0.751c0.885,0.352,1.65,0.664,2.3,0.934C193.332,309.739,187.312,286.585,184.386,279.969z"></path>
                                                        <path style="fill:#f5d5ad;" d="M88.489,357.998c0.056,29.994,21.201,57.971,48.023,57.921c26.822-0.051,48.079-26.588,48.022-56.582 l-0.042-22.538c-12.22-4.847-46.328-16.688-87.75-16.609C96.742,320.191,88.462,343.907,88.489,357.998z"></path>
                                                        <path style="fill:#E6AF78;" d="M105.804,364.947c-0.817-38.95,5.657-36.99,5.657-36.99c11.757-2.713,29.188-2.02,48.234,0.729 c-16.382-4.394-38.38-8.542-62.954-8.496c0,0-8.279,23.717-8.253,37.808c0.052,27.835,18.271,53.918,42.331,57.49 C120.399,407.256,106.297,388.395,105.804,364.947z"></path>
                                                        <path style="fill:#0d152b;" d="M232.718,470.34c-0.025-13.441-8.525-27.775-23.153-31.842l-29.978-7.726 c-0.001,0-0.003-0.001-0.004-0.001l-43.082,25.541l-42.028-25.731c-0.448,0.156-0.843,0.281-1.156,0.372l-29.949,7.838 c-14.613,4.124-23.058,18.488-23.033,31.93l0.016,8.652c0.009,5.061,4.703,9.156,10.483,9.145l171.449-0.341 c5.78-0.011,10.458-4.123,10.449-9.184L232.718,470.34z"></path>
                                                        <g>
                                                            <path style="fill:#9e6796;" d="M75.359,488.044v-9.645c0-4.94-2.239-9.648-6.16-12.949l-20.563-17.152 c-5.389,6.276-8.314,14.509-8.299,22.423l0.016,8.652c0.006,3.425,2.161,6.402,5.343,7.969c1.335,0.445,2.621,0.703,3.667,0.703 h25.996V488.044z"></path>
                                                            <path style="fill:#9e6796;" d="M232.734,478.992l-0.016-8.652c-0.013-6.906-2.268-14.044-6.437-19.907l-18.492,15.018 c-3.921,3.302-6.16,8.009-6.16,12.949v9.645h22.34C228.945,487.328,232.743,483.55,232.734,478.992z"></path>
                                                        </g>
                                                        <path style="fill:#353131;" d="M184.386,279.969c-10.6,1.534-22.64-1.925-34.824-4.729c-15.877-3.654-31.999-6.196-45.501,4.879 c-0.115,0-0.226,0.007-0.34,0.009c-1.672,1.726,1.491,6.628,1.491,6.628s-6.342,3.004-9.013,15.021 c-1.461,6.575-1.069,13.624,0.987,18.415c18.804,0.003,36.078,2.453,50.469,5.578c17.156,3.724,30.215,8.402,36.837,11.029 c0.885,0.352,1.65,0.664,2.3,0.934C193.332,309.739,187.312,286.585,184.386,279.969z"></path>
                                                        <g>
                                                            <path style="fill:#E6AF78;" d="M419.925,430.318c-2.63-0.751-10.849-3.731-10.861-10.336l-0.061-19.376l-64.528,0.14l0.012,19.377 c0.011,5.821-6.361,8.848-9.672,10.006l42.028,25.731L419.925,430.318z"></path>
                                                            <path style="fill:#E6AF78;" d="M409.063,419.982l-0.051-16.221c-8.474,16.474-25.631,27.752-45.433,27.752 c-7.954,0-15.484-1.82-22.197-5.064c-2.089,1.871-4.775,3.052-6.568,3.68l42.028,25.731l43.082-25.541 C417.296,429.566,409.075,426.586,409.063,419.982z"></path>
                                                        </g>
                                                        <path style="fill:#d8c0ab;" d="M409.012,403.761l-0.01-3.154l-64.528,0.14l0.012,19.377c0.005,2.668-1.336,4.743-3.103,6.326 c6.713,3.244,14.241,5.064,22.197,5.064C383.382,431.512,400.538,420.235,409.012,403.761z"></path>
                                                        <path style="fill:#846662;" d="M424.728,279.517c-24.414,3.534-56.462-19.422-80.324,0.15c-14.45,0.027-23.636,11.551-23.607,26.912 c0.027,14.477,8.02,43.21,8.02,43.21l0.015,7.758c-0.027-14.091,8.253-37.808,8.253-37.808c41.423-0.078,75.53,11.763,87.75,16.609 l-0.001-0.751l0.001,0.751c0.885,0.352,1.65,0.664,2.3,0.934C433.673,309.287,427.654,286.133,424.728,279.517z"></path>
                                                        <path style="fill:#f5d5ad;" d="M328.832,357.547c0.056,29.994,21.201,57.971,48.023,57.921 c26.822-0.051,48.079-26.588,48.022-56.582l-0.042-22.538c-12.22-4.847-46.328-16.688-87.75-16.609 C337.084,319.739,328.805,343.456,328.832,357.547z"></path>
                                                        <path style="fill:#E6AF78;" d="M346.147,364.496c-0.817-38.95,5.657-36.99,5.657-36.99c11.757-2.713,29.188-2.02,48.234,0.729 c-16.382-4.394-38.38-8.542-62.954-8.496c0,0-8.279,23.717-8.253,37.808c0.052,27.835,18.271,53.918,42.331,57.49 C360.741,406.804,346.638,387.943,346.147,364.496z"></path>
                                                        <path style="fill:#a8e1ff;" d="M473.06,469.887c-0.025-13.441-8.525-27.775-23.153-31.842l-29.978-7.726 c-0.001,0-0.003-0.001-0.004-0.001l-43.082,25.541l-42.028-25.731c-0.448,0.156-0.843,0.281-1.156,0.372l-29.949,7.838 c-14.613,4.124-23.058,18.488-23.033,31.93l0.016,8.652c0.009,5.061,4.703,9.156,10.483,9.145l171.449-0.341 c5.78-0.011,10.458-4.123,10.449-9.184L473.06,469.887z"></path>
                                                        <g>
                                                            <path style="fill:#4993c1;" d="M315.701,487.592v-9.645c0-4.94-2.239-9.648-6.16-12.949l-20.563-17.152 c-5.389,6.276-8.314,14.509-8.299,22.423l0.016,8.652c0.006,3.425,2.161,6.402,5.343,7.969c1.335,0.445,2.621,0.703,3.667,0.703 h25.996V487.592z"></path>
                                                            <path style="fill:#4993c1;" d="M473.077,478.54l-0.016-8.652c-0.013-6.906-2.268-14.044-6.437-19.907l-18.492,15.018 c-3.921,3.302-6.16,8.009-6.16,12.949v9.645h22.34C469.286,486.876,473.085,483.099,473.077,478.54z"></path>
                                                        </g>
                                                        <path style="fill:#353131;" d="M424.728,279.517c-10.6,1.534-22.64-1.925-34.824-4.729c-15.877-3.654-31.999-6.196-45.501,4.879 c-0.115,0-0.226,0.007-0.34,0.009c-1.672,1.726,1.491,6.628,1.491,6.628s-6.342,3.004-9.013,15.021 c-1.461,6.575-1.069,13.624,0.987,18.415c18.804,0.003,36.078,2.453,50.469,5.578c17.156,3.724,30.215,8.402,36.837,11.029 c0.885,0.352,1.65,0.664,2.3,0.934C433.673,309.287,427.654,286.133,424.728,279.517z"></path>
                                                        <path d="M211.578,431.261c-0.046-0.013-0.092-0.025-0.138-0.037l-29.874-7.699c-2.873-0.838-5.11-2.409-5.335-3.114l-0.052-16.525 c0.063-0.075,0.13-0.144,0.192-0.22c10.137-12.163,15.703-27.91,15.672-44.341l-0.023-12.166c10.137-33.17,2.923-61.88-0.768-70.226 c-0.011-0.025-0.025-0.048-0.037-0.073c-0.069-0.15-0.144-0.296-0.222-0.441c-0.042-0.078-0.082-0.158-0.126-0.234 c-0.075-0.129-0.157-0.252-0.24-0.376c-0.058-0.087-0.113-0.175-0.174-0.259c-0.074-0.101-0.153-0.196-0.231-0.293 c-0.078-0.097-0.154-0.195-0.236-0.287c-0.071-0.079-0.147-0.153-0.221-0.229c-0.096-0.099-0.19-0.198-0.291-0.291 c-0.075-0.069-0.156-0.133-0.234-0.199c-0.104-0.088-0.208-0.179-0.316-0.261c-0.094-0.071-0.192-0.135-0.289-0.201 c-0.099-0.067-0.195-0.138-0.297-0.2c-0.123-0.076-0.25-0.144-0.378-0.212c-0.081-0.043-0.159-0.09-0.241-0.131 c-0.151-0.075-0.307-0.14-0.464-0.205c-0.063-0.026-0.125-0.056-0.189-0.08c-0.165-0.063-0.335-0.117-0.506-0.168 c-0.06-0.018-0.119-0.04-0.179-0.057c-0.16-0.044-0.324-0.079-0.489-0.112c-0.077-0.016-0.152-0.035-0.229-0.048 c-0.14-0.024-0.283-0.039-0.427-0.055c-0.106-0.012-0.212-0.027-0.319-0.035c-0.114-0.008-0.229-0.008-0.345-0.011 c-0.139-0.003-0.278-0.007-0.419-0.003c-0.092,0.003-0.184,0.012-0.276,0.018c-0.162,0.011-0.324,0.024-0.488,0.046 c-0.027,0.003-0.053,0.003-0.08,0.007c-7.814,1.131-17.28-1.117-27.303-3.496c-17.574-4.173-37.402-8.872-54.652,3.693 c-8.016,0.666-15.13,4.229-20.239,10.218c-5.287,6.197-8.189,14.753-8.171,24.095c0.026,13.913,6.568,38.842,8.022,44.211 l0.012,6.757c0.032,17.227,6.045,33.132,15.644,44.953l0.012,17.635c-0.223,0.683-2.453,2.261-5.324,3.11l-29.845,7.811 c-0.046,0.012-0.092,0.025-0.138,0.038c-18.752,5.291-28.534,23.711-28.504,39.172l0.016,8.652c0.008,4.578,2.068,8.995,5.651,12.12 c3.343,2.916,7.717,4.521,12.321,4.52c0.012,0,0.025,0,0.038,0l85.533-0.17c0.059,0.001,0.117,0.009,0.176,0.009 c0.005,0,0.01,0,0.015,0c0.062,0,0.122-0.008,0.184-0.01l85.54-0.17c9.912-0.019,17.963-7.514,17.946-16.709l-0.017-8.652 C240.2,454.865,230.35,436.481,211.578,431.261z M136.516,447.57l-28.568-17.068c2.257-2.687,3.715-5.988,3.708-9.933l-0.003-4.33 c7.511,4.576,15.946,7.191,24.789,7.191c0.027,0,0.057,0,0.084,0c8.706-0.017,17.093-2.371,24.671-6.791l0.012,3.807 c0.008,4.06,1.556,7.437,3.933,10.154L136.516,447.57z M92.542,292.7c2.862-3.355,6.743-5.061,11.533-5.07 c0.057,0,0.113-0.007,0.17-0.009c0.187-0.004,0.376-0.011,0.563-0.029c0.097-0.01,0.192-0.027,0.289-0.041 c0.147-0.021,0.293-0.039,0.44-0.068c0.112-0.022,0.22-0.053,0.329-0.08c0.128-0.031,0.256-0.061,0.383-0.099 c0.116-0.036,0.229-0.079,0.343-0.12c0.116-0.042,0.233-0.081,0.349-0.128c0.12-0.05,0.235-0.108,0.352-0.164 c0.104-0.049,0.208-0.095,0.311-0.15c0.13-0.07,0.254-0.148,0.381-0.226c0.083-0.051,0.169-0.098,0.251-0.153 c0.157-0.105,0.307-0.22,0.456-0.336c0.044-0.035,0.09-0.063,0.134-0.099c11.962-9.811,27.383-6.15,43.711-2.273 c8.725,2.072,17.686,4.2,26.356,4.2c0.093,0,0.185-0.004,0.278-0.005c2.175,7.796,4.392,21.966,2.038,38.862 c-12.61-4.623-43.272-14.032-83.985-14.032c-0.165,0-0.33,0-0.496,0c-0.02,0-0.039,0.003-0.059,0.003 c-0.166,0.001-0.33,0.013-0.495,0.026c-0.089,0.007-0.179,0.01-0.267,0.02c-0.133,0.015-0.265,0.039-0.397,0.061 c-0.117,0.02-0.236,0.036-0.352,0.061c-0.088,0.019-0.173,0.045-0.26,0.067c-0.154,0.039-0.308,0.077-0.459,0.125 c-0.045,0.014-0.088,0.033-0.132,0.048c-0.185,0.064-0.371,0.13-0.549,0.208c-0.027,0.012-0.052,0.026-0.079,0.038 c-0.191,0.086-0.381,0.176-0.564,0.277c-0.064,0.035-0.124,0.077-0.187,0.114c-0.141,0.083-0.282,0.165-0.418,0.257 c-0.13,0.088-0.253,0.187-0.378,0.283c-0.062,0.049-0.128,0.093-0.188,0.143c-0.153,0.127-0.299,0.264-0.444,0.405 c-0.028,0.027-0.058,0.051-0.085,0.078c-0.132,0.132-0.255,0.274-0.378,0.418c-0.036,0.042-0.075,0.081-0.11,0.124 c-0.095,0.116-0.182,0.24-0.27,0.364c-0.057,0.079-0.117,0.154-0.171,0.235c-0.062,0.093-0.116,0.192-0.174,0.288 c-0.072,0.12-0.146,0.239-0.212,0.365c-0.039,0.073-0.072,0.15-0.108,0.226c-0.075,0.153-0.148,0.307-0.212,0.467 c-0.007,0.018-0.016,0.033-0.023,0.051c-0.05,0.126-0.259,0.661-0.575,1.509c-0.728-4.512-1.209-8.704-1.215-11.924 C87.954,301.257,89.58,296.172,92.542,292.7z M95.995,355.251v-0.002c-0.015-8.155,3.457-20.116,5.985-27.499 c36.942,0.722,64.742,9.634,75.011,13.442l0.009,4.792c0,0.029,0,0.058,0,0.086l0.025,13.284 c0.05,26.55-18.508,49.015-40.526,49.056c-0.02,0-0.036,0-0.055,0c-21.499,0-40.393-23.548-40.444-50.424L95.995,355.251z M50.822,481.006c-0.961,0.014-1.856-0.297-2.455-0.819c-0.151-0.132-0.504-0.477-0.504-0.828l-0.016-8.653 c-0.019-9.782,5.987-21.384,17.499-24.669l27.338-7.155l36.314,21.696l0.038,20.274L50.822,481.006z M222.27,480.665l-78.214,0.155 l-0.038-20.237l36.714-21.762l26.883,6.928c11.524,3.242,17.572,14.821,17.59,24.603l0.017,8.652 C225.224,479.589,224.105,480.662,222.27,480.665z"></path>
                                                        <path d="M451.919,430.809c-0.046-0.013-0.092-0.025-0.138-0.037l-29.874-7.699c-2.873-0.838-5.11-2.409-5.335-3.114l-0.052-16.524 c0.063-0.075,0.13-0.145,0.193-0.22c10.137-12.163,15.703-27.911,15.672-44.342l-0.023-12.166 c10.138-33.17,2.923-61.88-0.768-70.227c-0.012-0.027-0.027-0.051-0.039-0.078c-0.066-0.144-0.139-0.284-0.213-0.423 c-0.045-0.084-0.088-0.169-0.135-0.251c-0.072-0.123-0.15-0.24-0.229-0.359c-0.061-0.093-0.121-0.187-0.185-0.275 c-0.069-0.094-0.143-0.183-0.216-0.274c-0.083-0.104-0.165-0.208-0.253-0.307c-0.063-0.07-0.131-0.136-0.197-0.204 c-0.104-0.108-0.207-0.216-0.317-0.316c-0.066-0.06-0.136-0.115-0.203-0.173c-0.114-0.098-0.228-0.196-0.348-0.287 c-0.082-0.062-0.169-0.118-0.253-0.176c-0.11-0.076-0.219-0.155-0.333-0.225c-0.11-0.068-0.224-0.128-0.339-0.19 c-0.093-0.051-0.185-0.105-0.28-0.152c-0.14-0.069-0.284-0.129-0.429-0.19c-0.074-0.031-0.147-0.066-0.223-0.094 c-0.157-0.06-0.318-0.11-0.48-0.16c-0.068-0.021-0.135-0.045-0.204-0.064c-0.156-0.042-0.315-0.076-0.475-0.109 c-0.08-0.017-0.16-0.036-0.24-0.05c-0.139-0.024-0.28-0.039-0.422-0.055c-0.108-0.013-0.214-0.027-0.323-0.035 c-0.114-0.008-0.229-0.008-0.344-0.011c-0.139-0.003-0.277-0.007-0.417-0.003c-0.093,0.003-0.186,0.012-0.279,0.019 c-0.161,0.011-0.321,0.023-0.483,0.045c-0.027,0.004-0.054,0.004-0.081,0.008c-7.813,1.13-17.281-1.117-27.303-3.496 c-17.575-4.173-37.402-8.873-54.653,3.693c-8.016,0.666-15.13,4.229-20.24,10.218c-5.287,6.197-8.189,14.753-8.171,24.095 c0.026,13.913,6.568,38.842,8.022,44.211l0.008,4.006c0,0.005,0,0.009,0,0.014c0,0.001,0,0.003,0,0.004l0.005,2.732 c0.03,16.247,5.729,32.621,15.635,44.922c0.003,0.004,0.006,0.007,0.009,0.011l0.013,17.654c-0.223,0.684-2.454,2.262-5.324,3.111 l-29.845,7.811c-0.046,0.012-0.092,0.025-0.138,0.038c-18.752,5.292-28.534,23.711-28.504,39.172l0.016,8.652 c0.008,4.578,2.068,8.995,5.651,12.12c3.343,2.916,7.717,4.521,12.321,4.521c0.012,0,0.025,0,0.037,0l85.53-0.17 c0.06,0.001,0.118,0.009,0.179,0.009c0.005,0,0.01,0,0.015,0c0.063,0,0.124-0.008,0.187-0.01l85.538-0.17 c9.912-0.018,17.963-7.514,17.946-16.709l-0.017-8.652C480.542,454.413,470.691,436.029,451.919,430.809z M376.857,447.119 l-28.568-17.067c2.257-2.687,3.715-5.988,3.708-9.933l-0.003-4.259c7.621,4.65,16.048,7.12,24.786,7.12c0.028,0,0.059,0,0.087,0 c8.706-0.017,17.094-2.371,24.671-6.79l0.012,3.807c0.008,4.06,1.556,7.436,3.933,10.153L376.857,447.119z M328.307,306.565 c-0.011-5.76,1.614-10.844,4.577-14.316c2.863-3.355,6.743-5.061,11.533-5.07c0.057,0,0.113-0.007,0.17-0.009 c0.187-0.004,0.376-0.011,0.563-0.029c0.098-0.01,0.192-0.027,0.289-0.041c0.147-0.021,0.293-0.039,0.44-0.068 c0.112-0.022,0.22-0.053,0.329-0.08c0.128-0.031,0.255-0.061,0.383-0.099c0.116-0.036,0.229-0.079,0.342-0.12 c0.116-0.042,0.233-0.081,0.348-0.128c0.12-0.05,0.235-0.108,0.353-0.164c0.104-0.049,0.208-0.095,0.311-0.15 c0.13-0.07,0.254-0.148,0.381-0.226c0.084-0.051,0.169-0.098,0.251-0.153c0.157-0.105,0.307-0.22,0.456-0.336 c0.044-0.035,0.09-0.063,0.134-0.099c11.962-9.811,27.384-6.15,43.711-2.273c8.724,2.072,17.686,4.2,26.355,4.2 c0.093,0,0.185-0.004,0.278-0.005c2.176,7.796,4.393,21.966,2.038,38.862c-12.61-4.623-43.271-14.032-83.983-14.032 c-0.165,0-0.332,0-0.498,0c-0.018,0-0.035,0.002-0.052,0.003c-0.177,0.001-0.354,0.013-0.529,0.027 c-0.078,0.006-0.156,0.009-0.234,0.017c-0.146,0.017-0.29,0.042-0.436,0.067c-0.104,0.018-0.21,0.032-0.313,0.054 c-0.101,0.021-0.199,0.052-0.299,0.078c-0.141,0.036-0.282,0.07-0.421,0.114c-0.058,0.019-0.113,0.043-0.17,0.063 c-0.172,0.06-0.345,0.121-0.512,0.193c-0.04,0.017-0.077,0.039-0.117,0.056c-0.178,0.081-0.357,0.165-0.527,0.259 c-0.069,0.038-0.133,0.083-0.201,0.123c-0.136,0.081-0.273,0.16-0.405,0.249c-0.126,0.086-0.245,0.182-0.367,0.275 c-0.066,0.052-0.136,0.099-0.201,0.152c-0.147,0.122-0.286,0.253-0.425,0.388c-0.034,0.033-0.071,0.063-0.104,0.096 c-0.127,0.128-0.247,0.266-0.366,0.405c-0.04,0.046-0.083,0.089-0.122,0.137c-0.092,0.113-0.177,0.233-0.263,0.354 c-0.059,0.082-0.122,0.161-0.178,0.246c-0.06,0.091-0.114,0.187-0.17,0.281c-0.074,0.122-0.149,0.243-0.215,0.371 c-0.039,0.073-0.072,0.15-0.108,0.226c-0.074,0.153-0.147,0.307-0.212,0.466c-0.007,0.018-0.016,0.034-0.023,0.052 c-0.05,0.126-0.258,0.661-0.575,1.507C328.795,313.975,328.314,309.782,328.307,306.565z M336.343,357.534l-0.005-2.749 c-0.012-8.155,3.458-20.108,5.985-27.487c36.942,0.722,64.741,9.633,75.01,13.441l0.009,4.792c0,0.029,0,0.058,0,0.086l0.025,13.284 c0.024,12.726-4.419,25.372-12.189,34.695c-7.702,9.241-17.765,14.34-28.335,14.36c-0.02,0-0.038,0-0.058,0 c-10.405,0-20.392-5.288-28.127-14.894C340.855,383.375,336.367,370.425,336.343,357.534z M291.164,480.554 c-0.002,0-0.005,0-0.008,0c-0.957,0-1.849-0.298-2.445-0.819c-0.151-0.132-0.504-0.477-0.504-0.828l-0.016-8.653 c-0.019-9.782,5.987-21.384,17.499-24.669l27.338-7.155l36.314,21.696l0.038,20.274L291.164,480.554z M462.613,480.214 l-78.214,0.156l-0.038-20.237l36.714-21.762l26.883,6.928c11.524,3.242,17.572,14.821,17.59,24.603l0.017,8.652 C465.567,479.137,464.447,480.21,462.613,480.214z"></path>
                                                        <path d="M511.79,87.078c-0.041-21.787-17.776-39.482-39.555-39.482c-0.024,0-0.051,0-0.075,0l-160.228,0.301 c-4.148,0.008-7.505,3.377-7.497,7.526c0.008,4.143,3.369,7.496,7.511,7.496c0.005,0,0.01,0,0.015,0l160.228-0.301 c13.532,0.019,24.556,10.961,24.581,24.489l0.21,112.16c0.025,13.528-10.961,24.556-24.489,24.581l-168.24,0.315 c-1.992,0.004-3.901,0.799-5.307,2.21s-2.193,3.323-2.19,5.316l0.041,21.924l-27.287-27.185c-2.939-2.927-7.694-2.92-10.622,0.02 c-2.927,2.939-2.918,7.694,0.02,10.621l40.132,39.982c1.436,1.431,3.353,2.19,5.303,2.19c0.972,0,1.953-0.188,2.886-0.578 c2.804-1.168,4.63-3.91,4.624-6.948l-0.061-32.546l160.729-0.302c21.811-0.041,39.522-17.819,39.482-39.631L511.79,87.078z"></path>
                                                        <path d="M287.62,167.614l-0.21-112.16c-0.041-21.77-17.785-39.481-39.631-39.481L39.482,16.364C17.671,16.405-0.041,34.184,0,55.995 l0.21,112.16c0.041,21.77,17.785,39.481,39.631,39.481l112.661-0.211l0.061,32.546c0.006,3.037,1.841,5.773,4.65,6.93 c0.925,0.381,1.897,0.567,2.859,0.567c1.96,0,3.885-0.768,5.323-2.21l37.786-37.929l44.958-0.084 C269.95,207.203,287.661,189.425,287.62,167.614z M248.11,192.223l-48.069,0.09c-1.992,0.003-3.901,0.798-5.307,2.21L167.55,221.81 l-0.041-21.925c-0.008-4.143-3.369-7.497-7.511-7.497c-0.005,0-0.01,0-0.015,0l-120.216,0.227 c-13.502,0-24.509-10.986-24.535-24.489l-0.21-112.16c-0.025-13.529,10.96-24.556,24.489-24.581l208.343-0.392 c13.502,0,24.509,10.986,24.534,24.489l0.21,112.16C272.624,181.171,261.639,192.198,248.11,192.223z"></path>
                                                        <path d="M47.583,71.427c0.005,0,0.01,0,0.015,0l24.034-0.045c4.148-0.008,7.505-3.377,7.497-7.525 c-0.008-4.144-3.369-7.497-7.511-7.497c-0.005,0-0.01,0-0.015,0l-24.034,0.045c-4.148,0.008-7.505,3.377-7.497,7.526 C40.08,68.074,43.441,71.427,47.583,71.427z"></path>
                                                        <path d="M103.663,71.322c0.005,0,0.01,0,0.015,0l136.194-0.255c4.148-0.008,7.505-3.377,7.497-7.526 c-0.008-4.143-3.369-7.496-7.511-7.496c-0.005,0-0.01,0-0.015,0L103.649,56.3c-4.148,0.008-7.505,3.377-7.497,7.525 C96.16,67.969,99.521,71.322,103.663,71.322z"></path>
                                                        <path d="M47.643,103.473c0.005,0,0.01,0,0.015,0l192.274-0.361c4.148-0.008,7.505-3.377,7.497-7.526 c-0.008-4.143-3.369-7.496-7.511-7.496c-0.005,0-0.01,0-0.015,0L47.629,88.451c-4.148,0.008-7.505,3.377-7.497,7.526 C40.14,100.12,43.502,103.473,47.643,103.473z"></path>
                                                        <path d="M239.978,120.136c-0.005,0-0.01,0-0.015,0l-24.034,0.045c-4.148,0.008-7.505,3.377-7.497,7.525 c0.008,4.143,3.369,7.497,7.511,7.497c0.005,0,0.01,0,0.015,0l24.034-0.045c4.148-0.008,7.505-3.377,7.497-7.526 C247.481,123.489,244.12,120.136,239.978,120.136z"></path>
                                                        <path d="M47.703,135.518c0.005,0,0.01,0,0.015,0l136.194-0.255c4.148-0.008,7.505-3.377,7.497-7.525 c-0.008-4.144-3.369-7.497-7.511-7.497c-0.005,0-0.01,0-0.015,0l-136.194,0.255c-4.148,0.008-7.505,3.377-7.497,7.526 C40.2,132.165,43.561,135.518,47.703,135.518z"></path>
                                                        <path d="M240.038,152.182c-0.005,0-0.01,0-0.015,0l-192.274,0.361c-4.148,0.008-7.505,3.377-7.497,7.526 c0.008,4.143,3.369,7.496,7.511,7.496c0.005,0,0.01,0,0.015,0l192.274-0.361c4.148-0.008,7.505-3.377,7.497-7.526 C247.541,155.536,244.179,152.182,240.038,152.182z"></path>
                                                        <path d="M336.054,87.909c-0.005,0-0.01,0-0.015,0l-24.034,0.045c-4.148,0.008-7.505,3.377-7.497,7.526 c0.008,4.143,3.369,7.496,7.511,7.496c0.005,0,0.01,0,0.015,0l24.034-0.045c4.148-0.008,7.505-3.377,7.497-7.525 C343.557,91.263,340.196,87.909,336.054,87.909z"></path>
                                                        <path d="M368.114,102.871l96.137-0.181c4.148-0.008,7.505-3.377,7.497-7.525c-0.008-4.143-3.369-7.497-7.511-7.497 c-0.005,0-0.01,0-0.015,0l-96.137,0.181c-4.148,0.008-7.505,3.377-7.497,7.525c0.008,4.143,3.369,7.497,7.511,7.497 C368.104,102.871,368.109,102.871,368.114,102.871z"></path>
                                                        <path d="M304.569,127.525c0.008,4.143,3.369,7.497,7.511,7.497c0.005,0,0.01,0,0.015,0l152.217-0.286 c4.148-0.008,7.505-3.377,7.497-7.525c-0.008-4.144-3.369-7.497-7.511-7.497c-0.005,0-0.01,0-0.015,0L312.066,120 C307.918,120.008,304.561,123.377,304.569,127.525z"></path>
                                                        <path d="M464.357,151.76c-0.005,0-0.01,0-0.015,0l-24.034,0.045c-4.148,0.008-7.505,3.377-7.497,7.525 c0.008,4.144,3.369,7.497,7.511,7.497c0.005,0,0.01,0,0.015,0l24.034-0.045c4.148-0.008,7.505-3.377,7.497-7.525 C471.86,155.113,468.499,151.76,464.357,151.76z"></path>
                                                        <path d="M312.154,167.067l96.137-0.181c4.148-0.008,7.505-3.377,7.497-7.525c-0.008-4.144-3.369-7.497-7.511-7.497 c-0.005,0-0.01,0-0.015,0l-96.137,0.181c-4.148,0.008-7.505,3.377-7.497,7.525c0.008,4.143,3.369,7.497,7.511,7.497 C312.144,167.067,312.15,167.067,312.154,167.067z"></path>
                                                        <path d="M312.2,199.113c0.005,0,0.01,0,0.015,0l152.217-0.286c4.148-0.008,7.505-3.377,7.497-7.525 c-0.008-4.144-3.369-7.497-7.511-7.497c-0.005,0-0.01,0-0.015,0l-152.217,0.286c-4.148,0.008-7.505,3.377-7.497,7.525 C304.698,195.76,308.058,199.113,312.2,199.113z"></path>
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path style="fill:#8995d2;" d="M280.462,55.427h192.274c17.625,0,32.046,14.421,32.046,32.046v112.16 c0,17.625-14.421,32.046-32.046,32.046H304.325v30.386c0,3.569-4.315,5.356-6.838,2.832c0,0-49.07-47.64-49.07-65.265V87.472 C248.416,69.848,262.837,55.427,280.462,55.427z"></path>
                                                        <path style="fill:#9e6796;" d="M249.418,25.033H37.115c-17.625,0-32.046,14.421-32.046,32.046v112.16 c0,17.625,14.421,32.046,32.046,32.046h124.177v30.386c0,3.569,4.315,5.356,6.838,2.832l33.219-33.219h48.069 c17.625,0,32.046-14.421,32.046-32.046V57.077C281.463,39.453,267.043,25.033,249.418,25.033z"></path>
                                                        <g>
                                                            <path style="fill:#E6AF78;" d="M179.583,430.769c-2.63-0.751-10.849-3.731-10.861-10.336l-0.061-19.376l-64.528,0.14l0.012,19.377 c0.011,5.821-6.361,8.848-9.672,10.006l42.028,25.731L179.583,430.769z"></path>
                                                            <path style="fill:#E6AF78;" d="M168.722,420.434l-0.051-16.221c-8.474,16.474-25.631,27.752-45.433,27.752 c-7.954,0-15.484-1.82-22.197-5.064c-2.089,1.871-4.775,3.052-6.568,3.68l42.028,25.731l43.082-25.541 C176.953,430.017,168.734,427.038,168.722,420.434z"></path>
                                                        </g>
                                                        <path style="fill:#d8c0ab;" d="M168.671,404.212l-0.01-3.154l-64.528,0.14l0.012,19.377c0.005,2.668-1.336,4.743-3.103,6.326 c6.713,3.244,14.241,5.064,22.197,5.064C143.04,431.964,160.196,420.687,168.671,404.212z"></path>
                                                        <path style="fill:#846662;" d="M184.386,279.969c-24.414,3.534-56.462-19.422-80.324,0.15c-14.45,0.027-23.636,11.551-23.607,26.912 c0.027,14.477,8.02,43.21,8.02,43.21l0.015,7.758c-0.027-14.091,8.253-37.808,8.253-37.808c41.423-0.078,75.53,11.763,87.75,16.609 l-0.001-0.751l0.001,0.751c0.885,0.352,1.65,0.664,2.3,0.934C193.332,309.739,187.312,286.585,184.386,279.969z"></path>
                                                        <path style="fill:#f5d5ad;" d="M88.489,357.998c0.056,29.994,21.201,57.971,48.023,57.921c26.822-0.051,48.079-26.588,48.022-56.582 l-0.042-22.538c-12.22-4.847-46.328-16.688-87.75-16.609C96.742,320.191,88.462,343.907,88.489,357.998z"></path>
                                                        <path style="fill:#E6AF78;" d="M105.804,364.947c-0.817-38.95,5.657-36.99,5.657-36.99c11.757-2.713,29.188-2.02,48.234,0.729 c-16.382-4.394-38.38-8.542-62.954-8.496c0,0-8.279,23.717-8.253,37.808c0.052,27.835,18.271,53.918,42.331,57.49 C120.399,407.256,106.297,388.395,105.804,364.947z"></path>
                                                        <path style="fill:#0d152b;" d="M232.718,470.34c-0.025-13.441-8.525-27.775-23.153-31.842l-29.978-7.726 c-0.001,0-0.003-0.001-0.004-0.001l-43.082,25.541l-42.028-25.731c-0.448,0.156-0.843,0.281-1.156,0.372l-29.949,7.838 c-14.613,4.124-23.058,18.488-23.033,31.93l0.016,8.652c0.009,5.061,4.703,9.156,10.483,9.145l171.449-0.341 c5.78-0.011,10.458-4.123,10.449-9.184L232.718,470.34z"></path>
                                                        <g>
                                                            <path style="fill:#9e6796;" d="M75.359,488.044v-9.645c0-4.94-2.239-9.648-6.16-12.949l-20.563-17.152 c-5.389,6.276-8.314,14.509-8.299,22.423l0.016,8.652c0.006,3.425,2.161,6.402,5.343,7.969c1.335,0.445,2.621,0.703,3.667,0.703 h25.996V488.044z"></path>
                                                            <path style="fill:#9e6796;" d="M232.734,478.992l-0.016-8.652c-0.013-6.906-2.268-14.044-6.437-19.907l-18.492,15.018 c-3.921,3.302-6.16,8.009-6.16,12.949v9.645h22.34C228.945,487.328,232.743,483.55,232.734,478.992z"></path>
                                                        </g>
                                                        <path style="fill:#353131;" d="M184.386,279.969c-10.6,1.534-22.64-1.925-34.824-4.729c-15.877-3.654-31.999-6.196-45.501,4.879 c-0.115,0-0.226,0.007-0.34,0.009c-1.672,1.726,1.491,6.628,1.491,6.628s-6.342,3.004-9.013,15.021 c-1.461,6.575-1.069,13.624,0.987,18.415c18.804,0.003,36.078,2.453,50.469,5.578c17.156,3.724,30.215,8.402,36.837,11.029 c0.885,0.352,1.65,0.664,2.3,0.934C193.332,309.739,187.312,286.585,184.386,279.969z"></path>
                                                        <g>
                                                            <path style="fill:#E6AF78;" d="M419.925,430.318c-2.63-0.751-10.849-3.731-10.861-10.336l-0.061-19.376l-64.528,0.14l0.012,19.377 c0.011,5.821-6.361,8.848-9.672,10.006l42.028,25.731L419.925,430.318z"></path>
                                                            <path style="fill:#E6AF78;" d="M409.063,419.982l-0.051-16.221c-8.474,16.474-25.631,27.752-45.433,27.752 c-7.954,0-15.484-1.82-22.197-5.064c-2.089,1.871-4.775,3.052-6.568,3.68l42.028,25.731l43.082-25.541 C417.296,429.566,409.075,426.586,409.063,419.982z"></path>
                                                        </g>
                                                        <path style="fill:#d8c0ab;" d="M409.012,403.761l-0.01-3.154l-64.528,0.14l0.012,19.377c0.005,2.668-1.336,4.743-3.103,6.326 c6.713,3.244,14.241,5.064,22.197,5.064C383.382,431.512,400.538,420.235,409.012,403.761z"></path>
                                                        <path style="fill:#846662;" d="M424.728,279.517c-24.414,3.534-56.462-19.422-80.324,0.15c-14.45,0.027-23.636,11.551-23.607,26.912 c0.027,14.477,8.02,43.21,8.02,43.21l0.015,7.758c-0.027-14.091,8.253-37.808,8.253-37.808c41.423-0.078,75.53,11.763,87.75,16.609 l-0.001-0.751l0.001,0.751c0.885,0.352,1.65,0.664,2.3,0.934C433.673,309.287,427.654,286.133,424.728,279.517z"></path>
                                                        <path style="fill:#f5d5ad;" d="M328.832,357.547c0.056,29.994,21.201,57.971,48.023,57.921 c26.822-0.051,48.079-26.588,48.022-56.582l-0.042-22.538c-12.22-4.847-46.328-16.688-87.75-16.609 C337.084,319.739,328.805,343.456,328.832,357.547z"></path>
                                                        <path style="fill:#E6AF78;" d="M346.147,364.496c-0.817-38.95,5.657-36.99,5.657-36.99c11.757-2.713,29.188-2.02,48.234,0.729 c-16.382-4.394-38.38-8.542-62.954-8.496c0,0-8.279,23.717-8.253,37.808c0.052,27.835,18.271,53.918,42.331,57.49 C360.741,406.804,346.638,387.943,346.147,364.496z"></path>
                                                        <path style="fill:#a8e1ff;" d="M473.06,469.887c-0.025-13.441-8.525-27.775-23.153-31.842l-29.978-7.726 c-0.001,0-0.003-0.001-0.004-0.001l-43.082,25.541l-42.028-25.731c-0.448,0.156-0.843,0.281-1.156,0.372l-29.949,7.838 c-14.613,4.124-23.058,18.488-23.033,31.93l0.016,8.652c0.009,5.061,4.703,9.156,10.483,9.145l171.449-0.341 c5.78-0.011,10.458-4.123,10.449-9.184L473.06,469.887z"></path>
                                                        <g>
                                                            <path style="fill:#4993c1;" d="M315.701,487.592v-9.645c0-4.94-2.239-9.648-6.16-12.949l-20.563-17.152 c-5.389,6.276-8.314,14.509-8.299,22.423l0.016,8.652c0.006,3.425,2.161,6.402,5.343,7.969c1.335,0.445,2.621,0.703,3.667,0.703 h25.996V487.592z"></path>
                                                            <path style="fill:#4993c1;" d="M473.077,478.54l-0.016-8.652c-0.013-6.906-2.268-14.044-6.437-19.907l-18.492,15.018 c-3.921,3.302-6.16,8.009-6.16,12.949v9.645h22.34C469.286,486.876,473.085,483.099,473.077,478.54z"></path>
                                                        </g>
                                                        <path style="fill:#353131;" d="M424.728,279.517c-10.6,1.534-22.64-1.925-34.824-4.729c-15.877-3.654-31.999-6.196-45.501,4.879 c-0.115,0-0.226,0.007-0.34,0.009c-1.672,1.726,1.491,6.628,1.491,6.628s-6.342,3.004-9.013,15.021 c-1.461,6.575-1.069,13.624,0.987,18.415c18.804,0.003,36.078,2.453,50.469,5.578c17.156,3.724,30.215,8.402,36.837,11.029 c0.885,0.352,1.65,0.664,2.3,0.934C433.673,309.287,427.654,286.133,424.728,279.517z"></path>
                                                        <path d="M211.578,431.261c-0.046-0.013-0.092-0.025-0.138-0.037l-29.874-7.699c-2.873-0.838-5.11-2.409-5.335-3.114l-0.052-16.525 c0.063-0.075,0.13-0.144,0.192-0.22c10.137-12.163,15.703-27.91,15.672-44.341l-0.023-12.166c10.137-33.17,2.923-61.88-0.768-70.226 c-0.011-0.025-0.025-0.048-0.037-0.073c-0.069-0.15-0.144-0.296-0.222-0.441c-0.042-0.078-0.082-0.158-0.126-0.234 c-0.075-0.129-0.157-0.252-0.24-0.376c-0.058-0.087-0.113-0.175-0.174-0.259c-0.074-0.101-0.153-0.196-0.231-0.293 c-0.078-0.097-0.154-0.195-0.236-0.287c-0.071-0.079-0.147-0.153-0.221-0.229c-0.096-0.099-0.19-0.198-0.291-0.291 c-0.075-0.069-0.156-0.133-0.234-0.199c-0.104-0.088-0.208-0.179-0.316-0.261c-0.094-0.071-0.192-0.135-0.289-0.201 c-0.099-0.067-0.195-0.138-0.297-0.2c-0.123-0.076-0.25-0.144-0.378-0.212c-0.081-0.043-0.159-0.09-0.241-0.131 c-0.151-0.075-0.307-0.14-0.464-0.205c-0.063-0.026-0.125-0.056-0.189-0.08c-0.165-0.063-0.335-0.117-0.506-0.168 c-0.06-0.018-0.119-0.04-0.179-0.057c-0.16-0.044-0.324-0.079-0.489-0.112c-0.077-0.016-0.152-0.035-0.229-0.048 c-0.14-0.024-0.283-0.039-0.427-0.055c-0.106-0.012-0.212-0.027-0.319-0.035c-0.114-0.008-0.229-0.008-0.345-0.011 c-0.139-0.003-0.278-0.007-0.419-0.003c-0.092,0.003-0.184,0.012-0.276,0.018c-0.162,0.011-0.324,0.024-0.488,0.046 c-0.027,0.003-0.053,0.003-0.08,0.007c-7.814,1.131-17.28-1.117-27.303-3.496c-17.574-4.173-37.402-8.872-54.652,3.693 c-8.016,0.666-15.13,4.229-20.239,10.218c-5.287,6.197-8.189,14.753-8.171,24.095c0.026,13.913,6.568,38.842,8.022,44.211 l0.012,6.757c0.032,17.227,6.045,33.132,15.644,44.953l0.012,17.635c-0.223,0.683-2.453,2.261-5.324,3.11l-29.845,7.811 c-0.046,0.012-0.092,0.025-0.138,0.038c-18.752,5.291-28.534,23.711-28.504,39.172l0.016,8.652c0.008,4.578,2.068,8.995,5.651,12.12 c3.343,2.916,7.717,4.521,12.321,4.52c0.012,0,0.025,0,0.038,0l85.533-0.17c0.059,0.001,0.117,0.009,0.176,0.009 c0.005,0,0.01,0,0.015,0c0.062,0,0.122-0.008,0.184-0.01l85.54-0.17c9.912-0.019,17.963-7.514,17.946-16.709l-0.017-8.652 C240.2,454.865,230.35,436.481,211.578,431.261z M136.516,447.57l-28.568-17.068c2.257-2.687,3.715-5.988,3.708-9.933l-0.003-4.33 c7.511,4.576,15.946,7.191,24.789,7.191c0.027,0,0.057,0,0.084,0c8.706-0.017,17.093-2.371,24.671-6.791l0.012,3.807 c0.008,4.06,1.556,7.437,3.933,10.154L136.516,447.57z M92.542,292.7c2.862-3.355,6.743-5.061,11.533-5.07 c0.057,0,0.113-0.007,0.17-0.009c0.187-0.004,0.376-0.011,0.563-0.029c0.097-0.01,0.192-0.027,0.289-0.041 c0.147-0.021,0.293-0.039,0.44-0.068c0.112-0.022,0.22-0.053,0.329-0.08c0.128-0.031,0.256-0.061,0.383-0.099 c0.116-0.036,0.229-0.079,0.343-0.12c0.116-0.042,0.233-0.081,0.349-0.128c0.12-0.05,0.235-0.108,0.352-0.164 c0.104-0.049,0.208-0.095,0.311-0.15c0.13-0.07,0.254-0.148,0.381-0.226c0.083-0.051,0.169-0.098,0.251-0.153 c0.157-0.105,0.307-0.22,0.456-0.336c0.044-0.035,0.09-0.063,0.134-0.099c11.962-9.811,27.383-6.15,43.711-2.273 c8.725,2.072,17.686,4.2,26.356,4.2c0.093,0,0.185-0.004,0.278-0.005c2.175,7.796,4.392,21.966,2.038,38.862 c-12.61-4.623-43.272-14.032-83.985-14.032c-0.165,0-0.33,0-0.496,0c-0.02,0-0.039,0.003-0.059,0.003 c-0.166,0.001-0.33,0.013-0.495,0.026c-0.089,0.007-0.179,0.01-0.267,0.02c-0.133,0.015-0.265,0.039-0.397,0.061 c-0.117,0.02-0.236,0.036-0.352,0.061c-0.088,0.019-0.173,0.045-0.26,0.067c-0.154,0.039-0.308,0.077-0.459,0.125 c-0.045,0.014-0.088,0.033-0.132,0.048c-0.185,0.064-0.371,0.13-0.549,0.208c-0.027,0.012-0.052,0.026-0.079,0.038 c-0.191,0.086-0.381,0.176-0.564,0.277c-0.064,0.035-0.124,0.077-0.187,0.114c-0.141,0.083-0.282,0.165-0.418,0.257 c-0.13,0.088-0.253,0.187-0.378,0.283c-0.062,0.049-0.128,0.093-0.188,0.143c-0.153,0.127-0.299,0.264-0.444,0.405 c-0.028,0.027-0.058,0.051-0.085,0.078c-0.132,0.132-0.255,0.274-0.378,0.418c-0.036,0.042-0.075,0.081-0.11,0.124 c-0.095,0.116-0.182,0.24-0.27,0.364c-0.057,0.079-0.117,0.154-0.171,0.235c-0.062,0.093-0.116,0.192-0.174,0.288 c-0.072,0.12-0.146,0.239-0.212,0.365c-0.039,0.073-0.072,0.15-0.108,0.226c-0.075,0.153-0.148,0.307-0.212,0.467 c-0.007,0.018-0.016,0.033-0.023,0.051c-0.05,0.126-0.259,0.661-0.575,1.509c-0.728-4.512-1.209-8.704-1.215-11.924 C87.954,301.257,89.58,296.172,92.542,292.7z M95.995,355.251v-0.002c-0.015-8.155,3.457-20.116,5.985-27.499 c36.942,0.722,64.742,9.634,75.011,13.442l0.009,4.792c0,0.029,0,0.058,0,0.086l0.025,13.284 c0.05,26.55-18.508,49.015-40.526,49.056c-0.02,0-0.036,0-0.055,0c-21.499,0-40.393-23.548-40.444-50.424L95.995,355.251z M50.822,481.006c-0.961,0.014-1.856-0.297-2.455-0.819c-0.151-0.132-0.504-0.477-0.504-0.828l-0.016-8.653 c-0.019-9.782,5.987-21.384,17.499-24.669l27.338-7.155l36.314,21.696l0.038,20.274L50.822,481.006z M222.27,480.665l-78.214,0.155 l-0.038-20.237l36.714-21.762l26.883,6.928c11.524,3.242,17.572,14.821,17.59,24.603l0.017,8.652 C225.224,479.589,224.105,480.662,222.27,480.665z"></path>
                                                        <path d="M451.919,430.809c-0.046-0.013-0.092-0.025-0.138-0.037l-29.874-7.699c-2.873-0.838-5.11-2.409-5.335-3.114l-0.052-16.524 c0.063-0.075,0.13-0.145,0.193-0.22c10.137-12.163,15.703-27.911,15.672-44.342l-0.023-12.166 c10.138-33.17,2.923-61.88-0.768-70.227c-0.012-0.027-0.027-0.051-0.039-0.078c-0.066-0.144-0.139-0.284-0.213-0.423 c-0.045-0.084-0.088-0.169-0.135-0.251c-0.072-0.123-0.15-0.24-0.229-0.359c-0.061-0.093-0.121-0.187-0.185-0.275 c-0.069-0.094-0.143-0.183-0.216-0.274c-0.083-0.104-0.165-0.208-0.253-0.307c-0.063-0.07-0.131-0.136-0.197-0.204 c-0.104-0.108-0.207-0.216-0.317-0.316c-0.066-0.06-0.136-0.115-0.203-0.173c-0.114-0.098-0.228-0.196-0.348-0.287 c-0.082-0.062-0.169-0.118-0.253-0.176c-0.11-0.076-0.219-0.155-0.333-0.225c-0.11-0.068-0.224-0.128-0.339-0.19 c-0.093-0.051-0.185-0.105-0.28-0.152c-0.14-0.069-0.284-0.129-0.429-0.19c-0.074-0.031-0.147-0.066-0.223-0.094 c-0.157-0.06-0.318-0.11-0.48-0.16c-0.068-0.021-0.135-0.045-0.204-0.064c-0.156-0.042-0.315-0.076-0.475-0.109 c-0.08-0.017-0.16-0.036-0.24-0.05c-0.139-0.024-0.28-0.039-0.422-0.055c-0.108-0.013-0.214-0.027-0.323-0.035 c-0.114-0.008-0.229-0.008-0.344-0.011c-0.139-0.003-0.277-0.007-0.417-0.003c-0.093,0.003-0.186,0.012-0.279,0.019 c-0.161,0.011-0.321,0.023-0.483,0.045c-0.027,0.004-0.054,0.004-0.081,0.008c-7.813,1.13-17.281-1.117-27.303-3.496 c-17.575-4.173-37.402-8.873-54.653,3.693c-8.016,0.666-15.13,4.229-20.24,10.218c-5.287,6.197-8.189,14.753-8.171,24.095 c0.026,13.913,6.568,38.842,8.022,44.211l0.008,4.006c0,0.005,0,0.009,0,0.014c0,0.001,0,0.003,0,0.004l0.005,2.732 c0.03,16.247,5.729,32.621,15.635,44.922c0.003,0.004,0.006,0.007,0.009,0.011l0.013,17.654c-0.223,0.684-2.454,2.262-5.324,3.111 l-29.845,7.811c-0.046,0.012-0.092,0.025-0.138,0.038c-18.752,5.292-28.534,23.711-28.504,39.172l0.016,8.652 c0.008,4.578,2.068,8.995,5.651,12.12c3.343,2.916,7.717,4.521,12.321,4.521c0.012,0,0.025,0,0.037,0l85.53-0.17 c0.06,0.001,0.118,0.009,0.179,0.009c0.005,0,0.01,0,0.015,0c0.063,0,0.124-0.008,0.187-0.01l85.538-0.17 c9.912-0.018,17.963-7.514,17.946-16.709l-0.017-8.652C480.542,454.413,470.691,436.029,451.919,430.809z M376.857,447.119 l-28.568-17.067c2.257-2.687,3.715-5.988,3.708-9.933l-0.003-4.259c7.621,4.65,16.048,7.12,24.786,7.12c0.028,0,0.059,0,0.087,0 c8.706-0.017,17.094-2.371,24.671-6.79l0.012,3.807c0.008,4.06,1.556,7.436,3.933,10.153L376.857,447.119z M328.307,306.565 c-0.011-5.76,1.614-10.844,4.577-14.316c2.863-3.355,6.743-5.061,11.533-5.07c0.057,0,0.113-0.007,0.17-0.009 c0.187-0.004,0.376-0.011,0.563-0.029c0.098-0.01,0.192-0.027,0.289-0.041c0.147-0.021,0.293-0.039,0.44-0.068 c0.112-0.022,0.22-0.053,0.329-0.08c0.128-0.031,0.255-0.061,0.383-0.099c0.116-0.036,0.229-0.079,0.342-0.12 c0.116-0.042,0.233-0.081,0.348-0.128c0.12-0.05,0.235-0.108,0.353-0.164c0.104-0.049,0.208-0.095,0.311-0.15 c0.13-0.07,0.254-0.148,0.381-0.226c0.084-0.051,0.169-0.098,0.251-0.153c0.157-0.105,0.307-0.22,0.456-0.336 c0.044-0.035,0.09-0.063,0.134-0.099c11.962-9.811,27.384-6.15,43.711-2.273c8.724,2.072,17.686,4.2,26.355,4.2 c0.093,0,0.185-0.004,0.278-0.005c2.176,7.796,4.393,21.966,2.038,38.862c-12.61-4.623-43.271-14.032-83.983-14.032 c-0.165,0-0.332,0-0.498,0c-0.018,0-0.035,0.002-0.052,0.003c-0.177,0.001-0.354,0.013-0.529,0.027 c-0.078,0.006-0.156,0.009-0.234,0.017c-0.146,0.017-0.29,0.042-0.436,0.067c-0.104,0.018-0.21,0.032-0.313,0.054 c-0.101,0.021-0.199,0.052-0.299,0.078c-0.141,0.036-0.282,0.07-0.421,0.114c-0.058,0.019-0.113,0.043-0.17,0.063 c-0.172,0.06-0.345,0.121-0.512,0.193c-0.04,0.017-0.077,0.039-0.117,0.056c-0.178,0.081-0.357,0.165-0.527,0.259 c-0.069,0.038-0.133,0.083-0.201,0.123c-0.136,0.081-0.273,0.16-0.405,0.249c-0.126,0.086-0.245,0.182-0.367,0.275 c-0.066,0.052-0.136,0.099-0.201,0.152c-0.147,0.122-0.286,0.253-0.425,0.388c-0.034,0.033-0.071,0.063-0.104,0.096 c-0.127,0.128-0.247,0.266-0.366,0.405c-0.04,0.046-0.083,0.089-0.122,0.137c-0.092,0.113-0.177,0.233-0.263,0.354 c-0.059,0.082-0.122,0.161-0.178,0.246c-0.06,0.091-0.114,0.187-0.17,0.281c-0.074,0.122-0.149,0.243-0.215,0.371 c-0.039,0.073-0.072,0.15-0.108,0.226c-0.074,0.153-0.147,0.307-0.212,0.466c-0.007,0.018-0.016,0.034-0.023,0.052 c-0.05,0.126-0.258,0.661-0.575,1.507C328.795,313.975,328.314,309.782,328.307,306.565z M336.343,357.534l-0.005-2.749 c-0.012-8.155,3.458-20.108,5.985-27.487c36.942,0.722,64.741,9.633,75.01,13.441l0.009,4.792c0,0.029,0,0.058,0,0.086l0.025,13.284 c0.024,12.726-4.419,25.372-12.189,34.695c-7.702,9.241-17.765,14.34-28.335,14.36c-0.02,0-0.038,0-0.058,0 c-10.405,0-20.392-5.288-28.127-14.894C340.855,383.375,336.367,370.425,336.343,357.534z M291.164,480.554 c-0.002,0-0.005,0-0.008,0c-0.957,0-1.849-0.298-2.445-0.819c-0.151-0.132-0.504-0.477-0.504-0.828l-0.016-8.653 c-0.019-9.782,5.987-21.384,17.499-24.669l27.338-7.155l36.314,21.696l0.038,20.274L291.164,480.554z M462.613,480.214 l-78.214,0.156l-0.038-20.237l36.714-21.762l26.883,6.928c11.524,3.242,17.572,14.821,17.59,24.603l0.017,8.652 C465.567,479.137,464.447,480.21,462.613,480.214z"></path>
                                                        <path d="M511.79,87.078c-0.041-21.787-17.776-39.482-39.555-39.482c-0.024,0-0.051,0-0.075,0l-160.228,0.301 c-4.148,0.008-7.505,3.377-7.497,7.526c0.008,4.143,3.369,7.496,7.511,7.496c0.005,0,0.01,0,0.015,0l160.228-0.301 c13.532,0.019,24.556,10.961,24.581,24.489l0.21,112.16c0.025,13.528-10.961,24.556-24.489,24.581l-168.24,0.315 c-1.992,0.004-3.901,0.799-5.307,2.21s-2.193,3.323-2.19,5.316l0.041,21.924l-27.287-27.185c-2.939-2.927-7.694-2.92-10.622,0.02 c-2.927,2.939-2.918,7.694,0.02,10.621l40.132,39.982c1.436,1.431,3.353,2.19,5.303,2.19c0.972,0,1.953-0.188,2.886-0.578 c2.804-1.168,4.63-3.91,4.624-6.948l-0.061-32.546l160.729-0.302c21.811-0.041,39.522-17.819,39.482-39.631L511.79,87.078z"></path>
                                                        <path d="M287.62,167.614l-0.21-112.16c-0.041-21.77-17.785-39.481-39.631-39.481L39.482,16.364C17.671,16.405-0.041,34.184,0,55.995 l0.21,112.16c0.041,21.77,17.785,39.481,39.631,39.481l112.661-0.211l0.061,32.546c0.006,3.037,1.841,5.773,4.65,6.93 c0.925,0.381,1.897,0.567,2.859,0.567c1.96,0,3.885-0.768,5.323-2.21l37.786-37.929l44.958-0.084 C269.95,207.203,287.661,189.425,287.62,167.614z M248.11,192.223l-48.069,0.09c-1.992,0.003-3.901,0.798-5.307,2.21L167.55,221.81 l-0.041-21.925c-0.008-4.143-3.369-7.497-7.511-7.497c-0.005,0-0.01,0-0.015,0l-120.216,0.227 c-13.502,0-24.509-10.986-24.535-24.489l-0.21-112.16c-0.025-13.529,10.96-24.556,24.489-24.581l208.343-0.392 c13.502,0,24.509,10.986,24.534,24.489l0.21,112.16C272.624,181.171,261.639,192.198,248.11,192.223z"></path>
                                                        <path d="M47.583,71.427c0.005,0,0.01,0,0.015,0l24.034-0.045c4.148-0.008,7.505-3.377,7.497-7.525 c-0.008-4.144-3.369-7.497-7.511-7.497c-0.005,0-0.01,0-0.015,0l-24.034,0.045c-4.148,0.008-7.505,3.377-7.497,7.526 C40.08,68.074,43.441,71.427,47.583,71.427z"></path>
                                                        <path d="M103.663,71.322c0.005,0,0.01,0,0.015,0l136.194-0.255c4.148-0.008,7.505-3.377,7.497-7.526 c-0.008-4.143-3.369-7.496-7.511-7.496c-0.005,0-0.01,0-0.015,0L103.649,56.3c-4.148,0.008-7.505,3.377-7.497,7.525 C96.16,67.969,99.521,71.322,103.663,71.322z"></path>
                                                        <path d="M47.643,103.473c0.005,0,0.01,0,0.015,0l192.274-0.361c4.148-0.008,7.505-3.377,7.497-7.526 c-0.008-4.143-3.369-7.496-7.511-7.496c-0.005,0-0.01,0-0.015,0L47.629,88.451c-4.148,0.008-7.505,3.377-7.497,7.526 C40.14,100.12,43.502,103.473,47.643,103.473z"></path>
                                                        <path d="M239.978,120.136c-0.005,0-0.01,0-0.015,0l-24.034,0.045c-4.148,0.008-7.505,3.377-7.497,7.525 c0.008,4.143,3.369,7.497,7.511,7.497c0.005,0,0.01,0,0.015,0l24.034-0.045c4.148-0.008,7.505-3.377,7.497-7.526 C247.481,123.489,244.12,120.136,239.978,120.136z"></path>
                                                        <path d="M47.703,135.518c0.005,0,0.01,0,0.015,0l136.194-0.255c4.148-0.008,7.505-3.377,7.497-7.525 c-0.008-4.144-3.369-7.497-7.511-7.497c-0.005,0-0.01,0-0.015,0l-136.194,0.255c-4.148,0.008-7.505,3.377-7.497,7.526 C40.2,132.165,43.561,135.518,47.703,135.518z"></path>
                                                        <path d="M240.038,152.182c-0.005,0-0.01,0-0.015,0l-192.274,0.361c-4.148,0.008-7.505,3.377-7.497,7.526 c0.008,4.143,3.369,7.496,7.511,7.496c0.005,0,0.01,0,0.015,0l192.274-0.361c4.148-0.008,7.505-3.377,7.497-7.526 C247.541,155.536,244.179,152.182,240.038,152.182z"></path>
                                                        <path d="M336.054,87.909c-0.005,0-0.01,0-0.015,0l-24.034,0.045c-4.148,0.008-7.505,3.377-7.497,7.526 c0.008,4.143,3.369,7.496,7.511,7.496c0.005,0,0.01,0,0.015,0l24.034-0.045c4.148-0.008,7.505-3.377,7.497-7.525 C343.557,91.263,340.196,87.909,336.054,87.909z"></path>
                                                        <path d="M368.114,102.871l96.137-0.181c4.148-0.008,7.505-3.377,7.497-7.525c-0.008-4.143-3.369-7.497-7.511-7.497 c-0.005,0-0.01,0-0.015,0l-96.137,0.181c-4.148,0.008-7.505,3.377-7.497,7.525c0.008,4.143,3.369,7.497,7.511,7.497 C368.104,102.871,368.109,102.871,368.114,102.871z"></path>
                                                        <path d="M304.569,127.525c0.008,4.143,3.369,7.497,7.511,7.497c0.005,0,0.01,0,0.015,0l152.217-0.286 c4.148-0.008,7.505-3.377,7.497-7.525c-0.008-4.144-3.369-7.497-7.511-7.497c-0.005,0-0.01,0-0.015,0L312.066,120 C307.918,120.008,304.561,123.377,304.569,127.525z"></path>
                                                        <path d="M464.357,151.76c-0.005,0-0.01,0-0.015,0l-24.034,0.045c-4.148,0.008-7.505,3.377-7.497,7.525 c0.008,4.144,3.369,7.497,7.511,7.497c0.005,0,0.01,0,0.015,0l24.034-0.045c4.148-0.008,7.505-3.377,7.497-7.525 C471.86,155.113,468.499,151.76,464.357,151.76z"></path>
                                                        <path d="M312.154,167.067l96.137-0.181c4.148-0.008,7.505-3.377,7.497-7.525c-0.008-4.144-3.369-7.497-7.511-7.497 c-0.005,0-0.01,0-0.015,0l-96.137,0.181c-4.148,0.008-7.505,3.377-7.497,7.525c0.008,4.143,3.369,7.497,7.511,7.497 C312.144,167.067,312.15,167.067,312.154,167.067z"></path>
                                                        <path d="M312.2,199.113c0.005,0,0.01,0,0.015,0l152.217-0.286c4.148-0.008,7.505-3.377,7.497-7.525 c-0.008-4.144-3.369-7.497-7.511-7.497c-0.005,0-0.01,0-0.015,0l-152.217,0.286c-4.148,0.008-7.505,3.377-7.497,7.525 C304.698,195.76,308.058,199.113,312.2,199.113z"></path>
                                                    </g>
                                                </svg>



                                            </div>

                                            <p>Moral Values<br>with Friends</p>
                                            <button id="myButton3" class="button5" onclick="redirectToMoralWithFriends()">
                                                Click Here
                                            </button>

                                            <script>
                                                function redirectToMoralWithFriends() {
                                                    window.location.href = 'moralwithfriends.php';
                                                }

                                            </script>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="quiz" class="container-fluid8">
        <div class="text-center">
            <h8>*༄ Quiz 📝*</h8><br>
            <p8>Test Your Values, Quiz Your Virtues •ᴗ•<br></p8>
            <br><br>
            <div class="row">
                <div class="quiz">
                    <div class="col-sm-4 mx-auto">
                        <div class="cardmoon">
                            <div class="star star-1"></div>
                            <div class="star star-2"></div>
                            <div class="star star-3"></div>
                            <div class="star star-4"></div>
                            <div class="star star-5"></div>
                            <div class="star star-6"></div>
                            <div class="star star-7"></div>
                            <div class="card-info">
                                <span>Quiz Time !</span>
                            </div>
                            <svg class="moon" viewBox="0 0 20 20">
                                <path d="M 10 9 z z M 7.007 6.552 c 0 -2.259 0.795 -4.33 2.117 -5.955 C 4.34 1.042 0.594 5.07 0.594 9.98 c 0 5.207 4.211 9.426 9.406 9.426 c 2.94 0 5.972 -1.354 7.696 -3.472 c -0.289 0.026 -0.987 0.044 -1.283 0.044 C 11.219 15.979 7.007 11.759 7.007 6.552 z"></path>
                            </svg>
                            <svg class="rocket" viewBox="48.0129 48.1783 416 415.6">
                                <path d="M461.81,53.81a4.4,4.4,0,0,0-3.3-3.39c-54.38-13.3-180,34.09-248.13,102.17a294.9,294.9,0,0,0-33.09,39.08c-21-1.9-42-.3-59.88,7.5-50.49,22.2-65.18,80.18-69.28,105.07a9,9,0,0,0,9.8,10.4l81.07-8.9a180.29,180.29,0,0,0,1.1,18.3,18.15,18.15,0,0,0,5.3,11.09l31.39,31.39a18.15,18.15,0,0,0,11.1,5.3,179.91,179.91,0,0,0,18.19,1.1l-8.89,81a9,9,0,0,0,10.39,9.79c24.9-4,83-18.69,105.07-69.17,7.8-17.9,9.4-38.79,7.6-59.69a293.91,293.91,0,0,0,39.19-33.09C427.82,233.76,474.91,110.9,461.81,53.81ZM298.66,213.67a42.7,42.7,0,1,1,60.38,0A42.65,42.65,0,0,1,298.66,213.67Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div id="start" class="container-fluid">
                    <a href="quizchoice.php">
                        <button>
                            <div class="row">
                                <div class="quiz">
                                    <div class="col-sm-8">
                                        <div class="swipe">
                                            START <span class="container2">
                                                <svg height="50" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section_our_solution">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="our_solution_category">
                    <div class="solution_cards_box">
                        <div class="solution_card">
                            <div class="hover_color_bubble"></div>
                            <div class="so_top_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 512 512" height="50" id="Layer_1">
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <path fill="#fae19e" d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z"></path>
                                                </g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <path fill="#fff9e9" d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z"></path>
                                                                </g>
                                                                <path fill="#fff4d6" d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <path fill="#ffeec2" d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z"></path>
                                                </g>
                                            </g>
                                            <g>
                                                <path fill="#fed23a" d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z"></path>
                                                <path fill="#54b1ff" d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z"></path>
                                                <path fill="#fdf385" d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z"></path>
                                                <path fill="#faee6e" d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z"></path>
                                                <path fill="#54b1ff" d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z"></path>
                                                <g>
                                                    <path fill="#3da7ff" d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z"></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g fill="#060606">
                                            <path d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z"></path>
                                            <path d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"></path>
                                            <path d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"></path>
                                            <path d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z"></path>
                                            <path d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z"></path>
                                            <path d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z"></path>
                                            <path d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="solu_title">
                                <div class="h22">Feedback and Experience 🦋</div>
                            </div>
                            <div class="solu_description">
                                <p class="p22">
                                    Your feedback and experiences are invaluable to us! Please share your thoughts on how our moral education system has impacted you. Your input makes a significant difference in shaping the future of our educational initiatives. Thank you for being a part of this important undertaking!
                                </p>
                                <a href="review.php"><button class="share_btn" type="button">Share yours !</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button20" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<!--                <a class="navbar-brand" href="#"><img src="img/cat.jpg" alt="cat" width="60px"></a>-->            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#moralvalues">MORAL VALUES</a></li>
                    <li><a href="#importance">IMPORTANCE</a></li>
                    <li><a href="#valuesinrelationship">VALUES IN RELATIONSHIP</a></li>
                    <li><a href="#quiz">QUIZ</a></li>
                    <li><a class="nav-link" href="#" onclick="confirmLogout(event)">SIGN OUT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <div id="about" class="container-fluid">
            <div id="moralvalues" class="container-fluid">
                <div id="importance" class="container-fluid">
                    <div id="valuesinrelationship" class="container-fluid">
                        <div id="quiz" class="container-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
            function confirmLogout(event) {
                event.preventDefault(); // Prevent the default action of the link
                var userConfirmed = confirm("Are you sure you want to log out?");
                if (userConfirmed) {
                    // Redirect to the logout page or perform the logout action
                    window.location.href = 'logoutfyp.php';
                }
            }

        </script>


        <script>
            $(document).ready(function() {
                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {

                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 1000, function() {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });
            })

        </script>

        <footer class="container-fluid text-center">
            <a href="#myPage" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p20><br>Go Back to Home<a href="https://www.w3schools.com" title="Visit w3schools"></a></p20>
        </footer>

        <style>
            footer .glyphicon {
                margin-top: 50px;
                font-size: 20px;
                margin-bottom: 20px;
                color: #619294;
            }

            p20 {
                font-family: serif;
                font-size: 20px;
                color: #355455;
            }

            button {
                margin-top: 120px;
                margin-right: 200px;
                border-radius: 100px;
                background-color: black;
            }

            .navbar {
                margin-bottom: 0;
                background-color: #B7C0A1;
                z-index: 9999;
                border: 0;
                font-size: 13px !important;
                line-height: 1.42857143 !important;
                letter-spacing: 2px;
                border-radius: 0;
                font-family: serif;
            }

            .navbar li a,
            .navbar .navbar-brand {
                color: #fff !important;
            }

            .navbar-nav li a:hover,
            .navbar-nav li.active a {
                color: #355455 !important;
                background-color: #fff !important;
            }

            .navbar-default .navbar-toggle {
                border-color: transparent;
                color: #fff !important;
            }

            .container-fluid8 {
                margin-bottom: 100px;
            }

            .h22 {
                font-family: serif;
            }

            .p22 {
                font-family: cursive;
                font-style: inherit;
                color: #4C484E;
            }

            .solution_cards_box .solution_card {
                flex: 0 50%;
                background: #F0E5F9;
                box-shadow: 0 2px 4px 0 rgba(136, 144, 195, 0.2),
                    0 5px 15px 0 rgba(37, 44, 97, 0.15);
                border-radius: 15px;
                margin: 8px;
                padding: 10px 15px;
                position: relative;
                z-index: 1;
                overflow: hidden;
                min-height: 265px;
                transition: transform 0.7s, background 0.3s, color 0.3s;
            }

            .solution_cards_box .solution_card:hover {
                background: #C6A9DB;
                color: #000;
                transform: scale(1.1);
            }

            .solution_cards_box .solution_card:before {
                content: "";
                position: absolute;
                background: rgb(85 108 214 / 5%);
                width: 170px;
                height: 400px;
                z-index: -1;
                transform: rotate(42deg);
                right: -56px;
                top: -23px;
                border-radius: 35px;
                transition: background 0.3s;
            }

            .solution_cards_box .solution_card:hover::before {
                background: rgb(85 108 214 / 10%);
            }

            .solution_cards_box .solution_card .solu_title div {
                color: #212121;
                font-size: 3.5rem;
                margin-top: 13px;
                margin-bottom: 13px;
                transition: color 0.3s;
            }

            .solution_cards_box .solution_card:hover .solu_title div {
                color: #000;
            }

            .solution_cards_box .solution_card .solu_description p {
                font-size: 20px;
                margin-bottom: 5px;
            }

            .solution_cards_box .solution_card .solu_description button {
                border: 0;
                border-radius: 15px;
                background: #C6A9DB;
                margin-top: 30px;
                color: #000;
                font-weight: 500;
                font-size: 2rem;
                padding: 10px 26px;
                transition: background 0.3s, color 0.3s;
            }

            .solution_cards_box .solution_card:hover .solu_description button {
                background: #fff;
                color: #C6A9DB;
            }

            .hover_color_bubble {
                position: absolute;
                background: rgb(54 81 207 / 15%);
                width: 100rem;
                height: 100rem;
                left: -18rem;
                top: 16rem;
                border-radius: 50%;
                transform: rotate(-36deg);
                z-index: -1;
                transition: top 0.7s;
            }

            .solution_cards_box .solution_card:hover .hover_color_bubble {
                top: 0rem;
            }

            .solution_cards_box .solution_card .so_top_icon {
                width: 80px;
                height: 80px;
                border-radius: 50%;
                background: #fff;
                overflow: hidden;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .solution_cards_box .solution_card .so_top_icon img {
                width: 40px;
                height: 50px;
                object-fit: contain;
            }

            /*start media query*/
            @media screen and (min-width: 320px) {
                .sol_card_top_3 {
                    position: relative;
                    top: 0;
                }

                .our_solution_category {
                    width: 100%;
                    margin: 0 auto;
                }

                .our_solution_category .solution_cards_box {
                    flex: auto;
                }
            }

            @media only screen and (min-width: 768px) {
                .our_solution_category .solution_cards_box {
                    flex: 1;
                }
            }

            @media only screen and (min-width: 1024px) {
                .sol_card_top_3 {
                    position: relative;
                    top: -3rem;
                }

                .our_solution_category {
                    width: 80%;
                    margin: 0 auto;
                }
            }

        </style>

    </body>

</body>

</html>
