<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect input data
    $team_name = $_POST['team_name'];
    $member1_name = $_POST['member1_name'];
    $member2_name = $_POST['member2_name'];

    if (empty($team_name)) {
        echo "Team name is empty. It is mandatory field. Please fill it.";
        exit();
    }

    echo "Team Name: " . $team_name . "<br>";
    echo "Member 1 Name: " . $member1_name . "<br>";
    echo "Member 2 Name: " . $member2_name . "<br>";
} else {
    echo "No data posted with HTTP POST.";
}
?>
