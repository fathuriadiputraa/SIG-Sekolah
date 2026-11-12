<?php

namespace App\Observers;

use App\Models\ActivityLog;
use App\Models\Sekolah;
use Illuminate\Support\Facades\Auth;

class SekolahObserver
{
    public function created(Sekolah $sekolah): void
    {
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'CREATED',
            'model' => Sekolah::class,
            'description' => "Pengguna " . (Auth::user()?->name ?? 'Sistem') . " menambahkan sekolah {$sekolah->nama}."
        ]);
    }

    public function updated(Sekolah $sekolah): void
    {
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'UPDATED',
            'model' => Sekolah::class,
            'description' => "Pengguna " . (Auth::user()?->name ?? 'Sistem') . " memperbarui sekolah {$sekolah->nama}."
        ]);
    }

    public function deleted(Sekolah $sekolah): void
    {
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'DELETED',
            'model' => Sekolah::class,
            'description' => "Pengguna " . (Auth::user()?->name ?? 'Sistem') . " menghapus sekolah {$sekolah->nama}."
        ]);
    }
}