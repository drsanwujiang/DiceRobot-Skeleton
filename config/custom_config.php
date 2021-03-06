<?php

use Monolog\Logger;

/**
 * 自定义配置
 */

/******************************************************************************
 *                                    必填项                                   *
 ******************************************************************************/

/**
 * 在这里填写机器人的 QQ 号，以及 Mirai API HTTP 插件中的 Auth Key
 */
$settings["mirai"]["robot"] = [
    "id" => 10000,
    "authKey" => "12345678"
];

/******************************************************************************
 *                                    常用项                                   *
 ******************************************************************************/

/**
 * 在这里填写 Mirai API HTTP 插件监听的端口
 */
$settings["mirai"]["server"]["port"] = 8080;

/**
 * 在这里填写 DiceRobot 监听的端口
 */
$settings["dicerobot"]["server"]["port"] = 9500;

/**
 * 在这里设置日志等级，file 表示日志文件的等级，console 表示控制台日志的等级
 */
$settings["log"]["level"] = [
    "file" => Logger::NOTICE,
    "console" => Logger::CRITICAL
];
