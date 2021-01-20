<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\TravelRequest;
use App\Http\Requests\ContactRequest;

class TravelController extends Controller
{
    public function showMain()
    {
        return view('mains.travel');
    }
    public function showContact()
    {
        return view('mains.contact');
    }
    public function exeMail(ContactRequest $request)
    {
        $contacts = $request->all();
        Mail::to($contacts['email'])->send(new ContactMail($contacts));
        \DB::beginTransaction();
        try {
            Contact::create($contacts);
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollback();
            abort(500);
        }
        \Session::flash('err_msg', 'メールを送信しました。');
        return redirect()->route('contact');
    }
    public function showForm()
    {
        return view('travel_pages.form');
    }
    public function showDetail($id)
    {
        $travel = Travel::find($id);

        if (is_null($travel)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('home'));
        }
        return view('travel_pages.detail', ['travel' => $travel]);
    }
    /**
     * @param int $id
     * @return view
     */
    public function showEdit($id)
    {
        $travel = Travel::find($id);

        if (is_null($travel)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('home'));
        }
        return view('travel_pages.edit', ['travel' => $travel]);
    }
    public function exeCreate(TravelRequest $request)
    {
        $inputs = $request->all();
        $files = $request->file('photos');

        if ($request->hasFile('photos') && $files->isValid()) {
            $file_name = $request->file('photos')->getClientOriginalName();
            $request->file('photos')->storeAs('public/profiles', $file_name);
        };
        $inputs['photos'] = $file_name;
        \DB::beginTransaction();
        try {
            Travel::create($inputs);
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollback();
            abort(500);
        }
        \Session::flash('err_msg', 'データを登録しました。');
        return redirect(route('home'));
    }
    public function exeDelete($id)
    {
        if (empty($id)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('home'));
        }
        try {
            Travel::destroy($id);
        } catch (\Throwable $e) {
            abort(500);
        }

        \Session::flash('err_msg', 'データを削除しました。');
        return redirect(route('home'));
    }
    public function exeUpdate(TravelRequest $request)
    {
        $inputs = $request->all();
        \DB::beginTransaction();
        try {
            $travel = Travel::find($inputs['id']);
            $travel->fill([
                'name' => $inputs['name'],
                'prefecture_id' => $inputs['prefecture_id'],
                "gender" => $inputs['gender'],
                'age' => $inputs['age'],
                'evaluation' => $inputs['evaluation'],
                'impressions' => $inputs['impressions'],
                'photos' => $inputs['photos'],
            ]);
            $travel->save();
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg', 'データを更新しました。');
        return redirect(route('home'));
    }

    /*
    *idで紐付ける。
    */
    public function showHoka_toho()
    {
        $hoka_tohos =  Travel::where('prefecture_id', '=<', 7)->get();

        return view('travel_pages.place_parts.hoka_toho')
            ->with('hoka_tohos', $hoka_tohos);
    }
    public function showKanto()
    {
        $kantos = Travel::whereBetween('prefecture_id', [8, 14])->get();

        return view('travel_pages.place_parts.kanto')
            ->with('kantos', $kantos);
    }
    public function showTubu()
    {
        $tubus = Travel::whereBetween('prefecture_id', [15, 23])->get();

        return view('travel_pages.place_parts.tubu')
            ->with('tubus', $tubus);
    }
    public function showKansai()
    {
        $kansais = Travel::whereBetween('prefecture_id', [24, 30])->get();

        return view('travel_pages.place_parts.kansai')
            ->with('kansais', $kansais);
    }
    public function showCyugoku()
    {
        $cyugokus = Travel::whereBetween('prefecture_id', [31, 35])->get();

        return view('travel_pages.place_parts.cyugoku')
            ->with('cyugokus', $cyugokus);
    }
    public function showShikoku()
    {
        $shikokus = Travel::whereBetween('prefecture_id', [36, 39])->get();

        return view('travel_pages.place_parts.shikoku')
            ->with('shikokus', $shikokus);
    }
    public function showKyushu()
    {
        $kyushus = Travel::whereBetween('prefecture_id', [40, 47])->get();;

        return view('travel_pages.place_parts.kyu_oki')
            ->with('kyushus', $kyushus);
    }
}
