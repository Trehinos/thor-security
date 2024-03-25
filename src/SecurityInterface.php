<?php

namespace Thor\Security;

use Thor\Security\Identity\IdentityInterface;
use Thor\Security\Authentication\AuthenticatorInterface;
use Thor\Security\Identity\ProviderInterface;

/**
 * Interface of a Security context of Thor.
 *
 * @package          Thor/Security
 * @copyright (2021) Sébastien Geldreich
 * @license          MIT
 */
interface SecurityInterface
{

    /**
     * Gets the authenticator of this context.
     *
     * @return AuthenticatorInterface
     */
    public function getAuthenticator(): AuthenticatorInterface;

    /**
     * Gets the provider of this context.
     *
     * @return ProviderInterface
     */
    public function getProvider(): ProviderInterface;

    /**
     * Gets the current authenticated identity.
     *
     * @return IdentityInterface|null
     */
    public function getCurrentIdentity(): ?IdentityInterface;

}
