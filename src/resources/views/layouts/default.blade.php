@extends('rek::layouts.base')
@section('styles')
    <style>
        .color-primary {
            color: #F12F14;
        }

        .color-secondary {
            color: #DA0718;
        }

        .color-highlight {
            color: #F90894;
        }

        .font-large {
            font-size: 1.5rem;
        }

        [class*=font-nunito] {
            font-family: Nunito, sans-serif;
        }

        .font-nunito {
            font-weight: 300;
        }

        .font-nunitobold {
            font-family: Nunito, sans-serif;
            font-weight: 400;
        }

        .font-nunitoblack {
            font-family: Nunito, sans-serif;
            font-weight: 700;
        }

        .text-uppercase {
            text-transform: uppercase;
        }

        #app-header {
            background-color: transparent;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
            width: 100%;
            opacity: 1;
            transition: all 0.4s ease;
        }

        #app-intro {
            background-color: #334458;
            background-image: url(https://cdn.joejiko.com/img/rek/florida-2499026_1920.jpg);
            background-position: 0 20%;
            background-size: cover;
            color: #fff;
            min-height: 800px;
        }
        .link-contact a, .link-contact .fa {
            color: #fff;
        }
    </style>
@stop
@section('body')
    <div id="app" class="fluid-container">
        <header id="app-header" data-role="header">
            <div id="app-brand" style="padding: 1rem 0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h4 class="font-nunitoblack text-uppercase"
                                style="background-color:#F12F14; display: inline-block; padding: 0 2rem; line-height: 3rem; color: #fff;">
                                Rek Consulting</h4>
                        </div>
                        <div class="col">
                            <div class="text-right link-contact"  style="line-height: 3rem;">
                                <span class="fa fa-envelope"></span> <a href="mailto:dwreck@rekconsult.com">dwreck@rekconsult.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section id="app-intro">
            <div class="container" style="padding-top: 120px;">
                <div class="row text-center" style="padding: 60px 0">
                    <div class="col-12">
                        <h1>Start your plan today!</h1>
                    </div>
                    <div class="col-12 text-center" style="padding: 30px 0 0">
                        <div style="display:inline-block; background: rgba(255,255,255,.8); padding: 15px 0 15px 30px;">
                            <div style="display: inline-block">
                                <img style="max-height: 75px;" src="//cdn.joejiko.com/img/rek/bmc_logo_RGB.png">
                            </div>

                            <div style="display: inline-block">
                                <img src="//cdn.joejiko.com/img/rek/request-logo%402x.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div style="margin-top: 60px; font-size: 2rem; padding: 1rem 2rem; background: rgba(218,17,24,.6); font-weight: 400;">
                            Quick, Quality, & Reliable Remedy Consultation.
                        </div>
                        <p style="font-size: 1.5rem; padding: 1rem 2rem;">(Not the mangled train wreck you're used
                            to.)</p>
                    </div>
                </div>

            </div>
        </section>
        <section id="app-main" data-role="main" class="container">
            <div id="app-content" role="content" class="row">
                <div class="col">
                    {!! $content !!}
                </div>
                <div class="col" hidden>
                    <div class="row">
                        <div class="col-md-6 pull-right text-right">
                            <a href="//www.joejiko.com" style="opacity:.3" title="website by jiko">
                                <img src="//cdn.joejiko.com/img/shared/logo.svg"
                                     width="48px" height="auto"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop