<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\KajianRequest;
use App\Http\Requests\QuotesRequest;
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

    public function storeQuotes(QuotesRequest $request)
    {
        $quotes = $request->all();
        //upload image quotes
        $quotes['image'] = $request->file('image')->store('assets/admin/content', 'public');
        Quotes::create($quotes);
        return redirect()->route('admin-content')->with('quotes', 'Data Quotes Berhasil Ditambahkan');
    }

    public function editQuotes(Request $request, $id)
    {
        $quotes = Quotes::findOrFail($id);
        return view(
            'pages.admin.content.editquotes',
            [
                'quotes' => $quotes,
            ]
        );
    }

    public function updateQuotes(QuotesRequest $request)
    {
        $data = $request->all();
        if ($request->image) {
            // hapus file image lama
            unlink(public_path('storage/' . $data['old_image']));
            //masukan image baru
            $data['image'] = $request->file('image')->store('assets/admin/content', 'public');
        }
        $quotes = Quotes::findOrFail($data['id']);
        $quotes->update($data);
        return redirect()->route('admin-content')->with('quotes', 'Data Quotes Berhasil Di Edit');
    }

    public function destroyQuotes(Request $request)
    {
        $quotes = Quotes::findOrFail($request['id']);
        unlink(public_path('storage/' . $quotes['image']));
        $quotes->delete();
        return redirect()->route('admin-content')->with('quotes', 'Data Quotes Berhasil Di Hapus');
    }
}
