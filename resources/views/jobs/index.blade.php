<x-layout>
<h1>{{$title}}</h1>
<ul>
    @forelse ($jobs as $job)
    <li>{{$job}}</li>
    @empty
    No jobs available
    @endforelse
</ul>
</x-layout>
    