<?php

namespace Dhii\Iterator;

use RecursiveIteratorIterator as I;

/**
 * An iterator which visits every node of a nested structure.
 *
 * Although the loop flattens the structure hierarchy, it is still possible
 * to reconstruct the hierarchy by using the iteration's path segments.
 *
 * @since 0.1
 */
interface RecursiveIteratorInterface extends IteratorInterface
{
    /**
     * Instructs the iterator to only visit leaf nodes.
     *
     * @since 0.1
     */
    const MODE_LEAVES_ONLY = I::LEAVES_ONLY;

    /**
     * Instructs the iterator to iterate over parents before children.
     *
     * @since 0.1
     */
    const MODE_SELF_FIRST = I::SELF_FIRST;

    /**
     * Instructs the iterator to iterate over children before parents.
     *
     * @since 0.1
     */
    const MODE_CHILD_FIRST = I::CHILD_FIRST;

    /**
     * {@inheritdoc}
     * 
     * @since 0.1
     *
     * @return RecursiveIterationInterface The current iteration.
     */
    public function getIteration();
}
