<nav class="w-full max-w-[1200px] mx-auto px-2 md:px-0 py-6 flex items-start justify-between relative z-50">
    <a href="/" class="flex-shrink-0 z-50">
        <img src="/images/logo.png" alt="Logo" class="h-[75px] xl:h-[90px] w-auto object-contain" />
    </a>
    
    <button id="mobile-menu-btn" class="xl:hidden z-50 p-2 mr-4 mt-2 flex flex-col justify-center items-center gap-1.5" aria-label="Toggle Menu">
        <span id="bar-1" class="w-6 h-[3px] bg-[#121440] rounded transition-transform"></span>
        <span id="bar-2" class="w-6 h-[3px] bg-[#121440] rounded transition-opacity opacity-100"></span>
        <span id="bar-3" class="w-6 h-[3px] bg-[#121440] rounded transition-transform"></span>
    </button>
    
    <div class="hidden xl:flex items-center gap-4 2xl:gap-8 text-[#121440] font-[700] text-[14px] 2xl:text-[16px] tracking-wide mt-3 xl:mt-4">
        <a href="#" class="rounded-full bg-gradient-to-r from-[#121440] to-[#00a6ff] p-[1.5px] inline-flex transition-transform hover:scale-105">
            <span class="bg-white rounded-full px-6 py-[6px] flex items-center justify-center w-full h-full">Home</span>
        </a>
        <a href="#" class="transition-opacity hover:opacity-70 whitespace-nowrap">About Us</a>
        <a href="#" class="transition-opacity hover:opacity-70 whitespace-nowrap">How it Works</a>
        <a href="#" class="transition-opacity hover:opacity-70 whitespace-nowrap">Features</a>
        <a href="#" class="transition-opacity hover:opacity-70 whitespace-nowrap">For Businesses</a>
        <a href="#" class="transition-opacity hover:opacity-70 whitespace-nowrap">For Influencers</a>
        <a href="#" class="transition-opacity hover:opacity-70 whitespace-nowrap">Community</a>
        <a href="#" class="transition-opacity hover:opacity-70 whitespace-nowrap">Contact</a>
    </div>

    <div id="mobile-menu" class="absolute top-full left-0 w-full bg-white shadow-xl flex flex-col items-center gap-6 py-8 px-4 transition-all duration-300 xl:hidden origin-top scale-y-0 opacity-0 pointer-events-none">
        <a href="#" class="rounded-full bg-gradient-to-r from-[#121440] to-[#00a6ff] p-[1.5px] inline-flex">
            <span class="bg-white rounded-full px-8 py-[8px] flex items-center justify-center w-full h-full text-[#121440] font-[700]">Home</span>
        </a>
        <a href="#" class="text-[#121440] font-[700] text-[16px]">About Us</a>
        <a href="#" class="text-[#121440] font-[700] text-[16px]">How it Works</a>
        <a href="#" class="text-[#121440] font-[700] text-[16px]">Features</a>
        <a href="#" class="text-[#121440] font-[700] text-[16px]">For Businesses</a>
        <a href="#" class="text-[#121440] font-[700] text-[16px]">For Influencers</a>
        <a href="#" class="text-[#121440] font-[700] text-[16px]">Community</a>
        <a href="#" class="text-[#121440] font-[700] text-[16px]">Contact</a>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const bar1 = document.getElementById('bar-1');
    const bar2 = document.getElementById('bar-2');
    const bar3 = document.getElementById('bar-3');
    let isOpen = false;

    if(btn) {
        btn.addEventListener('click', () => {
            isOpen = !isOpen;
            if (isOpen) {
                menu.classList.remove('scale-y-0', 'opacity-0', 'pointer-events-none');
                menu.classList.add('scale-y-100', 'opacity-100');
                bar1.classList.add('rotate-45', 'translate-y-[9px]');
                bar2.classList.remove('opacity-100');
                bar2.classList.add('opacity-0');
                bar3.classList.add('-rotate-45', '-translate-y-[9px]');
            } else {
                menu.classList.add('scale-y-0', 'opacity-0', 'pointer-events-none');
                menu.classList.remove('scale-y-100', 'opacity-100');
                bar1.classList.remove('rotate-45', 'translate-y-[9px]');
                bar2.classList.remove('opacity-0');
                bar2.classList.add('opacity-100');
                bar3.classList.remove('-rotate-45', '-translate-y-[9px]');
            }
        });
    }
});
</script>
