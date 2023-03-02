
<?php

session_start();


if (isset($_GET['reset'])) {
    session_destroy();
    header('Location: index.php');
} else {

    $num_visits = $_SESSION['num_visits'] ?? 1;
    if ($num_visits >= 5 && $num_visits <= 9) {

        echo "Thank you for visiting the page a lot.</br>";
    } else if ($num_visits >= 10) {

        header('Location: congratulations.php');
    }

    $_SESSION['num_visits'] = $num_visits + 1;
}

?>
<h1>Hello</h1>
<p>You have visited this page <?= $num_visits ?> times</p>
<p><a href="?reset=true">Reset</a></p>
