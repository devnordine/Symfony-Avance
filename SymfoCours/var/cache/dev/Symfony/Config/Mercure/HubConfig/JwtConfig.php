<?php

namespace Symfony\Config\Mercure\HubConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class JwtConfig 
{
    private $value;
    private $provider;
    private $factory;
    private $publish;
    private $subscribe;
    private $secret;
    private $passphrase;
    private $algorithm;
    private $_usedProperties = [];

    /**
     * JSON Web Token to use to publish to this hub.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function value($value): static
    {
        $this->_usedProperties['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * The ID of a service to call to provide the JSON Web Token.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function provider($value): static
    {
        $this->_usedProperties['provider'] = true;
        $this->provider = $value;

        return $this;
    }

    /**
     * The ID of a service to call to create the JSON Web Token.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function factory($value): static
    {
        $this->_usedProperties['factory'] = true;
        $this->factory = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     */
    public function publish(mixed $value): static
    {
        $this->_usedProperties['publish'] = true;
        $this->publish = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     */
    public function subscribe(mixed $value): static
    {
        $this->_usedProperties['subscribe'] = true;
        $this->subscribe = $value;

        return $this;
    }

    /**
     * The JWT Secret to use.
     * @example !ChangeMe!
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function secret($value): static
    {
        $this->_usedProperties['secret'] = true;
        $this->secret = $value;

        return $this;
    }

    /**
     * The JWT secret passphrase.
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function passphrase($value): static
    {
        $this->_usedProperties['passphrase'] = true;
        $this->passphrase = $value;

        return $this;
    }

    /**
     * The algorithm to use to sign the JWT
     * @default 'hmac.sha256'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function algorithm($value): static
    {
        $this->_usedProperties['algorithm'] = true;
        $this->algorithm = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('value', $config)) {
            $this->_usedProperties['value'] = true;
            $this->value = $config['value'];
            unset($config['value']);
        }

        if (array_key_exists('provider', $config)) {
            $this->_usedProperties['provider'] = true;
            $this->provider = $config['provider'];
            unset($config['provider']);
        }

        if (array_key_exists('factory', $config)) {
            $this->_usedProperties['factory'] = true;
            $this->factory = $config['factory'];
            unset($config['factory']);
        }

        if (array_key_exists('publish', $config)) {
            $this->_usedProperties['publish'] = true;
            $this->publish = $config['publish'];
            unset($config['publish']);
        }

        if (array_key_exists('subscribe', $config)) {
            $this->_usedProperties['subscribe'] = true;
            $this->subscribe = $config['subscribe'];
            unset($config['subscribe']);
        }

        if (array_key_exists('secret', $config)) {
            $this->_usedProperties['secret'] = true;
            $this->secret = $config['secret'];
            unset($config['secret']);
        }

        if (array_key_exists('passphrase', $config)) {
            $this->_usedProperties['passphrase'] = true;
            $this->passphrase = $config['passphrase'];
            unset($config['passphrase']);
        }

        if (array_key_exists('algorithm', $config)) {
            $this->_usedProperties['algorithm'] = true;
            $this->algorithm = $config['algorithm'];
            unset($config['algorithm']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['value'])) {
            $output['value'] = $this->value;
        }
        if (isset($this->_usedProperties['provider'])) {
            $output['provider'] = $this->provider;
        }
        if (isset($this->_usedProperties['factory'])) {
            $output['factory'] = $this->factory;
        }
        if (isset($this->_usedProperties['publish'])) {
            $output['publish'] = $this->publish;
        }
        if (isset($this->_usedProperties['subscribe'])) {
            $output['subscribe'] = $this->subscribe;
        }
        if (isset($this->_usedProperties['secret'])) {
            $output['secret'] = $this->secret;
        }
        if (isset($this->_usedProperties['passphrase'])) {
            $output['passphrase'] = $this->passphrase;
        }
        if (isset($this->_usedProperties['algorithm'])) {
            $output['algorithm'] = $this->algorithm;
        }

        return $output;
    }

}
