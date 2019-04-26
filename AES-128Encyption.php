<?php
/**
 * Created by Lakshay Saini.
 * Date: 4/24/19
 * Time: 8:19 PM
 */


$data = 'Hello World';
$keystring = 'secret';
$IVECTOR = 'somerandstr12345';

echo "plain data text : ".$data. PHP_EOL;

$encryptedText =  openssl_encrypt($data, 'AES-128-CBC', $keystring, 0, $IVECTOR). PHP_EOL;

echo "encrypted data : ".$encryptedText;
echo "decrypted data : ".openssl_decrypt($encryptedText, 'AES-128-CBC', $keystring, 0, $IVECTOR). PHP_EOL;

?>