<?php
    session_start();

    header('Content_TypeL text/html; charset=utf-8');

    $db = new mysqli("localhost", "web", "1284", "web");
    $db->set_charset("utf-8");

    function query($query)
    {
        global $db;
        return $db->query($query);
    }