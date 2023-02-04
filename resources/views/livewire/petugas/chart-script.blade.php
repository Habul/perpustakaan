<script>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                @foreach ($tanggal_pengembalian as $item)
                    {{ $item }},
                @endforeach
            ],
            datasets: [{
                label: 'Selesai Dipinjam',
                data: [
                    @foreach ($count as $item)
                        {{ $item }},
                    @endforeach
                ],
                backgroundColor: '#f012be',
                borderColor: '#27ae60',
                pointRadius: false,
                pointColor: '#27ae60',
                pointStrokeColor: '#c1c7d1',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
            }]
        },
        options: {
            responsive: true,
            events: ['mouseout', 'touchstart', 'touchmove'],
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    Livewire.on('ubahBulanTahun', (count, tanggal_pengembalian) => {
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: tanggal_pengembalian,
                datasets: [{
                    label: 'Selesai Dipinjam',
                    data: count,
                    backgroundColor: '#f012be',
                    borderColor: '#27ae60',
                    pointRadius: false,
                    pointColor: '#27ae60',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                }]
            },
            options: {
                responsive: true,
                events: ['mouseout', 'touchstart', 'touchmove'],
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    })
</script>
