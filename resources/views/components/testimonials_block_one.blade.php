<section class="container mx-auto px-6 lg:px-10 py-12 lg:py-24">

    {!! $component['header'] !!}

    <div class="flex flex-wrap mt-6 lg:mt-12">

        @foreach($component['testimonials'] as $testimonial)

            <div class="p-4 md:w-1/2 w-full">
                <div class="h-full bg-support p-8 rounded">
                    @includeIf('SVGs.quote')
                    <p class="mb-6">{{ $testimonial['testimonial'] }}</p>
                    <a class="inline-flex items-center">
                        <img src="{{ $testimonial['individual_thumbnail']['permalink'] }}" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                        <span class="flex-grow flex flex-col pl-4">
                          <span class="title-font font-medium text-gray-900">{{ $testimonial['individual_name'] }}</span>
                          <span class="text-gray-500 text-sm">{{ $testimonial['individual_title'] }}</span>
                        </span>
                    </a>
                </div>
            </div>
        @endforeach

    </div>

</section>