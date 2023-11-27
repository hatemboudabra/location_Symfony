<?php

namespace Symfony\Config\Security;

require_once __DIR__.\DIRECTORY_SEPARATOR.'FirewallConfig'.\DIRECTORY_SEPARATOR.'LogoutConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'FirewallConfig'.\DIRECTORY_SEPARATOR.'SwitchUserConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FirewallConfig 
{
    private $pattern;
    private $host;
    private $methods;
    private $security;
    private $userChecker;
    private $requestMatcher;
    private $accessDeniedUrl;
    private $accessDeniedHandler;
    private $entryPoint;
    private $provider;
    private $stateless;
    private $lazy;
    private $context;
    private $logout;
    private $switchUser;
    private $requiredBadges;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pattern($value): static
    {
        $this->_usedProperties['pattern'] = true;
        $this->pattern = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function host($value): static
    {
        $this->_usedProperties['host'] = true;
        $this->host = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|string $value
     *
     * @return $this
     */
    public function methods(ParamConfigurator|string|array $value): static
    {
        $this->_usedProperties['methods'] = true;
        $this->methods = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function security($value): static
    {
        $this->_usedProperties['security'] = true;
        $this->security = $value;

        return $this;
    }

    /**
     * The UserChecker to use when authenticating users in this firewall.
     * @default 'security.user_checker'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function userChecker($value): static
    {
        $this->_usedProperties['userChecker'] = true;
        $this->userChecker = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function requestMatcher($value): static
    {
        $this->_usedProperties['requestMatcher'] = true;
        $this->requestMatcher = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function accessDeniedUrl($value): static
    {
        $this->_usedProperties['accessDeniedUrl'] = true;
        $this->accessDeniedUrl = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function accessDeniedHandler($value): static
    {
        $this->_usedProperties['accessDeniedHandler'] = true;
        $this->accessDeniedHandler = $value;

        return $this;
    }

    /**
     * An enabled authenticator name or a service id that implements "Symfony\Component\Security\Http\EntryPoint\AuthenticationEntryPointInterface"
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function entryPoint($value): static
    {
        $this->_usedProperties['entryPoint'] = true;
        $this->entryPoint = $value;

        return $this;
    }

    /**
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
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function stateless($value): static
    {
        $this->_usedProperties['stateless'] = true;
        $this->stateless = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function lazy($value): static
    {
        $this->_usedProperties['lazy'] = true;
        $this->lazy = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function context($value): static
    {
        $this->_usedProperties['context'] = true;
        $this->context = $value;

        return $this;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @return \Symfony\Config\Security\FirewallConfig\LogoutConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Security\FirewallConfig\LogoutConfig : static)
     */
    public function logout(mixed $value = []): \Symfony\Config\Security\FirewallConfig\LogoutConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['logout'] = true;
            $this->logout = $value;

            return $this;
        }

        if (!$this->logout instanceof \Symfony\Config\Security\FirewallConfig\LogoutConfig) {
            $this->_usedProperties['logout'] = true;
            $this->logout = new \Symfony\Config\Security\FirewallConfig\LogoutConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "logout()" has already been initialized. You cannot pass values the second time you call logout().');
        }

        return $this->logout;
    }

    public function switchUser(array $value = []): \Symfony\Config\Security\FirewallConfig\SwitchUserConfig
    {
        if (null === $this->switchUser) {
            $this->_usedProperties['switchUser'] = true;
            $this->switchUser = new \Symfony\Config\Security\FirewallConfig\SwitchUserConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "switchUser()" has already been initialized. You cannot pass values the second time you call switchUser().');
        }

        return $this->switchUser;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function requiredBadges(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['requiredBadges'] = true;
        $this->requiredBadges = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('pattern', $value)) {
            $this->_usedProperties['pattern'] = true;
            $this->pattern = $value['pattern'];
            unset($value['pattern']);
        }

        if (array_key_exists('host', $value)) {
            $this->_usedProperties['host'] = true;
            $this->host = $value['host'];
            unset($value['host']);
        }

        if (array_key_exists('methods', $value)) {
            $this->_usedProperties['methods'] = true;
            $this->methods = $value['methods'];
            unset($value['methods']);
        }

        if (array_key_exists('security', $value)) {
            $this->_usedProperties['security'] = true;
            $this->security = $value['security'];
            unset($value['security']);
        }

        if (array_key_exists('user_checker', $value)) {
            $this->_usedProperties['userChecker'] = true;
            $this->userChecker = $value['user_checker'];
            unset($value['user_checker']);
        }

        if (array_key_exists('request_matcher', $value)) {
            $this->_usedProperties['requestMatcher'] = true;
            $this->requestMatcher = $value['request_matcher'];
            unset($value['request_matcher']);
        }

        if (array_key_exists('access_denied_url', $value)) {
            $this->_usedProperties['accessDeniedUrl'] = true;
            $this->accessDeniedUrl = $value['access_denied_url'];
            unset($value['access_denied_url']);
        }

        if (array_key_exists('access_denied_handler', $value)) {
            $this->_usedProperties['accessDeniedHandler'] = true;
            $this->accessDeniedHandler = $value['access_denied_handler'];
            unset($value['access_denied_handler']);
        }

        if (array_key_exists('entry_point', $value)) {
            $this->_usedProperties['entryPoint'] = true;
            $this->entryPoint = $value['entry_point'];
            unset($value['entry_point']);
        }

        if (array_key_exists('provider', $value)) {
            $this->_usedProperties['provider'] = true;
            $this->provider = $value['provider'];
            unset($value['provider']);
        }

        if (array_key_exists('stateless', $value)) {
            $this->_usedProperties['stateless'] = true;
            $this->stateless = $value['stateless'];
            unset($value['stateless']);
        }

        if (array_key_exists('lazy', $value)) {
            $this->_usedProperties['lazy'] = true;
            $this->lazy = $value['lazy'];
            unset($value['lazy']);
        }

        if (array_key_exists('context', $value)) {
            $this->_usedProperties['context'] = true;
            $this->context = $value['context'];
            unset($value['context']);
        }

        if (array_key_exists('logout', $value)) {
            $this->_usedProperties['logout'] = true;
            $this->logout = \is_array($value['logout']) ? new \Symfony\Config\Security\FirewallConfig\LogoutConfig($value['logout']) : $value['logout'];
            unset($value['logout']);
        }

        if (array_key_exists('switch_user', $value)) {
            $this->_usedProperties['switchUser'] = true;
            $this->switchUser = new \Symfony\Config\Security\FirewallConfig\SwitchUserConfig($value['switch_user']);
            unset($value['switch_user']);
        }

        if (array_key_exists('required_badges', $value)) {
            $this->_usedProperties['requiredBadges'] = true;
            $this->requiredBadges = $value['required_badges'];
            unset($value['required_badges']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['pattern'])) {
            $output['pattern'] = $this->pattern;
        }
        if (isset($this->_usedProperties['host'])) {
            $output['host'] = $this->host;
        }
        if (isset($this->_usedProperties['methods'])) {
            $output['methods'] = $this->methods;
        }
        if (isset($this->_usedProperties['security'])) {
            $output['security'] = $this->security;
        }
        if (isset($this->_usedProperties['userChecker'])) {
            $output['user_checker'] = $this->userChecker;
        }
        if (isset($this->_usedProperties['requestMatcher'])) {
            $output['request_matcher'] = $this->requestMatcher;
        }
        if (isset($this->_usedProperties['accessDeniedUrl'])) {
            $output['access_denied_url'] = $this->accessDeniedUrl;
        }
        if (isset($this->_usedProperties['accessDeniedHandler'])) {
            $output['access_denied_handler'] = $this->accessDeniedHandler;
        }
        if (isset($this->_usedProperties['entryPoint'])) {
            $output['entry_point'] = $this->entryPoint;
        }
        if (isset($this->_usedProperties['provider'])) {
            $output['provider'] = $this->provider;
        }
        if (isset($this->_usedProperties['stateless'])) {
            $output['stateless'] = $this->stateless;
        }
        if (isset($this->_usedProperties['lazy'])) {
            $output['lazy'] = $this->lazy;
        }
        if (isset($this->_usedProperties['context'])) {
            $output['context'] = $this->context;
        }
        if (isset($this->_usedProperties['logout'])) {
            $output['logout'] = $this->logout instanceof \Symfony\Config\Security\FirewallConfig\LogoutConfig ? $this->logout->toArray() : $this->logout;
        }
        if (isset($this->_usedProperties['switchUser'])) {
            $output['switch_user'] = $this->switchUser->toArray();
        }
        if (isset($this->_usedProperties['requiredBadges'])) {
            $output['required_badges'] = $this->requiredBadges;
        }

        return $output;
    }

}
