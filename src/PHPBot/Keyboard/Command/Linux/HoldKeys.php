<?php

namespace PHPBot\Keyboard\Command\Linux;

use PHPBot\Process;

use React\EventLoop\LoopInterface;

class HoldKeys extends Process
{
    public function __construct(LoopInterface $loop, array $keys)
    {
        $command = "xdotool keydown {$this->concatKeys($keys)}";
        parent::__construct($loop, $command);
    }

    protected function concatKeys(array $keys)
    {
        $keysString = '';
        foreach ($keys as $key) {
            $keysString .= (reset($keys) == $key) ? $key['linux'] : "+{$key['linux']}";
        }

        return $keysString;
    }
}