<?php
$tabs = ['Business Clients', 'Influencers', 'Movie Stars', 'Sports Stars', 'TV Stars'];
$items = [1, 2, 3, 4];
?>
<section class="w-full max-w-[1920px] mx-auto px-6 md:px-12 lg:px-16 py-12 md:py-16 bg-white">
    <div class="w-full max-w-[1200px] mx-auto flex flex-col items-start">
        <h2 class="text-[24px] md:text-[32px] lg:text-[36px] font-[600] leading-[1.2] tracking-tight mb-8">
            <span class="bg-gradient-to-r from-[#0B0952] via-[#02AE96] to-[#018CF1] bg-clip-text text-transparent uppercase">
                CELEBRITY & PROFESSIONAL COLLABORATIONS:
            </span>
        </h2>
        
        <ul class="flex flex-col gap-5 w-full text-[#121440] font-[500] text-[14px] lg:text-[15px] leading-relaxed mb-12 lg:mb-16">
            <li class="flex items-start gap-3">
                <span class="text-[#D80D7B] font-bold text-[16px] leading-none mt-[3px]">»</span>
                <span>Promote App is not limited to digital influencers alone.</span>
            </li>
            <li class="flex items-start gap-3">
                <span class="text-[#D80D7B] font-bold text-[16px] leading-none mt-[3px]">»</span>
                <span>We also provide opportunities to collaborate with Movie Stars, Television Personalities, and Sports Professionals for high-impact brand promotions and premium campaigns.</span>
            </li>
            <li class="flex items-start gap-3">
                <span class="text-[#D80D7B] font-bold text-[16px] leading-none mt-[3px]">»</span>
                <span>Celebrity collaborations help businesses achieve mass reach, stronger credibility, and faster brand recognition.</span>
            </li>
        </ul>

        <div id="collab-tabs" class="w-full flex flex-wrap items-center justify-center gap-3 lg:gap-4 mb-12 lg:mb-16">
            <?php foreach ($tabs as $index => $tab) : ?>
                <button 
                    data-tab="<?php echo esc_attr($tab); ?>"
                    class="collab-tab-btn rounded-full px-6 md:px-8 py-[8px] md:py-[10px] font-[600] text-[13px] md:text-[14px] transition-colors <?php echo $index === 0 ? 'bg-[#0a0a2a] text-white border border-[#0a0a2a]' : 'bg-transparent border border-[#4869E1] text-[#121440] hover:bg-[#F2F4FE]'; ?>"
                >
                    <?php echo esc_html($tab); ?>
                </button>
            <?php endforeach; ?>
        </div>

        <div id="collab-images" class="w-full flex flex-wrap justify-center items-center gap-6 md:gap-8 lg:gap-10">
            <?php foreach ($items as $item) : ?>
                <div class="w-[140px] h-[140px] sm:w-[160px] sm:h-[160px] md:w-[200px] md:h-[200px] lg:w-[240px] lg:h-[240px] rounded-full overflow-hidden shadow-sm hover:shadow-2xl hover:scale-105 hover:-translate-y-2 transition-all duration-300">
                    <img 
                        data-item="<?php echo $item; ?>"
                        src="/images/Business Clients/<?php echo $item; ?>.png" 
                        alt="Client <?php echo $item; ?>"
                        class="collab-img w-full h-full object-cover"
                        onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=Client+<?php echo $item; ?>&background=f2f4fe&color=121440&size=240';"
                    />
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const tabBtns = document.querySelectorAll('.collab-tab-btn');
    const images = document.querySelectorAll('.collab-img');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active button classes
            tabBtns.forEach(b => {
                b.classList.remove('bg-[#0a0a2a]', 'text-white');
                b.classList.add('bg-transparent', 'border-[#4869E1]', 'text-[#121440]', 'hover:bg-[#F2F4FE]');
            });
            btn.classList.remove('bg-transparent', 'border-[#4869E1]', 'text-[#121440]', 'hover:bg-[#F2F4FE]');
            btn.classList.add('bg-[#0a0a2a]', 'text-white', 'border', 'border-[#0a0a2a]');

            // Update images
            const tabName = btn.getAttribute('data-tab');
            images.forEach(img => {
                const item = img.getAttribute('data-item');
                img.src = `/images/${tabName}/${item}.png`;
                img.onerror = function() {
                    this.onerror = null;
                    this.src = `https://ui-avatars.com/api/?name=Client+${item}&background=f2f4fe&color=121440&size=240`;
                };
            });
        });
    });
});
</script>
