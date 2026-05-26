<?php
$stats_data = [
    [ "n" => "10K+", "label" => "Active Influencers" ],
    [ "n" => "3K+", "label" => "Registered Brands" ],
    [ "n" => "25K+", "label" => "Campaigns Launched" ],
    [ "n" => "8M+", "label" => "Audience Reach Generated" ]
];
?>
<section class="w-full max-w-[1920px] mx-auto px-6 md:px-12 lg:px-16 pb-12 lg:pb-24 z-20 relative">
    <div class="w-full max-w-[1200px] mx-auto bg-[#0c0a2b] rounded-[20px] lg:rounded-[24px] py-8 lg:py-14 px-4 flex flex-col md:flex-row flex-wrap items-center justify-evenly gap-8 lg:gap-4 shadow-2xl">
        <?php foreach ($stats_data as $item) : ?>
            <div class="flex flex-col items-center text-center px-4 hover:-translate-y-2 hover:scale-105 transition-all duration-300 cursor-default">
                <h3 class="text-white text-[42px] lg:text-[52px] font-[800] leading-none mb-2 tracking-tight">
                    <?php echo esc_html($item['n']); ?>
                </h3>
                <p class="text-[14px] lg:text-[15px] font-[500] tracking-wide">
                    <span class="bg-gradient-to-r from-[#FFFFFF] via-[#02AE96] to-[#018CF1] bg-clip-text text-transparent">
                        <?php echo esc_html($item['label']); ?>
                    </span>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
