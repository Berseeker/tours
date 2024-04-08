"use strict";
let theme = {

    init: function () {
        theme.tnHeaderSticked();
        theme.tnMobileNav();
        theme.tnScrollTop();
        theme.tnBackgroundImage();
        theme.tnChangeAvatar();
        theme.tnDatePicker();
        theme.tnCountdown();
        theme.tnBvRangePrice();
        theme.tnDropdownCheckbox();
        theme.tnDSelect();
        theme.tnSelectGuest();
        theme.tnGLightbox();
        theme.tnPlyrPlayer();
        theme.tnSwiper();
        theme.tnStarRate();
        theme.tnValidation();
        theme.tnPreloader();
    },

    /* ------------------------------------------------------- */
    /* Header Sticked */
    /* ------------------------------------------------------- */
    tnHeaderSticked: () => {
        const selectHeader = document.querySelector('#header');
        if (selectHeader) {
            document.addEventListener('scroll', () => {
                if (window.scrollY > 200) {
                    selectHeader.classList.add('sticked');
                    window.scrollY >= 300 ? selectHeader.classList.add('showed') : selectHeader.classList.remove('showed');
                } else {
                    selectHeader.classList.remove('sticked')
                }
            });
        }
    },
    /* ------------------------------------------------------- */

    /* ------------------------------------------------------- */
    /* Mobile Nav */
    /* ------------------------------------------------------- */
    // Function to toggle mobile navigation menu
    tnMobileNav: () => {
        // Select mobile nav elements
        const mobileNavShow = document.querySelector('.mobile-nav-show');
        const mobileNavHide = document.querySelector('.mobile-nav-hide');
        const mobileNavToggleBtns = document.querySelectorAll('.mobile-nav-toggle');

        // Event listeners to toggle buttons
        mobileNavToggleBtns.forEach(btn => {
            btn.addEventListener('click', function (event) {
                event.preventDefault();
                mobileNavToggle();
            })
        });

        // Event listeners to dropdown indicators within navbar
        const navDropdowns = document.querySelectorAll('.navbar .dropdown > a > .dropdown-indicator');
        navDropdowns.forEach(el => {
            el.addEventListener('click', function (event) {
                // Check if body has 'mobile-nav-active' class
                if (document.body.classList.contains('mobile-nav-active')) {
                    event.preventDefault();
                    // Toggle classes on parent and next sibling elements
                    this.parentNode.classList.toggle('active');
                    this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
                    // Toggle classes on dropdown indicator element
                    const dropDownIndicator = this.parentNode.querySelector('.dropdown-indicator');
                    dropDownIndicator.classList.toggle('ti-chevron-down');
                    dropDownIndicator.classList.toggle('ti-chevron-down');
                }
            })
        });

        // Toggle classes on mobile navigation elements
        function mobileNavToggle() {
            document.body.classList.toggle('mobile-nav-active');
            mobileNavShow.classList.toggle('d-none');
            mobileNavHide.classList.toggle('d-none');
        }
    },
    /* ------------------------------------------------------- */

    /* ------------------------------------------------------- */
    /* Scroll Top */
    /* ------------------------------------------------------- */
    tnScrollTop: () => {
        const scrollTop = document.querySelector('.scroll-top');
        if (scrollTop) {
            const togglescrollTop = function () {
                window.scrollY > 130 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
            }
            window.addEventListener('load', togglescrollTop);
            document.addEventListener('scroll', togglescrollTop);

            const scrollToTop = function () {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
            scrollTop.addEventListener('click', scrollToTop);
        }
    },
    /* ------------------------------------------------------- */

    /* ------------------------------------------------------- */
    /* Background Image */
    /* ------------------------------------------------------- */
    tnBackgroundImage: () => {
        const bg = document.querySelectorAll(".bg-image");
        bg.forEach((element) => {
            const url = element.getAttribute('data-image-src');
            element.style.backgroundImage = `url('${url}')`;
        });

    },
    /* ------------------------------------------------------- */

    /* ------------------------------------------------------- */
    /* User Avatar */
    /* ------------------------------------------------------- */
    tnChangeAvatar: () => {

        // Get all elements with the data-user-avatar attribute
        const userAvatars = document.querySelectorAll('[data-user-avatar]');

        // Loop through each data-user-avatar element
        userAvatars.forEach((userAvatar) => {
            // Get the child elements inside the data-user-avatar element
            const inputAvatar = userAvatar.querySelector('[data-input-avatar]');
            const updateAvatarBtn = userAvatar.querySelector('[data-update-avatar]');
            const showAvatarImg = userAvatar.querySelector('[data-show-avatar]');

            // Check if the elements are found
            if (inputAvatar && updateAvatarBtn && showAvatarImg) {
                // Add an event listener to inputAvatar when its value changes
                inputAvatar.addEventListener('change', () => {
                    // Check if a file is selected
                    if (inputAvatar.files && inputAvatar.files[0]) {
                        // Get the file extension of the selected file
                        const fileExtension = inputAvatar.files[0].name.split('.').pop().toLowerCase();

                        // Check if the file extension is valid
                        if (['jpg', 'gif', 'png'].includes(fileExtension)) {
                            // Remove the d-none class from the updateAvatarBtn button
                            updateAvatarBtn.classList.remove('d-none');

                            // Change the source of the showAvatarImg element
                            const reader = new FileReader();
                            reader.addEventListener('load', () => {
                                showAvatarImg.src = reader.result;
                            });
                            reader.readAsDataURL(inputAvatar.files[0]);
                        } else {
                            // If the file extension is invalid, add the d-none class to the updateAvatarBtn button
                            updateAvatarBtn.classList.add('d-none');
                        }
                    } else {
                        // If no file is selected, add the d-none class to the updateAvatarBtn button
                        updateAvatarBtn.classList.add('d-none');
                    }
                });
            }
        });

    },
    /* ------------------------------------------------------- */

    /* ------------------------------------------------------- */
    /* Datepicker */
    /* ------------------------------------------------------- */
    tnDatePicker: () => {

        /* Check tour by month */
        new flatpickr(".select-month", {
            allowInput: false,
            minDate: "today",
            static: true,
            position: "right center",
            wrap: true,
            disableMobile: "true",
            plugins: [
                new monthSelectPlugin({
                    shorthand: true,
                    dateFormat: "M Y",
                    altFormat: "M Y",
                })
            ]
        });

        /* Check tour by date */
        new flatpickr(".select-date", {
            allowInput: false,
            minDate: "today",
            static: true,
            position: "right center",
            wrap: true,
            disableMobile: "true",
            dateFormat: "M d Y",
        });

        /* Check tour by date */
        new flatpickr(".date-of-birth", {
            allowInput: true,
            minDate: "today",
            static: true,
            position: "right center",
            wrap: true,
            disableMobile: "true",
            dateFormat: "M d Y",
        });

    },
    /* ------------------------------------------------------- */

    /* ------------------------------------------------------- */
    /* Countdown*/
    /* ------------------------------------------------------- */
    tnCountdown: () => {
        const countdownEl = document.querySelector('.countdown');
        if (countdownEl) {
            const countdown_timer = new countdown({
                target: '.countdown',
                dayWord: 'days',
                hourWord: 'hours',
                minWord: 'mins',
                secWord: 'secs'
            });
        }
    },
    /* ------------------------------------------------------- */

    /* ------------------------------------------------------- */
    /* Range Price */
    /* ------------------------------------------------------- */
    tnBvRangePrice: () => {
        {
            // Select all dropdown checkboxes
            document.querySelectorAll('[data-range-price]').forEach(function (element) {

                // Get references to the range input, price input, and slider elements
                const rangeInput = element.querySelectorAll(".range-input input");
                const priceInput = element.querySelectorAll(".price-input input");
                const range = element.querySelector(".slider .progress");

                // Set the minimum price gap
                let priceGap = 100;

                // Check if all necessary elements exist
                if (rangeInput && priceInput && range) {

                    // Set up event listeners for price input fields
                    priceInput.forEach(input => {
                        // When a price input field's value changes...
                        input.addEventListener("change", e => {
                            // Get the current min and max prices
                            let minPrice = parseInt(priceInput[0].value),
                                maxPrice = parseInt(priceInput[1].value);

                            // If the price range is valid...
                            if ((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max) {
                                // If the first price input field was changed...
                                if (e.target === priceInput[0]) {
                                    // Update the left range input field and the slider
                                    rangeInput[0].value = minPrice;
                                    range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
                                } else {
                                    // Otherwise, update the right range input field and the slider
                                    rangeInput[1].value = maxPrice;
                                    range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                                }
                            }
                        });
                    });

                    // Set up event listeners for range input fields
                    rangeInput.forEach(input => {
                        // When the range input fields change...
                        input.addEventListener("input", e => {
                            // Get the current min and max values
                            let minVal = parseInt(rangeInput[0].value),
                                maxVal = parseInt(rangeInput[1].value);

                            // If the price range is too small...
                            if ((maxVal - minVal) < priceGap) {
                                // If the first range input field was changed...
                                if (e.target.className === "range-min") {
                                    // Enforce a minimum price gap
                                    rangeInput[0].value = maxVal - priceGap
                                } else {
                                    // Otherwise, enforce a minimum price gap from the other end
                                    rangeInput[1].value = minVal + priceGap;
                                }
                            } else {
                                // Otherwise, update the price input fields and the slider
                                priceInput[0].value = minVal;
                                priceInput[1].value = maxVal;
                                range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
                                range.style.right = 100 - ((maxVal / rangeInput[1].max) * 100) + "%";
                            }
                        });
                    });

                    // Set the initial positions of the slider's progress bar
                    const minVal = parseInt(rangeInput[0].value);
                    const maxVal = parseInt(rangeInput[1].value);
                    range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
                    range.style.right = 100 - ((maxVal / rangeInput[1].max) * 100) + "%";
                }

            });

        }
    },
    /* ------------------------------------------------------- */

    /* ------------------------------------------------------- */
    /* Dropdown Checkbox */
    /* ------------------------------------------------------- */
    tnDropdownCheckbox: () => {
        {
            // Select all dropdown checkboxes
            document.querySelectorAll('[data-dropdown-checkbox]').forEach(function (element) {

                // Select the dropdown checkboxes and toggle button
                const checkboxAll = element.querySelector('input[data-checkbox-type="all"]');
                const checkboxOne = element.querySelectorAll('input[data-checkbox-type="one"]');
                const buttonToggle = element.querySelector('button.dropdown-toggle');

                // If checkbox (all) is checked, uncheck checkbox (one) and set toggle button text
                if (checkboxAll.checked) {
                    buttonToggle.textContent = checkboxAll.value;
                    checkboxOne.forEach((cb) => { cb.checked = false; });
                } else {
                    // Check the status of dropdown checkboxes
                    CheckCheckbox();
                }

                // Event listener for changes to checkbox (all)
                checkboxAll.addEventListener('change', function () {
                    if (this.checked) {
                        // If checkbox (all) is checked, uncheck checkbox (one) and set toggle button text
                        checkboxOne.forEach(function (checkbox) {
                            checkbox.checked = false;
                        });
                        buttonToggle.textContent = checkboxAll.value;
                    }
                });

                // Event listeners for changes to checkbox (one)
                checkboxOne.forEach((checkbox) => {
                    checkbox.addEventListener('change', () => {
                        // Check the status of dropdown checkboxes
                        CheckCheckbox();
                    });
                });

                // Check dropdown checkboxes status
                function CheckCheckbox() {
                    // Get the number of checked checkbox (one)
                    const checkedCount = element.querySelectorAll('input[data-checkbox-type="one"]:checked').length;
                    // If all checkbox (one) are checked or none are checked
                    if (checkedCount === checkboxOne.length || checkedCount < 1) {
                        // Check the checkbox (all), uncheck checkbox (one), and update toggle button text
                        checkboxAll.checked = true;
                        checkboxOne.forEach((cb) => { cb.checked = false; });
                        buttonToggle.textContent = checkboxAll.value;
                    } else {
                        // Uncheck the checkbox (all), get checked checkbox (one) values, and update toggle button text
                        checkboxAll.checked = false;
                        const checkedValues = [];
                        checkboxOne.forEach((cb) => {
                            if (cb.checked) {
                                checkedValues.push(cb.value);
                            }
                        });
                        buttonToggle.textContent = checkedValues.join(', ');
                    }
                }

            });
        }
    },
    /* ------------------------------------------------------- */

    /* ------------------------------------------------------- */
    /* DSelect Custom */
    /* ------------------------------------------------------- */
    tnDSelect: () => {
        {
            //const customSelects = document.querySelectorAll('.custom-select');
            //if (customSelects?.length) {
            //    for (const customSelect of customSelects) {
            //        dselect(customSelect);
            //    }
            //}
            for (const el of document.querySelectorAll('.custom-select')) {
                dselect(el)
            }
        }
    },
    /* ------------------------------------------------------- */

    /* ------------------------------------------------------- */
    /* Select Guest */
    /* ------------------------------------------------------- */
    tnSelectGuest: () => {
        {
            // Loop each element total number of guests
            document.querySelectorAll('[data-total-guest]').forEach(function (totalGuest) {
                // Select the input elements for adults and children, and elements to display the total number of adults and children
                const adultsInput = totalGuest.querySelector('input[data-input-adults=""]');
                const childrenInput = totalGuest.querySelector('input[data-input-children=""]');
                const totalAdultsSpan = totalGuest.querySelector('span[data-total-adults=""]');
                const totalChildrenSpan = totalGuest.querySelector('span[data-total-children=""]');

                // Select the button elements for incrementing or decrementing the number of adults and children
                const minusAdultsBtn = totalGuest.querySelector('button[data-minus-adults=""]');
                const plusAdultsBtn = totalGuest.querySelector('button[data-plus-adults=""]');
                const minusChildrenBtn = totalGuest.querySelector('button[data-minus-children=""]');
                const plusChildrenBtn = totalGuest.querySelector('button[data-plus-children=""]');

                //If there exist adult and child input elements
                if (adultsInput && childrenInput) {

                    // If the input elements for adults and children are empty, assign default values to them
                    if (adultsInput.value.trim() === '') {
                        adultsInput.value = 1;
                    }
                    if (childrenInput.value.trim() === '') {
                        childrenInput.value = 0;
                    }

                    // Display the total number of adults and children
                    totalAdultsSpan.innerText = `${adultsInput.value} ${(adultsInput.value > 1) ? 'Adults' : 'Adult'}`;
                    totalChildrenSpan.innerText = `${childrenInput.value} ${(childrenInput.value > 1) ? 'Children' : 'Child'}`;

                    // This is an adult number input event
                    adultsInput.addEventListener('input', () => {
                        const maxAdults = parseInt(adultsInput.dataset.adultsMax);
                        if (adultsInput.value > maxAdults) {
                            adultsInput.value = maxAdults;
                        }
                        if (adultsInput.value < 1) {
                            adultsInput.value = 1;
                        }
                        // Update the total number of adults
                        totalAdultsSpan.innerText = `${adultsInput.value} ${(adultsInput.value > 1) ? 'Adults' : 'Adult'}`;
                    });

                    // This is an children number input event
                    childrenInput.addEventListener('input', () => {
                        const maxChildren = parseInt(childrenInput.dataset.childrenMax);
                        if (childrenInput.value > maxChildren) {
                            childrenInput.value = maxChildren;
                        }
                        // Update the total number of children
                        totalChildrenSpan.innerText = `${childrenInput.value} ${(childrenInput.value > 1) ? 'Children' : 'Child'}`;
                    });

                    // This is a click event that reduces the number of adults
                    minusAdultsBtn.addEventListener('click', () => {
                        const currentValue = parseInt(adultsInput.value);
                        if (currentValue > 1) {
                            adultsInput.value = currentValue - 1;
                            // Update the total number of adults
                            totalAdultsSpan.innerText = `${adultsInput.value} ${(adultsInput.value > 1) ? 'Adults' : 'Adult'}`;
                        }
                    });

                    // This is a click event that increases the number of adults
                    plusAdultsBtn.addEventListener('click', () => {
                        const currentValue = parseInt(adultsInput.value);
                        const maxAdults = parseInt(adultsInput.dataset.adultsMax);
                        if (currentValue < maxAdults) {
                            adultsInput.value = currentValue + 1;
                            // Update the total number of adults
                            totalAdultsSpan.innerText = `${adultsInput.value} ${(adultsInput.value > 1) ? 'Adults' : 'Adult'}`;
                        }
                    });

                    // This is a click event that reduces the number of children
                    minusChildrenBtn.addEventListener('click', () => {
                        const currentValue = parseInt(childrenInput.value);
                        if (currentValue > 0) {
                            childrenInput.value = currentValue - 1;
                            // Update the total number of children
                            totalChildrenSpan.innerText = `${childrenInput.value} ${(childrenInput.value > 1) ? 'Children' : 'Child'}`;
                        }
                    });

                    // This is a click event that increases the number of children
                    plusChildrenBtn.addEventListener('click', () => {
                        const currentValue = parseInt(childrenInput.value);
                        const maxChildren = parseInt(childrenInput.dataset.childrenMax);
                        if (currentValue < maxChildren) {
                            childrenInput.value = currentValue + 1;
                            // Update the total number of children
                            totalChildrenSpan.innerText = `${childrenInput.value} ${(childrenInput.value > 1) ? 'Children' : 'Child'}`;
                        }
                    });

                    //The number of adults and children must be digits from 0-9
                    function validateNumberInput(input) {
                        input.addEventListener('keypress', function (e) {
                            const keyCode = e.keyCode || e.which;
                            const keyValue = String.fromCharCode(keyCode);

                            if (!/^\d*$/.test(keyValue)) {
                                e.preventDefault();
                            }
                        });
                    }

                    validateNumberInput(adultsInput);
                    validateNumberInput(childrenInput);

                }
            });

        }
    },
    /* ------------------------------------------------------- */

    /* ------------------------------------------------------- */
    /* GLightbox */
    /* ------------------------------------------------------- */
    tnGLightbox: () => {

        // Lightbox photo
        let photoLightbox = GLightbox({
            selector: '.glightbox'
        });

        // Lightbox media
        let mediaLightbox = GLightbox({
            selector: '.media-glightbox',
            touchNavigation: true,
            loop: false,
            zoomable: false,
            autoplayVideos: true,
            moreLength: 0,
            slideExtraAttributes: {
                poster: ''
            },
            plyr: {
                config: {
                    ratio: '16:9',
                    muted: false,
                    hideControls: true,
                    youtube: {
                        noCookie: false,
                        rel: 0,
                        showinfo: 0,
                        iv_load_policy: 3
                    },
                    vimeo: {
                        byline: false,
                        portrait: false,
                        title: false,
                        speed: true,
                        transparent: false
                    }
                }
            },
        });

    },
    /* ------------------------------------------------------- */

    /* ------------------------------------------------------- */
    /* Plyr Player */
    /* ------------------------------------------------------- */
    tnPlyrPlayer: () => {

        const html5Player = new Plyr('.html5-player');
        const vimeoPlayer = new Plyr('.vimeo-player');
        const youtubePlayer = new Plyr('.youtube-player');

    },
    /* ------------------------------------------------------- */

    /* ------------------------------------------------------- */
    /* Swiper slider */
    /* ------------------------------------------------------- */
    tnSwiper: () => {

        /* Hero slider */
        new Swiper('.hero-swiper', {
            speed: 800,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            navigation: {
                enabled: false,
                nextEl: '.hero-next',
                prevEl: '.hero-prev',
            },
            pagination: {
                el: ".hero-pagination",
                clickable: true,
            },
            breakpoints: {
                991.98: {
                    navigation: {
                        enabled: true
                    },
                }
            }
        });

        /* Blog carousel */
        new Swiper('.blog-swiper', {
            speed: 800,
            loop: true,
            spaceBetween: 24,
            navigation: {
                nextEl: '.blog-next',
                prevEl: '.blog-prev',
            },
            pagination: {
                el: '.blog-dot',
                type: 'bullets',
                clickable: true,
            },
            breakpoints: {
                1200: {
                    slidesPerView: 4,
                },
                992: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 2,
                },
                577: {
                    slidesPerView: 1,
                },
                320: {
                    navigation: {
                        enabled: false,
                    },
                },
            },
        });

        /* Blog overlay carousel */
        new Swiper('.blog-overlay-swiper', {
            speed: 800,
            loop: true,
            spaceBetween: 2,
            navigation: {
                nextEl: '.blog-overlay-next',
                prevEl: '.blog-overlay-prev',
            },
            breakpoints: {
                1200: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 2,
                },
                577: {
                    slidesPerView: 1,
                }
            },
        });

        /* Blog overlay carousel */
        new Swiper('.related-posts-swiper', {
            speed: 800,
            loop: true,
            spaceBetween: 24,
            navigation: {
                nextEl: '.related-posts-next',
                prevEl: '.related-posts-prev',
            },
            breakpoints: {
                1200: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 2,
                },
                577: {
                    slidesPerView: 1,
                }
            },
        });

        /* Tour carousel */
        new Swiper('.tour-swiper', {
            speed: 800,
            loop: true,
            spaceBetween: 24,
            navigation: {
                nextEl: '.tour-next',
                prevEl: '.tour-prev',
            },
            pagination: {
                el: '.tour-dot',
                type: 'bullets',
                clickable: true,
            },
            breakpoints: {
                1200: {
                    slidesPerView: 4,
                },
                992: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 2,
                },
                577: {
                    slidesPerView: 1,
                },
                320: {
                    navigation: {
                        enabled: false,
                    },
                },
            },
        });

        /* Sights carousel */
        new Swiper('.sight-swiper', {
            speed: 800,
            loop: true,
            spaceBetween: 24,
            navigation: {
                nextEl: '.sight-next',
                prevEl: '.sight-prev',
            },
            pagination: {
                el: '.sight-dot',
                type: 'bullets',
                clickable: true,
            },
            breakpoints: {
                1200: {
                    slidesPerView: 5,
                },
                992: {
                    slidesPerView: 4,
                },
                768: {
                    slidesPerView: 3,
                },
                577: {
                    slidesPerView: 2,
                },
                360: {
                    spaceBetween: 10,
                    slidesPerView: 2,
                    navigation: {
                        enabled: false,
                    },
                },
            },
        });

        /* City carousel*/
        new Swiper('.city-swiper', {
            speed: 800,
            loop: true,
            spaceBetween: 16,
            navigation: {
                nextEl: '.city-next',
                prevEl: '.city-prev',
            },
            pagination: {
                el: '.city-dot',
                type: 'bullets',
                clickable: true,
            },
            breakpoints: {
                1200: {
                    slidesPerView: 6,
                },
                992: {
                    slidesPerView: 5,
                },
                768: {
                    slidesPerView: 3,
                },
                577: {
                    slidesPerView: 2,
                },
                320: {
                    spaceBetween: 10,
                    slidesPerView: 2,
                    navigation: {
                        enabled: false,
                    },
                },
            },
        });

        /* Review carousel */
        new Swiper('.review-swiper', {
            speed: 800,
            loop: true,
            spaceBetween: 24,
            pagination: {
                el: ".review-dot",
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                577: {
                    slidesPerView: 1,
                },
            }
        });


        /* Team carousel */
        new Swiper('.team-swiper', {
            speed: 800,
            loop: true,
            spaceBetween: 16,
            navigation: {
                nextEl: '.team-next',
                prevEl: '.team-prev',
            },
            pagination: {
                el: '.team-dot',
                type: 'bullets',
                clickable: true,
            },
            breakpoints: {
                1200: {
                    slidesPerView: 4,
                },
                992: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 2,
                },
                577: {
                    slidesPerView: 1,
                },
                320: {
                    navigation: {
                        enabled: false,
                    },
                },

            },
        });


    },
    /* ------------------------------------------------------- */

    /* ------------------------------------------------------- */
    /* Plyr Player */
    /* ------------------------------------------------------- */
    tnStarRate: () => {
        const element = document.querySelector('.rater');
        if (element) {
            const starRate = raterJs({
                element,
                rateCallback: (rating) => {
                    this.setRating(rating);
                }
            });
        }
    },
    /* ------------------------------------------------------- */

    /* ------------------------------------------------------- */
    /* Form validation */
    /* ------------------------------------------------------- */
    tnValidation: () => {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation');

        // Loop over them and prevent submission
        forms.forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    },
    /* ------------------------------------------------------- */

    /* ------------------------------------------------------- */
    /* Preloader */
    /* ------------------------------------------------------- */
    tnPreloader: () => {
        const preloader = document.querySelector('#preloader');
        if (preloader) {
            function removePreloader() {
                preloader.remove();
            }

            setTimeout(() => {
                window.requestAnimationFrame(removePreloader);
            }, 1500);
        }
    },
    /* ------------------------------------------------------- */

}

theme.init();

