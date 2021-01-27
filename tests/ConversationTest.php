<?php

namespace Media\Unitconversation\Tests;

use Media\Unitconversation\Unitconversation;
use PHPUnit\Framework\TestCase;

class ConversationTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $this->assertEquals(
            32,
            (new Unitconversation(0))->fahrenheit()
        );
    }
}
