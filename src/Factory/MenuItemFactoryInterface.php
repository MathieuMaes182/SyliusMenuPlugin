<?php

/*
 * This file is part of Monsieur Biz' menu plugin for Sylius.
 * (c) Monsieur Biz <sylius@monsieurbiz.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace MonsieurBiz\SyliusMenuPlugin\Factory;

use MonsieurBiz\SyliusMenuPlugin\Entity\MenuInterface;
use MonsieurBiz\SyliusMenuPlugin\Entity\MenuItemInterface;
use Sylius\Component\Resource\Factory\FactoryInterface;

interface MenuItemFactoryInterface extends FactoryInterface
{
    /**
     * @return object
     */
    public function createNew(): object;

    /**
     * @return MenuItemInterface
     */
    public function createForMenu(MenuInterface $menu): MenuItemInterface;

    /**
     * @return MenuItemInterface
     */
    public function createForParent(MenuItemInterface $parent): MenuItemInterface;
}
