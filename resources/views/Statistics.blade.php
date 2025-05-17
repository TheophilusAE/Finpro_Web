@extends('layouts.app')

@section('content')
    <section class="hidden max-w-6xl mx-auto w-full" id="sectionStatistics">
        <h2 class="text-[#1a2a1a] font-semibold text-3xl mb-8 select-none text-center tracking-wide">Financial Statistics &amp; Analysis</h2>
        <div class="bg-white rounded-xl p-8 shadow-xl max-w-full border-2 border-[#4a5a4a]">
            <h3 class="text-2xl font-bold mb-6 text-[#1a2a1a] text-center tracking-tight border-b-2 border-[#4a5a4a] pb-4">Monthly Summary</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
                <div class="p-6 bg-gradient-to-tr from-green-200 to-green-400 rounded-2xl text-green-900 shadow-lg flex flex-col items-center justify-center transform hover:scale-105 transition-transform duration-300 border-2 border-green-700">
                    <div class="flex items-center gap-3 mb-3">
                        <i class="fas fa-wallet fa-2x"></i>
                        <h4 class="font-semibold text-lg">Total Income</h4>
                    </div>
                    <p class="text-3xl font-extrabold" id="statIncome">Rp0</p>
                </div>
                <div class="p-6 bg-gradient-to-tr from-red-200 to-red-400 rounded-2xl text-red-900 shadow-lg flex flex-col items-center justify-center transform hover:scale-105 transition-transform duration-300 border-2 border-red-700">
                    <div class="flex items-center gap-3 mb-3">
                        <i class="fas fa-credit-card fa-2x"></i>
                        <h4 class="font-semibold text-lg">Total Expense</h4>
                    </div>
                    <p class="text-3xl font-extrabold" id="statExpense">Rp0</p>
                </div>
                <div class="p-6 bg-gradient-to-tr from-blue-200 to-blue-400 rounded-2xl text-blue-900 shadow-lg flex flex-col items-center justify-center transform hover:scale-105 transition-transform duration-300 border-2 border-blue-700">
                    <div class="flex items-center gap-3 mb-3">
                        <i class="fas fa-balance-scale fa-2x"></i>
                        <h4 class="font-semibold text-lg">Balance</h4>
                    </div>
                    <p class="text-3xl font-extrabold" id="statBalance">Rp0</p>
                </div>
            </div>
            <h3 class="text-2xl font-bold mb-6 text-[#1a2a1a] text-center tracking-tight border-b-2 border-[#4a5a4a] pb-4">Expense by Category</h3>
            <div class="mb-12 rounded-xl shadow-lg p-6 bg-gradient-to-br from-red-50 to-red-100 border-2 border-[#4a5a4a]">
                <canvas class="w-full h-72 rounded-xl" id="expenseChartCanvas"></canvas>
            </div>
            <h3 class="text-2xl font-bold mb-6 text-[#1a2a1a] text-center tracking-tight border-b-2 border-[#4a5a4a] pb-4">Income by Category</h3>
            <div class="rounded-xl shadow-lg p-6 bg-gradient-to-br from-green-50 to-green-100 border-2 border-[#4a5a4a] mb-12">
                <canvas class="w-full h-72 rounded-xl" id="incomeChartCanvas"></canvas>
            </div>
            <h3 class="text-2xl font-bold mb-6 text-[#1a2a1a] text-center tracking-tight border-b-2 border-[#4a5a4a] pb-4">Income &amp; Outcome Over Time</h3>
            <div class="flex flex-col md:flex-row items-center justify-center gap-6 mb-6 max-w-md mx-auto">
                <label for="timeRange" class="font-semibold text-[#1a2a1a]">View by:</label>
                <select id="timeRange" class="border border-[#4a5a4a] rounded-lg px-4 py-2 text-[#1a2a1a] focus:outline-none focus:ring-2 focus:ring-[#4a5a4a]">
                    <option value="month" selected>Monthly</option>
                    <option value="year">Yearly</option>
                </select>
            </div>
            <div class="rounded-xl shadow-lg p-6 bg-gradient-to-br from-blue-50 to-blue-100 border-2 border-[#4a5a4a]">
                <canvas class="w-full h-80 rounded-xl" id="incomeOutcomeChartCanvas"></canvas>
            </div>
        </div>
    </section>
@endsection