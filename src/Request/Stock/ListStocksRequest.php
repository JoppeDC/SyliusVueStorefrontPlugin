<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Request\Stock;

use BitBag\SyliusVueStorefrontPlugin\Query\QueryInterface;
use BitBag\SyliusVueStorefrontPlugin\Query\Stock\ListStocks;
use BitBag\SyliusVueStorefrontPlugin\Request\RequestQueryInterface;

final class ListStocksRequest implements RequestQueryInterface
{
    /** @var string */
    public $skus;

    public function getQuery(): QueryInterface
    {
        return new ListStocks($this->skus);
    }
}