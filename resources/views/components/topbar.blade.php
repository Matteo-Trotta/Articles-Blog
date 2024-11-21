<div class="bg-dark text-white py-2 shadow-sm d-none d-md-block">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Data e orario -->
        <div class="fs-5 fw-bold">
            <i class="bi bi-calendar3"></i> {{ now()->format('l, d F Y') }} | 
            <i class="bi bi-clock"></i> {{ now()->format('H:i') }}
        </div>
        
        <!-- Link ai social -->
        <div class="d-flex align-items-center">
            <a href="#" class="text-white me-3 d-flex align-items-center">
                <i class="bi bi-facebook me-1"></i> 
            </a>
            <a href="#" class="text-white me-3 d-flex align-items-center">
                <i class="bi bi-twitter-x"></i> 
            </a>
            <a href="#" class="text-white d-flex align-items-center">
                <i class="bi bi-instagram me-1"></i> 
            </a>
           
        </div>
    </div>
</div>
