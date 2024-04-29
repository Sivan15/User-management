
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Purchase</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
@include('layouts.navbar')

<div class="flex justify-center items-center">
<div class="mx-10">
<h1 class="text-3xl font-bold mb-8">User Creation</h1>

<div class="px-4 sm:px-6 lg:px-8">
  <div class="sm:flex sm:items-center">
    <div class="sm:flex-auto">
      <h1 class="text-base font-semibold leading-6 text-gray-900">Users</h1>
      <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name, title, email and role.</p>
    </div>
    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
         <a href="{{ route('users.create') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add user</a>
    </div>
  </div>
  <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle">
        <table class="min-w-full divide-y divide-gray-300">
          <thead>
            <tr>
              <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:pl-8">S.No</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Name</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Mobile</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Image</th>
              <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6 lg:pr-8">
                <span class="sr-only">Edit</span>
              </th>
              <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6 lg:pr-8">
                <span class="sr-only">Delete</span>
              </th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 bg-white">
          @foreach($users as $user)
            <tr>
              <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">{{ $user->id }}</td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $user->name }}</td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $user->email }}</td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $user->mobile }}</td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $user->image }}</td>
              <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 lg:pr-8">
              <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
              </td>
              <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 lg:pr-8">
<form action="{{ route('users.delete', $user->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
              </td>
            </tr>
            @endforeach
            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


</div>
</div>
</body>
</html>