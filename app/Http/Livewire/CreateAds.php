<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateAds extends Component
{
    use WithFileUploads;

    public $categories;
    public $subcategories;
    public $subsubcategories;
    public $selectedCategory;
    public $parentCategoryName;
    public $subCategoryName;
    public $subSubCategoryName;

    public $title;
    public $address;
    public $description;
    public $price;
    public $phone;
    public $communication;
    public $active;

    public $images = [];


    public function subcategory($categoryId)
    {
        $this->subcategories = Category::where('parent_id', $categoryId)->with('subcategories')->get();
        $this->parentCategoryName = Category::where('id', $categoryId)->first()->title;
    }
    public function subsubcategory($categoryId)
    {
        $subsubcategories = Category::where('parent_id', $categoryId)->with('subcategories')->get();


        if ($subsubcategories->count() < 1)
        {
            $this->subCategoryName = Category::where('id', $categoryId)->first()->title;
            $this->selectedCategory = $categoryId;
        } else {
            $this->subCategoryName = Category::where('id', $categoryId)->first()->title;
            $this->subsubcategories = $subsubcategories;
        }
    }
    public function selectedCategoryId($categoryId)
    {
        $this->subSubCategoryName = Category::where('id', $categoryId)->first()->title;
        $this->selectedCategory = $categoryId;
    }

    public function create($active)
    {
        $this->active = $active;
        $ads = \App\Models\Ads::create([
            'user_id' => Auth::id(),
            'category_id' => $this->selectedCategory,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'address' => $this->address,
            'communication' => $this->communication,
            'active' => $this->active,
            'slug' => Str::slug($this->title),
            'phone' => $this->phone
        ]);

        foreach ($this->images as $image) {
            $imageName = uniqid().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/ads', $imageName);
            $ads->images()->create([
                'image' => $imageName
            ]);
        }
        return redirect()->route('ads', $ads);
    }

    public function mount()
    {
        $this->phone = Auth::user()->phone;
    }

    public function render()
    {
        $this->categories = Category::whereNull('parent_id')->with('subcategories')->get();
        return view('livewire.create-ads')->layout('layouts.create-ads');
    }
}
