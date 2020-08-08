<?php

declare(strict_types=1);

namespace Symfony\Component\Panther\Command;

use RuntimeException;

/**
 * @internal
 */
final class BrowserVersionResolverFactory
{
    public function getResolver(Browser $browser) : BrowserVersionResolverInterface
    {
        switch ($browser->getType()) {
            case Browser::GOOGLE_CHROME:
                if ($browser->getOsFamily() === OperatingSystemFamily::WINDOWS) {
                    throw $this->notImplemented($browser);
                    // TODO: return new WindowsGoogleChromeBrowserVersionResolver();
                }

                return new UnixGoogleChromeBrowserVersionResolver($browser->getPath());
            default:
                throw $this->notImplemented($browser);
        }
    }

    /**
     * @throws RuntimeException
     */
    private function notImplemented(Browser $browser) : NotImplementedException
    {
        return new NotImplementedException(
            sprintf(
                'Resolving the browser version of %s on %s has not yet been implemented.',
                $browser->getType(),
                $browser->getOsFamily()
            )
        );
    }
}
