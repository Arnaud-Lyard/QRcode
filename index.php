<?php 
include_once 'vendor/sonata-project/google-authenticator/src/FixedBitNotation.php';
include_once 'vendor/sonata-project/google-authenticator/src/GoogleAuthenticatorInterface.php';
include_once 'vendor/sonata-project/google-authenticator/src/GoogleAuthenticator.php';
include_once 'vendor/sonata-project/google-authenticator/src/GoogleQrUrl.php';
 
$g = new \Google\Authenticator\GoogleAuthenticator();
$secret = 'XVQ2UIGO75XRUKJO';
//the "getUrl" method takes as a parameter: "username", "host" and the key "secret"
echo '<img src="'.$g->getURL('auth', 'Prochainweb', $secret).'" />';
?>
    <form action="check.php" method="post">
        <label for="code">Mon code 2FA</label>
        <input type="code" name="code" value=""><br>
        <input type="submit" value="submit">
</form>