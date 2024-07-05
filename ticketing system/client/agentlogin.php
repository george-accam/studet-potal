<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="agent.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="form-container">
        <div class="autotyping-container">
                <h1 class="typing-text">Welcome to Agent Help Desk Ticketing System .</h1>
        </div>

        <div class="form-inner">
            <form  id="authForm">
                    <h1 class="header">Log In</h1>
                    <div class="input-container">
                        <label for="fullname">Username :</label>
                        <input type="text" id="fullname">
                    </div>
                    <div class="input-container">
                        <label for="password">Password :</label>
                        <input type="password" id="password">
                    </div>
                    <div class="password-btn">
                        <button class="password" type="button" id="togglePassword">😌</button>
                        <p id="passwordValidation" class="password-validation">password should be more than 8 characters</p>
                    </div>
                    <div class="btn-container">
                        <button type="submit" class="signupbtn">log in</button>
                        <p id="spin"></p>
                    </div>
    </div>
    <script src="agent.js"></script>
</body>
</html>