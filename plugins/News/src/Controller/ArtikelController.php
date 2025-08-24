<?php

declare(strict_types=1);

namespace News\Controller;

use News\Controller\AppController;

class ArtikelController extends AppController
{
    // Menampilkan daftar artikel
    public function index()
    {
        // Ambil 6 artikel terbaru
        $artikels = $this->Artikel->find()
            ->order(['artikel_tanggal' => 'DESC'])
            ->limit(6)
            ->all();

        $this->set(compact('artikels'));
    }

    // Menampilkan detail artikel
    public function view($id = null)
    {
        $artikel = $this->Artikel->get($id);
        $this->set(compact('artikel'));
    }
}
