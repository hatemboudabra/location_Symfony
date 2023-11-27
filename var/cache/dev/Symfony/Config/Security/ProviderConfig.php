<?php

namespace Symfony\Config\Security;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ProviderConfig'.\DIRECTORY_SEPARATOR.'ChainConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ProviderConfig 
{
    private $id;
    private $chain;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function id($value): static
    {
        $this->_usedProperties['id'] = true;
        $this->id = $value;

        return $this;
    }

    public function chain(array $value = []): \Symfony\Config\Security\ProviderConfig\ChainConfig
    {
        if (null === $this->chain) {
            $this->_usedProperties['chain'] = true;
            $this->chain = new \Symfony\Config\Security\ProviderConfig\ChainConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "chain()" has already been initialized. You cannot pass values the second time you call chain().');
        }

        return $this->chain;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('id', $value)) {
            $this->_usedProperties['id'] = true;
            $this->id = $value['id'];
            unset($value['id']);
        }

        if (array_key_exists('chain', $value)) {
            $this->_usedProperties['chain'] = true;
            $this->chain = new \Symfony\Config\Security\ProviderConfig\ChainConfig($value['chain']);
            unset($value['chain']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['id'])) {
            $output['id'] = $this->id;
        }
        if (isset($this->_usedProperties['chain'])) {
            $output['chain'] = $this->chain->toArray();
        }

        return $output;
    }

}
