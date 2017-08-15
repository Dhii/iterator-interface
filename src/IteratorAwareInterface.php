<?php

namespace Dhii\Iterator;

/**
 * Something that can have an iterator retrieved from it.
 *
 * @since 0.1
 */
interface IteratorAwareInterface
{
    /**
     * Retrieves the iterator associated with this instance.
     *
     * @since 0.1
     *
     * @return IteratorInterface|null The iterator, if any.
     */
    public function getIterator();
}
