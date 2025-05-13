<div class="container">
    <div class="login-box">
        <img src="assets/images/logo.png" alt="Waste Collection System" class="logo">
        <h2>Waste Collection system</h2>

        <form id="loginForm" action="php/login.php" method= "POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required >
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required >
            </div>

            <button type="submit" class="btn-login">Login</button>
        </form>

        <div id="loginMessage" class="message"></div>
    </div>
</div>

<?php include "includes/footer.php";?>