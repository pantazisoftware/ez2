@extends('frontend.layouts.app')

@section('title', __('Services'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-frontend.card>
                    <x-slot name="header">
                        @lang('Services')
                    </x-slot>

                    <x-slot name="body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Molestie ac feugiat sed lectus. Egestas diam in arcu cursus.
                            Vitae nunc sed velit dignissim sodales ut eu sem. Nibh praesent tristique magna sit amet purus
                            gravida quis. Tincidunt lobortis feugiat vivamus at augue. Mi quis hendrerit dolor magna eget
                            est lorem. Dapibus ultrices in iaculis nunc sed augue lacus viverra vitae. Ullamcorper malesuada
                            proin libero nunc consequat interdum varius. Tellus elementum sagittis vitae et leo duis ut diam
                            quam. Nisl pretium fusce id velit. Sed enim ut sem viverra aliquet.</p>

                        <p>Laoreet suspendisse interdum consectetur libero id. Duis ut diam quam nulla porttitor massa id
                            neque. Nullam eget felis eget nunc lobortis mattis aliquam faucibus. Tristique sollicitudin nibh
                            sit amet commodo. A erat nam at lectus urna duis convallis convallis. Commodo sed egestas
                            egestas fringilla phasellus faucibus scelerisque eleifend donec. Bibendum ut tristique et
                            egestas. Risus sed vulputate odio ut enim blandit volutpat maecenas. Lorem dolor sed viverra
                            ipsum nunc aliquet bibendum enim. Tristique sollicitudin nibh sit amet commodo. Ac felis donec
                            et odio pellentesque diam volutpat commodo sed. Quam quisque id diam vel. Massa tempor nec
                            feugiat nisl pretium fusce id. Consectetur purus ut faucibus pulvinar elementum integer enim
                            neque volutpat.</p>

                    </x-slot>
                </x-frontend.card>
            </div>
            <!--col-md-10-->
        </div>
        <!--row-->
    </div>
    <!--container-->
@endsection
