<?php namespace Numthang\Shop\Components;

use Cms\Classes\ComponentBase;
use Event;
use Auth;
use Mail;
use Lovata\OrdersShopaholic\Components\MakeOrder as LovataMakeOrder;

class MakeOrder extends LovataMakeOrder
{
    public function componentDetails()
    {
        return [
            'name'        => 'MakeOrder Component',
            'description' => 'No description provided yet...'
        ];
    }
    public function init() {
      $user = Auth::getUser();
      #dump($obOrder);
      /*Event::listen('shopaholic.order.created', function($obOrder) {
        $user = Auth::getUser();
        $data = [
            'name' => $user->name
        ];
        Mail::send('rainlab.user::mail.restore', $data, function($message) use ($user) {
            $message->to($user->email, $user->full_name);
        });
      });*/
      Event::listen('shopaholic.order.created', function($obOrder) {
        $user = Auth::getUser();
        //{{ order_number }}
        $data = [
          'order_number' => $obOrder->order_number
        ];
        Mail::send('lovata.ordersshopaholic::mail.create_order_user', $data, function($message) use ($user) {
            $message->to($user->email, $user->full_name);
        });
        //Return array with addition fields
        #return $arResult;
      });
    }
}
