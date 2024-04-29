<html>
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body>
    <div class="min-h-screen bg-gray-900 flex flex-col  relative mt-0">
    <div class="absolute top-0 left-0 w-full h-full bg-cover bg-center opacity-30"
        style="background-color: gray;">
    </div>
    <div>
    <header class="bg-white border">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <a href="{{ route('users.index') }}" class="text-sm font-semibold leading-6 text-gray-900">Product</a>
      <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
      <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
      <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <!-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log out <span aria-hidden="true">&rarr;</span></a> -->

      <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
    </div>
  </nav>
  
</header>
    <div class="flex justify-center items-center pt-20">
      
    @foreach($users as $user)
    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mx-10">
  <li class="col-span-1 flex flex-col divide-y divide-gray-200 rounded-lg bg-white text-center shadow">
    <div class="flex flex-1 flex-col p-8">
      <img class="mx-auto h-32 w-32 flex-shrink-0 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
      <h3 class="mt-6 text-sm font-medium text-gray-900">{{ $user->name}}</h3>
      <dl class="mt-1 flex flex-grow flex-col justify-between">
        <dt class="sr-only">Title</dt>
        <dd class="text-sm text-gray-500">{{ $user->email}}</dd>
        <dt class="sr-only">Role</dt>
        <dd class="mt-3">
          <span class="inline-flex items-center rounded-full bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Admin</span>
        </dd>
      </dl>
    </div>
    <div>
      <div class="-mt-px flex divide-x divide-gray-200">
        <div class="flex w-0 flex-1">
          <a href="mailto:janecooper@example.com" class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
              <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
            </svg>
            Email
          </a>
        </div>
        <div class="-ml-px flex w-0 flex-1">
          <a href="tel:+1-202-555-0170" class="relative inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-br-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
            </svg>
            Call
          </a>
        </div>
      </div>
    </div>
  </li>

  <!-- More people... -->
</ul>
@endforeach
  
</div>

    </html>
   

