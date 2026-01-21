<?php include '../includes/header.php'; ?>

<main class="min-h-screen bg-[#111112] text-[#F1F5FB]">
    <?php $navTextColor = '#F1F5FB'; include '../includes/nav.php'; ?>

    <section class="px-4 md:px-15 pt-32 md:pt-96 mb-12 md:mb-10">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="col-span-1">
                <h1 class="font-[500] text-[40px] md:text-[56px] leading-[48px] md:leading-[64px] tracking-[-2%] mb-5 md:max-w-[95%]">What I’ve been working on lately for clients</h1>
                <p class="text-[18px] md:text-[20px] leading-[140%] text-[#9AA0A8] mb-5 md:mb-0">A selection of client work designed to look great and perform well.</p>
            </div>
            <div class="col-span-1 flex justify-end items-end">
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
        </div>
    </section>

    <section class="px-4 md:px-15 mb-15">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <a href="/projects/crm" class="col-span-1 border-y border-[#2A2A2C] md:border-none py-4 md:py-0 group block">
                <img src="/public/images/my_projects_crm.png" alt="CRM" class="w-full object-contain mb-7">
                    <div class="flex items-center gap-2 flex-wrap text-[20px] md:text-[32px] leading-[24px] md:leading-[40px] tracking-[-2%] mb-7">
                    <h2 class="font-[500] text-[#F1F5FB]">CRM Web App <span class="text-[#9AA0A8] font-[400] inline md:hidden md:group-hover:inline">• Manage projects, clients, and communication in one system for agencies.</span></h2>
                    </div>
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
            </a>
            <a href="/projects/illu" class="col-span-1 border-b border-[#2A2A2C] md:border-none pb-4 md:py-0 group block">
                <img src="/public/images/my_projects_illu.png" alt="Illu" class="w-full object-contain mb-7">
                <div class="flex items-center gap-2 flex-wrap text-[20px] md:text-[32px] leading-[24px] md:leading-[40px] tracking-[-2%] mb-7">
                    <h2 class="font-[500] text-[#F1F5FB]">Illu <span class="text-[#9AA0A8] font-[400] inline md:hidden md:group-hover:inline">• A high-performance eCommerce platform designed to balance a minimalist aesthetic with aggressive conversion-driven features.</span></h2>
                </div>
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
            </a>
            <a href="/projects/puff-n-stuff" class="col-span-1 border-b border-[#2A2A2C] md:border-none pb-4 md:py-0 group block">
                <img src="/public/images/my_projects_puffnstuff.png" alt="Puff n Stuff" class="w-full object-contain mb-7">
                <div class="flex items-center gap-2 flex-wrap text-[20px] md:text-[32px] leading-[24px] md:leading-[40px] tracking-[-2%] mb-7">
                    <h2 class="font-[500] text-[#F1F5FB]">Puff n Stuff <span class="text-[#9AA0A8] font-[400] inline md:hidden md:group-hover:inline">• Puff 'n Stuff is a premier US catering leader for large-scale corporate and wedding events.</span></h2>
                </div>
                <div class="flex gap-3 md:gap-4 flex-wrap text-[16px] md:text-[20px] md:opacity-0 md:max-h-0 overflow-hidden md:group-hover:opacity-100 md:group-hover:max-h-[200px] transition-all duration-500 ease-in-out">
                    <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                        Platform Redesign
                    </div>
                    <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                        Information Architecture
                    </div>
                    <div class="bg-[#1D1E21] rounded-full text-[#F1F5FB] px-4 py-2">
                        High-volume UX
                    </div>
                </div>
            </a>
            <a href="/projects/kutura" class="col-span-1 border-b border-[#2A2A2C] md:border-none pb-4 md:py-0 group block">
                <img src="/public/images/my_projects_kutura.png" alt="Kutura" class="w-full object-contain mb-7">
                <div class="flex items-center gap-2 flex-wrap text-[20px] md:text-[32px] leading-[24px] md:leading-[40px] tracking-[-2%] mb-7">
                    <h2 class="font-[500] text-[#F1F5FB]">Kutura <span class="text-[#9AA0A8] font-[400] inline md:hidden md:group-hover:inline">• Kutura is a high-energy digital academy that fast-tracks young creatives into careers in design, marketing, and development.</span></h2>
                </div>
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
            </a>
            <a href="/projects/machsfive" class="col-span-1 border-b border-[#2A2A2C] md:border-none pb-4 md:py-0 group block">
                <img src="/public/images/my_projects_machsfive.png" alt="CRM" class="w-full object-contain mb-7">
                <div class="flex items-center gap-2 flex-wrap text-[20px] md:text-[32px] leading-[24px] md:leading-[40px] tracking-[-2%] mb-7">
                    <h2 class="font-[500] text-[#F1F5FB]">Machsfive <span class="text-[#9AA0A8] font-[400] inline md:hidden md:group-hover:inline">• Machsfive is a minimalist portfolio designed for a contemporary artist to showcase evocative, expressionist works.</span></h2>
                </div>
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
            </a>
            <a href="/projects/lean-logic" class="col-span-1 border-b border-[#2A2A2C] md:border-none pb-4 md:py-0 group block">
                <img src="/public/images/my_projects_leanlogic.png" alt="Lean Logic" class="w-full object-contain mb-7">
                <div class="flex items-center gap-2 flex-wrap text-[20px] md:text-[32px] leading-[24px] md:leading-[40px] tracking-[-2%] mb-7">
                    <h2 class="font-[500] text-[#F1F5FB]">Lean Logic <span class="text-[#9AA0A8] font-[400] inline md:hidden md:group-hover:inline">• Lean Logic is a high-performance platform bridging B2B consulting with a proprietary SaaS app.</span></h2>
                </div>
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
            </a>
        </div>
    </section>

    <section>
        <div class="flex justify-between items-end mb-8 px-4 md:px-15">
            <div>
                <h3 class="font-[500] text-[#F1F5FB] text-[40px] md:text-[56px] leading-[48px] md:leading-[64px] tracking-[-2%] mb-5">Additional Projects</h3>
                <p class="text-[18px] md:text-[20px] text-[#9AA0A8] leading-[140%]">Explore more client work through the live links below.</p>
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
        <div class="flex flex-col">
            <a href="https://internationalvanlines.com/" target="_blank" class="group relative border-b border-[#2A2A2C] px-4 md:px-15 py-5 md:py-10 flex justify-between items-center transition-colors duration-500">
                <div class="absolute inset-0 bg-gradient-to-b from-[#2A2A2C]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                <p class="text-[20px] md:text-[32px] text-[#F1F5FB] md:text-[#9AA0A8] leading-[24px] md:leading-[40px] font-[500] group-hover:text-[#F1F5FB] transition-colors duration-300 relative z-40">• International Van Lines</p>
                <div class="relative z-10 w-[172px] h-[120px] md:h-full hidden md:flex items-start justify-end">
                    <img src="/public/images/ivl-left.jpg" alt="International Van Lines" class="absolute top-0 right-15 max-w-[172px] z-10 transition-transform duration-500 ease-out group-hover:-translate-x-[320px]">
                    <img src="/public/images/ivl-centre.jpg" alt="International Van Lines" class="absolute top-0 right-7 max-w-[172px] z-20 transition-transform duration-500 ease-out group-hover:-translate-x-[162px]">
                    <img src="/public/images/ivl-right.jpg" alt="International Van Lines" class="relative max-w-[172px] z-30">
                </div>
            </a>
            <a href="https://copperleafcabinets.com/" target="_blank" class="group relative border-b border-[#2A2A2C] px-4 md:px-15 py-5 md:py-10 flex justify-between items-center transition-colors duration-500">
                <div class="absolute inset-0 bg-gradient-to-b from-[#2A2A2C]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                <p class="text-[20px] md:text-[32px] text-[#F1F5FB] md:text-[#9AA0A8] leading-[24px] md:leading-[40px] font-[500] group-hover:text-[#F1F5FB] transition-colors duration-300 relative z-40">• Copper Leaf</p>
                <div class="relative z-10 w-[172px] h-[120px] md:h-full hidden md:flex items-start justify-end">
                    <img src="/public/images/puff-left.jpg" alt="Copper Leaf" class="absolute top-0 right-15 max-w-[172px] z-10 transition-transform duration-500 ease-out group-hover:-translate-x-[320px]">
                    <img src="/public/images/puff-centre.jpg" alt="Copper Leaf" class="absolute top-0 right-7 max-w-[172px] z-20 transition-transform duration-500 ease-out group-hover:-translate-x-[162px]">
                    <img src="/public/images/puff-right.jpg" alt="Copper Leaf" class="relative max-w-[172px] z-30">
                </div>
            </a>
            <a href="https://stormblockers.com/" target="_blank" class="group relative border-b border-[#2A2A2C] px-4 md:px-15 py-5 md:py-10 flex justify-between items-center transition-colors duration-500">
                <div class="absolute inset-0 bg-gradient-to-b from-[#2A2A2C]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                <p class="text-[20px] md:text-[32px] text-[#F1F5FB] md:text-[#9AA0A8] leading-[24px] md:leading-[40px] font-[500] group-hover:text-[#F1F5FB] transition-colors duration-300 relative z-40">• Storm Blockers</p>
                <div class="relative z-10 w-[172px] h-[120px] md:h-full hidden md:flex items-start justify-end">
                    <img src="/public/images/storm-left.jpg" alt="Storm Blockers" class="absolute top-0 right-15 max-w-[172px] z-10 transition-transform duration-500 ease-out group-hover:-translate-x-[320px]">
                    <img src="/public/images/storm-centre.jpg" alt="Storm Blockers" class="absolute top-0 right-7 max-w-[172px] z-20 transition-transform duration-500 ease-out group-hover:-translate-x-[162px]">
                    <img src="/public/images/storm-right.jpg" alt="Storm Blockers" class="relative max-w-[172px] z-30">
                </div>
            </a>
            <a href="https://theartofderm.com/" target="_blank" class="group relative border-b border-[#2A2A2C] px-4 md:px-15 py-5 md:py-10 flex justify-between items-center transition-colors duration-500">
                <div class="absolute inset-0 bg-gradient-to-b from-[#2A2A2C]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                <p class="text-[20px] md:text-[32px] text-[#F1F5FB] md:text-[#9AA0A8] leading-[24px] md:leading-[40px] font-[500] group-hover:text-[#F1F5FB] transition-colors duration-300 relative z-40">• Art of Dermatology</p>
                <div class="relative z-10 w-[172px] h-[120px] md:h-full hidden md:flex items-start justify-end">
                    <img src="/public/images/aod-left.jpg" alt="Art of Dermatology" class="absolute top-0 right-15 max-w-[172px] z-10 transition-transform duration-500 ease-out group-hover:-translate-x-[320px]">
                    <img src="/public/images/aod-centre.jpg" alt="Art of Dermatology" class="absolute top-0 right-7 max-w-[172px] z-20 transition-transform duration-500 ease-out group-hover:-translate-x-[162px]">
                    <img src="/public/images/aod-right.jpg" alt="Art of Dermatology" class="relative max-w-[172px] z-30">
                </div>
            </a>
            <a href="https://themosaicspa.com/" target="_blank" class="group relative border-b border-[#2A2A2C] px-4 md:px-15 py-5 md:py-10 flex justify-between items-center transition-colors duration-500">
                <div class="absolute inset-0 bg-gradient-to-b from-[#2A2A2C]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                <p class="text-[20px] md:text-[32px] text-[#F1F5FB] md:text-[#9AA0A8] leading-[24px] md:leading-[40px] font-[500] group-hover:text-[#F1F5FB] transition-colors duration-300 relative z-40">• Mosaic Luxury Medical Spa</p>
                <div class="relative z-10 w-[172px] h-[120px] md:h-full hidden md:flex items-start justify-end">
                    <img src="/public/images/mosaic-left.jpg" alt="Mosaic Luxury Medical Spa" class="absolute top-0 right-15 max-w-[172px] z-10 transition-transform duration-500 ease-out group-hover:-translate-x-[320px]">
                    <img src="/public/images/mosaic-centre.jpg" alt="Mosaic Luxury Medical Spa" class="absolute top-0 right-7 max-w-[172px] z-20 transition-transform duration-500 ease-out group-hover:-translate-x-[162px]">
                    <img src="/public/images/mosaic-right.jpg" alt="Mosaic Luxury Medical Spa" class="relative max-w-[172px] z-30">
                </div>
            </a>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?>
</main>
