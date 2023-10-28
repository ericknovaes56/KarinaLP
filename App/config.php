<?php

header("Content-Type: text/html; charset=utf-8;");

session_start();

setlocale(LC_ALL, "pt_BR");
date_default_timezone_set("America/Sao_Paulo");

// CONFIG URL
define("SITE_PROTOCOL", isset($_SERVER["HTTPS"]) ? "https://" : "http://");
define("SITE_DOMAIN", $_SERVER["SERVER_NAME"]);
define("SITE_ROOT", '/karinalp');
define("URL_BASE", SITE_PROTOCOL.SITE_DOMAIN.SITE_ROOT);

// CONFIG SITE
define("SITE_NAME", "KarinaCarvalho");
define("SITE_DESCRIPTION", "Copy");
define("SITE_THEME", "#FF880B");
define("SITE_SUMMARY_IMAGE", URL_BASE."");
define("SITE_KEYWORDS", "");
define("SITE_LANG", "pt-BR");
define("SITE_CHARSET", "UTF-8");

// CREDENCIAIS DO SISTEMA
define("SYSTEM_ID", 0);
define("SYSTEM_EMAIL", "karina@gmail.br");
define("SYSTEM_PASSWORD", "WuCcB0ZcdK~e");
define("VERSION", "0.0.0");