<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Redirect;
use Str;
class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  public function store(Request $request)
    {
        $request->validate(['original_url' => 'required|url']);
        $shortUrl = Str::random(6); // Generate a random 6-character string

        $url = Url::create([
            'original_url' => $request->original_url,
            'short_url' => $shortUrl,
        ]);

        $qrCode = base64_encode(QrCode::size(200)->generate(url($shortUrl)));

        return response()->json(['short_url' => url($shortUrl), 'qr_code' => $qrCode]);
    }
    public function redirect($shortUrl)
    {
        $url = Url::where('short_url', $shortUrl)->first();
        if ($url) {
            return Redirect::to($url->original_url);
        }
        return abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function show(Url $url)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function edit(Url $url)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Url $url)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function destroy(Url $url)
    {
        //
    }
}
