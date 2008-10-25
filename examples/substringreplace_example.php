<?php
header('Content-type: text/html; charset=UTF-8');
require('I18N/UnicodeString.php');

$text = <<<EOT
The Greek Alphabet<br />
&#945; - alpha<br />
&#946; - beta<br />
&#947; - gamma<br />
&#948; - delta<br />
&#949; - epsilon<br />
&#950; - zeta<br />
&#951; - eta<br />
&#952; - theta<br />
&#953; - iota<br />
&#954; - kappa<br />
&#955; - lamda<br />
&#956; - mu<br />
&#957; - nu<br />
&#958; - xi<br />
&#959; - omikron<br />
&#960; - pi<br />
&#961; - rho<br />
&#962; - sigma<br />
&#964; - tau<br />
&#965; - upsilon<br />
&#966; - phi<br />
&#967; - chi<br />
&#968; - psi<br />
&#969; - omega
EOT;

$u = new I18N_UnicodeString($text, 'HTML');
$u = $u->stringReplace(new I18N_UnicodeString('&#954; - kappa', 'HTML'), new I18N_UnicodeString('&#922; - uppercase kappa', 'HTML')); // initial replacement
$u = $u->subStringReplace(new I18N_UnicodeString('&#959; - omikron', 'HTML'), new I18N_UnicodeString('&#927; - uppercase omikron', 'HTML'), $u->indexOf(922), 5); // wont work, length is to short
$u = $u->subStringReplace(new I18N_UnicodeString('&#962; - sigma', 'HTML'), new I18N_UnicodeString('&#931; - uppercase sigma', 'HTML'), $u->indexOf(922)); // will work
echo $u->toUtf8String();
?>