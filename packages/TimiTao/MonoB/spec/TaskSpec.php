<?php

namespace spec\TimiTao\MonoB;

use TimiTao\MonoA\Client;
use TimiTao\MonoB\Task;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TaskSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Task::class);
    }

    function it_get_client()
    {
        $this->getClient()->shouldBeAnInstanceOf(Client::class);
    }
}
