<!-- resources/views/chart_of_accounts.blade.php -->
<x-layouts.admin>
    <x-slot name="title">{{ trans('Chart Of Accounts') }}</x-slot>

    <x-slot name="favorite"
            title="ChartOfAccounts"
            icon="credit_card"
            route="offline-payments.settings.edit"
    ></x-slot>

    <x-slot name="content">
        <x-show.container>
            <x-show.content class="flex flex-col-reverse lg:flex-row mt-5 sm:mt-12 gap-y-4" override="class">
                
                   
            <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-xl font-bold">Assets</h1>
            <button style="background-color:#247bff;" id="newAccountBtn" class=" text-white px-4 py-2 rounded">New Chart of Account</button>
        </div>
        <table class="min-w-full ">
            <thead class="border-b">
                <tr>
                    <th class="p-3 text-left">
                        <input type="checkbox" class="form-checkbox">
                    </th>
                    <th class="p-3 text-left">Code</th>
                    <th class="p-3 text-left">Name</th>
                    <th class="p-3 text-left">Type</th>
                    <th class="p-3 text-left">Balance</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b">
                    <td class="p-3">
                        <input type="checkbox" class="form-checkbox">
                    </td>
                    <td class="p-3">120</td>
                    <td class="p-3">Accounts Receivable</td>
                    <td class="p-3">Current Asset</td>
                    <td class="p-3">$53,245.74</td>
                </tr>
                <tr class="border-b">
                    <td class="p-3">
                        <input type="checkbox" class="form-checkbox">
                    </td>
                    <td class="p-3">140</td>
                    <td class="p-3">Inventory</td>
                    <td class="p-3">Inventory</td>
                    <td class="p-3">$0.00</td>
                </tr>
                <tr class="border-b">
                    <td class="p-3">
                        <input type="checkbox" class="form-checkbox">
                    </td>
                    <td class="p-3">150</td>
                    <td class="p-3">Office Equipment</td>
                    <td class="p-3">Fixed Asset</td>
                    <td class="p-3">$0.00</td>
                </tr>
                <tr class="border-b">
                    <td class="p-3">
                        <input type="checkbox" class="form-checkbox">
                    </td>
                    <td class="p-3">160</td>
                    <td class="p-3">Computer Equipment</td>
                    <td class="p-3">Fixed Asset</td>
                    <td class="p-3">$0.00</td>
                </tr>
                <tr class="border-b">
                    <td class="p-3">
                        <input type="checkbox" class="form-checkbox">
                    </td>
                    <td class="p-3">170</td>
                    <td class="p-3">Accumulated Depreciation</td>
                    <td class="p-3">Depreciation</td>
                    <td class="p-3">$0.00</td>
                </tr>
                <tr class="border-b">
                    <td class="p-3">
                        <input type="checkbox" class="form-checkbox">
                    </td>
                    <td class="p-3">856</td>
                    <td class="p-3">Cash</td>
                    <td class="p-3">Bank & Cash</td>
                    <td class="p-3">$9,072.30</td>
                </tr>
                <tr class="border-b">
                    <td class="p-3">
                        <input type="checkbox" class="form-checkbox">
                    </td>
                    <td class="p-3">857</td>
                    <td class="p-3">Bank</td>
                    <td class="p-3">Bank & Cash</td>
                    <td class="p-3">$0.00</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        document.getElementById('newAccountBtn').addEventListener('click', function() {
            window.location.href = '{{ url("/1/chart-of-accounts/new-chart-of-accounts") }}';
        });
    </script>

</x-show.content>
</x-show.container>
</x-slot>

</x-layouts.admin>
