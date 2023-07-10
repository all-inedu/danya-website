@extends('layout.user.app')

@section('main')
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
                <a href="#" class="mx-auto px-4 py-2 font-secondary font-semibold text-lg text-light bg-primary">
                    See Danya's Journey
                </a>
            </div>
        </div>
    </section>
    {{-- End Section: Learn More About --}}
@endsection
