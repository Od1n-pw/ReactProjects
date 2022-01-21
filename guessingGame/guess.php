        <?php
        // if (!isset($_GET['guess'])) {
        //     echo ("Missing guess parameter");
        // } else if (strlen($_GET['guess']) < 1) {
        //     echo ("Your guess is too short");
        // } else if (!is_numeric($_GET['guess'])) {
        //     echo ("Your guess is not a number");
        // } else if ($_GET['guess'] < 42) {
        //     echo ("Your guess is too low");
        // } else if ($_GET['guess'] > 42) {
        //     echo ("Your guess is too high");
        // } else {
        //     echo ("Congratulations - You are right");
        // }
        $oldguess = '';
        $message = false;
        $random = rand(0, 10);
        if (isset($_POST['guess'])) {
            //trick for integer / numeric params
            $oldguess = $_POST['guess'] + 0;
            if ($oldguess == $random) {
                $message = "great Job";
            } else if ($oldguess < $random) {
                $message = "too low";
            } else {
                $message = "too high ...";
            }
        }
        ?>
        <html>

        <head>
            <title>Guessing Game</title>
        </head>

        <body>
            <p>Guessing Game</p>
            <?php
            if ($message !== false) {
                echo "<p>$message</p>\n";
            }
            ?>

            <form method="post">
                <p><label for="guess">input Guess</label></p>
                <input type="text" name="guess" size="40" value="<?= htmlentities($oldguess) ?>" />
                <input type="submit" />
            </form>
        </body>

        </html>