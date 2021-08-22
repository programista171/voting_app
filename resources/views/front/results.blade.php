@extends('layouts.app1')

@section('content')
<h2>Wyniki głosowania</h2>
<canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue"],
        datasets: [{
            label: 'Which color do you like?',
            data: [12, 19],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'
            ]
        }]
    }
});
</script>
@endsection