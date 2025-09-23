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

namespace App\Utils\Traits;

/**
 * Class MakesHeaderData.
 */
trait MakesHeaderData
{
    use UserSessionAttributes;

    /**
     * @return array
     */
    public function headerData(): array
    {
        //companies
        $companies = auth()->user()->companies;

        $data['current_company'] = $companies->first(function ($company) {
            return $company->id == auth()->user()->company()->id;
        });

        $data['companies'] = $companies->reject(function ($company) {
            return $company->id == auth()->user()->company()->id;
        });

        return $data;
    }
}
