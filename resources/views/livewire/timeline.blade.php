@php use App\Models\User; @endphp
<div class="mt-10 text-white text-lg">
    @foreach($tweets as $tweet)
        <div class="mt-10 ml-5 mr-10 pl-4 shadow-2xl border-cyan-900 rounded pb-3">
            <p class=" flex"><img class="rounded border-gray-100" width="50px" src="https://merriam-webster.com/assets/mw/images/article/art-wap-article-main/egg-3442-e1f6463624338504cd021bf23aef8441@1x.jpg">
                <span class="align-middle"> {{User::select('name')->where('id', $tweet->created_by)->first()->name}}
            </p>
            <p class="my-6">{{$tweet->body}}</p>
            <p>{{$tweet->created_at}}</p>
        </div>

    @endforeach
</div>
