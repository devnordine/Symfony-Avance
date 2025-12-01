<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Mercure'.\DIRECTORY_SEPARATOR.'HubConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class MercureConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $hubs;
    private $defaultHub;
    private $defaultCookieLifetime;
    private $enableProfiler;
    private $_usedProperties = [];
    private $_hasDeprecatedCalls = false;

    /**
     * @deprecated since Symfony 7.4
     */
    public function hub(string $name, array $value = []): \Symfony\Config\Mercure\HubConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (!isset($this->hubs[$name])) {
            $this->_usedProperties['hubs'] = true;
            $this->hubs[$name] = new \Symfony\Config\Mercure\HubConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "hub()" has already been initialized. You cannot pass values the second time you call hub().');
        }

        return $this->hubs[$name];
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function defaultHub($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['defaultHub'] = true;
        $this->defaultHub = $value;

        return $this;
    }

    /**
     * Default lifetime of the cookie containing the JWT, in seconds. Defaults to the value of "framework.session.cookie_lifetime".
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function defaultCookieLifetime($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['defaultCookieLifetime'] = true;
        $this->defaultCookieLifetime = $value;

        return $this;
    }

    /**
     * Enable Symfony Web Profiler integration.
     * @default null
     * @param ParamConfigurator|bool $value
     * @deprecated Since symfony/mercure-bundle 0.3: The child node "enable_profiler" at path "mercure" is deprecated.
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function enableProfiler($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['enableProfiler'] = true;
        $this->enableProfiler = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'mercure';
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('hubs', $config)) {
            $this->_usedProperties['hubs'] = true;
            $this->hubs = array_map(fn ($v) => new \Symfony\Config\Mercure\HubConfig($v), $config['hubs']);
            unset($config['hubs']);
        }

        if (array_key_exists('default_hub', $config)) {
            $this->_usedProperties['defaultHub'] = true;
            $this->defaultHub = $config['default_hub'];
            unset($config['default_hub']);
        }

        if (array_key_exists('default_cookie_lifetime', $config)) {
            $this->_usedProperties['defaultCookieLifetime'] = true;
            $this->defaultCookieLifetime = $config['default_cookie_lifetime'];
            unset($config['default_cookie_lifetime']);
        }

        if (array_key_exists('enable_profiler', $config)) {
            $this->_usedProperties['enableProfiler'] = true;
            $this->enableProfiler = $config['enable_profiler'];
            unset($config['enable_profiler']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['hubs'])) {
            $output['hubs'] = array_map(fn ($v) => $v->toArray(), $this->hubs);
        }
        if (isset($this->_usedProperties['defaultHub'])) {
            $output['default_hub'] = $this->defaultHub;
        }
        if (isset($this->_usedProperties['defaultCookieLifetime'])) {
            $output['default_cookie_lifetime'] = $this->defaultCookieLifetime;
        }
        if (isset($this->_usedProperties['enableProfiler'])) {
            $output['enable_profiler'] = $this->enableProfiler;
        }
        if ($this->_hasDeprecatedCalls) {
            trigger_deprecation('symfony/config', '7.4', 'Calling any fluent method on "%s" is deprecated; pass the configuration to the constructor instead.', $this::class);
        }

        return $output;
    }

}
