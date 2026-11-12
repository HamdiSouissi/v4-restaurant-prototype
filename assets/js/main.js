/* ==========================================================================
   Heritage Collection — interazioni, movimento e funzioni dimostrative
   ========================================================================== */
(() => {
    'use strict';

    const $ = (selector, scope = document) => scope.querySelector(selector);
    const $$ = (selector, scope = document) => [...scope.querySelectorAll(selector)];
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const body = document.body;

    /* Utilità condivise ---------------------------------------------------- */
    const euro = value => new Intl.NumberFormat('it-IT', { style: 'currency', currency: 'EUR' }).format(value);
    let toastTimer;
    const showToast = message => {
        const toast = $('.toast');
        toast.textContent = message;
        toast.classList.add('is-visible');
        clearTimeout(toastTimer);
        toastTimer = setTimeout(() => toast.classList.remove('is-visible'), 2600);
    };
    const updateBodyLock = () => {
        const hasOpenLayer = $('.mobile-nav.is-open') || $('.cart-drawer.is-open') || $('.modal.is-open') || $('.lightbox.is-open');
        body.classList.toggle('no-scroll', Boolean(hasOpenLayer));
    };

    /* Precaricamento ------------------------------------------------------- */
    const preloader = $('.preloader');
    const finishLoading = () => {
        window.setTimeout(() => {
            preloader?.classList.add('is-hidden');
            playHeroIntro();
        }, 350);
    };
    if (document.readyState === 'complete') finishLoading();
    else window.addEventListener('load', finishLoading, { once: true });
    window.setTimeout(finishLoading, 2800);

    /* Scroll fluido -------------------------------------------------------- */
    let lenis = null;
    if (!reducedMotion && window.Lenis) {
        lenis = new Lenis({ duration: 1.18, smoothWheel: true, wheelMultiplier: .88, touchMultiplier: 1.05 });
        if (window.gsap) {
            lenis.on('scroll', window.ScrollTrigger ? ScrollTrigger.update : () => {});
            gsap.ticker.add(time => lenis.raf(time * 1000));
            gsap.ticker.lagSmoothing(0);
        } else {
            const raf = time => { lenis.raf(time); requestAnimationFrame(raf); };
            requestAnimationFrame(raf);
        }
    }

    $$('a[href^="#"]').forEach(link => {
        link.addEventListener('click', event => {
            const href = link.getAttribute('href');
            if (!href || href === '#') {
                event.preventDefault();
                return;
            }
            const target = $(href);
            if (!target) return;
            event.preventDefault();
            closeMobileMenu();
            if (lenis) lenis.scrollTo(target, { offset: -72, duration: 1.35 });
            else target.scrollIntoView({ behavior: reducedMotion ? 'auto' : 'smooth' });
        });
    });

    /* Header et navigation ------------------------------------------------- */
    const header = $('.site-header');
    const menuToggle = $('.menu-toggle');
    const mobileNav = $('.mobile-nav');
    const updateHeader = () => header?.classList.toggle('is-scrolled', window.scrollY > 35);
    updateHeader();
    window.addEventListener('scroll', updateHeader, { passive: true });

    const closeMobileMenu = () => {
        menuToggle?.classList.remove('is-active');
        menuToggle?.setAttribute('aria-expanded', 'false');
        mobileNav?.classList.remove('is-open');
        updateBodyLock();
    };
    menuToggle?.addEventListener('click', () => {
        const open = !mobileNav.classList.contains('is-open');
        menuToggle.classList.toggle('is-active', open);
        menuToggle.setAttribute('aria-expanded', String(open));
        mobileNav.classList.toggle('is-open', open);
        updateBodyLock();
    });

    const observedSections = $$('main section[id]');
    if ('IntersectionObserver' in window) {
        const sectionObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                $$('.nav a, .mobile-nav a').forEach(link => {
                    link.classList.toggle('is-active', link.getAttribute('href') === `#${entry.target.id}`);
                });
            });
        }, { rootMargin: '-35% 0px -55% 0px', threshold: 0 });
        observedSections.forEach(section => sectionObserver.observe(section));
    }

    /* Luce del puntatore et polvere ---------------------------------------- */
    const mouseLight = $('.mouse-light');
    window.addEventListener('pointermove', event => {
        if (!mouseLight) return;
        mouseLight.style.left = `${event.clientX}px`;
        mouseLight.style.top = `${event.clientY}px`;
    }, { passive: true });

    const dust = $('.dust');
    if (dust && !reducedMotion) {
        for (let index = 0; index < 26; index += 1) {
            const particle = document.createElement('i');
            particle.style.left = `${Math.random() * 100}%`;
            particle.style.top = `${Math.random() * 100 + 20}%`;
            particle.style.opacity = `${Math.random() * .55}`;
            particle.style.animationDuration = `${12 + Math.random() * 18}s`;
            particle.style.animationDelay = `${-Math.random() * 20}s`;
            dust.appendChild(particle);
        }
    }

    /* Movimento GSAP ------------------------------------------------------- */
    if (window.gsap && window.ScrollTrigger) {
        gsap.registerPlugin(ScrollTrigger);

        $$('.reveal').forEach((element, index) => {
            element.style.visibility = 'visible';
            gsap.fromTo(element,
                { y: 40, autoAlpha: 0 },
                { y: 0, autoAlpha: 1, duration: 1.15, ease: 'power3.out', delay: (index % 2) * .04,
                    scrollTrigger: { trigger: element, start: 'top 88%', once: true }
                }
            );
        });

        $$('.reveal-image').forEach(element => {
            element.style.visibility = 'visible';
            gsap.fromTo(element,
                { clipPath: 'inset(0 0 100% 0)', y: 25 },
                { clipPath: 'inset(0 0 0% 0)', y: 0, duration: 1.45, ease: 'power4.out',
                    scrollTrigger: { trigger: element, start: 'top 84%', once: true }
                }
            );
        });

        $$('.parallax-media').forEach(media => {
            gsap.fromTo(media, { yPercent: -3 }, {
                yPercent: 5, ease: 'none',
                scrollTrigger: { trigger: media.parentElement, start: 'top bottom', end: 'bottom top', scrub: .8 }
            });
        });

        $$('.stat strong[data-count]').forEach(counter => {
            const value = Number(counter.dataset.count);
            ScrollTrigger.create({
                trigger: counter,
                start: 'top 90%',
                once: true,
                onEnter: () => gsap.to(counter, { innerText: value, duration: 1.6, snap: { innerText: 1 }, ease: 'power2.out' })
            });
        });

        gsap.to('.manifesto__seal', {
            rotate: 5,
            scrollTrigger: { trigger: '.manifesto', start: 'top bottom', end: 'bottom top', scrub: 1 }
        });
        gsap.to('.chef__stamp', {
            rotate: 28,
            scrollTrigger: { trigger: '.chef', start: 'top bottom', end: 'bottom top', scrub: 1 }
        });
    } else {
        $$('.reveal, .reveal-image').forEach(element => { element.style.visibility = 'visible'; });
    }

    function playHeroIntro() {
        if (!window.gsap || reducedMotion || body.dataset.heroPlayed) return;
        body.dataset.heroPlayed = 'true';
        const timeline = gsap.timeline({ defaults: { ease: 'power3.out' } });
        timeline
            .from('.hero__eyebrow', { y: 18, autoAlpha: 0, duration: .8 })
            .from('.hero h1', { y: 45, autoAlpha: 0, duration: 1.15 }, '-=.45')
            .from('.hero__lead', { y: 22, autoAlpha: 0, duration: .8 }, '-=.65')
            .from('.hero__actions .button', { y: 18, autoAlpha: 0, duration: .75, stagger: .12 }, '-=.5')
            .from('.hero__aside, .scroll-cue', { autoAlpha: 0, duration: .8 }, '-=.35');
    }

    /* Menù a categorie ----------------------------------------------------- */
    const menuTabs = $$('.menu-tab');
    menuTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            if (tab.classList.contains('is-active')) return;
            const category = tab.dataset.menuTab;
            const nextPanel = $(`[data-menu-panel="${category}"]`);
            const currentPanel = $('.menu-panel.is-active');
            menuTabs.forEach(item => {
                const active = item === tab;
                item.classList.toggle('is-active', active);
                item.setAttribute('aria-selected', String(active));
            });
            if (currentPanel) {
                currentPanel.classList.remove('is-active');
                currentPanel.hidden = true;
            }
            nextPanel.hidden = false;
            nextPanel.classList.add('is-active');
            if (window.gsap && !reducedMotion) {
                gsap.fromTo($$('.dish-card', nextPanel), { y: 28, autoAlpha: 0 }, { y: 0, autoAlpha: 1, duration: .75, stagger: .09, ease: 'power3.out' });
            }
        });
    });

    /* Caroselli ------------------------------------------------------------ */
    if (window.Swiper) {
        new Swiper('.gallery-swiper', {
            slidesPerView: 'auto', spaceBetween: 18, speed: 1000, grabCursor: true,
            freeMode: { enabled: true, sticky: false },
            mousewheel: { forceToAxis: true },
            navigation: { nextEl: '.gallery-next', prevEl: '.gallery-prev' },
            pagination: { el: '.gallery-pagination', clickable: true },
            breakpoints: { 700: { spaceBetween: 28 }, 1200: { spaceBetween: 38 } }
        });
        new Swiper('.reviews-swiper', {
            slidesPerView: 1, speed: 900, loop: true, effect: 'fade', fadeEffect: { crossFade: true },
            autoplay: reducedMotion ? false : { delay: 6500, disableOnInteraction: false },
            pagination: { el: '.reviews-pagination', clickable: true }
        });
    }

    /* Lightbox ------------------------------------------------------------- */
    const lightbox = $('.lightbox');
    const lightboxImage = $('.lightbox img');
    const lightboxCaption = $('.lightbox__caption');
    const openLightbox = slide => {
        lightboxImage.src = slide.dataset.lightbox;
        lightboxImage.alt = $('.gallery-slide__button', slide).getAttribute('aria-label').replace('Ingrandisci: ', '');
        lightboxCaption.textContent = lightboxImage.alt;
        lightbox.inert = false;
        lightbox.classList.add('is-open');
        lightbox.setAttribute('aria-hidden', 'false');
        updateBodyLock();
        $('.lightbox__close').focus();
    };
    const closeLightbox = () => {
        lightbox?.classList.remove('is-open');
        lightbox?.setAttribute('aria-hidden', 'true');
        if (lightbox) lightbox.inert = true;
        updateBodyLock();
    };
    $$('.gallery-slide').forEach(slide => {
        slide.addEventListener('click', () => openLightbox(slide));
    });
    $('.lightbox__close')?.addEventListener('click', closeLightbox);
    lightbox?.addEventListener('click', event => { if (event.target === lightbox) closeLightbox(); });

    /* Finestra di conferma ------------------------------------------------- */
    const modal = $('#successModal');
    const modalTitle = $('#modalTitle');
    const modalMessage = $('#modalMessage');
    const confetti = $('.confetti');
    if (confetti) {
        for (let index = 0; index < 18; index += 1) {
            const piece = document.createElement('i');
            piece.style.left = `${12 + Math.random() * 76}%`;
            piece.style.top = `${10 + Math.random() * 25}%`;
            piece.style.setProperty('--x', `${(Math.random() - .5) * 180}px`);
            piece.style.setProperty('--delay', `${Math.random() * .35}s`);
            piece.style.background = index % 3 === 0 ? '#742e2e' : index % 3 === 1 ? '#c8a66a' : '#55624b';
            confetti.appendChild(piece);
        }
    }
    const openModal = (title, message) => {
        modalTitle.innerHTML = title;
        modalMessage.textContent = message;
        modal.inert = false;
        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
        updateBodyLock();
        $('.modal__done').focus();
    };
    const closeModal = () => {
        modal?.classList.remove('is-open');
        modal?.setAttribute('aria-hidden', 'true');
        if (modal) modal.inert = true;
        updateBodyLock();
    };
    $$('.modal__close, .modal__done').forEach(button => button.addEventListener('click', closeModal));
    modal?.addEventListener('click', event => { if (event.target === modal) closeModal(); });

    /* Prenotazione --------------------------------------------------------- */
    const bookingForm = $('#bookingForm');
    const dateInput = $('#data');
    if (dateInput) {
        const today = new Date();
        const localDate = new Date(today.getTime() - today.getTimezoneOffset() * 60000).toISOString().slice(0, 10);
        dateInput.min = localDate;
    }
    bookingForm?.addEventListener('submit', event => {
        event.preventDefault();
        $$('.field__error', bookingForm).forEach(error => error.remove());
        $$('.is-invalid', bookingForm).forEach(field => field.classList.remove('is-invalid'));
        const invalid = $$('input:invalid, select:invalid, textarea:invalid', bookingForm);
        if (invalid.length) {
            invalid.forEach(input => {
                const wrapper = input.closest('.field') || input.closest('.privacy-check');
                wrapper?.classList.add('is-invalid');
                if (wrapper?.classList.contains('field') && !$('.field__error', wrapper)) {
                    const error = document.createElement('small');
                    error.className = 'field__error';
                    error.textContent = input.type === 'email' ? 'Inserisci un indirizzo email valido.' : 'Questo campo è necessario.';
                    wrapper.appendChild(error);
                }
            });
            invalid[0].focus();
            showToast('Controlla i campi indicati prima di continuare.');
            return;
        }
        const guestName = $('#nome').value.trim().split(' ')[0];
        bookingForm.reset();
        openModal('La tua richiesta<br>è stata inviata.', `${guestName ? `${guestName}, ti` : 'Ti'} contatteremo presto per confermare ogni dettaglio della prenotazione.`);
    });
    $$('input, select, textarea', bookingForm || document).forEach(input => {
        input.addEventListener('input', () => input.closest('.is-invalid')?.classList.remove('is-invalid'));
    });

    /* Carrello et ordinazione --------------------------------------------- */
    const cart = new Map();
    let orderMode = 'Consegna';
    const cartDrawer = $('.cart-drawer');
    const drawerBackdrop = $('.drawer-backdrop');
    const cartFab = $('.cart-fab');
    const cartItems = $('#cartItems');
    const cartCount = $('.cart-count');
    const checkoutButton = $('#checkoutButton');

    const openCart = () => {
        cartDrawer.inert = false;
        cartDrawer.classList.add('is-open');
        cartDrawer.setAttribute('aria-hidden', 'false');
        drawerBackdrop.classList.add('is-open');
        updateBodyLock();
        $('.cart-close').focus();
    };
    const closeCart = () => {
        cartDrawer.classList.remove('is-open');
        cartDrawer.setAttribute('aria-hidden', 'true');
        cartDrawer.inert = true;
        drawerBackdrop.classList.remove('is-open');
        updateBodyLock();
    };
    cartFab?.addEventListener('click', openCart);
    $('.cart-close')?.addEventListener('click', closeCart);
    drawerBackdrop?.addEventListener('click', closeCart);

    const renderCart = () => {
        const products = [...cart.values()];
        const quantity = products.reduce((sum, product) => sum + product.quantity, 0);
        const subtotal = products.reduce((sum, product) => sum + product.price * product.quantity, 0);
        const service = orderMode === 'Consegna' && subtotal > 0 ? 3 : 0;
        cartCount.textContent = quantity;
        cartFab.classList.toggle('is-visible', quantity > 0 || window.scrollY > 700);
        $('#cartSubtotal').textContent = euro(subtotal);
        $('#cartService').textContent = service ? euro(service) : 'Gratuito';
        $('#cartTotal').textContent = euro(subtotal + service);
        $('#cartMode').textContent = orderMode;
        checkoutButton.disabled = quantity === 0;

        if (!products.length) {
            cartItems.innerHTML = '<div class="cart-empty"><svg><use href="#i-cart"/></svg><h3>Il carrello è vuoto</h3><p>Scegli qualcosa dalla nostra cucina.</p></div>';
            return;
        }
        cartItems.innerHTML = products.map(product => `
            <article class="cart-item" data-cart-id="${product.id}">
                <img src="assets/images/${product.image}" alt="">
                <div><h3>${product.name}</h3><span class="cart-item__price">${euro(product.price)}</span>
                    <div class="quantity"><button type="button" data-action="minus" aria-label="Diminuisci quantità">−</button><span>${product.quantity}</span><button type="button" data-action="plus" aria-label="Aumenta quantità">+</button></div>
                </div>
                <button class="cart-item__remove" type="button" data-action="remove" aria-label="Rimuovi ${product.name}"><svg><use href="#i-trash"/></svg></button>
            </article>`).join('');
    };

    $$('.add-to-cart').forEach(button => {
        button.addEventListener('click', () => {
            const id = button.dataset.id;
            const existing = cart.get(id);
            if (existing) existing.quantity += 1;
            else cart.set(id, { id, name: button.dataset.name, price: Number(button.dataset.price), image: button.dataset.image, quantity: 1 });
            button.classList.add('is-added');
            button.innerHTML = '<span>✓</span> Aggiunto';
            window.setTimeout(() => { button.classList.remove('is-added'); button.innerHTML = '<span>+</span> Aggiungi'; }, 1200);
            renderCart();
            showToast(`${button.dataset.name} aggiunto al carrello.`);
        });
    });

    cartItems?.addEventListener('click', event => {
        const button = event.target.closest('button[data-action]');
        if (!button) return;
        const item = button.closest('[data-cart-id]');
        const id = item.dataset.cartId;
        const product = cart.get(id);
        if (button.dataset.action === 'plus') product.quantity += 1;
        if (button.dataset.action === 'minus') product.quantity -= 1;
        if (button.dataset.action === 'remove' || product.quantity <= 0) cart.delete(id);
        renderCart();
    });

    $$('.order-mode').forEach(button => {
        button.addEventListener('click', () => {
            orderMode = button.dataset.mode;
            $$('.order-mode').forEach(item => item.classList.toggle('is-active', item === button));
            renderCart();
            showToast(`${orderMode} selezionato.`);
        });
    });

    checkoutButton?.addEventListener('click', () => {
        if (!cart.size) return;
        closeCart();
        cart.clear();
        renderCart();
        openModal('Ordine ricevuto.<br>Grazie.', `La simulazione per il servizio di ${orderMode.toLowerCase()} è completata. Nessun pagamento è stato effettuato.`);
    });

    window.addEventListener('scroll', () => {
        if (window.scrollY > 700) cartFab?.classList.add('is-visible');
        else if (!cart.size) cartFab?.classList.remove('is-visible');
    }, { passive: true });
    renderCart();

    /* Fisarmonica FAQ ------------------------------------------------------ */
    $$('.accordion__item>button').forEach(button => {
        button.addEventListener('click', () => {
            const item = button.closest('.accordion__item');
            const shouldOpen = !item.classList.contains('is-open');
            $$('.accordion__item').forEach(other => {
                other.classList.remove('is-open');
                $('button', other).setAttribute('aria-expanded', 'false');
            });
            if (shouldOpen) {
                item.classList.add('is-open');
                button.setAttribute('aria-expanded', 'true');
            }
        });
    });

    /* Newsletter ----------------------------------------------------------- */
    $('#newsletterForm')?.addEventListener('submit', event => {
        event.preventDefault();
        const input = $('input', event.currentTarget);
        if (!input.checkValidity()) { input.reportValidity(); return; }
        input.value = '';
        showToast('Grazie. La prossima lettera arriverà presto.');
    });

    /* Chiusura universale con Escape --------------------------------------- */
    document.addEventListener('keydown', event => {
        if (event.key !== 'Escape') return;
        closeMobileMenu();
        closeCart();
        closeModal();
        closeLightbox();
    });
})();
