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
        list($arg1, $arg2) = $this->parseOrder();

        // Your logic
    }

    /**
     * @inheritDoc
     *
     * @throws OrderErrorException
     */
    protected function parseOrder(): array
    {
        // Parse order
        if (!preg_match("/^([a-z]+)\s*([1-9][0-9]*)?$/i", $this->order, $matches)) {
            throw new OrderErrorException;
        }

        /** @var string $arg1 */
        $arg1 = $matches[1] ?? "";

        /** @var int $arg2 */
        $arg2 = (int) ($matches[1] ?? 0);

        // Your logic

        return [$arg1, $arg2];
    }
}