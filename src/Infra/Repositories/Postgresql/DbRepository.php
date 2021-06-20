<?php

declare(strict_types=1);

namespace Mhoney\Infra\Repositories\Postgresql;

use Mhoney\Domain\Repositories\INewRecordRepository;

final class DbRepository implements INewRecordRepository
{
  public function newRecordRepository(
    string $name,
    string $amount,
    string $storeName
  ): void {
    print("tra tra");
  }
}
