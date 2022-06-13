<?php

if (!empty($_POST)) {
    $name = $_POST['name'];
    try {
        $conn = new PDO('mysql:host=localhost;dbname=sjabbel', "root", "root");
        $statement = $conn->prepare("insert into user (name) values (:name)");
        $statement->bindValue("name", $name);

        //is hetzelfde als real_escape_string

        $result = $statement->execute();
    } catch (Throwable $e) {
        echo $e->getMessage();
    }
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sjabbel</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="netflixLogin">
        <div class="form form--login">
            <form action="" method="post">
                <h2 form__title>Sign up</h2>
                <?php if (isset($error)) : ?>
                    <div class="form__error">
                        <p>
                            Sorry, we can't log you in with that username. Can you try again?
                        </p>
                    </div>
                <?php endif; ?>
                <div class="form__field">
                    <label for="name">name</label>
                    <input type="text" name="name">
                </div>
                

                <div class="form__field">
                    <input type="submit" value="Sign up" class="btn btn--primary">
                    <input type="checkbox" id="rememberMe"><label for="rememberMe" class="label__inline">Remember me</label>
                </div>
            </form>
        </div>
    </div>
</body>

</html>