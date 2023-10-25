<?php

namespace Illuminate\Contracts\Foundation;

interface CachesConfiguration
{
    /**
     * Determine if the application configuration is cached.
     * 确定是否缓存了应用程序配置.
     *
     * @return bool
     */
    public function configurationIsCached();

    /**
     * Get the path to the configuration cache file.
     * 获取配置缓存文件的路径.
     *
     * @return string
     */
    public function getCachedConfigPath();

    /**
     * Get the path to the cached services.php file.
     * 获取缓存的services.php文件的路径.
     *
     * @return string
     */
    public function getCachedServicesPath();
}
