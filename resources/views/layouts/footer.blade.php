<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-lg-4 col-md-6">
          <div class=" pb-3 fs-3">AiNa</div>
          <div class="footer-info text-start">
            <p>
              BP 6469, 309 Rue Franqueville <br>
              Immeuble AXA, Akwa, Douala<br><br>
              <strong>Phone:</strong> +237 698 307 457<br>
              <strong>Email:</strong> aina.redaction@yahoo.com<br>
            </p>
            <div class="social-links mt-3">
              <a class="twitter"><i class="bx bxl-twitter"></i></a>
              <a class="facebook"><i class="bx bxl-facebook"></i></a>
              <a class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
              <a class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter" style="margin-top: 20px;">
          <h4>Nos conseils</h4>
          <p>Laissez votre E-mail</p>

          <div class="text-success">
            @if(session()->has("message"))
            <div class="alert alert-success">{{session()->get('message')}}</div>
            @endif
          </div>

          <form action="{{ route('subscribe.mail') }}" method="post">
            @csrf
            <input type="email" name="email" class=" @error('email') is-invalid @enderror" placeholder=" aina.redaction@yahoo.com"><input type="submit" value="Subscribe">
          </form>
          
          <span class="text-danger">
            @error('email')
            {{$message}}
            @enderror
          </span>

        </div>

        <div class="col-lg-2 col-md-6 footer-links text-start" style="margin-top: 20px;">
          <h4>FAQ</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('questions') }}">Aide pour les clients </a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      <strong><span>AINA </span></strong>Copyright &copy; 2023-2024
    </div>
  </div>
</footer><!-- End Footer -->