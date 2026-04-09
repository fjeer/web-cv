<?php

namespace App\Policies;

use App\Models\Kursus;
use App\Models\User;

class KursusPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('view_kursus');
    }

    public function view(User $user, Kursus $kursus): bool
    {
        return $user->can('view_kursus');
    }

    public function create(User $user): bool
    {
        return $user->can('create_kursus');
    }

    public function update(User $user, Kursus $kursus): bool
    {
        return $user->can('edit_kursus');
    }

    public function delete(User $user, Kursus $kursus): bool
    {
        return $user->can('delete_kursus');
    }

    public function restore(User $user, Kursus $kursus): bool
    {
        return $user->can('delete_kursus');
    }

    public function forceDelete(User $user, Kursus $kursus): bool
    {
        return $user->can('delete_kursus');
    }
}