<?php

declare(strict_types=1);

namespace Mhoney\App\UseCases\ExportDeleteRecord;

use Mhoney\Domain\Repositories\IRecordRepository;

final class ExportDeleteRecord implements InputBoundaryDTO
{
  private IRecordRepository $repository;

  public function __construct(IRecordRepository $deleteRecord)
  {
    $this->repository = $deleteRecord;
  }

  public function handler(string $id): string
  {
    return $this->repository->deleteRecordRepository($id);
  }

  public function deleteRecord(string $id): string
  {
    return "Aljazeera";
  }
}
