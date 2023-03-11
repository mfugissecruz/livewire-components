<div class="container mx-auto py-16 px-8">
    <div class="mb-4">
        <input type="text" wire:model.lazy="search" placeholder="Search for Products">
    </div>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="py2 px-3 bg-gray border-b-2 text-left">ID</th>
                <th class="py2 px-3 bg-gray border-b-2 text-left">Image</th>
                <th class="py2 px-3 bg-gray border-b-2 text-left">Title</th>
                <th class="py2 px-3 bg-gray border-b-2 text-left">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="py-2 px-3 border-b">{{ $product->id }}</td>
                    <td class="py-2 px-3 border-b"> <img class="w-20" src="{{ $product->image }}" alt=""></td>
                    <td class="py-2 px-3 border-b">{{ $product->title }}</td>
                    <td class="py-2 px-3 border-b">{{ $product->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="my-6">
        {{ $products->links('pagination::tailwind') }}
    </div>
</div>
