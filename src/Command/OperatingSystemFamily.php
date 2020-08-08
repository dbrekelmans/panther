<?php

declare(strict_types=1);

namespace Symfony\Component\Panther\Command;

/** @internal */
final class OperatingSystemFamily
{
    public const WINDOWS = 'Windows';
    public const BSD = 'BSD';
    public const DARWIN = 'Darwin';
    public const SOLARIS = 'Solaris';
    public const LINUX = 'Linux';
    public const UNKNOWN = 'Unknown';
}
