<?php

namespace Dhii\Iterator\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Iterator\RecursiveIteratorInterface}.
 *
 * @since [*next-version*]
 */
class RecursiveIteratorInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Iterator\\RecursiveIteratorInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Iterator\RecursiveIteratorInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                ->key()
                ->current()
                ->rewind()
                ->next()
                ->valid()
                ->getCurrent()
                ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the test subject could not be created');
        $this->assertInstanceOf('Dhii\\Iterator\\IteratorInterface', $subject, 'Subject does not implement required interface');
    }
}
