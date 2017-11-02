<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }


    /**
     * @test
     *
     * @return void
     */
    public function checkIfFlagIsCorrectValue() {

        $val = 1;
        $val2 = "1";

        $answer = ($val === $val2);

        $this->assertTrue($answer);

    }

}
