<?php

namespace Aheenam\EstimatedReadTime;

class EstimatedReadTime
{

    /**
     *
     * @var string
     */
    protected $text;

    /**
     *
     * @param string $text
     * @return void
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * calculates the reading time
     *
     * @return int
     */
    public function calculateTime()
    {
        $words = str_word_count($this->text);
        return round($words / 200);
    }
}
