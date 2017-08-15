<?php

namespace Dhii\Iterator;

use Dhii\Data\PathSegmentsAwareInterface;

/**
 * An iteration which can have segments of its path retrieved.
 *
 * @since 0.1
 */
interface PathSegmentsAwareIterationInterface extends
        IterationInterface,
        PathSegmentsAwareInterface
{
}
