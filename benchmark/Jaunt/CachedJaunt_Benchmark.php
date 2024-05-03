<?php

namespace Benchmark_Routing\Benchmark\Jaunt;

use Benchmark_Routing\Kit\Provider\ProviderAbstract;
use Benchmark_Routing\Benchmark\Jaunt\Jaunt_Benchmark;
use Jaunt\Router;

class CachedJaunt_Benchmark extends Jaunt_Benchmark
{
    protected $compiledRoutes = array();

    protected function setupProvider(ProviderAbstract $provider)
    {
        parent::setupProvider($provider);

        $providerName = $provider->name();
        $this->compiledRoutes[ $providerName ] = dirname(__FILE__, 3)
            . "/routes/cache/jaunt/{$providerName}.php";

        if (!is_file($this->compiledRoutes[ $providerName ]))
        {

            $router = include $this->getRoutesFilename($providerName);

            $compiled = $router->getRouteTree();

            $this->writeFile(
                $this->compiledRoutes[ $providerName ],
                '<?php return ' . var_export($compiled, true) . ';'
            );
        }
    }

    function setupRouting( $providerName )
    {
        return new Router(include $this->compiledRoutes[ $providerName ]);
    }


}