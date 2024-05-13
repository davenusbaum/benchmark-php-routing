<?php

namespace Benchmark_Routing\Benchmark\Jaunt;

use Benchmark_Routing\Kit\Benchmark\BenchmarkAbstract;
use Jaunt\Route;

class Jaunt_Benchmark extends BenchmarkAbstract
{

    /**
     * @inheritDoc
     */
    function setupRouting(string $providerName)
    {
        return include $this->getRoutesFilename( $providerName );
    }

    /**
     * @inheritDoc
     */
    function runRouting(string $providerName, string $route): array
    {
        $router = $this->setupRouting( $providerName );
        /** @var Route $found */
        $found = $router->route('GET',$route);
        if ($found) {
            $result = $found['params'];
            $result['_route'] = end($found['stack']);
            return $result;
        }
        return $found;
    }

    /**
     * @inheritDoc
     */
    function getRoutesFilename(string $providerName): string
    {
        return dirname(__FILE__, 3)
            . "/routes/definition/jaunt/{$providerName}.php";
    }

    /**
     * @inheritDoc
     */
    function generateRoutes(array $routes): string
    {
        $php = '';
        foreach ($routes as $route)
        {
            $name = preg_replace('#\W+#', '_', $route);
            $name = trim($name, '_');
            $route = str_replace(['{','}'],[':',''],$route);

            /*
            * $routes->add('workspaces', new Route('/workspaces'));
            */
            $php .= "\n" . "\$router->get('{$route}', '{$name}');";
        }

        return '<?php '
            . "\n"
            . "\n" . 'use Jaunt\Router;'
            . "\n"
            . "\n" . '$router = new Router();'
            . "\n" . $php
            . "\n"
            . "\n" . 'return $router;'
            . "\n";
    }
}