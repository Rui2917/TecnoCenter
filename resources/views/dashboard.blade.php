<x-guest-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Welcome Message -->
            <div class="bg-white shadow sm:rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900">Welcome back, {{ Auth::user()->name }}!</h3>
                <p class="mt-2 text-sm text-gray-600">Here’s a quick overview of your account.</p>
            </div>

            <!-- Quick Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-blue-100 p-6 rounded-lg shadow text-center">
                    <div class="text-2xl font-bold text-blue-700">12</div>
                    <div class="text-gray-700 mt-2">New Messages</div>
                </div>
                <div class="bg-green-100 p-6 rounded-lg shadow text-center">
                    <div class="text-2xl font-bold text-green-700">5</div>
                    <div class="text-gray-700 mt-2">Tasks Completed</div>
                </div>
                <div class="bg-yellow-100 p-6 rounded-lg shadow text-center">
                    <div class="text-2xl font-bold text-yellow-700">3</div>
                    <div class="text-gray-700 mt-2">Pending Approvals</div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white shadow sm:rounded-lg p-6">
                <h4 class="text-md font-semibold text-gray-800 mb-4">Recent Activity</h4>
                <ul class="divide-y divide-gray-200">
                    <li class="py-2">You completed the task <span class="font-semibold">"Update Profile"</span>.</li>
                    <li class="py-2">New message from <span class="font-semibold">Admin</span>.</li>
                    <li class="py-2">You approved a request.</li>
                </ul>
            </div>
        </div>
    </div>
</x-guest-layout>
