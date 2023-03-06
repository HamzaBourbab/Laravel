
 <h3> {{$post->title}}   </h3> 
<article>
<section>

    {{$post->content}} 

</section>

</article>

           <small>published at {{$post->created_at->format("d/m/Y H:i:s")}}</small><br>
           created by {{$post->user->name  }}
