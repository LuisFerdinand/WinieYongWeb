@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Admin Dashboard</h1>
    <p>Welcome to the admin dashboard, {{ Auth::user()->name }}!</p>

    <!-- Product Clicks Overview -->
    <div class="mt-8">
        <h2 class="text-xl font-semibold mb-4">Product Clicks Overview</h2>
        <table class="min-w-full bg-white border border-gray-300 mb-8">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="py-2 px-4 border-b">Product Name</th>
                    <th class="py-2 px-4 border-b">Total Click Count</th>
                    <th class="py-2 px-4 border-b">Clicks per Day</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productClicks as $click)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $click['product_name'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $click['click_count'] }}</td>
                    <td class="py-2 px-4 border-b">
                        @if($click['clicks_per_day'])
                        <ul>
                            @php
                            $clicksPerDay = json_decode($click['clicks_per_day'], true);
                            $lastThreeClicks = array_slice($clicksPerDay, -3, 3, true);
                            @endphp
                            @foreach($lastThreeClicks as $day => $count)
                            <li>{{ $day }}: {{ $count }} clicks</li>
                            @endforeach
                        </ul>
                        @else
                        No data available
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Product Clicks Graph -->
        <div class="mt-8">
            <h2 class="text-xl font-semibold mb-4">Total Product Clicks</h2>
            <div id="totalClicksChart" class="h-96"></div>
        </div>
    </div>

    <!-- Rental Clicks Overview -->
    <div class="mt-8">
        <h2 class="text-xl font-semibold mb-4">Rental Clicks Overview</h2>
        <table class="min-w-full bg-white border border-gray-300 mb-8">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="py-2 px-4 border-b">Rental Name</th>
                    <th class="py-2 px-4 border-b">Total Click Count</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rentalClicks as $click)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $click['rental_name'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $click['click_count'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Rental Clicks Graph -->
        <div class="mt-8">
            <h2 class="text-xl font-semibold mb-4">Total Rental Clicks</h2>
            <div id="rentalClicksChart" class="h-96"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Data for total clicks chart
            var totalProductClicks = (@json($totalProductClicks));
            var totalRentalClicks = (@json($totalRentalClicks));

            console.log(totalProductClicks);
            console.log(totalRentalClicks);
            // Product Clicks Chart
            var productOptions = {
                chart: {
                    type: 'bar',
                    height: 350
                },
                series: [{
                    name: 'Total Clicks',
                    data: totalProductClicks.map(click => click.total_clicks)
                }],
                xaxis: {
                    categories: totalProductClicks.map(click => click.product_name),
                    title: {
                        text: 'Product Name'
                    }
                },
                yaxis: {
                    title: {
                        text: 'Total Click Count'
                    }
                },
                title: {
                    text: 'Total Clicks per Product',
                    align: 'left'
                },
                colors: ['#60A5FA'],
                fill: {
                    type: 'solid',
                },
                grid: {
                    padding: {
                        left: 0,
                        right: 0
                    }
                }
            };

            var productChart = new ApexCharts(document.querySelector("#totalClicksChart"), productOptions);
            productChart.render();

            // Rental Clicks Chart
            var rentalOptions = {
                chart: {
                    type: 'bar',
                    height: 350
                },
                series: [{
                    name: 'Total Clicks',
                    data: totalRentalClicks.map(click => click.total_clicks)
                }],
                xaxis: {
                    categories: totalRentalClicks.map(click => click.rental_name),
                    title: {
                        text: 'Rental Name'
                    }
                },
                yaxis: {
                    title: {
                        text: 'Total Click Count'
                    }
                },
                title: {
                    text: 'Total Clicks per Rental',
                    align: 'left'
                },
                colors: ['#60A5FA'],
                fill: {
                    type: 'solid',
                },
                grid: {
                    padding: {
                        left: 0,
                        right: 0
                    }
                }
            };

            var rentalChart = new ApexCharts(document.querySelector("#rentalClicksChart"), rentalOptions);
            rentalChart.render();
        });
    </script>
</div>
@endsection