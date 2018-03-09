<?php

namespace App\Repositories;

use App\Models\OfficialAccounts;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;

class OfficialAccountsRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return OfficialAccounts::class;
    }
}
