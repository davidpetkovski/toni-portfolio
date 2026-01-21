<?php include 'includes/header.php'; ?>

<main class="min-h-screen">
    <?php $disableGlassNav = true; include 'includes/nav.php'; ?>
    
    <section class="relative flex items-center justify-center md:h-screen overflow-hidden bg-[#111112] bg-contain bg-no-repeat bg-top md:bg-cover md:bg-center pb-12 pt-36" style="background-color: #111112; background-image: url('/public/images/hero-bg.png');">
        <div class="h-full flex flex-col justify-end items-start w-full px-4 md:px-15">
            <div class="flex flex-col md:flex-row justify-between items-end w-full mb-12">
                <div>
                    <p class="text-[18px] md:text-[20px] text-[#F1F5FB] font-[500] tracking-[0px] leading-[140%] mb-3">Hey I'm a...</p>

                    <h1 class="text-[40px] md:text-[56px] leading-[48px] md:leading-[64px] tracking-[-2%] text-[#9A9FA8] mb-3 md:mb-5">UX/UI Designer <span class="text-[#F1F5FB] block">That helps brands grow</span></h1>  

                    <p class="text-[#9AA0A8] text-[18px] md:text-[20px] font-[400] tracking-[0px] leading-[140%] mb-5 md:mb-0">I make brands look and work better with clear, purposeful design.</p>
                </div>
                <div class="flex flex-col md:flex-row items-center gap-2 md:gap-4 w-full md:w-auto">
                    <button class="group flex justify-center items-center cursor-pointer bg-[#F1F5FB] py-[10px] px-[20px] rounded-full text-[#111112] font-[600] w-full md:w-auto lets-connect-trigger">
                        <svg class="transition-all duration-300 ease-in-out w-[6px] mr-2 opacity-100 group-hover:w-0 group-hover:mr-0 group-hover:opacity-0" xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                            <circle cx="3" cy="3" r="3" fill="#111112"/>
                        </svg>
                        Let's Connect
                        <svg class="transition-all duration-300 ease-in-out w-0 ml-0 opacity-0 group-hover:w-[6px] group-hover:ml-2 group-hover:opacity-100" xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                            <circle cx="3" cy="3" r="3" fill="#111112"/>
                        </svg>
                    </button>
                    <a href="/work" class="flex justify-center items-center gap-2 cursor-pointer bg-transparent py-[10px] px-[20px] rounded-full text-[#F1F5FB] font-[600] border border-[#F1F5FB] w-full md:w-auto transition-colors duration-300 hover:bg-[#F1F5FB] hover:text-[#111112]">
                        View all of my work
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-[20px] w-full">
                <div class="group col-span-1 bg-[#171718] p-[12px] md:ps-[16px] md:py-[8px] md:pe-[8px] grid grid-cols-1 md:grid-cols-2 cursor-pointer">
                    <div class="col-span-1 gap-[16px] md:my-[8px]">
                        <p class="text-[14px] text-[#9AA0A8] font-[400] tracking-[-2%] leading-[140%] mb-[8px] md:mb-[16px]">Web app</p>
                        <p class="text-[18px] text-[#F1F5FB] font-[400] tracking-[-2%] leading-[140%] max-w-[90%] mb-4 md:mb-[60px]">Designed an internal tool to optimize design and dev workflows.</p>
                        <img src="/public/images/thrasker-logo.png" alt="thrasker-logo" class="max-w-[100px] hidden md:block">
                    </div>
                    <div class="col-span-1 relative">
                        <img src="/public/images/crm.jpg" alt="hero-project-image" class="w-full h-full object-contain hidden md:block">
                        <img src="/public/images/crm-mobile.jpg" alt="hero-project-image-alt" class="w-full h-full object-contain block md:hidden">
                        <div class="absolute top-2 right-2 bg-[#F1F5FB] p-[10px] overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none" class="transition-transform duration-500 ease-in-out group-hover:translate-x-[200%] group-hover:-translate-y-[200%]">
                                <path d="M0 10.7297L8.93346 1.79634H3.10034V0H12V8.89966H10.2037V3.06656L1.27031 12L0 10.7297Z" fill="#111112"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 -translate-x-[200%] translate-y-[200%] transition-transform duration-500 ease-in-out group-hover:translate-x-[-50%] group-hover:translate-y-[-50%]">
                                <path d="M0 10.7297L8.93346 1.79634H3.10034V0H12V8.89966H10.2037V3.06656L1.27031 12L0 10.7297Z" fill="#111112"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="group col-span-1 bg-[#171718] p-[12px] md:ps-[16px] md:py-[8px] md:pe-[8px] grid grid-cols-1 md:grid-cols-2 cursor-pointer">
                    <div class="col-span-1 gap-[16px] md:my-[8px]">
                        <p class="text-[14px] text-[#9AA0A8] font-[400] tracking-[-2%] leading-[140%] mb-[8px] md:mb-[16px]">Website</p>
                        <p class="text-[18px] text-[#F1F5FB] font-[400] tracking-[-2%] leading-[140%] max-w-[90%] mb-4 md:mb-[60px]">Modernized a premium brand to streamline client event planning.</p>
                        <img src="/public/images/illu-logo.png" alt="illu-logo" class="max-w-[33px] hidden md:block">
                    </div>
                    <div class="col-span-1 relative">
                        <img src="/public/images/illu.jpg" alt="hero-project-image" class="w-full h-full object-contain hidden md:block">
                        <img src="/public/images/illu-mobile.jpg" alt="hero-project-image-alt" class="w-full h-full object-contain block md:hidden">
                        <div class="absolute top-2 right-2 bg-[#F1F5FB] p-[10px] overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none" class="transition-transform duration-500 ease-in-out group-hover:translate-x-[200%] group-hover:-translate-y-[200%]">
                                <path d="M0 10.7297L8.93346 1.79634H3.10034V0H12V8.89966H10.2037V3.06656L1.27031 12L0 10.7297Z" fill="#111112"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 -translate-x-[200%] translate-y-[200%] transition-transform duration-500 ease-in-out group-hover:translate-x-[-50%] group-hover:translate-y-[-50%]">
                                <path d="M0 10.7297L8.93346 1.79634H3.10034V0H12V8.89966H10.2037V3.06656L1.27031 12L0 10.7297Z" fill="#111112"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="group col-span-1 bg-[#171718] p-[12px] md:ps-[16px] md:py-[8px] md:pe-[8px] grid grid-cols-1 md:grid-cols-2 cursor-pointer">
                    <div class="col-span-1 gap-[16px] md:my-[8px]">
                        <p class="text-[14px] text-[#9AA0A8] font-[400] tracking-[-2%] leading-[140%] mb-[8px] md:mb-[16px]">E-commerce</p>
                        <p class="text-[18px] text-[#F1F5FB] font-[400] tracking-[-2%] leading-[140%] max-w-[90%] mb-4 md:mb-[60px]">Designed a customer-centric shop to drive brand engagement.</p>
                        <img src="/public/images/puff-n-stuff-logo.png" alt="puff-n-stuff-logo" class="max-w-[64px] hidden md:block">
                    </div>
                    <div class="col-span-1 relative">
                        <img src="/public/images/puff.jpg" alt="hero-project-image" class="w-full h-full object-contain hidden md:block">
                        <img src="/public/images/puff-mobile.jpg" alt="hero-project-image-alt" class="w-full h-full object-contain block md:hidden">
                        <div class="absolute top-2 right-2 bg-[#F1F5FB] p-[10px] overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none" class="transition-transform duration-500 ease-in-out group-hover:translate-x-[200%] group-hover:-translate-y-[200%]">
                                <path d="M0 10.7297L8.93346 1.79634H3.10034V0H12V8.89966H10.2037V3.06656L1.27031 12L0 10.7297Z" fill="#111112"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 -translate-x-[200%] translate-y-[200%] transition-transform duration-500 ease-in-out group-hover:translate-x-[-50%] group-hover:translate-y-[-50%]">
                                <path d="M0 10.7297L8.93346 1.79634H3.10034V0H12V8.89966H10.2037V3.06656L1.27031 12L0 10.7297Z" fill="#111112"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="work" class="bg-[#111112] px-4 md:px-15 py-24">
        <p class="text-[16px] md:text-[20px] text-[#F1F5FB] font-[500] tracking-[0px] leading-[140%] mb-3">Little about me...</p>
        <p id="scroll-reveal-text" class="text-[24px] md:text-[40px] text-[#9aa0a8] font-[500] tracking-[-2%] leading-[30px] md:leading-[48px] w-full md:max-w-[80%] mb-12">I design apps and websites with a focus on clarity, usability, and clean execution, while building no-code websites in Framer with smooth interactions from concept to launch. Here are some of the brands I helped grow...</p>

        <div class="grid grid-cols-6 gap-[20px] hidden md:grid">
            <div class="col-span-1 bg-[#191919] flex justify-center min-h-[148px]">
                <img src="/public/images/thrasker-logo.png" alt="thrasker-logo" class="max-w-[132px] h-full object-contain">
            </div>
            <div class="col-span-1 bg-[#191919] flex justify-center min-h-[148px]">
                <img src="/public/images/copperleaf-cabinets-logo.png" alt="copperleaf-cabinets-logo" class="max-w-[140px] h-full object-contain">
            </div>
            <div class="col-span-1 bg-[#191919] flex justify-center min-h-[148px]">
                <img src="/public/images/puff-n-stuff-logo.png" alt="puff-n-stuff-logo" class="max-w-[100px] h-full object-contain">
            </div>
            <div class="col-span-1 bg-[#191919] flex justify-center min-h-[148px]">
                <img src="/public/images/leanlogic-logo.png" alt="leanlogic-logo" class="max-w-[120px] h-full object-contain">
            </div>
            <div class="col-span-1 bg-[#191919] flex justify-center min-h-[148px]">
                <img src="/public/images/alterego-logo.png" alt="alterego-logo" class="max-w-[112px] h-full object-contain">
            </div>
            <div class="col-span-1 bg-[#191919] flex justify-center min-h-[148px]">
                <img src="/public/images/fragman-logo.svg.png" alt="fragman-logo" class="max-w-[140px] h-full object-contain">
            </div>
            <div class="col-span-1 bg-[#191919] flex justify-center min-h-[148px]">
                <img src="/public/images/kutura-logo.png" alt="kutura-logo" class="max-w-[100px] h-full object-contain">
            </div>
            <div class="col-span-1 bg-[#191919] flex justify-center min-h-[148px]">
                <img src="/public/images/mosaic-logo.png" alt="mosaic-logo" class="max-w-[128px] h-full object-contain">
            </div>
            <div class="col-span-1 bg-[#191919] flex justify-center min-h-[148px]">
                <img src="/public/images/rapid-response-logo.png" alt="rapid-response-logo" class="max-w-[140px] h-full object-contain">
            </div>
            <div class="col-span-1 bg-[#191919] flex justify-center min-h-[148px]">
                <img src="/public/images/social-skin-logo.png" alt="social-skin-logo" class="max-w-[148px] h-full object-contain">
            </div>
            <div class="col-span-1 bg-[#191919] flex justify-center min-h-[148px]">
                <img src="/public/images/storm-blockers-logo.png" alt="storm-blockers-logo" class="max-w-[120px] h-full object-contain">
            </div>
            <div class="col-span-1 bg-[#191919] flex justify-center min-h-[148px]">
                <img src="/public/images/international-van-lines-logo.png" alt="international-van-lines-logo" class="max-w-[156px] h-full object-contain">
            </div>
        </div>
    </section>

    <section class="bg-[#111112]">
        <div class="flex justify-between items-center mb-4 md:mb-12 px-4 md:px-15">
            <h3 class="text-[40px] md:text-[56px] leading-[64px] tracking-[-2%] text-[#F1F5FB]">My selected work</h3>
            <div class="hidden md:flex items-center gap-[16px]">
                    <button class="group flex justify-center items-center cursor-pointer bg-[#F1F5FB] py-[10px] px-[20px] rounded-full text-[#111112] font-[600] w-full md:w-auto lets-connect-trigger">
                        <svg class="transition-all duration-300 ease-in-out w-[6px] mr-2 opacity-100 group-hover:w-0 group-hover:mr-0 group-hover:opacity-0" xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                            <circle cx="3" cy="3" r="3" fill="#111112"/>
                        </svg>
                        Let's Connect
                        <svg class="transition-all duration-300 ease-in-out w-0 ml-0 opacity-0 group-hover:w-[6px] group-hover:ml-2 group-hover:opacity-100" xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                            <circle cx="3" cy="3" r="3" fill="#111112"/>
                        </svg>
                    </button>
                    <a href="/work" class="flex justify-center items-center gap-2 cursor-pointer bg-transparent py-[10px] px-[20px] rounded-full text-[#F1F5FB] font-[600] border border-[#F1F5FB] w-full md:w-auto transition-colors duration-300 hover:bg-[#F1F5FB] hover:text-[#111112]">
                        View all of my work
                    </a>
            </div>
        </div>


        <div class="flex flex-col">
            <div class="group flex md:flex-row flex-col md:bg-gradient-to-b from-[#1b1b1c] to-[#111112] px-4 md:px-15 py-4 md:py-10 border-y border-[#2A2A2C] gap-[10%]">
                <div class="flex-1 flex flex-col justify-between order-2 md:order-1">
                    <p class="font-[400] text-[20px] md:text-[32px] leading-[24px] md:leading-[40px] tracking-[-2%] text-[#9AA0A8] mb-6 md:mb-0">
                        <span class="font-[500] text-[#F1F5FB] inline-block align-middle mr-2 md:mr-3">CRM Web App</span>
                        <svg class="mt-1 inline-block align-middle mr-2 transition-all duration-500 md:w-0 md:h-0 md:opacity-0 md:mt-0 md:mr-0 md:group-hover:w-[8px] md:group-hover:h-[8px] md:group-hover:opacity-100 md:group-hover:mt-1 md:group-hover:mr-2" xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                            <circle cx="4" cy="4" r="4" fill="#F1F5FB"/>
                        </svg>
                        <span class="inline transition-all duration-500 md:text-[0px] md:leading-none md:opacity-0 md:group-hover:text-[32px] md:group-hover:leading-[40px] md:group-hover:opacity-100">
                            <span>A high-performance</span> CRM designed to eliminate feature bloat through a strict hierarchy of Missions, Projects, and Tasks.
                        </span>
                    </p>
                    <div class="flex gap-3 md:gap-4 flex-wrap text-[16px] md:text-[20px] md:opacity-0 md:max-h-0 overflow-hidden md:group-hover:opacity-100 md:group-hover:max-h-[200px] transition-all duration-500 ease-in-out">
                        <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                            Design System
                        </div>
                        <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                            Workflow Optimization
                        </div>
                        <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                            Relational Architecture
                        </div>
                    </div>
                </div>
                <img src="/public/images/my-work-crm.png" alt="my-work-crm" class="md:w-[430px] shrink-0 order-1 md:order-2 mb-5 md:mb-0">
            </div>
            <div class="group flex md:flex-row flex-col md:bg-gradient-to-b from-[#1b1b1c] to-[#111112] px-4 md:px-15 py-4 md:py-10 border-y border-[#2A2A2C] gap-[10%]">
                <div class="flex-1 flex flex-col justify-between order-2 md:order-1">
                    <p class="font-[400] text-[20px] md:text-[32px] leading-[24px] md:leading-[40px] tracking-[-2%] text-[#9AA0A8] mb-6 md:mb-0">
                        <span class="font-[500] text-[#F1F5FB] inline-block align-middle mr-2 md:mr-3">LeanLogic</span>
                        <svg class="mt-1 inline-block align-middle mr-2 transition-all duration-500 md:w-0 md:h-0 md:opacity-0 md:mt-0 md:mr-0 md:group-hover:w-[8px] md:group-hover:h-[8px] md:group-hover:opacity-100 md:group-hover:mt-1 md:group-hover:mr-2" xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                            <circle cx="4" cy="4" r="4" fill="#F1F5FB"/>
                        </svg>
                        <span class="inline transition-all duration-500 md:text-[0px] md:leading-none md:opacity-0 md:group-hover:text-[32px] md:group-hover:leading-[40px] md:group-hover:opacity-100">
                            <span>Lean Logic is a </span>high-performance platform bridging B2B consulting with a proprietary SaaS app.
                        </span>
                    </p>
                    <div class="flex gap-3 md:gap-4 flex-wrap text-[16px] md:text-[20px] md:opacity-0 md:max-h-0 overflow-hidden md:group-hover:opacity-100 md:group-hover:max-h-[200px] transition-all duration-500 ease-in-out">
                        <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                            B2B Architecture
                        </div>
                        <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                            SaaS Integration
                        </div>
                        <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                            Information Design
                        </div>
                    </div>
                </div>
                <img src="/public/images/my-work-leanlogic.png" alt="my-work-leanlogic" class="md:w-[430px] shrink-0 order-1 md:order-2 mb-5 md:mb-0">
            </div>
            <div class="group flex md:flex-row flex-col md:bg-gradient-to-b from-[#1b1b1c] to-[#111112] px-4 md:px-15 py-4 md:py-10 border-y border-[#2A2A2C] gap-[10%]">
                <div class="flex-1 flex flex-col justify-between order-2 md:order-1">
                    <p class="font-[400] text-[20px] md:text-[32px] leading-[24px] md:leading-[40px] tracking-[-2%] text-[#9AA0A8] mb-6 md:mb-0">
                        <span class="font-[500] text-[#F1F5FB] inline-block align-middle mr-2 md:mr-3">Illu</span>
                        <svg class="mt-1 inline-block align-middle mr-2 transition-all duration-500 md:w-0 md:h-0 md:opacity-0 md:mt-0 md:mr-0 md:group-hover:w-[8px] md:group-hover:h-[8px] md:group-hover:opacity-100 md:group-hover:mt-1 md:group-hover:mr-2" xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                            <circle cx="4" cy="4" r="4" fill="#F1F5FB"/>
                        </svg>
                        <span class="inline transition-all duration-500 md:text-[0px] md:leading-none md:opacity-0 md:group-hover:text-[32px] md:group-hover:leading-[40px] md:group-hover:opacity-100">
                            <span>A high-performance</span> eCommerce platform designed to balance a minimalist aesthetic with aggressive conversion-driven features. </span>
                        </span>
                    </p>
                    <div class="flex gap-3 md:gap-4 flex-wrap text-[16px] md:text-[20px] md:opacity-0 md:max-h-0 overflow-hidden md:group-hover:opacity-100 md:group-hover:max-h-[200px] transition-all duration-500 ease-in-out">
                        <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                            Conversion Optimization
                        </div>
                        <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                            Mobile-Focused Design
                        </div>
                        <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                            Performance Aesthetics
                        </div>
                    </div>
                </div>
                <img src="/public/images/my-work-illu.png" alt="my-work-illu" class="md:w-[430px] shrink-0 order-1 md:order-2 mb-5 md:mb-0">
            </div>
            <div class="group flex md:flex-row flex-col md:bg-gradient-to-b from-[#1b1b1c] to-[#111112] px-4 md:px-15 py-4 md:py-10 border-y border-[#2A2A2C] gap-[10%]">
                <div class="flex-1 flex flex-col justify-between order-2 md:order-1">
                    <p class="font-[400] text-[20px] md:text-[32px] leading-[24px] md:leading-[40px] tracking-[-2%] text-[#9AA0A8] mb-6 md:mb-0">
                        <span class="font-[500] text-[#F1F5FB] inline-block align-middle mr-2 md:mr-3">Kutura</span>
                        <svg class="mt-1 inline-block align-middle mr-2 transition-all duration-500 md:w-0 md:h-0 md:opacity-0 md:mt-0 md:mr-0 md:group-hover:w-[8px] md:group-hover:h-[8px] md:group-hover:opacity-100 md:group-hover:mt-1 md:group-hover:mr-2" xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                            <circle cx="4" cy="4" r="4" fill="#F1F5FB"/>
                        </svg>
                        <span class="inline transition-all duration-500 md:text-[0px] md:leading-none md:opacity-0 md:group-hover:text-[32px] md:group-hover:leading-[40px] md:group-hover:opacity-100">
                            <span>Kutura is a high-energy</span> digital academy that fast-tracks young creatives into careers in design, marketing, and development.
                        </span>
                    </p>
                    <div class="flex gap-3 md:gap-4 flex-wrap text-[16px] md:text-[20px] md:opacity-0 md:max-h-0 overflow-hidden md:group-hover:opacity-100 md:group-hover:max-h-[200px] transition-all duration-500 ease-in-out">
                        <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                            Brand Identity
                        </div>
                        <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                            Interaction Design
                        </div>
                        <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                            Visual Storytelling
                        </div>
                    </div>
                </div>
                <img src="/public/images/my-work-kutura.png" alt="my-work-kutura" class="md:w-[430px] shrink-0 order-1 md:order-2 mb-5 md:mb-0">
            </div>
            <div class="group flex md:flex-row flex-col md:bg-gradient-to-b from-[#1b1b1c] to-[#111112] px-4 md:px-15 py-4 md:py-10 border-y border-[#2A2A2C] gap-[10%]">
                <div class="flex-1 flex flex-col justify-between order-2 md:order-1">
                    <p class="font-[400] text-[20px] md:text-[32px] leading-[24px] md:leading-[40px] tracking-[-2%] text-[#9AA0A8] mb-6 md:mb-0">
                        <span class="font-[500] text-[#F1F5FB] inline-block align-middle mr-2 md:mr-3">Puff n Stuff</span>
                        <svg class="mt-1 inline-block align-middle mr-2 transition-all duration-500 md:w-0 md:h-0 md:opacity-0 md:mt-0 md:mr-0 md:group-hover:w-[8px] md:group-hover:h-[8px] md:group-hover:opacity-100 md:group-hover:mt-1 md:group-hover:mr-2" xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                            <circle cx="4" cy="4" r="4" fill="#F1F5FB"/>
                        </svg>
                        <span class="inline transition-all duration-500 md:text-[0px] md:leading-none md:opacity-0 md:group-hover:text-[32px] md:group-hover:leading-[40px] md:group-hover:opacity-100">
                            <span>Puff 'n Stuff is a premier</span> US catering leader for large-scale corporate and wedding events.
                        </span>
                    </p>
                    <div class="flex gap-3 md:gap-4 flex-wrap text-[16px] md:text-[20px] md:opacity-0 md:max-h-0 overflow-hidden md:group-hover:opacity-100 md:group-hover:max-h-[200px] transition-all duration-500 ease-in-out">
                        <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                            Platform Redesign
                        </div>
                        <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                            Information Architecture
                        </div>
                        <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                            High-Volume UX
                        </div>
                    </div>
                </div>
                <img src="/public/images/my-work-puff.png" alt="my-work-puff" class="md:w-[430px] shrink-0 order-1 md:order-2 mb-5 md:mb-0">
            </div>
            <div class="group flex md:flex-row flex-col md:bg-gradient-to-b from-[#1b1b1c] to-[#111112] px-4 md:px-15 py-4 md:py-10 border-y border-[#2A2A2C] gap-[10%]">
                <div class="flex-1 flex flex-col justify-between order-2 md:order-1">
                    <p class="font-[400] text-[20px] md:text-[32px] leading-[24px] md:leading-[40px] tracking-[-2%] text-[#9AA0A8] mb-6 md:mb-0">
                        <span class="font-[500] text-[#F1F5FB] inline-block align-middle mr-2 md:mr-3">Machsfive</span>
                        <svg class="mt-1 inline-block align-middle mr-2 transition-all duration-500 md:w-0 md:h-0 md:opacity-0 md:mt-0 md:mr-0 md:group-hover:w-[8px] md:group-hover:h-[8px] md:group-hover:opacity-100 md:group-hover:mt-1 md:group-hover:mr-2" xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                            <circle cx="4" cy="4" r="4" fill="#F1F5FB"/>
                        </svg>
                        <span class="inline transition-all duration-500 md:text-[0px] md:leading-none md:opacity-0 md:group-hover:text-[32px] md:group-hover:leading-[40px] md:group-hover:opacity-100">
                            <span>Machsfive is a minimalist</span> portfolio designed for a contemporary artist to showcase evocative, expressionist works.
                        </span>
                    </p>
                    <div class="flex gap-3 md:gap-4 flex-wrap text-[16px] md:text-[20px] md:opacity-0 md:max-h-0 overflow-hidden md:group-hover:opacity-100 md:group-hover:max-h-[200px] transition-all duration-500 ease-in-out">
                        <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                            Minimalist Architecture
                        </div>
                        <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                            Immersive UI
                        </div>
                        <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                            Visual Storytelling 
                        </div>
                    </div>
                </div>
                <img src="/public/images/my-work-machsfive.png" alt="my-work-machsfive" class="md:w-[430px] shrink-0 order-1 md:order-2 mb-5 md:mb-0">
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const nav = document.getElementById('main-nav');
        // Hero is first section
        const heroSection = document.querySelector('section'); 
        
        window.addEventListener('scroll', () => {
            const scrollTop = window.scrollY || document.documentElement.scrollTop;
            // Use hero height or innerHeight as fallback
            const heroHeight = heroSection ? heroSection.offsetHeight : window.innerHeight;
            
            if (scrollTop < 50) {
                 // At the very top: Show Nav transparently
                 nav.classList.remove('-translate-y-full');
                 nav.style.backgroundColor = 'transparent';
                 nav.style.backdropFilter = 'none';
                 nav.style.webkitBackdropFilter = 'none';
                 nav.style.color = '#111112'; // Default dark text
            } else if (scrollTop >= 50 && scrollTop < heroHeight - 100) { 
                 // Scrolling through hero: Hide Nav
                 nav.classList.add('-translate-y-full');
            } else if (scrollTop >= heroHeight - 100) {
                 // After Hero: Show Nav with dark blurred background
                 nav.classList.remove('-translate-y-full');
                 nav.style.backgroundColor = 'rgba(0, 0, 0, 0.2)';
                 nav.style.backdropFilter = 'blur(8px)';
                 nav.style.webkitBackdropFilter = 'blur(8px)';
                 nav.style.color = '#F1F5FB'; // Light text for dark bg
            }

            // Scroll Reveal Text Animation
            const revealText = document.getElementById('scroll-reveal-text');
            if (revealText) {
                // Initialize split text if not done yet
                if (!revealText.dataset.split) {
                    const text = revealText.textContent;
                    revealText.innerHTML = '';
                    text.split('').forEach(char => {
                        const span = document.createElement('span');
                        span.textContent = char;
                        span.style.transition = 'color 0.1s ease'; // Smooth transition
                        revealText.appendChild(span);
                    });
                    revealText.dataset.split = "true";
                }

                const rect = revealText.getBoundingClientRect();
                const windowHeight = window.innerHeight;
                
                // Calculate progress: 0 when element enters viewport, 1 when it's centered/fully visible
                // Adjust offsets to control start/end timing
                const startOffset = windowHeight * 0.8; // Start animating when element is near bottom
                const endOffset = windowHeight * 0.3;   // Finish animating when element is higher up
                
                // Interactive progress calculation
                let progress = (windowHeight - rect.top - (windowHeight - startOffset)) / (startOffset - endOffset);
                progress = Math.max(0, Math.min(1, progress));

                const spans = revealText.querySelectorAll('span');
                const totalChars = spans.length;
                const charsToColor = Math.floor(progress * totalChars);

                spans.forEach((span, index) => {
                    if (index < charsToColor) {
                        span.style.color = '#F1F5FB'; // Highlighted color
                    } else {
                        span.style.color = '#9aa0a8'; // Base/faded color
                    }
                });
            }
        });
    });
</script>

<?php include 'includes/footer.php'; ?>
