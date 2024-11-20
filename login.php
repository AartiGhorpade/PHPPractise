<?php

if ($_GET) {
    echo "get" . $_GET['user_name'];
    echo "get" . $_GET['age'];
} else if ($_POST) {
    echo "post" . $_POST['user_name'];
    echo "post" . $_POST['age'];
}
