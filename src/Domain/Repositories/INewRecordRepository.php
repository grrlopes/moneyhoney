<?php

declare(strict_types=1);

namespace Mhoney\Domain\Repositories;

interface INewRecordRepository
{
  public function newRecordRepository(
    string $name,
    string $amount,
    string $storeName
  ): string;
}
