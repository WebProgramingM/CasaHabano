<?php
    $language = $_POST["lang"];
    $ages = $_POST["age"];
    if($language == "Spanish") {
        setcookie("lang", "Spanish", time() + (86400 * 30));
        echo json_encode("Exito Spanish");
    }
    else if($language == "English") {
        setcookie("lang", "English", time() + (86400 * 30));
        echo json_encode("Exito English");
    }
    else {
        echo json_encode("Error");
    }
    setcookie($ages, "adult", time() + (86400 * 30));
 ?>