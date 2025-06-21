<div 
    x-data="{ show: false }" 
    x-init="window.addEventListener('scroll', () => show = window.scrollY > 300)" 
    x-show="show" 
    x-transition
    class="fixed bottom-6 right-6 z-50">
    <button 
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="bg-green-600 hover:bg-green-700 text-white p-3 rounded-full shadow-md transition"
        aria-label="Kembali ke atas">
        ↑
    </button>
</div>
