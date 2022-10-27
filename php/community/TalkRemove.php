<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $commentID = $_GET['commentID'];
    $commentID = $connect -> real_escape_string($commentID);

    $sql = "DELETE FROM myTalk WHERE myTalkID = {$commentID}";
    $result = $connect -> query($sql);
    // echo json_encode(array("info" => $commentID));
?>