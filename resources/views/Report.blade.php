@extends('layouts.app')

@section('content')
    <section class="hidden max-w-4xl mx-auto w-full" id="sectionReport">
        <h2 class="text-[#1a2a1a] font-semibold text-xl mb-6 select-none text-center">Monthly Financial Report</h2>
        <form class="bg-gradient-to-r from-green-100 to-green-200 rounded-xl p-8 shadow-lg max-w-md mx-auto mb-8 border-2 border-green-600" id="transactionForm">
            <div class="mb-5">
                <label class="block text-sm font-semibold text-green-900 mb-2" for="type">Type</label>
                <select class="w-full border border-green-600 rounded-lg px-4 py-2 text-sm outline-none focus:ring-2 focus:ring-green-700 bg-green-50 text-green-900" id="type" required="">
                    <option value="income">Income</option>
                    <option value="expense">Expense</option>
                </select>
            </div>
            <div class="mb-5">
                <label class="block text-sm font-semibold text-green-900 mb-2" for="category">Category</label>
                <select class="w-full border border-green-600 rounded-lg px-4 py-2 text-sm outline-none focus:ring-2 focus:ring-green-700 bg-green-50 text-green-900" id="category" required="">
                    <optgroup label="Income Categories">
                        <option value="Penjualan Helm">Penjualan Helm</option>
                        <option value="Jasa Cuci Helm">Jasa Cuci Helm</option>
                        <option value="Lainnya">Lainnya</option>
                    </optgroup>
                    <optgroup label="Expense Categories">
                        <option value="Bahan Pembersih">Bahan Pembersih</option>
                        <option value="Gaji Karyawan">Gaji Karyawan</option>
                        <option value="Perawatan Helm">Perawatan Helm</option>
                        <option value="Listrik &amp; Air">Listrik &amp; Air</option>
                        <option value="Lainnya">Lainnya</option>
                    </optgroup>
                </select>
            </div>
            <div class="mb-5">
                <label class="block text-sm font-semibold text-green-900 mb-2" for="amount">Amount (Rp)</label>
                <input class="w-full border border-green-600 rounded-lg px-4 py-2 text-sm outline-none focus:ring-2 focus:ring-green-700 bg-green-50 text-green-900" id="amount" min="0.01" placeholder="0" required="" step="0.01" type="number"/>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-semibold text-green-900 mb-2" for="date">Date</label>
                <input class="w-full border border-green-600 rounded-lg px-4 py-2 text-sm outline-none focus:ring-2 focus:ring-green-700 bg-green-50 text-green-900" id="date" required="" type="date"/>
            </div>
            <button class="w-full bg-green-700 text-white font-semibold py-3 rounded-lg hover:bg-green-800 transition" type="submit">Add Transaction</button>
        </form>
        <div class="bg-white rounded-lg p-6 shadow-md overflow-x-auto border-2 border-[#4a5a4a]">
            <h3 class="text-lg font-semibold mb-4 text-[#1a2a1a] text-center border-b-2 border-[#4a5a4a] pb-2">Transactions</h3>
            <table class="w-full text-left text-sm text-[#4a5a4a] border-collapse border border-[#4a5a4a] rounded-lg">
                <thead>
                    <tr class="bg-green-100 border-b-2 border-[#4a5a4a]">
                        <th class="py-3 px-4 border-r-2 border-[#4a5a4a]">Date</th>
                        <th class="py-3 px-4 border-r-2 border-[#4a5a4a]">Type</th>
                        <th class="py-3 px-4 border-r-2 border-[#4a5a4a]">Category</th>
                        <th class="py-3 px-4">Amount (Rp)</th>
                    </tr>
                </thead>
                <tbody id="transactionsTableBody"></tbody>
            </table>
            <div class="mt-6 flex flex-col md:flex-row justify-end gap-8 text-[#1a2a1a] font-semibold text-right border-t-2 border-[#4a5a4a] pt-4">
                <div>Total Income: <span id="totalIncome">Rp0</span></div>
                <div>Total Expense: <span id="totalExpense">Rp0</span></div>
                <div>Balance: <span id="balance">Rp0</span></div>
            </div>
        </div>
    </section>
@endsection