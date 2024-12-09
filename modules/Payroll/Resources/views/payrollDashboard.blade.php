<!-- resources/views/employee_details.blade.php -->
<x-layouts.admin>
    <x-slot name="title">{{ trans('Payroll Dashboard') }}</x-slot>

    <x-slot name="content">
        <x-show.container>
            <x-show.content class="flex flex-col-reverse lg:flex-row mt-5 sm:mt-12 gap-y-4" override="class">
                <div class="container mx-auto p-4">
                    <!-- <h1 class="text-2xl font-bold">Employee Details</h1> -->
                    
                    <!-- Latest 5 Pay Run Records -->
                    <div class="my-2">
                        <h2 class="text-xl font-semibold mb-4">Latest 5 Pay Run Records</h2>
                        <table class="min-w-full bg-white border border-gray-200">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b border-gray-200">Name</th>
                                    <th class="py-2 px-4 border-b border-gray-200">From Date</th>
                                    <th class="py-2 px-4 border-b border-gray-200">Status</th>
                                    <th class="py-2 px-4 border-b border-gray-200">Employees</th>
                                    <th class="py-2 px-4 border-b border-gray-200">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200">
                                        <span class="font-bold">PR-00002</span><br>
                                        <span>30 May 2022</span>
                                    </td>
                                    <td class="py-2 px-4 border-b border-gray-200">
                                        <span>27 May 2022</span> - <span>31 May 2022</span>
                                    </td>
                                    <td class="py-2 px-4 border-b border-gray-200">
                                        <span class="text-green-600">Approved</span>
                                    </td>
                                    <td class="py-2 px-4 border-b border-gray-200">2</td>
                                    <td class="py-2 px-4 border-b border-gray-200">$1,800.00</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200">
                                        <span class="font-bold">PR-00003</span><br>
                                        <span>31 May 2022</span>
                                    </td>
                                    <td class="py-2 px-4 border-b border-gray-200">
                                        <span>27 May 2022</span> - <span>28 May 2022</span>
                                    </td>
                                    <td class="py-2 px-4 border-b border-gray-200">
                                        <span class="text-green-600">Approved</span>
                                    </td>
                                    <td class="py-2 px-4 border-b border-gray-200">1</td>
                                    <td class="py-2 px-4 border-b border-gray-200">$0.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Payroll History -->
                    <div>
                        <h2 class="text-xl font-semibold mb-4">Payroll History</h2>
                        <p class="mb-4">Cash coming in and going out of your business</p>
                        <div>
                            <canvas id="payrollHistoryChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class=""></div>
            </x-show.content>
        </x-show.container>
    </x-slot>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('payrollHistoryChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['May 1', 'May 2', 'May 3', 'May 4', 'May 5', 'May 6', 'May 7'],
                    datasets: [{
                        label: 'Outgoing',
                        backgroundColor: '#247bff',
                        borderColor: '#247bff',
                        data: [0, 0, 0, 0, 0, 1800, 0]
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
    @endpush

</x-layouts.admin>
