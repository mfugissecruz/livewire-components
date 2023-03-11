<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{
    use WithFileUploads;

    /**
     * @var TemporaryUploadedFile
     */
    public  $image = [];
    protected $file_path = 'public/images/';

    public function delete(string $img)
    {
        $file_name = explode('/storage/images/',$img)[1];
        Storage::delete($this->file_path.$file_name);
    }

    public function save()
    {
        $this->validate([
            'image.*' => 'image|max:1024|'
        ]);

        foreach($this->image as $image)
        {
            $image->store($this->file_path);
        }
    }

    public function render()
    {
        return view('livewire.image-upload')
            ->with([
                'images' => collect(Storage::files($this->file_path))
                            ->filter(function($file) {
                                return in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)),
                                ['png', 'jpg', 'jpeg', 'gif', 'webp']);
                            })->map(function($file){
                                return Storage::url($file);
                            }),
            ]);
    }
}
