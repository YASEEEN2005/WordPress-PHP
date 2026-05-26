<?php
$categories = [
    [
        "title" => "Movie Personalities :",
        "images" => [1, 2, 3, 4, 5],
        "items" => [
            "Lead Actors & Actresses",
            "Supporting Artist"
        ]
    ],
    [
        "title" => "Television & OTT Personalities :",
        "images" => [6, 7, 8, 9, 10],
        "items" => [
            "TV Serial Actors & Actresses",
            "Show Hosts & Anchors",
            "Reality Show Participants",
            "OTT Web Series Artists"
        ]
    ],
    [
        "title" => "Sports Personalities :",
        "images" => [11, 12, 13, 14, 15],
        "items" => [
            "Professional Athletes",
            "Fitness Icons",
            "Regional & National Level Players."
        ]
    ]
];
?>
<section class="w-full max-w-[1920px] mx-auto px-6 md:px-12 lg:px-16 py-12 md:py-20 bg-white">
    <div class="w-full max-w-[1200px] mx-auto flex flex-col items-center">
        
        <h2 class="text-[28px] md:text-[36px] lg:text-[42px] font-[600] leading-[1.2] tracking-tight mb-4 text-center">
            <span class="bg-gradient-to-r from-[#0B0952] via-[#02AE96] to-[#018CF1] bg-clip-text text-transparent">
                Available Collaboration Categories
            </span>
        </h2>
        
        <p class="text-[#4b4f63] font-[500] text-[13px] md:text-[14px] lg:text-[15px] text-center max-w-[800px] mb-12 lg:mb-16">
            Celebrity collaborations are subject to availability, category relevance, and campaign budget approval.
        </p>

        <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 items-stretch">
            <?php foreach ($categories as $index => $cat) : ?>
                <div class="w-full h-full bg-white border border-[#B2CFFD] rounded-[16px] lg:rounded-[20px] p-6 lg:p-8 flex flex-col shadow-sm hover:shadow-xl hover:-translate-y-2 hover:scale-[1.02] transition-all duration-300">
                    
                    <div class="mb-6 lg:mb-8">
                        <img 
                            src="/images/Collaboration/<?php echo ($index + 1); ?>.png" 
                            alt="<?php echo esc_attr($cat['title']); ?> avatars"
                            class="text-[#0B0952] h-10 md:h-12 lg:h-14 w-auto object-contain"
                        />
                    </div>

                    <h3 class="text-[#121440] font-[800] text-[16px] lg:text-[18px] mb-6">
                        <?php echo esc_html($cat['title']); ?>
                    </h3>

                    <ul class="flex flex-col gap-4">
                        <?php foreach ($cat['items'] as $item) : ?>
                            <li class="flex items-start gap-3">
                                <span class="text-[#3852C2] font-bold text-[14px] leading-none mt-[3px]">»</span>
                                <span class="text-[#121440] font-[500] text-[13px] lg:text-[14px] leading-snug"><?php echo esc_html($item); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
