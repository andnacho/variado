@extends('master')

@section('contenido')

    <form action="/carga" method="POST">
        @csrf

        <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="{{env('STRIPE_KEY')}}"
            data-amount="500"
            data-name="test"
            data-description="Test Suscription"
            data-locale="auto"
            data-zip-code="false">
    </script>
</form>

@endsection
