<?php

class Tomato
{
    const NOTHING = 0;
    const FLOWER = 1;
    const GREEN_TOMATO = 2;
    const RED_TOMATO = 3;

    private int $index;
    private int $state;

    public function __construct(int $index)
    {
        $this->index = $index;
        $this->state = self::NOTHING;
    }

    public function grow(): void
    {
        switch ($this->state) {
            case self::NOTHING:
                $this->state = self::FLOWER;
                break;
            case self::FLOWER:
                $this->state = self::GREEN_TOMATO;
                break;
            case self::GREEN_TOMATO:
                $this->state = self::RED_TOMATO;
                break;
        }
    }

    public function isRipe(): bool
    {
        return $this->state === self::RED_TOMATO;
    }
}
