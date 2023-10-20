<?php

namespace App\Http\Controllers;

use App\Models\modelhp;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class modelhpController extends Controller
{
    public function create1(): View
    {
        //get posts
        $kat = modelhp::latest()->paginate(5);

        //render view with posts
        return view('gadget.create1', compact('kat'));
    }
     /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $modelhp = modelhp::latest()->paginate(5);

        //render view with posts
        return view('hpkat.index', compact('modelhp'));
    }
    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('hpkat.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'mod'   => 'required'
        ]);

        //create post
        modelhp::create([
            'mod'   => $request->mod
        ]);

        //redirect to index
        return redirect()->route('mod.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $modelhp = modelhp::findOrFail($id);

        //render view with post
        return view('hpkat.edit', compact('modelhp'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'mod'   => 'required'
        ]);

        //get post by ID
        $modelhp = modelhp::findOrFail($id);

            //update post with new image
            $modelhp->update([
                'mod'   => $request->mod
            ]);

        //redirect to index
        return redirect()->route('mod.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
