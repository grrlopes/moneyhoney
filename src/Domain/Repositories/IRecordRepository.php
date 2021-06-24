<?php

declare(strict_types=1);

namespace Mhoney\Domain\Repositories;

interface IRecordRepository
{
  public function newRecordRepository(
    string $name,
    string $amount,
    string $storeName
  ): string;

  public function deleteRecordRepository(string $id): string;
}
