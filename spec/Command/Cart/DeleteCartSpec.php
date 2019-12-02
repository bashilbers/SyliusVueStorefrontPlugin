<?php

namespace spec\BitBag\SyliusVueStorefrontPlugin\Command\Cart;

use BitBag\SyliusVueStorefrontPlugin\Command\Cart\DeleteCart;
use PhpSpec\ObjectBehavior;

class DeleteCartSpec extends ObjectBehavior
{
    private const TOKEN = 'token';
    private const CART_ID = "delete-cart-spec";

    public function let(): void
    {
        $this->beConstructedWith(
            self::TOKEN,
            self::CART_ID
        );
    }

    public function it_is_initializable(): void
    {
        $this->shouldHaveType(DeleteCart::class);
    }

    public function it_allows_access_via_properties(): void
    {
        $this->token()->shouldReturn(self::TOKEN);
        $this->cartId()->shouldReturn(self::CART_ID);
    }}
