<?php
echo (password_hash("demo", PASSWORD_DEFAULT) . "<br>");


// Ver el ejemplo de password_hash() para ver de dónde viene este hash.
$hash = '$2y$10$G80JKNyjQ1imbp.XZa.VLO8FKlgqYInTi4vFpwE.TBiv73FzanEi2';
echo ($hash . "<br>");

if (password_verify('lolo', $hash)) {
    echo '¡La contraseña es válida!';
} else {
    echo 'La contraseña no es válida.';
}
?>