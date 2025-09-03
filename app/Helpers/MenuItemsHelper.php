<?php

namespace App\Helpers;

class MenuItemsHelper
{
    public function getItems()
    {
        return config('constants.MENU_ITENS');
    }
}
