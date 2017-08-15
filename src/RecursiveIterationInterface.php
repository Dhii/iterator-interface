<?php

namespace Dhii\Iterator;

/**
 * Something that represents a flattened recursive iteration.
 *
 * @since 0.1
 */
interface RecursiveIterationInterface extends
        DepthAwareIterationInterface,
        PathSegmentsAwareIterationInterface
{
}
