<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div>
            <p>Chat System</p>
        </div>
    </header>
    <nav></nav>
    <main>
        <section>
            <h1>Chat System</h1>
            <p>Work in Progress . . .</p>
        </section>
        <section>
            <!--span class="tab">Sign up</span>
            <span class="tab">Sign in</span-->
            <button id="signup-button" class="tab">Sign up</button>
            <button id="signin-button" class="tab">Sign in</button>
            <form id="signup-form" action="index.php">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email"><br>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username"><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password"><br>
                <input type="submit" name="submit" value="Sign up">
            </form>
            <form id="signin-form" action="index.php">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email"><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password"><br>
                <input type="submit" name="submit" value="Sign in">
            </form>
        </section>
    </main>
    <footer><p>&copy; 2019</p></footer>
    <script src="script.js"></script>
</body>
</html>