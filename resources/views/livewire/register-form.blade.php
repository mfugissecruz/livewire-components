<form 
    wire:submit.prevent="submit"
    class="w-[400px] mx-auto py-16"
>
    @if (session()->has('message'))
        <div
            x-data
            x-transition
            class="bg-emerald-500 text-white py-3 px-4 mb-4"
        >
            {{ session('message') }}
        </div>
    @endif

    <div class="flex gap-4 mb-4">
        <label>
            <input 
                type="radio"
                value="customer"
                name="role"
                wire:model="role"
            >
            Customer
        </label>

        <label>
            <input 
                type="radio"
                value="vendor"
                name="role"
                wire:model="role"
            >
            Vendor
        </label>
    </div>

    <div class="mb-4">
        <input 
            wire:model.debounce.500ms="first_name"
            type="text" placeholder="First Name"
            class="w-full borde @error('first_name') border-red-600 @enderror" 
        />
        <span class="text-red-600">@error('first_name') {{ $message }} @enderror</span>
    </div>

    <div class="mb-4">
        <input 
            wire:model.debounce.500ms="last_name"
            type="text"placeholder="Last Name"
            class="w-full borde @error('last_name') border-red-600 @enderror" 
        />
        <span class="text-red-600">@error('last_name') {{ $message }} @enderror</span>
    </div>

    <div class="mb-4">
        <input 
            wire:model.debounce.500ms="email"
            type="email" placeholder="Email"
            class="w-full borde @error('email') border-red-600 @enderror"
        />
        <span class="text-red-600">@error('email') {{ $message }} @enderror</span>
    </div>

    <div class="mb-4">
        <input 
            wire:model.debounce.500ms="password"
            type="password" placeholder="Password"
            class="w-full borde @error('password') border-red-600 @enderror"
        />
        <span class="text-red-600">@error('password') {{ $message }} @enderror</span>
    </div>


    @if($role === 'vendor')
        <div class="mb-4">
            <input 
                wire:model.debounce.500ms="company_name"
                type="text" placeholder="Company Name"
                class="w-full borde @error('company_name') border-red-600 @enderror"
            />
            <span class="text-red-600">@error('company_name') {{ $message }} @enderror</span>
        </div>

        <div class="mb-4">
            <input 
                wire:model.debounce.500ms="vat_number"
                type="text" placeholder="Vat Number"
                class="w-full borde @error('vat_number') border-red-600 @enderror"
            />
            <span class="text-red-600">@error('vat_number') {{ $message }} @enderror</span>
        </div>
    @endif

    <button 
        type="submit" 
        class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white"
    >
        Submit
    </button>
</form>
