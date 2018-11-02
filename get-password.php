<?php
/**
 * Considerando que o container foi criado com --name=mysql.
 * Caso contrário, substituir pelo nome do container.
 */
$commandOutput = `docker logs mysql 2>&1 | grep "GENERATED ROOT PASSWORD"`;
$outputData = explode(' ', $commandOutput);
$password = end($outputData);;

echo $password . PHP_EOL;
