<?php

namespace App\Builder\SearchEngine\FileManager;

use App\Builder\SearchEngine\SearchBuilder;

class FileSearchBuilder extends SearchBuilder
{
    /** @var FileManagerClient */
    private $fileManager;

    public function reset()
    {
        $this->fileManager = new FileManagerClient();
    }

    public function setFrom($from)
    {
        $this->fileManager->setPath($from);
    }

    public function setConditions($conditions = [])
    {
        $this->fileManager->setRules($conditions);
    }

    public function setLimit($limit)
    {
        $this->fileManager->setLimit($limit);
    }

    public function build()
    {
        return $this->fileManager->search();
    }
}
