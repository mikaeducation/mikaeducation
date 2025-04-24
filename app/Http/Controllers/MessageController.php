<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'message' => 'required|string|max:1000',
    ]);

    $user = Auth::user();
    $message = Message::where('phone', $user->phone)->first();

    $responseMessage = null;

    if ($message) {
        if ($message->chat1 && $message->chat2) {
            return response()->json([
                'error' => '<div class="space-y-2">
                                <div class="w-full pb-2 border-b-2 flex items-center justify-start gap-1 text-sm font-medium text-blue31 space-x-1 bg-red-100">
                                    <svg class="h-4 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                    </svg>
                                    <p>Pesan Anda dibatasi sementara</p>
                                </div>
                                <p>Kami telah menerima seluruh pesan yang Anda ajukan sebelumnya. Kami akan segera memberikan respon dan mengirimkan jawabannya pada notifikasi Anda. Setelah itu anda dapat mengirimkan pesan kembali. <br> <br> Jika Anda memerlukan bantuan segera, Anda dapat <a href="https://wa.me/082156226440" target="_blank" class="font-medium underline">menghubungi tim dukungan kami disini</a> untuk respon dan jawaban yang lebih cepat.</p>
                            </div>'
                ], 403);
        } elseif ($message->chat1) {
            $message->chat2 = $request->message;
            $responseMessage = "Terima kasih, kami telah menerima seluruh pesan yang Anda kirimkan. Kami akan segera memberikan respon dan mengirimkan jawaban pada notifikasi Anda. Setelah itu anda dapat mengajukan pesan kembali.";
        } else {
            $message->chat1 = $request->message;
            $responseMessage = "Terima kasih atas seluruh pesan yang Anda kirimkan. Kami akan memberikan respon dan jawaban secepatnya. <br> <br> Apakah masih ada pertanyaan yang ingin anda tanyakan kembali? Kami akan senang membantu kendala Anda.";
        }
    } else {
        $message = new Message();
        $message->phone = $user->phone;
        $message->chat1 = $request->message;
        $responseMessage = "Terima kasih atas seluruh pesan yang Anda kirimkan. Kami akan memberikan respon dan jawaban secepatnya. <br> <br> Apakah masih ada pertanyaan yang ingin anda tanyakan kembali? Kami akan senang membantu kendala Anda.";
    }

    $message->save();

    return response()->json([
        'message' => 'Pesan berhasil dikirim!',
        'data' => $message,
        'responseMessage' => $responseMessage,
        'user' => [
            'name' => $user->profile->first_name ?? $user->name, // Jika tidak ada first_name, gunakan name
            'profile_image' => $user->profile->profile_image ? asset('storage/' . $user->profile->profile_image) : null
        ]
    ]);
    
}



}


