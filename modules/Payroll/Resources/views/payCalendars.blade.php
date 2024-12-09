<!-- resources/views/pay_calendars.blade.php -->
<x-layouts.admin>
    <x-slot name="title">{{ trans('Pay Calendars') }}</x-slot>

    <x-slot name="content">
        <x-show.container>
            <x-show.content class="flex flex-col lg:flex-row mt-5 sm:mt-12 gap-y-4" override="class">
                <!-- Main Section -->
                <div class="w-full bg-white p-6 border border-gray-200 rounded-lg shadow-sm">
                    <!-- Header Section with Button -->
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-semibold">Pay Calendars</h2>
                        <button style="background-color:#247bff" type="button" class="text-white py-2 px-4 rounded-md shadow-sm">New Pay Calendar</button>
                    </div>
                    <!-- Search Section -->
                    <div class="flex justify-between items-center mb-4">
                        <input type="text" placeholder="Search or filter results.." class="form-input mt-1 block w-full">
                    </div>
                    <!-- Table Section -->
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    <input type="checkbox" class="form-checkbox">
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pay Day Mode</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="checkbox" class="form-checkbox">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">Graphic</td>
                                <td class="px-6 py-4 whitespace-nowrap">Weekly</td>
                                <td class="px-6 py-4 whitespace-nowrap">Monday</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="checkbox" class="form-checkbox">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">Marketing</td>
                                <td class="px-6 py-4 whitespace-nowrap">Monthly</td>
                                <td class="px-6 py-4 whitespace-nowrap">Last working day of the month</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Pagination Section -->
                    <div class="py-2">
                        <div class="text-sm text-gray-700">
                            25 per page. 1-2 of 2 records.
                        </div>
                    </div>
                </div>
            </x-show.content>
        </x-show.container>
    </x-slot>
</x-layouts.admin>
