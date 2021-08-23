<?php

namespace Adamkhoa03\EloquentRepository\Repository\Criteria;

interface Criteria
{
    /**
     * @param mixed ...$criteria
     *
     * @return $this
     */
    public function withCriteria(...$criteria): self;
}
