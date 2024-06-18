<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <style>
        body {
            font-family: serif;
            background: none;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-size: 17px;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('img/Canteen%20BG%20v2.png');
            background-size: cover;
            opacity: 80%;
            /* Adjust the opacity here */
            z-index: -1;
            /* Ensure the pseudo-element is behind the content */
        }


        .quiz-container {
            background-color: #FFF6E5;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
            text-align: center;
        }

        #video-player {
            width: 80%;
            height: auto;
            margin-bottom: 20px;
        }

        .option-button {
            display: block;
            width: 70%;
            padding: 15px;
            margin: 10px auto;
            background-color: #69A3A5;
            color: whitesmoke;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            font-family: serif;
        }

        .option-button:hover {
            background-color: #88C4C6;
        }

        #buttonHint {
            display: block;
            width: 10%;
            padding: 8px;
            margin: 10px auto;
            background-color: #BCD0FC;
            color: black;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            font-family: serif;
        }

        #buttonHint:hover {
            background-color: #F34E62;
        }

        #score-container {
            display: none;
        }

        .pushable {
            position: relative;
            background: transparent;
            padding: 0px;
            border: none;
            cursor: pointer;
            outline-offset: 4px;
            outline-color: deeppink;
            transition: filter 250ms;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        .shadow {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: hsl(226, 25%, 69%);
            border-radius: 8px;
            filter: blur(2px);
            will-change: transform;
            transform: translateY(2px);
            transition: transform 600ms cubic-bezier(0.3, 0.7, 0.4, 1);
        }

        .edge {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            border-radius: 8px;
            background: linear-gradient(to right, #FFA500, #FFEFD5);
        }

        .front {
            display: block;
            position: relative;
            border-radius: 8px;
            background: linear-gradient(to right, #FFA500, #8B4513);
            padding: 16px 32px;
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
                Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-size: 1rem;
            transform: translateY(-4px);
            transition: transform 600ms cubic-bezier(0.3, 0.7, 0.4, 1);
        }

        .pushable:hover {
            filter: brightness(110%);
        }

        .pushable:hover .front {
            transform: translateY(-6px);
            transition: transform 250ms cubic-bezier(0.3, 0.7, 0.4, 1.5);
        }

        .pushable:active .front {
            transform: translateY(-2px);
            transition: transform 34ms;
        }

        .pushable:hover .shadow {
            transform: translateY(4px);
            transition: transform 250ms cubic-bezier(0.3, 0.7, 0.4, 1.5);
        }

        .pushable:active .shadow {
            transform: translateY(1px);
            transition: transform 34ms;
        }

        .pushable:focus:not(:focus-visible) {
            outline: none;
        }

    </style>
</head>

<body>
    <div class="quiz-container">
        <video id="video-player" controls></video>
        <div id="question"></div>
        <div id="options">
            <button id="optionA" class="option-button" onclick="submitAnswer('A')"></button>
            <button id="optionB" class="option-button" onclick="submitAnswer('B')"></button>
        </div>
        <button id="buttonHint" onclick="showHint()">Hint !</button>
        <p id="hint" style="display: none;"></p>
        <p id="feedback"></p>

        <div id="score-container">
            <h2>Your Quiz Score</h2>
            <p id="score"></p>
            <button class="pushable" onclick="repeatQuiz()" type="button">
                <span class="shadow"></span>
                <span class="edge"></span>
                <span class="front">
                    REPEAT QUIZ
                </span>
            </button>

            <a href="bootstrap.php"> <button class="pushable">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front">
                        BACK TO HOME
                    </span>
                </button>
            </a>
        </div>
    </div>

    <script>
        var quizData = [{
                question: "I should get ready for school. The class starts at 8.00 am. What should I do?",
                options: ["Wake up and get ready for school 🚶🏻‍♂️‍➡️", "It's still early 🛌🏻"],
                answer: "A",
                hint: "Remember to be PUNCTUAL at all times.⏰"
            },
            {
                question: "It seems unpleasant if I were to ask about the menu today directly. What should I say first?",
                options: ["Ask what is today's breakfast right away 🥞", "Greet his parents 👫"],
                answer: "B",
                hint: "Having PROPER GREETING first is a way of showing respect to people.🙋🏻‍♂️"
            },
            {
                question: "'I'm so sorry, Razi. We are having the usual today. We can't have the breads and butter waste just like that.'",
                options: ["Accept the breakfast she made 🍞", "Say that you don't like it 🙅🏻‍♂️"],
                answer: "A",
                hint: "Always APPRECIATE for the things that people make for you.🌷"
            },
            {
                question: "'Oh right, I wonder where is Sofea.'",
                options: ["Ask where is Sofea 🤔", "Ignore it 🫥"],
                answer: "A",
                hint: "Being MINDFUL and CONCERN about others shows that you are aware of the people around you.🥰"
            },
            {
                question: "'Now who wants to volunteer first?'",
                options: ["Ask to volunteer yourself 🙋🏻‍♀️", "Stay quiet 🤫"],
                answer: "A",
                hint: "COURAGE is all you need to be brave!📚"
            },
            {
                question: "'Hey Razi, you look so cool back there in the class! I think you are getting smarter each day!'",
                options: ["Oh yeah, I am always smarter than you! 😒", "Is that so? 🥹"],
                answer: "B",
                hint: "Being HUMBLE is what makes people feel pleasant to be around you.🙆🏻‍♀️"
            },
            {
                question: "Dad is always picking me up right after school even if he is busy with his work. I should say something to him.",
                options: ["Thank him for picking you up 🫂", "Just say nothing 🤐"],
                answer: "A",
                hint: "Always be THANKFUL for the good deeds people do for you.💖"
            }
        ];

        var videoUrls = [
            "videos/video1.mp4",
            "videos/video2.mp4"
            // Add video URLs corresponding to each question
        ];

        var currentQuestion = 0;
        var score = 0;

        var videoPlayer = document.getElementById('video-player');
        var questionDiv = document.getElementById('question');
        var optionA = document.getElementById('optionA');
        var optionB = document.getElementById('optionB');
        var feedbackDiv = document.getElementById('feedback');
        var scoreContainer = document.getElementById('score-container');
        var scoreDisplay = document.getElementById('score');
        var hintButton = document.getElementById('buttonHint');
        var hintDiv = document.getElementById('hint');

        function loadQuestion() {
            if (currentQuestion >= quizData.length) {
                showScore();
                return;
            }

            videoPlayer.src = videoUrls[currentQuestion];
            questionDiv.textContent = quizData[currentQuestion].question;
            optionA.textContent = quizData[currentQuestion].options[0];
            optionB.textContent = quizData[currentQuestion].options[1];

            feedbackDiv.textContent = '';
            scoreContainer.style.display = 'none';
            hintDiv.style.display = 'none';
            hintButton.style.display = 'block'; // Ensure hint button is visible for questions
            hintButton.disabled = false;
        }

        function submitAnswer(selectedAnswer) {
            var correctAnswer = quizData[currentQuestion].answer;
            if (selectedAnswer === correctAnswer) {
                score++;
                feedbackDiv.textContent = 'Correct!💯';
            } else {
                feedbackDiv.textContent = 'Incorrect.❌ The correct answer is: ' + quizData[currentQuestion].options[correctAnswer.charCodeAt(0) - 65];
            }

            setTimeout(function() {
                currentQuestion++;
                loadQuestion();
            }, 2000); // Wait for 2 seconds before loading the next question
        }

        function showHint() {
            var hint = quizData[currentQuestion].hint;
            if (hint) {
                hintDiv.textContent = 'Hint: ' + hint;
                hintDiv.style.display = 'block';
                hintButton.disabled = true;
            }
        }

        function showScore() {
            videoPlayer.style.display = 'none';
            questionDiv.textContent = '';
            optionA.style.display = 'none';
            optionB.style.display = 'none';
            feedbackDiv.textContent = '';
            scoreDisplay.textContent = 'You scored ' + score + ' out of ' + quizData.length + '.';
            scoreContainer.style.display = 'block';
            hintButton.style.display = 'none'; // Hide hint button on score page
        }

        function repeatQuiz() {
            currentQuestion = 0;
            score = 0;
            videoPlayer.style.display = 'block';
            optionA.style.display = 'block';
            optionB.style.display = 'block';
            feedbackDiv.style.display = 'block';
            hintButton.style.display = 'block'; // Ensure hint button is visible when repeating quiz
            loadQuestion();
        }

        loadQuestion();

    </script>
</body>

</html>
