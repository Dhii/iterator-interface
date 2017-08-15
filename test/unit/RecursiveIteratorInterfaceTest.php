<?php

namespace Dhii\Iterator\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Iterator\RecursiveIteratorInterface}.
 *
 * @since 0.1
 */
class RecursiveIteratorInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since 0.1
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Iterator\\RecursiveIteratorInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
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
                ->getIteration()
                ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since 0.1
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the test subject could not be created');
        $this->assertInstanceOf('Dhii\\Iterator\\IteratorInterface', $subject, 'Subject does not implement required interface');

        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'MODE_LEAVES_ONLY')));
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'MODE_SELF_FIRST')));
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'MODE_CHILD_FIRST')));
    }
}
