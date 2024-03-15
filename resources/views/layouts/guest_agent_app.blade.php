<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset(AppConst::AGENT_FAVICON) }}">

    <script src="{{ asset(AppConst::AGENT_JS . '/hyper-config.js') }}"></script>
    <!-- App css -->
    <link href="{{ asset(AppConst::AGENT_CSS . '/app-saas.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{ asset(AppConst::AGENT_CSS . '/custom.css') }}" rel="stylesheet" type="text/css" id="custome-style" />

    <!-- Icons css -->
    <link href="{{ asset(AppConst::AGENT_CSS . '/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Styles -->
    @livewireStyles
    @vite(['resources/js/app.js'])
    @stack('below_css')
</head>

<body class="authentication-bg position-relative login-bg">

    <div class="account-pages pt-3  pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            {{ $slot }}
        </div>
        <!-- end container -->
    </div>


    <x-agent.general.alerts />


    <script src="{{ asset(AppConst::AGENT_JS . '/vendor.min.js') }}"></script>


    <script src="{{ asset(AppConst::AGENT_JS . '/app.min.js') }}"></script>
    @livewireScriptConfig
    @stack('below_script')


</body>

</html>
