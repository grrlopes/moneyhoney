<?php

declare(strict_types=1);

namespace Mhoney\App\UseCases\ExportDeleteRecord;

interface InputBoundaryDTO
{
  public function handler(string $data): string;
  public function deleteRecord(string $id): string;
}
