<?php

namespace Aheenam\EstimatedReadTime;

class EstimatedReadTime
{

    /**
     * @var string
     */
    protected $text;

    /**
     * @var integer
     */
    protected $wordsPerMinute;

    /**
     * @var bool
     */
    protected $exactTime;

    /**
     * constructor.
     */
    public function __construct()
    {
        $this->wordsPerMinute = 200;
        $this->exactTime = false;
    }

    /**
     * @param string $text
     * @return EstimatedReadTime
     */
    public function setText($text)
    {
        $this->text = strip_tags($text);
        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param interger $wordsPerMinute
     * @return EstimatedReadTime
     */
    public function setWordsPerMinute(int $wordsPerMinute)
    {
        $this->wordsPerMinute = $wordsPerMinute;
        return $this;
    }

    /**
     * @param boolean $exactTime
     * @return void
     */
    public function exactTime(bool $exactTime)
    {
        $this->exactTime = $exactTime;
        return $this;
    }

    /**
     * calculates the reading time
     *
     * @return int
     */
    public function calculateTime()
    {
        $time = str_word_count($this->text) / $this->wordsPerMinute;

        return ($this->exactTime) ? $time : round($time);
    }
}
