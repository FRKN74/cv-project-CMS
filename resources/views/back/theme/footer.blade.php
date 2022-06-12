<footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 footer-copyright text-center">
          <p class="mb-0"> 2022 </p>
        </div>
      </div>
    </div>
  </footer>
</div>
</div>
<!-- latest jquery-->
@jquery()
<!-- Bootstrap js-->
<script src="{{ asset('back') }}/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<!-- feather icon js-->
<script src="{{ asset('back') }}/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="{{ asset('back') }}/assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- scrollbar js-->
<script src="{{ asset('back') }}/assets/js/scrollbar/simplebar.js"></script>
<script src="{{ asset('back') }}/assets/js/scrollbar/custom.js"></script>
<!-- Sidebar jquery-->
<script src="{{ asset('back') }}/assets/js/config.js"></script>
<!-- Plugins JS start-->
<script src="{{ asset('back') }}/assets/js/sidebar-menu.js"></script>
<script src="{{ asset('back') }}/assets/js/chart/knob/knob.min.js"></script>
<script src="{{ asset('back') }}/assets/js/chart/knob/knob-chart.js"></script>
<script src="{{ asset('back') }}/assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="{{ asset('back') }}/assets/js/chart/apex-chart/stock-prices.js"></script>
<script src="{{ asset('back') }}/assets/js/notify/bootstrap-notify.min.js"></script>
<script src="{{ asset('back') }}/assets/js/dashboard/default.js"></script>
<script src="{{ asset('back') }}/assets/js/notify/index.js"></script>
<script src="{{ asset('back') }}/assets/js/datepicker/date-picker/datepicker.js"></script>
<script src="{{ asset('back') }}/assets/js/datepicker/date-picker/datepicker.en.js"></script>
<script src="{{ asset('back') }}/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
<script src="{{ asset('back') }}/assets/js/photoswipe/photoswipe.min.js"></script>
<script src="{{ asset('back') }}/assets/js/photoswipe/photoswipe-ui-default.min.js"></script>
<script src="{{ asset('back') }}/assets/js/photoswipe/photoswipe.js"></script>
<script src="{{ asset('back') }}/assets/js/typeahead/handlebars.js"></script>
<script src="{{ asset('back') }}/assets/js/typeahead/typeahead.bundle.js"></script>
<script src="{{ asset('back') }}/assets/js/typeahead/typeahead.custom.js"></script>
<script src="{{ asset('back') }}/assets/js/typeahead-search/handlebars.js"></script>
<script src="{{ asset('back') }}/assets/js/typeahead-search/typeahead-custom.js"></script>
<!-- Plugins /Ends-->
<script src="{{ asset('back') }}/assets/js/height-equal.js"></script>

{{-- <script src="{{ asset('back') }}/assets/js/theme-customizer/customizer.js"></script> --}}
<script src="{{ asset('back') }}/assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@toastr_js()
@toastr_render()
<!-- Plugin used-->
@yield('js')
</body>

</html>