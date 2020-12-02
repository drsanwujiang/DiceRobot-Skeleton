<?php

declare(strict_types=1);

namespace Custom\Action\Event;

use DiceRobot\Action\EventAction;

/**
 * Class Sample
 *
 * Action that responds to SampleEvent.
 *
 * It is just a sample, and do nothing.
 *
 * @event SampleEvent
 *
 * @package Custom\Action\Event
 */
class Sample extends EventAction
{
    /**
     * @inheritDoc
     */
    public function __invoke(): void
    {
        // TODO: 干点什么……
    }
}
