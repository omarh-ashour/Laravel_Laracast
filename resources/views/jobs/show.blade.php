<x-layout>
    <x-slot:Shumbo>
        Job
    </x-slot:Shumbo>
    <h2><strong>{{ $job['title'] }}</strong></h2>
    <p>Location: {{ $job['location'] }}</p>
    <p>Salary: {{$job['salary']}}</p>
    <p>
        <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
    </p>
</x-layout>
