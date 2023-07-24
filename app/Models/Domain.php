<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Stancl\Tenancy\Database\Models\Domain as ContractsDomain;

class Domain extends Model implements ContractsDomain
{
    use HasFactory;
}
