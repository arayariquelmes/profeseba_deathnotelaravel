@extends("layouts.master", ["pagina"=>"ver_causas"])
@section("contenido")
    <h1>Hola Ver Causas</h1>
@endsection
@section("javascript")
    <script src="{{asset('js/services/causas_services.js')}}"></script>
    <script src="{{asset('js/ver_causas.js')}}"></script>
@endsection
