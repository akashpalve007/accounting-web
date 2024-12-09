<!-- resources/views/employee_details.blade.php -->
<x-layouts.admin>
    <x-slot name="title">{{ trans('Employee Details') }}</x-slot>

    <x-slot name="content">
        <x-show.container>
            <x-show.content class="flex flex-col lg:flex-row mt-5 sm:mt-12 gap-y-4" override="class">
                <!-- Main Section -->
                <div class="w-full bg-white p-6 border border-gray-200 rounded-lg shadow-sm">
                    <!-- Header Section with Button -->
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-semibold">Employee Details</h2>
                        <button type="button" class="bg-[#247bff] text-white py-2 px-4 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">New Pay Calendar</button>
                    </div>
                    <!-- Search and Filter Section -->
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-700">Financial Year</span>
                            <select class="form-select mt-1 block w-24">
                                <option value="2022" selected>2022</option>
                                <option value="2021">2021</option>
                            </select>
                        </div>
                        <input type="text" placeholder="Search or filter results.." class="form-input mt-1 block w-full ml-4">
                    </div>
                    <!-- Table Section -->
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Employee</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Salary</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Benefit</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Benefit</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Deduction</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Deduction</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">Baran</td>
                                <td class="px-6 py-4 whitespace-nowrap">$2,000.00</td>
                                <td class="px-6 py-4 whitespace-nowrap">A Benefit</td>
                                <td class="px-6 py-4 whitespace-nowrap">$512.45</td>
                                <td class="px-6 py-4 whitespace-nowrap">$0.00</td>
                                <td class="px-6 py-4 whitespace-nowrap">$0.00</td>
                                <td class="px-6 py-4 whitespace-nowrap">$2,512.45</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">Dilara</td>
                                <td class="px-6 py-4 whitespace-nowrap">$1,600.00</td>
                                <td class="px-6 py-4 whitespace-nowrap">$0.00</td>
                                <td class="px-6 py-4 whitespace-nowrap">$0.00</td>
                                <td class="px-6 py-4 whitespace-nowrap">$0.00</td>
                                <td class="px-6 py-4 whitespace-nowrap">$0.00</td>
                                <td class="px-6 py-4 whitespace-nowrap">$1,600.00</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">TOTAL</td>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">$3,600.00</td>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">$512.45</td>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">$512.45</td>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">$0.00</td>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">$0.00</td>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">$4,112.45</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </x-show.content>
        </x-show.container>
    </x-slot>
</x-layouts.admin>
