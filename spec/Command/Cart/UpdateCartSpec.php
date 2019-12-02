<?php

namespace spec\BitBag\SyliusVueStorefrontPlugin\Command\Cart;

use BitBag\SyliusVueStorefrontPlugin\Command\Cart\UpdateCart;
use PhpSpec\ObjectBehavior;

class UpdateCartSpec extends ObjectBehavior
{
    private const TOKEN = 'token';
    private const CART_ID = "update-cart-spec";
    private const CART_ITEM = null;

    public function let(): void
    {
        $this->beConstructedWith(
            self::TOKEN,
            self::CART_ID,
            self::CART_ITEM
        );
    }

    public function it_is_initializable(): void
    {
        $this->shouldHaveType(UpdateCart::class);
    }

    public function it_allows_access_via_properties(): void
    {
        $this->token()->shouldReturn(self::TOKEN);
        $this->cartId()->shouldReturn(self::CART_ID);
        $this->cartItem()->shouldReturn(self::CART_ITEM);
    }
}
