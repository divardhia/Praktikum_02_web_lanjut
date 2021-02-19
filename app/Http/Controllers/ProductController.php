<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home(){
        return '<a href="https://www.educastudio.com/">home</a>';
    }

    public function product(){
        echo "Daftar Produk : <br>";
        echo "<a href=produk/eduGames>1. Educational Game <br> </a>";
        echo "<a href=produk/kidsGames>2. Kids Game <br> </a>";
        echo "<a href=produk/storyBooks>3. Story Books <br> </a>";
        echo "<a href=produk/songs>4. Kids Songs <br> </a>";
    }

    public function eduGames()
    {
        return "<a href=https://www.educastudio.com/category/marbel-edu-games> Halaman Educational Game </a>";
    }

    public function kidsGames()
    {
        return "<a href=https://www.educastudio.com/category/marbel-and-friends-kids-games> Halaman Kids Game </a>";
    }

    public function storyBooks()
    {
        return "<a href=https://www.educastudio.com/category/riri-story-books> Halaman Story Books </a>";
    }

    public function songs()
    {
        return "<a href=https://www.educastudio.com/category/kolak-kids-songs> Halaman Kids Songs </a>";
    }

    
    public function news($id)
    {
        if ($id == 1) {
            return "<a href=https://www.educastudio.com/> Halaman Daftar Berita </a>";
        }
        else {
            return "<a href=https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19> Halaman Berita Covid-19</a>";
        }
    }

    public function program()
    {
        echo "Daftar Produk : <br>";
        echo "<a href=program/karir>1. Karir <br> </a>";
        echo "<a href=program/magang>2. Magang <br> </a>";
        echo "<a href=program/kunjungan>3. Kunjungan <br> </a>";
    }

    public function karir()
    {
        return "<a href=https://www.educastudio.com/program/karir> Halaman Karir </a>";
    }

    public function magang()
    {
        return "<a href=https://www.educastudio.com/program/magang> Halaman Magang </a>";
    }

    public function kunjungan()
    {
        return "<a href=https://www.educastudio.com/program/kunjungan-industri> Halaman Kunjungan </a>";
    }

    // About
    public function about()
    {
        return "<a href=https://www.educastudio.com/about-us> Halaman About Us </a>";
    }
}
