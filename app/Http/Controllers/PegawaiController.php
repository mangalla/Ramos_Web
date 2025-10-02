<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    /**
     * Menampilkan data detail seorang pegawai.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // 1. Data Statis Pegawai
        $nama = 'Ramos Hutahaean';
        $tanggal_lahir = '1995-09-26';
        $jabatan = 'Software Engineer';
        $keahlian = ['PHP', 'Laravel', 'JavaScript', 'Vue.js', 'MySQL'];
        $tanggal_mulai_bekerja = '2022-09-26';
        $gaji = 12000000;
        $cita_cita = 'Menjadi seorang Tech Lead dalam 5 tahun ke depan.';

        // 2. Kalkulasi Data Dinamis
        $hari_ini = Carbon::now();
        $tgl_mulai = Carbon::parse($tanggal_mulai_bekerja);

        // [FIX] Menggunakan (int) untuk memastikan hasilnya adalah bilangan bulat
        $usia = (int) Carbon::parse($tanggal_lahir)->diffInYears($hari_ini);

        // Menghitung lama bekerja dalam total hari (untuk logika)
        $lama_bekerja_hari = $tgl_mulai->diffInDays($hari_ini);

        // Menghitung lama bekerja dalam format "Tahun, Bulan, Hari" (untuk tampilan)
        $interval = $tgl_mulai->diff($hari_ini);
        $lama_bekerja_formatted = "{$interval->y} tahun, {$interval->m} bulan, {$interval->d} hari";

        // 3. Logika Kondisional Berdasarkan Lama Bekerja
        $status_pegawai = '';
        if ($lama_bekerja_hari < 730) { // 730 hari = 2 tahun
            $status_pegawai = 'Masih pegawai baru, tingkatkan pengalaman kerja!';
        } else {
            $status_pegawai = 'Sudah senior, jadilah teladan bagi rekan kerja!';
        }

        // 4. Menyusun Struktur Data Final untuk dikirim ke View
        $data_pegawai = [
            'employee_name' => $nama,
            'age' => $usia,
            'position' => $jabatan,
            'skills' => $keahlian,
            'join_date' => $tgl_mulai,
            'working_duration' => $lama_bekerja_hari,
            'working_duration_formatted' => $lama_bekerja_formatted,
            'salary' => $gaji,
            'status_pegawai' => $status_pegawai,
            'career_goal' => $cita_cita,
        ];

        // 5. Mengembalikan data ke file view
        return view('pegawai', ['pegawai' => $data_pegawai]);
    }
}
