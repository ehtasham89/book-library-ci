<?php
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "users"; 

    public function getUser($inputs) 
    {
        return $this->where($inputs)->first();
    }

    protected $fillable = ['first_name','last_name','email', 'role'];

    protected $guarded = ['password'];

    public function createUsers() 
    {
        $user = $this->where('email', 'admin@gmail.com')->count();

        if (! $user) {
            $admin = [
                'first_name' => 'Ehtasham', 
                'last_name' => 'Nasir',
                'email' => 'admin@gmail.com',
                'password' => md5('123'),
                'role' => 1
            ];

            $this->insert($admin);
        }

        $user = $this->where('email', 'client@gmail.com')->count();
        
        if (! $user) {
            $client = [
                'first_name' => 'Usman', 
                'last_name' => 'Nasir',
                'email' => 'client@gmail.com',
                'password' => md5('12345'),
                'role' => 3
            ];
    
            $this->insert($client);
        }
    }

    public $timestamps = true;
}