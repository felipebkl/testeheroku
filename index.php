<?php
$con_string = "host=url_do_servidor
port=porta_do_servidor
dbname=nome_do_banco
user=usuario_do_banco
password=senha_do_banco";
pg_connect($con_string) or die('Conexão falhou!');
echo "Conectado no Postgres com sucesso!";