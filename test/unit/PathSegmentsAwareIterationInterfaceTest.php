<?php

namespace Dhii\Iterator\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Iterator\PathSegmentsAwareIterationInterface}.
 *
 * @since [*next-version*]
 */
class PathSegmentsAwareIterationInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Iterator\\PathSegmentsAwareIterationInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Iterator\PathSegmentsAwareIterationInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                ->getKey()
                ->getValue()
                ->getPathSegments()
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
        $this->assertInstanceOf('Dhii\\Iterator\\IterationInterface', $subject, 'Subject does not implement required interface');
        $this->assertInstanceOf('Dhii\\Data\\PathSegmentsAwareInterface', $subject, 'Subject does not implement required interface');
    }
}
