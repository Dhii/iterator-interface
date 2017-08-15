<?php

namespace Dhii\Iterator;

use Dhii\Data\Hierarchy\DepthAwareInterface;

/**
 * Represents an iteration that is aware of how deep it is.
 *
 * Primarily useful for recursive iteration.
 *
 * @since 0.1
 */
interface DepthAwareIterationInterface extends
        IterationInterface,
        DepthAwareInterface
{
}
