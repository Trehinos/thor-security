<?php

namespace Thor\Security;

use Thor\Security\Identity\IdentityInterface;
use Thor\Security\Authentication\AuthenticatorInterface;
use Thor\Security\Identity\ProviderInterface;

/**
 * Default abstract implementation of a Thor's Security context.
 *
 * @package          Thor/Security
 * @copyright (2021) Sébastien Geldreich
 * @license          MIT
 */
abstract class Security implements SecurityInterface
{

    /**
     * Security constructor.
     *
     * @param ProviderInterface      $provider
     * @param AuthenticatorInterface $authenticator
     */
    public function __construct(
        private ProviderInterface $provider,
        private AuthenticatorInterface $authenticator
    ) {
    }

    /**
     * @inheritDoc
     */
    public function getAuthenticator(): AuthenticatorInterface
    {
        return $this->authenticator;
    }

    /**
     * @inheritDoc
     */
    public function getProvider(): ProviderInterface
    {
        return $this->provider;
    }

    /**
     * @inheritDoc
     */
    public function getCurrentIdentity(): ?IdentityInterface
    {
        return $this->getProvider()->getIdentity($this->getAuthenticator()->current());
    }

}
