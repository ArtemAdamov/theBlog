<aside class="col-md-4">

    <div class="sidebar">
        <h4>Archives</h4>
        <ol class="archives">

            @foreach($archives as $stats)
                <li><a class="active-color" href="/?month={{$stats['month']}}&year={{$stats['year']}}">
                        {{$stats['month']}} {{$stats['year']}} </a></li>
                @endforeach
        </ol>
    </div>

</aside><!-- /.blog-sidebar -->