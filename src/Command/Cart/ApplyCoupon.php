<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Command\Cart;

final class ApplyCoupon
{
    /** @var string|null */
    private $token;

    /** @var int|string */
    private $cartId;

    /** @var string */
    private $coupon;

    public function __construct(?string $token, $cartId, string $coupon)
    {
        $this->token = $token;
        $this->cartId = $cartId;
        $this->coupon = $coupon;
    }

    public function token(): ?string
    {
        return $this->token;
    }

    public function cartId()
    {
        return $this->cartId;
    }

    public function coupon(): string
    {
        return $this->coupon;
    }
}
