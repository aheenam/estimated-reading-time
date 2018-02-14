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

    /** @test */
    public function it_can_handle_custom_words_per_minute()
    {
        $text = \Faker\Factory::create()->words(400, true);

        $minutesDefault = (new EstimatedReadTime)
            ->setText($text)
            ->calculateTime();

        $minutes = (new EstimatedReadTime)
            ->setWordsPerMinute(400)
            ->setText($text)
            ->calculateTime();

        $this->assertEquals(2, $minutesDefault);
        $this->assertEquals(1, $minutes);
    }

    /** @test */
    public function it_can_return_exact_time()
    {
        $text = \Faker\Factory::create()->words(650, true);
        
        $exactTime = (new EstimatedReadTime)
            ->exactTime(true)
            ->setText($text)
            ->calculateTime();
        
        $roundedTime = (new EstimatedReadTime)
            ->setText($text)
            ->calculateTime();

        $this->assertEquals(3, $roundedTime);
        $this->assertEquals(3.25, $exactTime);
    }
}
