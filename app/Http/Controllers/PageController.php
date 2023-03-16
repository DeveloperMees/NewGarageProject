<?php

namespace App\Http\Controllers;


use App\Http\Requests\Admin\PageRequest;
use App\Http\Requests\AppointmentRequest;
use App\Http\Requests\ContactRequest;
use App\Models\Car;
use App\Models\Page;
use App\Models\Restoration;

class PageController extends \App\Http\Controllers\Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepage()
    {
        $restorations = Restoration::where('published', '=', 1)->get();

        $page = Page::where('title', __FUNCTION__)->get();

        return view('pages.homepage', [
            'page' => $page,
            'restorations' => $restorations
        ]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $page = Page::where('title', __FUNCTION__)->get();

        return view('pages.contact', [
            'page' => $page
        ]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        $page = Page::where('title', $title)->first();
        if ($page != null) {
            return view('pages.show', [
                'page' => $page
            ]);
        } else {
            abort('404');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function appointment()
    {
        return view('pages.appointment');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function restorations()
    {
        $restorations = Restoration::all();

        return view('restorations.index', [
            'restorations' => $restorations
        ]);
    }


    public function assortment()
    {
        return view('pages.cars');
    }

    /**
     * Handle the property contact form
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function sendContact(ContactRequest $request)
    {
        \Mail::send('mails.content.contact', ['request' => $request], function ($m) use ($request) {
            $m->sender('mees.pols@hotmail.com', 'mees')
                ->from('mees.pols@hotmail.com', 'mees')
                ->to('garageboekestijn@yahoo.com', 'Garage Boekestijn')
                ->subject('Vraag gesteld op ' . substr($request->root(), 7));
        });

        \Flash::success('We hebben je bericht ontvangen, we zullen zo spoedig mogelijk reageren.');

        return \Redirect::to(\URL::previous() . '#contact')->with(['status' => 'send']);
    }

    /**
     * Handle the property contact form
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function sendAppointment(AppointmentRequest $request)
    {
        \Mail::send('mails.content.appointment', ['request' => $request], function ($m) use ($request) {
            $m->sender('mees.pols@hotmail.com', 'mees')
                ->from('mees.pols@hotmail.com', 'mees')
                ->to('garageboekestijn@yahoo.com', 'Garage Boekestijn')
                ->subject('Vraag gesteld op ' . substr($request->root(), 7));
        });

        \Flash::success('We hebben je bericht ontvangen, we zullen zo spoedig mogelijk reageren.');

        return \Redirect::to(\URL::previous() . '#contact')->with(['status' => 'send']);
    }

}
