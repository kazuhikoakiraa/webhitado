<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homepage;
use App\Http\Controllers\HomepageController;


class PelangganTentangController extends Controller
{
    public function index()
    {// Memanggil metode index dari HomepageController
        $homepageController = new HomepageController();
        $tentang1 = $homepageController->getSectionData('profile');
        $tentang2 = $homepageController->getSectionData('about');
        $tentang3 = $homepageController->getSectionData('explore');

        // Mengembalikan tampilan customer dengan data menu
        return view('Pelanggan.tentang', compact('tentang1', 'tentang2', 'tentang3'));
    }

}
