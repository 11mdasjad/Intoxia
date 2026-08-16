<x-layouts.app 
    title="Contact Us & Project Enquiries — Intoxia Technologies"
    description="Get in touch with Intoxia Technologies in New Delhi, India. Call +91 70116 39618 or submit your project requirements for an engineering review."
>
    @php
        $phone = \App\Models\SiteSetting::get('phone', '+91 70116 39618');
        $email = \App\Models\SiteSetting::get('email', 'contact@intoxiatechnologies.com');
        $address = \App\Models\SiteSetting::get('address', '226 Second Floor, Main Kalindi Kunj Road, Jasola, New Delhi-110025, India');
        $hours = \App\Models\SiteSetting::get('business_hours', 'Mon-Fri: 9:00 AM - 7:00 PM IST | Sat: 10:00 AM - 4:00 PM IST');
    @endphp

    <div class="pt-32 pb-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Page Header --}}
        <div class="max-w-3xl mb-16 text-center mx-auto">
            <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-200 text-blue-700 text-xs font-mono font-bold tracking-wide uppercase mb-4 shadow-sm">
                <span>Start The Conversation</span>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 tracking-tight leading-tight font-['Outfit']">
                Let's Build Something <span class="text-gradient-vibrant">Exceptional Together.</span>
            </h1>
            <p class="mt-4 text-base sm:text-lg text-slate-600 leading-relaxed">
                Whether you have an RFP ready, need architectural consulting, or want to explore an AI agent solution, our senior engineering team is ready to assist.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            {{-- Direct Contact Details Column --}}
            <div class="lg:col-span-5 space-y-8">
                <div class="light-glass-panel rounded-3xl p-8 border border-slate-200 shadow-xl space-y-6">
                    <h2 class="text-2xl font-bold text-slate-900 tracking-tight font-['Outfit']">Direct Contact Channels</h2>
                    
                    <div class="space-y-6 pt-2">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 rounded-2xl bg-blue-50 border border-blue-200 text-blue-600 flex items-center justify-center shrink-0 shadow-sm">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <div class="text-xs font-mono text-slate-500 uppercase tracking-wider font-semibold">Phone & WhatsApp</div>
                                <a href="tel:{{ str_replace(' ', '', $phone) }}" class="text-base font-bold text-slate-900 hover:text-blue-600 transition-colors font-mono">{{ $phone }}</a>
                                <div class="text-xs text-emerald-600 font-semibold mt-0.5 flex items-center gap-1">
                                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                    <span>Direct Line to Tech Lead</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 rounded-2xl bg-cyan-50 border border-cyan-200 text-cyan-600 flex items-center justify-center shrink-0 shadow-sm">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <div class="text-xs font-mono text-slate-500 uppercase tracking-wider font-semibold">Direct Email</div>
                                <a href="mailto:{{ $email }}" class="text-base font-bold text-slate-900 hover:text-blue-600 transition-colors font-mono">{{ $email }}</a>
                                <div class="text-xs text-slate-500 mt-0.5">Average response time: &lt; 2 hours</div>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 rounded-2xl bg-indigo-50 border border-indigo-200 text-indigo-600 flex items-center justify-center shrink-0 shadow-sm">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <div class="text-xs font-mono text-slate-500 uppercase tracking-wider font-semibold">Development Center</div>
                                <p class="text-sm font-semibold text-slate-800 leading-relaxed">{{ $address }}</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 rounded-2xl bg-slate-100 border border-slate-200 text-slate-600 flex items-center justify-center shrink-0 shadow-sm">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <div class="text-xs font-mono text-slate-500 uppercase tracking-wider font-semibold">Operating Hours</div>
                                <p class="text-xs text-slate-600 font-mono mt-0.5 leading-relaxed">{{ $hours }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- WhatsApp Quick Action Card --}}
                <div class="rounded-3xl p-6 bg-gradient-to-br from-emerald-600 to-teal-700 text-white shadow-xl shadow-emerald-600/20">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-2xl bg-white/20 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.669-.699c.974.553 1.761.815 2.791.815 3.179 0 5.765-2.587 5.765-5.767.001-3.18-2.585-5.766-5.765-5.766zm6.811 5.765c-.002 3.75-3.061 6.809-6.812 6.809-1.18 0-2.339-.307-3.359-.89l-4.671 1.226 1.251-4.555c-.655-1.077-1.031-2.327-1.03-3.59.002-3.751 3.062-6.81 6.812-6.81 3.752 0 6.811 3.059 6.809 6.81z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-base font-bold font-['Outfit']">Need an Instant Consultation?</h3>
                            <p class="text-xs text-emerald-100 mt-0.5">Chat directly with our Technical Solutions Architect.</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="https://wa.me/917011639618?text=Hello%20Intoxia%20Technologies,%20I%20would%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener noreferrer" class="block w-full py-3 text-center bg-white text-emerald-800 font-bold rounded-xl text-xs hover:bg-emerald-50 transition-colors shadow-md">
                            Open WhatsApp Chat (+91 70116 39618)
                        </a>
                    </div>
                </div>
            </div>

            {{-- Form Column --}}
            <div class="lg:col-span-7">
                <div class="light-glass-panel rounded-3xl p-8 sm:p-12 border border-slate-200 shadow-xl">
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight mb-2 font-['Outfit']">
                        Tell Us About Your Project
                    </h2>
                    <p class="text-sm text-slate-600 mb-8">
                        Fill out the details below. Our technical squad will review your requirements and respond within 2-4 business hours with an initial architectural roadmap.
                    </p>

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf

                        {{-- Anti-Spam Honeypot Field (Hidden from humans) --}}
                        <div class="hidden" aria-hidden="true">
                            <label for="website_hp">Leave this field blank</label>
                            <input type="text" name="website_hp" id="website_hp" value="" tabindex="-1" autocomplete="off">
                        </div>

                        {{-- Name & Email --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-xs font-mono font-bold text-slate-700 uppercase tracking-wider mb-2">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    name="name" 
                                    id="name" 
                                    required 
                                    value="{{ old('name') }}"
                                    placeholder="e.g. Rahul Sharma"
                                    class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100 shadow-sm transition-all @error('name') border-red-500 @enderror"
                                >
                                @error('name')
                                    <p class="mt-1 text-xs text-red-500 font-mono">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-xs font-mono font-bold text-slate-700 uppercase tracking-wider mb-2">
                                    Work Email <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="email" 
                                    name="email" 
                                    id="email" 
                                    required 
                                    value="{{ old('email') }}"
                                    placeholder="name@company.com"
                                    class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100 shadow-sm transition-all @error('email') border-red-500 @enderror"
                                >
                                @error('email')
                                    <p class="mt-1 text-xs text-red-500 font-mono">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- Phone & Company --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-xs font-mono font-bold text-slate-700 uppercase tracking-wider mb-2">
                                    Phone Number
                                </label>
                                <input 
                                    type="text" 
                                    name="phone" 
                                    id="phone" 
                                    value="{{ old('phone') }}"
                                    placeholder="+91 98765 43210"
                                    class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100 shadow-sm transition-all @error('phone') border-red-500 @enderror"
                                >
                                @error('phone')
                                    <p class="mt-1 text-xs text-red-500 font-mono">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="company" class="block text-xs font-mono font-bold text-slate-700 uppercase tracking-wider mb-2">
                                    Company / Organization
                                </label>
                                <input 
                                    type="text" 
                                    name="company" 
                                    id="company" 
                                    value="{{ old('company') }}"
                                    placeholder="Acme Corp"
                                    class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100 shadow-sm transition-all"
                                >
                            </div>
                        </div>

                        {{-- Service Needed --}}
                        <div>
                            <label for="service" class="block text-xs font-mono font-bold text-slate-700 uppercase tracking-wider mb-2">
                                Service of Interest <span class="text-red-500">*</span>
                            </label>
                            <select 
                                name="service" 
                                id="service" 
                                required
                                class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3.5 text-sm text-slate-900 focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100 shadow-sm transition-all"
                            >
                                <option value="">Select a service category...</option>
                                <option value="Custom Software Development" {{ old('service') == 'Custom Software Development' ? 'selected' : '' }}>Custom Software Development</option>
                                <option value="Generative AI & LLM Systems" {{ old('service') == 'Generative AI & LLM Systems' ? 'selected' : '' }}>Generative AI & LLM Systems</option>
                                <option value="Enterprise Web Application" {{ old('service') == 'Enterprise Web Application' ? 'selected' : '' }}>Enterprise Web Application</option>
                                <option value="Mobile App Development" {{ old('service') == 'Mobile App Development' ? 'selected' : '' }}>Mobile App Development (iOS/Android)</option>
                                <option value="Cloud & DevOps Infrastructure" {{ old('service') == 'Cloud & DevOps Infrastructure' ? 'selected' : '' }}>Cloud & DevOps Infrastructure</option>
                                <option value="SaaS Platform Engineering" {{ old('service') == 'SaaS Platform Engineering' ? 'selected' : '' }}>SaaS Platform Engineering</option>
                                <option value="UI/UX & Product Design" {{ old('service') == 'UI/UX & Product Design' ? 'selected' : '' }}>UI/UX & Product Design</option>
                                <option value="Dedicated Engineering Team" {{ old('service') == 'Dedicated Engineering Team' ? 'selected' : '' }}>Dedicated Engineering Team</option>
                            </select>
                        </div>

                        {{-- Budget & Timeline --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="budget" class="block text-xs font-mono font-bold text-slate-700 uppercase tracking-wider mb-2">
                                    Anticipated Budget
                                </label>
                                <select 
                                    name="budget" 
                                    id="budget"
                                    class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3.5 text-sm text-slate-900 focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100 shadow-sm transition-all"
                                >
                                    <option value="">Select budget range...</option>
                                    <option value="₹2 Lakh - ₹5 Lakh">₹2 Lakh - ₹5 Lakh</option>
                                    <option value="₹5 Lakh - ₹15 Lakh">₹5 Lakh - ₹15 Lakh</option>
                                    <option value="₹15 Lakh - ₹35 Lakh">₹15 Lakh - ₹35 Lakh</option>
                                    <option value="₹35 Lakh+ / Enterprise">₹35 Lakh+ / Enterprise</option>
                                    <option value="$5,000 - $15,000 USD (Global)">$5,000 - $15,000 USD (Global)</option>
                                    <option value="$15,000 - $50,000+ USD (Global)">$15,000 - $50,000+ USD (Global)</option>
                                </select>
                            </div>

                            <div>
                                <label for="timeline" class="block text-xs font-mono font-bold text-slate-700 uppercase tracking-wider mb-2">
                                    Target Timeline
                                </label>
                                <select 
                                    name="timeline" 
                                    id="timeline"
                                    class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3.5 text-sm text-slate-900 focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100 shadow-sm transition-all"
                                >
                                    <option value="">Select target timeline...</option>
                                    <option value="Immediate (Within 2 Weeks)">Immediate (Within 2 Weeks)</option>
                                    <option value="1 - 2 Months">1 - 2 Months</option>
                                    <option value="3 - 6 Months">3 - 6 Months</option>
                                    <option value="Long Term Ongoing">Long Term Ongoing</option>
                                </select>
                            </div>
                        </div>

                        {{-- Project Scope / Message --}}
                        <div>
                            <label for="message" class="block text-xs font-mono font-bold text-slate-700 uppercase tracking-wider mb-2">
                                Project Scope & Requirements <span class="text-red-500">*</span>
                            </label>
                            <textarea 
                                name="message" 
                                id="message" 
                                rows="5" 
                                required
                                placeholder="Describe your product vision, key features, target users, technical requirements, or existing bottlenecks..."
                                class="w-full bg-white border border-slate-300 rounded-xl p-4 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100 shadow-sm transition-all @error('message') border-red-500 @enderror"
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-xs text-red-500 font-mono">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Submit Button --}}
                        <div>
                            <button 
                                type="submit" 
                                class="w-full py-4 bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white font-bold text-base rounded-2xl shadow-xl shadow-blue-600/30 transition-all cursor-pointer flex items-center justify-center space-x-2 hover:scale-[1.01]"
                            >
                                <span>Submit Engineering Enquiry</span>
                                <svg class="w-5 h-5 text-cyan-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </button>
                            <p class="text-[11px] text-slate-500 text-center mt-3">
                                🔒 Strictly Confidential &bull; Standard NDA Protection Guaranteed &bull; Zero Spam
                            </p>
                        </div>

                    </form>
                </div>
            </div>

        </div>

    </div>

</x-layouts.app>
