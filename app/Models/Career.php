<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    public $timestamps = false;
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';
    // const PENDING = 'pending';
    // const APPROVED = 'approved';
    // const BLOCKED = 'blocked';

    protected $table = 'career';

    protected $fillable = [
        'title',
        'vacancy',
        'deadLine',
        'description',
        'jobType',
        'salary',
    ];

//    protected $dates = [
//        'published_at',
//        'deleted_at',
//    ];

//    public function admin(){
//        return $this->belongsTo(Admin::class, 'admin_id');
//    }

//    public function getAdminNameAttribute(){
//        return $this->admin->name;
//    }
}
