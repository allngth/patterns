<?php

namespace App\Builder\SearchEngine\FileManager;

class FileManagerClient
{
    private $path;
    private $rules;
    private $limit;

    public function setPath($path)
    {
        $this->path = $path;
    }

    public function setRules($rules)
    {
        $this->rules = $rules;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    public function search()
    {
        return new FileManagerResponse();
    }
}
