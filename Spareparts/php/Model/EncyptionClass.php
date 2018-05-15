<?php

class EncyptionClass{

    public function __construct(){


    }

    function encrypt($pure_string) {
        $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, "!@#$%^&*", utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
        return $encrypted_string;
    }

    /**
     * Returns decrypted original string
     */
    function decrypt($encrypted_string) {
        $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, "!@#$%^&*", $encrypted_string, MCRYPT_MODE_ECB, $iv);
        return $decrypted_string;
    }
}

//$x = new EncyptionClass();
//echo $x->encrypt("43");
//echo "<br>";
//echo $x->decrypt($x->encrypt("43"));
?>