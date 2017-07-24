<?php

namespace Dhii\Iterator;

/**
 * Can retrieve something that represents current temporary state.
 *
 * @since [*next-version*]
 */
interface CurrentAwareInterface
{
    /**
     * Retrieves a representation of the current temporary state.
     *
     * @since [*next-version*]
     *
     * @return mixed The state.
     */
    public function getCurrent();
}
