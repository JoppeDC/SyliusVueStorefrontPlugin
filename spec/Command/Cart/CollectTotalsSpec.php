<?php

declare(strict_types=1);

namespace spec\BitBag\SyliusVueStorefrontPlugin\Command\Cart;

use BitBag\SyliusVueStorefrontPlugin\Command\Cart\CollectTotals;
use PhpSpec\ObjectBehavior;

final class CollectTotalsSpec extends ObjectBehavior
{
    private const TOKEN = 'token';
    private const CART_ID = 'collect-totals-spec';
    private const METHODS = null;

    function let(): void
    {
        $this->beConstructedWith(
            self::TOKEN,
            self::CART_ID,
            self::METHODS
        );
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(CollectTotals::class);
    }

    function it_allows_access_via_properties(): void
    {
        $this->token()->shouldReturn(self::TOKEN);
        $this->cartId()->shouldReturn(self::CART_ID);
        $this->methods()->shouldReturn(self::METHODS);
    }
}
