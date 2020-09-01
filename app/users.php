<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = "users";
    
    protected $fillable = ['u_id','u_username','u_password'];
    //Login Check
    protected $hidden = [
        'u_password',
    ];
    
    private function getUserRole()
    {
        return $this->role()->getResults();
    }

    private function checkRole($role)
    {
        return (strtolower($role) == strtolower($this->have_role->role)) ? true : false ;
    }

    public function hasRole($roles)
    {
        $this->have_role = $this->getUserRole();

        if (is_array($roles)) {
            foreach ($roles as $need_role) {
                if ($this->checkRole($need_role)) {
                    return true;
                }
            }
        } else {
            return $this->checkRole($roles);
        }
    }
}
