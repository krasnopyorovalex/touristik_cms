<?php

namespace App\Domain\Service\Queries;

use App\Service;

/**
 * Class GetServiceByAliasQuery
 * @package App\Domain\Service\Queries
 */
class GetServiceByAliasQuery
{
    /**
     * @var string
     */
    private $alias;

    /**
     * GetServiceByAliasQuery constructor.
     * @param string $alias
     */
    public function __construct(string $alias)
    {
        $this->alias = $alias;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        return Service::where('alias', $this->alias)->firstOrFail();
    }
}