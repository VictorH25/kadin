@extends('adminlte::page')

@section('title', 'Painel de controle')

@section('content_header')
    <h1>Painel de controle</h1>
@stop

@section('content')
    <div id="cards-status" class="row">
        <div class="col-lg-4 col-12">
            <div class="small-box bg-success">
                <div class="inner">
                <h3>R$: {{number_format($order_day, 2, ',', '.')}}</h3>
                    <p>Dia</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="small-box bg-info">
                <div class="inner">
                <h3>R$: {{number_format($order_week, 2, ',', '.')}}</h3>
                    <p>Semana</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>R$: {{number_format($order_month, 2, ',', '.')}}</h3>
                    <p>Mês</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </div>
        </div>
        <div class="col-12">
            <canvas id="myChart"></canvas>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script>
        const ctx = document.getElementById('myChart');
        var fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"

        ];
new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
    datasets: [{
      label: 'Numeros de venda por mês',
      data: [{{ $salesByMonth }}],
      backgroundColor: fillColors,
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
</script>
@stop
