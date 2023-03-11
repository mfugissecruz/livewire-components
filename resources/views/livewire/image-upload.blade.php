<div class="p-6">
    <form wire:submit.prevent="save" class="flex flex-col w-[400px] mx-auto py-16">
        @if($image)
            Preview:
            <div class="flex flex-wrap justify-center gap-6">
                @foreach ($image as $img)
                    <img src="{{ $img->temporaryUrl() }}" class="w-[110px] h-[90px] object-cover"/>
                @endforeach
            </div>
        @endif
        <input type="file" wire:model="image" class="mb-4" multiple />
        @error('image')
            <span class="error">{{ $message }}</span>
        @enderror

        <button type="submit" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">
            Save Photo(s)
        </button>
    </form>

    <div class="flex flex-wrap gap-7">
        @foreach ($images as $image)
            <div class="relative">
                <img src="{{ $image }}" class="w-[128px] h-[120px] object-cover" />
                <button 
                    wire:click="delete('{{ $image }}')" 
                    class="absolute top-1 right-1 bg-zinc-900 bg-opacity-60 w-7 h-7 text-red-600 p-1.5 rounded-full flex items-center justify-center text-xl font-bold"
                >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </button>
            </div>
        @endforeach
    </div>
</divc>