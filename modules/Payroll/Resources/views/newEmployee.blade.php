<!-- resources/views/employee_details.blade.php -->
<x-layouts.admin>
    <x-slot name="title">{{ trans('Employee Details') }}</x-slot>

    <x-slot name="content">
        <x-show.container>
            <x-show.content class="flex flex-col lg:flex-row mt-5 sm:mt-12 gap-y-4" override="class">
                <!-- Form Section -->
                <div class="w-full bg-white p-6 border border-gray-200 rounded-lg shadow-sm">
                    <h2 class="text-2xl font-semibold mb-4">Personal Information</h2>
                    <p class="mb-4 text-gray-600">
                        Here you can enter the employee's general information such as name, email, etc. If you click the 'Can Log in' box, an invitation link will be sent to the employee to create an employee portal.
                    </p>
                    <form action="#" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Name *</label>
                                <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="Sam">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" name="email" id="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="sam.pruina">
                            </div>
                            <div>
                                <label for="birth_day" class="block text-sm font-medium text-gray-700">Birth Day *</label>
                                <input type="date" name="birth_day" id="birth_day" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="2022-05-27">
                            </div>
                            <div>
                                <label for="gender" class="block text-sm font-medium text-gray-700">Gender *</label>
                                <select name="gender" id="gender" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="Male" selected>Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                <input type="tel" name="phone" id="phone" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="(503) 558-8347">
                            </div>
                            <div>
                                <label for="department" class="block text-sm font-medium text-gray-700">Department *</label>
                                <select name="department" id="department" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="Marketing" selected>Marketing</option>
                                    <option value="Sales">Sales</option>
                                    <option value="HR">HR</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-6">
                            <input type="checkbox" name="invite_to_portal" id="invite_to_portal" class="mr-2 leading-tight">
                            <label for="invite_to_portal" class="text-sm font-medium text-gray-700">Invite to Client Portal</label>
                        </div>

                        <h2 class="text-2xl font-semibold mb-4">Address</h2>
                        <div class="grid grid-cols-1 gap-4 mb-4">
                            <div>
                                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                <textarea name="address" id="address" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">15408 SE Ivy Creek St
Happy Valley, Oregon(OR), 97086</textarea>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="city" class="block text-sm font-medium text-gray-700">Town / City</label>
                                    <input type="text" name="city" id="city" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="Happy Valley">
                                </div>
                                <div>
                                    <label for="postal_code" class="block text-sm font-medium text-gray-700">Postal / Zip Code</label>
                                    <input type="text" name="postal_code" id="postal_code" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="97086">
                                </div>
                            </div>
                        </div>

                        <h2 class="text-2xl font-semibold mb-4">Payment Details</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="amount" class="block text-sm font-medium text-gray-700">Amount *</label>
                                <input type="text" name="amount" id="amount" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="$1,124.42">
                            </div>
                            <div>
                                <label for="currency" class="block text-sm font-medium text-gray-700">Currency *</label>
                                <select name="currency" id="currency" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="US Dollar" selected>US Dollar</option>
                                    <option value="Euro">Euro</option>
                                    <option value="Pound">Pound</option>
                                </select>
                            </div>
                            <div>
                                <label for="tax_number" class="block text-sm font-medium text-gray-700">Tax Number</label>
                                <input type="text" name="tax_number" id="tax_number" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="(503) 558-8347">
                            </div>
                            <div>
                                <label for="bank_account_number" class="block text-sm font-medium text-gray-700">Bank Account Number</label>
                                <input type="text" name="bank_account_number" id="bank_account_number" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="17517234912975">
                            </div>
                            <div>
                                <label for="hire_date" class="block text-sm font-medium text-gray-700">Hire Date *</label>
                                <input type="date" name="hire_date" id="hire_date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="2022-05-27">
                            </div>
                        </div>

                        <h2 class="text-2xl font-semibold mb-4">Attachment</h2>
                        <p class="mb-4 text-gray-600">
                            Here you can attach the employee's resume or other required documents.
                        </p>
                        <div class="mb-6">
                            <label for="attachment" class="block text-sm font-medium text-gray-700">Attachment</label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H16C13.7909 8 12 9.79086 12 12V36C12 38.2091 13.7909 40 16 40H32C34.2091 40 36 38.2091 36 36V20L28 8Z" fill="currentColor" />
                                        <path d="M28 8L36 20H28V8Z" fill="currentColor" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span>Upload a file</span>
                                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">
                                        PNG, JPG, GIF up to 10MB
                                    </p>
                                </div>
                            </div>
                        </div>

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
