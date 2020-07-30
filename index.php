<?php

/**
 * Trabalhando com Cookies
 * function setcookie();
 * 
 * Parametros de um cookie: nome, informação, tempo, caminho, dominio e ssl
 */

$name = "token_user";
$token = "asdf123";
$time = time() - 60 * 60 * 24;
$caminho = "/";
$domain = "localhost";
$ssl = true;

setcookie(
    $name,
    $token,
    $time,
    $caminho,
    $domain,
    $ssl
);

$cookie = filter_input(INPUT_COOKIE, "token_user", FILTER_SANITIZE_STRIPPED);

var_dump(
    $cookie,
    $_COOKIE,
);