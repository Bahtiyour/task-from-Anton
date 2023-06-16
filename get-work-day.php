<?php
$dateCreate = '';
$timestamp = strtotime($dateCreate);
$hour = (int)date('H', $timestamp); 
$is_weekend = (date('N', $timestamp) >= 6); 
if ($hour < 15) {
    $next_day = date('N', $timestamp + 86400);
    if ($next_day >= 6) {
        $timestamp = strtotime('next monday', $timestamp);
    } else {
        $timestamp = $timestamp + 86400;
    }
} else {
 // отработает если время после 15:00
    $timestamp = strtotime('next weekday', $timestamp); 
}
$date = date('d.m.Y H:i:s', $timestamp);
echo $date;
?>