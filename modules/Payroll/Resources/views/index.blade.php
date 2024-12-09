<!-- resources/views/payroll.blade.php -->
<x-layouts.admin> 
    <x-slot name="title">{{ trans('Payroll') }}</x-slot>

    <x-slot name="favorite"
            title="Payroll"
            icon="credit_card"
            route="offline-payments.settings.edit"
    ></x-slot>

    <x-slot name="content">
        <x-show.container>
            <x-show.content class="flex flex-col-reverse lg:flex-row mt-5 sm:mt-12 gap-y-4" override="class">
            
            <div class="container mx-auto p-4">
                <div class="flex justify-between items-center mb-4">
                    <div class="relative">
                        <input type="text" id="searchInput" placeholder="Search or filter results.." class="px-4 py-2 border border-gray-300 rounded-full w-full pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <svg class="w-5 h-5 text-gray-500 absolute left-3 top-1/2 transform -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m1.95-2.65a7 7 0 10-14 0 7 7 0 0014 0z" />
                        </svg>
                    </div>
                    <button style="background-color:#247bff;" id="newEmployeeBtn" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">New Employee</button>
                </div>
                <table class="min-w-full">
                    <thead class="border-b">
                        <tr>
                            <th class="p-3 text-left">
                                <input type="checkbox" class="form-checkbox">
                            </th>
                            <th class="p-3 text-left">Name</th>
                            <th class="p-3 text-left">Email</th>
                            <th class="p-3 text-left">Department</th>
                            <th class="p-3 text-left">Hire Date</th>
                        </tr>
                    </thead>
                    <tbody id="employeeTable">
                        <tr class="border-b">
                            <td class="p-3">
                                <input type="checkbox" class="form-checkbox">
                            </td>
                            <td class="p-3">Baran</td>
                            <td class="p-3">purine.marked0@icloud.com</td>
                            <td class="p-3">Graphic</td>
                            <td class="p-3">25 May 2022</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3">
                                <input type="checkbox" class="form-checkbox">
                            </td>
                            <td class="p-3">Dilara</td>
                            <td class="p-3">purine.marked0@icloud.com</td>
                            <td class="p-3">Graphic</td>
                            <td class="p-3">25 May 2022</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3">
                                <input type="checkbox" class="form-checkbox">
                            </td>
                            <td class="p-3">Eda</td>
                            <td class="p-3">purine.marked0@icloud.com</td>
                            <td class="p-3">Marketing</td>
                            <td class="p-3">25 May 2022</td>
                        </tr>
                    </tbody>
                </table>
                <p id="noResults" class="text-center text-gray-500 mt-4 hidden">No results found</p>
            </div>

            <!-- Script -->
            <script>
                document.getElementById('newEmployeeBtn').addEventListener('click', function() {
                    window.location.href = 'http://localhost/akaunting/1/payroll/new-employee';
                });

                document.getElementById('searchInput').addEventListener('keyup', function() {
                    var filter = this.value.toLowerCase();
                    var rows = document.querySelectorAll('#employeeTable tr');
                    var noResults = document.getElementById('noResults');
                    var visibleRowCount = 0;

                    rows.forEach(function(row) {
                        var name = row.cells[1].textContent.toLowerCase();
                        var email = row.cells[2].textContent.toLowerCase();
                        var department = row.cells[3].textContent.toLowerCase();

                        if (name.includes(filter) || email.includes(filter) || department.includes(filter)) {
                            row.style.display = '';
                            visibleRowCount++;
                        } else {
                            row.style.display = 'none';
                        }
                    });

                    if (visibleRowCount === 0) {
                        noResults.classList.remove('hidden');
                    } else {
                        noResults.classList.add('hidden');
                    }
                });
            </script>

            </x-show.content>
        </x-show.container>
    </x-slot>
</x-layouts.admin>
