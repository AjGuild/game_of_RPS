<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rock Paper Scissors Game</title>
</head>
<body>
    <h1>Rock Paper Scissors Game</h1>
    
    <form method="post">
        <label for="user_choice">Select your choice:</label>
        <select name="user_choice" id="user_choice">
            <option value="rock">Rock</option>
            <option value="paper">Paper</option>
            <option value="scissors">Scissors</option>
        </select>
        <br>
        <input type="submit" value="Play">
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userChoice = $_POST['user_choice'];

        $choices = ['rock', 'paper', 'scissors'];
        $computerChoice = $choices[array_rand($choices)];

        echo "<p>Your choice: $userChoice</p>";
        echo "<p>Computer's choice: $computerChoice</p>";

        if ($userChoice === $computerChoice) {
            echo "<p>It's a tie!</p>";
        } elseif (
            ($userChoice === 'rock' && $computerChoice === 'scissors') ||
            ($userChoice === 'paper' && $computerChoice === 'rock') ||
            ($userChoice === 'scissors' && $computerChoice === 'paper')
        ) {
            echo "<p>You win!</p>";
        } else {
            echo "<p>Computer wins!</p>";
        }
    }
    ?>
</body>
</html>
