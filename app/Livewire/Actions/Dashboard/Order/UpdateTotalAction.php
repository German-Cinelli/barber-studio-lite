<?php

namespace App\Livewire\Actions\Dashboard\Order;

use App\Models\Order;

use Illuminate\Support\Facades\DB;

class UpdateTotalAction
{
    public function handle($order_id)
    {
        $total = Order::select([
            'orders.*',
            DB::raw('(SELECT SUM(price * quantity) FROM item_order WHERE item_order.order_id = orders.id AND item_order.deleted_at IS NULL) as total_items_price'),
        ])
        ->where('id', $order_id)
        ->first()
        ->total_items_price;

        return Order::findOrFail($order_id)->update([
            'subtotal' => ($total == null) ? 0 : $total,
            'total' => ($total == null) ? 0 : $total
        ]);
    }
}
