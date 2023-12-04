<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Facades\Redirect;
use Stripe\Exception\CardException;
use Illuminate\Support\Facades\Session;
use App\Models\{Order};
use Auth;

class StripePaymentController extends Controller
{
    //

    public static function StripePay(Request $request, $orderId, $amount){
        try {
            
            $stripe = new \Stripe\StripeClient('sk_test_51MmXfKSCgMR7q6bkWzyl3Im8Geip19fTgonFzBjR3SMcpsNhCE7tFvgR12g7fJCAd8ppSsFCmeRzRJIjYTNkVmSx009rBYW42x');
            $product = $stripe->products->create(['name' => 'Tita']);

            $price = $stripe->prices->create(
                [
                  'currency' => 'usd',
                  'product' => $product -> id,
                  "unit_amount" =>$amount * 100
                ]
              );
              
    
            $checkout = $stripe->checkout->sessions->create(
                [
                  'cancel_url' => url('cancel'),
                  'line_items' => [['price' => $price -> id, 'quantity' => 1]],
                  'mode' => 'payment',
                  'success_url' => url('success'). '?order_id=' . $orderId,
                ]
              );


             $paymentIntent = $stripe->paymentIntents->create([
                'amount' => $amount * 100,
                'currency' => 'usd',
                'automatic_payment_methods' => ['enabled' => true],
              ]);

              $paymentDetails = [
                'orderId' => $orderId,
                'payment_id' => $paymentIntent,
              ];

              session()->put('paymentDetails', $paymentDetails);
              return redirect::to($checkout['url']);

        }
        catch (CardException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function cancel(Request $request){
        return redirect('checkout');
    }

    public function success(Request $request){
        $stripe = new \Stripe\StripeClient('sk_test_51MmXfKSCgMR7q6bkWzyl3Im8Geip19fTgonFzBjR3SMcpsNhCE7tFvgR12g7fJCAd8ppSsFCmeRzRJIjYTNkVmSx009rBYW42x');
        
        /**
         * Update db if payment done 
        */

        // Order::whereId(Session::get("paymentDetails.orderId"))->update([
        //     'txn_id' => Session::get("paymentDetails.payment_id.id"),
        //     'status' => 'success',
        //     'transaction_details' => json_encode(Session::get("paymentDetails.payment_id")),
        // ]);

        Session::forget('paymentDetails');
        return Redirect::to('/')->With('success', 'Payment Done');
    }
}
