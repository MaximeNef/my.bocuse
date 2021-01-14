<?php
session_start();
ini_set('display_errors', 'on');
error_reporting(E_ALL);
$db = new PDO('mysql:host=localhost:3307;dbname=my_bocuse_user', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$date = date('Y-m-d');
date_default_timezone_set("Europe/Paris");

$heure = date('Y-m-d h:i:s');


if ($_GET['type'] == 'start') {
    $date_du_jour = $db->query("SELECT date FROM connection");
    $id_user = $db->prepare("SELECT FK_id_user FROM connection WHERE date= ?");
    $id_user->execute([$date]);
    $id_users = $id_user->fetch();
    $search_id_user = in_array($_SESSION['userid'][0], $id_users);

    if ($date_du_jour == $date || $search_id_user ==  true) {
        echo 'pointé';
    } else {
        echo 'oke';
        $heure_maintenant = date('H:i:s');
        $date_arriver = $db->prepare("INSERT INTO connection(FK_id_user,time_begin,time_end,date)  VALUES (?,?,?,?)");

        $date_arriver->execute([$_SESSION['userid'][0], $heure, null, $date]);
    }
    //$delete = $db->prepare("DELETE FROM connection WHERE date = ?");
    //  $delete->execute([$date]);
}
if ($_GET['type'] == 'stop') {
    $date_du_jour = $db->query("SELECT date FROM connection");
    $date_du_jours = $date_du_jour->fetch();
    $heure_de_pointage_départ = $db->query("SELECT time_end FROM connection");
    $search_date = in_array($date, $date_du_jours);
    $heure_de_pointage_départs = $heure_de_pointage_départ->fetch();
    $search_depart = in_array(NULL, $heure_de_pointage_départs);
    $id_user = $db->prepare("SELECT FK_id_user FROM connection WHERE date= ?");
    $id_user->execute([$date]);
    $id_users = $id_user->fetch();
    $search_id_user = in_array($_SESSION['userid'][0], $id_users);
    if ($search_date == true || $search_depart == true || $search_id_user == true) {
        $date_depart = $db->prepare("UPDATE connection SET time_end = ?  WHERE date = ?");

        $date_depart->execute([$heure, $date]);

        echo 'okay';
    } else {
        echo 'pointées';
    }
}
