<!DOCTYPE html>

<html>

<head>

</head>

<body>
    <div>
        <h1>Chat bot</h1>
    </div>
    <div>
        <div>
            <h3>De chatbot kan sommen uitrekenen als je daarom vraagt (zet spaties tusen je som!)</h3>
            <ul>
                <li>Bereken voor mij</li>
                <li>Wat is</li>
                <li>Hoeveel is</li>
                <li>Bereken het volgende</li>
                <li>calculate</li>
            </ul>
        </div>
        <form action="handler.php" method="post">
            <h3>Wat is je naam?</h3>
            <input type="text" name="user" required autocomplete="off">
            <p>Je praat nu met de chatbot</p>
            <div class="chatbot">
                <textarea name="" id="" cols="50" rows="10"><?php
                                                            if (isset($_COOKIE["messageList"])) {
                                                                echo $_COOKIE["messageList"];
                                                            }
                                                            ?></textarea>
            </div>
            <p>Type een bericht</p>
            <input type="text" name="message" required autocomplete="off">
            <input type="submit" name="submit" value="Stuur bericht">
        </form>
        <!-- <input type="submit" name="reset" value="Clear chat" action="reset.php" method="post"> -->
    </div>
</body>

</html>