<?php
/**
 * Created by IntelliJ IDEA.
 * User: nudge
 * Date: 15.04.18
 * Time: 13:13
 */

namespace Bitnetic\Maturity;

/**
 * Class Maturity
 * @package Bitnetic\Maturity
 */
class Maturity
{
    public const DEFAULT_LEVEL = MaturityLevel::DEV;

    /**
     * @return string
     */
    public static function getLevel(): string
    {
        return config('maturity.current', static::DEFAULT_LEVEL);
    }

    /**
     * @return array
     */
    public static function getFeatures(?string $level = null): array
    {
        if ($level === null) {
            $level = static::getLevel();
        }

        return config('maturity.features.' . $level, []);
    }

    /**
     * @param string $feature
     * @return bool
     */
    public static function has(string $feature): bool
    {
        $features = static::getFeatures();

        return ((array_key_exists($feature, $features) && ($features['feature'] !== false))
            || in_array($feature, $features)
        );
    }

    /**
     * @param string $feature
     * @return mixed|null
     */
    public static function get(string $feature)
    {
        $features = static::getFeatures();

        return array_key_exists($feature, $features)
            ? $features[$feature]
            : (in_array($feature, $features) ? true : false);
    }
}
