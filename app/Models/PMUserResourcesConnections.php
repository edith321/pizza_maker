<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMUserResourcesConnections extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_users_resource_conn';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'user_id', 'resource_id'];
}
