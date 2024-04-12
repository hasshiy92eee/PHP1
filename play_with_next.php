<?php
    // POSTリクエストから値を受け取る
    if (isset($_POST["changered"])) {
        echo "赤ボタンがクリックされました";
    } elseif (isset($_POST["changeblue"])) {
        echo "青ボタンがクリックされました";
    }
    ?>