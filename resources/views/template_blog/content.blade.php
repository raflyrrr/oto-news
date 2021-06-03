@include('template_blog.head')
<!-- SECTION -->
<div class="section">
		<!-- container -->
		<div class="container">
        <div id="hot-post" class="row hot-post">

            @yield('isi')
            <br><br>
            @include('template_blog.widget')
            
</div>
</div>

@include('template_blog.footer')