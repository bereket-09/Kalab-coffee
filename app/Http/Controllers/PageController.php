<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\Testimonial;
use App\Models\Menu;
use App\Models\Flavor;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Registration;
use Carbon\Carbon; // Import Carbon for working with timestamps
use Stephenjude\FilamentBlog\Models\Post;
use Stephenjude\FilamentBlog\Models\Author;
use Stephenjude\FilamentBlog\Models\Category;



use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('status', 'Active')->get();
        $menus = Menu::where('status', 'Active')->get();
        $flavors = Flavor::where('status', 'Active')->get();
        return view('frontend.home', ['testimonials' => $testimonials, 'menus' => $menus, 'flavors' => $flavors]);
    }



    public function about()
    {
        $flavors = Flavor::where('status', 'Active')->get();
        return view('frontend.about-us.index');
    }

    public function blogs()
    {
        // Retrieve all published blog posts with their author and category information
        $blogs = Post::with('author', 'category')->published()->get();

        // Loop through each blog post to access author and category data
        foreach ($blogs as $blog) {
            // Accessing author name
            $blog->author_name = $blog->author->name; // Assuming 'name' is the field for author's name

            // Accessing category name
            $blog->category_name = $blog->category->name; // Assuming 'name' is the field for category's name
        }

        // Retrieve the latest blogs
        $latestBlogs = Post::with('author', 'category')->orderBy('published_at', 'desc')->take(5)->get();

        // Retrieve all categories
        $categories = Category::all();

        return view('frontend.blogs.index', compact('blogs', 'latestBlogs', 'categories'));
    }

    public function events()
    {
        $currentDateTime = now(); // Get the current date and time

        $events = Event::where('status', 'Active')
            ->get();

        foreach ($events as $event) {
            $dateTime = strtotime($event->date_and_time);
            $month = date('M', $dateTime); // Get the month abbreviation (e.g., MAR)
            $date = date('d', $dateTime);   // Get the date (e.g., 22)

            $event->month = $month;
            $event->date = $date;
        }

        return view('frontend.events.index', compact('events'));
    }






    public function register_event($id)
    {
        $currentDateTime = now(); // Get the current date and time

        $event = Event::findOrFail($id);
        $user = auth()->user();

        // Check if the user has already registered for this event
        // $existingRegistration = Registration::where('event_id', $id)
        //     ->where('email', $user->email)
        //     ->exists();
        // // dd($event);
        // if ($existingRegistration) {
        //     return redirect()->back()->with('error', 'You have already registered for this event.');
        // }

        // Proceed with displaying the event registration page
        return view('frontend.events.events-register.index', compact('event'));
    }





    public function showBlog($id)
    {
        // Retrieve the individual blog post
        $blog = Post::with('author', 'category')->findOrFail($id);

        // Assuming 'name' is the field for author's name and category's name
        $blog->author_name = $blog->author->name;
        $blog->category_name = $blog->category->name;

        // Retrieve the latest blogs and categories
        $latestBlogs = Post::with('author', 'category')->orderBy('published_at', 'desc')->take(5)->get();
        $categories = Category::all();


        return view('frontend.blogs-detail.index', compact('blog', 'latestBlogs', 'categories'));
    }



    public function services()
    {
        return view('frontend.services.index');
    }



    public function contact()
    {
        return view('frontend.contact.index');
    }





    public function testimonials()
    {
        // Fetch testimonials data from the database
        $testimonials = Testimonial::where('status', 'Active')->get();

        // Pass testimonials data to the view
        return view('frontend.testimonial.index', ['testimonials' => $testimonials]);
    }




    public function menus()
    {
        // Fetch testimonials data from the database
        $menus = Menu::where('status', 'Active')->get();

        // Pass testimonials data to the view
        return view('frontend.menus.index', ['menus' => $menus]);
    }











    // Inside your controller methods where you want to display an alert before redirecting
public function subscribe(Request $request)
{
    // Store the email in the database
    Subscription::create([
        'email' => $request->email,
        'status' => 'Active',
    ]);

    // Set success message
    return redirect('/')->with('alert', [
        'type' => 'success',
        'message' => 'Your Subscription has been submitted successfully!'
    ]);
}

public function submit(Request $request)
{
    // Create a new contact instance
    $contact = new Contact();
    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->subject = $request->subject;
    $contact->message = $request->message;
    $contact->status = 'Unread';
    // Save the contact data
    $contact->save();

    // Set success message
    return redirect('/')->with('alert', [
        'type' => 'success',
        'message' => 'Your message has been submitted successfully!'
    ]);
}

public function submitRegistration(Request $request)
{
    // Check if the user is already registered for this event with the same email
    $existingRegistration = Registration::where('event_id', $request->event_id)
                                         ->where('email', $request->email)
                                         ->exists();

    if ($existingRegistration) {
        // Set info message
        return redirect('/')->with('alert', [
            'type' => 'info',
            'message' => 'You are already registered for this event.'
        ]);
    }

    // Add the current timestamp to the request data
    $requestData = $request->all();
    $requestData['registration_date'] = Carbon::now();

    // Insert the modified request data into the register table
    Registration::create($requestData);

    // Set success message
    return redirect('/')->with('alert', [
        'type' => 'success',
        'message' => 'Your registration has been submitted successfully!'
    ]);
}

}
