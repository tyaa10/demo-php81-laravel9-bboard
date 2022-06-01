<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index() {
        $bbs = Bb::latest()->get();
        $s = "Объявления\r\n\r\n";
        foreach ($bbs as $bb) {
            $s .= $bb->title . "\r\n";
            $s .= $bb->price . " руб.\r\n";
            $s .= "\r\n";
        }
        return response($s)
            ->header('Content-Type', 'text/plain');
    }
    public function detail(Bb $bb) {
        // $bb = Bb::find($bb);
        $s = $bb->title . "\r\n\r\n";
        $s .= $bb->content . "\r\n";
        $s .= $bb->price . " руб.\r\n";
        return response($s)->header('Content-Type', 'text/plain');
    }
}
