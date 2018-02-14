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
     * @var integer
     */
    protected $wordsPerMinute;

    /**
     * constructor.
     */
    public function __construct()
    {
        $this->wordsPerMinute = 200;
    }

    /**
     *
     * @param string $text
     * @return EstimatedReadTime
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
        return round($words / $this->wordsPerMinute);
    }

    /**
     * Undocumented function
     *
     * @param interger $wordsPerMinute
     * @return EstimatedReadTime
     */
    public function setWordsPerMinute(int $wordsPerMinute)
    {
        $this->wordsPerMinute = $wordsPerMinute;
        return $this;
    }
}
