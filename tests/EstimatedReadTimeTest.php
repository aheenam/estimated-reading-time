<?php

namespace Aheenam\EstimatedReadTime\Test;

use PHPUnit\Framework\TestCase;
use Aheenam\EstimatedReadTime\EstimatedReadTime;

class EstimatedReadTimeTest extends TestCase
{

    /** @test */
    public function it_returns_the_estimated_time_for_a_text()
    {
        $text = \Faker\Factory::create()->words(400, true);

        $minutes = (new EstimatedReadTime)
            ->setText($text)
            ->calculateTime();

        $this->assertEquals(2, $minutes);
    }
}
