<header>
    <h1> Eduland Ayuda a land </h1>
    <nav> 
        <li> <a href="{{route('home')}}" class ="{{request()->routeIs('home') ? 'active' : ''}}  "> home </a> </li>
                        <!-- el ? sigifica un is y el : es un else  -->
        <li> <a href="{{route('cursos.index')}}" class ="{{request()->routeIs('cursos.*') ? 'active' : ''  }}"> cursos </a> </li>
        <li> <a href="{{route('nosotros')}}" class ="{{request()->routeIs('nosotros') ? 'active' : '' }}"> algo mas </a> </li>

        <li> <a href="{{route('contactanos.index')}}" class ="{{request()->routeIs('contactanos.index') ? 'active' : '' }}" > Contactanos </a> </li>
    </nav>
</header>