<?php

namespace App\Builder\SearchEngine;

abstract class SearchBuilder
{
    abstract public function reset();

    abstract public function setFrom($from);

    abstract public function setConditions($conditions = []);

    abstract public function setLimit($limit);

    abstract public function build();
}
