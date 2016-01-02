<?php

namespace PHPBot\Command\Pointer\Linux;

use PHPBot\Command\CommandInterface;

use React\EventLoop\LoopInterface;
use React\ChildProcess\Process as ChildProcess;

class HoldClick implements CommandInterface
{
    private $button;

    public function __construct($button, LoopInterface $loop)
    {
        $this->button = $button;
        $this->loop = $loop;
    }

    protected function getCommand($button)
    {
        $cmd = new ChildProcess(
            "xdotool mousedown {$button}"
        );

        return $cmd;
    }

    use \PHPBot\Command\Pointer\Traits\MouseClickButtonTrait;
}