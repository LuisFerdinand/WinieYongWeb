@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-[1440px] mx-auto">
        <div class="bg-white shadow-xl rounded-lg overflow-hidden">
            <div class="bg-gradient-to-r from-teal-500 to-teal-600 p-6">
                <h1 class="text-4xl font-extrabold text-white mb-2">Admin Dashboard</h1>
                <p class="text-blue-100">Welcome, {{ Auth::user()->name }}!</p>
            </div>

            <div class="p-6">
                <!-- Total Products Count -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-blue-50 border-l-4 border-teal-500 p-6 rounded-lg shadow">
                        <h2 class="text-lg font-semibold text-gray-600 mb-2">Total Products</h2>
                        <p class="text-3xl font-bold text-teal-600">{{ $totalProductsCount }}</p>
                    </div>
                </div>

                <!-- Product Clicks Overview -->
                <div class="bg-white shadow rounded-lg overflow-hidden mb-8">
                    <div class="bg-gray-100 px-6 py-4 border-b">
                        <h2 class="text-xl font-semibold text-gray-800">Product Clicks Overview</h2>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">Product Name</th>
                                    <th class="py-3 px-6 text-left">Total Click Count</th>
                                    <th class="py-3 px-6 text-left">Clicks per Day</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                @foreach($productClicks as $click)
                                <tr class="border-b border-gray-200 hover:bg-gray-100 transition">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="font-medium">{{ $click['product_name'] }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <span class="bg-blue-200 text-blue-600 py-1 px-3 rounded-full text-xs">
                                            {{ $click['click_count'] }}
                                        </span>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        @if($click['clicks_per_day'])
                                        <ul class="space-y-1">
                                            @php
                                            $clicksPerDay = json_decode($click['clicks_per_day'], true);
                                            $lastThreeClicks = array_slice($clicksPerDay, -3, 3, true);
                                            @endphp
                                            @foreach($lastThreeClicks as $day => $count)
                                            <li class="text-sm text-gray-500">
                                                <span class="font-semibold text-gray-700">{{ $day }}:</span>
                                                <span class="bg-green-100 text-green-600 px-2 rounded-full text-xs">{{ $count }} clicks</span>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @else
                                        <span class="text-gray-400 italic">No data available</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Product Clicks Graph -->
                <div class="bg-white shadow rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Total Product Clicks</h2>
                    <div id="totalClicksChart" class="h-96 w-full"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Data for total clicks chart
        var totalProductClicks = (@json($totalProductClicks));
        var totalRentalClicks = (@json($totalRentalClicks));

        // Product Clicks Chart
        var productOptions = {
            chart: {
                type: 'bar',
                height: 350,
                toolbar: {
                    show: false
                }
            },
            series: [{
                name: 'Total Clicks',
                data: totalProductClicks.map(click => click.total_clicks)
            }],
            xaxis: {
                categories: totalProductClicks.map(click => click.product_name),
                title: {
                    text: 'Product Name',
                    style: {
                        fontSize: '12px',
                        color: '#6b7280'
                    }
                },
                labels: {
                    rotate: 0,
                    rotateAlways: true,
                    style: {
                        colors: '#6b7280'
                    }
                }
            },
            yaxis: {
                title: {
                    text: 'Total Click Count',
                    style: {
                        fontSize: '12px',
                        color: '#6b7280'
                    }
                },
                labels: {
                    style: {
                        colors: '#6b7280'
                    }
                }
            },
            title: {
                text: 'Total Clicks per Product',
                align: 'left',
                style: {
                    fontSize: '16px',
                    color: '#4b5563'
                }
            },
            colors: ['#0f766e'],
            fill: {
                type: 'solid',
            },
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    horizontal: false,
                    columnWidth: '45%',
                }
            },
            grid: {
                show: true,
                borderColor: '#e5e7eb',
                strokeDashArray: 7,
                padding: {
                    left: 0,
                    right: 0
                }
            }
        };

        var productChart = new ApexCharts(document.querySelector("#totalClicksChart"), productOptions);
        productChart.render();

        // Rental Clicks Chart (Similar styling applied)
        var rentalOptions = {
            ...productOptions,
            series: [{
                name: 'Total Clicks',
                data: totalRentalClicks.map(click => click.total_clicks)
            }],
            xaxis: {
                ...productOptions.xaxis,
                categories: totalRentalClicks.map(click => click.rental_name)
            },
            title: {
                ...productOptions.title,
                text: 'Total Clicks per Rental'
            }
        };

        var rentalChart = new ApexCharts(document.querySelector("#rentalClicksChart"), rentalOptions);
        rentalChart.render();
    });
</script>
@endsection