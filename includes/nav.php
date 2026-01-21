<?php
$navColor = isset($navTextColor) ? $navTextColor : '#111112';
$navBgClass = isset($disableGlassNav) && $disableGlassNav ? 'bg-transparent' : 'bg-[rgba(0,0,0,0.2)] backdrop-blur-[8px]';
?>
<nav id="main-nav" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 transform <?php echo $navBgClass; ?>" style="color: <?php echo $navColor; ?>">
    <div class="container px-4 mx-auto">
        <div class="flex justify-between items-center py-6  md:-mx-18">
            <a href="/" class="font-[500] text-[20px] text-current tracking-[0px] leading-[140%]">© Antonio Trpevski</a>
            <ul class="flex space-x-6 hidden md:flex">
                <li class="flex items-center gap-2 group cursor-pointer">
                    <svg class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 fill-current" xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                        <circle cx="3" cy="3" r="3"/>
                    </svg>
                    <a href="/work" class="font-[500] text-[20px] text-current tracking-[0px] leading-[140%]">My Work</a>
                </li>
                <li class="flex items-center gap-2 group cursor-pointer">
                    <svg class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 fill-current" xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                        <circle cx="3" cy="3" r="3"/>
                    </svg>
                    <a href="/about" class="font-[500] text-[20px] text-current tracking-[0px] leading-[140%]">About Me</a>
                </li>
                <li class="flex items-center gap-2 group cursor-pointer">
                    <svg class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 fill-current" xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                        <circle cx="3" cy="3" r="3"/>
                    </svg>
                    <a href="https://www.linkedin.com/in/antonio-trpevski-2b3994259/" target="_blank" class="font-[500] text-[20px] text-current tracking-[0px] leading-[140%]">Linkedin</a>
                </li>
            </ul>
            <div class="items-center gap-2 group cursor-pointer hidden md:flex lets-connect-trigger">
                <svg class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 fill-current" xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                    <circle cx="3" cy="3" r="3"/>
                </svg>
                <a href="#" class="font-[500] text-[20px] text-current tracking-[0px] leading-[140%]">Let's Connect</a>
            </div>
            
            <!-- Mobile Hamburger Button -->
            <button id="mobile-menu-trigger" class="md:hidden flex flex-col gap-[6px] cursor-pointer group text-current">
                <div class="w-[24px] h-[2px] bg-current transition-all duration-300 group-hover:w-[18px]"></div>
                <div class="w-[24px] h-[2px] bg-current transition-all duration-300"></div>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu" class="fixed inset-0 bg-[#111112] z-[80] hidden flex flex-col transform translate-x-[110%] transition-transform duration-500 ease-[cubic-bezier(0.16,1,0.3,1)]">
    <div class="container px-4 mx-auto h-full flex flex-col">
        <!-- Mobile Menu Header -->
        <div class="flex justify-between items-center py-6">
            <span class="font-[500] text-[14px] text-[#F1F5FB] tracking-[0px] leading-[140%]">© Antonio Trpevski</span>
            <button id="close-mobile-menu" class="text-[#F1F5FB] hover:text-gray-300 transition-colors cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect x="2.12109" y="0.213135" width="30" height="3" rx="1.5" transform="rotate(45 2.12109 0.213135)" fill="#F1F5FB"/>
                    <rect x="0.621094" y="21.2131" width="30" height="3" rx="1.5" transform="rotate(-45 0.621094 21.2131)" fill="#F1F5FB"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu Links -->
        <div class="flex flex-col gap-6 mt-6 flex-grow">
            <a href="/work" class="text-[40px] leading-[110%] font-[500] text-[#F1F5FB] hover:text-[#9AA0A8] transition-colors">My Work</a>
            <a href="/about" class="text-[40px] leading-[110%] font-[500] text-[#F1F5FB] hover:text-[#9AA0A8] transition-colors">About Me</a>
            <a href="https://www.linkedin.com/in/antonio-trpevski-2b3994259/" target="_blank" class="text-[40px] leading-[110%] font-[500] text-[#F1F5FB] hover:text-[#9AA0A8] transition-colors">LinkedIn</a>
            <button class="text-[40px] leading-[110%] font-[500] text-[#F1F5FB] hover:text-[#9AA0A8] transition-colors text-left lets-connect-trigger" onclick="closeMobileMenu()">Let's Connect</button>
        </div>

        <!-- Mobile Menu Project Card -->
        <div class="mb-4">
             <div class="bg-[#171718] p-4 cursor-pointer group">
                <p class="text-[14px] text-[#9AA0A8] font-[400] mb-2">Web app</p>
                <p class="text-[18px] text-[#F1F5FB] font-[400] leading-[140%] mb-4">Designed an internal tool to optimize design and dev workflows.</p>
                <div class="relative h-[200px] w-full bg-[#111112] overflow-hidden flex items-end justify-center">
                    <img src="/public/images/crm.jpg" alt="CRM" class="max-w-[80%] object-contain shadow-lg translate-y-[20%]">
                    <div class="absolute top-3 right-3 bg-[#F1F5FB] p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 12 12" fill="none">
                            <path d="M0 10.7297L8.93346 1.79634H3.10034V0H12V8.89966H10.2037V3.06656L1.27031 12L0 10.7297Z" fill="#111112"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Drawer Overlay -->
<div id="contact-drawer-overlay" class="fixed inset-0 bg-black/50 z-[90] hidden transition-opacity duration-300 opacity-0 backdrop-blur-sm"></div>

<!-- Contact Drawer -->
<div id="contact-drawer" class="fixed top-2 right-2 bottom-2 left-2 md:left-auto md:top-5 md:right-5 md:bottom-5 md:w-[640px] bg-[#111112] z-[100] transform translate-x-[110%] transition-transform duration-500 ease-[cubic-bezier(0.16,1,0.3,1)] shadow-2xl overflow-y-auto">
    <div class="p-6 md:p-12 relative h-full flex flex-col">
        <!-- Close Button -->
        <button id="close-drawer" class="absolute top-6 right-6 md:top-8 md:right-8 text-[#F1F5FB] hover:text-gray-300 transition-colors cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect x="2.12109" y="0.213135" width="30" height="3" rx="1.5" transform="rotate(45 2.12109 0.213135)" fill="#F1F5FB"/>
                <rect x="0.621094" y="21.2131" width="30" height="3" rx="1.5" transform="rotate(-45 0.621094 21.2131)" fill="#F1F5FB"/>
            </svg>
        </button>

        <!-- Header -->
        <div>
            <h2 class="text-[40px] md:text-[48px] md:leading-[52px] font-[500] text-[#F1F5FB] mb-4">Let's Work Together</h2>
            <p class="text-[16px] md:text-[18px] text-[#9AA0A8] leading-[140%] max-w-[95%]">Whether you're starting fresh or improving a project, I'd love to help. Fill out the form and I'll be in touch soon.</p>
        </div>

        <!-- Form -->
        <form id="contact-form" class="space-y-3.5 mt-8 flex-grow">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6">
                <div class="group">
                    <input type="text" name="name" class="w-full bg-transparent border-b border-[#272829] py-3 text-[#F1F5FB] focus:outline-none focus:border-[#F1F5FB] transition-colors placeholder-[#F1F5FB] placeholder:text-[18px]" placeholder="Full Name" required>
                </div>
                <div class="group">
                    <input type="text" name="company" class="w-full bg-transparent border-b border-[#272829] py-3 text-[#F1F5FB] focus:outline-none focus:border-[#F1F5FB] transition-colors placeholder-[#F1F5FB] placeholder:text-[18px]" placeholder="Company Name">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-4">
                <div class="group">
                    <input type="email" name="email" class="w-full bg-transparent border-b border-[#272829] py-3 text-[#F1F5FB] focus:outline-none focus:border-[#F1F5FB] transition-colors placeholder-[#F1F5FB] placeholder:text-[18px]" placeholder="Email Address" required>
                </div>
                <div class="group">
                    <input type="tel" name="phone" class="w-full bg-transparent border-b border-[#272829] py-3 text-[#F1F5FB] focus:outline-none focus:border-[#F1F5FB] transition-colors placeholder-[#F1F5FB] placeholder:text-[18px]" placeholder="Phone Number">
                </div>
            </div>
            
            <div class="group">
                <label class="block text-[#F1F5FB] text-[18px] font-[500] mb-2">Your message</label>
                <textarea name="message" rows="1" class="w-full bg-transparent border-b border-[#272829] py-3 text-[#F1F5FB] focus:outline-none focus:border-[#F1F5FB] transition-colors resize-none overflow-hidden placeholder-[#272829]" oninput="this.style.height = ''; this.style.height = this.scrollHeight + 'px'" required></textarea>
            </div>

            <div id="form-status" class="hidden text-[16px] font-[500] mt-4"></div>

            <button type="submit" id="submit-btn" class="mt-8 w-full bg-[#F1F5FB] text-[#111112] font-[600] text-[18px] py-2.5 rounded-full hover:bg-white transition-colors cursor-pointer">
                • Send Message
            </button>
        </form>

        <!-- Footer Info -->
        <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-8 text-[#F1F5FB]">
             <div>
                <p class="text-[#9AA0A8] text-sm mb-1">Email</p>
                <a href="mailto:antoniotrpevski@gmail.com" class="text-[18px] font-[500] border-b border-transparent hover:border-[#F1F5FB] transition-colors">antoniotrpevski@gmail.com</a>
             </div>
              <div>
                <p class="text-[#9AA0A8] text-sm mb-1">Phone</p>
                <a href="tel:+38978448198" class="text-[18px] font-[500] border-b border-transparent hover:border-[#F1F5FB] transition-colors">389+ 78 448 198</a>
             </div>
             <div class="md:col-span-2">
                <p class="text-[#9AA0A8] text-sm mb-1">Address</p>
                <p class="text-[18px] font-[500]">Bulevar Kuzman Josifovski Pitu br. 28/3-1</p>
             </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Select all triggers including the one in nav and potentially others on the page
        const triggers = document.querySelectorAll('.lets-connect-trigger');
        const drawer = document.getElementById('contact-drawer');
        const overlay = document.getElementById('contact-drawer-overlay');
        const closeBtn = document.getElementById('close-drawer');
        
        // Mobile Menu Elements
        const mobileTrigger = document.getElementById('mobile-menu-trigger');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileCloseBtn = document.getElementById('close-mobile-menu');

        function openDrawer(e) {
            if(e) e.preventDefault();
            // Close mobile menu if open
            if(mobileMenu && !mobileMenu.classList.contains('hidden')) {
                closeMobileMenu();
            }
            
            overlay.classList.remove('hidden');
            // Small delay to allow display:block to apply before opacity transition
            setTimeout(() => {
                overlay.classList.remove('opacity-0');
                drawer.classList.remove('translate-x-[110%]');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function closeDrawer() {
            overlay.classList.add('opacity-0');
            drawer.classList.add('translate-x-[110%]');
            
            setTimeout(() => {
                overlay.classList.add('hidden');
                document.body.style.overflow = '';
            }, 500);
        }

        triggers.forEach(btn => {
            btn.addEventListener('click', openDrawer);
        });

        if(closeBtn) closeBtn.addEventListener('click', closeDrawer);
        if(overlay) overlay.addEventListener('click', closeDrawer);

        // Mobile Menu Functions
        window.closeMobileMenu = function() {
            mobileMenu.classList.add('translate-x-[110%]');
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
                document.body.style.overflow = '';
            }, 300);
        }

        function openMobileMenu() {
            mobileMenu.classList.remove('hidden');
            setTimeout(() => {
                mobileMenu.classList.remove('translate-x-[110%]');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        if(mobileTrigger) mobileTrigger.addEventListener('click', openMobileMenu);
        if(mobileCloseBtn) mobileCloseBtn.addEventListener('click', closeMobileMenu);

        // Close on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                if(!overlay.classList.contains('hidden')) {
                    closeDrawer();
                } else if (!mobileMenu.classList.contains('hidden')) {
                    closeMobileMenu();
                }
            }
        });

        // Form Submission Logic
        const form = document.getElementById('contact-form');
        const submitBtn = document.getElementById('submit-btn');
        const statusDiv = document.getElementById('form-status');

        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(form);
                submitBtn.disabled = true;
                submitBtn.innerText = 'Sending...';
                statusDiv.classList.add('hidden');
                statusDiv.classList.remove('text-green-500', 'text-red-500');

                fetch('/send_mail.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    submitBtn.disabled = false;
                    submitBtn.innerText = '• Send Message';
                    statusDiv.classList.remove('hidden');
                    
                    if (data.status === 'success') {
                        statusDiv.classList.add('text-green-500');
                        statusDiv.innerText = data.message;
                        form.reset();
                        // Reset textarea height
                        const textarea = form.querySelector('textarea');
                        if (textarea) textarea.style.height = '';
                        
                        // Close drawer after 2 seconds
                        setTimeout(() => {
                            closeDrawer();
                            statusDiv.classList.add('hidden');
                        }, 2000);
                    } else {
                        statusDiv.classList.add('text-red-500');
                        statusDiv.innerText = data.message;
                    }
                })
                .catch(error => {
                    submitBtn.disabled = false;
                    submitBtn.innerText = '• Send Message';
                    statusDiv.classList.remove('hidden');
                    statusDiv.classList.add('text-red-500');
                    statusDiv.innerText = 'An error occurred. Please try again later.';
                    console.error('Error:', error);
                });
            });
        }
    });
</script>
