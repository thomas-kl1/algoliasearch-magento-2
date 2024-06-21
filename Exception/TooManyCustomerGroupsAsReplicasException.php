<?php

namespace Algolia\AlgoliaSearch\Exception;

use Algolia\AlgoliaSearch\Exception\ReplicaLimitExceededException;

class TooManyCustomerGroupsAsReplicasException extends ReplicaLimitExceededException
{
    protected int $priceSortReplicaCount = 0;

    public function withPriceSortReplicaCount(int $priceSortReplicaCount): TooManyCustomerGroupsAsReplicasException
    {
        $this->priceSortReplicaCount = $priceSortReplicaCount;
        return $this;
    }

    public function getPriceSortReplicaCount(): int
    {
        return $this->priceSortReplicaCount;
    }
}
