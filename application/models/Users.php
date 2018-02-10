<?php
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "users"; 

    public function getUser($inputs) 
    {
        return $this->where($inputs)->first();
    }

    public $timestamps = true;
}