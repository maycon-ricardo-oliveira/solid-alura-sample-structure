<?php

namespace Alura\Solid\Model;

class Feedback
{
    /** @var int */
    private $score;

    /** @var string|null */
    private $comment;

    public function __construct(int $score, ?string $comment)
    {
        if ($score < 9 && empty($comment)) {
            throw new \DomainException('Depoimento obrigatório');
        }

        $this->score = $score;
        $this->comment = $comment;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

}