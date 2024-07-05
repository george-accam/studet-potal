<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="form-container">
        <div class="autotyping-container">
                <h1 class="typing-text">The Easiest Help Desk Ticketing System .</h1>
        </div>

        <div class="form-inner">
            <form  id="authForm">
                    <h1 class="header">Sign Up</h1>
                    <div class="input-container">
                        <label for="fullname">Full name :</label>
                        <input type="text" id="fullname">
                    </div>
                    <div class="input-container">
                        <label for="email">Email :</label>
                        <input type="email" id="email">
                    </div>
                    <div class="input-container">
                        <label for="password">Password :</label>
                        <input type="password" id="password">
                    </div>
                    <div class="password-btn">
                        <button class="password" type="button" id="togglePassword">😌</button>
                        <p id="passwordValidation" class="password-validation">password should be more than 8 characters</p>
                    </div>
                    <div class="input-container">
                        <label for="confirmpassword">Confirm password :</label>
                        <input type="password" id="confirmPassword">
                    </div>
        
        
                    <div class="btn-container">
                        <button type="submit" class="signupbtn">sign up</button>
                        <button type="submit" class="signupbtn" onclick="showNotification()">log in</button>
                        <p id="spin"></p>
                    </div>
        
                    <!-- this is for the pop up log in page -->
                    <div id="blur-background" class="blur-background">
                        <div id="notification" class="notification">
                            <span class="close" onclick="closeNotification()">⨉</span>
                                <h1 class="head">Log In</h1>
                                <div class="input-container">
                                    <label for="email">Email :</label>
                                    <input type="email" id="email">
                                </div>
                                <div class="input-container">
                                    <label for="password">Password :</label>
                                    <input type="password" id="password">
                                </div>
                                <div class="password-btn">
                                    <button class="password loginpassword" type="button" id="togglePassword">😌</button>
                                </div>
                                <div class="btn-container">
                                    <button type="submit" class="loginbtn" onclick="">log in</button>
                                </div>
                    </div>
                </form>
            </div>

    </div>
    <script src="script.js"></script>
</body>
</html>