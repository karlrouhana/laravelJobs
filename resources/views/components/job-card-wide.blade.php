@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer"></x-employer-logo>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="" class="self-start text-sm mt-3 text-gray-600 transition-colors duration-300">{{ $job->employer->name }}</a>

        <h3 class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-300">
            <a href="/jobs/{{ $job->id }}">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - {{ $job->salary }}</p>
    </div>

    <div>
        @foreach($job->tags as $tag)
            <x-tag :$tag></x-tag>
        @endforeach
    </div>
</x-panel>
