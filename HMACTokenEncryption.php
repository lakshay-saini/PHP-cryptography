<?php
/**
 * Created by Lakshay Saini.
 * Date: 4/26/19
 * Time: 10:11 AM
 */

$data = '1557552839709';
$secret = '6864dfe7-cc72-4342-9a16-fa7f20c8025e-594ac015-2b14-42fe-9f2b-a7b662a6ad23';
$IVECTOR = 'somerandstr12345';

$decodedKey = pack("H*", $secret);
$hmac = hash_hmac("sha1", $data, $secret, TRUE);
$signature = base64_encode($hmac);


$encryptedSignature = openssl_encrypt($signature, 'AES-128-CBC', $secret, 0, $IVECTOR). PHP_EOL;

echo "plain data text :  ".$data. PHP_EOL;

echo "key : ".$secret. PHP_EOL;

echo "signature : ".$signature. PHP_EOL;

echo "encrypted signature : ".$encryptedSignature;

echo "decrypted signature : ".openssl_decrypt($encryptedSignature, 'AES-128-CBC', $secret, 0, $IVECTOR). PHP_EOL;

?>
