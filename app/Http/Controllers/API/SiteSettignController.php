<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SiteSettings;
use Image;


class SiteSettignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return SiteSettings::first();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $siteSetting = SiteSettings::findOrFail($request->id);

        $this->validate($request, [
            'site_title'          => 'required|string|max:191',
            'site_desc'         => 'string',
        ]);

        $currentLogo = $siteSetting->site_logo;
            
        if($request->site_logo != $currentLogo) {
            $name = time().'.'. explode('/', explode(':', substr($request->site_logo, 0, strpos($request->site_logo, ';')))[1])[1];
            
            \Image::make($request->site_logo)->save(public_path('images/').$name);

            $request->merge(['site_logo' => $name]);
            $siteLogo = public_path('images/profile/').$currentLogo;

            if(file_exists($siteLogo)){
                @unlink($siteLogo);
            }
        }

        $siteSetting->update($request->all());
        return ['msg'=>$request->id];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
