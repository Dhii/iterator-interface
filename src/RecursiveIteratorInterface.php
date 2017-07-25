<?php

namespace Dhii\Iterator;

/**
 * An iterator which visits every node of a nested structure.
 *
 * Although the loop flattens the structure hierarchy, it is still possible
 * to reconstruct the hierarchy by using the iteration's path segments.
 *
 * @since [*next-version*]
 */
interface RecursiveIteratorInterface extends IteratorInterface
{
    /**
     * {@inheritdoc}
     * 
     * @since [*next-version*]
     *
     * @return RecursiveIterationInterface The current iteration.
     */
    public function getCurrent();
}
