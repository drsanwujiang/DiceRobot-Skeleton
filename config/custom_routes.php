<?php /** @noinspection PhpFullyQualifiedNameUsageInspection */

/**
 * 自定义路由
 */

return [
    /**
     * 消息路由
     *
     * 格式为 "<优先级>" => <路由组>，路由组格式为 "<指令>" => <消息动作类>
     */
    "message" => [
        20 => [
//            "sample" => \Custom\Action\Message\Sample::class,
//            "示例" => \Custom\Action\Message\Sample::class,
        ]
    ],

    /**
     * 事件路由
     *
     * 格式为  <事件类型> => <事件动作类>
     */
    "event" => [
//        \DiceRobot\Data\Report\Event\SampleEvent::class =>
//            \Custom\Action\Event\Sample::class,
    ]
];
