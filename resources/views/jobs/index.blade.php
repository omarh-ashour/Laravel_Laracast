<x-layout>
    <x-slot:Shumbo>
        <h1 class="text-2xl font-bold">Jobs Page</h1>
    </x-slot:Shumbo>
    <h1> <strong>Jobs</strong></h1>
    <div>
        @foreach ($jobs as $job)
            <div>
                <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                    <div class="font-bold text-blue-500">{{ $job->employer->name }}</div>
                    <strong>{{ $job['title'] }}</strong> in {{ $job['location'] }}
                    <p> Description: {{ $job['description'] }}</p>
                </a>
                <br>
            </div>
        @endforeach
    </div>
    <div>
        {{ $jobs }}
    </div>
</x-layout>
