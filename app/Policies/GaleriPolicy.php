<?php

namespace App\Policies;

use App\Models\Galeri;
use App\Models\User;

class GaleriPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('view_galeri');
    }

    public function view(User $user, Galeri $galeri): bool
    {
        return $user->can('view_galeri');
    }

    public function create(User $user): bool
    {
        return $user->can('create_galeri');
    }

    public function update(User $user, Galeri $galeri): bool
    {
        return $user->can('edit_galeri');
    }

    public function delete(User $user, Galeri $galeri): bool
    {
        return $user->can('delete_galeri');
    }

    public function restore(User $user, Galeri $galeri): bool
    {
        return $user->can('delete_galeri');
    }

    public function forceDelete(User $user, Galeri $galeri): bool
    {
        return $user->can('delete_galeri');
    }
}