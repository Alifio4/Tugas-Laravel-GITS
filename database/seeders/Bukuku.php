<?php

namespace Database\Seeders;

use App\Models\buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class bukuku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = New buku;
        $buku->judul_buku = "PHP Edisi Lengkap";
        $buku->penulis = "Jubilee Enterprise";
        $buku->status = "Completed";
        $buku->save();

        $buku = New buku;
        $buku->judul_buku = "86 -EIGHTY SIX-";
        $buku->penulis = "Asato Asato";
        $buku->status = "On Going";
        $buku->save();

        $buku = New buku;
        $buku->judul_buku = "The Lord of the Rings: The Fellowship of the Ring";
        $buku->penulis = "J. R. R. Tolkien";
        $buku->status = "Completed";
        $buku->save();
    }
}