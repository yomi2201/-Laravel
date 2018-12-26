
<h1>一覧</h1>
<p><a href="/create" class="btn btn-primary">新規追加</a></p>

@foreach ($posts as $post)
<div class="card mb-2">
    <div class="card-body">
    <h4 class="card-title">{{ $post->title }}</h4>
    <!-- <img src="storage/lm9aXU2yPflF5LDAIpHsOcF0Kl75PBxsIspSlxp2.jpeg"> -->
    <img src="{{ $post->path }}">
    <!-- <img src="storage/image/oSgvjdz7eEDY8IzD0CjaS2FNuTo3ku6VfBBx2ssZ.jpeg"> -->
    <p class="card-body">{{ $post->body }}</p>
    <a href="/delete/{{ $post->id }}" class="card-link">詳細と削除</a>
    <a href="/edit/{{ $post->id }}" class="card-link">修正</a>
    </div>
</div>
@endforeach

