<!-- resources/views/new_run_payroll.blade.php -->
<x-layouts.admin>
    <x-slot name="title">{{ trans('New Run Payroll') }}</x-slot>

    <x-slot name="content">
        <x-show.container>
            <x-show.content class="flex flex-col mt-5 sm:mt-12 gap-y-4" override="class">
                <!-- Stepper Navigation -->
                <div class="w-full bg-white p-6 border border-gray-200 rounded-lg shadow-sm">
                    <h2 class="text-2xl font-semibold mb-4">New Run Payroll</h2>
                    <div class="flex mb-4">
                        <div class="stepper-tab py-2 px-4 text-blue-600 border-b-2 font-semibold" data-step="1">Employees</div>
                        <div class="stepper-tab py-2 px-4 text-gray-600 border-b-2" data-step="2">Variable Input</div>
                        <div class="stepper-tab py-2 px-4 text-gray-600 border-b-2" data-step="3">PaySlips</div>
                        <div class="stepper-tab py-2 px-4 text-gray-600 border-b-2" data-step="4">Approval</div>
                        <div class="stepper-tab py-2 px-4 text-gray-600 border-b-2" data-step="5">Attachments</div>
                    </div>

                    <!-- Step 1: Employees -->
                    <div class="step-content" id="step-1">
                        <form id="form-step-1">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label for="from_date" class="block text-sm font-medium text-gray-700">From Date *</label>
                                    <input type="date" name="from_date" id="from_date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                </div>
                                <div>
                                    <label for="to_date" class="block text-sm font-medium text-gray-700">To Date *</label>
                                    <input type="date" name="to_date" id="to_date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                </div>
                                <div>
                                    <label for="payment_date" class="block text-sm font-medium text-gray-700">Payment Date *</label>
                                    <input type="date" name="payment_date" id="payment_date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <button type="button" class="bg-green-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-green-700" onclick="nextStep(1)">Next</button>
                            </div>
                        </form>
                    </div>

                    <!-- Step 2: Variable Input -->
                    <div class="step-content hidden" id="step-2">
                        <form id="form-step-2">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label for="employee" class="block text-sm font-medium text-gray-700">Employee</label>
                                    <select name="employee" id="employee" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                        <option value="Baran" selected>Baran</option>
                                        <option value="Dilara">Dilara</option>
                                    </select>
                                </div>
                                <!-- Additional fields for variable input here -->
                            </div>
                            <div class="mb-4">
                                <button type="button" class="bg-gray-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-gray-700" onclick="prevStep(2)">Previous</button>
                                <button type="button" class="bg-green-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-green-700" onclick="nextStep(2)">Next</button>
                            </div>
                        </form>
                    </div>

                    <!-- Step 3: PaySlips -->
                    <div class="step-content hidden" id="step-3">
                        <form id="form-step-3">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label for="employee_payslip" class="block text-sm font-medium text-gray-700">Employee</label>
                                    <select name="employee_payslip" id="employee_payslip" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                        <option value="Baran" selected>Baran</option>
                                        <option value="Dilara">Dilara</option>
                                    </select>
                                </div>
                                <!-- Additional fields for payslips here -->
                            </div>
                            <div class="mb-4">
                                <button type="button" class="bg-gray-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-gray-700" onclick="prevStep(3)">Previous</button>
                                <button type="button" class="bg-green-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-green-700" onclick="nextStep(3)">Next</button>
                            </div>
                        </form>
                    </div>

                    <!-- Step 4: Approval -->
                    <div class="step-content hidden" id="step-4">
                        <form id="form-step-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label for="approval_payment_date" class="block text-sm font-medium text-gray-700">Payment Date *</label>
                                    <input type="date" name="approval_payment_date" id="approval_payment_date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                </div>
                                <!-- Additional fields for approval here -->
                            </div>
                            <div class="mb-4">
                                <button type="button" class="bg-gray-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-gray-700" onclick="prevStep(4)">Previous</button>
                                <button type="button" class="bg-green-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-green-700" onclick="nextStep(4)">Next</button>
                            </div>
                        </form>
                    </div>

                    <!-- Step 5: Attachments -->
                    <div class="step-content hidden" id="step-5">
                        <form id="form-step-5">
                            <!-- Attachment fields here -->
                            <div class="mb-4">
                                <button type="button" class="bg-gray-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-gray-700" onclick="prevStep(5)">Previous</button>
                                <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-green-700">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </x-show.content>
        </x-show.container>
    </x-slot>

    @push('scripts')
    <script>
        function showStep(step) {
            document.querySelectorAll('.stepper-tab').forEach(tab => {
                tab.classList.remove('text-blue-600', 'border-blue-600', 'border-b-2', 'font-semibold');
                tab.classList.add('text-gray-600');
            });
            document.querySelector(`.stepper-tab[data-step="${step}"]`).classList.add('text-blue-600', 'border-blue-600', 'border-b-2', 'font-semibold');

            document.querySelectorAll('.step-content').forEach(content => {
                content.classList.add('hidden');
            });
            document.getElementById(`step-${step}`).classList.remove('hidden');
        }

        function validateStep(step) {
            const form = document.getElementById(`form-step-${step}`);
            return form.checkValidity();
        }

        function nextStep(currentStep) {
            if (validateStep(currentStep)) {
                showStep(currentStep + 1);
            } else {
                alert('Please fill in all required fields.');
            }
        }

        function prevStep(currentStep) {
            showStep(currentStep - 1);
        }

        document.addEventListener('DOMContentLoaded', function () {
            // Disable tab click events to enforce step navigation
            document.querySelectorAll('.stepper-tab').forEach(tab => {
                tab.addEventListener('click', function (event) {
                    event.preventDefault();
                });
            });

            // Show the first step by default
            showStep(1);
        });
    </script>
    @endpush
</x-layouts.admin>
