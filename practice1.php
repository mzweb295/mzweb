<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MZ WEB</title>
    <link rel="icon" type="image/png" href="image/jo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/jo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/jo.png">
</head>
<body><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body>
    <h1></h1>
  </body>
</html><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html><script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>White Font Color</title>
<style>
    body {
        color: white; /* Set the default font color to white */
        background-color: black; /* Optional: Set background color for better visibility */
    }
</style>
</head>
<body>
 
    <div>
     
    </div>
</body>
</html>



<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Video Background</title>
<style>
    body, html {
        margin: 0;
        padding: 0;
        height: 100%;
        overflow: hidden;
    }
    #video-background {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }
    .content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
    }
    h1 {
        font-size: 3em;
    }
</style>
</head>
<body>
    <video autoplay muted loop id="video-background">
        <source src="image/mo.mp4" type="video/mp4">

    </video>

    <div class="content">
        <h1></h1>
        <p></p>
    </div>
</body>
</html>












<!DOCTYPE html>
<center><html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CAPTCHA Puzzle</title>
<script> 
    function generateCAPTCHA() {
        const num1 = Math.floor(Math.random() * 10);
        const num2 = Math.floor(Math.random() * 10);
        const operator = Math.random() < 0.5 ? '+' : '-';

        const expression = `${num1} ${operator} ${num2}`;
        const result = operator === '+' ? num1 + num2 : num1 - num2;

        document.getElementById('expression').textContent = expression;
        document.getElementById('result').value = result;
    }

    function checkAnswer() {
        const userInput = parseInt(document.getElementById('userInput').value);
        const actualResult = parseInt(document.getElementById('result').value);

        if (userInput === actualResult) {
            alert('Congratulations! You are a human.');
            window.location.href = 'table1.php'; // Redirect to another page
        } else {
            alert('Sorry, that answer is incorrect. Please try again.');
            generateCAPTCHA();
        }
    }

    window.onload = function() {
        generateCAPTCHA();
    };
</script>
</head>
<body>
    <h1>VERIFY THAT UR HUMAN</h1><br><br><br><br>
    <h3>Solve the following puzzle to prove you are human:</h3>
    <p id="expression"></p>
    <input type="number" id="userInput"><br><br>
    <button class="btn btn-primary" onclick="checkAnswer()">Submit</button>
    <input type="hidden" id="result">
</body>
</html>
