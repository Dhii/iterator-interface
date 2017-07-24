<?php

namespace Dhii\Iterator;

use Iterator;

/**
 * Something that can be iterated over.
 *
 * For every iteration, allows retrieval of state of that iteration, which
 * provides at least the key and the value of the current item.
 *
 * This purpose of this mechanism is to solve an inherent problem of
 * sophisticated PHP/SPL interfaces, which store state in themselves,
 * preventing dependency injection, and proper SoC by conflicting with
 * other helpful interfaces.
 *
 * @since [*next-version*]
 */
interface IteratorInterface extends
        Iterator,
        CurrentAwareInterface
{
    /**
     * Retrieves the state of the current iteration.
     *
     * @since [*next-version*]
     * 
     * @return IterationInterface The current iteration state.
     */
    public function getCurrent();
}
