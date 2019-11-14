<?php

//prints html as text - Gør så XSS ikke er muligt igennem user inputs
function safe($message, $multilines = false) {
    if($multilines) {
        echo nl2br(htmlspecialchars($message));
    } else {
        echo htmlspecialchars($message);
    }
}

function logout() {
    session_destroy();
    echo ("<script>location.href='/'</script>");

}
?>