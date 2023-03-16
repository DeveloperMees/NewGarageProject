<?php

namespace App\Http\Controllers;

use App\Models\Restoration;
use Illuminate\Http\Request;

class RestorationController extends \App\Http\Controllers\Controller
{
    //

    public function show($name)
    {
        $restoration = Restoration::whereHas('slugs', function ($q) use ($name) {
            $q->where('slug', '=', $name);
        })->first();

        if ($restoration != null) {
            return view('restorations.show', [
                'restoration' => $restoration
            ]);
        } else {
            abort('404');
        }
    }
}
