<?php

namespace Dhii\Iterator\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Iterator\IterationInterface}.
 *
 * @since 0.1
 */
class IterationInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since 0.1
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Iterator\\IterationInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return \Dhii\Iterator\IterationInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                ->getKey()
                ->getValue()
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
        $this->assertInstanceOf('Dhii\\Data\\KeyValueAwareInterface', $subject, 'A valid instance of the test subject could not be created');
    }
}
