<!-- resources/views/employee_details.blade.php -->
<x-layouts.admin>
    <x-slot name="title">{{ trans('New Pay Calendar') }}</x-slot>

    <x-slot name="content">
        <x-show.container>
            <x-show.content class="flex flex-col lg:flex-row mt-5 sm:mt-12 gap-y-4" override="class">
                <!-- Form Section -->
                <div class="w-full bg-white p-6 border border-gray-200 rounded-lg shadow-sm">
                    <!-- General Information Section -->
                    <h2 class="text-2xl font-semibold mb-4">General</h2>
                    <p class="mb-4 text-gray-600">
                        The pay calendar will be generated in the specified period on the type.
                    </p>
                    <form action="#" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Name *</label>
                                <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="Graphic">
                            </div>
                            <div>
                                <label for="type" class="block text-sm font-medium text-gray-700">Type *</label>
                                <select name="type" id="type" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="Monthly" selected>Monthly</option>
                                    <option value="Weekly">Weekly</option>
                                </select>
                            </div>
                            <div>
                                <label for="pay_day_mode" class="block text-sm font-medium text-gray-700">Pay Day Mode *</label>
                                <select name="pay_day_mode" id="pay_day_mode" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="Specific day each month" selected>Specific day each month</option>
                                    <option value="End of month">End of month</option>
                                </select>
                            </div>
                            <div>
                                <label for="pay_day" class="block text-sm font-medium text-gray-700">Pay Day (1-31) *</label>
                                <input type="number" name="pay_day" id="pay_day" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="31" min="1" max="31">
                            </div>
                        </div>

                        <!-- Employee Selection Section -->
                        <h2 class="text-2xl font-semibold mb-4">Employees</h2>
                        <p class="mb-4 text-gray-600">
                            The pay calendar will be generated for selected employees.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                            <div>
                                <input type="checkbox" name="employees[]" id="employee1" value="Baran" class="mr-2 leading-tight" checked>
                                <label for="employee1" class="text-sm font-medium text-gray-700">Baran</label>
                            </div>
                            <div>
                                <input type="checkbox" name="employees[]" id="employee2" value="Dilara" class="mr-2 leading-tight">
                                <label for="employee2" class="text-sm font-medium text-gray-700">Dilara</label>
                            </div>
                            <div>
                                <input type="checkbox" name="employees[]" id="employee3" value="Eda" class="mr-2 leading-tight">
                                <label for="employee3" class="text-sm font-medium text-gray-700">Eda</label>
                            </div>
                            <div>
                                <input type="checkbox" name="employees[]" id="employee4" value="Sam" class="mr-2 leading-tight" checked>
                                <label for="employee4" class="text-sm font-medium text-gray-700">Sam</label>
                            </div>
                        </div>

                        <!-- Form Buttons -->
                        <div class="flex justify-end">
                            <button type="button" class="bg-gray-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 mr-2">Cancel</button>
                            <button style="background-color:#247bff" type="submit" class="text-white py-2 px-4 rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Save</button>
                        </div>
                    </form>
                </div>
            </x-show.content>
        </x-show.container>
    </x-slot>
</x-layouts.admin>
