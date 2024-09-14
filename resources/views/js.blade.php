<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script src="{{ asset('assets/Js/script.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const elements = document.querySelectorAll('.fade-in');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('loaded');
                }
            });
        }, {
            threshold: 0.1
        });

        elements.forEach(element => {
            observer.observe(element);
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
    var dropdown = document.getElementById('resourceDropdown');
    dropdown.addEventListener('click', function () {
        this.nextElementSibling.classList.toggle('show');
    });
});



document.addEventListener('DOMContentLoaded', function() {
    const currentRoute = '{{ Route::currentRouteName() }}';
    const menuItems = document.querySelectorAll('.nav-links-main .headerlink');
    
    menuItems.forEach(item => {
        item.addEventListener('click', function(e) {
            if (!this.getAttribute('target')) {
                e.preventDefault();
                menuItems.forEach(i => i.classList.remove('active'));
                this.classList.add('active');
                
                if (this.getAttribute('href') !== '#') {
                    setTimeout(() => {
                        window.location.href = this.getAttribute('href');
                    }, 100);
                }
            }
        });
        
        if (item.getAttribute('data-route') === currentRoute) {
            item.classList.add('active');
        }
    });
});

</script>
