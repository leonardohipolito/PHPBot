<?php

namespace PHPBot\Pointer\Command\WindowsNT;

use PHPBot\Process;

use React\EventLoop\LoopInterface;

class MoveTo extends Process
{
    public function __construct(LoopInterface $loop, $x, $y)
    {
        $command = "";
        parent::__construct($loop, $command);
    }
}