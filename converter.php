
<?php

$client = new SoapClient('https://www.w3schools.com/xml/tempconvert.asmx?WSDL');

$function = 'CelsiusToFahrenheit';

$arguments = array('CelsiusToFahrenheit' => array(
    'Celsius' => 30
));

$options = array('location' => 'https://www.w3schools.com/xml/tempconvert.asmx?WSDL');

$result = $client->__soapCall($function,$arguments,$options);

?>

<h1><?= "Temperatura em Fahrenheit: " .$result->CelsiusToFahrenheitResult ?></h1>