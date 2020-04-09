<?php

declare(strict_types=1);

namespace SimpleSAML;

use SimpleSAML\Error;

/**
 * Base class for data stores.
 *
 * @package SimpleSAMLphp
 */
abstract class Store implements Utils\ClearableState
{
    /**
     * Our singleton instance.
     *
     * This is false if the data store isn't enabled, and null if we haven't attempted to initialize it.
     *
     * @var \SimpleSAML\Store|false|null
     */
    private static $instance;


    /**
     * Retrieve our singleton instance.
     *
     * @return \SimpleSAML\Store|false The data store, or false if it isn't enabled.
     *
     * @throws \SimpleSAML\Error\CriticalConfigurationError
     */
    public static function getInstance()
    {
        if (self::$instance !== null) {
            return self::$instance;
        }

        $config = Configuration::getInstance();
        $storeType = $config->getString('store.type', 'phpsession');

        switch ($storeType) {
            case 'phpsession':
                // we cannot support advanced features with the PHP session store
                self::$instance = false;
                break;
            case 'memcache':
                self::$instance = new Store\Memcache();
                break;
            case 'sql':
                self::$instance = new Store\SQL();
                break;
            case 'redis':
                self::$instance = new Store\Redis();
                break;
            default:
                // datastore from module
                try {
                    $className = Module::resolveClass($storeType, 'Store', '\SimpleSAML\Store');
                } catch (\Exception $e) {
                    $c = $config->toArray();
                    $c['store.type'] = 'phpsession';
                    throw new Error\CriticalConfigurationError(
                        "Invalid 'store.type' configuration option. Cannot find store '$storeType'.",
                        null,
                        $c
                    );
                }
                /** @var \SimpleSAML\Store|false */
                self::$instance = new $className();
        }

        return self::$instance;
    }


    /**
     * Retrieve a value from the data store.
     *
     * @param string $type The data type.
     * @param string $key The key.
     *
     * @return mixed|null The value.
     */
    abstract public function get(string $type, string $key);


    /**
     * Save a value to the data store.
     *
     * @param string   $type The data type.
     * @param string   $key The key.
     * @param mixed    $value The value.
     * @param int|null $expire The expiration time (unix timestamp), or null if it never expires.
     * @return void
     */
    abstract public function set(string $type, string $key, $value, ?int $expire = null): void;


    /**
     * Delete a value from the data store.
     *
     * @param string $type The data type.
     * @param string $key The key.
     * @return void
     */
    abstract public function delete(string $type, string $key): void;


    /**
     * Clear any SSP specific state, such as SSP environmental variables or cached internals.
     * @return void
     */
    public static function clearInternalState(): void
    {
        self::$instance = null;
    }
}
