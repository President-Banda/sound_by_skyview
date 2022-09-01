<x-app>
    <x-card class="p-10">
        <header>
            <h1
                class="text-3xl text-center font-bold my-6 uppercase"
            >
                Manage Gigs
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
            @unless($listings->isEmpty())
                @foreach($listings as $listing)
            <tr class="border-gray-300">
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <a href=" ">
                        {{ $listing->title }}
                    </a>
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <a
                        href="{{ route('listings.edit', $listing) }}"
                        class="text-blue-400 px-6 py-2 rounded-xl"
                    ><i
                            class="fa-solid fa-pen-to-square"
                        ></i>
                        Edit</a
                    >
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <form action="{{ route('listings.delete', $listing->id) }}" method="post" role="form">
                        @csrf
                        @method('delete')
                        <button type="submit" class="bg-laravel text-white m-2 py-2 rounded-xl hover:opacity-80">
                            <i class="fa-solid fa-trash"></i> Delete
                    </form>
                </td>
            </tr>
              @endforeach
                @else
                <tr>
                    <td colspan="3" class="text-center">
                        <p class="text-gray-500">
                            You have no listings
                        </p>
                    </td>
                </tr>
                @endunless
            </tbody>
        </table>
    </x-card>
</x-app>
