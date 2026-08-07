{{-- Get in touch --}}
<div class="flex justify-center mb-8">
    <div class="text-center">
        <div class="flex items-center justify-center gap-3 mb-2">
            <div class="w-12 h-12 rounded-full bg-[var(--bg-accent)] flex items-center justify-center text-[#807fe2]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-[var(--text-primary)]">Get in touch</h3>
        </div>
    </div>
</div>

{{-- Email Input --}}
<div class="flex justify-center mb-12" id="mailField">
    <div class="w-full max-w-2xl">
        <form action="{{ route('sendMail') }}" method="POST" class="flex flex-col sm:flex-row gap-3">
            @csrf
            @method('POST')
            <div class="flex-1 relative">
                <input type="email"
                       autocomplete="email"
                       name="email"
                       id="email"
                       value="{{ old('email') }}"
                       required
                       class="w-full px-5 py-3.5 rounded-full bg-[var(--bg-card)] border-2 border-[var(--border-color-alt)] focus:border-[#807fe2] focus:outline-none focus:shadow-lg focus:shadow-[#807fe2]/10 transition-all duration-300 text-[var(--text-primary)] text-sm placeholder:text-[var(--text-faint)]"
                       placeholder="Your E-Mail Address">
            </div>
            <button type="submit"
                    class="group px-8 py-3.5 rounded-full bg-gradient-to-r from-[#807fe2] to-[#6c63d9] text-white font-medium text-sm shadow-lg shadow-[#807fe2]/30 hover:shadow-[#807fe2]/50 hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2 whitespace-nowrap uppercase tracking-wider">
                <span>Send</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </button>
        </form>
        <p class="text-md text-[var(--text-faint)] text-center mt-3 font-light">
            I'll never share your email. Unsubscribe anytime.
        </p>
    </div>
</div>