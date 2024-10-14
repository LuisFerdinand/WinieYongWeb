<!-- resources/views/dashboard/users/index.blade.php -->

@extends('layouts.dashboard')

@section('content')
<div class="max-w-7xl mx-auto py-10 px-6">
    <h2 class="text-3xl font-bold mb-6 text-gray-800">User Management</h2>

    <!-- Success Message -->
    @if (session('success'))
    <div class="bg-green-500 text-white p-4 rounded mb-6 shadow-lg">
        {{ session('success') }}
    </div>
    @endif

    <!-- Error Message -->
    @if (session('error'))
    <div class="bg-red-500 text-white p-4 rounded mb-6 shadow-lg">
        {{ session('error') }}
    </div>
    @endif

    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-100">
                <tr class="text-left">
                    <th class="px-4 py-3 text-gray-600 text-lg">Name</th>
                    <th class="px-4 py-3 text-gray-600 text-lg">Email</th>
                    <th class="px-4 py-3 text-gray-600 text-lg">Role</th>
                    <th class="px-4 py-3 text-gray-600 text-lg">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($users as $user)
                <tr class="hover:bg-gray-50 transition duration-200">
                    <td class="px-4 py-3 text-gray-800">{{ $user->name }}</td>
                    <td class="px-4 py-3 text-gray-800">{{ $user->email }}</td>
                    <td class="px-4 py-3">
                        <form method="POST" action="{{ route('users.updateRole', $user->id) }}" class="flex items-center">
                            @csrf
                            <select name="role" class="border border-gray-300 rounded p-2 mr-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
                                <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">Update</button>
                        </form>
                    </td>
                    <td class="px-4 py-3">
                        <!-- Delete Button -->
                        <form method="POST" action="{{ route('users.destroy', $user->id) }}" onsubmit="return confirmDelete();" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-200 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- JavaScript for Confirmation Prompt -->
<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this user? This action cannot be undone.');
    }
</script>
@endsection