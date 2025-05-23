<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table = 'categories';

        /**
         * The primary key associated with the table.
         *
         * @var string
         */
        protected $primaryKey = 'id';

        /**
         * The data type of the auto-incrementing ID.
         *
         * @var string
         */
        protected $keyType = 'integer';

        /**
         * Indicates if the model's ID is auto-incrementing.
         *
         * @var bool
         */
        public $incrementing = true;

        /**
         * Indicates if the model should be timestamped.
         *
         * @var bool
         */
        public $timestamps = true;

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $guarded = ['id'];

        /**
        * The attributes that should be cast.
        *
        * @var array
        */
        protected $casts = [
            // 'status' => Status::class,
        ];

        ##--------------------------------- RELATIONSHIPS
         public function projects() {
             return $this->hasMany(Project::class);
         }


        ##--------------------------------- ATTRIBUTES


        ##--------------------------------- CUSTOM FUNCTIONS


        ##--------------------------------- SCOPES
        // public function scopeActive($query)
        // {
        //     $query->where('status', Status::ACTIVE);
        // }


        ##--------------------------------- ACCESSORS & MUTATORS
}
