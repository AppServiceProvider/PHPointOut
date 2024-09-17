<?php
// Start the session with a 5-minute cookie lifetime
session_start([
    'cookie_lifetime' => 300, // 5 minutes
]);

$error = false;

// Check if login data is provided
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Validate username and password
    // if ('admin' == $_POST['username'] && 'd033e22ae348aeb5660fc2140aec35850c4da997' == sha1($_POST['password'])) {
    if ('admin' == $_POST['username'] && 'admin' == $_POST['password']) {

        $_SESSION['loggedin'] = true;
    } else {
        $error = true;
        $_SESSION['loggedin'] = false;
    }
}

// Handle logout
if (isset($_POST['logout'])) {
    $_SESSION['loggedin'] = false;
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Example</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2 style="margin-top: 30px">Simple Auth Example</h2>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php
                // Show login status message
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                    echo "Successful Login";
                } else {
                    echo "Failed login";
                }
                ?>
            </div>
        </div>
        <div class="row" style="margin-top:100px;">
            <div class="column column-60 column-offset-20">
                <?php
                // Show error message if login failed
                if ($error) {
                    echo "<blockquote>Username and Password didn't match</blockquote>";
                }

                // Show login form if not logged in
                if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] === false) {
                    ?>
                    <form method="POST">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" >

                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>

                        <button type="submit" class="button-primary" name="submit">Log In</button>
                    </form>
                    <?php
                } else {
                    // Show logout form if logged in
                    ?>
                    <form method="POST">
                        <input type="submit" name="logout" value="1">
                        <button type="submit" class="button-primary" name="submit">Log Out</button>
                    </form>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>