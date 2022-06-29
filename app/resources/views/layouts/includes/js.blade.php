<script src="{!! asset('js/jquery-3.6.0.min.js') !!}"></script>
<script src="{!! asset('plugins/common/common.min.js') !!}"></script>
<script src="{!! asset('js/custom.min.js') !!}"></script>
<script src="{!! asset('js/settings.js') !!}"></script>
<script src="{!! asset('js/gleek.js') !!}"></script>
<script src="{!! asset('js/styleSwitcher.js') !!}"></script>
<script src="{!! asset('js/layout.js') !!}"></script>
<script src="{!! asset('plugins/validation/jquery.validate.min.js') !!}"></script>
<script src="{!! asset('plugins/validation/jquery.validate-init.js') !!}"></script>
<script src="{!! asset('plugins/validation/jquery.validate-pt-br.js') !!}"></script>
<script src="https://kit.fontawesome.com/5ae70752eb.js" crossorigin="anonymous"></script>

<!-- Chartjs -->
<script src="{!! asset('plugins/chart.js/Chart.bundle.min.js') !!}"></script>
<!-- Circle progress -->
<script src="{!! asset('plugins/circle-progress/circle-progress.min.js') !!}"></script>
<!-- Datamap -->
<script src="{!! asset('plugins/d3v3/index.js') !!}"></script>
<script src="{!! asset('plugins/topojson/topojson.min.js') !!}"></script>
<script src="{!! asset('plugins/datamaps/datamaps.world.min.js') !!}"></script>
<!-- Morrisjs -->
<script src="{!! asset('plugins/raphael/raphael.min.js') !!}"></script>
<script src="{!! asset('plugins/morris/morris.min.js') !!}"></script>
<!-- Pignose Calender -->
<script src="{!! asset('plugins/moment/moment.min.js') !!}"></script>
<script src="{!! asset('plugins/pg-calendar/js/pignose.calendar.min.js') !!}"></script>
<!-- ChartistJS -->
<script src="{!! asset('plugins/chartist/js/chartist.min.js') !!}"></script>
<script src="{!! asset('plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') !!}"></script>


{{--<script src="{!! asset('js/dashboard/dashboard-1.js') !!}"></script>--}}


@yield('myjsfile')

@yield('scripts')

@stack('script_stack')
