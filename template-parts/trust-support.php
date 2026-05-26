<?php
$items = [
    [ "text" => "Your data is safe and secure", "icon" => "Trust/1.svg" ],
    [ "text" => "Verified profiles for quality collaborations", "icon" => "Trust/2.svg" ],
    [ "text" => "Dedicated support team", "icon" => "Trust/3.svg" ],
    [ "text" => "Full guidance throughout the promotion process", "icon" => "Trust/4.svg" ]
];
?>
<section 
    class="w-full max-w-[1920px] mx-auto px-6 md:px-12 lg:px-16 py-16 md:py-24 bg-[#0B0952] relative overflow-hidden"
    style="background-image: url('/images/Trust/backround.jpg'); background-size: cover; background-position: center;"
>
    <div class="absolute inset-0 bg-[#0B0952]/90 z-0"></div>
    
    <div class="w-full max-w-[1200px] mx-auto flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-8 relative z-10">
        
        <div class="w-full lg:w-[50%] flex flex-col items-center order-2 lg:order-1">
            <img 
                src="/images/Trust/phones.png" 
                alt="Promote App Interface" 
                class="w-full max-w-[650px] md:max-w-[550px] lg:max-w-[620px] xl:max-w-[680px] h-auto object-contain mb-10 lg:mb-12 hover:scale-[1.03] transition-transform duration-500"
            />
            <div class="flex flex-col sm:flex-row items-center gap-4 w-full justify-center">
                <button class="bg-white rounded-full px-8 py-[12px] font-[800] text-[14px] md:text-[15px] shadow-lg hover:scale-105 transition-transform w-full sm:w-auto">
                    <span class="bg-gradient-to-r from-[#0B0952] via-[#02AE96] to-[#018CF1] bg-clip-text text-transparent">Register as Business</span>
                </button>
                <button class="bg-white rounded-full px-8 py-[12px] font-[800] text-[14px] md:text-[15px] shadow-lg hover:scale-105 transition-transform w-full sm:w-auto">
                    <span class="bg-gradient-to-r from-[#0B0952] via-[#02AE96] to-[#018CF1] bg-clip-text text-transparent">Register as Influencer</span>
                </button>
            </div>
        </div>

        <div class="w-full lg:w-[50%] flex flex-col items-start order-1 lg:order-2 pl-0 lg:pl-8">
            <h2 class="text-[32px] md:text-[40px] lg:text-[42px] font-[600] leading-[1.2] tracking-tight mb-4">
                <span class="bg-gradient-to-r from-[#FFFFFF] via-[#02AE96] to-[#018CF1] bg-clip-text text-transparent uppercase">
                    TRUST, SECURITY & SUPPORT
                </span>
            </h2>
            
            <p class="text-[#B2CFFD] font-[400] text-[15px] md:text-[16px] leading-[1.6] max-w-[500px] mb-10">
                Promote App is a fully trusted and supported platform for both businesses and influencers.
            </p>

            <ul class="flex flex-col gap-6 lg:gap-8 w-full">
                <?php foreach ($items as $index => $item) : ?>
                    <li class="flex items-center gap-5 group cursor-default">
                        <img 
                            src="/images/<?php echo esc_attr($item['icon']); ?>" 
                            alt="<?php echo esc_attr($item['text']); ?>" 
                            class="w-12 h-12 md:w-14 md:h-14 object-contain flex-shrink-0"
                            onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=<?php echo ($index+1); ?>&background=018CF1&color=fff&rounded=true';"
                        />
                        <span class="text-white font-[500] text-[16px] md:text-[18px] lg:text-[20px] tracking-wide group-hover:translate-x-2 transition-transform duration-300">
                            <?php echo esc_html($item['text']); ?>
                        </span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</section>
