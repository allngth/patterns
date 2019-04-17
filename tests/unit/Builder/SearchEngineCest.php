<?php

use App\Builder\SearchEngine\Database\MySQLSearchBuilder;
use App\Builder\SearchEngine\FileManager\FileSearchBuilder;
use App\Builder\SearchEngine\Database\MysqlResponse;
use App\Builder\SearchEngine\FileManager\FileManagerResponse;
use App\Builder\SearchEngine\SearchEngineDirector;

class SearchEngineCest
{
    public function testCanBuildFileManagerResponse(UnitTester $I)
    {
        $builder = new FileSearchBuilder();
        $director = new SearchEngineDirector($builder);

        $response = $director->search();

        $I->assertTrue($response instanceof FileManagerResponse);
    }

    public function testCanBuildMysqlResponse(UnitTester $I)
    {
        $builder = new MySQLSearchBuilder();
        $director = new SearchEngineDirector($builder);

        $response = $director->search();

        $I->assertTrue($response instanceof MysqlResponse);
    }
}
