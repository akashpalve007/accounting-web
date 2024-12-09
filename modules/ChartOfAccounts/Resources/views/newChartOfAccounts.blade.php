<!-- resources/views/new_account.blade.php -->
<x-layouts.admin>
    <x-slot name="title">{{ trans('New Account') }}</x-slot>

    <x-slot name="content">
        <x-show.container>
            <x-show.content class="flex flex-col mt-5 sm:mt-12 gap-y-4" override="class">
                <!-- New Account Form -->
                <div class="w-full bg-white p-6 border border-gray-200 rounded-lg shadow-sm">
                    <h2 class="text-2xl font-semibold mb-4">New Account</h2>
                    <form id="newAccountForm" action="#" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="flex items-center space-x-3">
                                <span class="text-gray-700">General</span>
                                <input type="checkbox" class="toggle-checkbox" checked>
                            </label>
                            <p class="text-gray-500">Here you can enter all information related to a chart of account.</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Name *</label>
                                <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter Name" required>
                            </div>
                            <div>
                                <label for="code" class="block text-sm font-medium text-gray-700">Code *</label>
                                <input type="text" name="code" id="code" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter Code" required>
                            </div>
                            <div>
                                <label for="type" class="block text-sm font-medium text-gray-700">Type *</label>
                                <select name="type" id="type" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    <option value="" disabled selected>- Select Type -</option>
                                    <!-- Add options here -->
                                </select>
                            </div>
                            <div class="flex items-center space-x-3">
                                <label for="is_sub_account" class="block text-sm font-medium text-gray-700">Is Sub-Account?</label>
                                <div class="flex space-x-2">
                                    <button type="button" id="subAccountYes" class="bg-green-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Yes</button>
                                    <button type="button" id="subAccountNo" class="bg-red-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">No</button>
                                </div>
                            </div>
                            <div>
                                <label for="parent_account" class="block text-sm font-medium text-gray-700">Parent Account</label>
                                <select name="parent_account" id="parent_account" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" disabled>
                                    <option value="" disabled selected>- Select Parent Account -</option>
                                    <!-- Add options here -->
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter Description"></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="button" id="cancelBtn" class="bg-gray-500 text-white px-4 py-2 rounded mr-2 hover:bg-gray-600">Cancel</button>
                            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Save</button>
                        </div>
                    </form>
                </div>
            </x-show.content>
        </x-show.container>
    </x-slot>

    @push('scripts')
    <script>
        document.getElementById('subAccountYes').addEventListener('click', function() {
            document.getElementById('parent_account').disabled = false;
            document.getElementById('subAccountYes').classList.add('bg-green-600');
            document.getElementById('subAccountNo').classList.remove('bg-red-600');
        });

        document.getElementById('subAccountNo').addEventListener('click', function() {
            document.getElementById('parent_account').disabled = true;
            document.getElementById('subAccountYes').classList.remove('bg-green-600');
            document.getElementById('subAccountNo').classList.add('bg-red-600');
        });

        document.getElementById('cancelBtn').addEventListener('click', function() {
            // Add logic to handle cancel action
        });
    </script>
    @endpush
</x-layouts.admin>
