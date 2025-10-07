<?php

use Illuminate\Support\Facades\Route;

// 1. HOME - Halaman Utama
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. ABOUT - Tentang Kami
Route::get('/about', function () {
    return view('about');
})->name('about');

// 3. PROGRAM - Program & Produk
Route::get('/program/{id?}', function ($id = null) {
    if ($id) {
        // Jika ada ID, tampilkan detail program
        $programs = [
            '1' => ['name' => 'Program Reseller', 'description' => 'Program kemitraan reseller'],
            '2' => ['name' => 'Langganan Bulanan', 'description' => 'Program berlangganan bulanan'],
            '3' => ['name' => 'Program Kemitraan', 'description' => 'Program kemitraan usaha']
        ];
        
        $program = $programs[$id] ?? null;
        
        if ($program) {
            return view('program-detail', [
                'program' => $program,
                'id' => $id
            ]);
        }
    }
    
    // Jika tidak ada ID, tampilkan semua program
    return view('program');
})->name('program');

// 4. OUR TEAM - Tim Kami
Route::prefix('team')->group(function () {
    Route::get('/', function () {
        return view('ourteam');
    })->name('ourteam');
    
    Route::get('/{id}', function ($id) {
        $teamMembers = [
            '1' => ['name' => 'Siti Rahayu', 'position' => 'Founder & CEO'],
            '2' => ['name' => 'Ahmad Fauzi', 'position' => 'Head of Production'],
            '3' => ['name' => 'Maya Sari', 'position' => 'Marketing Manager']
        ];
        
        $member = $teamMembers[$id] ?? null;
        
        if ($member) {
            return view('team-member', [
                'member' => $member,
                'id' => $id
            ]);
        }
        
        abort(404);
    })->name('team.member');
});

// 5. CONTACT US - Hubungi Kami
Route::get('/contact', function () {
    return view('contactus');
})->name('contactus');

// 6. REDIRECT - Alias untuk about
Route::redirect('/about-us', '/about');

// 7. FALLBACK - Halaman 404 (harus paling bawah)
Route::fallback(function () {
    return view('404');
});