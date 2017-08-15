<?php

namespace Dhii\Iterator\Exception;

use Dhii\Iterator\IterationAwareInterface;
use Dhii\Iterator\IterationInterface;

/**
 * An exception that occurs in relation to an iteration.
 *
 * @since 0.1
 */
interface IterationExceptionInterface extends
        IteratingExceptionInterface,
        IterationAwareInterface
{
    /**
     * Retrieves the iteration associated with this instance.
     *
     * @since 0.1
     *
     * @return IterationInterface|null The iteration, if any.
     */
    public function getIteration();
}
