<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class UserController extends BaseController
{
    public function subscription()
    {
        return view('frontend.subscription');
    }
    public function payment(Request $request)
    {
        
        if ($request->payment == 'Khalti') {

            Cookie::queue('subs_id', $subscription->id);
            $response =  Http::withHeaders([
                "Authorization" => "Key " . env('KHALTI_SECRET_KEY')
            ])->post(env('KHALTI_BASE__URL') . "/epayment/initiate/", [
                "return_url" => env('KHALTI_RETURN_URL'),
                "website_url" => env('APP_URL'),
                "amount" => $request->price * 100, // Convert to paisa
                "purchase_order_id" => $request->id,
                "purchase_order_name" => $request->name,
                "customer_info" => Auth::user(),
            ]);
            return redirect($response['payment_url']);
        }
        toast('You been Our member and Get a New Party', 'success');
        return redirect()->back();
    }
    public function khalti(Request $request)
    {
        $response =  Http::withHeaders([
                "Authorization" => "Key " . env('KHALTI_SECRET_KEY')
            ])->post(env('KHALTI_BASE__URL') . "/epayment/lookup/", [
                "pidx" => $request->pidx,
            ]);
        $orderId = Cookie::get("order_id");
        $order = Order::find($orderId);
        $order->payment_status = $response['status'];
        $order->save();
        return redirect('/');
    }
}
