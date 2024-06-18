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
            background-image: url('img/Classroom_BG_v2%5B1%5D.png');
            background-size: cover;
            opacity: 65%;
            z-index: -1;
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

        .option-button {
            display: inline-block;
            width: 40%;
            padding: 15px;
            margin: 10px auto;
            background-color: #CCB4CC;
            color: whitesmoke;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            font-family: serif;
        }

        .option-button:hover {
            background-color: #E6DCE6;
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
            outline-color: lightgreen;
            transition: filter 250ms;
        }

        .shadow {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: hsl(120, 25%, 69%);
            /* soft green shadow */
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
            background: #96E9E8;
        }

        .front {
            display: block;
            position: relative;
            border-radius: 8px;
            background: #48B6B4;
            /* soft green front */
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
        <div id="question"></div>
        <div id="options">
            <button id="optionA" class="option-button" onclick="submitAnswer('A')"></button>
            <button id="optionB" class="option-button" onclick="submitAnswer('B')"></button>
            <button id="optionC" class="option-button" onclick="submitAnswer('C')"></button>
            <button id="optionD" class="option-button" onclick="submitAnswer('D')"></button>
        </div>
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
                question: "What does it mean to show kindness to others? 💕",
                options: ["Ignoring others' feelings and focusing on yourself", "Criticizing others for their mistakes", "Helping others without expecting anything in return", "Being rude to people who are different from you"],
                answer: "C"
            },
            {
                question: " You accidentally break a valuable item that belongs to your parent. What is the best course of action? 🥺",
                options: ["Hide the broken item and hope they don't notice", " Tell them what happened and offer to help replace or fix it", "Blame it on someone else and act like you're innocent", "Ignore it and pretend nothing happened"],
                answer: "B"
            },
            {
                question: "Your parent asks you to help with chores around the house, but you have homework due. What is the most respectful response? 📖",
                options: ["'I'm too busy right now.'", "'I'll do it later.'", "'Why can't someone else do it?'", "'Do my homework first, then help.'"],
                answer: "D"
            },
            {
                question: "Your teacher assigns homework over a holiday weekend. What should you do if you have other plans? 📚",
                options: ["Complete the homework early and then enjoy your holiday guilt-free", "Tell your teacher you won't do the homework because it's a holiday", "Ignore the homework and enjoy your holiday", "Pretend you didn't hear about the homework"],
                answer: "A"
            },
            {
                question: "Your teacher asks for volunteers to help clean up after a school event. What should you do? 🙋🏻‍♀️",
                options: ["Refuse to help because cleaning up isn't your responsibility", "Pretend you didn't hear the request and leave quickly", "Offer to help sincerely and do your best", "Volunteer unwillingly and do a half-hearted job"],
                answer: "C"
            },
            {
                question: "Your teacher gives you a grade that you believe is too low compared to your effort. What is the appropriate way to discuss this with them? 📜",
                options: ["Argue with the teacher and demand a higher grade", "Politely ask the teacher to explain and discuss your concerns", "Complain to other students about the unfair grading", "Change the grade on your report card by fabricating it yourself."],
                answer: "B"
            },
            {
                question: "Your friend is struggling with a personal problem. How do you show your support? 🫂",
                options: ["Laugh at them for having problems", "Ignore them and pretend everything is fine", "Tell them to figure it out on their own", "Offer to listen and let them talk about their feelings"],
                answer: "D"
            },
            {
                question: "Your friend forgot their lunch money. What do you do? 💸",
                options: ["Offer to share your lunch with them", "Pretend you didn't see them and avoid the situation", "Laugh at them and make fun of their forgetfulness", "Tell them to ask someone else for money"],
                answer: "A"
            },
            {
                question: "Your friend wants to borrow your favorite book. How do you respond? 📔",
                options: ["Refuse and keep the book to yourself", "Willingly let them borrow it with pleasure", "Tell them to buy their own copy and ignore them", "Ask them to return a different book instead"],
                answer: "B"
            },
            {
                question: "Your friend is moving away and feeling sad. What do you do? 😭",
                options: ["Ignore them and avoid saying goodbye", "Tell them you're glad they're leaving", "Offer to stay in touch and be their friend even after they move", "Pretend you forgot they were moving away"],
                answer: "C"
            }
        ];
        var currentQuestion = 0;
        var score = 0;

        var questionDiv = document.getElementById('question');
        var optionA = document.getElementById('optionA');
        var optionB = document.getElementById('optionB');
        var optionC = document.getElementById('optionC');
        var optionD = document.getElementById('optionD');
        var feedbackDiv = document.getElementById('feedback');
        var scoreContainer = document.getElementById('score-container');
        var scoreDisplay = document.getElementById('score');

        function loadQuestion() {
            if (currentQuestion >= quizData.length) {
                showScore();
                return;
            }

            var currentQuiz = quizData[currentQuestion];
            questionDiv.textContent = currentQuiz.question;
            optionA.textContent = currentQuiz.options[0];
            optionB.textContent = currentQuiz.options[1];
            optionC.textContent = currentQuiz.options[2];
            optionD.textContent = currentQuiz.options[3];

            feedbackDiv.textContent = '';
            scoreContainer.style.display = 'none';
        }

        function submitAnswer(selectedAnswer) {
            var correctAnswer = quizData[currentQuestion].answer;
            if (selectedAnswer === correctAnswer) {
                score++;
                feedbackDiv.textContent = 'Correct!💯';
            } else {
                feedbackDiv.textContent = 'Incorrect.❌ The correct answer is: ' + quizData[currentQuestion].options[correctAnswer.charCodeAt(0) - 65];
            }

            currentQuestion++;
            setTimeout(loadQuestion, 1000); // Load next question after 1 second delay
        }

        function showScore() {
            questionDiv.textContent = '';
            optionA.style.display = 'none';
            optionB.style.display = 'none';
            optionC.style.display = 'none';
            optionD.style.display = 'none';
            feedbackDiv.textContent = '';
            scoreDisplay.textContent = 'You scored ' + score + ' out of ' + quizData.length + '.';
            scoreContainer.style.display = 'block';
        }

        function repeatQuiz() {
            currentQuestion = 0;
            score = 0;
            optionA.style.display = 'block';
            optionB.style.display = 'block';
            optionC.style.display = 'block';
            optionD.style.display = 'block';
            loadQuestion();
        }
        loadQuestion();

    </script>
</body>

</html>
