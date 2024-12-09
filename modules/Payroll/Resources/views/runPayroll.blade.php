<!-- resources/views/run_payrolls.blade.php -->
<x-layouts.admin>
    <x-slot name="title">{{ trans('Run Payrolls') }}</x-slot>

    <x-slot name="content">
        <x-show.container>
            <x-show.content class="flex flex-col mt-5 sm:mt-12 gap-y-4" override="class">
                <!-- Run Payrolls Section -->
                <div class="w-full bg-white p-6 border border-gray-200 rounded-lg shadow-sm">
                    <h2 class="text-2xl font-semibold mb-4">Run Payrolls</h2>

                    <!-- Import/Export Buttons -->
                    <div class="flex justify-end mb-4">
                        <button class="bg-gray-200 text-gray-700 py-2 px-4 rounded-md shadow-sm mr-2 hover:bg-gray-300">Import</button>
                        <button class="bg-gray-200 text-gray-700 py-2 px-4 rounded-md shadow-sm hover:bg-gray-300">Export</button>
                    </div>

                    <!-- Search Bar -->
                    <div class="mb-4">
                        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Search or filter results...">
                    </div>

                    <!-- Payrolls Table -->
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b border-gray-200">
                                    <input type="checkbox" class="form-checkbox">
                                </th>
                                <th class="py-2 px-4 border-b border-gray-200">Payment Date <br> Number</th>
                                <th class="py-2 px-4 border-b border-gray-200">From Date <br> To Date</th>
                                <th class="py-2 px-4 border-b border-gray-200">Employees</th>
                                <th class="py-2 px-4 border-b border-gray-200">Status</th>
                                <th class="py-2 px-4 border-b border-gray-200">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    <input type="checkbox" class="form-checkbox">
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    <span>10 Jun 2022</span><br>
                                    <span>PR-00005</span>
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    <span>12 May 2022</span><br>
                                    <span>08 Jun 2022</span>
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">2</td>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    <span class="text-green-600">Approved</span>
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">$2,312.45</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    <input type="checkbox" class="form-checkbox">
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    <span>31 May 2022</span><br>
                                    <span>PR-00003</span>
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    <span>27 May 2022</span><br>
                                    <span>28 May 2022</span>
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">1</td>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    <span class="text-green-600">Approved</span>
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">$0.00</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    <input type="checkbox" class="form-checkbox">
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    <span>30 May 2022</span><br>
                                    <span>PR-00002</span>
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    <span>27 May 2022</span><br>
                                    <span>31 May 2022</span>
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">2</td>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    <span class="text-green-600">Approved</span>
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">$1,800.00</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    <input type="checkbox" class="form-checkbox">
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    <span>30 May 2022</span><br>
                                    <span>PR-00004</span>
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    <span>30 May 2022</span><br>
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">1</td>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    <span class="text-red-600">Not Approved</span>
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">$0.00</td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="mt-4">
                        <span class="text-sm text-gray-600">25 per page. 1-4 of 4 records.</span>
                    </div>
                </div>
            </x-show.content>
        </x-show.container>
    </x-slot>
</x-layouts.admin>
