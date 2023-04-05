<footer>
  <section class="section-footer-menu">
    <div class="container">
      <div class="footer-menu">

        @foreach ($menus as $menu)
        <div class="menu-list">
          <h3>{{ $menu['title'] }}</h3>

          <ul>

            @foreach ($menu['items'] as $item)
            <li>
              {{ $item }}
            </li>
            @endforeach

          </ul>
        </div>
        @endforeach

      </div>
    </div>
  </section>

  <section class="section-footer-credits">
    <div class="container">
      <div class="footer-credits">

        <div class="button">
          Sign-up now!
        </div>

        <div class="menu-icons">
          <h3>Follow Us</h3>

          <ul>
            <li>
              <img src="{{ Vite::asset('resources/img/footer-facebook.png')}}" alt="">
            </li>
            <li>
              <img src="{{ Vite::asset('resources/img/footer-twitter.png')}}" alt="">
            </li>
            <li>
              <img src="{{ Vite::asset('resources/img/footer-youtube.png')}}" alt="">
            </li>
            <li>
              <img src="{{ Vite::asset('resources/img/footer-pinterest.png')}}" alt="">
            </li>
            <li>
              <img src="{{ Vite::asset('resources/img/footer-periscope.png')}}" alt="">
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section>
</footer>