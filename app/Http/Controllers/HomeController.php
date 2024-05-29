<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Portfolio;
use App\Models\Portfoliodetail;
use App\Models\Client;
use App\Models\Team;
use App\Models\Blog;
use App\Models\single;
use App\Models\Partner;
class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $about = About::first();
        $services = Service::all();
        $blogs = Blog::all();
        $portfolios = Portfolio::all();
        $clients = Client::all();
        $contact = Contact::first();
        $testimonials = Testimonial::all();
        $partners = Partner::all();

        return view('home.index', compact(
            'sliders',
            'about',
            'blogs',
            'services',
            'portfolios',
            'clients',
            'contact',
            'testimonials',
            'partners',
        ));
    }

    public function about()
    {
        $about = About::first();
        $clients = Client::all();
        $teams = Team::all();
        $contact = Contact::first();
        $services = Service::all();

        return view('home.about', compact(
            'about',
            'clients',
            'teams',
            'contact',
            'services',
        ));
    }

    public function team()
    {
        $teams = Team::all();
        $contact = Contact::first();
        $services = Service::all();

        return view('home.team', compact(
            'teams',
            'contact',
            'services',
        ));
    }

    public function portfolio()
    {
        $portfolio = Portfolio::all();
        $contact = Contact::first();
        $services = Service::all();

        return view('home.portfolio', compact(
            'portfolio',
            'contact',
            'services',
        ));
    }

    public function contact()
    {
        $contact = Contact::first();
        $services = Service::all();

        return view('home.contact', compact(
            'contact',
            'services',
        ));
    }

    public function testimonials()
    {
        $testimonials = Testimonial::all();
        $contact = Contact::first();
        $services = Service::all();

        return view('home.testimonials', compact(
            'testimonials',
            'contact',
            'services',
        ));
    }

    public function services()
    {
        $services = Service::all();
        $contact = Contact::first();

        return view('home.services', compact(
            'services',
            'contact',
        ));
    }

    public function blog()
    {
        $blogs = Blog::all();

        return view('home.blog', compact(
            'blogs',
        ));
    }
    public function single($id)
    {
        // $single = Single::all();
        $blog = Blog::find($id);
        
        return view('home.single', compact(
            'blog',
        ));
        // return view('home.single');

    }
}