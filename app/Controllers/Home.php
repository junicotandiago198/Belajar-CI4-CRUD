<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TestimonialModel;

class Home extends BaseController
{

    public function __construct()
    {
        $this->Testimonial = new TestimonialModel();
    }

    public function index()
    {
        $data = [
            'title'         => 'Dashboard',
            'testimonial'   => $this->Testimonial->getTestimonial()
        ];
        return view('welcome_message', $data);
    }
}
