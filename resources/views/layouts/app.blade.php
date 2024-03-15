<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') . '-' . ($pageTitle ?? '') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset(AppConst::AGENT_FAVICON) }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset(AppConst::AGENT_JS . '/hyper-config.js') }}"></script>
    <!-- App css -->
    <!-- <link href="{{ asset(AppConst::AGENT_CSS . '/app-saas.min.css') }}" rel="stylesheet" type="text/css" id="app-style" /> -->
    <link href="{{ asset(AppConst::AGENT_CSS . '/main.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <link href="{{ asset(AppConst::AGENT_CSS . '/custom.css') }}" rel="stylesheet" type="text/css" id="custome-style" />

    <!-- Icons css -->
    <link href="{{ asset(AppConst::AGENT_CSS . '/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@ryangjchandler/alpine-tooltip@1.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/dist/tippy.css" />
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <!-- Styles -->
    @livewireStyles
    @vite(['resources/js/app.js', 'resources/js/emoji-button.js'])
    <script src="{{ asset(AppConst::AGENT_JS . '/vendor.min.js') }}"></script>
    @stack('below_css')
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        @livewire('common.header')

        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        @livewire('common.left-navigation')
        <!-- ========== Left Sidebar End ========== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    {{ $slot }}
                </div>
                <!-- container -->

            </div>



            <!-- Footer Start -->
            @livewire('common.footer')
            <!-- end Footer -->
            <!-- content -->
        </div>

    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->



    <script src="{{ asset(AppConst::AGENT_JS . '/app.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js "></script>
    <script src="{!! asset(AppConst::AGENT_JS . '/custom/custom.js') !!}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.min.js"
        integrity="sha512-P2W2rr8ikUPfa31PLBo5bcBQrsa+TNj8jiKadtaIrHQGMo6hQM6RdPjQYxlNguwHz8AwSQ28VkBK6kHBLgd/8g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset(AppConst::AGENT_JS . '/quill-image-resize.js') }}"></script>
    <script src="{{ asset(AppConst::AGENT_JS . '/quill-mentions.js') }}"></script>
    <link href="
https://cdn.jsdelivr.net/npm/quill-mention@4.1.0/dist/quill.mention.min.css
" rel="stylesheet">
    @livewireScriptConfig
    @stack('below_script')




</body>

</html>
