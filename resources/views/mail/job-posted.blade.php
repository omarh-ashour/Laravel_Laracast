<h1><strong>{{ $job->title }}</strong></h1>
<h3>Congrats! Your job is now live on our website.</h3>
<p>
    <a href="{{ url('/jobs/'.$job->id) }}">View Your Job Listing</a>
</p>