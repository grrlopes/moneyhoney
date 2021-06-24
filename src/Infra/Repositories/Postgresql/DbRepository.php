<?php

declare(strict_types=1);

namespace Mhoney\Infra\Repositories\Postgresql;

use Mhoney\Domain\Repositories\IRecordRepository;

final class DbRepository implements IRecordRepository
{
  public function newRecordRepository(
    string $name,
    string $amount,
    string $storeName
  ): string {
    $result = ["message" => "New record has been created!"];
    return json_encode($result);
  }

  public function deleteRecordRepository(string $id): string
  {
    $result = "Record has been removed!";
    return $result;
  }
}
