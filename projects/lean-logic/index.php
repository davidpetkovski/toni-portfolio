<?php include '../../includes/header.php'; ?>

<main class="min-h-screen bg-[#111112] text-[#F1F5FB]">
    <?php $navTextColor = '#F1F5FB'; include '../../includes/nav.php'; ?>

    <section class="pt-32 md:pt-52 px-4 md:px-15 border-b border-[#3E3F41] pb-4 md:pb-8 flex flex-col md:flex-row justify-between items-start md:items-center">
        <h1 class="text-[40px] md:text-[56px] leading-[64px] tracking-[-2%]">Lean Logic</h1>
        <a href="https://lean-logic-services.netlify.app/" target="_blank" class="group flex justify-center items-center cursor-pointer bg-[#F1F5FB] py-[10px] px-[20px] rounded-full text-[#111112] font-[500] w-full md:w-auto">
            <svg class="transition-all duration-300 ease-in-out w-[6px] mr-2 opacity-100 group-hover:w-0 group-hover:mr-0 group-hover:opacity-0" xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                <circle cx="3" cy="3" r="3" fill="#111112"/>
            </svg>
            Live Website
            <svg class="transition-all duration-300 ease-in-out w-0 ml-0 opacity-0 group-hover:w-[6px] group-hover:ml-2 group-hover:opacity-100" xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                <circle cx="3" cy="3" r="3" fill="#111112"/>
            </svg>
        </a>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-3 px-4 md:px-15 py-6 md:py-8 gap-10 md:gap-14">
        <div class="col-span-1">
            <p class="text-[20px] md:text-[24px] leading-[24px] md:leading-[30px] font-[500] text-[#F1F5FB] mb-8 md:mb-36">
                Lean Logic is a high-performance platform bridging B2B consulting with a proprietary SaaS app. I designed a high-clarity interface and custom graphics to unify service-based expertise with digital product efficiency.
            </p>
            <div class="flex gap-3 md:gap-4 flex-row flex-wrap md:flex-col items-start text-[16px] md:text-[20px] sticky top-32">
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
        <div class="col-span-1 md:col-span-2">
            <img src="/public/images/leanlogic_case_study_1.jpg" alt="Lean Logic" class="w-full object-contain mb-8 md:mb-24">
            <div id="project-text-container" class="relative max-h-[530px] overflow-hidden transition-all duration-500">
                <p class="text-[24px] md:text-[32px] leading-[30px] md:leading-[48px] font-[500] text-[#F1F5FB]">The goal was to create a unified digital home for Lean Logic’s dual offerings: high-touch consulting and high-tech software. The challenge lay in designing a user experience that allows users to easily pivot between learning about "Onsite Training" and subscribing to the "Leansite" SaaS platform without losing the overall brand narrative of efficiency and growth.
                    <br><br>
                    The Aesthetic-Usability Effect: Professional Authority In the consulting world, trust is the primary currency. I utilized a clean, structured UI and custom-made graphics to establish an immediate sense of professional authority. This application of the Aesthetic-Usability Effect ensures that potential clients perceive the brand as organized, capable, and modern.
                    <br><br>
                    Managing Cognitive Load To prevent Choice Overload, I designed a dual-path navigation system. One path focuses on service-based growth (consulting), while the other highlights the automated tools (SaaS). By using clear Visual Hierarchy and distinct sections for each, I ensured users can find the specific solution they need without feeling overwhelmed by the breadth of the company's offerings.
                    <br><br>
                    Instant Credibility By integrating dynamic elements like "Lean Mode: On" and interactive pricing tables for the SaaS plans, I optimized for the Doherty Threshold. These rapid, responsive interactions keep the user engaged and provide a high-speed experience that mirrors the "lean and fast" philosophy of the business itself.
                    <br><br>
                    I focused on creating a seamless blend of educational content and direct action. I developed a library of Custom Technical Graphics to visualize complex lean concepts like "Root Cause Analysis" and "Cell Design," making them accessible to a broad business audience. To ensure the transition from consulting to software felt natural, I engineered a Hybrid Navigation System that maintains brand consistency while shifting the user's mindset from "Services" to "Software." This ensures a cohesive journey where the visual identity supports the logic of operational excellence.
                    <br><br>
                    Lean Logic is a comprehensive B2B platform that integrates consulting services with a proprietary SaaS tool. The design leverages custom visual storytelling and a hybrid architecture to streamline the user journey from operational assessment to digital implementation.
                </p>
                <div id="project-fade-overlay" class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-[#111112] via-[#111112]/90 to-transparent flex items-end justify-start pb-0 transition-all duration-300">
                </div>
            </div>
                <button id="project-read-more-btn" onclick="toggleReadMore()" class="text-[#F1F5FB] font-[500] text-[24px] md:text-[32px] leading-[48px] py-1 font-[500] cursor-pointer flex items-center gap-4 border-b-[3px] border-transparent hover:border-[#F1F5FB] transition-all duration-300">
                    <span id="project-read-more-text">Read More</span>
                    <svg id="project-read-more-icon" class="transition-transform duration-300 size-[20px] md:size-[24px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M11.995 0V24M24 11.995L0 11.995" stroke="#F1F5FB" stroke-width="3"/>
                    </svg>
                </button>
        </div>
    </section>

    <section class="px-4 md:px-15 flex flex-col gap-3 md:gap-6 mb-16 md:mb-24">
        <img src="/public/images/leanlogic_case_study_2.jpg" alt="Lean Logic" class="w-full object-contain">
        <img src="/public/images/leanlogic_case_study_3.jpg" alt="Lean Logic" class="w-full object-contain">
    </section>

    <section>
        <div class="flex justify-between items-end mb-4 md:mb-12 px-4 md:px-15">
            <div>
                <h3 class="font-[500] text-[#F1F5FB] text-[40px] md:text-[56px] leading-[64px] tracking-[-2%] mb-3 md:mb-5"><span class="hidden md:block">Discover more</span><span class="block md:hidden">Additional Projects</span></h3>
                <p class="text-[20px] text-[#9AA0A8] leading-[140%]">Explore more case studies I’ve worked on aswell</p>
            </div>   
            <button class="group hidden md:flex justify-center items-center cursor-pointer bg-[#F1F5FB] py-[10px] px-[20px] rounded-full text-[#111112] font-[500] w-full md:w-auto lets-connect-trigger">
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

            <a href="/projects/crm" class="project-item group relative border-y border-[#2A2A2C] px-4 md:px-15 py-8 flex justify-between items-center transition-colors duration-500" data-project="CRM Web App">
                <div class="absolute inset-0 bg-gradient-to-b from-[#2A2A2C]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                <p class="text-[20px] md:text-[32px] text-[#F1F5FB] md:text-[#9AA0A8] leading-[24px] md:leading-[40px] font-[500] group-hover:text-[#F1F5FB] transition-colors duration-300 relative z-40">• CRM Web App</p>
                <div class="relative z-10 w-[172px] h-[120px] md:h-full hidden md:flex items-start justify-end">
                    <img src="/public/images/left-crm.jpg" alt="CRM Web App" class="absolute top-0 right-15 max-w-[172px] z-10 transition-transform duration-500 ease-out group-hover:-translate-x-[320px]">
                    <img src="/public/images/centre-crm.jpg" alt="CRM Web App" class="absolute top-0 right-7 max-w-[172px] z-20 transition-transform duration-500 ease-out group-hover:-translate-x-[162px]">
                    <img src="/public/images/right-crm.jpg" alt="CRM Web App" class="relative max-w-[172px] z-30">
                </div>
            </a>

            <a href="/projects/illu" class="project-item group relative border-b border-[#2A2A2C] px-4 md:px-15 py-8 flex justify-between items-center transition-colors duration-500" data-project="Illu">
                <div class="absolute inset-0 bg-gradient-to-b from-[#2A2A2C]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                <p class="text-[20px] md:text-[32px] text-[#F1F5FB] md:text-[#9AA0A8] leading-[24px] md:leading-[40px] font-[500] group-hover:text-[#F1F5FB] transition-colors duration-300 relative z-40">• Illu</p>
                <div class="relative z-10 w-[172px] h-[120px] md:h-full hidden md:flex items-start justify-end">
                    <img src="/public/images/left-illu.jpg" alt="Illu" class="absolute top-0 right-15 max-w-[172px] z-10 transition-transform duration-500 ease-out group-hover:-translate-x-[320px]">
                    <img src="/public/images/centre-illu.jpg" alt="Illu" class="absolute top-0 right-7 max-w-[172px] z-20 transition-transform duration-500 ease-out group-hover:-translate-x-[162px]">
                    <img src="/public/images/right-illu.jpg" alt="Illu" class="relative max-w-[172px] z-30">
                </div>
            </a>
            
            <a href="/projects/kutura" class="project-item group relative border-b border-[#2A2A2C] px-4 md:px-15 py-8 flex justify-between items-center transition-colors duration-500" data-project="Kutura">
                <div class="absolute inset-0 bg-gradient-to-b from-[#2A2A2C] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                <p class="text-[20px] md:text-[32px] md:text-[#9AA0A8] text-[#F1F5FB] leading-[24px] md:leading-[40px] font-[500] group-hover:text-[#F1F5FB] transition-colors duration-300 relative z-40">• Kutura</p>
                <div class="relative z-10 w-[172px] h-[120px] md:h-full hidden md:flex items-start justify-end">
                    <img src="/public/images/left-kutura.jpg" alt="Kutura" class="absolute top-0 right-15 max-w-[172px] z-10 transition-transform duration-500 ease-out group-hover:-translate-x-[320px]">
                    <img src="/public/images/centre-kutura.jpg" alt="Kutura" class="absolute top-0 right-7 max-w-[172px] z-20 transition-transform duration-500 ease-out group-hover:-translate-x-[162px]">
                    <img src="/public/images/right-kutura.jpg" alt="Kutura" class="relative max-w-[172px] z-30">
                </div>
            </a>

            <a href="/projects/machsfive" class="project-item group relative border-b border-[#2A2A2C] px-4 md:px-15 py-8 flex justify-between items-center transition-colors duration-500" data-project="Machsfive">
                <div class="absolute inset-0 bg-gradient-to-b from-[#2A2A2C] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                <p class="text-[20px] md:text-[32px] md:text-[#9AA0A8] text-[#F1F5FB] leading-[24px] md:leading-[40px] font-[500] group-hover:text-[#F1F5FB] transition-colors duration-300 relative z-40">• Machsfive</p>
                <div class="relative z-10 w-[172px] h-[120px] md:h-full hidden md:flex items-start justify-end">
                    <img src="/public/images/left-machsfive.jpg" alt="CRM Web App" class="absolute top-0 right-15 max-w-[172px] z-10 transition-transform duration-500 ease-out group-hover:-translate-x-[320px]">
                    <img src="/public/images/centre-machsfive.jpg" alt="CRM Web App" class="absolute top-0 right-7 max-w-[172px] z-20 transition-transform duration-500 ease-out group-hover:-translate-x-[162px]">
                    <img src="/public/images/right-machsfive.jpg" alt="CRM Web App" class="relative max-w-[172px] z-30">
                </div>
            </a>

            <a href="/projects/puff-n-stuff" class="project-item group relative border-b border-[#2A2A2C] px-4 md:px-15 py-8 flex justify-between items-center transition-colors duration-500" data-project="Puff n Stuff">
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

    <?php include '../../includes/footer.php'; ?>

    <script>
        function toggleReadMore() {
            const container = document.getElementById('project-text-container');
            const overlay = document.getElementById('project-fade-overlay');
            const btnText = document.getElementById('project-read-more-text');
            const btnIcon = document.getElementById('project-read-more-icon');
            
            if (container.classList.contains('max-h-[530px]')) {
                // Expand
                container.classList.remove('max-h-[530px]', 'overflow-hidden');
                overlay.classList.remove('absolute', 'bottom-0', 'bg-gradient-to-t', 'from-[#111112]', 'via-[#111112]/90', 'to-transparent');
                overlay.classList.add('mt-8');
                btnText.textContent = 'Read Less';
                btnIcon.style.transform = 'rotate(45deg)'; 
            } else {
                // Collapse
                container.classList.add('max-h-[530px]', 'overflow-hidden');
                overlay.classList.add('absolute', 'bottom-0', 'bg-gradient-to-t', 'from-[#111112]', 'via-[#111112]/90', 'to-transparent');
                overlay.classList.remove('mt-8');
                btnText.textContent = 'Read More';
                btnIcon.style.transform = 'rotate(0deg)';
                container.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }

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
    </script>
</main>
