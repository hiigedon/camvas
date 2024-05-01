<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Bundle\UserBundle\Command;

trigger_deprecation(
    'sylius/user-bundle',
    '1.13',
    'The "%s" class is deprecated and will be removed in Sylius 2.0. Use "%s" instead.',
    AbstractRoleCommand::class,
    \Sylius\Bundle\UserBundle\Console\Command\AbstractRoleCommand::class,
);

class_exists(\Sylius\Bundle\UserBundle\Console\Command\AbstractRoleCommand::class);

if (false) {
    abstract class AbstractRoleCommand
    {
    }
}