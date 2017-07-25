<?php

namespace Dhii\Iterator\Exception;

use Dhii\Iterator\CurrentAwareInterface;
use Dhii\Iterator\IterationInterface;

/**
 * An exception that occurs in relation to an iteration.
 *
 * @since [*next-version*]
 */
interface IterationExceptionInterface extends
        IteratingExceptionInterface,
        CurrentAwareInterface
{
    /**
     * Retrieves the iteration associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return IterationInterface|null The iteration, if any.
     */
    public function getCurrent();
}
