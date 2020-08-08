<?php

declare(strict_types=1);

namespace Symfony\Component\Panther\Command;

use RuntimeException;

/** @internal */
interface BrowserVersionResolverInterface
{
    /**
     * @throws RuntimeException If the version could not be resolved.
     */
    public function resolveVersion() : string;
}
