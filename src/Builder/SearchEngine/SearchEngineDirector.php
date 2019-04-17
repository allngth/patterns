<?php

namespace App\Builder\SearchEngine;

class SearchEngineDirector
{
    private $searchBuilder;

    public function __construct(SearchBuilder $searchBuilder)
    {
        $this->searchBuilder = $searchBuilder;
    }

    public function search($settings = [])
    {
        if (!is_array($settings)) {
            throw new \InvalidArgumentException('Settings must be an array');
        }

        $this->searchBuilder->reset();

        if (isset($settings['from'])) {
            $this->searchBuilder->setFrom($settings['from']);
        }

        if (isset($settings['conditions'])) {
            $this->searchBuilder->setConditions($settings['conditions']);
        }

        if (isset($settings['limit'])) {
            $this->searchBuilder->setLimit($settings['limit']);
        }

        return $this->searchBuilder->build();
    }
}
