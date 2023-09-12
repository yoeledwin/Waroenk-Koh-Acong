<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
      </main>

      <footer class="page-footer light-green darken-4">
        <div class="container">
          <div class="row">
            <div class="col s12">
              <h5 class="white-text">Aneka Buah Buahan</h5>
              <blockquote>
                <p class="grey-text text-lighten-4">Yoel Edwin</p>
              </blockquote>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
            <small>
              <?= date("D/"); ?><?= date("M/"); ?><?= date("Y"); ?>
            </small>
          </div>
        </div>
      </footer>

      <script type="text/javascript">
        var element = document.querySelector('.sidenav');
        var instance = M.Sidenav.init(element);
      </script>

      <style media="screen">
        body {
          display: flex;
          min-height: 100vh;
          flex-direction: column;
        }

        main {
          flex: 1 0 auto;
        }
      </style>
    </body>
  </html>
