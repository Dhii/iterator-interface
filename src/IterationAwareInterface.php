<?php

namespace Dhii\Iterator;

/**
 * Can retrieve something that represents current temporary state.
 *
 * @since 0.1
 */
interface IterationAwareInterface
{
    /**
     * Retrieves a representation of the current temporary state.
     *
     * @since 0.1
     *
     * @return mixed The state.
     */
    public function getIteration();
}
