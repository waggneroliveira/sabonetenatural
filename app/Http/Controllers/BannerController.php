<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Helpers\HelperArchive;

class BannerController extends Controller
{
    protected $pathUpload = 'admin/uploads/images/banner/';
    public function index()
    {
        if(!Auth::banner()->hasRole('Super') && !Auth::banner()->can('usuario.tornar usuario master') && !Auth::banner()->can('email.visualizar')){
            return view('admin.error.403'); 
        }
        
        $banners = Banner::get();

        return view('admin.blades.banner.index', compact('banners'));
        // return response()->json(Banner::all());
    }

    public function store(Request $request)
    {   
        $helper = new HelperArchive();
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'required|string', 
            'path_image_desktop' => 'nullable', 'file', 'image', 'max:2048', 'mimes:jpg,jpeg,png,gif', 
            'path_image_mobile' => 'nullable', 'file', 'image', 'max:2048', 'mimes:jpg,jpeg,png,gif', 
        ]);

        $path_image_desktop = null;
        if ($request->hasFile('path_image_desktop')) {
            $path_image_desktop = $helper->renameArchiveUpload($request, 'path_image_desktop');
        }
        $path_image_mobile = null;
        if ($request->hasFile('path_image_mobile')) {
            $path_image_mobile = $helper->renameArchiveUpload($request, 'path_image_mobile');
        }
        try {
            DB::beginTransaction();
                if ($path_image_desktop) {
                    $data['path_image_desktop'] = $this->pathUpload . $path_image_desktop;
                }
                if ($path_image_mobile) {
                    $data['path_image_mobile'] = $this->pathUpload . $path_image_mobile;
                }
                $active = $request->active ? 1 : 0;
                $banner = Banner::create($validated, $active);

                if ($path_image_desktop) {
                    $request->file('path_image_desktop')->storeAs($this->pathUpload, $path_image_desktop);
                }
                if ($path_image_mobile) {
                    $request->file('path_image_mobile')->storeAs($this->pathUpload, $path_image_mobile);
                }
                DB::commit();
            return response()->json($banner, 201); 
            // return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();
            Session::flash('error',__('dashboard.response_item_error_create'));
            return redirect()->back();
        }
    }

    public function update(Request $request, string $id)
    {
        $banner = Banner::find($id);
        $helper = new HelperArchive();
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'required|string', 
            'path_image_desktop' => 'nullable', 'file', 'image', 'max:2048', 'mimes:jpg,jpeg,png,gif', 
            'path_image_mobile' => 'nullable', 'file', 'image', 'max:2048', 'mimes:jpg,jpeg,png,gif', 
        ]);
        $path_image_desktop = null;
        if ($request->hasFile('path_image_desktop')) {
            $path_image_desktop = $helper->renameArchiveUpload($request, 'path_image_desktop');
        }
        $path_image_mobile = null;
        if ($request->hasFile('path_image_mobile')) {
            $path_image_mobile = $helper->renameArchiveUpload($request, 'path_image_mobile');
        }

        try {
            DB::beginTransaction();
                if ($path_image_desktop) {
                    $data['path_image_desktop'] = $this->pathUpload . $path_image_desktop;
                    if ($banner->path_image_desktop) { 
                        Storage::delete($banner->path_image_desktop);
                    }
                    $request->file('path_image_desktop')->storeAs($this->pathUpload, $path_image_desktop);
                }

                if (isset($request->delete_path_image_desktop) && !$path_image_desktop) {
                    if ($banner->path_image_desktop) {
                        Storage::delete($banner->path_image_desktop);
                    }
                    $data['path_image_desktop'] = null;
                }
                if ($path_image_mobile) {
                    $data['path_image_mobile'] = $this->pathUpload . $path_image_mobile;
                    if ($banner->path_image_mobile) { 
                        Storage::delete($banner->path_image_mobile);
                    }
                    $request->file('path_image_mobile')->storeAs($this->pathUpload, $path_image_mobile);
                }

                if (isset($request->delete_path_image_mobile) && !$path_image_mobile) {
                    if ($banner->path_image_mobile) {
                        Storage::delete($banner->path_image_mobile);
                    }
                    $data['path_image_mobile'] = null;
                }
                $banner->fill($validated)->save();
            DB::commit();
            return response()->json($banner); 
            // return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();
            Session::flash('error',__('dashboard.response_item_error_create'));
            return redirect()->back();
        }
    }

    public function destroy(string $id)
    {
        if(!Auth::user()->hasRole('Super') && !Auth::user()->can('usuario.tornar usuario master') && !Auth::user()->can(['usuario.visualizar','usuario.remover'])){
            return view('admin.error.403');
        }
        
        $banner = Banner::find($id);

        if (!$banner) {
            return response()->json(['message' => 'Banner not found'], 404);
        }

        Storage::delete(isset($banner->path_image_desktop) ? $banner->path_image_desktop : '');
        Storage::delete(isset($banner->path_image_mobile) ? $banner->path_image_mobile : '');
        $banner->delete();

        Session::flash('success',__('dashboard.response_item_delete'));
        return redirect()->back();
        // return response()->json(['message' => 'Banner deleted']);
    }
}
