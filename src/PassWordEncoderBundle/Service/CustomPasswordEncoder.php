<?php

namespace PassWordEncoderBundle\Service;

use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface; 

/**
* 
*/
class CustomPasswordEncoder implements PasswordEncoderInterface
{
	public function encodePassword( $raw, $salt ) {
        return sha1($raw);
    }

    public function isPasswordValid( $encoded, $raw, $salt ) {
        return $encoded === $this->encodePassword( $raw, $salt );
    }
}