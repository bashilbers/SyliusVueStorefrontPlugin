<?php

namespace spec\BitBag\SyliusVueStorefrontPlugin\CommandHandler\Cart;

use BitBag\SyliusVueStorefrontPlugin\CommandHandler\Cart\UpdateCartHandler;
use PhpSpec\ObjectBehavior;

class UpdateCartHandlerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(UpdateCartHandler::class);
    }
}
