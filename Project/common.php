<?php

function escape($data) {
    $data = htmlspecialchars_decode($data ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}