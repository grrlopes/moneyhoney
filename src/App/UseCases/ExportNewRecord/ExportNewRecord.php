<?php

declare(strict_types=1);

namespace Mhoney\App\UseCases\ExportNewRecord;

use Mhoney\Domain\Repositories\INewRecordRepository;

final class ExportNewRecord
{
  private INewRecordRepository $repository;

  public function __construct(INewRecordRepository $newRecord)
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
