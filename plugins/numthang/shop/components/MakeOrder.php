<?php namespace Numthang\Shop\Components;

use Cms\Classes\ComponentBase;
use Config;
use Event;
use Auth;
use Mail;
use Lovata\OrdersShopaholic\Components\MakeOrder as LovataMakeOrder;

use Lovata\OrdersShopaholic\Classes\Collection\OrderPositionCollection;
use Lovata\OrdersShopaholic\Classes\Item\OrderItem;
class MakeOrder extends LovataMakeOrder
{
    public function componentDetails()
    {
        return [
            'name'        => 'MakeOrder Component',
            'description' => 'No description provided yet...'
        ];
    }
    public function getOrderPositionCollection($order_position_id) {
      $obList = OrderPositionCollection::make($order_position_id);
      return $obList->all();
    }
    public function init() {
      $user = Auth::getUser();

      /*#for testing $obOrder object
      $obOrder = OrderItem::make(114);
      $obOrderPositionList = $obOrder->order_position->all();
      #print_r($obOrderPositionList);
      $i = 0; $orderPositionList = '';
      foreach ($obOrderPositionList as $key => $obOrderPosition) {
        $obOffer = $obOrderPosition->offer;
        $obProduct = $obOffer->product;
        $orderPositionList .= ++$i.'.) '.$obProduct->name.' ('.$obOffer->name.') '.$obOffer->price.' '.$obOffer->currency.' x '.$obOrderPosition->quantity."\n";
      }
      dump($obOrder);*/
      Event::listen('shopaholic.order.created', function($obOrder) {
        $user = Auth::getUser();
        $obOrderPositionList = $obOrder->order_position->all();
        $i = 0; $orderPositionList = '';
        foreach ($obOrderPositionList as $key => $obOrderPosition) {
          $obOffer = $obOrderPosition->offer;
          $obProduct = $obOffer->product;
          $orderPositionList .= ++$i.'.) '.$obProduct->name.' ('.$obOffer->name.') '.$obOffer->price.' '.$obOffer->currency.' x '.$obOrderPosition->quantity."\n";
        }
        $data = $data = [
          'order_number' => $obOrder->order_number,
          'order_position_list' => $orderPositionList,
          'order_secret' => $obOrder->secret_key,
          'email' => $obOrder->property['email'],
          'sub_total' => $obOrder->position_total_price,
          'discount' => 0,
          'shipping_price' => $obOrder->shipping_price,
          'total' => $obOrder->total_price,
          'payment_method' => $obOrder->payment_method->name,
          'shipping_type' => $obOrder->shipping_type->name,
          'shipping_firstname' => $obOrder->property['name'],
          'shipping_lastname' => $obOrder->property['last_name'],
          'shipping_address' => $obOrder->property['shipping_address1'].' '.$obOrder->property['shipping_postcode'],
          'phone' => $user->phone,
          'mobile' => $user->mobile
        ];

        Mail::send(['text' => 'lovata.ordersshopaholic::mail.create_order_user'], $data, function($message) use ($user) {
          $sale_address = Config::get('mail.from.address');
          $message->replyTo($sale_address, Config::get('mail.from.address.name'));
          $message->to($user->email, $user->name);
        });
        Mail::send(['text' => 'lovata.ordersshopaholic::mail.create_order_manager'], $data, function($message) use ($user) {
          $sale_address = Config::get('mail.from.address');
          $message->from($user->email, $user->name);
          $message->replyTo($user->email, $user->name);
          $message->to($sale_address);
        });
        //Return array with addition fields
        #return $arResult;
      });
    }
}
