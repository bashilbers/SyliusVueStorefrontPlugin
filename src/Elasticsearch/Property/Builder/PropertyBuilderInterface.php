<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Elasticsearch\Property\Builder;

use FOS\ElasticaBundle\Event\TransformEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

interface PropertyBuilderInterface extends EventSubscriberInterface
{
    public function consumeEvent(TransformEvent $event): void;

    public function buildProperty(TransformEvent $event, string $class, callable $callback): void;
}