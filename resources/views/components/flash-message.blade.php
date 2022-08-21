@if(session->has('message'))
    <div class="fixed top-0 transform bg-laravel left-1/2 -translate-x-1/2 text-white px-48 py-3">
        <p class="text-red-500 text-xs mt-1" >
            {{ session('message') }}
        </p>
    </div>
@endif

