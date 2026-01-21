<?php include '../includes/header.php'; ?>

<main class="min-h-screen bg-[#111112]">
    <?php $navTextColor = '#F1F5FB'; include '../includes/nav.php'; ?>
    
    <section class="h-screen flex items-center justify-center overflow-hidden mb-10">
        <div class="relative w-full max-w-[800px] aspect-square flex items-center justify-center">
             <!-- Center Text -->
             <div class="z-10 relative">
                 <h1 class="text-[40px] md:text-[56px] leading-[48px] md:leading-[64px] tracking-[-2%] text-[#F1F5FB] mb-5 font-[500] text-center"><span class="block text-[#9AA0A8]">The designer</span>Behind the work</h1>
             </div>
             
             <!-- Image 1: 0 degrees (Right) -->
             <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 translate-x-[140px] translate-y-[0px] md:translate-x-[500px] md:translate-y-[10px] hidden md:block">
                <img src="/public/images/dermatology_about_page.png" alt="Placeholder" class="max-w-[155px] object-contain transform -translate-x-1/2 -translate-y-1/2">
             </div>

             <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 translate-x-[-120px] translate-y-[-120px] md:translate-x-[0px] md:translate-y-[-210px]">
                <img src="/public/images/fragman_about_page.png" alt="Placeholder" class="max-w-[115px] md:max-w-[185px] object-contain transform -translate-x-1/2 -translate-y-1/2">
             </div>

             <!-- Image 2: 60 degrees -->
             <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 translate-x-[0px] translate-y-[300px] md:translate-x-[240px] md:translate-y-[242px]">
                <img src="/public/images/darkskyaero_about_page.png" alt="Placeholder" class="max-w-[140px] md:max-w-[185px] object-contain transform -translate-x-1/2 -translate-y-1/2">
             </div>

             <!-- Image 3: 120 degrees -->
             <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 translate-x-[150px] translate-y-[140px] md:translate-x-[-200px] md:translate-y-[242px]">
                <img src="/public/images/citrus_about_page.png" alt="Placeholder" class="max-w-[170px] md:max-w-[205px] object-contain transform -translate-x-1/2 -translate-y-1/2">
             </div>

             <!-- Image 4: 180 degrees (Left) -->
             <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 translate-x-[-150px] translate-y-[150px] md:translate-x-[-500px] md:translate-y-[40px]">
                <img src="/public/images/machsfive_about_page.png" alt="Placeholder" class="max-w-[180px] md:max-w-[220px] object-contain transform -translate-x-1/2 -translate-y-1/2">
             </div>

             <!-- Image 5: 240 degrees -->
             <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 translate-x-[0px] translate-y-[-230px] md:translate-x-[-400px] md:translate-y-[-200px]">
                <img src="/public/images/kutura_about_page.png" alt="Placeholder" class="max-w-[130px] md:max-w-[175px] object-contain transform -translate-x-1/2 -translate-y-1/2">
             </div>

             <!-- Image 6: 300 degrees -->
             <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 translate-x-[140px] translate-y-[-121px] md:translate-x-[340px] md:translate-y-[-180px]">
                <img src="/public/images/puffnstuff_about_page.png" alt="Placeholder" class="max-w-[100px] md:max-w-[165px] object-contain transform -translate-x-1/2 -translate-y-1/2">
             </div>
        </div>
    </section>

    <section class="px-4 md:px-15">
        <div class="flex flex-col md:flex-row items-start">
            <div class="mb-6 md:mb-0 md:sticky md:top-24">
                <p class="text-[14px] leading-[140%] text-[#F1F5FB] font-[500] mb-2 hidden md:block">My name is...</p>
                <p class="text-[24px] md:text-[40px] leading-[30px] md:leading-[48px] font-[500] text-[#F1F5FB] tracking-[-2%]">Antonio Trpevski, I’m a 22 year old UX/UI designer who’s passionate about creating modern, intuitive experiences. When I’m not designing, you’ll most likely find me at the gym working.</p>
            </div>
            <div class="flex flex-col gap-4 md:gap-6">
                <img src="/public/images/about_pic_1.png" alt="about_pic_1" class="min-w-full md:min-w-[430px]" draggable="false">
                <img src="/public/images/about_pic_2.png" alt="about_pic_1" class="min-w-full md:min-w-[430px]" draggable="false">
                <img src="/public/images/about_pic_3.png" alt="about_pic_1" class="min-w-full md:min-w-[430px]" draggable="false">
            </div>
        </div>
    </section>

    <section class="py-24 bg-[#111112] overflow-hidden">
        <div class="px-4 md:px-15 mb-12 w-full">
            <div class="flex justify-between items-start md:items-end w-full flex-col md:flex-row">
                <div>
                    <h2 class="text-[38px] md:text-[56px] leading-[48px] md:leading-[64px] tracking-[-2%] text-[#F1F5FB] mb-5 font-[500]"><span class="block text-[#9AA0A8]">My creative journey</span>Through design</h2>
                </div>
                <div class="flex gap-4">
                    <button id="scrollLeft" class="w-[48px] h-[48px] bg-[#191919] flex items-center justify-center text-white hover:bg-[#F1F5FB] transition-colors cursor-pointer group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none" class="group-hover:fill-[#111112] fill-[#F1F5FB]">
                            <path d="M22.7297 7.62959L4.86288 7.62971L10.696 1.79658L8.89966 0.000238628L-6.00782e-07 8.8999L8.89966 17.7996L10.696 16.0032L4.86291 10.1701L22.7297 10.1702L22.7297 7.62959Z" fill=""/>
                        </svg>
                    </button>
                    <button id="scrollRight" class="w-[48px] h-[48px] bg-[#191919] flex items-center justify-center text-white hover:bg-[#F1F5FB] transition-colors cursor-pointer group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none" class="group-hover:fill-[#111112] fill-[#F1F5FB]">
                            <path d="M0.000780885 7.62959L17.8676 7.62971L12.0345 1.79658L13.8308 0.000238628L22.7305 8.8999L13.8308 17.7996L12.0345 16.0032L17.8676 10.1701L0.000780717 10.1702L0.000780885 7.62959Z" fill=""/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="timelineContainer" class="flex overflow-x-auto gap-0 scroll-smooth no-scrollbar pl-18 pr-4 md:px-25 pb-12">
            <!-- Year 2020 -->
            <div class="min-w-[550px] md:min-w-[850px] max-h-[460px] md:min-h-[660px] border-l border-[#F1F5FB] px-4 md:px-9 snap-start flex flex-col gap-6 relative">
                <!-- Background Lines -->
                <div class="absolute inset-0 w-full h-full flex justify-between items-center px-9 md:px-20 pointer-events-none z-0">
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                </div>

                <span class="text-[40px] md:text-[56px] leading-[48px] md:leading-[64px] font-[500] text-[#F1F5FB] block mb-4 md:mb-8 relative -ml-[13.8%] md:-ml-[14%] bg-[#111112] w-fit px-2 z-10">
                    2020
                    <span class="block ms-0 text-center mt-0 md:mt-5">
                        •
                    </span>
                </span>
                <div class="flex flex-row gap-20 md:gap-40">
                    <div class="bg-[#191919] p-2 md:p-4 max-w-[215px] md:max-w-[312px] flex flex-col gap-4 -ms-[10%] md:-ms-[12%] z-10 relative">
                        <img src="/public/images/journey_photo_brainster.png" alt="Brainster" class="max-w-[200px] md:max-w-[280px] max-h-[280px] object-contain">
                        <p class="font-[500] text-white text-[20px] md:text-[24px] leading-[24px] md:leading-[28px] tracking-[-2%]">I enrolled to the UX/UI Academy in Brainster</p>
                    </div>
                    <img src="/public/images/creative_journey_2020.png" alt="Toni" class="max-w-[180px] md:max-w-[280px] object-contain z-10 mt-0 md:-mt-[25%] self-end md:self-auto">
                </div>
            </div>

            <!-- Year 2021 -->
            <div class="min-w-[550px] md:min-w-[850px] max-h-[460px] md:min-h-[660px] border-l border-[#F1F5FB] px-4 md:px-9 snap-start flex flex-col gap-6 relative">
                <!-- Background Lines -->
                <div class="absolute inset-0 w-full h-full flex justify-between items-center px-9 md:px-20 pointer-events-none z-0">
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                </div>

                <span class="text-[40px] md:text-[56px] leading-[48px] md:leading-[64px] font-[500] text-[#F1F5FB] block mb-4 md:mb-8 relative -ml-[13.8%] md:-ml-[14%] bg-[#111112] w-fit px-2 z-10">
                    2021
                    <span class="block ms-0 text-center mt-0 md:mt-5">
                        •
                    </span>
                </span>
                <div class="flex flex-row gap-20 md:gap-40">
                    <div class="bg-[#191919] p-2 md:p-4 max-w-[215px] md:max-w-[312px] flex flex-col gap-4 -ms-[10%] md:-ms-[12%] z-10 relative">
                        <img src="/public/images/journey_photo_toni.png" alt="Toni" class="max-w-full md:max-w-[280px] max-h-[280px] object-contain">
                        <p class="font-[500] text-white text-[20px] md:text-[24px] leading-[24px] md:leading-[28px] tracking-[-2%]">Graduated the academy as a top student.</p>
                    </div>
                    <img src="/public/images/creative_journey_2021.png" alt="Toni" class="max-w-[200px] md:max-w-[280px] object-contain z-10 mt-0 md:-mt-[15%] self-end md:self-auto">
                </div>
            </div>

            <!-- Year 2022 -->
            <div class="min-w-[550px] md:min-w-[850px] max-h-[460px] md:min-h-[660px] border-l border-[#F1F5FB] px-4 md:px-9 snap-start flex flex-col gap-6 relative">
                <!-- Background Lines -->
                <div class="absolute inset-0 w-full h-full flex justify-between items-center px-9 md:px-20 pointer-events-none z-0">
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                </div>

                <span class="text-[40px] md:text-[56px] leading-[48px] md:leading-[64px] font-[500] text-[#F1F5FB] block mb-4 md:mb-8 relative -ml-[13.8%] md:-ml-[14%] bg-[#111112] w-fit px-2 z-10">
                    2022
                    <span class="block ms-0 text-center mt-0 md:mt-5">
                        •
                    </span>
                </span>
                <div class="flex flex-row gap-0 md:gap-16">
                    <div class="bg-[#191919] p-2 md:p-4 max-w-[215px] md:max-w-[312px] flex flex-col gap-4 -ms-[10%] md:-ms-[12%] z-10 relative">
                        <img src="/public/images/journey_photo_google.png" alt="Google" class="max-w-full md:max-w-[280px] max-h-[280px] object-contain">
                        <p class="font-[500] text-white text-[20px] md:text-[24px] leading-[24px] md:leading-[28px] tracking-[-2%]">Enrolled in the Google UX Certificate program</p>
                    </div>
                    <div class="z-10 mt-0 md:-mt-[5%] flex flex-col gap-4 justify-center items-center">
                        <img src="/public/images/creative_journey_2022.png" alt="Toni" class="max-w-[180px] md:max-w-[315px] object-contain self-center md:self-auto md:ms-0">
                        <p class="font-[500] text-white text-[16px] md:text-[20px] leading-[20px] md:leading-[24px] tracking-[-2%] max-w-[60%] md:max-w-[85%] text-center ms-0 md:-ms-[5%]">Completed the program the same year with the highest possible grade</p>
                    </div>
                </div>
            </div>
            <!-- Year 2023 -->
            <div class="min-w-[550px] md:min-w-[850px] max-h-[460px] md:min-h-[660px] border-l border-[#F1F5FB] px-4 md:px-9 snap-start flex flex-col gap-6 relative">
                <!-- Background Lines -->
                <div class="absolute inset-0 w-full h-full flex justify-between items-center px-9 md:px-20 pointer-events-none z-0">
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                </div>

                <span class="text-[40px] md:text-[56px] leading-[48px] md:leading-[64px] font-[500] text-[#F1F5FB] block mb-4 md:mb-8 relative -ml-[13.8%] md:-ml-[14%] bg-[#111112] w-fit px-2 z-10">
                    2023
                    <span class="block ms-0 text-center mt-0 md:mt-5">
                        •
                    </span>
                </span>
                <div class="flex flex-row gap-20 md:gap-20">
                    <div class="bg-[#191919] p-2 md:p-4 max-w-[215px] md:max-w-[312px] flex flex-col gap-4 -ms-[10%] md:-ms-[12%] z-10 relative">
                        <img src="/public/images/journey_photo_freelancing.png" alt="Freelancing" class="max-w-full md:max-w-[280px] max-h-[280px] object-contain">
                        <p class="font-[500] text-white text-[20px] md:text-[24px] leading-[24px] md:leading-[28px] tracking-[-2%]">Began freelancing and working with clients</p>
                    </div>
                    <img src="/public/images/creative_journey_2023.png" alt="Toni" class="max-w-[200px] md:max-w-[365px] object-contain z-10 md:self-auto">
                </div>
            </div>

            <!-- Year 2024 -->
            <div class="min-w-[550px] md:min-w-[850px] max-h-[460px] md:min-h-[660px] border-l border-[#F1F5FB] px-4 md:px-9 snap-start flex flex-col gap-6 relative">
                <!-- Background Lines -->
                <div class="absolute inset-0 w-full h-full flex justify-between items-center px-9 md:px-20 pointer-events-none z-0">
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                </div>

                <span class="text-[40px] md:text-[56px] leading-[48px] md:leading-[64px] font-[500] text-[#F1F5FB] block mb-4 md:mb-8 relative -ml-[13.8%] md:-ml-[14%] bg-[#111112] w-fit px-2 z-10">
                    2024
                    <span class="block ms-0 text-center mt-0 md:mt-5">
                        •
                    </span>
                </span>
                <div class="flex flex-row gap-20 md:gap-24">
                    <div class="bg-[#191919] p-2 md:p-4 max-w-[215px] md:max-w-[312px] flex flex-col gap-4 -ms-[10%] md:-ms-[12%] z-10 relative">
                        <img src="/public/images/journey_photo_thrasker.png" alt="Thrasker" class="max-w-full md:max-w-[280px] max-h-[280px] object-contain">
                        <p class="font-[500] text-white text-[20px] md:text-[24px] leading-[24px] md:leading-[28px] tracking-[-2%]">Landed a UX/UI role at Thrasker</p>
                    </div>
                    <img src="/public/images/creative_journey_2024.png" alt="Toni" class="max-w-[200px] md:max-w-[345px] object-contain z-10 mt-0 md:-mt-[10%] self-end md:self-auto">
                </div>
            </div>

            <!-- Year 2025 -->
            <div class="min-w-[550px] md:min-w-[850px] max-h-[460px] md:min-h-[660px] border-l border-[#F1F5FB] px-4 md:px-9 snap-start flex flex-col gap-6 relative">
                <!-- Background Lines -->
                <div class="absolute inset-0 w-full h-full flex justify-between items-center px-9 md:px-20 pointer-events-none z-0">
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                    <div class="h-[70%] md:h-[80%] w-[1px] bg-[#333335] mt-[20%] md:mt-[6%]"></div>
                    <div class="h-[80%] md:h-[90%] w-[1px] bg-[#333335] mt-[20%] md:mt-[5%]"></div>
                </div>

                <span class="text-[40px] md:text-[56px] leading-[48px] md:leading-[64px] font-[500] text-[#F1F5FB] block mb-4 md:mb-8 relative -ml-[13.8%] md:-ml-[14%] bg-[#111112] w-fit px-2 z-10">
                    2025
                    <span class="block ms-0 text-center mt-0 md:mt-5">
                        •
                    </span>
                </span>
                <div class="flex flex-row gap-20 md:gap-24">
                    <div class="bg-[#191919] p-2 md:p-4 max-w-[215px] md:max-w-[312px] flex flex-col gap-4 -ms-[10%] md:-ms-[12%] z-10 relative">
                        <img src="/public/images/journey_photo_independent.png" alt="Independent" class="max-w-full md:max-w-[280px] max-h-[280px] object-contain">
                        <p class="font-[500] text-white text-[20px] md:text-[23px] leading-[24px] md:leading-[28px] tracking-[-2%]">Promoted & trusted to lead projects independently</p>
                    </div>
                    <img src="/public/images/creative_journey_2025.png" alt="Toni" class="max-w-[200px] md:max-w-[365px] object-contain z-10 mt-0 md:-mt-[10%] self-end md:self-auto">
                </div>
            </div>

            <!-- Year 2026 -->
            <div class="min-w-[400px] max-h-[460px] md:min-h-[660px] border-l border-[#F1F5FB] px-4 md:px-9 snap-start flex flex-col gap-6 relative">

                <span class="text-[40px] md:text-[56px] leading-[48px] md:leading-[64px] font-[500] text-[#F1F5FB] block mb-4 md:mb-8 relative -ml-[15%] md:-ml-[33.5%] bg-[#111112] w-fit px-2 z-10">
                    2026
                    <span class="block ms-0 text-center mt-0 md:mt-5">
                        •
                    </span>
                </span>
                <div class="bg-[#191919] p-2 md:p-4 max-w-[215px] md:max-w-[312px] flex flex-col gap-4 -ms-[10%] md:-ms-[25%] z-10 relative">
                    <img src="/public/images/journey_photo_2026.png" alt="Brainster" class="max-w-full md:max-w-[280px] max-h-[280px] object-contain">
                    <p class="font-[500] text-white text-[20px] md:text-[24px] leading-[24px] md:leading-[28px] tracking-[-2%]">New goals and bigger projects to come</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="flex justify-between items-end mb-4 md:mb-12 px-4 md:px-15">
            <div>
                <h3 class="font-[500] text-[#F1F5FB] text-[40px] md:text-[56px] leading-[48px] md:leading-[64px] tracking-[-2%] mb-3 md:mb-5">Discover my projects</h3>
                <p class="text-[18px] md:text-[20px] text-[#9AA0A8] leading-[140%]">Explore my case studies I’ve worked on</p>
            </div>   
            <button class="group flex justify-center items-center cursor-pointer bg-[#F1F5FB] py-[10px] px-[20px] rounded-full text-[#111112] font-[600] w-full md:w-auto lets-connect-trigger">
                <svg class="transition-all duration-300 ease-in-out w-[6px] mr-2 opacity-100 group-hover:w-0 group-hover:mr-0 group-hover:opacity-0" xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                    <circle cx="3" cy="3" r="3" fill="#111112"/>
                </svg>
                Let's Connect
                <svg class="transition-all duration-300 ease-in-out w-0 ml-0 opacity-0 group-hover:w-[6px] group-hover:ml-2 group-hover:opacity-100" xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                    <circle cx="3" cy="3" r="3" fill="#111112"/>
                </svg>
            </button>     
        </div>
        <div class="flex flex-col relative" id="project-list">
            <div id="custom-tooltip" class="fixed pointer-events-none opacity-0 transition-opacity duration-200 z-50 bg-[#F1F5FB] text-[#111112] px-4 py-2 rounded-full font-[500] text-[20px] transform translate-x-4 translate-y-4">
                View Project
            </div>

            <a href="/projects/crm" class="project-item group relative border-y border-[#2A2A2C] px-4 md:px-15 py-6 flex justify-between items-center transition-colors duration-500" data-project="CRM Web App">
                <div class="absolute inset-0 bg-gradient-to-b from-[#2A2A2C]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                <p class="text-[20px] md:text-[32px] text-[#F1F5FB] md:text-[#9AA0A8] leading-[24px] md:leading-[40px] font-[500] group-hover:text-[#F1F5FB] transition-colors duration-300 relative z-40">• CRM Web App</p>
                <div class="relative z-10 w-[172px] h-[120px] md:h-full hidden md:flex items-start justify-end">
                    <img src="/public/images/left-crm.jpg" alt="CRM Web App" class="absolute top-0 right-15 max-w-[172px] z-10 transition-transform duration-500 ease-out group-hover:-translate-x-[320px]">
                    <img src="/public/images/centre-crm.jpg" alt="CRM Web App" class="absolute top-0 right-7 max-w-[172px] z-20 transition-transform duration-500 ease-out group-hover:-translate-x-[162px]">
                    <img src="/public/images/right-crm.jpg" alt="CRM Web App" class="relative max-w-[172px] z-30">
                </div>
            </a>

            <a href="/projects/illu" class="project-item group relative border-b border-[#2A2A2C] px-4 md:px-15 py-6 flex justify-between items-center transition-colors duration-500" data-project="Illu">
                <div class="absolute inset-0 bg-gradient-to-b from-[#2A2A2C]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                <p class="text-[20px] md:text-[32px] text-[#F1F5FB] md:text-[#9AA0A8] leading-[24px] md:leading-[40px] font-[500] group-hover:text-[#F1F5FB] transition-colors duration-300 relative z-40">• Illu</p>
                <div class="relative z-10 w-[172px] h-[120px] md:h-full hidden md:flex items-start justify-end">
                    <img src="/public/images/left-illu.jpg" alt="Illu" class="absolute top-0 right-15 max-w-[172px] z-10 transition-transform duration-500 ease-out group-hover:-translate-x-[320px]">
                    <img src="/public/images/centre-illu.jpg" alt="Illu" class="absolute top-0 right-7 max-w-[172px] z-20 transition-transform duration-500 ease-out group-hover:-translate-x-[162px]">
                    <img src="/public/images/right-illu.jpg" alt="Illu" class="relative max-w-[172px] z-30">
                </div>
            </a>

            <a href="/projects/kutura" class="project-item group relative border-b border-[#2A2A2C] px-4 md:px-15 py-6 flex justify-between items-center transition-colors duration-500" data-project="Kutura">
                <div class="absolute inset-0 bg-gradient-to-b from-[#2A2A2C] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                <p class="text-[20px] md:text-[32px] md:text-[#9AA0A8] text-[#F1F5FB] leading-[24px] md:leading-[40px] font-[500] group-hover:text-[#F1F5FB] transition-colors duration-300 relative z-40">• Kutura</p>
                <div class="relative z-10 w-[172px] h-[120px] md:h-full hidden md:flex items-start justify-end">
                    <img src="/public/images/left-kutura.jpg" alt="Kutura" class="absolute top-0 right-15 max-w-[172px] z-10 transition-transform duration-500 ease-out group-hover:-translate-x-[320px]">
                    <img src="/public/images/centre-kutura.jpg" alt="Kutura" class="absolute top-0 right-7 max-w-[172px] z-20 transition-transform duration-500 ease-out group-hover:-translate-x-[162px]">
                    <img src="/public/images/right-kutura.jpg" alt="Kutura" class="relative max-w-[172px] z-30">
                </div>
            </a>

            <a href="/projects/machsfive" class="project-item group relative border-b border-[#2A2A2C] px-4 md:px-15 py-6 flex justify-between items-center transition-colors duration-500" data-project="Machsfive">
                <div class="absolute inset-0 bg-gradient-to-b from-[#2A2A2C] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                <p class="text-[20px] md:text-[32px] md:text-[#9AA0A8] text-[#F1F5FB] leading-[24px] md:leading-[40px] font-[500] group-hover:text-[#F1F5FB] transition-colors duration-300 relative z-40">• Machsfive</p>
                <div class="relative z-10 w-[172px] h-[120px] md:h-full hidden md:flex items-start justify-end">
                    <img src="/public/images/left-machsfive.jpg" alt="Machsfive" class="absolute top-0 right-15 max-w-[172px] z-10 transition-transform duration-500 ease-out group-hover:-translate-x-[320px]">
                    <img src="/public/images/centre-machsfive.jpg" alt="Machsfive" class="absolute top-0 right-7 max-w-[172px] z-20 transition-transform duration-500 ease-out group-hover:-translate-x-[162px]">
                    <img src="/public/images/right-machsfive.jpg" alt="Machsfive" class="relative max-w-[172px] z-30">
                </div>
            </a>

            <a href="/projects/lean-logic" class="project-item group relative border-b border-[#2A2A2C] px-4 md:px-15 py-6 flex justify-between items-center transition-colors duration-500" data-project="Lean Logic">
                <div class="absolute inset-0 bg-gradient-to-b from-[#2A2A2C] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                <p class="text-[20px] md:text-[32px] md:text-[#9AA0A8] text-[#F1F5FB] leading-[24px] md:leading-[40px] font-[500] group-hover:text-[#F1F5FB] transition-colors duration-300 relative z-40">• Lean Logic</p>
                <div class="relative z-10 w-[172px] h-[120px] md:h-full hidden md:flex items-start justify-end">
                    <img src="/public/images/left-lean.jpg" alt="Lean Logic" class="absolute top-0 right-15 max-w-[172px] z-10 transition-transform duration-500 ease-out group-hover:-translate-x-[320px]">
                    <img src="/public/images/centre-lean.jpg" alt="Lean Logic" class="absolute top-0 right-7 max-w-[172px] z-20 transition-transform duration-500 ease-out group-hover:-translate-x-[162px]">
                    <img src="/public/images/right-lean.jpg" alt="Lean Logic" class="relative max-w-[172px] z-30">
                </div>
            </a>

            <a href="/projects/puff-n-stuff" class="project-item group relative border-b border-[#2A2A2C] px-4 md:px-15 py-6 flex justify-between items-center transition-colors duration-500" data-project="Puff n Stuff">
                <div class="absolute inset-0 bg-gradient-to-b from-[#2A2A2C] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                <p class="text-[20px] md:text-[32px] md:text-[#9AA0A8] text-[#F1F5FB] leading-[24px] md:leading-[40px] font-[500] group-hover:text-[#F1F5FB] transition-colors duration-300 relative z-40">• Puff n Stuff</p>
                <div class="relative z-10 w-[172px] h-[120px] md:h-full hidden md:flex items-start justify-end">
                    <img src="/public/images/left-puff.jpg" alt="Puff n Stuff" class="absolute top-0 right-15 max-w-[172px] z-10 transition-transform duration-500 ease-out group-hover:-translate-x-[320px]">
                    <img src="/public/images/centre-puff.jpg" alt="Puff n Stuff" class="absolute top-0 right-7 max-w-[172px] z-20 transition-transform duration-500 ease-out group-hover:-translate-x-[162px]">
                    <img src="/public/images/right-puff.jpg" alt="Puff n Stuff" class="relative max-w-[172px] z-30">
                </div>
            </a>
        </div>
    </section>

    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const container = document.getElementById('timelineContainer');
            const leftBtn = document.getElementById('scrollLeft');
            const rightBtn = document.getElementById('scrollRight');
            const itemWidth = 200; // Approximate width of one item including padding

            rightBtn.addEventListener('click', () => {
                container.scrollBy({ left: itemWidth, behavior: 'smooth' });
            });

            leftBtn.addEventListener('click', () => {
                container.scrollBy({ left: -itemWidth, behavior: 'smooth' });
            });

            // Tooltip Project
            const tooltip = document.getElementById('custom-tooltip');
            const projectItems = document.querySelectorAll('.project-item');

            projectItems.forEach(item => {
                item.addEventListener('mouseenter', () => {
                    tooltip.classList.remove('opacity-0');
                    tooltip.textContent = 'View ' + item.getAttribute('data-project');
                });
                
                item.addEventListener('mouseleave', () => {
                    tooltip.classList.add('opacity-0');
                });

                item.addEventListener('mousemove', (e) => {
                    tooltip.style.left = e.clientX + 'px';
                    tooltip.style.top = e.clientY + 'px';
                });
            });
        });
    </script>
</main>

<?php include '../includes/footer.php'; ?>
