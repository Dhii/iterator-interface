<?php

namespace Dhii\Iterator\Exception;

use Dhii\Iterator\IteratorAwareInterface;

/**
 * An exception that occurs in relation to an iterator.
 *
 * @since 0.1
 */
interface IteratorExceptionInterface extends
        IteratingExceptionInterface,
        IteratorAwareInterface
{
}
