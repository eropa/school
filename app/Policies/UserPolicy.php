<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Просмотр только администратору
     * @param User $user
     * @return bool
     */
    public function showAdmin(User $user)
    {
        return $user->role == "admin";
    }

    /**
     * Просмотр только менеджеру сайта
     * @param User $user
     * @return bool
     */
    public function showManager(User $user)
    {
        return $user->role == "meneger";
    }

    /**
     * Показать родителям
     * @param User $user
     * @return bool
     */
    public function showParent(User $user)
    {
        return $user->role == "parent";
    }

    /**
     * Показать учителям
     * @param User $user
     * @return bool
     */
    public function showTeacher(User $user)
    {
        return $user->role == "teacher";
    }
}
