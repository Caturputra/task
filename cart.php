<?php
    require 'config.php';
    require 'inc/function.php';
    $sid = session_id();

    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_GET['act']) && isset($_GET['ref'])) {
        $act = $_GET['act'];
        $ref = $_GET['ref'];

        if ($act == "add") {
            if (isset($_GET['product_id'])) {
                $product_id = $_GET['product_id'];
                if (isset($_SESSION['items'][$product_id])) {
                    $_SESSION['items'][$product_id] += 1;
                    }
                } else {
                    $_SESSION['items'][$product_id] = 1;
                }
            }
        } elseif ($act == "plus") {
            if (isset($_GET['product_id'])) {
                $product_id = $_GET['product_id'];
                if (isset($_SESSION['items'][$product_id])) {
                    //$_SESSION['customer'] = $var_cid;
                    $_SESSION['items'][$product_id] += 1;
                }
            }
        } elseif ($act == "min") {
            if (isset($_GET['product_id'])) {
                $product_id = $_GET['product_id'];
                if (isset($_SESSION['items'][$product_id])) {
                  //  $_SESSION['customer'] = $var_cid;
                    $_SESSION['items'][$product_id] -= 1;
                }
            }
        } elseif ($act == "del") {
            if (isset($_GET['product_id'])) {
                $product_id = $_GET['product_id'];
                if (isset($_SESSION['items'][$product_id])) {
                    unset($_SESSION['items'][$product_id]);
                }
            }
        } elseif ($act == "clear") {
            if (isset($_SESSION['items'])) {
                foreach ($_SESSION['items'] as $key => $val) {
                    unset($_SESSION['items'][$key]);
                }
                unset($_SESSION['items']);
            }
        }

        header ("location:" . $ref);
    }
?>
