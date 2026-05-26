<?php
$businessList = [
    "Small and Medium Businesses",
    "Startups",
    "Local Shops",
    "Restaurants & Cafes",
    "Salons & Studios",
    "Real Estate & Service Providers",
    "Online and Offline Brands"
];

$influencersList = [
    "Instagram Influencers",
    "YouTubers",
    "Content Creators",
    "Micro & Macro Influencers",
    "Local Creators"
];
?>
<section class="w-full max-w-[1920px] mx-auto px-6 md:px-12 lg:px-16 py-12 md:py-20 bg-white">
    <div class="w-full max-w-[1200px] mx-auto flex flex-col items-center relative">
        
        <div class="flex lg:hidden mb-10 w-full justify-center">
            <div class="bg-[#0B0952] rounded-full px-6 md:px-10 py-4 shadow-xl">
                <h2 class="text-[18px] md:text-[22px] font-[600] tracking-wide m-0 leading-none text-center">
                    <span class="bg-gradient-to-r from-[#FFFFFF] via-[#02AE96] to-[#018CF1] bg-clip-text text-transparent">
                        WHO CAN USE PROMOTE APP?
                    </span>
                </h2>
            </div>
        </div>

        <div class="w-full flex flex-col lg:flex-row items-center justify-between lg:items-stretch gap-12 lg:gap-4 relative z-10">
            
            <div class="w-full lg:w-[30%] flex flex-col justify-start pt-4 lg:pt-20 order-2 lg:order-1 lg:pl-4">
                <h3 class="text-[#0B0952] font-[800] text-[22px] lg:text-[24px] mb-6 lg:mb-8 tracking-tight">BUSINESS</h3>
                <ul class="flex flex-col gap-5">
                    <?php foreach ($businessList as $item) : ?>
                        <li class="flex items-start gap-3 group cursor-default">
                            <span class="text-[#02AE96] font-bold text-[16px] leading-none mt-[2px] group-hover:translate-x-1 transition-transform">»</span>
                            <span class="text-[#121440] font-[500] text-[14px] lg:text-[15px] leading-snug"><?php echo esc_html($item); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="w-full lg:w-[40%] flex justify-center items-end order-1 lg:order-2">
                <img 
                    src="/images/person.png" 
                    alt="Who Can Use Promote App" 
                    class="w-full max-w-[340px] lg:max-w-[440px] h-auto object-contain hover:scale-105 transition-transform duration-500"
                />
            </div>

            <div class="w-full lg:w-[30%] flex flex-col justify-start pt-4 lg:pt-20 order-3 lg:order-3 lg:pl-4">
                <h3 class="text-[#0B0952] font-[800] text-[22px] lg:text-[24px] mb-6 lg:mb-8 tracking-tight">INFLUENCERS</h3>
                <ul class="flex flex-col gap-5">
                    <?php foreach ($influencersList as $item) : ?>
                        <li class="flex items-start gap-3 group cursor-default">
                            <span class="text-[#02AE96] font-bold text-[16px] leading-none mt-[2px] group-hover:translate-x-1 transition-transform">»</span>
                            <span class="text-[#121440] font-[500] text-[14px] lg:text-[15px] leading-snug"><?php echo esc_html($item); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>

        <div class="hidden lg:flex lg:-mt-4 relative z-20 justify-center w-full">
            <div class="bg-[#0B0952] rounded-full px-12 py-5 shadow-2xl">
                <h2 class="text-[26px] font-[800] tracking-wide m-0 leading-none">
                    <span class="bg-gradient-to-r from-[#FFFFFF] via-[#02AE96] to-[#018CF1] bg-clip-text text-transparent">
                        WHO CAN USE PROMOTE APP?
                    </span>
                </h2>
            </div>
        </div>

    </div>
</section>
