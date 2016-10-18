<?php
$con_string = "host=ec2-54-243-220-140.compute-1.amazonaws.com
port=5432
dbname=d6n1katka2ipef
user=etxsjxquwxnjwo
password=poo-nHE9knl7JXfYQdCNpu5K_9";
pg_connect($con_string) or die('Conexão falhou!');
echo "novo tesdasdasdte!";