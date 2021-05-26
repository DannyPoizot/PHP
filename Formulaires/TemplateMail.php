<?php
$dest = "poizot.dan@gmail.com";
$sujet = $_POST["sujet"];
$mail = $_POST["mail"];
$headers  =  "MIME-Version: 1.0"  . "\r\n" ;
$headers .=  "Content-type: text/html; charset = UTF-8"  . "\r\n" ;
$headers .= "From: " . $dest;
$message = $_POST["message"];
// $content = file_get_contents("testFile.html");
$htmlContent = "
    <html>
    <head>
        <title>Template test</title>
    </head>
    <body>
        <h1>Hey ! Je suis un titre de template !</h1>
        <table cellspacing='0' style='border: 2px dashed #FB4314; width: 100%;'>
            <tr>
                <th>Name:</th>
                <td>CodexWorld</td>
                <td>$message</td>
            </tr>
            <tr style='background-color: #e0e0e0;'>
                <th>Email:</th><td>contact@codexworld.com</td>
            </tr>
            <tr>
                <th>Website:</th><td><a href='http://www.codexworld.com'>www.codexworld.com</a></td>
            </tr>
        </table>
    </body>
    </html>";
$envoi = mail($dest, $sujet, $htmlContent, $headers);
if ($envoi == true)
  echo "<p>Test 1 : la fonction mail() fonctionne. Un e-mail a ete envoye a l'adresse $dest.
  <br />S'il ne vous parvient pas, il y a probablement un blocage au niveau du serveur SMTP de l'hebergeur</p>";
else
  echo "<p>Test 1 : l'envoi par la fonction PHP mail() ne fonctionne pas ou est desactivee</p>";
/* test 2 */
echo "<p>Test 2 : Si bool(false) le mail ne part pas
<br />Si bool(true) l'e mail a bien ete envoye (donc il est bloque apres)</p>";
var_dump(mail($dest, $sujet, $htmlContent, $headers));

?>
