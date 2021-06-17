<?php

declare(strict_types=1);

namespace Mhoney\App\UseCases\ExportNewRecord;

final class InputBoundaryDTO
{
  private string $name;
  private string $amount;
  private string $storeName;

  public function __construct(
    string $name,
    string $amount,
    string $storeName
  ) {
    $this->name = $name;
    $this->amount = $amount;
    $this->storeName = $storeName;
  }

  /**
   * Get the value of name
   *
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * Get the value of amount
   *
   * @return string
   */
  public function getAmount(): string
  {
    return $this->amount;
  }

  /**
   * Get the value of storeName
   *
   * @return string
   */
  public function getStoreName(): string
  {
    return $this->storeName;
  }
}
