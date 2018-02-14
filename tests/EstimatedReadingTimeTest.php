<?php

namespace Aheenam\EstimatedReadingTime\Test;

use PHPUnit\Framework\TestCase;
use Aheenam\EstimatedReadingTime\EstimatedReadingTime;

class EstimatedReadingTimeTest extends TestCase
{

    /** @test */
    public function it_returns_the_estimated_time_for_a_text()
    {
        $text = \Faker\Factory::create()->words(400, true);

        $minutes = (new EstimatedReadingTime)
            ->setText($text)
            ->calculateTime();

        $this->assertEquals(2, $minutes);
    }

    /** @test */
    public function it_strips_tags()
    {
        $html = "<h1>That is an sample title</h1>";

        $instance = (new EstimatedReadingTime)
            ->setText($html);

        $this->assertEquals("That is an sample title", $instance->getText());
    }

    /** @test */
    public function it_can_handle_custom_words_per_minute()
    {
        $text = \Faker\Factory::create()->words(400, true);

        $minutesDefault = (new EstimatedReadingTime)
            ->setText($text)
            ->calculateTime();

        $minutes = (new EstimatedReadingTime)
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
        
        $exactTime = (new EstimatedReadingTime)
            ->exactTime(true)
            ->setText($text)
            ->calculateTime();
        
        $roundedTime = (new EstimatedReadingTime)
            ->setText($text)
            ->calculateTime();

        $this->assertEquals(3, $roundedTime);
        $this->assertEquals(3.25, $exactTime);
    }
}
