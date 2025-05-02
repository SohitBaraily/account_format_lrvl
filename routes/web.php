<?php

use App\Models\ACData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/ledger', function () {
    return view('ledger');
});

Route::get('/trial-balance', function () {
    return view('trial-balance');
});

Route::get('/info', function () {
    $acdata = ACData::all();
    return view('info', compact('acdata'));
});

Route::post('/save-journal-info', function (Request $request) {
    // return $request;

    $i = $request->input('iI');
    $j = $request->input('j');
    $k = $request->input('k');
    // return $request;
    for ($a = 1; $a <= $i; $a++) {
        // return $request;
        $acdata = new ACData();
        $acdata->date = $request->input("date$a");

        $acdata->drInput = $request->input('drInput' . $a );
        $acdata->drLF = $request->input('drLF' . $a );
        $acdata->drAmt = $request->input('drAmt' . $a );
        $acdata->crInput = $request->input('crInput' . $a );
        $acdata->crLF = $request->input('crLF' . $a );
        $acdata->crAmt = $request->input('crAmt' . $a );
        $acdata->particularsReason = $request->input('particularsReason' . $a);
        $acdata->save();
    }
    // $acdata->date = $request->input('date');
    // $acdata->drInput = $request->input('drInput');
    // $acdata->drLF = $request->input('drLF');
    // $acdata->drAmt = $request->input('drAmt');
    // $acdata->crInput = $request->input('crInput');
    // $acdata->crLF = $request->input('crLF');
    // $acdata->crAmt = $request->input('crAmt');
    // $acdata->particularsReason = $request->input('particularsReason');
    toast("Data Saved Successfully", "success");
    return redirect()->back();
});
