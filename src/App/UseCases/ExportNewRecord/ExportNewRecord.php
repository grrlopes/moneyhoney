<?php

declare(strict_types=1);

namespace Mhoney\App\UseCases\ExportNewRecord;

use Mhoney\Domain\Repositories\IRecordRepository;

final class ExportNewRecord
{
  private IRecordRepository $repository;

  public function __construct(IRecordRepository $newRecord)
  {
    $this->repository = $newRecord;
  }

  public function handler(InputBoundaryDTO $data): string
  {
    return $this->repository->newRecordRepository(
      $data->getName(),
      $data->getAmount(),
      $data->getStoreName()
    );
  }
}
