<?php
include('style/bootstrap5.php');
include('database/db.php');

?>


<!DOCTYPE html>
<html>

<body>

    <?php
    $key = "encryption key";
    $text = "3";
    $encrypted = bin2hex(openssl_encrypt($text, 'AES-128-CBC', $key));
    $decrypted = openssl_decrypt(hex2bin($encrypted), 'AES-128-CBC', $key);
    var_dump($encrypted, $decrypted);
    ?>



    <script>
        const id = urlParams.get('car')
        if (id) {
            console.log(id);
        } else {
            console.log("failed");
        }
    </script>
</body>

</html>