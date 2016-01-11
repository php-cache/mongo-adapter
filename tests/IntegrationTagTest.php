<?php

/*
 * This file is part of php-cache\mongodb-adapter package.
 *
 * (c) 2015-2015 Aaron Scherer <aequasi@gmail.com>, Tobias Nyholm <tobias.nyholm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Cache\Adapter\MongoDB\Tests;

use Cache\Adapter\MongoDB\MongoDBCachePool;
use Cache\IntegrationTests\TaggableCachePoolTest;
use MongoDB\Driver\Manager;

class IntegrationTagTest extends TaggableCachePoolTest
{
    use CreateServerTrait;

    public function createCachePool()
    {
        return new MongoDBCachePool($this->getCollection());
    }
}
