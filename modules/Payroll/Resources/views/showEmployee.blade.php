<!-- resources/views/employee_details.blade.php -->
<x-layouts.admin>
    <x-slot name="title">{{ trans('Employee Details') }}</x-slot>

    <x-slot name="content">
        <x-show.container>
            <x-show.content class="flex flex-col lg:flex-row mt-5 sm:mt-12 gap-y-4" override="class">
                <!-- Left Section: Employee Details -->
                <div class="w-full lg:w-1/3 bg-white p-4 border border-gray-200 rounded-lg shadow-sm">
                    <div class="text-center mb-4">
                        <div class="w-24 h-24 bg-gray-200 rounded-full mx-auto"></div>
                        <h2 class="text-lg font-semibold mt-2">purine.marked0@icloud.com</h2>
                    </div>
                    <div class="space-y-2">
                        <p><strong>Birth Day:</strong> 31 Mar 2001</p>
                        <p><strong>Gender:</strong> male</p>
                        <p><strong>Department:</strong> Graphic</p>
                        <p><strong>Address:</strong> Türkiye/İstanbul/Bakırköy<br>İstanbul, 340000, Bakırköy, Turkey</p>
                    </div>
                </div>

                <!-- Right Section: Payroll and Assets Information -->
                <div class="w-full lg:w-2/3 bg-white p-4 border border-gray-200 rounded-lg shadow-sm">
                    <!-- Tabs -->
                    <div class="flex border-b mb-4">
                        <a href="#" class="tab-link py-2 px-4 text-blue-600 border-blue-600 border-b-2 font-semibold" data-tab="payroll">Payroll</a>
                        <a href="#" class="tab-link py-2 px-4 text-gray-600" data-tab="assets">Assets</a>
                    </div>

                    <!-- Payroll Content -->
                    <div id="payroll" class="tab-content">
                        <!-- Total Payments, Benefits, Deductions -->
                        <div class="flex justify-around mb-8">
                            <div class="text-center">
                                <h3 class="text-xl font-bold">$1,000.00</h3>
                                <p>Total Payments</p>
                            </div>
                            <div class="text-center">
                                <h3 class="text-xl font-bold">$0.00</h3>
                                <p>Total Benefit</p>
                            </div>
                            <div class="text-center">
                                <h3 class="text-xl font-bold">$0.00</h3>
                                <p>Total Deduction</p>
                            </div>
                        </div>

                        <!-- Payment History -->
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold mb-4">Payment History</h2>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 border-b border-gray-200">Date</th>
                                        <th class="py-2 px-4 border-b border-gray-200">Name</th>
                                        <th class="py-2 px-4 border-b border-gray-200">Total Benefit</th>
                                        <th class="py-2 px-4 border-b border-gray-200">Total Deduction</th>
                                        <th class="py-2 px-4 border-b border-gray-200">Salary</th>
                                        <th class="py-2 px-4 border-b border-gray-200">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-2 px-4 border-b border-gray-200">30 May 2022</td>
                                        <td class="py-2 px-4 border-b border-gray-200">PR-00002</td>
                                        <td class="py-2 px-4 border-b border-gray-200">$0.00</td>
                                        <td class="py-2 px-4 border-b border-gray-200">$0.00</td>
                                        <td class="py-2 px-4 border-b border-gray-200">$1,000.00</td>
                                        <td class="py-2 px-4 border-b border-gray-200">$1,000.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Benefit and Deduction -->
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <h3 class="text-lg font-semibold mb-2">Benefit</h3>
                                <button style="background-color:#247bff" class="mb-2 text-white py-1 px-4 rounded">Add New</button>
                                <table class="min-w-full bg-white border border-gray-200">
                                    <thead>
                                        <tr>
                                            <th class="py-2 px-4 border-b border-gray-200">Type</th>
                                            <th class="py-2 px-4 border-b border-gray-200">Recurring</th>
                                            <th class="py-2 px-4 border-b border-gray-200">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="py-2 px-4 border-b border-gray-200">A Benefit</td>
                                            <td class="py-2 px-4 border-b border-gray-200">Every M...</td>
                                            <td class="py-2 px-4 border-b border-gray-200">$512.45</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-2">Deduction</h3>
                                <button style="background-color:#247bff" class="mb-2 text-white py-1 px-4 rounded">Add New</button>
                                <p>No records.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Assets Content -->
                    <div id="assets" class="tab-content hidden">
                        <p>No Data Available</p>
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

