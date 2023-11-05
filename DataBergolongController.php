<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data; 
use Illuminate\Support\Facades\DB;

class DataBergolongController extends Controller
{
    public function data_bergolong()
    {
        $data = Data::all();
        $deskripsi = $this->deskripsiData($data);

        $maksimum = $deskripsi['maksimum'];
        $minimum = $deskripsi['minimum'];
        $rerata = $deskripsi['rerata'];
        $jml = $deskripsi['jml'];
        $sd = $deskripsi['sd'];

        $n_r = $maksimum - $minimum;
        $n_k = ceil(1 + 3.33 * log10($jml));
        $n_i = ceil($n_r / $n_k);
        
        // Inisialisasi array untuk data bergolong
        $dataBergolong = [];

        $xbawah = $minimum;
        $nfrel = 0;
        $npersen = 0;

        for ($i = 0; $i < $n_k; $i++) {
            $xatas = $xbawah + $n_i - 1;
            $ntengah = ($xbawah + $xatas) / 2;

            // Hitung frekuensi data dalam rentang interval
            $nfo = $data->whereBetween('skor', [$xbawah, $xatas])->count();

            $nfrel += $nfo;
            $npersen = $nfo / $jml * 100;

            $dataBergolong[] = [
                'ik_b' => $xbawah,
                'ik_a' => $xatas,
                'n_tengah' => $ntengah,
                'frek' => $nfo,
                'frek_rel' => $nfrel,
                'persentase' => $npersen
            ];

            $xbawah = $xatas + 1;

            if ($i == $n_k - 1 && $xatas < $maksimum) {
                $xatas = $maksimum;
                $ntengah = ($xbawah + $xatas) / 2;
                $nfo = $data->whereBetween('skor', [$xbawah, $xatas])->count();
                $nfrel += $nfo;
                $npersen = $nfo / $jml * 100;

                $dataBergolong[] = [
                    'ik_b' => $xbawah,
                    'ik_a' => $xatas,
                    'n_tengah' => $ntengah,
                    'frek' => $nfo,
                    'frek_rel' => $nfrel,
                    'persentase' => $npersen
                ];

                $xbawah = $xatas + 1;
            }
        }



        return view('pages/data_bergolong', compact('dataBergolong'));
    }

    private function deskripsiData($data) {
        $maksimum = $data->max('skor');
        $minimum = $data->min('skor');
        $rerata = $data->avg('skor');
        $jml = $data->count();

        $sd = DB::table('data')
            ->select(DB::raw('STDDEV(skor)'))
            ->value('STDDEV(skor)');

        return [
            'maksimum' => $maksimum,
            'minimum' => $minimum,
            'rerata' => $rerata,
            'jml' => $jml,
            'sd' => $sd
        ];
    }
}
