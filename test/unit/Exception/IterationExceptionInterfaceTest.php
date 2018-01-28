<?php

namespace Dhii\Iterator\UnitTest;

use Xpmock\TestCase;
use Dhii\Iterator\Exception\IterationExceptionInterface as TestSubject;
use PHPUnit_Framework_MockObject_MockObject as MockObject;

/**
 * Tests {@see TestSubject}.
 *
 * @since [*next-version*]
 */
class IterationExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Iterator\Exception\IterationExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TestSubject|MockObject
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                ->getMessage()
                ->getCode()
                ->getPrevious()
                ->getFile()
                ->getLine()
                ->getTrace()
                ->getTraceAsString()
                ->__toString()

                ->getIteration()
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
        $this->assertInstanceOf('Dhii\Iterator\Exception\IteratingExceptionInterface', $subject, 'Subject does not implement required interface');
        $this->assertInstanceOf('Dhii\Iterator\IterationAwareInterface', $subject, 'Subject does not implement required interface');
    }
}
