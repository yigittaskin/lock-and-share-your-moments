<?php

namespace App\Http\Controllers;

use App\Models\QrCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class QrCodeController extends Controller
{

    public function show($id)
    {
        $qrCode = QrCode::where('qr_id', $id)->first();
    
        if (!$qrCode) {
            return view('create', ['qr_id' => $id]);
        }
    
        $currentTime = Carbon::now();
        $lockDate = Carbon::parse($qrCode->lock_date);
    
        if ($currentTime->lessThan($lockDate)) {
            $diff = $currentTime->diff($lockDate);
    
            $countdown = [
                'years' => $diff->y,
                'months' => $diff->m,
                'days' => $diff->d,
                'hours' => $diff->h,
                'minutes' => $diff->i,
            ];
    
            return view('countdown', ['countdown' => $countdown]);
        } else {
            $qrCode->media = json_decode($qrCode->media, true);
            return view('show', ['qrCode' => $qrCode]);
        }
    }

    public function store(Request $request)
    {
        \Log::info('Form gönderildi');

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'name' => 'required',
            'lock_date' => 'required|date',
            'qr_id' => 'required',
            'media' => 'nullable|array',
            'media.*' => 'file|mimes:jpeg,png,jpg,gif,svg,mp4,mp3|max:20480',
            'message' => 'nullable|string',
        ]);

        \Log::info('Veriler doğrulandı');

        $validated['password'] = bcrypt($validated['password']);
        
        $mediaPaths = [];
        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $file) {
                $path = $file->store('uploads', 'public');
                $mediaPaths[] = $path;
            }
        }
        $validated['media'] = json_encode($mediaPaths);

        QrCode::create($validated);

        \Log::info('Veriler kaydedildi');

        return redirect()->route('qr.show', ['id' => $request->qr_id]);
    }

    public function edit($id)
    {
        $qrCode = QrCode::where('qr_id', $id)->first();

        if (!$qrCode) {
            return redirect()->route('qr.show', ['id' => $id])->withErrors(['qr_id' => 'QR code not found.']);
        }

        // lock_date alanını Carbon nesnesine dönüştürün
        $qrCode->lock_date = Carbon::parse($qrCode->lock_date);

        return view('edit', ['qrCode' => $qrCode]);
    }

    public function update(Request $request, $id)
    {
        $qrCode = QrCode::where('qr_id', $id)->firstOrFail();

        // Kullanıcı adı ve şifre doğrulaması
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($request->email !== $qrCode->email || !Hash::check($request->password, $qrCode->password)) {
            return back()->withErrors(['password' => 'Email or password is incorrect']);
        }

        // Sadece lock_date, dosya ve mesajı doğrula ve güncelle
        $validated = $request->validate([
            'lock_date' => 'required|date',
            'media' => 'nullable|array',
            'media.*' => 'file|mimes:jpeg,png,jpg,gif,svg,mp4,mp3|max:20480',
            'message' => 'nullable|string',
        ]);

        $mediaPaths = json_decode($qrCode->media, true);
        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $file) {
                $path = $file->store('uploads', 'public');
                $mediaPaths[] = $path;
            }
        }
        $validated['media'] = json_encode($mediaPaths);

        $qrCode->update([
            'lock_date' => $validated['lock_date'],
            'media' => $validated['media'],
            'message' => $validated['message'],
        ]);

        return redirect()->route('qr.show', ['id' => $id]);
    }

}
