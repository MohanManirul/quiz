<?php

namespace App\Models\UserModule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class SuperAdmin extends Authenticatable
{
    use HasFactory;
}
