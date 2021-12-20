<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\KajianRequest;
use App\Models\Kajian;
use App\Models\Quotes;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $kajian = Kajian::paginate(15);
        $quotes = Quotes::paginate(15);

        return view('pages.admin.content.index', [
            'kajian' => $kajian,
            'quotes' => $quotes,
        ]);
    }

    public function createKajian()
    {
        return view('pages.admin.content.createkajian');
    }

    public function storeKajian(KajianRequest $request)
    {
        $kajian = $request->all();
        Kajian::create($kajian);
        return redirect()->route('admin-content')->with('kajian', 'Data Kajian Berhasil Ditambahkan');
    }

    public function editKajian(Request $request, $id)
    {
        $kajian = Kajian::findOrFail($id);
        return view(
            'pages.admin.content.editkajian',
            [
                'kajian' => $kajian,
            ]
        );
    }

    public function updateKajian(KajianRequest $request)
    {
        $data = $request->all();
        $kajian = Kajian::findOrFail($data['id']);
        $kajian->update($data);
        return redirect()->route('admin-content')->with('kajian', 'Data Kajian Berhasil Di Edit');
    }

    public function destroyKajian(Request $request)
    {
        $kajian = Kajian::findOrFail($request['id']);
        $kajian->delete();
        return redirect()->route('admin-content')->with('kajian', 'Data Kajian Berhasil Di Hapus');
    }

    public function createQuotes()
    {
        return view('pages.admin.content.createquotes');
    }
}
