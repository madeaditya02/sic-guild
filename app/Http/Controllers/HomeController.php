<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = [
            [
                "id" => 111,
                "title" => "The Future of Remote Collaboration",
                "content" => "Digital tools are redefining how teams communicate across borders. Flexibility is no longer a perk but a core requirement for talent. Success now depends on asynchronous workflows and deep trust.",
                "image" => "/assets/view.jpg",
                "category" => [
                    "id" => 211,
                    "name" => "Work",
                ],
                "author" => [
                    "id" => 311,
                    "username" => "johndoe",
                    "name" => "John Doe",
                    "photo" => "/assets/user.jpg"
                ],
                "created_at" => new Carbon("2026-02-05 14:20:15"),
            ],
            [
                "id" => 112,
                "title" => "Minimalist Living in a Busy World",
                "content" => "Simplifying your physical space can lead to unexpected mental clarity. Many people find that owning less actually provides more freedom and focus. It is a journey of intentionality rather than just decluttering.",
                "image" => "/assets/view2.jpg",
                "category" => [
                    "id" => 212,
                    "name" => "Lifestyle",
                ],
                "author" => [
                    "id" => 312,
                    "username" => "sarah_smith",
                    "name" => "Sarah Smith",
                    "photo" => "/assets/user2.jpg"
                ],
                "created_at" => new Carbon("2026-02-12 09:45:00"),
            ],
            [
                "id" => 113,
                "title" => "Advancements in Sustainable Energy",
                "content" => "Renewable technology is evolving faster than most experts predicted a decade ago. Costs are plummeting while efficiency levels continue to reach new record highs. The global transition toward green power is officially unstoppable.",
                "image" => "/assets/view2.jpg",
                "category" => [
                    "id" => 213,
                    "name" => "Technology",
                ],
                "author" => [
                    "id" => 313,
                    "username" => "tech_guru",
                    "name" => "Alex Rivera",
                    "photo" => "/assets/user.jpg"
                ],
                "created_at" => new Carbon("2026-02-18 11:10:30"),
            ],
            [
                "id" => 114,
                "title" => "The Art of Slow Coffee",
                "content" => "Morning rituals provide a necessary anchor in an increasingly chaotic world. Brewing coffee manually allows for a moment of quiet reflection before the day starts. Every bean tells a story of origin and careful craft.",
                "image" => "/assets/view.jpg",
                "category" => [
                    "id" => 214,
                    "name" => "Hobbies",
                ],
                "author" => [
                    "id" => 314,
                    "username" => "bean_lover",
                    "name" => "David Chen",
                    "photo" => "/assets/user.jpg"
                ],
                "created_at" => new Carbon("2026-02-22 07:30:00"),
            ],
            [
                "id" => 115,
                "title" => "Exploring Urban Architecture",
                "content" => "Modern cities are becoming canvases for innovative and ecological building designs. Architects are now prioritizing green spaces within high-rise concrete structures. These living buildings are changing the way we inhabit urban centers.",
                "image" => "/assets/view.jpg",
                "category" => [
                    "id" => 215,
                    "name" => "Design",
                ],
                "author" => [
                    "id" => 315,
                    "username" => "arch_fan",
                    "name" => "Elena Vogt",
                    "photo" => "/assets/user2.jpg"
                ],
                "created_at" => new Carbon("2026-02-26 16:55:12"),
            ],
        ];
        return view('home', [
            'posts' => $posts,
            'judul' => "SIC Guild"
        ]);
    }
    public function stories()
    {
        return view('stories.index');
    }
    public function detailPost()
    {
        return view('stories.detail-post');
    }
}
