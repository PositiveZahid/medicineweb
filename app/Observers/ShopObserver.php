<?php

namespace App\Observers;

use App\Models\Shop;
use App\Mail\ShopActivated;

class ShopObserver
{
    /**
     * Handle the Shop "created" event.
     *
     * @param  \App\Models\Shop  $shop
     * @return void
     */
    public function created(Shop $shop)
    {
        //
    }

    /**
     * Handle the Shop "updated" event.
     *
     * @param  \App\Models\Shop  $shop
     * @return void
     */
    public function updated(Shop $shop)
    {
        //check if changed to active, send mail to user, update role to seller
        if ($shop->getOriginal('is_active') == false && $shop->is_active == true) {
            \Mail::to($shop->owner->email)->send(new ShopActivated($shop));

            $shop->owner->setRole('seller');
        }
        else if($shop->getOriginal('is_active') == true && $shop->is_active == false) {
            // dd('changed to inactive');
        }
    }

    /**
     * Handle the Shop "deleted" event.
     *
     * @param  \App\Models\Shop  $shop
     * @return void
     */
    public function deleted(Shop $shop)
    {
        //
    }

    /**
     * Handle the Shop "restored" event.
     *
     * @param  \App\Models\Shop  $shop
     * @return void
     */
    public function restored(Shop $shop)
    {
        //
    }

    /**
     * Handle the Shop "force deleted" event.
     *
     * @param  \App\Models\Shop  $shop
     * @return void
     */
    public function forceDeleted(Shop $shop)
    {
        //
    }
}
