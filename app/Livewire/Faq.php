<?php

namespace App\Livewire;

use Livewire\Component;

class Faq extends Component
{
    public $questions = [
        [
            "question" => "What is your school about?",
            "answer" => "We provide high quality education.",
            "open" => false,
        ],
        [
            "question" => "Where are you located?",
            "answer" => "We are located in the city center.",
            "open" => false,
        ],
        [
            "question" => "Do you offer online classes?",
            "answer" => "Yes, we offer both online and offline classes.",
            "open" => false,
        ],
        [
            "question" => "Do you offer online classes?",
            "answer" => "Yes, we offer both online and offline classes.",
            "open" => false,
        ],
    ];

    public function toggle($index)
    {
        // بستن بقیه سوال‌ها (اختیاری)
        // foreach ($this->questions as $i => $q) {
        //     $this->questions[$i]['open'] = false;
        // }

        // باز کردن آیتم کلیک شده
        $this->questions[$index]['open'] = !$this->questions[$index]['open'];
    }

    public function render()
    {
        return view('livewire.faq');
    }
}