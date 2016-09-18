<?php

namespace AppBundle\Security\Authorization\Voter;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

/**
 * Description of ClientIpVoter
 *
 * @author artur
 */
class ClientIpVoter {

    public function __construct(ContainerInterface $container, array $blacklistedIp = array()) {
        $this->container = $container;
        $this->blacklistedIp = $blacklistedIp;
    }

    public function supportsAttribute($attribute) {
        // you won't check against a user attribute, so return true
        return true;
    }

    public function supportsClass($class) {
        // your voter supports all type of token classes, so return true
        return true;
    }

    function vote(TokenInterface $token, $object, array $attributes) {
        $request = $this->container->get('request');
        if (in_array($request->getClientIp(), $this->blacklistedIp)) {
            return VoterInterface::ACCESS_DENIED;
        }
    }
}
    