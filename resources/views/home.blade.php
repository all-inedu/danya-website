<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Danya Website</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- Navigation Bar --}}
    <header>
        <nav class="bg-primary">
            <div class="max-w-screen-lg mx-auto px-4 py-2 flex justify-between items-center">
                <a href="/">
                    <svg width="35" height="35" viewBox="0 0 50 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.33334 43.75V18.75L25 6.25L41.6667 18.75V43.75H29.1667V29.1667H20.8333V43.75H8.33334Z"
                            fill="white" />
                    </svg>
                </a>
                <a href="/achievements" class="mt-1">
                    <span class="font-primary font-bold text-xl text-light leading-tight">Achievements</span>
                </a>
            </div>
        </nav>
    </header>
    {{-- Navigation Bar End  --}}

    <main>

        {{-- Start Section: Hero --}}
        <section class="h-screen bg-hero-section bg-cover bg-center">
            <div class="max-w-screen-lg mx-auto px-4 py-2 h-full flex items-center">
                <div class="bg-blue -mt-10">
                    <h1 class="font-primary font-bold text-5xl text-primary lg:text-6xl">DANYA <br> TJOKROARDI</h1>
                    <span class="font-secondary font-semibold text-lg text-light lg:text-[22px]">
                        Part-Time Student, Full-Time Advocate
                    </span>
                </div>
            </div>
        </section>
        {{-- End Section: Hero --}}

        {{-- Start Section: Who Is Danya? --}}
        <section class="py-10">
            <div class="max-w-screen-lg mx-auto px-4 py-2">
                <div class="flex flex-col sm:flex-row">
                    <div class="w-full">
                        <img src="{{ asset('assets/images/image_who_is_danya.png') }}" alt="Who Is Danya?"
                            class="w-full object-cover">
                    </div>
                    <div class="w-full flex flex-col mt-8 sm:ml-6 sm:mt-0 sm:justify-center">
                        <h3 class="font-bold text-4xl text-dark">Who is</h3>
                        <h2 class="mt-2 font-primary font-bold text-6xl text-primary">Danya?</h2>
                        <p class="mt-6 text-lg text-dark">A decent scholar who cares a lot about the world and is
                            willing to
                            go the
                            mile to change it. Born in</p>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Section: Who Is Danya? --}}

        {{-- Start Section: Create Change Makin Projects --}}
        <section>
            <div class="py-12 bg-change-making-projects-section bg-cover bg-center">
                <div class="max-w-screen-lg mx-auto px-4 py-2">
                    <h2 class="mt-4 font-primary font-bold text-3xl text-light text-center">CHANGE-MAKING PROJECTS</h2>
                </div>
            </div>
            <div class="max-w-screen-lg mx-auto px-4 py-2">

                <div class="py-10">
                    <ul class="flex flex-col gap-x-4 gap-y-10">
                        <li class="flex flex-col md:flex-row">
                            <div class="w-full">
                                <h4 class="-mb-2 font-primary font-bold text-3xl text-primary lg:text-4xl lg:-mb-0">We
                                    The
                                    Genesis</h4>
                                <span class="font-secondary font-bold text-base text-grey lg:text-xl">Founder, Executive
                                    Director</span>
                            </div>
                            <div class="w-full mt-4 md:mt-0">
                                <p class="mb-4 font-secondary font-medium text-sm text-dark lg:text-base">
                                    Founded in 2020, We The Genesis is a Y2Y media organization dedicated to amplifying
                                    youth aspirations, stimulating young minds, and igniting youthful ambition with
                                    empathy. It serves as a voice for the younger generation, encouraging exploration of
                                    potential and contributing to positive change, by creating opportunities for
                                    engagement with diverse perspectives. Through its platform, We The Genesis provokes
                                    thought, inspires action, and cultivates empathy, empowering the youth to become
                                    active contributors to a more inclusive and informed society.
                                </p>
                                <a href="#"
                                    class="p-2 bg-primary font-secondary font-bold text-sm text-light lg:text-base">Join
                                    We The Genesis</a>
                            </div>
                        </li>
                        <li class="flex flex-col md:flex-row">
                            <div class="w-full">
                                <h4 class="-mb-2 font-primary font-bold text-3xl text-primary lg:text-4xl lg:-mb-0">
                                    ‘Nothing On A Dead Planet’ Campaign</h4>
                                <span class="font-secondary font-bold text-base text-grey lg:text-xl">Founder, Executive
                                    Director</span>
                            </div>
                            <div class="w-full mt-4 md:mt-0">
                                <p class="mb-4 font-secondary font-medium text-sm text-dark lg:text-base">
                                    Founded in 2020, We The Genesis is a Y2Y media organization dedicated to amplifying
                                    youth aspirations, stimulating young minds, and igniting youthful ambition with
                                    empathy. It serves as a voice for the younger generation, encouraging exploration of
                                    potential and contributing to positive change, by creating opportunities for
                                    engagement with diverse perspectives. Through its platform, We The Genesis provokes
                                    thought, inspires action, and cultivates empathy, empowering the youth to become
                                    active contributors to a more inclusive and informed society.
                                </p>
                                <a href="#"
                                    class="p-2 bg-primary font-secondary font-bold text-sm text-light lg:text-base">
                                    Visit Page</a>
                            </div>
                        </li>
                        <li class="flex flex-col md:flex-row">
                            <div class="w-full">
                                <h4 class="-mb-2 font-primary font-bold text-3xl text-primary lg:text-4xl lg:-mb-0">We
                                    The
                                    Genesis</h4>
                                <span class="font-secondary font-bold text-base text-grey lg:text-xl">Founder, Executive
                                    Director</span>
                            </div>
                            <div class="w-full mt-4 md:mt-0">
                                <p class="mb-4 font-secondary font-medium text-sm text-dark lg:text-base">
                                    Founded in 2020, We The Genesis is a Y2Y media organization dedicated to amplifying
                                    youth aspirations, stimulating young minds, and igniting youthful ambition with
                                    empathy. It serves as a voice for the younger generation, encouraging exploration of
                                    potential and contributing to positive change, by creating opportunities for
                                    engagement with diverse perspectives. Through its platform, We The Genesis provokes
                                    thought, inspires action, and cultivates empathy, empowering the youth to become
                                    active contributors to a more inclusive and informed society.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        {{-- End Section: Create Change Makin Projects --}}

        {{-- Start Section: Create Honors & Accomplishments --}}
        <section>
            <div class="py-8 bg-honors-accomplishments-section bg-cover bg-center">
                <div class="max-w-screen-lg mx-auto px-4 py-2">
                    <h2 class="mt-4 font-primary font-bold text-3xl text-light text-center">CHANGE-MAKING PROJECTS</h2>
                    <ul class="mt-8 flex justify-between gap-6">
                        <li>
                            <img src="{{ asset('assets/images/logo/UPH_logo.svg') }}" alt="UPH LOGO">
                        </li>
                        <li>
                            <img src="{{ asset('assets/images/logo/UI_logo.svg') }}" alt="UI LOGO">
                        </li>
                        <li>
                            <img src="{{ asset('assets/images/logo/HILO_logo.svg') }}" alt="HILO LOGO">
                        </li>
                        <li>
                            <img src="{{ asset('assets/images/logo/UPH_logo.svg') }}" alt="UPH LOGO">
                        </li>
                        <li>
                            <img src="{{ asset('assets/images/logo/UI_logo.svg') }}" alt="UI LOGO">
                        </li>
                        <li>
                            <img src="{{ asset('assets/images/logo/HILO_logo.svg') }}" alt="HILO LOGO">
                        </li>
                    </ul>
                    <ul class="mt-8 flex justify-between gap-6">
                        <li>
                            <img src="{{ asset('assets/images/logo/UPH_logo.svg') }}" alt="UPH LOGO">
                        </li>
                        <li>
                            <img src="{{ asset('assets/images/logo/UI_logo.svg') }}" alt="UI LOGO">
                        </li>
                        <li>
                            <img src="{{ asset('assets/images/logo/HILO_logo.svg') }}" alt="HILO LOGO">
                        </li>
                        <li>
                            <img src="{{ asset('assets/images/logo/UPH_logo.svg') }}" alt="UPH LOGO">
                        </li>
                        <li>
                            <img src="{{ asset('assets/images/logo/UI_logo.svg') }}" alt="UI LOGO">
                        </li>
                        <li>
                            <img src="{{ asset('assets/images/logo/HILO_logo.svg') }}" alt="HILO LOGO">
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        {{-- End Section: Create Honors & Accomplishments --}}

        {{-- Start Section: Speaking Opportunities --}}
        <section class="py-10">
            <div class="py-12 bg-speaking-opportunities bg-cover bg-center">
                <div class="max-w-screen-lg mx-auto px-4 py-2">
                    <h2 class="mt-4 font-primary font-bold text-3xl text-light text-center">SPEAKING OPPORTUNITIES</h2>
                </div>
            </div>

            <div class="max-w-screen-lg mx-auto px-4 py-2">
                <div class="py-10">
                    <ul class="flex flex-col gap-x-4 gap-y-10">
                        <li class="flex flex-col">
                            <div class="w-full">
                                <h4 class="-mb-2 font-primary font-bold text-3xl text-primary lg:text-4xl lg:-mb-0">We
                                    Climate Change for Teens</h4>
                            </div>
                            <div class="mt-4 w-full grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div class="max-w-md w-full h-72 mx-auto sm:mx-0">
                                    <img src="https://picsum.photos/1000/1000" alt="dummyimage"
                                        class="object-cover w-full h-full">
                                </div>
                                <div class="w-full mt-4 md:mt-0">
                                    <p class="mb-4 font-secondary font-medium text-sm text-dark lg:text-base">
                                        Danya actively participated in the public educational project called Climate
                                        Change for Teens (CCFT), initiated by FPCI, where she also took part in the
                                        Foreign Policy for Teens Video Project to engage high school students aged 15-20
                                        in climate issues, foreign policy, and world affairs. She had a conversation
                                        with Prof. Dr. Emil Salim, the First Minister of Environment in Indonesia, which
                                        was captured in one of the videos to enrich the educational content and provide
                                        valuable insights.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="flex flex-col">
                            <div class="w-full">
                                <h4 class="-mb-2 font-primary font-bold text-3xl text-primary lg:text-4xl lg:-mb-0">
                                    AMSA</h4>
                            </div>
                            <div class="mt-4 w-full grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div class="max-w-md w-full h-72 mx-auto sm:mx-0">
                                    <img src="https://picsum.photos/1000/1000" alt="dummyimage"
                                        class="object-cover w-full h-full">
                                </div>
                                <div class="w-full mt-4 md:mt-0">
                                    <p class="mb-4 font-secondary font-medium text-sm text-dark lg:text-base">Danya, as
                                        a speaker at AMSA's National Publication and Promotion Gathering 2023,
                                        highlighted the significance of targeting the right audience and understanding
                                        one's brand when sharing valuable content on social media. The presentation,
                                        delivered to over 100 participants from AMSA, aimed to equip them with essential
                                        marketing tips to effectively communicate information to their respective
                                        audiences.
                                    </p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </section>
        {{-- End Section: Speaking Opportunities --}}

        {{-- Start Section: Learn More About --}}
        <section class="py-10">
            <div class="max-w-screen-lg mx-auto px-4 py-2">
                <div class="flex flex-col justify-center">

                    <h2 class="mb-2 font-primary font-bold text-3xl text-primary text-center lg:text-4xl">
                        LEARN MORE ABOUT DANYA
                    </h2>
                    <a href="#"
                        class="mx-auto px-4 py-2 font-secondary font-semibold text-lg text-light bg-primary">
                        See Danya's Journey
                    </a>
                </div>
            </div>
        </section>
        {{-- End Section: Learn More About --}}
    </main>

    {{-- // TODO: Step 8 - Create Footer --}}
    {{-- Start Footer --}}
    <footer>
        <div class="py-10 bg-footer bg-right-top bg-cover">
            <div class="max-w-screen-lg mx-auto px-4 py-2 lg:pr-40 flex flex-col">
                <h1 class="font-primary font-bold text-4xl text-primary md:text-5xl lg:text-7xl">CONNECT WITH ME</h1>
                <div class="flex gap-x-4">
                    <div>
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.1417 4.16882C28.6619 4.16299 30.1822 4.17827 31.7021 4.21466L32.1063 4.22924C32.5729 4.24591 33.0333 4.26674 33.5896 4.29174C35.8062 4.39591 37.3188 4.74591 38.6458 5.26049C40.0208 5.78966 41.1792 6.50632 42.3375 7.66466C43.3966 8.7055 44.2163 9.96454 44.7396 11.3542C45.2542 12.6813 45.6042 14.1959 45.7083 16.4126C45.7333 16.9667 45.7542 17.4292 45.7708 17.8959L45.7833 18.3001C45.8204 19.8192 45.8363 21.3388 45.8313 22.8584L45.8333 24.4126V27.1417C45.8385 28.662 45.8225 30.1823 45.7854 31.7022L45.7729 32.1063C45.7563 32.573 45.7354 33.0334 45.7104 33.5897C45.6063 35.8063 45.2521 37.3188 44.7396 38.6459C44.218 40.0371 43.3981 41.2971 42.3375 42.3376C41.2958 43.3966 40.0361 44.2162 38.6458 44.7397C37.3188 45.2542 35.8062 45.6042 33.5896 45.7084C33.0333 45.7334 32.5729 45.7542 32.1063 45.7709L31.7021 45.7834C30.1822 45.8204 28.662 45.8364 27.1417 45.8313L25.5875 45.8334H22.8604C21.3401 45.8385 19.8198 45.8226 18.3 45.7855L17.8958 45.773C17.4013 45.7551 16.9068 45.7342 16.4125 45.7105C14.1958 45.6063 12.6833 45.2522 11.3542 44.7397C9.96393 44.2175 8.70466 43.3976 7.66458 42.3376C6.60426 41.2965 5.7838 40.0367 5.26042 38.6459C4.74584 37.3188 4.39583 35.8063 4.29167 33.5897C4.26847 33.0953 4.24763 32.6009 4.22917 32.1063L4.21875 31.7022C4.18034 30.1823 4.16298 28.662 4.16667 27.1417V22.8584C4.16085 21.3388 4.17613 19.8192 4.2125 18.3001L4.22709 17.8959C4.24375 17.4292 4.26459 16.9667 4.28959 16.4126C4.39375 14.1938 4.74375 12.6834 5.25833 11.3542C5.78203 9.96386 6.60409 8.70517 7.66667 7.66674C8.70603 6.60581 9.9645 5.7846 11.3542 5.26049C12.6833 4.74591 14.1938 4.39591 16.4125 4.29174L17.8958 4.22924L18.3 4.21882C19.8191 4.18043 21.3387 4.16307 22.8583 4.16674L27.1417 4.16882ZM25 14.5855C23.6198 14.566 22.2495 14.821 20.9687 15.3356C19.6879 15.8503 18.5222 16.6144 17.5393 17.5835C16.5563 18.5526 15.7758 19.7074 15.2431 20.9808C14.7104 22.2542 14.436 23.6208 14.436 25.0011C14.436 26.3814 14.7104 27.748 15.2431 29.0214C15.7758 30.2948 16.5563 31.4496 17.5393 32.4187C18.5222 33.3878 19.6879 34.1519 20.9687 34.6666C22.2495 35.1813 23.6198 35.4363 25 35.4167C27.7627 35.4167 30.4122 34.3193 32.3657 32.3658C34.3192 30.4123 35.4167 27.7627 35.4167 25.0001C35.4167 22.2374 34.3192 19.5879 32.3657 17.6344C30.4122 15.6809 27.7627 14.5855 25 14.5855ZM25 18.7522C25.8302 18.7369 26.6552 18.8871 27.4267 19.1943C28.1981 19.5014 28.9007 19.9591 29.4933 20.5408C30.0859 21.1225 30.5566 21.8164 30.878 22.582C31.1994 23.3477 31.365 24.1697 31.3651 25.0001C31.3653 25.8304 31.2 26.6525 30.8788 27.4182C30.5577 28.184 30.0872 28.8781 29.4948 29.4599C28.9024 30.0418 28.2 30.4998 27.4286 30.8072C26.6572 31.1145 25.8323 31.2651 25.0021 31.2501C23.3445 31.2501 21.7548 30.5916 20.5827 29.4195C19.4106 28.2474 18.7521 26.6577 18.7521 25.0001C18.7521 23.3425 19.4106 21.7528 20.5827 20.5807C21.7548 19.4086 23.3445 18.7501 25.0021 18.7501L25 18.7522ZM35.9375 11.4605C35.2654 11.4874 34.6298 11.7733 34.1638 12.2583C33.6977 12.7434 33.4375 13.3899 33.4375 14.0626C33.4375 14.7352 33.6977 15.3818 34.1638 15.8668C34.6298 16.3518 35.2654 16.6378 35.9375 16.6647C36.6282 16.6647 37.2906 16.3903 37.7789 15.9019C38.2673 15.4135 38.5417 14.7512 38.5417 14.0605C38.5417 13.3698 38.2673 12.7074 37.7789 12.2191C37.2906 11.7307 36.6282 11.4563 35.9375 11.4563V11.4605Z"
                                fill="#8D2323" />
                        </svg>

                    </div>
                    <div>
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M39.5833 6.25C40.6884 6.25 41.7482 6.68899 42.5296 7.47039C43.311 8.25179 43.75 9.3116 43.75 10.4167V39.5833C43.75 40.6884 43.311 41.7482 42.5296 42.5296C41.7482 43.311 40.6884 43.75 39.5833 43.75H10.4167C9.3116 43.75 8.25179 43.311 7.47039 42.5296C6.68899 41.7482 6.25 40.6884 6.25 39.5833V10.4167C6.25 9.3116 6.68899 8.25179 7.47039 7.47039C8.25179 6.68899 9.3116 6.25 10.4167 6.25H39.5833ZM38.5417 38.5417V27.5C38.5417 25.6987 37.8261 23.9713 36.5524 22.6976C35.2787 21.4239 33.5513 20.7083 31.75 20.7083C29.9792 20.7083 27.9167 21.7917 26.9167 23.4167V21.1042H21.1042V38.5417H26.9167V28.2708C26.9167 26.6667 28.2083 25.3542 29.8125 25.3542C30.586 25.3542 31.3279 25.6615 31.8749 26.2084C32.4219 26.7554 32.7292 27.4973 32.7292 28.2708V38.5417H38.5417ZM14.3333 17.8333C15.2616 17.8333 16.1518 17.4646 16.8082 16.8082C17.4646 16.1518 17.8333 15.2616 17.8333 14.3333C17.8333 12.3958 16.2708 10.8125 14.3333 10.8125C13.3996 10.8125 12.504 11.1834 11.8437 11.8437C11.1834 12.504 10.8125 13.3996 10.8125 14.3333C10.8125 16.2708 12.3958 17.8333 14.3333 17.8333ZM17.2292 38.5417V21.1042H11.4583V38.5417H17.2292Z"
                                fill="#8D2323" />
                        </svg>

                    </div>
                </div>
                <div class="w-full py-8">
                    <form action="#" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="col-span-full md:col-span-1">
                            <input type="text"
                                class="w-full px-4 py-2 bg-transparent border border-light font-medium text-primary focus:outline focus:outline-offset-0 focus:outline-primary focus:border-primary placeholder:font-secondary placeholder:text-primary/70"
                                placeholder="Name">
                        </div>
                        <div class="col-span-full md:col-span-1">
                            <input type="number"
                                class="w-full px-4 py-2 bg-transparent border border-light font-medium text-primary focus:outline focus:outline-offset-0 focus:outline-primary focus:border-primary placeholder:font-secondary placeholder:text-primary/70"
                                placeholder="Contact Number">
                        </div>
                        <div class="col-span-full">
                            <input type="email"
                                class="w-full px-4 py-2 bg-transparent border border-light font-medium text-primary focus:outline focus:outline-offset-0 focus:outline-primary focus:border-primary placeholder:font-secondary placeholder:text-primary/70"
                                placeholder="Email Address">
                        </div>
                        <div class="col-span-full">
                            <textarea name="email" id="email" cols="30" rows="10" placeholder="Message"
                                class="w-full px-4 py-2 bg-transparent border border-light font-medium text-primary focus:outline focus:outline-offset-0 focus:outline-primary focus:border-primary placeholder:font-secondary placeholder:text-primary/70"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    {{-- End Footer --}}
</body>

</html>
