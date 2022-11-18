<h1>出力</h1>

@foreach ($articles as $article)
<article class="article-item">
            <div class="article-title">{{ $article->title }}</div>
            <div class="article-body">{{ $article->body }}</div>
        </article>
@endforeach