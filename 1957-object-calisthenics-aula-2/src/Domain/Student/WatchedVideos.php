<?php

namespace Alura\Calisthenics\Domain\Student;

use DateTimeInterface;
use Ds\Map;

class WatchedVideos implements \Countable
{
    private Map $videos;

    /**
     * @param Map $videos
     */
    public function __construct()
    {
        $this->videos = new Map();
    }

    public function add(Video $video, DateTimeInterface $data): void
    {
        $this->videos->put($video, $data);
    }

    public function count(): int
    {
        return $this->videos->count();
    }

    public function dateOfFirstVideo()
    {
        $this->watchedVideos
            ->sort(fn(DateTimeInterface $dateA, DateTimeInterface $dateB) => $dateA <=> $dateB);

        return $this->videos->first()->value;
    }
}