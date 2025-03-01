<?php 
    /* Funções para a codificação e descodificação */
    function safe_b64encode($string) {
 
        $data = base64_encode($string);
        $data = str_replace(array('+','/','='),array('-','_',''),$data);
        return $data;
    }
 
	function safe_b64decode($string) {
        $data = str_replace(array('-','_'),array('+','/'),$string);
        $mod4 = strlen($data) % 4;
        if ($mod4) {
            $data .= substr('====', $mod4);
        }
        return base64_decode($data);
    }

    function encode($string) 
    {
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'SuPerEncKey2010';
        $secret_iv = 'xxxxxxxxxxxxxxxxxxxxxxxxx';
        // hash
        $key = hash('sha256', $secret_key);    
        // iv - encrypt method AES-256-CBC expects 16 bytes 
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = safe_b64encode($output);
        return $output;
    }

    function decode($string) 
    {
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'SuPerEncKey2010';
        $secret_iv = 'xxxxxxxxxxxxxxxxxxxxxxxxx';
        // hash
        $key = hash('sha256', $secret_key);    
        // iv - encrypt method AES-256-CBC expects 16 bytes 
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        $output = openssl_decrypt(safe_b64decode($string), $encrypt_method, $key, 0, $iv);
        return $output;
    }
 
    // function encode($value){ 
	// 	$skey = "SuPerEncKey2010a";
	//     if(!$value){return false;}
    //     $text = $value;
    //     $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
    //     $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    //     $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $skey, $text, MCRYPT_MODE_ECB, $iv);
    //     return trim(safe_b64encode($crypttext)); 
    // }
 
    // function decode($value){
	// 	$skey = "SuPerEncKey2010a";
    //     if(!$value){return false;}
    //     $crypttext = safe_b64decode($value); 
    //     $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
    //     $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    //     $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $skey, $crypttext, MCRYPT_MODE_ECB, $iv);
    //     return trim($decrypttext);
    // }
?>