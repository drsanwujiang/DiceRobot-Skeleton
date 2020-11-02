<?php

date_default_timezone_set("Asia/Shanghai");

$settings = [];

/** Directories */
$settings["root"] = dirname(__DIR__);
$settings["config"] = $settings["root"] . "/config";
$settings["data"]["root"] = $settings["root"] . "/data";
$settings["data"]["card"] = $settings["data"]["root"] . "/card";
$settings["data"]["chat"] = $settings["data"]["root"] . "/chat";
$settings["data"]["reference"] = $settings["data"]["root"] . "/reference";
$settings["data"]["rule"] = $settings["data"]["root"] . "/rule";
$settings["log"]["path"] = $settings["root"] . "/logs";

require __DIR__ . "/custom_config.php";

return $settings;
