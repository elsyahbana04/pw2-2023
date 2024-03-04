<?php

function tambah ($nilai1, $nilai2)
{
    echo $nilai1 + $nilai2;
}

tambah(1, 2);

function hitungUmur($tahunLahir)
{
    $tahunSekarang = 2024;

    $hasil = $tahunSekarang - $tahunLahir;
    echo $hasil ;
}

hitungUmur (1920);