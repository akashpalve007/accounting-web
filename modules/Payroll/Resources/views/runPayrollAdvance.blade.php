<!-- resources/views/payroll.blade.php -->
<x-layouts.admin>
    <x-slot name="title">{{ trans('Payroll') }}</x-slot>

    <x-slot name="content">
        <x-show.container>
            <x-show.content class="flex flex-col mt-5 sm:mt-12 gap-y-4" override="class">
                <!-- Payroll Section with Tabs -->
                <div class="w-full bg-white p-6 border border-gray-200 rounded-lg shadow-sm">
                    <h2 class="text-2xl font-semibold mb-4">Payroll</h2>

                    <!-- Tabs -->
                    <div class="flex border-b mb-4">
                        <a href="#" class="tab-link py-2 px-4 text-blue-600 border-blue-600 border-b-2 font-semibold" data-tab="run-payroll-advanced">Run Payroll Advanced</a>
                        <a href="#" class="tab-link py-2 px-4 text-gray-600" data-tab="pay-item">Pay Item</a>
                    </div>

                    <!-- Run Payroll Advanced Content -->
                    <div id="run-payroll-advanced" class="tab-content">
                        <form action="#" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label for="number_prefix" class="block text-sm font-medium text-gray-700">Number Prefix *</label>
                                    <input type="text" name="number_prefix" id="number_prefix" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="PR-">
                                </div>
                                <div>
                                    <label for="number_digit" class="block text-sm font-medium text-gray-700">Number Digit *</label>
                                    <input type="number" name="number_digit" id="number_digit" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="5">
                                </div>
                                <div>
                                    <label for="next_number" class="block text-sm font-medium text-gray-700">Next Number *</label>
                                    <input type="number" name="next_number" id="next_number" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="4">
                                </div>
                                <div>
                                    <label for="account" class="block text-sm font-medium text-gray-700">Account *</label>
                                    <select name="account" id="account" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="Cash" selected>Cash</option>
                                        <option value="Bank">Bank</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="category" class="block text-sm font-medium text-gray-700">Category *</label>
                                    <select name="category" id="category" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="Other" selected>Other</option>
                                        <option value="Salary">Salary</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="payment_method" class="block text-sm font-medium text-gray-700">Payment Method *</label>
                                    <select name="payment_method" id="payment_method" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="offline-payments.cash.1" selected>offline-payments.cash.1</option>
                                        <option value="offline-payments.check.1">offline-payments.check.1</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Form Buttons -->
                            <div class="flex justify-end">
                                <button type="button" class="bg-gray-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 mr-2">Cancel</button>
                                <button style="background-color:#247bff" type="submit" class="text-white py-2 px-4 rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Save</button>
                            </div>
                        </form>
                    </div>

                    <!-- Pay Item Content -->
                    <div id="pay-item" class="tab-content hidden">
                        <div class="flex justify-end mb-4">
                            <button style="background-color:#247bff" class="text-white py-2 px-4 rounded-md shadow-sm hover:bg-green-700">New Pay Item</button>
                        </div>
                        <table class="min-w-full bg-white border border-gray-200">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b border-gray-200">Pay Type</th>
                                    <th class="py-2 px-4 border-b border-gray-200">Pay Item</th>
                                    <th class="py-2 px-4 border-b border-gray-200">Amount Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200">Benefit</td>
                                    <td class="py-2 px-4 border-b border-gray-200">A Bonus</td>
                                    <td class="py-2 px-4 border-b border-gray-200">Addition</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200">Benefit</td>
                                    <td class="py-2 px-4 border-b border-gray-200">A Commission</td>
                                    <td class="py-2 px-4 border-b border-gray-200">Addition</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200">Benefit</td>
                                    <td class="py-2 px-4 border-b border-gray-200">An Allowance</td>
                                    <td class="py-2 px-4 border-b border-gray-200">Addition</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200">Benefit</td>
                                    <td class="py-2 px-4 border-b border-gray-200">A Benefit</td>
                                    <td class="py-2 px-4 border-b border-gray-200">Addition</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200">Benefit</td>
                                    <td class="py-2 px-4 border-b border-gray-200">A Expense Reimbursement</td>
                                    <td class="py-2 px-4 border-b border-gray-200">Addition</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </x-show.content>
        </x-show.container>
    </x-slot>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var tabLinks = document.querySelectorAll('.tab-link');
            var tabContents = document.querySelectorAll('.tab-content');

            tabLinks.forEach(function (link) {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    var target = this.dataset.tab;

                    tabLinks.forEach(function (link) {
                        link.classList.remove('text-blue-600', 'border-blue-600', 'border-b-2', 'font-semibold');
                        link.classList.add('text-gray-600');
                    });

                    this.classList.add('text-blue-600', 'border-blue-600', 'border-b-2', 'font-semibold');

                    tabContents.forEach(function (content) {
                        content.classList.add('hidden');
                    });

                    document.getElementById(target).classList.remove('hidden');
                });
            });
        });
    </script>
    @endpush

</x-layouts.admin>
