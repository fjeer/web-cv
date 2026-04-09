<?php

namespace App\Policies;

use App\Models\Kelas;
use App\Models\User;

class KelasPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('view_kelas');
    }

    public function view(User $user, Kelas $kelas): bool
    {
        return $user->can('view_kelas');
    }

    public function create(User $user): bool
    {
        return $user->can('create_kelas');
    }

    public function update(User $user, Kelas $kelas): bool
    {
        return $user->can('edit_kelas');
    }

    public function delete(User $user, Kelas $kelas): bool
    {
        return $user->can('delete_kelas');
    }

    public function restore(User $user, Kelas $kelas): bool
    {
        return $user->can('delete_kelas');
    }

    public function forceDelete(User $user, Kelas $kelas): bool
    {
        return $user->can('delete_kelas');
    }
}