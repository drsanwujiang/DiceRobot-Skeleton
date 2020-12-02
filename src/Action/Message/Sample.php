<?php

declare(strict_types=1);

namespace Custom\Action\Message;

use DiceRobot\Action\MessageAction;
use DiceRobot\Exception\OrderErrorException;

/**
 * Class Sample
 *
 * It is just a sample.
 *
 * @order sample
 *
 *      Sample: .sample
 *              .sample arg1
 *              .sample arg1 arg2
 *
 * @package Custom\Action\Message
 */
class Sample extends MessageAction
{
    /**
     * @inheritDoc
     *
     * @throws OrderErrorException
     */
    public function __invoke(): void
    {
        // 解析指令
        list($arg1, $arg2) = $this->parseOrder();

        // TODO: 干点什么……

        /*
         * 使用预先定义好的回复
         *
         * 可以在 custom_config.php 中这样定义：
         *
         * $settings["reply"]["yourReplyKey"] = "It's a reply.";
         */
        $this->setReply("yourReplyKey");

        // 或者直接设置回复
        $this->setRawReply("It's a reply.");

        // 以上两个方法会 “添加“ 回复而不是替换，所以你可以设置若干条回复，它们会被分别发送
    }

    /**
     * @inheritDoc
     *
     * @throws OrderErrorException
     */
    protected function parseOrder(): array
    {
        /*
         * 注意，$this->order 是除去指令自身的部分，例如：
         *
         * .draw FGO 10
         *
         * “draw” 会被存放在 $this->match 中，而 “FGO 10” 则会被存放在 $this->order 中
         */

        // 推荐通过正则表达式解析指令，从而减少意外情况
        if (!preg_match("/^([a-z]+)\s*([1-9][0-9]*)?$/i", $this->order, $matches)) {
            // 如果指令格式错误，则抛出此异常，DiceRobot 会自动发送回复
            throw new OrderErrorException;
        }

        $arg1 = $matches[1] ?? "";
        $arg2 = (int) ($matches[1] ?? 0);

        // 当然你也可以使用其他字符串函数来处理指令

        /**
         * @var string $arg1 The first argument
         * @var int $arg2 The second argument
         */
        return [$arg1, $arg2];
    }
}
