<x-layout>
    <x-slot:Shumbo>
        Job
    </x-slot:Shumbo>
    <h2><strong>{{ $job['id']." " .$job['title'] }}</strong></h2>
    <p>Location: {{ $job['location'] }}</p>
    <p>Salary: {{$job['salary']}}</p>
    @can('edit', $job)
    <p>
        <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
    </p>
    @endcan
</x-layout>
