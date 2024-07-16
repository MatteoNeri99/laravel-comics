<header>

    <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="">

    <nav>
      <ul>

        <li>

          <a href="/home" class="{{ Route::currentRouteName() === 'guest-home' ? 'active' : ''}}">homepage</a>

        </li>
        <li>

            <a href="/prodotti" class="{{ Route::currentRouteName() === 'guest-prodotti' ? 'active' : '' }}">prodotti</a>

          </li>
          <li>

            <a href="#">movies</a>

          </li>
          <li>

            <a href="#">tv</a>

          </li>
          <li>

            <a href="#">games</a>

          </li>
          <li>

            <a href="#">collectibles</a>

          </li>
          <li>

            <a href="#">videos</a>

          </li>
          <li>

            <a href="#">fans</a>

          </li>
          <li>

            <a href="#">news</a>

          </li>
          <li>

            <a href="#">shop</a>

          </li>

      </ul>

    </nav>

</header>
