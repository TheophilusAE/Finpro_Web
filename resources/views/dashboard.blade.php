@extends('layouts.app')

@section('content')
    
  <div class="fixed inset-0 bg-black bg-opacity-30 hidden z-40 md:hidden" id="overlay">
  </div>
  <div class="flex-1 w-full min-h-screen bg-[#f9fdf8] rounded-none p-6 md:p-10 flex flex-col gap-6 max-w-full overflow-auto relative z-10 transition-filter duration-300 ease-in-out" id="contentWrapper">
   <button aria-label="Toggle sidebar" class="mb-4 bg-[#1a2a1a] text-white p-2 rounded-md w-10 h-10 flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#a0b0a0]" id="sidebarToggleMain" title="Toggle Sidebar">
    <i class="fas fa-bars">
    </i>
   </button>
   <section class="block max-w-6xl mx-auto w-full" id="sectionDashboard">
    <h2 class="text-[#1a2a1a] font-semibold text-xl mb-6 select-none text-center">
     Dashboard Overview
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
     <div class="bg-gradient-to-br from-[#0a2a1a] via-[#0f3a2a] to-[#1a4a3a] rounded-[20px] p-6 text-white select-none flex flex-col justify-center items-center shadow-lg shadow-green-900/50 border-2 border-green-700">
      <div class="text-xs font-semibold mb-2 tracking-wide uppercase">
       Total Income
      </div>
      <div class="text-4xl font-extrabold leading-[1.1]" id="dashboardIncome">
       Rp0
      </div>
      <div class="text-[10px] mt-3 text-[#a0b0a0] flex items-center gap-1">
       <i class="fas fa-arrow-down text-green-400 animate-bounce">
       </i>
       Money coming in
      </div>
     </div>
     <div class="bg-gradient-to-br from-[#4a1a1a] via-[#6a1a1a] to-[#8a1a1a] rounded-[20px] p-6 text-white select-none flex flex-col justify-center items-center shadow-lg shadow-red-900/50 border-2 border-red-700">
      <div class="text-xs font-semibold mb-2 tracking-wide uppercase">
       Total Outcome
      </div>
      <div class="text-4xl font-extrabold leading-[1.1]" id="dashboardOutcome">
       Rp0
      </div>
      <div class="text-[10px] mt-3 text-[#a0a0a0] flex items-center gap-1">
       <i class="fas fa-arrow-up text-red-400 animate-pulse">
       </i>
       Money going out
      </div>
     </div>
    </div>
    <div class="bg-white rounded-lg p-6 shadow-md max-w-full max-h-[400px] overflow-y-auto border-2 border-[#4a5a4a]">
     <h3 class="text-lg font-semibold mb-4 text-[#1a2a1a] border-b-2 border-[#4a5a4a] pb-2">
      Recent Transactions
     </h3>
     <ul class="divide-y divide-gray-300" id="dashboardTransactionList">
     </ul>
    </div>
   </section>
   <section class="hidden max-w-4xl mx-auto w-full" id="sectionReport">
    <h2 class="text-[#1a2a1a] font-semibold text-xl mb-6 select-none text-center">
     Monthly Financial Report
    </h2>
    <form class="bg-gradient-to-r from-green-100 to-green-200 rounded-xl p-8 shadow-lg max-w-md mx-auto mb-8 border-2 border-green-600" id="transactionForm">
     <div class="mb-5">
      <label class="block text-sm font-semibold text-green-900 mb-2" for="type">
       Type
      </label>
      <select class="w-full border border-green-600 rounded-lg px-4 py-2 text-sm outline-none focus:ring-2 focus:ring-green-700 bg-green-50 text-green-900" id="type" required="">
       <option value="income">
        Income
       </option>
       <option value="expense">
        Expense
       </option>
      </select>
     </div>
     <div class="mb-5">
      <label class="block text-sm font-semibold text-green-900 mb-2" for="category">
       Category
      </label>
      <select class="w-full border border-green-600 rounded-lg px-4 py-2 text-sm outline-none focus:ring-2 focus:ring-green-700 bg-green-50 text-green-900" id="category" required="">
       <optgroup label="Income Categories">
        <option value="Penjualan Helm">
         Penjualan Helm
        </option>
        <option value="Jasa Cuci Helm">
         Jasa Cuci Helm
        </option>
        <option value="Lainnya">
         Lainnya
        </option>
       </optgroup>
       <optgroup label="Expense Categories">
        <option value="Bahan Pembersih">
         Bahan Pembersih
        </option>
        <option value="Gaji Karyawan">
         Gaji Karyawan
        </option>
        <option value="Perawatan Helm">
         Perawatan Helm
        </option>
        <option value="Listrik &amp; Air">
         Listrik &amp; Air
        </option>
        <option value="Lainnya">
         Lainnya
        </option>
       </optgroup>
      </select>
     </div>
     <div class="mb-5">
      <label class="block text-sm font-semibold text-green-900 mb-2" for="amount">
       Amount (Rp)
      </label>
      <input class="w-full border border-green-600 rounded-lg px-4 py-2 text-sm outline-none focus:ring-2 focus:ring-green-700 bg-green-50 text-green-900" id="amount" min="0.01" placeholder="0" required="" step="0.01" type="number"/>
     </div>
     <div class="mb-6">
      <label class="block text-sm font-semibold text-green-900 mb-2" for="date">
       Date
      </label>
      <input class="w-full border border-green-600 rounded-lg px-4 py-2 text-sm outline-none focus:ring-2 focus:ring-green-700 bg-green-50 text-green-900" id="date" required="" type="date"/>
     </div>
     <button class="w-full bg-green-700 text-white font-semibold py-3 rounded-lg hover:bg-green-800 transition" type="submit">
      Add Transaction
     </button>
    </form>
    <div class="bg-white rounded-lg p-6 shadow-md overflow-x-auto border-2 border-[#4a5a4a]">
     <h3 class="text-lg font-semibold mb-4 text-[#1a2a1a] text-center border-b-2 border-[#4a5a4a] pb-2">
      Transactions
     </h3>
     <table class="w-full text-left text-sm text-[#4a5a4a] border-collapse border border-[#4a5a4a] rounded-lg">
      <thead>
       <tr class="bg-green-100 border-b-2 border-[#4a5a4a]">
        <th class="py-3 px-4 border-r-2 border-[#4a5a4a]">
         Date
        </th>
        <th class="py-3 px-4 border-r-2 border-[#4a5a4a]">
         Type
        </th>
        <th class="py-3 px-4 border-r-2 border-[#4a5a4a]">
         Category
        </th>
        <th class="py-3 px-4">
         Amount (Rp)
        </th>
       </tr>
      </thead>
      <tbody id="transactionsTableBody">
      </tbody>
     </table>
     <div class="mt-6 flex flex-col md:flex-row justify-end gap-8 text-[#1a2a1a] font-semibold text-right border-t-2 border-[#4a5a4a] pt-4">
      <div>
       Total Income:
       <span id="totalIncome">
        Rp0
       </span>
      </div>
      <div>
       Total Expense:
       <span id="totalExpense">
        Rp0
       </span>
      </div>
      <div>
       Balance:
       <span id="balance">
        Rp0
       </span>
      </div>
     </div>
    </div>
   </section>
   <section class="hidden max-w-6xl mx-auto w-full" id="sectionStatistics">
    <h2 class="text-[#1a2a1a] font-semibold text-3xl mb-8 select-none text-center tracking-wide">
     Financial Statistics &amp; Analysis
    </h2>
    <div class="bg-white rounded-xl p-8 shadow-xl max-w-full border-2 border-[#4a5a4a]">
     <h3 class="text-2xl font-bold mb-6 text-[#1a2a1a] text-center tracking-tight border-b-2 border-[#4a5a4a] pb-4">
      Monthly Summary
     </h3>
     <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
      <div class="p-6 bg-gradient-to-tr from-green-200 to-green-400 rounded-2xl text-green-900 shadow-lg flex flex-col items-center justify-center transform hover:scale-105 transition-transform duration-300 border-2 border-green-700">
       <div class="flex items-center gap-3 mb-3">
        <i class="fas fa-wallet fa-2x">
        </i>
        <h4 class="font-semibold text-lg">
         Total Income
        </h4>
       </div>
       <p class="text-3xl font-extrabold" id="statIncome">
        Rp0
       </p>
       <img alt="Decorative green upward arrow icon representing income growth" class="mt-4 w-16 h-16 opacity-30" height="64" src="https://storage.googleapis.com/a1aa/image/c90fb311-e10b-4641-ebb8-0f0e7a0538ec.jpg" width="64"/>
      </div>
      <div class="p-6 bg-gradient-to-tr from-red-200 to-red-400 rounded-2xl text-red-900 shadow-lg flex flex-col items-center justify-center transform hover:scale-105 transition-transform duration-300 border-2 border-red-700">
       <div class="flex items-center gap-3 mb-3">
        <i class="fas fa-credit-card fa-2x">
        </i>
        <h4 class="font-semibold text-lg">
         Total Expense
        </h4>
       </div>
       <p class="text-3xl font-extrabold" id="statExpense">
        Rp0
       </p>
       <img alt="Decorative red downward arrow icon representing expense" class="mt-4 w-16 h-16 opacity-30" height="64" src="https://storage.googleapis.com/a1aa/image/7397f4f2-3534-4a80-f157-a52fb7509b06.jpg" width="64"/>
      </div>
      <div class="p-6 bg-gradient-to-tr from-blue-200 to-blue-400 rounded-2xl text-blue-900 shadow-lg flex flex-col items-center justify-center transform hover:scale-105 transition-transform duration-300 border-2 border-blue-700">
       <div class="flex items-center gap-3 mb-3">
        <i class="fas fa-balance-scale fa-2x">
        </i>
        <h4 class="font-semibold text-lg">
         Balance
        </h4>
       </div>
       <p class="text-3xl font-extrabold" id="statBalance">
        Rp0
       </p>
       <img alt="Decorative blue balance scale icon representing financial balance" class="mt-4 w-16 h-16 opacity-30" height="64" src="https://storage.googleapis.com/a1aa/image/9faa2418-969c-4218-d9d2-b68ff46d28eb.jpg" width="64"/>
      </div>
     </div>
     <h3 class="text-2xl font-bold mb-6 text-[#1a2a1a] text-center tracking-tight border-b-2 border-[#4a5a4a] pb-4">
      Expense by Category
     </h3>
     <div class="mb-12 rounded-xl shadow-lg p-6 bg-gradient-to-br from-red-50 to-red-100 border-2 border-[#4a5a4a]">
      <canvas class="w-full h-72 rounded-xl" id="expenseChartCanvas">
      </canvas>
     </div>
     <h3 class="text-2xl font-bold mb-6 text-[#1a2a1a] text-center tracking-tight border-b-2 border-[#4a5a4a] pb-4">
      Income by Category
     </h3>
     <div class="rounded-xl shadow-lg p-6 bg-gradient-to-br from-green-50 to-green-100 border-2 border-[#4a5a4a] mb-12">
      <canvas class="w-full h-72 rounded-xl" id="incomeChartCanvas">
      </canvas>
     </div>
     <h3 class="text-2xl font-bold mb-6 text-[#1a2a1a] text-center tracking-tight border-b-2 border-[#4a5a4a] pb-4">
      Income &amp; Outcome Over Time
     </h3>
     <div class="flex flex-col md:flex-row items-center justify-center gap-6 mb-6 max-w-md mx-auto">
      <label for="timeRange" class="font-semibold text-[#1a2a1a]">View by:</label>
      <select id="timeRange" class="border border-[#4a5a4a] rounded-lg px-4 py-2 text-[#1a2a1a] focus:outline-none focus:ring-2 focus:ring-[#4a5a4a]">
       <option value="month" selected>Monthly</option>
       <option value="year">Yearly</option>
      </select>
     </div>
     <div class="rounded-xl shadow-lg p-6 bg-gradient-to-br from-blue-50 to-blue-100 border-2 border-[#4a5a4a]">
      <canvas class="w-full h-80 rounded-xl" id="incomeOutcomeChartCanvas">
      </canvas>
     </div>
    </div>
   </section>
   <section class="hidden max-w-6xl mx-auto w-full" id="sectionArticles">
    <h2 class="text-[#1a2a1a] font-semibold text-2xl mb-8 select-none text-center">
     Financial Management Articles for UMKM Helm &amp; Cuci Helm
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
     <article class="bg-white rounded-lg shadow-md p-6 flex flex-col border-2 border-[#4a5a4a]">
      <img alt="Illustration of a small business owner planning finances with charts and notes on a desk" class="rounded-lg mb-4 w-full object-cover h-48" height="300" src="https://storage.googleapis.com/a1aa/image/92431ef4-afe5-46df-7c1c-8dee7f85bf88.jpg" width="600"/>
      <h3 class="text-xl font-semibold mb-2 text-[#1a2a1a]">
       Financial Planning for UMKM Helm &amp; Cuci Helm
      </h3>
      <p class="text-gray-700 flex-grow">
       Pelajari cara membuat perencanaan keuangan yang efektif untuk bisnis helm dan jasa cuci helm Anda agar dapat mengelola arus kas dan investasi dengan baik.
      </p>
      <a class="mt-4 text-green-700 font-semibold hover:underline self-start" href="#">
       Read More
      </a>
     </article>
     <article class="bg-white rounded-lg shadow-md p-6 flex flex-col border-2 border-[#4a5a4a]">
      <img alt="Illustration of cash flow management with money and calendar icons" class="rounded-lg mb-4 w-full object-cover h-48" height="300" src="https://storage.googleapis.com/a1aa/image/6c73bbad-3cc8-4f45-b868-fcf9add7d953.jpg" width="600"/>
      <h3 class="text-xl font-semibold mb-2 text-[#1a2a1a]">
       Managing Cash Flow in Your Helm Business
      </h3>
      <p class="text-gray-700 flex-grow">
       Tips dan trik mengelola arus kas agar bisnis helm dan cuci helm Anda tetap sehat dan mampu menghadapi tantangan keuangan sehari-hari.
      </p>
      <a class="mt-4 text-green-700 font-semibold hover:underline self-start" href="#">
       Read More
      </a>
     </article>
     <article class="bg-white rounded-lg shadow-md p-6 flex flex-col border-2 border-[#4a5a4a]">
      <img alt="Illustration of cost control with calculator and budget sheets" class="rounded-lg mb-4 w-full object-cover h-48" height="300" src="https://storage.googleapis.com/a1aa/image/b983eac8-f7a7-4c09-41ba-0df39fc8a894.jpg" width="600"/>
      <h3 class="text-xl font-semibold mb-2 text-[#1a2a1a]">
       Cost Control Strategies for UMKM
      </h3>
      <p class="text-gray-700 flex-grow">
       Pelajari strategi pengendalian biaya yang dapat membantu bisnis helm dan cuci helm Anda meningkatkan profitabilitas tanpa mengurangi kualitas layanan.
      </p>
      <a class="mt-4 text-green-700 font-semibold hover:underline self-start" href="#">
       Read More
      </a>
     </article>
     <article class="bg-white rounded-lg shadow-md p-6 flex flex-col border-2 border-[#4a5a4a]">
      <img alt="Illustration of marketing budget planning with charts and money" class="rounded-lg mb-4 w-full object-cover h-48" height="300" src="https://storage.googleapis.com/a1aa/image/4dde4880-7185-4aa0-96e2-00dc16b05486.jpg" width="600"/>
      <h3 class="text-xl font-semibold mb-2 text-[#1a2a1a]">
       Marketing Budget Tips for Small Businesses
      </h3>
      <p class="text-gray-700 flex-grow">
       Cara mengalokasikan anggaran pemasaran secara efektif untuk meningkatkan penjualan helm dan jasa cuci helm Anda tanpa membebani keuangan.
      </p>
      <a class="mt-4 text-green-700 font-semibold hover:underline self-start" href="#">
       Read More
      </a>
     </article>
     <article class="bg-white rounded-lg shadow-md p-6 flex flex-col border-2 border-[#4a5a4a]">
      <img alt="Illustration of saving and investment with piggy bank and coins" class="rounded-lg mb-4 w-full object-cover h-48" height="300" src="https://storage.googleapis.com/a1aa/image/86dec276-86d9-4b27-31ab-9dba883557f4.jpg" width="600"/>
      <h3 class="text-xl font-semibold mb-2 text-[#1a2a1a]">
       Saving and Investment for UMKM Owners
      </h3>
      <p class="text-gray-700 flex-grow">
       Panduan menabung dan berinvestasi untuk pemilik UMKM helm dan cuci helm agar bisnis dan keuangan pribadi tetap berkembang.
      </p>
      <a class="mt-4 text-green-700 font-semibold hover:underline self-start" href="#">
       Read More
      </a>
     </article>
     <article class="bg-white rounded-lg shadow-md p-6 flex flex-col border-2 border-[#4a5a4a]">
      <img alt="Illustration of debt management with documents and calculator" class="rounded-lg mb-4 w-full object-cover h-48" height="300" src="https://storage.googleapis.com/a1aa/image/e89870a2-710d-4dae-9d82-9a556dad39c7.jpg" width="600"/>
      <h3 class="text-xl font-semibold mb-2 text-[#1a2a1a]">
       Effective Debt Management for Small Businesses
      </h3>
      <p class="text-gray-700 flex-grow">
       Tips mengelola hutang usaha agar bisnis helm dan cuci helm Anda tetap sehat dan terhindar dari masalah keuangan.
      </p>
      <a class="mt-4 text-green-700 font-semibold hover:underline self-start" href="#">
       Read More
      </a>
     </article>
    </div>
   </section>
  </div>
@endsection