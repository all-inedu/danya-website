@extends('layout.user.app')

@section('main')
    {{-- Start Section: Create Change Making Projects --}}
    <section>
        <div class="py-12 bg-awards-achievements-section bg-cover bg-center">
            <div class="max-w-screen-lg mx-auto px-4 py-2">
                <h2 class="mt-4 font-primary font-bold text-3xl text-light text-center">AWARDS AND ACHIEVEMENTS</h2>
            </div>
        </div>
        <div class="max-w-screen-lg mx-auto px-4 py-2">
            <div class="py-10">
                <ul class="flex flex-col gap-x-4 gap-y-14 mb-6">
                    @foreach ($award_achievements as $item)
                        <li class="flex flex-col md:flex-row">
                            <div class="w-full">
                                <h4 class="font-primary font-bold text-3xl text-primary lg:text-4xl lg:-mb-0">
                                    {{ $item->competition_name }}
                                </h4>
                                <span class="font-secondary font-bold text-base lg:text-xl">
                                    {{ $item->award_name }}
                                </span>
                            </div>
                            <div class="w-full mt-4 md:mt-0">
                                <img src="{{ asset('uploaded_files/award_achievement/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->image) }}"
                                    alt="{{ $item->alt }}" class="w-full">
                            </div>
                        </li>
                    @endforeach
                </ul>
                {{ $award_achievements->links('layout.pagination.tailwind') }}
            </div>
        </div>
    </section>
    {{-- End Section: Create Change Making Projects --}}
@endsection
