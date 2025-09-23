<?php

/**
 * Pocket Ledger (https://github.com/Kaab-Khan).
 *
 * @link https://github.com/Kaab-Khan source repository
 *
 * @copyright Copyright (c) 2025. Pocket Ledger (https://github.com/Kaab-Khan)
 *
 * @license https://github.com/Kaab-Khan
 */

namespace App\PaymentDrivers\Common;

interface SupportsHeadlessInterface
{
    /**
     * @param bool $headless
     */
    public function setHeadless(bool $headless): self;
}
