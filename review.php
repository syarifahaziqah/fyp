<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>review and experience</title>
    <style>
        body {
            font-family: serif, sans-serif;
            margin: 30px;
            font-size: 16px;
            background: linear-gradient(to right,
                    #f6b6c1, #f7c7d9, #d9c7f7, #c7daf7, #c1f6f6);
        }

        .review-section {
            max-width: 600px;
            margin: auto;
            border-radius: 20px;

        }

        .review-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .review-form input[type="text"],
        .review-form textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            font-family: monospace;
            border-radius: 10px;
        }

        .reviews {
            margin-top: 20px;
        }

        .review {
            border: 2px solid beige;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 20px;
        }

        .review img {
            max-width: 50%;
            height: auto;
            display: block;
            margin-top: 10px;
        }

        .custom-file-upload {
            position: relative;
            height: 200px;
            width: 300px;
            display: flex;
            flex-direction: column;
            align-items: space-between;
            gap: 20px;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            border: 2px dashed #e8e8e8;
            background-color: #212121;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0px 48px 35px -48px #e8e8e8;
            text-align: center;
        }

        .custom-file-upload .icon {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custom-file-upload .icon svg {
            height: 80px;
            fill: #e8e8e8;
        }

        .custom-file-upload .text {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custom-file-upload .text span {
            font-weight: 400;
            color: #e8e8e8;
        }

        .custom-file-upload input {
            display: none;
        }

        .custom-file-upload img {
            max-height: 100%;
            max-width: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        button {
            position: relative;
            display: inline-block;
            cursor: pointer;
            outline: none;
            border: 0;
            vertical-align: middle;
            text-decoration: none;
            font-family: inherit;
            font-size: 13px;
        }

        button.btn2 {
            font-weight: 600;
            color: #382b22;
            text-transform: uppercase;
            padding: 1em 4em;
            background: #fff0f0;
            border: 2px solid #b18597;
            border-radius: 0.75em;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-transition: background 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1);
            transition: transform 150ms cubic-bezier(0, 0, 0.58, 1), background 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1);
        }

        button.btn2::before {
            position: absolute;
            content: '';
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #f9c4d2;
            border-radius: inherit;
            -webkit-box-shadow: 0 0 0 2px #b18597, 0 0.625em 0 0 #ffe3e2;
            box-shadow: 0 0 0 2px #b18597, 0 0.625em 0 0 #ffe3e2;
            -webkit-transform: translate3d(0, 0.75em, -1em);
            transform: translate3d(0, 0.75em, -1em);
            transition: transform 150ms cubic-bezier(0, 0, 0.58, 1), box-shadow 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-box-shadow 150ms cubic-bezier(0, 0, 0.58, 1);
        }

        button.btn2:hover {
            background: #ffe9e9;
            -webkit-transform: translate(0, 0.25em);
            transform: translate(0, 0.25em);
        }

        button.btn2:hover::before {
            -webkit-box-shadow: 0 0 0 2px #b18597, 0 0.5em 0 0 #ffe3e2;
            box-shadow: 0 0 0 2px #b18597, 0 0.5em 0 0 #ffe3e2;
            -webkit-transform: translate3d(0, 0.5em, -1em);
            transform: translate3d(0, 0.5em, -1em);
        }

        button.btn2:active {
            background: #ffe9e9;
            -webkit-transform: translate(0em, 0.75em);
            transform: translate(0em, 0.75em);
        }

        button.btn2:active::before {
            -webkit-box-shadow: 0 0 0 2px #b18597, 0 0 #ffe3e2;
            box-shadow: 0 0 0 2px #b18597, 0 0 #ffe3e2;
            -webkit-transform: translate3d(0, 0, -1em);
            transform: translate3d(0, 0, -1em);
        }

        .button11 {
            display: flex;
            height: 3em;
            width: 150px;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            letter-spacing: 2px;
            transition: all 0.2s linear;
            cursor: pointer;
            background: #C9A5DB;
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
</head>

<body>
    <div class="review-section">
        <h2>🌺 Share Your Feedback or Experience 🌺</h2>
        <form id="reviewForm" class="review-form">
            <input type="text" id="name" placeholder="Your Name..." required>
            <textarea id="experience" placeholder="Share your feedback or experience..." rows="5" required></textarea>
            <label for="file" class="custom-file-upload">
                <div class="icon">
                    <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" fill=""></path>
                        </g>
                    </svg>
                </div>
                <div class="text">
                    <span>Click to upload image</span>
                </div>
                <input id="file" type="file" accept="image/*">
                <img id="imagePreview" style="display:none;" />
            </label>
            <button type="submit" class="btn2">Submit</button><br>
        </form>
        <button id="clearReviews" class="btn2"> Clear reviews </button>
        <div class="reviews" id="reviews">
            <h3><br>Reviews</h3>
            <!-- Reviews will be displayed here -->
        </div>
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
    </div>

    <script>
        document.getElementById('file').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                const imagePreview = document.getElementById('imagePreview');
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
                document.querySelector('.custom-file-upload .icon').style.display = 'none';
                document.querySelector('.custom-file-upload .text').style.display = 'none';
            };
            reader.readAsDataURL(file);
        });

        document.getElementById('reviewForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Get the input values
            const name = document.getElementById('name').value;
            const experience = document.getElementById('experience').value;
            const fileInput = document.getElementById('file');
            const file = fileInput.files[0];

            // Create a new review object
            const review = {
                name: name,
                experience: experience,
                image: ''
            };

            if (file) {
                const reader = new FileReader();
                reader.onloadend = function() {
                    review.image = reader.result;
                    saveReview(review);
                    addReviewToPage(review);
                }
                reader.readAsDataURL(file);
            } else {
                saveReview(review);
                addReviewToPage(review);
            }

            // Clear the form fields
            document.getElementById('reviewForm').reset();
            document.getElementById('imagePreview').style.display = 'none';
            document.querySelector('.custom-file-upload .icon').style.display = 'flex';
            document.querySelector('.custom-file-upload .text').style.display = 'flex';
        });

        // Function to save review to local storage
        function saveReview(review) {
            let reviews = JSON.parse(localStorage.getItem('reviews')) || [];
            reviews.push(review);
            localStorage.setItem('reviews', JSON.stringify(reviews));
        }

        // Function to add a review to the page
        function addReviewToPage(review) {
            const reviewsDiv = document.getElementById('reviews');
            const reviewDiv = document.createElement('div');
            reviewDiv.className = 'review';
            reviewDiv.innerHTML = `
                <h4>${review.name}</h4>
                <p>${review.experience}</p>
                ${review.image ? `<img src="${review.image}" alt="Review Image">` : ''}
            `;
            reviewsDiv.appendChild(reviewDiv);
        }

        // Function to load reviews from local storage
        function loadReviews() {
            let reviews = JSON.parse(localStorage.getItem('reviews')) || [];
            reviews.forEach(review => {
                addReviewToPage(review);
            });
        }

        // Load reviews when the page loads
        window.onload = loadReviews;

        // Clear reviews function
        document.getElementById('clearReviews').addEventListener('click', function() {
            localStorage.removeItem('reviews');
            document.getElementById('reviews').innerHTML = '<h3>Reviews</h3>';
        });

    </script>
</body>

</html>
