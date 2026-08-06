{{-- components/toast.blade.php --}}
@if (Session::has('success') || $errors->has('email'))
    <div id="toastContainer" class="fixed top-6 right-6 z-[9999] max-w-md w-full animate-slide-in">
        @if (Session::has('success'))
            <div class="bg-white rounded-2xl shadow-2xl shadow-[#807fe2]/10 border border-[#e8e5f5] overflow-hidden transform transition-all duration-300 hover:scale-[1.02]">
                <div class="flex items-start gap-4 p-5">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-full bg-green-50 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>

                    <div class="flex-1 min-w-0">
                        <h3 class="text-sm font-bold text-[#1a1a2e]">Success</h3>
                        <p class="text-sm text-[#5a5a7a] font-light mt-0.5 leading-relaxed">
                            {{ Session::get('success') }}
                        </p>
                    </div>

                    <button onclick="closeToast()" class="flex-shrink-0 -mt-1 -mr-1 p-1.5 rounded-lg text-[#8a8aaa] hover:text-[#1a1a2e] hover:bg-[#f0edff] transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <div class="h-1 bg-green-500/20">
                    <div id="successProgress" class="h-full bg-gradient-to-r from-green-500 to-green-400 rounded-r-full transition-all duration-[3000ms] ease-linear" style="width: 100%"></div>
                </div>
            </div>
        @endif

        @error('email')
            <div class="bg-white rounded-2xl shadow-2xl shadow-[#807fe2]/10 border border-[#e8e5f5] overflow-hidden transform transition-all duration-300 hover:scale-[1.02]">
                <div class="flex items-start gap-4 p-5">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-full bg-red-50 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>

                    <div class="flex-1 min-w-0">
                        <h3 class="text-sm font-bold text-[#1a1a2e]">Error</h3>
                        <p class="text-sm text-[#5a5a7a] font-light mt-0.5 leading-relaxed">
                            {{ $message }}
                        </p>
                    </div>

                    <button onclick="closeToast()" class="flex-shrink-0 -mt-1 -mr-1 p-1.5 rounded-lg text-[#8a8aaa] hover:text-[#1a1a2e] hover:bg-[#f0edff] transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <div class="h-1 bg-red-500/20">
                    <div id="errorProgress" class="h-full bg-gradient-to-r from-red-500 to-red-400 rounded-r-full transition-all duration-[3000ms] ease-linear" style="width: 100%"></div>
                </div>
            </div>
        @enderror
    </div>
@endif

{{-- Scripts --}}
@push('js')
<script>
    // Función para cerrar el toast
    function closeToast() {
        const toast = document.getElementById('toastContainer');
        if (toast) {
            toast.style.transition = 'all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1)';
            toast.style.transform = 'translateX(100%)';
            toast.style.opacity = '0';
            setTimeout(() => {
                toast.style.display = 'none';
            }, 400);
        }
    }

    // Función para hacer scroll al campo de email con animación
    function scrollToEmailField() {
        // Buscar el input de email por diferentes selectores
        const emailField = document.querySelector('#email') || 
                          document.querySelector('input[name="email"]') || 
                          document.querySelector('input[type="email"]');
        
        if (emailField) {
            // Hacer scroll suave al campo
            setTimeout(() => {
                emailField.scrollIntoView({ 
                    behavior: 'smooth', 
                    block: 'center',
                    inline: 'center'
                });
                
                // Enfocar el campo después del scroll
                setTimeout(() => {
                    emailField.focus({ preventScroll: true });
                    
                    // Añadir un efecto de resaltado temporal
                    emailField.style.transition = 'all 0.3s ease';
                    emailField.style.boxShadow = '0 0 0 4px rgba(128,127,226,0.3)';
                    emailField.style.borderColor = '#807fe2';
                    
                    setTimeout(() => {
                        emailField.style.boxShadow = '';
                        emailField.style.borderColor = '';
                    }, 2000);
                }, 500);
            }, 300);
        }
    }

    // Auto-cerrar después de 4 segundos
    document.addEventListener('DOMContentLoaded', function() {
        const toast = document.getElementById('toastContainer');
        
        if (toast) {
            // Si hay error de email, hacer scroll al campo
            @if ($errors->has('email'))
                // Esperar a que el toast se muestre completamente
                setTimeout(() => {
                    scrollToEmailField();
                }, 500);
            @endif

            // Iniciar barra de progreso
            setTimeout(() => {
                const successProgress = document.getElementById('successProgress');
                const errorProgress = document.getElementById('errorProgress');
                
                if (successProgress) {
                    successProgress.style.width = '0%';
                }
                if (errorProgress) {
                    errorProgress.style.width = '0%';
                }
            }, 100);

            // Cerrar después de 4 segundos
            setTimeout(() => {
                closeToast();
            }, 4000);
        }
    });

    // Cerrar con tecla ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeToast();
        }
    });

    // Cerrar al hacer clic fuera
    document.addEventListener('click', function(e) {
        const toast = document.getElementById('toastContainer');
        if (toast && !toast.contains(e.target)) {
            // Solo cerrar si no es el botón de cerrar
            if (!e.target.closest('button')) {
                closeToast();
            }
        }
    });
</script>
@endpush

{{-- Estilos adicionales --}}
@push('styles')
<style>
    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    .animate-slide-in {
        animation: slideIn 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
    }
    
    /* Mejora de accesibilidad */
    .mess-close:focus-visible {
        outline: 2px solid #807fe2;
        outline-offset: 2px;
    }
</style>
@endpush