@php
$containerFooter = (isset($configData['contentLayout']) && $configData['contentLayout'] === 'compact') ? 'container-xxl' : 'container-fluid';
@endphp

<!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
  <div class="{{ $containerFooter }}">
    <div class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
      <div>
        © <script>document.write(new Date().getFullYear())
  </script>, made with ❤️ by <a href="https://cmpautomate.com" target="_blank" class="footer-link text-primary fw-medium">CMP Automate</a>
      </div>
    </div>
  </div>
</footer>
<!--/ Footer-->
