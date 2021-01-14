<?php
session_start();
ini_set('display_errors', 'on');
error_reporting(E_ALL);

$db = new PDO('mysql:host=localhost:3307;dbname=my_bocuse_user', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$date = date('Y-m-d');
date_default_timezone_set("Europe/Paris");

$heure = date('Y-m-d h:i:s');
$condition = $db->prepare("SELECT * FROM connection WHERE date = ? AND FK_id_user = ?");
$condition->execute([$date, $_SESSION['userid']]);
$condition_fetch = $condition->fetch();


if ($_GET['type'] == 'start') {



    if (!empty($condition_fetch)) {
        echo 'non-pointage-matin';
    } else {
        $date_arriver = $db->prepare("INSERT INTO connection(FK_id_user,time_begin,time_end,date)  VALUES (?,?,?,?)");

        $date_arriver->execute([$_SESSION['userid'], $heure, null, $date]);
        echo 'pointage-matin';
    }
    //$delete = $db->prepare("DELETE FROM connection WHERE date = ?");
    //$delete->execute([$date]);
}
if ($_GET['type'] == 'stop') {


    if (!empty($condition_fetch)) {
        if ($condition_fetch['time_end'] == null) {
            $date_depart = $db->prepare("UPDATE connection SET time_end = ?  WHERE date = ?");

            $date_depart->execute([$heure, $date]);

            echo 'pointage-soir';
        } else {
            echo 'pointage-soir-déjà-fait';
        }
    } else {
        echo 'pointage-matin-pas-encore-fait';
    }
}
