@php use App\Models\User; @endphp
<div class="text-white text-lg">
    @foreach($tweets as $tweet)
        <x-tweet :tweet="$tweet"></x-tweet>
    @endforeach
</div>
